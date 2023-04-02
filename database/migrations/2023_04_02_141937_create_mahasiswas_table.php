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
      $table->string('nim', 15)->unique();
      $table->string('nama', 63);
      $table->string('kelas', 15);
      $table->string('jurusan', 63);
      $table->string('no_handphone', 15);
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
