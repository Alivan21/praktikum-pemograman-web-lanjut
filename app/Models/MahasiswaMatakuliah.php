<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaMatakuliah extends Model
{
  use HasFactory;

  protected $table = 'mahasiswa_matakuliah';
  protected $with = ['mahasiswa', 'matakuliah'];

  public function mahasiswa()
  {
    return $this->belongsTo(Mahasiswa::class);
  }

  public function matakuliah()
  {
    return $this->belongsTo(Matakuliah::class);
  }
}
