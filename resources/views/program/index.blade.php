@extends('master')

@section('content')
  <div class="d-flex flex-col dark:text-white">
    <div>
      <a href="/">
        <i class="bi bi-arrow-left-circle-fill" style="font-size: 2rem"></i>
      </a>
      <h1>List of Program</h1>
    </div>
    <ul class="d-flex flex-col gap-3">
      @foreach ($programs as $program)
        <li>
          <a href="program/{{ $program['slug'] }}">
            {{ $program['program'] }}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
@endsection
