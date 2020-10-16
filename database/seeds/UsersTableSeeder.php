<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfUsers = DB::table('users')->count();

        if($numberOfUsers == 0)
        {
            DB::table('users')->insert(
                [
                    [
                    	'role_id' => 1,
                        'name' => 'Admin',
                        'city' => 'New Delhi',
                        'email' => 'admin@glamyo.in',
                        'phone' => '1234567890',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                    	'role_id' => 2,
                        'name' => 'Doctor',
                        'city' => 'New Delhi',
                        'email' => 'doctor@glamyo.in',
                        'phone' => '1234567891',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                    	'role_id' => 3,
                        'name' => 'Hospital',
                        'city' => 'New Delhi',
                        'email' => 'hospital@glamyo.in',
                        'phone' => '1234567892',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                    	'role_id' => 4,
                        'name' => 'User',
                        'city' => 'New Delhi',
                        'email' => 'user@glamyo.in',
                        'phone' => '1234567893',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ] 
                ]
            );
        }
    }
}
