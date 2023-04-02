@extends('layouts.layout')

@section('content')
  <div class="container mt-5">
    <div class="d-flex flex-column justify-content-center align-items-center">
      <div class="card" style="width: 24rem;">
        <div class="card-header">
          Detail Mahasiswa
        </div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item my-2"><b>Nim: </b>{{ $mahasiswa->nim }}</li>
            <li class="list-group-item my-2"><b>Nama: </b>{{ $mahasiswa->nama }}</li>
            <li class="list-group-item my-2"><b>Kelas: </b>{{ $mahasiswa->kelas }}</li>
            <li class="list-group-item my-2"><b>Jurusan: </b>{{ $mahasiswa->jurusan }}</li>
            <li class="list-group-item my-2"><b>Email: </b>{{ $mahasiswa->email }}</li>
            <li class="list-group-item my-2"><b>Tgl. Lahir: </b>{{ $mahasiswa->tanggal_lahir }}</li>
            <li class="list-group-item my-2"><b>No_Handphone: </b>{{ $mahasiswa->no_handphone }}</li>
          </ul>
        </div>
      </div>
      <a class="btn btn-success col-4 mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>
    </div>
  </div>
@endsection
