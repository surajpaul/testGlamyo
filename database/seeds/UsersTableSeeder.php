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
                    ],
                    // Adding doctors
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Gautam Banga',
                        'city' => 'New Delhi',
                        'email' => 'gautambanga@glamyo.in',
                        'phone' => '9999062316',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Kapil Aggarwal',
                        'city' => 'New Delhi',
                        'email' => 'kapilaggarwal@glamyo.in',
                        'phone' => '9910024564',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Nikunj Bansal',
                        'city' => 'New Delhi',
                        'email' => 'nikunjbansal@glamyo.in',
                        'phone' => '7503036265',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Ashish Kumar',
                        'city' => 'New Delhi',
                        'email' => 'ashishkumar@glamyo.in',
                        'phone' => '9898449506',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Ashit Gupta',
                        'city' => 'New Delhi',
                        'email' => 'ashitgupta@glamyo.in',
                        'phone' => '9560578166',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Ashwani Kumar',
                        'city' => 'New Delhi',
                        'email' => 'ashwanikumar@glamyo.in',
                        'phone' => '9681078856',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Jotinder Khanna',
                        'city' => 'New Delhi',
                        'email' => 'jotinderkhanna@glamyo.in',
                        'phone' => '9958233447',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Nishant Chajjer',
                        'city' => 'New Delhi',
                        'email' => 'nishantchajjer@glamyo.in',
                        'phone' => '9560530607',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Raj Kumar Singh',
                        'city' => 'New Delhi',
                        'email' => 'rajkumarsingh@glamyo.in',
                        'phone' => '9999337060',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Sushant Wadhera',
                        'city' => 'New Delhi',
                        'email' => 'sushantwadhera@glamyo.in',
                        'phone' => '9718353256',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Gautham SL',
                        'city' => 'Bangalore',
                        'email' => 'gautham@glamyo.in',
                        'phone' => '9972195354',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Amit Bansal',
                        'city' => 'Bangalore',
                        'email' => 'amitbansal@glamyo.in',
                        'phone' => '8146144255',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Pawan Murdeshwar',
                        'city' => 'Bangalore',
                        'email' => 'pawanmurdeshwar@glamyo.in',
                        'phone' => '8147488479',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Pavitra Dosajh',
                        'city' => 'New Delhi',
                        'email' => 'pavitradosajh@glamyo.in',
                        'phone' => '9958149126',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Akhil Garg',
                        'city' => 'New Delhi',
                        'email' => 'akhilgarg@glamyo.in',
                        'phone' => '9873378331',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Nayan',
                        'city' => 'Bangalore',
                        'email' => 'nayan@glamyo.in',
                        'phone' => '8971107940',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'shirbur',
                        'city' => 'Bangalore',
                        'email' => 'shirbur@glamyo.in',
                        'phone' => '9448972509',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Marutesh',
                        'city' => 'Bangalore',
                        'email' => 'marutesh@glamyo.in',
                        'phone' => '7899121515',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Gaurav Bansal',
                        'city' => 'New Delhi',
                        'email' => 'gauravbansal@glamyo.in',
                        'phone' => '9910031911',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Bikram Singh',
                        'city' => 'New Delhi',
                        'email' => 'bikramsingh@glamyo.in',
                        'phone' => '8683975400',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Munishekhar Reddy',
                        'city' => 'Bangalore',
                        'email' => 'munishekharreddy@glamyo.in',
                        'phone' => '9346496802',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Nayeem Ahmed',
                        'city' => 'New Delhi',
                        'email' => 'nayeemahmed@glamyo.in',
                        'phone' => '9891740801',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Mangesh Kamath',
                        'city' => 'Bengaluru',
                        'email' => 'mangeshkamath@glamyo.in',
                        'phone' => '9900587736',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Ashu Banal',
                        'city' => 'New Delhi',
                        'email' => 'ashubanal@glamyo.in',
                        'phone' => '7011389492',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Gaurav Shrivastava',
                        'city' => 'New Delhi',
                        'email' => 'gauravshrivastava@glamyo.in',
                        'phone' => '9717333900',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Rohit juneja',
                        'city' => 'New Delhi',
                        'email' => 'rohitjuneja@glamyo.in',
                        'phone' => '7387737347',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Anil Kamath',
                        'city' => 'Bengaluru',
                        'email' => 'anilkamath@glamyo.in',
                        'phone' => '9611106700',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Rahul Dev',
                        'city' => 'New Delhi',
                        'email' => 'rahuldev@glamyo.in',
                        'phone' => '9810438883',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 2,
                        'name' => 'Dr. Satyaki Banerjee',
                        'city' => 'New Delhi',
                        'email' => 'satyakibanerjee@glamyo.in',
                        'phone' => '8412460297',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],











                    // hospital
                    [
                        'role_id' => 3,
                        'name' => 'Medstar Hospital',
                        'city' => 'New Delhi',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'IBS Hospital - Institute of Brain & Spine',
                        'city' => 'New Delhi',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Sama Hospital',
                        'city' => 'New Delhi',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Sunrise Hospital',
                        'city' => 'New Delhi',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Phoenix Hospital Delhi',
                        'city' => 'New Delhi',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'SCI Hospital',
                        'city' => 'New Delhi',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Aashlok Hospital',
                        'city' => 'New Delhi',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'UPHI The Wellness & Surgical Centre',
                        'city' => 'Gurugram',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'CK Birla Hospital',
                        'city' => 'Gurugram',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Center of Diabetes and Allied Sciences',
                        'city' => 'Gurugram',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Dipakshi Hospital',
                        'city' => 'Noida',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Bensups Hospital',
                        'city' => 'New Delhi',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Swasthyam Clinic',
                        'city' => 'Gurugram',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Apollo Spectra',
                        'city' => 'New Delhi',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Healios Clinic Jayanagar',
                        'city' => 'Bengaluru',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Aveksha Hospital',
                        'city' => 'Bengaluru',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Phoenix Hospital Bengaluru',
                        'city' => 'Bengaluru',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'RMV Hospital',
                        'city' => 'Bengaluru',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Health India Hospital',
                        'city' => 'Bengaluru',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Sai Multispeciality clinic',
                        'city' => 'Bengaluru',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Sparsh Hospital',
                        'city' => 'Bengaluru',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Surgeon Gowda Gastro & Laparoscopy Centre',
                        'city' => 'Bengaluru',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Lexinia Laser Clinic',
                        'city' => 'Bengaluru',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Eden Hospital',
                        'city' => 'New Delhi',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Lotus Gynecare Clinic',
                        'city' => 'New Delhi',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Koshys Multi Specialty Hospital',
                        'city' => 'Bengaluru',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Oncology India,  JP Nagar',
                        'city' => 'Bengaluru',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Healios Clinic Indiranagar',
                        'city' => 'Bengaluru',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Dr Tulip Centre Bengaluru',
                        'city' => 'Bengaluru',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Apollo Hospitals Bannerghatta',
                        'city' => 'Bengaluru',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Tripathi Hospital',
                        'city' => 'Noida',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 3,
                        'name' => 'Madalasa Hospital',
                        'city' => 'New Delhi',
                        'email' => '',
                        'phone' => '',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],



                    //  User
                    [
                        'role_id' => 4,
                        'name' => 'Gaurav sharma',
                        'city' => 'New Delhi',
                        'email' => 'gaurav@glamyo.in',
                        'phone' => '9582365822',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 4,
                        'name' => 'Hitesh',
                        'city' => 'New Delhi',
                        'email' => 'hitesh@glamyo.in',
                        'phone' => '9654928077',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 4,
                        'name' => 'Siddharth Saha',
                        'city' => 'New Delhi',
                        'email' => 'siddharth@glamyo.in',
                        'phone' => '9560464796',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 4,
                        'name' => 'Adnan',
                        'city' => 'New Delhi',
                        'email' => 'adnan@glamyo.in',
                        'phone' => '8968345637',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 4,
                        'name' => 'Sahil Saifi',
                        'city' => 'New Delhi',
                        'email' => 'sahil@glamyo.in',
                        'phone' => '8950192774',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 4,
                        'name' => 'Shantu',
                        'city' => 'Bangalore',
                        'email' => 'shantanu@glamyo.in',
                        'phone' => '8508666660',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 4,
                        'name' => 'Nizam',
                        'city' => 'New Delhi',
                        'email' => 'nizam@glamyo.in',
                        'phone' => '8923775866',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 4,
                        'name' => 'Deepak',
                        'city' => 'New Delhi',
                        'email' => 'deepak@glamyo.in',
                        'phone' => '9650864606',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 4,
                        'name' => 'Divyansh',
                        'city' => 'New Delhi',
                        'email' => 'divyansh@glamyo.in',
                        'phone' => '7618801162',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'role_id' => 4,
                        'name' => 'Suraj Paul',
                        'city' => 'New Delhi',
                        'email' => 'suraj@glamyo.in',
                        'phone' => '8076043823',
                        'password' => bcrypt('test1234'),
                        'created_at' => now(),
                        'updated_at' => now()
                    ]
                ]
            );
        }
    }
}
