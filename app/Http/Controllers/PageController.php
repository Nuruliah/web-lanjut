<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    private array $services = [
        'panel-surya' => [
            'nama' => 'Instalasi Panel Surya',
            'harga' => 15000000,
            'deskripsi' => 'Pemasangan PLTS atap untuk rumah dan kantor.',
        ],
        'audit-energi' => [
            'nama' => 'Audit Energi',
            'harga' => 5000000,
            'deskripsi' => 'Analisis konsumsi listrik dan rekomendasi efisiensi.',
        ],
        'smart-meter' => [
            'nama' => 'Smart Meter IoT',
            'harga' => 2500000,
            'deskripsi' => 'Pemantauan pemakaian listrik real-time berbasis IoT.',
        ],
    ];

    public function home()
    {
        return view('pages.home', [
            'title' => 'Beranda',
            'tagline' => 'Energi bersih untuk Indonesia',
            'services' => $this->services,
        ]);
    }

    public function about()
    {
        $title = 'Tentang Kami';

        $misi = [
            'Menyediakan energi terbarukan',
            'Mendorong efisiensi energi',
            'Mengembangkan talenta lokal',
        ];

        return view('pages.about', compact('title', 'misi'));
    }

    public function services()
    {
        return view('pages.services', [
            'title' => 'Layanan',
            'services' => $this->services,
        ]);
    }

    public function serviceDetail(string $slug)
    {
        $service = $this->services[$slug] ?? abort(404);

        return view('pages.service-detail', [
            'title' => $service['nama'],
            'service' => $service,
        ]);
    }

    public function contact()
    {
        return view('pages.contact', [
            'title' => 'Kontak',
        ]);
    }
}