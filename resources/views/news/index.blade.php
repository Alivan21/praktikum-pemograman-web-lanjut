@extends('master')

@section('content')
  <div class="d-flex flex-col dark:text-white">
    <div>
      <a href="/">
        <i class="bi bi-arrow-left-circle-fill" style="font-size: 2rem"></i>
      </a>
      <h1>List of News</h1>
    </div>
    <ul class="d-flex flex-col gap-3">
      @foreach ($news as $new)
        <li>
          <a href="news/{{ $new['slug'] }}">
            {{ $new['title'] }}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
@endsection
