@extends('layouts.layout')

@section('content')

  <div class="container mt-5">
    <div class="row justify-content-center align-items-center">
      <div class="card" style="width: 24rem;">
        <div class="card-header">
          Edit Mahasiswa
        </div>
        <div class="card-body">
          @if ($errors->any())
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" id="myForm">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="Nim">Nim</label>
              <br>
              <input type="text" name="nim" class="form-control" id="Nim"
                value="{{ $mahasiswa->nim }}" ariadescribedby="Nim">
            </div>
            <div class="form-group">
              <label for="Nama">Nama</label>
              <br>
              <input type="text" name="nama" class="form-control" id="Nama"
                value="{{ $mahasiswa->nama }}" ariadescribedby="Nama">
            </div>
            <div class="form-group">
              <label for="Kelas">Kelas</label>
              <br>
              <input type="Kelas" name="kelas" class="form-control" id="Kelas"
                value="{{ $mahasiswa->kelas }}" ariadescribedby="Kelas">
            </div>
            <div class="form-group">
              <label for="Jurusan">Jurusan</label>
              <br>
              <input type="Jurusan" name="jurusan" class="form-control" id="Jurusan"
                value="{{ $mahasiswa->jurusan }}" ariadescribedby="Jurusan">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <br>
              <input type="email" name="email" class="form-control" id="email"
                value="{{ $mahasiswa->email }}" ariadescribedby="Email">
            </div>
            <div class="form-group">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <br>
              <input type="date" name="tanggal_lahir" class="form-control" id="TanggalLahir"
                value="{{ $mahasiswa->tanggal_lahir }}" ariadescribedby="TanggalLahir">
            </div>
            <div class="form-group">
              <label for="No_Handphone">No Handphone</label>
              <br>
              <input type="No_Handphone" name="no_handphone" class="form-control" id="No_Handphone"
                value="{{ $mahasiswa->no_handphone }}" ariadescribedby="No_Handphone">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
