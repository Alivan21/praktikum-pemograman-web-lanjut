<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
  public function index(Request $request)
  {
    //mengambil data dari model mahasiswa
    return view('mahasiswas.index', [
      'mahasiswas' => Mahasiswa::filter($request->only('nama'))->paginate(5),
    ]);
  }

  public function create()
  {
    return view('mahasiswas.create');
  }

  public function store(Request $request)
  {
    //untuk melakukan validasi data
    $request->validate([
      'nim' => 'required',
      'nama' => 'required',
      'kelas' => 'required',
      'jurusan' => 'required',
      'no_handphone' => 'required',
    ]);

    // fungsi eloquent untuk menambah data
    Mahasiswa::create($request->all());

    // jika data berhasil ditambahkan, akan kembali ke halaman utama
    return redirect()
      ->route('mahasiswa.index')
      ->with('success', 'Mahasiswa Berhasil Ditambahkan');
  }

  public function show($nim)
  {
    //menampilkan detail mahasiswa berdasarkan nim
    $mahasiswa = Mahasiswa::find($nim);

    return view('mahasiswas.detail', compact('mahasiswa'));
  }

  public function edit($nim)
  {
    //menampilkan data mahasiswa yang akan diedit berdasarkan nim
    $mahasiswa = Mahasiswa::find($nim);

    return view('mahasiswas.edit', compact('mahasiswa'));
  }
  public function update(Request $request, string $nim)
  {
    //melakukan validasi data
    $request->validate([
      'nim' => 'required',
      'nama' => 'required',
      'kelas' => 'required',
      'jurusan' => 'required',
      'no_handphone' => 'required',
    ]);

    // fungsi eloquent untuk mengupdate data inputan
    Mahasiswa::find($nim)->update($request->all());

    // jika data behasil diupdate, akan kembali ke halaman home/index
    return redirect()
      ->route('mahasiswa.index')
      ->with('success', 'Data Mahasiswa Berhasil Diupdate');
  }

  public function destroy($nim)
  {
    //fungsi eloquent untuk menghapus data
    Mahasiswa::find($nim)->delete();
    return redirect()
      ->route('mahasiswa.index')
      ->with('deleted', 'Data mahasiswa berhasil dihapus');
  }
}
