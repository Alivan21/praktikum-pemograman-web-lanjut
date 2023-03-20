<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
  public $programs = [
    [

      'program' => 'Karir',
      'slug' => 'karir'
    ],
    [
      'program' => 'Magang',
      'slug' => 'magang'
    ],
    [
      'program' => 'Kunjungan Industri',
      'slug' => 'kunjungan-industri'
    ]
  ];

  public function index()
  {
    $programs = $this->programs;
    return view('program.index', compact('programs'));
  }

  public function detail($param)
  {
    $program = $this->programs;
    $param = array_search($param, array_column($program, 'slug'));
    $param = $program[$param];
    return view('program.detail', [
      'param' => $param,
      'back' => 'programs'
    ]);
  }
}
