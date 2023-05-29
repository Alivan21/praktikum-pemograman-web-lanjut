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
      <form class="space-y-6 flex flex-col" action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST">
        @method('PUT')
        @csrf
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Edit Mahasiswa</h5>
        <hr>
        <x-forms.input name="nim" type="text" label="NIM" placeholder=""
          value="{{ old('nim', $mahasiswa->nim) }}" />
        <x-forms.input name="nama_mahasiswa" type="text" label="Nama" placeholder=""
          value="{{ old('nama', $mahasiswa->nama_mahasiswa) }}" />
        <div>
          <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-900">
            Jurusan
          </label>
          <select data-placeholder="Pilih Jurusan" id="jurusan" name="jurusan" disabled
            class="single-select-field bg-gray-50 border block w-full p-3 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500">
            @foreach ($jurusan as $item)
              <option {{ $mahasiswa->jurusan->id == $item->id ? 'selected' : '' }}
                value="{{ optional($mahasiswa->jurusan)->id }}">
                {{ $item->nama_jurusan }}</option>
            @endforeach
          </select>
        </div>
        <div>
          <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900">
            Kelas
          </label>
          <select data-placeholder="Pilih Kelas" id="kelas" name="kelas"
            class="single-select-field bg-gray-50 border block w-full p-3 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500">
            @foreach ($kelas as $item)
              <option {{ $mahasiswa->kelas->id == $item->id ? 'selected' : '' }}
                value="{{ optional($mahasiswa->kelas)->id }}">
                {{ $item->nama_kelas }}</option>
            @endforeach
          </select>
        </div>
        <div>
          <x-button color="yellow" text="Update" />
        </div>
      </form>
    </div>
  </div>
@endsection
