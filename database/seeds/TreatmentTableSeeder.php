<?php

use Illuminate\Database\Seeder;

class TreatmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfTreatments = DB::table('treatments')->count();

        if($numberOfTreatments == 0)
        {
        	DB::table('treatments')->insert(
        		[
                    [
                    	'name' => 'General Specialist',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Piles',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Phimosis',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Hydrocele',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Varicocele',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Prostate',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Lasik',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Botox',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Laser Hair Removal',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'IVF',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Rhinoplasty',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Abdominoplasty',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],[
                    	'name' => 'Blephroplasty',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Kidney Stone',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Gallstone',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Hernia',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Gynaecomastia',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Varicose Veins',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Fissure',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Fistula',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Pilonidal sinus',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Knee replacement',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Rectal Prolapse',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Piles + Fissure',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                ]
        	);
    	}
    }
}
