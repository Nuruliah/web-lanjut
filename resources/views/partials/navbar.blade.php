@php
    $menu = [
        'home' => 'Beranda',
        'about' => 'Tentang',
        'services' => 'Layanan',
        'contact' => 'Kontak',
    ];
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            Surya Nusantara Energi
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">

                @foreach ($menu as $routeName => $label)
                    <li class="nav-item">
                        <a href="{{ route($routeName) }}"
                           @class([
                               'nav-link',
                               'active fw-semibold' => request()->routeIs($routeName . '*'),
                           ])>
                            {{ $label }}
                        </a>
                    </li>
                @endforeach

            </ul>
        </div>

    </div>
</nav>