@extends('layouts.app')

@section('title', 'Pelayanan')

@section('content')
    <div class="w-full px-2 md:px-[10rem]">

        <div class="mt-[100px]">
            @include('components.fitur.imageTextSectionRight', [
                'title' => 'Administrasi Desa',
                'text' => "Solusi praktis untuk mendukung tugas administratif kantor desa, mulai dari pengelolaan data penduduk yang efisien,
                                                           mutasi penduduk desa, Sinkronisasi Prodeskel, perencanaan, pelaporan, pengelolaan aset, pengelolaan anggaran, manajemen
                                                           Lembaga desa, Arsip keuangan, dan sebagainya.",
                'image' => asset('images/desa5.jpg'),
            ])
        </div>

        <div class="grid  w-full  mt-[10rem]">
            <div class="w-full flex flex-col md:gap-y-[10vh] justify-center items-center">
                <h2 class="text-2xl md:text-3xl font-bold place-self-center text-[#FF2E63]">Fitur</h2>
                {{-- Kolom Kedua --}}

                @include('components.fitur.imageNestedListLeft', [
                    'title' => 'Administrasi Umum',
                    'text' =>
                        'Administrasi Umum adalah Pencatatan data, inventaris data & informasi mengenai kegiatan pemerintahan Desa.',
                    'image' => asset('images/desa5.jpg'),
                    'list' => [
                        'Buku Peraturan di Desa',
                        'Buku Keputusan Kepala Desa',
                        'Buku Inventaris dan Kekayaan Desa',
                        'Buku Aparat Pemerintah Desa',
                        'Buku Tanah Kas Desa',
                        'Buku Tanah di Desa',
                        'Buku Agenda',
                        'Buku Ekspedisi',
                        'Buku Lembaran Desa dan Berita Desa',
                    ],
                ])


                {{-- Kolom 3 --}}

                @include('components.fitur.imageNestedListRight', [
                    'title' => 'Administrasi Penduduk',
                    'text' =>
                        'Sistem informasi Kependudukan Desa dapat mempermudah pencatatan & penelusuran data, serta informasi mengenai kependudukan dengan sistem otomasi dan kecerdasan buatan.',
                    'image' => asset('images/desa5.jpg'),
                    'list' => [
                        'Buku Induk Penduduk',
                        'Sinkronisasi PRODESKEL',
                        'Buku Mutasi Penduduk Desa',
                        'Buku Rekapitulasi Jumlah Penduduk',
                        'Buku Penduduk Sementara',
                        'Buku KTP dan Buku KK',
                        'Klasifikasi Data Penduduk',
                    ],
                ])

                {{-- Kolom 4 --}}
                @include('components.fitur.imageNestedListLeft', [
                    'title' => 'Administrasi Keuangan',
                    'text' =>
                        'Pengarsipan kegiatan keuangan hasil output dari SISKUEDES, sehingga memudahkan pencarian data dan pengelolaan data keuangan desa menjadi lebih rapi dan tersturktur.',
                    'image' => asset('images/desa5.jpg'),
                    'list' => [
                        'Buku APB Desa',
                        'Buku Rencana Anggaran Biaya',
                        'Buku Kas Pembantu Kegiatan',
                        'Buku Kas Umum',
                        'Buku Kas Pembantu',
                        'Buku Bank Desa',
                    ],
                ])


                {{-- Kolom 5 --}}
                @include('components.fitur.imageNestedListRight', [
                    'title' => 'Administrasi Pembangunan',
                    'text' => 'Administrasi Pembangunan adalah kegiatan pencatatan data setiap tahap pembangunan, proyek-proyek yang sedang berlangsung, 
                                                               serta program-program pemberdayaan masyarakat dicatat dengan rinci. Hal ini membantu memantau progres, alokasi sumber daya, serta dampak dari kegiatan pembangunan.',
                    'image' => asset('images/desa5.jpg'),
                    'list' => [
                        'Buku Rencana Kerja Pembangunan',
                        'Buku Kegiatan Pembangunan',
                        'buku Inventaris Hasil Pembangunan',
                        'Buku Kader Pemberdayaan Masyarakat',
                    ],
                ])

                @include('components.fitur.imageNestedListLeft', [
                    'title' => 'Administrasi Kelembagaan',
                    'text' => 'Administrasi KelembagaanBuku Administrasi Kelembagaan adalah kegiatan pencatatan data setiap kegiatan yang berkaitan dengan fungsi, struktur,
                                               dan aktivitas kelembagaan dicatat Fdengan rinci. Ini termasuk pencatatan data mengenai rapat-rapat kelembagaan, keputusan-keputusan yang diambil.',
                    'image' => asset('images/desa5.jpg'),
                    'list' => [
                        'Data Anggota PKK',
                        'Data Anggota LPMD',
                        'Data Anggota Karang Taruna',
                        'Data Anggota Posyandu',
                        'Data Anggota BPD',
                        'Buku Keputusan BPD',
                        'Buku Kegiatan BPD',
                        'Buku Agenda BPD',
                    ],
                ])
            </div>
        </div>
    </div>

    <div class="w-full  md:px-0 px-5  md:mx-auto  flex flex-col justify-center items-center py-[15vh]">
        <h1 class="place-self-center md:text-[4rem] text-[#FF2E63] text-[2rem]  ">Fitur Lainnya</h1>
        @include('components.slider.slider-fitur')
    </div>

@endsection

