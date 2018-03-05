<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
          'name_category' => 'dulce'
        ],
        [
          'name_category' => 'salado'
        ],
        [
          'name_category' => 'amargo'
        ],
        [
          'name_category' => 'alcohol'
        ]
      );

      Category::insert($data);
    }
}
