<?php

namespace App\Http\Controllers;

use App\Http\Requests\MahasiswaRequest;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $mahasiswas = Mahasiswa::all();
    // dd($mahasiswas);
    return view('mahasiswa.index', compact('mahasiswas'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $jurusan = Jurusan::all();
    return view('mahasiswa.create', compact('jurusan'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(MahasiswaRequest $request)
  {
    Mahasiswa::create($request->validated());
    return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Mahasiswa  $mahasiswa
   * @return \Illuminate\Http\Response
   */
  public function show(Mahasiswa $mahasiswa)
  {
    return view('mahasiswa.detail', compact('mahasiswa'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Mahasiswa  $mahasiswa
   * @return \Illuminate\Http\Response
   */
  public function edit(Mahasiswa $mahasiswa)
  {
    $jurusan = Jurusan::all();
    $kelas = Kelas::where('jurusan_id', $mahasiswa->jurusan_id)->get();
    return view('mahasiswa.edit', compact('mahasiswa', 'jurusan', 'kelas'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Mahasiswa  $mahasiswa
   * @return \Illuminate\Http\Response
   */
  public function update(MahasiswaRequest $request, Mahasiswa $mahasiswa)
  {
    Mahasiswa::find($mahasiswa->id)->update($request->validated());
    return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil diupdate!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Mahasiswa  $mahasiswa
   * @return \Illuminate\Http\Response
   */
  public function destroy(Mahasiswa $mahasiswa)
  {
    $mahasiswa->delete();
    return redirect()->route('mahasiswa.index')->with('delete', 'Mahasiswa berhasil dihapus');
  }
}
