@extends('layouts.app')

@section('title', 'Pendekar')

@section('content')


    @include('components.fitur.imageTextSection', [
        'judul' => 'Pemantauan Desa dan Kelurahan Terintegrasi (PENDEKAR)',
        'paragraf' => "Pemantauan Desa dan Kelurahan Terintegrasi (Pendekar) merupakan sistem yang dibuat untuk memudahkan pemantauan dalam desa dan kelurahan. 
                           Dilengkapi dengan berbagai menu serta tampilan statistik, membuat pemantauan akan lebih optimal",
        'button' => 'Ajukan ketertarikan',
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'fitur' => 'Fitur PENDEKAR',
        'judul' => 'Dashboard',
        'paragraf' => 'Dapatkan fitur Dashboard yang menampilkan Beranda capaian & potensi setiap desa dan kelurahan, peta perkembangan desa berdasarkan data SDGs & IDM desa,
                Rekomendasi Pembangunan untuk pengembangan desa, data statistik potensi desa atau kelurahan baik dari segi SDM, SDA, dan sebagainya',
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Administrasi',
        'paragraf' => 'Pada menu ini anda dapat melihat data mengenai administrasi umum dan kependudukan, seperti buku peraturan desa, data, dan rekap kependudukan yang disajikan menggunakan 
                tabel dan statistik sehingga akan memudahkan saat pengolahan data',
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Pembangunan',
        'paragraf' =>
            'Dilengkapi dengan tampilan GRAFIK, Nikmati kemudahan pemantauan APBDes dan Rencana Kerja Pembangunan (RKP) melalui Pendekar',
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Potensi',
        'paragraf' => 'Dengan PENDEKAR, dapatkan informasi akurat mengenai potensi desa anda melalui data UMKM, berita, dan Wisata. Bukan hanya dari desa 
            anda melainkan informasi potensi dari wilayah disekitar desa anda.Melalui sistem yang terintegrasi, selain dapat melihat setiap profil dari
             desa anda, anda juga dapat melihat profil desa lain Profil Desa',
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Profil Desa',
        'paragraf' =>
            'Melalui sistem yang terintegrasi, selain dapat melihat setiap profil dari desa anda, anda juga dapat melihat profil desa lain',
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Bansos',
        'paragraf' =>
            'Kini menyalurkan dan melihat semua rekapan bantuan sosial dari seluruh desa di sekitar anda menjadi lebih mudah menggunakan PENDEKAR',
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])



    <div class="w-[90%] mx-auto">
        @include('components.slider.slider')
    </div>
@endsection
