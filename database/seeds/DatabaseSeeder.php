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
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(InfoTableSeeder::class);
        $this->call(RoomTableSeeder::class);
        $this->call(TreatmentTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
    }
}
