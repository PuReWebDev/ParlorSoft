build: start composer-install migrate-up swagger test
rebuild: stop start composer-install #sleep migrate-up test

start:
	./docker.sh start

sleep:
	sleep 3
stop:
	./docker.sh stop

composer-install:
	./docker.sh composer install

migrate-up:
	./docker.sh art migrate

migrate-down:
	./docker.sh art migrate:rollback

test:
	./docker.sh test

analyse:
	docker-compose exec php vendor/bin/phpstan analyse ./

analyse-max:
	docker-compose exec php vendor/bin/phpstan analyse ./ --level max

test-all: analyse test

swagger:
	docker-compose exec php php artisan swagger:generate
