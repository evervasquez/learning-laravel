<?php

use App\Core\Product\Product;
use App\Core\Picture\Picture;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5000; $i++) {
            $product = Product::create(array(
                'category_id' => $faker->numberBetween(1,12),
                'code' => $faker->ean13,
                'name' => $faker->name,
                'price' => $faker->randomFloat(2,30,150),
                'stock' => $faker->numberBetween(20,100),
                'condition' => $faker->numberBetween(1,2),
                'views' => 0,
                'description' => $faker->text
            ));

            for($i=0; $i< $faker->numberBetween(3,5); $i++){
                Picture::create(array(
                   'product_id' => $product->id,
                    'url' => 'media/products/img_'.$faker->numberBetween(1,100).'.jpg',
                    'type' => $faker->mimeType
                ));
            }
        }
    }
}
