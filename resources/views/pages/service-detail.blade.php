@extends('layouts.app')

@section('title', $title)

@section('content')

    <a href="{{ route('services') }}">
        &larr; Kembali ke daftar layanan
    </a>

    <h1 class="mt-2">{{ $service['nama'] }}</h1>

    <p class="lead">
        {{ $service['deskripsi'] }}
    </p>

    @if ($service['harga'] >= 10000000)

        <div class="alert alert-info">
            Tersedia skema cicilan untuk layanan ini.
        </div>

    @else

        <div class="alert alert-success">
            Harga terjangkau untuk rumah tangga.
        </div>

    @endif

    <p>
        Harga mulai:
        <strong>
            Rp {{ number_format($service['harga'], 0, ',', '.') }}
        </strong>
    </p>

@endsection