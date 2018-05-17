<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $Company = new \App\Company();
        $Company->NIT = '123.456.789 - 0.';
        $Company->name = 'LaShaviCorp';
        $Company->address = 'Calle fala 123';
        $Company->phone = '300 1234567';
        $Company->email = 'lashavicopr@lachavicopr.com';
        $Company->logo_url = '';
        $Company->description = 'Compañía majestuosa e increíble que dominara el mundo';
        $Company->save();       
    }
}
