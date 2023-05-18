<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Kelas::create([
      'nama_kelas' => 'TI 2A',
      'jurusan_id' => 1,
    ]);
    Kelas::create([
      'nama_kelas' => 'TI 2B',
      'jurusan_id' => 1,
    ]);
    Kelas::create([
      'nama_kelas' => 'TI 2C',
      'jurusan_id' => 1,
    ]);
    Kelas::create([
      'nama_kelas' => 'SIB 2A',
      'jurusan_id' => 2,
    ]);
    Kelas::create([
      'nama_kelas' => 'SIB 2B',
      'jurusan_id' => 2,
    ]);
    Kelas::create([
      'nama_kelas' => 'SIB 2C',
      'jurusan_id' => 2,
    ]);
    Kelas::create([
      'nama_kelas' => 'PPLS 2A',
      'jurusan_id' => 3,
    ]);
  }
}
