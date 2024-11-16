@extends('layouts.app')

@section('title', 'Website-profile')

@section('content')


    @include('components.fitur.imageTextSection', [
        'judul' => 'Dapatkan berbagai manfaat dari website profil desa',
        'paragraf' => "Dapatkan berbagai manfaat dari memiliki website profil desa. Kami akan membantu Anda dalam mengoptimalkan halaman website profil desa 
                               Anda dengan konten yang menarik dan penting untuk dibaca, mulai dari profil pemerintahan, publikasi kegiatan, data statistik, hingga potensi wisata yang dimiliki oleh desa.",
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'fitur' => 'Fitur',
        'judul' => 'Profil Pemerintahan',
        'paragraf' => 'Menampilkan informasi lengkap mengenai struktur kelengkapan pemerintahan desa.',
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Profil Desa',
        'paragraf' => 'Memuat informasi dasar tentang desa, visi dan misi desa, sejarah, serta peta wilayah desa.',
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Statistik',
        'paragraf' =>
            'Menyajikan tampilan statistik dari berbagai data yang ada di desa dengan cara yang mudah dipahami oleh masyarakat.',
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])



    @include('components.fitur.imageTextSection', [
        'judul' => 'Publikasi Umum',
        'paragraf' =>
            'Menampilkan dokumentasi kegiatan, berita-berita terkini di desa, serta kalender kegiatan untuk memudahkan akses informasi masyarakat.',
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Bank Data Desa',
        'paragraf' =>
            'Menyajikan berbagai data dan laporan umum yang dapat diakses oleh masyarakat untuk transparansi dan akuntabilitas.',
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Berbagai Potensi dan Fasilitas Desa',
        'paragraf' =>
            'Memperkenalkan potensi pariwisata dan pertanian desa, serta berbagai fasilitas yang dimiliki oleh desa untuk mempromosikan dan meningkatkan pengembangan wilayah.',
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'PPID',
        'paragraf' => 'Menu ini memberikan masyarakat akses untuk mengetahui PPID (Pejabat Pengelola Informasi dan Dokumentasi) Desa. Informasi secara berkala, informasi serta merta, hingga informasi 
            setiap saat yang dapat di akses dengan mudah akan memberikan transparasi dalam pemerintahan',
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'SDGs',
        'paragraf' => 'SDGs Merupakan agenda global yang ditetapkan oleh Perserikatan Bangsa-Bangsa (PBB) untuk mengatasi tantangan-tantangan sosial, ekonomi, dan lingkungan yang ada di seluruh dunia. 
            DIGIDES menyediakan layanan SDGs Desa untuk memberikan informasi mengenai pembangunan desa yang nantinya akan memudahkan aparat dalam mengembil keputusan untuk mencapai Tujuan Pembangunan 
            Berkelanjutan (Sustainable Development Goals/SDGs)',
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

@include('components.fitur.imageTextSection', [
    'judul' => 'IDM',
    'paragraf' => 'Ketahanan sosial, Ketahanan ekonomi, dan Ketahanan lingkungan merupakan tiga indikator kunci untuk mengetahui nilai IDM (Indeks Desa Membangun). Fitur ini akan membantu anda mengukur
                   seberapa jauh kemajuan dan perkembangan di desa anda',
    'image' => 'https://via.placeholder.com/400',
    'imageLeft' => true,
])

@include('components.fitur.imageTextSection', [
    'judul' => 'Cek Bansos',
    'paragraf' => 'Cek data dan bantuan sosial yang akan anda salurkan melalui fitur Cek Bansos. Dengan menggunakan DIGIDES, anda cukup memasukkan NIK dan anda sudah dapat mengetahui data dan bantuan sosial yang disalurkan dengan cepat dan tepat',
    'image' => 'https://via.placeholder.com/400',
    'imageRight' => true,
])








    <div class="w-[90%] mx-auto">
        @include('components.slider.slider')
    </div>
@endsection
