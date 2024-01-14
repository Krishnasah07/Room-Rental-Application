<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'category_id' => '1',
            'location' => 'Birgunj',
            'hall' => '1',
            'room' => '2',
            'kitchen' => '1',
            'bathroom' => '1',
            'image' => 'https://static.vecteezy.com/system/resources/thumbnails/028/246/009/small/colored-minimalis-living-room-design-simple-fictional-sophisticated-product-design-furniture-design-white-background-generative-ai-photo.jpg',
            'image2' => 'https://i.pinimg.com/originals/3c/38/82/3c3882deae3a6af315bf40c7b6058485.jpg',
            'image3' => 'https://thumbs.dreamstime.com/b/mock-up-poster-frame-modern-interior-background-living-room-scandinavian-style-d-render-mock-up-poster-frame-modern-interior-161161670.jpg',
            'price' => '3000',
            'status' => '1',
            'phone' => '9856354586'
        ]; 
        DB::table('products')->insert($data);  
    }
}
