<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $newProduct = new Product;
        $newProduct->titolo = $faker->word();
        $newProduct->descrizione = $faker->sentence();
        $newProduct->prezzo = $faker->randomFloat(2,0,1000);
        $newProduct->disponibilita = $faker->boolean();
        $newProduct->save();
      }
    }
}
