<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
          'name_product' => 'Pan de Jamón',
          'description' => 'dulce navideño',
          'image' => 'blablabla',
          'units_on_stock' => '35'
        ],
        [
          'name_product' => 'Cachapa',
          'description' => 'dulce del llano',
          'image' => 'blablabla',
          'units_on_stock' => '35'
        ],
        [
          'name_product' => 'Cocuy',
          'description' => 'licor',
          'image' => 'blablabla',
          'units_on_stock' => '35'
        ]
      );

      Product::insert($data);
    }
}
