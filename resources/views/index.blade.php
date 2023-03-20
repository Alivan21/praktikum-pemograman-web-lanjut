@extends('layouts.master')
@section('content')
  <div class="text-white d-flex flex-column gap-4">
    <h1 class="fw-bolder text-center">UMKM STORE</h1>
    <h1 class="fw-bold">List of Our Services</h1>
    <ul class="d-flex flex-column gap-3 fs-3">
      <li>
        <a class="text-decoration-none" href="/products">
          Products
        </a>
      </li>
      <li>
        <a class="text-decoration-none" href="/news">
          News
        </a>
      </li>
      <li>
        <a class="text-decoration-none" href="/program">
          Program
        </a>
      </li>
      <li>
        <a class="text-decoration-none" href="/about">
          About
        </a>
      </li>
      <li>
        <a class="text-decoration-none" href="/contact">
          Contact
        </a>
      </li>
    </ul>
  </div>
@endsection
