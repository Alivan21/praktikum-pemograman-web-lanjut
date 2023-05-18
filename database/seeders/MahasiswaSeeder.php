<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Mahasiswa::create([
      'nim' => '2141720011',
      'nama_mahasiswa' => 'Muhammad Rizqi Mahendra',
      'kelas_id' => 1,
    ]);
    Mahasiswa::create([
      'nim' => '2141720012',
      'nama_mahasiswa' => 'Alfan Alivan',
      'kelas_id' => 3,
    ]);
    Mahasiswa::create([
      'nim' => '2141720015',
      'nama_mahasiswa' => 'Rafif Bilqisty',
      'kelas_id' => 2,
    ]);
  }
}
