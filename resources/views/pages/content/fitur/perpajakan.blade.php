@extends('layouts.app')

@section('title', 'Perpajakan')

@section('content')
    <div class="w-full px-2 md:px-[10rem]">

<div class="mt-[100px]">
        @include('components.fitur.imageTextSectionRight', [
            'title' => 'Perpajakan Desa',
            'text' => "Fitur Perpajakan adalah layanan khusus untuk memudahkan dalam pencatatan pajak, pelaporan pembayaran pajak PBB-P2, dan
                           penelusuran peta wajib pajak, disertai sistem cerdas menghitung denda wajib pajak.",
            'image' => asset('images/desa5.jpg'),
        ])
</div>

        <div class="grid  w-full  mt-[10rem]">
            <div class="w-full flex flex-col md:gap-y-[10vh]  md:gap-x-5">
                <h2 class="text-2xl md:text-3xl font-bold place-self-center">Fitur</h2>
                {{-- Kolom Kedua --}}

                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Beranda',
                    'text' =>
                        'Peta Visualisasi Pajak akan memudahkan perangkat desa mendeteksi wilayah wajib pajak dan dapat meminimalisir potensi sengketa tanah.',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom 3 --}}

                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'DHKP',
                    'text' => "Fitur DHKP (Daftar Himpunan Ketetapan Pajak & Pembayaran) memungkinkan Anda untuk melihat letak objek pajak, nama wajib pajak,
                                 dan jumlah pembayaran pajak yang terutang di desa Anda. Dengan fitur ini, Anda dapat dengan mudah memantau status pembayaran pajak dan 
                                 mengelola data pajak secara efisien.",
                    'image' => asset('images/desa5.jpg'),
                ])

                {{-- Kolom 4 --}}
                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Penerimaan PBB-P2',
                    'text' =>
                        'Pada menu ini disajikan jumlah pembayaran PBB dan denda yang mesti dibayar oleh wajib pajak dan dapat rekap kemudian dicetak.',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom 5 --}}
                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'Laporan Mingguan PBB-P2',
                    'text' =>
                        'Membantu para kolektor pajak untuk laporan tahunan atau laporan penerimaan PBB-P2 desa.',
                    'image' => asset('images/desa5.jpg'),
                ])
            </div>
        </div>



    </div>
@endsection
