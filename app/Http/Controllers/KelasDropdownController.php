<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class KelasDropdownController extends Controller
{
  public function getKelas(Request $request)
  {
    $jurusan = Jurusan::findOrFail($request->id);
    $kelasFiltered = $jurusan->kelas->pluck('nama_kelas', 'id');
    return response()->json($kelasFiltered);
  }
}
