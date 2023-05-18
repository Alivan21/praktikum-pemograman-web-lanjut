@extends('layout.master')
@section('content')
  <div class="flex flex-col gap-5 my-10">
    <h1 class="font-semibold text-center text-4xl p-1">Sistem Informasi JTI Polinema</h1>
    <hr>
    <div class="flex sm:flex-row flex-col justify-between gap-5">
      <a href="{{ route('mahasiswa.create') }}" class="no-underline my-auto">
        <x-button color="green" text="Tambah Mahasiswa" />
      </a>
      <x-search-bar />
    </div>
    <div class="relative overflow-x-auto">
      <table class="rounded border w-full text-sm text-left text-gray-500 ">
        <thead class="text-gray-700 uppercase bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-3">
              NIM
            </th>
            <th scope="col" class="px-6 py-3">
              Nama
            </th>
            <th scope="col" class="px-6 py-3">
              Jurusan
            </th>
            <th scope="col" class="px-6 py-3">
              Kelas
            </th>
            <th scope="col" class="px-6 py-3">
              Action
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($mahasiswas as $item)
            <tr class="bg-white border-b text-gray-900 font-medium whitespace-nowrap">
              <td class="px-6 py-4">
                {{ $item->nim }}
              </td>
              <td class="px-6 py-4">
                {{ $item->nama_mahasiswa }}
              </td>
              <td class="px-6 py-4 ">
                {{ $item->kelas->jurusan->nama_jurusan }}
              </td>
              <td class="px-6 py-4">
                {{ $item->kelas->nama_kelas }}
              </td>
              <td class="px-6 py-4 flex gap-2 font-semibold">
                <a href="#" class="text-blue-600 hover:underline">Show</a>
                <a href="#" class="text-yellow-400 hover:underline">Edit</a>
                <a href="#" class="text-red-600 hover:underline">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
