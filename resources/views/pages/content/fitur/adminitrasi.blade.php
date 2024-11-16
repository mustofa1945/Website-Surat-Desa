@extends('layouts.app')

@section('title', 'Administrasi')

@section('content')


    @include('components.fitur.imageTextSection', [
        'judul' => 'Administrasi Desa',
        'paragraf' => "Solusi praktis untuk mendukung tugas administratif kantor desa, mulai dari 
                        pengelolaan data penduduk yang efisien, mutasi penduduk desa, Sinkronisasi Prodeskel, perencanaan,
                         pelaporan, pengelolaan aset, pengelolaan anggaran, manajemen Lembaga desa, Arsip keuangan, dan sebagainya.",
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'fitur' => 'Fitur',
        'judul' => 'Administrasi Umum',
        'paragraf' => "Administrasi Umum adalah Pencatatan data, 
                                      inventaris data & informasi mengenai kegiatan 
                                      pemerintahan Desa.",
        'list' => [
            'Buku Induk Penduduk',
            'Sinkronisasi PRODESKEL',
            'Buku Inventaris dan Kekayaan Desa',
            'Buku Aparat Pemerintah Desa',
            'Buku Tanah Kas Desa',
            'Buku Tanah di Desa',
            'Buku Agenda',
            'Buku Ekspedis',
            'Buku Lembaran Desa dan Berita Desa',
        ],
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Administrasi Penduduk',
        'paragraf' => "Sistem informasi Kependudukan Desa dapat mempermudah pencatatan & 
                                       penelusuran data, serta informasi mengenai kependudukan dengan sistem 
                                       otomasi dan kecerdasan buatan.",
        'list' => [
            'Buku Induk Penduduk',
            'Sinkronisasi PRODESKEL',
            'Buku Mutasi Penduduk Desa',
            'Buku Rekapitulasi Jumlah Penduduk',
            'Buku Penduduk Sementara',
            'Buku KTP dan Buku KK',
            'Klasifikasi Data Penduduk',
        ],
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Administrasi Keuangan',
        'paragraf' => "Pengarsipan kegiatan keuangan hasil output dari SISKUEDES, sehingga memudahkan 
                                       pencarian data dan pengelolaan data keuangan desa menjadi lebih rapi dan tersturktur.",
        'list' => [
            'Buku APB Desa',
            'Buku Rencana Anggaran Biaya',
            'Buku Kas Pembantu Kegiatan',
            'Buku Kas Umum',
            'Buku Kas Pembantu',
            'Buku Bank Desa',
        ],
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])



    @include('components.fitur.imageTextSection', [
        'judul' => 'Administrasi Pembangunan',
        'paragraf' => 'Administrasi Pembangunan adalah kegiatan pencatatan data setiap tahap pembangunan, proyek-proyek
                                    yang sedang berlangsung, serta program-program pemberdayaan masyarakat dicatat dengan rinci. Hal ini membantu 
                                    memantau progres, alokasi sumber daya, serta dampak dari kegiatan pembangunan.',
        'list' => [
            'Buku Rencana Kerja Pembangunan',
            'Buku Kegiatan Pembangunan',
            'Buku Inventaris Hasil Pembangunan',
            'Buku Kader Pemberdayaan Masyarakat',
        ],
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Administrasi Kelembagaan',
        'paragraf' => "Buku Administrasi Kelembagaan adalah kegiatan pencatatan data setiap kegiatan yang berkaitan dengan
           fungsi, struktur, dan aktivitas kelembagaan dicatat dengan rinci. Ini termasuk pencatatan data mengenai rapat-rapat 
           kelembagaan, keputusan-keputusan yang diambil.",
        'list' => [
            'Data Anggota PKK',
            'Data Anggota LPMD',
            'Data Anggota Karang Taruna',
            'Data Anggota Posyandu',
            'Data Anggota BPD',
            'Buku Keputusan BPD',
            "Buku Kegiatan BPD",
            "Buku Agenda BPD"
        ],
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])


    <div class="w-[90%] mx-auto">
        @include('components.slider.slider')
    </div>
@endsection
