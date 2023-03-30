<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('users')->insert([
      [
        'username' => 'admin',
        'name' => 'Administrator',
        'email' => 'admin@admin.com',
        'password' => bcrypt('password'),
      ],
      [
        'username' => 'admin2',
        'name' => 'Administrator Baru',
        'email' => 'admin.baru@admin.com',
        'password' => bcrypt('password'),
      ]
    ]);
  }
}
