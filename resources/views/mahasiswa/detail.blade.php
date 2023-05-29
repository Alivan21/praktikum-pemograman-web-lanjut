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
    <h2 class="font-medium text-center text-3xl">Kartu Hasil Studi (KHS)</h2>
    <div class="font-medium text-lg">
      <p>Nama&emsp;&ensp;: {{ $mahasiswa->nama_mahasiswa }}</p>
      <p>NIM&ensp;&emsp;&emsp; : {{ $mahasiswa->nim }}</p>
      <p>Jurusan&ensp;: {{ $mahasiswa->jurusan->nama_jurusan }}</p>
      <p>Kelas&ensp;&emsp;&ensp;: {{ $mahasiswa->kelas->nama_kelas }}</p>
    </div>
    <div class="relative overflow-x-auto">
      <table class="rounded border w-full text-sm text-left text-gray-700">
        <thead class="text-gray-900 uppercase bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-3">
              MataKuliah
            </th>
            <th scope="col" class="px-6 py-3">
              SKS
            </th>
            <th scope="col" class="px-6 py-3">
              Semester
            </th>
            <th scope="col" class="px-6 py-3">
              Nilai
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($mahasiswaMatakuliah as $item)
            <tr class="bg-white border-b">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                {{ $item->matakuliah->nama_matkul }}
              </th>
              <td class="px-6 py-4">
                {{ $item->matakuliah->sks }}
              </td>
              <td class="px-6 py-4">
                {{ $item->matakuliah->semester }}
              </td>
              <td class="px-6 py-4">
                {{ $item->nilai }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
