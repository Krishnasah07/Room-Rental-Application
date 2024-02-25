 <?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product;

        $product->landlord_id = "2";
        $product->category_id = "1";
        $product->location  = "Birgunj";
        $product->hall = "1";
        $product->room = "5";
        $product->kitchen = "1";
        $product->bathroom = "1";
        $product->price = "7000";
        $product->status = "1";     
        $product->phone = "9825252525";
        $product->Description = "In a corner, a desk adorned with a scattering of pens, notebooks, and a vintage lamp serves as a dedicated space for creativity and productivity.";
        $product->image = 'https://www.thespruce.com/thmb/2_Q52GK3rayV1wnqm6vyBvgI3Ew=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/put-together-a-perfect-guest-room-1976987-hero-223e3e8f697e4b13b62ad4fe898d492d.jpg';
        $product->image2 = 'https://images.pexels.com/photos/271816/pexels-photo-271816.jpeg?cs=srgb&dl=pexels-pixabay-271816.jpg&fm=jpg';
        $product->image3 = 'https://www.shutterstock.com/image-photo/blue-room-living-interior-decoration-260nw-1083296849.jpg';

        $product->save();
    }
}
