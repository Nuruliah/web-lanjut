@extends('layouts.app')

@section('title', $title)

@section('content')

    <h1>{{ $title }}</h1>

    <p>
        Surya Nusantara Energi adalah perusahaan fiktif
        yang bergerak di bidang energi terbarukan
        dan efisiensi penggunaan listrik.
    </p>

    <h2 class="h5 mt-4">Misi Kami</h2>

    <ol>
        @foreach ($misi as $item)
            <li>
                {{ $item }}

                @if ($loop->first)
                    <span class="badge bg-warning text-dark">
                        Utama
                    </span>
                @endif
            </li>
        @endforeach
    </ol>

@endsection