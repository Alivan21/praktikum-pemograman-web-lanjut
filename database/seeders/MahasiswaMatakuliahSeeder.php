<?php

namespace Database\Seeders;

use App\Models\MahasiswaMatakuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaMatakuliahSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    MahasiswaMatakuliah::create([
      'mahasiswa_id' => 1,
      'matakuliah_id' => 1,
      'nilai' => 'A'
    ]);
    MahasiswaMatakuliah::create([
      'mahasiswa_id' => 1,
      'matakuliah_id' => 2,
      'nilai' => 'A'
    ]);
    MahasiswaMatakuliah::create([
      'mahasiswa_id' => 1,
      'matakuliah_id' => 3,
      'nilai' => 'B+'
    ]);
    MahasiswaMatakuliah::create([
      'mahasiswa_id' => 1,
      'matakuliah_id' => 4,
      'nilai' => 'B'
    ]);
    MahasiswaMatakuliah::create([
      'mahasiswa_id' => 2,
      'matakuliah_id' => 1,
      'nilai' => 'A'
    ]);
    MahasiswaMatakuliah::create([
      'mahasiswa_id' => 2,
      'matakuliah_id' => 2,
      'nilai' => 'B'
    ]);
    MahasiswaMatakuliah::create([
      'mahasiswa_id' => 2,
      'matakuliah_id' => 3,
      'nilai' => 'B'
    ]);
    MahasiswaMatakuliah::create([
      'mahasiswa_id' => 2,
      'matakuliah_id' => 4,
      'nilai' => 'A'
    ]);
  }
}
