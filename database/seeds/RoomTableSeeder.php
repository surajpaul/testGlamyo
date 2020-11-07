<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfRooms = DB::table('rooms')->count();

        if($numberOfRooms == 0)
        {
        	DB::table('rooms')->insert(
        		[
                    [
                    	'name' => 'Single Private',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Double Sharing',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'General Ward',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ]
                ]
        	);
    	}
    }
}
