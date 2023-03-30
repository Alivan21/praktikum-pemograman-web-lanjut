@extends('layouts.master')

@section('content')
  <div class="text-white d-flex flex-column gap-4">
    <div class="d-flex gap-3">
      <a href="/products" class="text-decoration-none">
        <i class="bi bi-arrow-left-circle-fill" style="font-size: 2rem"></i>
      </a>
      <span class="fs-2 my-auto">Back</span>
    </div>
    <h1 class="text-bold">{{ $product->name }}</h1>
  </div>
@endsection
