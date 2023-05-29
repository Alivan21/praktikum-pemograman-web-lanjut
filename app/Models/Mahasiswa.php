<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
  use HasFactory;

  protected $table = 'mahasiswa';
  protected $with = ['jurusan', 'kelas'];
  protected $guarded = ['id'];

  public function jurusan()
  {
    return $this->belongsTo(Jurusan::class);
  }

  public function kelas()
  {
    return $this->belongsTo(Kelas::class);
  }

  public function mahasiswaMatakuliah()
  {
    return $this->hasMany(mahasiswaMatakuliah::class);
  }

  public static function search($name)
  {
    return self::where('nama_mahasiswa', 'like', '%' . $name . '%')->get();
  }
}
