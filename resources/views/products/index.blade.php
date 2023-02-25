@extends('master')

@section('content')
  <div class="d-flex flex-col dark:text-white">
    <div>
      <a href="/">
        <i class="bi bi-arrow-left-circle-fill" style="font-size: 2rem"></i>
      </a>
      <h1>List of Product</h1>
    </div>
    <ul class="d-flex flex-col gap-3">
      @foreach ($products as $product)
        <li>
          <a href="products/{{ $product['slug'] }}">
            {{ $product['product'] }}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
@endsection
