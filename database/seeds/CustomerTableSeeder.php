<?php

use Illuminate\Database\Seeder;
//use Faker\Generator as Faker;
use Faker\Factory as FKR;
Use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$faker = FKR::create('App/Customer');
        $faker = FKR::create();
        foreach (range(1,10) as $index) {
	        DB::table('Customer')->insert([
	            'personal_identity_number' => $faker->personalIdentityNumber,
	            'first_name' => $faker->firstNameMale,
                'last_name' => $faker->lastName,
                'phone' => $faker->phoneNumber, 
                'email' => $faker->email, 
            ]);
        }
    }
}
