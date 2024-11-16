@extends('layouts.app')

@section('title', 'Absensi')

@section('content')


    @include('components.fitur.imageTextSection', [
        'judul' => 'Kini Hadir Fitur Absensi dan Buku Tamu',
        'paragraf' => "Absensi perangkat desa masih pakai lembaran kertas atau finger print? Juga buku tamu masih pakai buku folio. Kini hadir dengan terobosan baru, menyatukan Absensi 
                           Perangkat Desa & Buku Tamu dalam satu layanan, Absensi & Buku Tamu Digital. . Melalui fitur ini, Anda dapat dengan mudah mencatat kehadiran dan kunjungan dengan lebih 
                           terperinci dan akurat. Absensi dan Buku Tamu digital dilengkapi dengan pembaca E-KTP, memungkinkan pemantauan yang lebih baik terhadap kehadiran dan ketidakhadiran aparat desa.",
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'fitur' => 'Fitur Absensi dan Buku Tamu',
        'judul' => 'Absensi',
        'paragraf' =>
            'Melalui fitur ini, kehadiran Perangkat Desa dapat dimonitoring dengan mudah. Anda juga dapat melihat statistik kehadiran dan dapat dicetak sebagai laporan kehadiran.',
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Buku Tamu',
        'paragraf' =>
            'Melaui fitur ini, warga yang datang ke kantor desa dapat dimonitoring dengan mudah tinggal tap KTP atau mengisi secara manual buku tamu. Data yang terisi juga dapat ditelusuri dan dicetak sesuai kebutuhan.',
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Pengaturan Server',
        'paragraf' =>
            'Selain server Online, sistem absensi dan buku tamu juga tersedia dengan opsi server Offline. Ini akan memberikan fleksibitas sesuai dengan kebutuhan desa anda',
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])



    @include('components.fitur.imageTextSection', [
        'judul' => 'Rekam KTP',
        'paragraf' =>
            'Cukup menggunakan KTP, status staff desa dan warga dapat dibedakan secara otomatis. Selain itu dengan perekaman KTP ini, staff desa juga mendapatkan akses ekslufif untuk melakukan absensi',
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Manajemen Absensi & Buku Tamu',
        'paragraf' => "Melakukan rekap untuk evaluasi menjadi salah satu langkah dalam meningkatkan kinerja. Untuk itu DIGIDES hadir memberikan solusi melalui fitur manajemen absensi staff dan manajemen buku tamu. 
                      Melalui fitur ini, nikmati kemudahan dalam memonitoring serta melakukan rekapan kehadiran aparat desa dan tamu desa yang berkunjung.",
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])



    <div class="w-[90%] mx-auto">
        @include('components.slider.slider')
    </div>
@endsection
