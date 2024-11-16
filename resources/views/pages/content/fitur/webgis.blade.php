@extends('layouts.app')

@section('title', 'Siskeudes')

@section('content')


    @include('components.fitur.imageTextSection', [
        'judul' => 'WebGIS Peta Desa',
        'paragraf' => "WebGIS Peta Desa adalah sumber daya yang berharga bagi masyarakat desa, pemerintah, serta berbagai pihak yang terlibat 
                      dalam perencanaan dan pengelolaan wilayah. Dengan beragam layanan yang ditawarkan, kami membantu dalam pemetaan desa, pemantauan 
                       lingkungan, dan pengambilan keputusan yang berkelanjutan.",
        'button' => 'Selengkapnya',
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'fitur' => 'Fitur WebGIS',
        'judul' => 'Peta Administrasi Desa',
        'paragraf' =>
           'Penting bagi masyarakat untuk memahami struktur administratif hingga distribusi sumber daya dan layanan yang disediakan oleh pemerintah desa.
            Peta administrasi desa akan memberikan representasi grafis dari batas-batas desa, wilayah administrasi serta batas-batas tiap dusun atau RT/RW dalam desa.
             Lokasi kantor desa, sekolah, pusat kesehatan, hingga fasilitas umum lainnya dapat dilihat melalui menu ini.',
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Peta Topografi Desa',
        'paragraf' =>
            'Informasi mengenai relief dan kontur tanah seperti sungai, bukit, lembah, dan fitur alam lainnya akan sangat membantu pemerintah dan masyarakat dalam mengambil 
            keputusan terkait pembangunan dan pelestarian lingkungan. Untuk itu WebGis menghadirkan Peta Topografi Desa untuk mempermudah pemerintah serta masyarakat untuk mendapatkan 
            informasi tersebut sehingga keputusan seperti perencanaan tata guna lahan, pengelolaan drainase, dan penggunaan sumber daya alam dapat dilakukan secara optimal',
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Peta Jalan Desa',
        'paragraf' =>
            'Berbeda dengan peta sebelumnya, peta Jalan Desa akan memberikan gambaran mengenai jalan dan rute transportasi dalam desa. Melalui peta ini pemerintah dan masyarakat akan lebih mudah
             untuk meningkatkan infrastruktur dan aksesbilitas transportasi dalam desa',
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])

@include('components.fitur.imageTextSection', [
    'judul' => 'Peta Aset Desa',
    'paragraf' =>
        'Aset desa seperti lahan pertanian, hutan, hingga lahan budidaya akan ditampilkan dalam menu Peta Aset Desa. Melalui Peta Aset Desa, pemerintah dan masyarakat akan lebih mudah dalam 
        melakukan perencanaan hingga pengelolaan sumber daya alam yang berkelanjutan sehingga pemanfaatan lahan dan keseimbangan ekosistem desa dapat dipantau secara optimal',
    'image' => 'https://via.placeholder.com/400',
    'imageRight' => true,
])

@include('components.fitur.imageTextSection', [
    'judul' => 'Peta Potensi Wisata',
    'paragraf' =>
        'Dengan menunjukkan lokasi tempat-tempat yang menarik seperti wisata alam, tempat bersejarah, hingga fasilitas wisata, Peta Potensi Wisata akan sangat membantu untuk mengembangkan sektor
         pariwisata lokal serta mempromosikan warisan budaya dan keindahan alam desa.',
    'image' => 'https://via.placeholder.com/400',
    'imageLeft' => true,
])

@include('components.fitur.imageTextSection', [
    'judul' => 'Peta Potensi Ekonomi',
    'paragraf' =>
        'Peta ini memuat informasi mengenai peluang ekonomi yang ada di desa. Informasi ini akan membantu pemerintah dan para pengusaha lokal dalam mengidentifikasi dan mengembangkan sektor perekonomian desa.',
    'image' => 'https://via.placeholder.com/400',
    'imageRight' => true,
])

@include('components.fitur.imageTextSection', [
    'judul' => 'Peta Pemanfaatan Lahan',
    'paragraf' =>
        'Peta yang memberikan pandangan holistik terhadap perkembangan desa ini akan menunjukkan bagaimana lahan desa digunakan untuk berbagai keperluan mulai dari pertanian, perumahan, komersial, hingga kawasan hijau.
         Melalui Peta Pemanfaatan Lahan, pemerintah dan masyarakat akan dengan mudah melakukan perencanaan pengembangan wilayah yang berkelanjutan',
    'image' => 'https://via.placeholder.com/400',
    'imageLeft' => true,
])

@include('components.fitur.imageTextSection', [
    'judul' => 'Peta Aksesibilitas Desa',
    'paragraf' =>
        'Peta Aksesibilitas menyoroti lokasi sarana transportasi, seperti stasiun bus, jalan tol, bandara terdekat, hingga jarak dari suatu lokasi ke lokasi lainnya di desa. Melalui informasi ini, tingkat aksesibilitas
         dan konektivitas desa dengan wilayah sekitarnya akan mudah untuk diukur yang mana dapat berdampak pada pertumbuhan ekonomi dan kesejahteraan masyarakat desa.',
    'image' => 'https://via.placeholder.com/400',
    'imageRight' => true,
])

@include('components.fitur.imageTextSection', [
    'judul' => 'Peta Sumber Daya Alam',
    'paragraf' =>
        'Peta ini mencakup informasi mengenai sumber daya alam seperti mata air, hutan, hingga tambang yang ada di desa. Melalui peta ini, pemerintah dan masyarakat desa akan lebih mudah dalam merawat, mengelola, dan 
        menggunakan sumber daya alam dengan bijak',
    'image' => 'https://via.placeholder.com/400',
    'imageLeft' => true,
])


    <div class="w-[90%] mx-auto">
        @include('components.slider.slider')
    </div>
@endsection
