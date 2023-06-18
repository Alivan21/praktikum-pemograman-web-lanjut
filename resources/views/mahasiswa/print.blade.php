<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>KRS {{ $mahasiswa->nama_mahasiswa }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <main class="container px-10 md:px-20 xl:px-16 xl:mx-auto">
    <div class="flex flex-col gap-5 my-10">

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
  </main>
</body>

</html>
