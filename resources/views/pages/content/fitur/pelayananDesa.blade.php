@extends('layouts.app')

@section('title', 'Pelayanan')

@section('content')
    <div class="w-full px-2 md:px-[10rem]">


        <div class="mt-[100px]">
            @include('components.fitur.imageTextSectionRight', [
                'title' => 'Pelayanan Desa',
                'text' => "Pelayanan Desa akan membantu perangkat desa dalam pembuatan surat secara cepat, & mudah. Sudah sesuai dengan Permendagri 104 Tahun 
                                   2019 Tentang Pendokumentasian Administrasi Kependudukan, lebih dari 100 format surat dan formulir tersedia. Dilengkapi dengan pengarsipan surat keluar yang otomatis. 
                                   Dilengkapi Barcode untuk validasi surat dan sudah dapat terintergrasi dengan Tanda Tangan Elektronik (TTE)",
                'image' => asset('images/desa5.jpg'),
            ])
        </div>


        <div class="grid  w-full  mt-[10rem]">
            <div class="w-full flex flex-col gap-y-[10vh]">
                <h2 class="text-2xl md:text-3xl font-bold place-self-center">Fitur</h2>
                {{-- Kolom Kedua --}}

                @include('components.fitur.imageNestedListLeft', [
                    'title' => 'Layanan Umum',
                    'text' =>
                        'Menyediakan surat-surat umum terstandar dan sangat mudah dibuat. Cukup 1 menit surat sudah bisa dicetak dan ditanda tangani.',
                    'image' => asset('images/desa5.jpg'),
                    'list' => [
                        'Surat Keterangan Usaha',
                        'Surat Keterangan Tempat Usaha',
                        'Surat Keterangan Pengantar Barang',
                        'Surat Keterangan Pengantar Ternak',
                        'Surat Keterangan Tidak Mampu(Sekolah)',
                        'Surat Keterangan Rumah Tanggan Miskin Sekali',
                        'Surat Keterangan Penghasilan Orang Tua',
                        'Permohonan Izin Keramaian Pesta',
                        'Surat Pengantar SKCK',
                        'Surat Keterangan Ahli Waris',
                        'Surat Keterangan Bepergian',
                        'Surat Keterangan Tidak Berada di Tempat',
                        'Surat Keterangan Beda Identitas',
                        'Surat Keterangan Beda Identitas',
                    ],
                ])


                {{-- Kolom 3 --}}

                @include('components.fitur.imageNestedListRight', [
                    'title' => 'Layanan Kependudukan',
                    'text' =>
                        'Menyediakan surat-surat kependudukan mulai dari mutasi dan terintegrasi dengan data penduduk pada layanan Administrasi. Mutasi otomatis tanpa perlu edit lagi warga/masyarakat yang mengalami mutasi.',
                    'image' => asset('images/desa5.jpg'),
                    'list' => ['Biodata Penduduk', 'Pindah', 'Kelahiran', 'Kematian'],
                ])

                {{-- Kolom 4 --}}
                @include('components.fitur.imageNestedListLeft', [
                    'title' => 'Layanan Nikah',
                    'text' =>
                        'Menyediakan surat pernikahan penduduk berdasarkan Keputusan Direktur Jenderal Bimbingan Masyarakat Islam Nomor 473 Tahun 2020 Tentang Petunjuk Teknis Pelaksanaan Pencatatan Pernikahan.',
                    'image' => asset('images/desa5.jpg'),
                    'list' => [
                        'Pengantar Nikah (N1-N6)',
                        'Surat Keterangan Pernah Nikah',
                        'Surat Keterangan Belum Pernah Nikah',
                        'Surat Keterangan Duda/Janda',
                    ],
                ])


                {{-- Kolom 5 --}}
                @include('components.fitur.imageNestedListRight', [
                    'title' => 'Layanan Pertanahan',
                    'text' => 'Menyediakan surat pertanahan warga dengan aturan yang baku.',
                    'image' => asset('images/desa5.jpg'),
                    'list' => [
                        'Surat Keterangan Pencocokan Sporadik',
                        'Sporadik',
                        'Surat Keterangan Kepemilikan Tanah',
                        'Surat Keterangan Jaminan Rumah',
                        'Keterangan Ahli Waris',
                        'Keterangan Desa',
                    ],
                ])

                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Layanan Lainnya',
                    'text' =>
                        'Menyediakan surat yang dapat menyesuaikan kebutuhan desa dan jadi wadah bagi desa untuk berinovasi dalam pengaplikasian surat.',
                    'image' => asset('images/desa5.jpg'),
                ])
            </div>
        </div>



    </div>

    <div class="w-full  md:px-0 px-5  md:mx-auto  flex flex-col justify-center items-center py-[15vh]">
        <h1 class="place-self-center md:text-[4rem] text-[#FF2E63] text-[2rem] ">Fitur Lainnya</h1>
        @include('components.slider.slider-fitur')
    </div>
@endsection
