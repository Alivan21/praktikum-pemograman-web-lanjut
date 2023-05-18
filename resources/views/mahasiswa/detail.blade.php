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
      <p>Nama&emsp;: test</p>
      <p>NIM &emsp;&emsp;: test</p>
      <p>Jurusan : test</p>
      <p>Kelas&ensp;&emsp;: test</p>
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
          <tr class="bg-white border-b">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
              Pemograman Berbasis Objek
            </th>
            <td class="px-6 py-4">
              3
            </td>
            <td class="px-6 py-4">
              4
            </td>
            <td class="px-6 py-4">
              A
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection