<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('mahasiswa', function (Blueprint $table) {
      $table->id();
      $table->string('nim', 10)->unique();
      $table->string('nama_mahasiswa', 63);
      $table->foreignId('jurusan_id')->constrained('jurusan')->restrictOnDelete();
      $table->foreignId('kelas_id')->constrained('kelas')->restrictOnDelete();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('mahasiswa');
  }
};