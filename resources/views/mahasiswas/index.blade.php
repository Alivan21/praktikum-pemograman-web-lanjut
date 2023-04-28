@extends('layouts.layout')

@section('content')
  <div class="container">

    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left my-3">
          <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <form action="{{ route('mahasiswa.index') }}" method="GET"
          class="d-flex justify-content-between align-items-center">
          <div class="input-group">
            <input type="text" class="form-control rounded" name="nama" value="{{ request('nama') }}"
              placeholder="masukkan nama">
            <button class="btn btn-secondary ml-3 rounded" type="submit" id="button-addon1">Cari</button>
          </div>
          <div class="input-group justify-content-end">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
          </div>
        </form>
      </div>
    </div>
    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
    @endif
    @if ($message = Session::get('deleted'))
      <div class="alert alert-danger">
        <p>{{ $message }}</p>
      </div>
    @endif

    <table class="table table-bordered table-xl">
      <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th width="120px">Tgl. Lahir</th>
        <th>No. HP</th>
        <th width="280px">Action</th>
      </tr>
      @foreach ($mahasiswas as $mahasiswa)
        <tr>
          <td>{{ $mahasiswa->nim }}</td>
          <td>{{ $mahasiswa->nama }}</td>
          <td>{{ $mahasiswa->kelas }}</td>
          <td>{{ $mahasiswa->jurusan }}</td>
          <td>{{ $mahasiswa->email }}</td>
          <td>{{ $mahasiswa->tanggal_lahir }}</td>
          <td>{{ $mahasiswa->no_handphone }}</td>
          <td>
            <form action="{{ route('mahasiswa.destroy', $mahasiswa->nim) }}" method="POST">
              <a class="btn btn-info" href="{{ route('mahasiswa.show', $mahasiswa->nim) }}">Show</a>
              <a class="btn btn-primary" href="{{ route('mahasiswa.edit', $mahasiswa->nim) }}">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>
    {{ $mahasiswas->links() }}
  </div>
@endsection
