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
      <form class="space-y-6 flex flex-col" action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Tambah Mahasiswa</h5>
        <hr>
        <x-forms.input name="nim" type="text" label="NIM" placeholder="" />
        <x-forms.input name="nama_mahasiswa" type="text" label="Nama" placeholder="" />
        <div>
          <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-900">
            Jurusan
          </label>
          <select data-placeholder="Pilih Jurusan" id="jurusan" name="jurusan"
            class="single-select-field bg-gray-50 border block w-full p-3 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500">
            <option selected>Pilih Jurusan</option>
            @foreach ($jurusan as $item)
              <option value="{{ $item->id }}">{{ $item->nama_jurusan }}</option>
            @endforeach
          </select>
        </div>
        <div>
          <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900">
            Kelas
          </label>
          <select data-placeholder="Pilih Kelas" id="kelas" name="kelas_id"
            class="single-select-field bg-gray-50 border block w-full p-3 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500">
            <option></option>
          </select>
        </div>
        <div>
          <x-button color="blue" text="Submit" />
        </div>
      </form>
    </div>
  </div>
@endsection
