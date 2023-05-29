<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Matakuliah::create([
      'nama_matkul' => 'Pemrograman Web Lanjut',
      'sks' => 3,
      'jam' => 6,
      'semester' => 4,
    ]);
    Matakuliah::create([
      'nama_matkul' => 'Pemrograman Berorientasi Objek',
      'sks' => 5,
      'jam' => 5,
      'semester' => 4,
    ]);
    Matakuliah::create([
      'nama_matkul' => 'Pemrograman Mobile',
      'sks' => 3,
      'jam' => 6,
      'semester' => 4,
    ]);
    Matakuliah::create([
      'nama_matkul' => 'Basis Data Lanjut',
      'sks' => 2,
      'jam' => 4,
      'semester' => 4,
    ]);
  }
}
