@extends('layouts.master')

@section('content')
  <div class="text-white d-flex flex-column gap-4">
    <div class="d-flex align-items-center gap-3">
      <a href="/">
        <i class="bi bi-arrow-left-circle-fill" style="font-size: 2rem"></i>
      </a>
      <h1 class="text-white my-auto">List of Program</h1>
    </div>
    <ul class="d-flex flex-column gap-3 text-white mx-3">
      @foreach ($programs as $program)
        <li>
          <a href="program/{{ $program['slug'] }}" class="fs-4 text-decoration-none">
            {{ $program['program'] }}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
@endsection
