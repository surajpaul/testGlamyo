<?php

use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfPayments = DB::table('payments')->count();

        if($numberOfPayments == 0)
        {
        	DB::table('payments')->insert(
        		[
                    [
                    	'name' => 'Cash',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Cashless',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Reimbursement',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ]
                ]
        	);
    	}
    }
}
