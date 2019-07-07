#!/usr/bin/env bash

export MY_UID=$UID
source ./.env

cmd="$1"
shift 1
args=$@
end_msg=""

docker_bin="docker-compose"
docker_cmd="$docker_bin"
default_service="php"
services_network=${D_SERVICES_NETWORK:-wax-microservices}

# if the $CMD is not a built-in command, assume it's something to be executed in the php container
subcommands=('build' 'bundle' 'config' 'create' 'down' 'events' 'exec' 'help' 'images' 'kill' 'logs' 'pause' 'port' 'ps' 'pull' 'push' 'restart' 'rm' 'run' 'scale' 'start' 'stop' 'top' 'unpause' 'up' 'version')
[[ ! " ${subcommands[@]} " =~ " ${cmd} " ]] && docker_cmd="$docker_bin exec -u $UID $default_service"

# Check network
check_network() {
    if [[ ! $(docker network ls | grep "$services_network") ]]; then
        echo -n "Creating network $services_network ... "
        docker network create --driver bridge $services_network > /dev/null
        echo -e "\e[32mdone\e[0m"
    fi
}

# Check network for the following commands
[[ $cmd = "start" || $cmd = "up" ]] && check_network

# Custom commands
[[ $cmd = "start" ]] && cmd="up -d" && end_msg="Server started @ http://localhost:$D_WEB_PORT"
[[ $cmd = "stop" ]] && cmd="down"
[[ $cmd = "art" ]] && cmd="php artisan"
[[ $cmd = "swagger" ]] && cmd="php vendor/bin/openapi --output storage/app/swagger/swagger.json --exclude vendor --exclude tests --exclude storage ./bootstrap/app.php ./app ./vendor/utilities/php-general-tools/src/Models/"
[[ $cmd = "redis" ]] && docker_cmd="$docker_bin exec redis" && cmd="redis-cli"
if [[ $cmd = "test" ]]; then
    cmd="php vendor/bin/phpunit"
    grep -sq LarastanServiceProvider::class bootstrap/app.php && cmd="bash -c 'php artisan code:analyse && $cmd'"
fi

eval $docker_cmd $cmd $args

[[ ! -z $end_msg ]] && echo -e \\n$end_msg
