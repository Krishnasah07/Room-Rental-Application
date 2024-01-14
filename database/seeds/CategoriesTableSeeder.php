<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        'category_name' => 'Room on Rent',
        'type' => 'Room',
        'status' => '1'
    ]; 
    DB::table('categories')->insert($data);  
    }
}
