<?php

use Illuminate\Database\Seeder;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// doctor info
        $numberOfDoctorInfo = DB::table('doctor_infos')->count();
        if($numberOfDoctorInfo == 0)
        {
        	DB::table('doctor_infos')->insert(
        		[
                    [
                    	'doctor_id' => 2,
                    	'fee' => 500,
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 5,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 6,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 7,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 8,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 9,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 10,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 11,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 12,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 13,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 14,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 15,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 16,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 17,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 18,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 19,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 20,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 21,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 22,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 23,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 24,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 25,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 26,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 27,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 28,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 29,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 30,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 31,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 32,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'doctor_id' => 33,
                        'fee' => 500,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]
                ]
        	);
    	}

    	// hospital info
    	$numberOfHospitalInfo = DB::table('hospital_infos')->count();
        if($numberOfHospitalInfo == 0)
        {
        	DB::table('hospital_infos')->insert(
        		[
                    [
                    	'hospital_id' => 3,
                    	'address' => "new Delhi",
                    	'location' => 'test',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 34,
                        'address' => "Outer Ring Rd, Block A, Meera Bagh, Paschim Vihar, New Delhi, Delhi 110087",
                        'location' => 'https://maps.app.goo.gl/zUETgjxzzPoYWEH57',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],



                    [
                        'hospital_id' => 35,
                        'address' => "73, Ring Rd, Block L, Lajpat Nagar III, Sarojini Nagar, New Delhi, Delhi 110024",
                        'location' => 'https://maps.app.goo.gl/vJoLoiGaj2hiRQWm6',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 36,
                        'address' => "Sama Hospital, 8, Siri Fort Rd, New Delhi, Delhi 110049",
                        'location' => 'https://goo.gl/maps/GTM4q3HbCE1z1NWS9',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 37,
                        'address' => " F-1, Gate, No 2, Garden Ln, Kalindi Colony, New Delhi, Delhi 110065",
                        'location' => 'https://g.page/sunrisedelhi?share',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 38,
                        'address' => "E60-62, Block E, Hansraj Gupta Rd, Greater Kailash-1, Block E, Greater Kailash I, New Delhi, Delhi 110048",
                        'location' => 'https://goo.gl/maps/jdKETwXtQtQF9Bir9',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 39,
                        'address' => "M 4, Greater Kailash-1, M Block, part-1, Greater Kailash, New Delhi, Delhi 110048",
                        'location' => 'https://goo.gl/maps/RidRyhrVQd1R48Er8',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 40,
                        'address' => "Aashlok 25 AB, Safdarjung Enclave, New Delhi, Delhi 110029",
                        'location' => 'https://g.page/Aashlok-Hospitals?share',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 41,
                        'address' => "Plot No. 7 SP, Golf Course Road, next to Global Foyer Building, Sector 43, Gurugram, Haryana 122002",
                        'location' => 'https://g.page/UPHIHospital?share',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 42,
                        'address' => "Block J, CK Birla Hospital, Mayfield Garden, Sector 51, Gurugram, Haryana 122018",
                        'location' => 'https://g.page/CKBirlahospital?share',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 43,
                        'address' => "Malibu Town, Sector 47, Gurugram, Haryana 122018",
                        'location' => 'https://goo.gl/maps/WTGsK5QFNWU1azCR6',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 44,
                        'address' => "Udhayan Marg, NTPC Township, C Block, Sector 33, Noida, Uttar Pradesh 201307",
                        'location' => 'https://goo.gl/maps/C8ZVAVonXyuSxLSr5',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 45,
                        'address' => "Dwarka Sub-City, Sector 12 Dwarka, BENSUPS Avenue, New Delhi, Delhi 110075",
                        'location' => 'https://g.page/mybensups?share',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 46,
                        'address' => " No-2, Ardee City Rd, Block C, Ardee City, Sector 52, Gurugram, Haryana 122003",
                        'location' => 'https://goo.gl/maps/1M8LmEwSGecfjzeF7',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 47,
                        'address' => "A-19/A, Block A, Sector 19, near Kailash Colony Metro Station, Kailash Colony, New Delhi, Delhi 110048",
                        'location' => 'https://goo.gl/maps/M49iyWbiUyJLvFru6',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 48,
                        'address' => "1561 2nd Floor, E End Main Rd, Jayanagara 9th Block, Bengaluru, Karnataka 560069",
                        'location' => 'https://goo.gl/maps/4U57CNrN7xZjYTTK9',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 49,
                        'address' => "122, Varadharaja Nagar, Varadarajaswamy Layout, Singapura, Bengaluru, Karnataka 560097",
                        'location' => 'https://g.page/avekshahospital?share',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 50,
                        'address' => "1510, 19th Main Rd, Vanganahalli, 1st Sector, HSR Layout, Bengaluru, Karnataka 560102",
                        'location' => 'https://g.page/phoenixhospitalblr?share',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 51,
                        'address' => "No 138, RMV 2nd Stage, AECS Layout, Sanjay Nagar, Bengaluru, Karnataka 560094",
                        'location' => 'https://goo.gl/maps/bPpMBghotWbjNsYaA',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 52,
                        'address' => "7, 6th Cross Rd, Tavarekere, Chikka Adugodi, Brindavan Nagar, S.G. Palya, Bengaluru, Karnataka 560029",
                        'location' => 'https://goo.gl/maps/2krF7tcvTQ93Fku47',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 53,
                        'address' => "Arekere Main Rd, Sarvobhogam Nagar, Arekere, Bengaluru, Karnataka 560076",
                        'location' => 'https://g.page/sai-multispeciality-clinic?share',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 54,
                        'address' => "SPARSH Super Speciality Hospital, # 146, Infantry Rd, Karnataka 560001",
                        'location' => 'https://goo.gl/maps/HFEZQ63q9GjFZ71EA',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 55,
                        'address' => "No. 90 & 91, 6Th Cross, 80 Feet Rd, below Karnataka Bank, MCECHS Layout, Dr.Shivaram Karanth Nagar, Bengaluru, Karnataka 560077",
                        'location' => 'https://maps.app.goo.gl/GjR61Na3TRFnd6Qr5',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 56,
                        'address' => "#9/A, 3rd floor, 19th Main Rd, Sector 3, HSR Layout, Bengaluru, Karnataka 560102",
                        'location' => 'https://maps.app.goo.gl/VQduMZdfWcGw5cGY8',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 57,
                        'address' => "162, Raja Dhirsen Marg, B Block, East of Kailash, New Delhi, Delhi 110065",
                        'location' => 'https://goo.gl/maps/ECiU8jutCSjxtxB88',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 58,
                        'address' => "F3, 855 Niti Khand 1st, Swarn Jayanti Park Road, Presedium School Lane, Landmark: Opposite ATS Village And Orange County, Ghaziabad",
                        'location' => 'https://www.google.com/maps/dir//28.641308,77.363525',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 59,
                        'address' => "Raghavendra Circle, Thambu Chetty Palya Main Rd, Ramamurthy Nagar, Bengaluru, Karnataka 560016 080 4351 7700",
                        'location' => 'https://maps.app.goo.gl/93MVbcatvCUqqAP7A',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 60,
                        'address' => "741, Outer Ring Rd, KR Layout, JP Nagar Phase 6, J. P. Nagar, Bengaluru, Karnataka 560078",
                        'location' => 'https://maps.app.goo.gl/cUeZRRf3d1TNuCCv9',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 61,
                        'address' => "15/3 1st Floor Appareddy Palya, Indiranagar Double Rd, Bengaluru, Karnataka 560038",
                        'location' => 'https://g.page/healios-plastic-surgery-clinic?share',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 62,
                        'address' => "80 Feet Main Road, No.640, 12th Main Rd, 4th Block, Koramangala, Bengaluru, Karnataka 560034",
                        'location' => 'https://g.page/dr-tulip-s-obesity-diabetes-su?share',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 63,
                        'address' => "154, IIM, 11, Bannerghatta Main Rd, opposite Krishnaraju Layout, Krishnaraju Layout, Amalodbhavi Nagar, Naga, Bengaluru, Karnataka 560076",
                        'location' => 'https://maps.app.goo.gl/KNUk4Mt1kQmKWLk16',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 64,
                        'address' => "NH-1A, opposite to Udgam Pre School, Sector 119, Noida, Uttar Pradesh 201304",
                        'location' => 'https://g.page/tripathi-hospital?share',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hospital_id' => 65,
                        'address' => "Sector Main Road 3, Behind, Huda Market Road, Sector 46, Gurugram, Haryana 122001",
                        'location' => 'https://maps.app.goo.gl/DpxMxaikEY4uELea7',
                        'created_at' => now(),
                        'updated_at' => now()
                    ]
                ]
        	);
    	}
    }
}
