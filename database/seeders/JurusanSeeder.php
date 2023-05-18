<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Jurusan::create([
      'nama_jurusan' => 'D4 Teknik Informatika',
    ]);
    Jurusan::create([
      'nama_jurusan' => 'D4 Sistem Informasi Bisnis',
    ]);
    Jurusan::create([
      'nama_jurusan' => 'D2 PPLS',
    ]);
  }
}
