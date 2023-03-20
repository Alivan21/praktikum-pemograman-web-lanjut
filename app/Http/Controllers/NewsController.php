<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
  public $news = [
    [
      'title' => 'Kenapa harus belajar Laravel?',
      'slug' => 'kenapa-belajar-laravel'
    ]
  ];

  public function index()
  {
    $news = $this->news;
    return view('news.index', compact('news'));
  }

  public function detail($param)
  {
    $news = $this->news;
    $param = array_search($param, array_column($news, 'slug'));
    $param = $news[$param];
    return view('news.detail', [
      'param' => $param,
      'back' => 'news'
    ]);
  }
}
