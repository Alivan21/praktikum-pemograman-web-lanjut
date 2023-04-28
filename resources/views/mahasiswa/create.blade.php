@extends('layout.master')
@section('content')
  <div class="flex flex-col gap-5 my-10">
    <div class="flex">
      <a href="/" class="no-underline my-auto hidden md:block">
        <ion-icon name="arrow-back-outline"
          class="text-3xl p-1 text-white rounded-md bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
        </ion-icon>
      </a>
      <h1 class="font-semibold text-center text-4xl flex-1">Sistem Informasi JTI Polinema</h1>
    </div>
    <hr>
    <div class=" p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8">
      <form class="space-y-6 flex flex-col" action="#">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Tambah Mahasiswa</h5>
        <hr>
        <x-forms.input name="nim" type="text" label="NIM" placeholder="" />
        <x-forms.input name="nama" type="text" label="Nama" placeholder="" />
        <div>
          <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-900">
            Jurusan
          </label>
          <select id="jurusan" name="jurusan"
            class="bg-gray-50 border block w-full p-3 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500">
            <option selected>Pilih Jurusan</option>
            <option value="D4 - Teknik Informatika">D4 - Teknik Informatika</option>
            <option value="D4 - Sistem Informasi Bisnis">D4 - Sistem Informasi Bisnis</option>
          </select>
        </div>
        <div>
          <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900">
            Kelas
          </label>
          <select id="kelas" name="kelas"
            class="bg-gray-50 border block w-full p-3 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500">
            <option selected>Pilih Kelas</option>
          </select>
        </div>
        <div>
          <x-button color="blue" text="Submit" />
        </div>
      </form>
    </div>
  </div>
@endsection
