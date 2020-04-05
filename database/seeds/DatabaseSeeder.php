<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(WorkingHoursTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(AppointmentsTableSeeder::class);
    }
}
