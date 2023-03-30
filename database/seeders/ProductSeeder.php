<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('product')->insert([
      [
        'name' => 'Product 1',
        'description' => 'Product 1 description',
        'category_id' => 1,
      ],
      [
        'name' => 'Product 2',
        'description' => 'Product 2 description',
        'category_id' => 1,
      ],
      [
        'name' => 'Product 3',
        'description' => 'Product 3 description',
        'category_id' => 2,
      ]
    ]);
  }
}
