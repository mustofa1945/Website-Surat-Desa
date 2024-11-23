@extends('layouts.app')

@section('title', 'Absensi')

@section('content')
    <div class="w-full px-2 md:px-[10rem]">

<div class="mt-[100px]">
        @include('components.fitur.imageTextSectionRight', [
            'title' => 'Kini Hadir Fitur Absensi dan Buku Tamu',
            'text' => "Absensi perangkat desa masih pakai lembaran kertas atau finger print? Juga buku tamu masih pakai buku folio. Kini hadir dengan terobosan baru, menyatukan Absensi Perangkat Desa & Buku Tamu dalam satu layanan, Absensi & Buku Tamu Digital. 
                                Melalui fitur ini, Anda dapat dengan mudah mencatat kehadiran dan kunjungan dengan lebih terperinci dan akurat. Absensi dan Buku Tamu digital dilengkapi dengan pembaca E-KTP, memungkinkan pemantauan yang lebih baik terhadap kehadiran dan 
                                 ketidakhadiran aparat desa.",
            'image' => asset('images/desa5.jpg'),
        ])
</div>

        <div class="grid  w-full  mt-[10rem]">
            <div class="w-full flex flex-col gap-y-[10vh]">
                <h2 class="text-2xl md:text-3xl font-bold place-self-center">Fitur Absensi dan Buku Tamu</h2>
                {{-- Kolom Pertama --}}

                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Absensi',
                    'text' =>
                        'Melalui fitur ini, kehadiran Perangkat Desa dapat dimonitoring dengan mudah. Anda juga dapat melihat statistik kehadiran dan dapat dicetak sebagai laporan kehadiran.',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom Kedua --}}

                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'Buku Tamu',
                    'text' => "Melaui fitur ini, warga yang datang ke kantor desa dapat dimonitoring dengan mudah tinggal tap KTP atau mengisi secara manual buku tamu. Data yang terisi juga dapat ditelusuri dan dicetak sesuai kebutuhan.",
                    'image' => asset('images/desa5.jpg'),
                ])

                {{-- Kolom Keempat --}}
                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Pengaturan Server',
                    'text' =>
                        'Selain server Online, sistem absensi dan buku tamu juga tersedia dengan opsi server Offline. Ini akan memberikan fleksibitas sesuai dengan kebutuhan desa anda',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom kelima --}}
                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'Rekam KTP',
                    'text' =>
                        'Cukup menggunakan KTP, status staff desa dan warga dapat dibedakan secara otomatis. Selain itu dengan perekaman KTP ini, staff desa juga mendapatkan akses ekslufif untuk melakukan absensi',
                    'image' => asset('images/desa5.jpg'),
                ])

                 {{-- Kolom keeanm --}}
                 @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Manajemen Absensi & Buku Tamu',
                    'text' =>
                        'Melakukan rekap untuk evaluasi menjadi salah satu langkah dalam meningkatkan kinerja. Untuk itu DIGIDES hadir memberikan solusi melalui fitur manajemen absensi staff dan manajemen buku tamu. Melalui fitur ini, nikmati kemudahan dalam memonitoring serta melakukan rekapan kehadiran aparat desa dan tamu desa yang berkunjung.a',
                    'image' => asset('images/desa5.jpg'),
                ])

            </div>
        </div>



    </div>
@endsection
