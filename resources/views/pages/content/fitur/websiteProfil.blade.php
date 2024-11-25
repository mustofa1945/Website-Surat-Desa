@extends('layouts.app')

@section('title', 'Website-Profile')

@section('content')
    <div class="w-full px-2 md:px-[10rem]">

        <div class="mt-[100px]">
            @include('components.fitur.imageTextSectionRight', [
                'title' => 'Dapatkan berbagai manfaat dari website profil desa',
                'text' => "Dapatkan berbagai manfaat dari memiliki website profil desa. Kami akan membantu Anda dalam mengoptimalkan halaman website profil
                                   desa Anda dengan konten yang menarik dan penting untuk dibaca, mulai dari profil pemerintahan, publikasi kegiatan, data statistik, 
                                    hingga potensi wisata yang dimiliki oleh desa.",
                'image' => asset('images/desa5.jpg'),
            ])
        </div>

        <div class="grid  w-full  mt-[10rem]">
            <div class="w-full flex flex-col gap-y-[10vh]">
                <h2 class="text-2xl md:text-3xl font-bold place-self-center text-[#FF2E63]">Fitur</h2>
                {{-- Kolom Kedua --}}

                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Profil Pemerintahan',
                    'text' => 'Menampilkan informasi lengkap mengenai struktur kelengkapan pemerintahan desa.',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom 3 --}}

                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'Profil Desa',
                    'text' =>
                        'Memuat informasi dasar tentang desa, visi dan misi desa, sejarah, serta peta wilayah desa.',
                    'image' => asset('images/desa5.jpg'),
                ])

                {{-- Kolom 4 --}}
                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Statistik',
                    'text' =>
                        'Menyajikan tampilan statistik dari berbagai data yang ada di desa dengan cara yang mudah dipahami oleh masyarakat.',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom 5 --}}
                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'Publikasi Umum',
                    'text' =>
                        'Menampilkan dokumentasi kegiatan, berita-berita terkini di desa, serta kalender kegiatan untuk memudahkan akses informasi masyarakat.',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom 6 --}}
                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Bank Data Desa',
                    'text' =>
                        'Menyajikan berbagai data dan laporan umum yang dapat diakses oleh masyarakat untuk transparansi dan akuntabilitas.',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom 7 --}}
                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'Berbagai Potensi dan Fasilitas Desa',
                    'text' =>
                        'Memperkenalkan potensi pariwisata dan pertanian desa, serta berbagai fasilitas yang dimiliki oleh desa untuk mempromosikan dan meningkatkan pengembangan wilayah.',
                    'image' => asset('images/desa5.jpg'),
                ])

                {{-- Kolom 8 --}}
                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'PPID',
                    'text' =>
                        'Menu ini memberikan masyarakat akses untuk mengetahui PPID (Pejabat Pengelola Informasi dan Dokumentasi) Desa. Informasi secara berkala, informasi serta merta, hingga informasi setiap saat yang dapat di akses dengan mudah akan memberikan transparasi dalam pemerintahan',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom 9 --}}
                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'SDGs',
                    'text' => 'SDGs Merupakan agenda global yang ditetapkan oleh Perserikatan Bangsa-Bangsa (PBB) untuk mengatasi tantangan-tantangan sosial, ekonomi, dan lingkungan yang ada di seluruh dunia. DIGIDES menyediakan layanan SDGs Desa untuk
                                         memberikan informasi mengenai pembangunan desa yang nantinya akan memudahkan aparat dalam mengembil keputusan untuk mencapai Tujuan Pembangunan Berkelanjutan (Sustainable Development Goals/SDGs)',
                    'image' => asset('images/desa5.jpg'),
                ])

                {{-- Kolom 10 --}}
                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'IDM',
                    'text' =>
                        'Ketahanan sosial, Ketahanan ekonomi, dan Ketahanan lingkungan merupakan tiga indikator kunci untuk mengetahui nilai IDM (Indeks Desa Membangun). Fitur ini akan membantu anda mengukur seberapa jauh kemajuan dan perkembangan di desa anda',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom 11 --}}
                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'Cek Bansos',
                    'text' =>
                        'Cek data dan bantuan sosial yang akan anda salurkan melalui fitur Cek Bansos. Dengan menggunakan DIGIDES, anda cukup memasukkan NIK dan anda sudah dapat mengetahui data dan bantuan sosial yang disalurkan dengan cepat dan tepat',
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
