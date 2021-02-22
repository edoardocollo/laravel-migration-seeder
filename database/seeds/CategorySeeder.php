<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categories = [
        [
          'categoria'=>'piatti',
          'descrizione'=>'oggetti per contenere il cibo'
        ],
        [
          'categoria'=>'coltelli',
          'descrizione'=>'oggetti per tagliare il cibo'
        ],
        [
          'categoria'=>'bicchieri',
          'descrizione'=>'oggetti per contenere liquidi'
        ],
        [
          'categoria'=>'vasi',
          'descrizione'=>'oggetti per contenere piante'
        ],
        [
          'categoria'=>'contenitori',
          'descrizione'=>'oggetti per contenere oggetti'
        ]
      ];
      foreach ($categories as $category) {
        $newCategory = new Category;
        $newCategory->categoria = $category['categoria'];
        $newCategory->descrizione = $category['descrizione'];
        $newCategory->save();
      }
    }
}
