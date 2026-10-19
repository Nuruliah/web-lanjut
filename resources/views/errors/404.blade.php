@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')

<div class="text-center py-5">

    <h1 class="display-1 fw-bold text-primary">
        404
    </h1>

    <p class="fs-4">
        Maaf, halaman yang Anda cari tidak ditemukan.
    </p>

    <a href="{{ route('home') }}"
       class="btn btn-primary">
        Kembali ke Beranda
    </a>

</div>

@endsection