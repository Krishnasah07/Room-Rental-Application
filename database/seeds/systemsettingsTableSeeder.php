<?php

use Illuminate\Database\Seeder;

class systemsettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Roomie',
            'slogan' => 'This is the platform where you will find best room for you.',
            'phone' => '9800000000',
            'email' => 'roomie@gmail.com',
            'address' => 'Ghantaghar,Birgunj'
        ]; 
        DB::table('systemsettings')->insert($data);      
    }
    
}
