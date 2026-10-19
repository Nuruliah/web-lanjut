@extends('layouts.app')

@section('title', $title)

@section('content')

    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <h1 class="display-5 fw-bold">{{ $tagline }}</h1>

        <p class="fs-5">
            Solusi energi terbarukan dan efisiensi listrik.
        </p>

        <a href="{{ route('services') }}"
           class="btn btn-primary btn-lg">
            Lihat Layanan
        </a>
    </div>

    <h2 class="h4 mb-3">Layanan Unggulan</h2>

    <div class="row g-3">
        @foreach ($services as $slug => $s)
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">

                        <h3 class="h5">{{ $s['nama'] }}</h3>

                        <p class="text-muted">
                            {{ $s['deskripsi'] }}
                        </p>

                        <a href="{{ route('services.show', $slug) }}"
                           class="stretched-link">
                            Detail
                        </a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection