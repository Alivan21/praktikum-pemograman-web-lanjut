@extends('master')

@section('content')
  <div class="d-flex flex-col dark:text-white">
    <a href="{{ route($back) }}">
      <i class="bi bi-arrow-left-circle-fill" style="font-size: 2rem"></i>
    </a>
    <h1 class="text-bold">{{ $param['product'] }}</h1>
  </div>
@endsection
