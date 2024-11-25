@extends('layouts.app')

@section('title', 'WebDigides ')

@section('content')
    <div class="w-full px-2 md:px-[10rem]">

<div class="mt-[100px]">
        @include('components.fitur.imageTextSectionRight', [
            'title' => 'WebGIS Peta Desa',
            'text' =>
                'WebGIS Peta Desa adalah sumber daya yang berharga bagi masyarakat desa, pemerintah, serta berbagai pihak yang terlibat dalam perencanaan dan pengelolaan wilayah. Dengan beragam layanan yang ditawarkan, kami membantu dalam pemetaan desa, pemantauan lingkungan, dan pengambilan keputusan yang berkelanjutan.',
            'image' => asset('images/desa5.jpg'),
        ])
</div>

        <div class="grid  w-full  mt-[10rem]">
            <div class="w-full flex flex-col md:gap-y-[10vh]">
                <h2 class="text-2xl md:text-3xl font-bold place-self-center text-[#FF2E63]">Fitur WebGIS</h2>
                {{-- Kolom Pertama --}}

                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Peta Administrasi Desa',
                    'text' => 'Penting bagi masyarakat untuk memahami struktur administratif hingga distribusi sumber daya dan layanan yang disediakan oleh pemerintah desa. Peta administrasi desa akan memberikan representasi grafis dari batas-batas desa, wilayah administrasi serta batas-batas tiap dusun atau RT/RW dalam desa. 
                                                                    Lokasi kantor desa, sekolah, pusat kesehatan, hingga fasilitas umum lainnya dapat dilihat melalui menu ini.',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom Kedua --}}

                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'Peta Topografi Desa',
                    'text' => 'Informasi mengenai relief dan kontur tanah seperti sungai, bukit, lembah, dan fitur alam lainnya akan sangat membantu pemerintah dan masyarakat dalam mengambil keputusan terkait pembangunan dan pelestarian lingkungan. Untuk itu WebGis menghadirkan Peta Topografi Desa untuk mempermudah pemerintah serta
                                                                         masyarakat untuk mendapatkan informasi tersebut sehingga keputusan seperti perencanaan tata guna lahan, pengelolaan drainase, dan penggunaan sumber daya alam dapat dilakukan secara optimal',
                    'image' => asset('images/desa5.jpg'),
                ])

                {{-- Kolom Ketiga --}}
                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Peta Jalan Desa',
                    'text' =>
                        'Dengan menunjukkan lokasi tempat-tempat yang menarik seperti wisata alam, tempat bersejarah, hingga fasilitas wisata, Peta Potensi Wisata akan sangat membantu untuk mengembangkan sektor pariwisata lokal serta mempromosikan warisan budaya dan keindahan alam desa.',
                    'image' => asset('images/desa5.jpg'),
                ])

                {{-- Kolom keempat --}}

                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Peta Aset Desa',
                    'text' =>
                        'Aset desa seperti lahan pertanian, hutan, hingga lahan budidaya akan ditampilkan dalam menu Peta Aset Desa. Melalui Peta Aset Desa, pemerintah dan masyarakat akan lebih mudah dalam melakukan perencanaan hingga pengelolaan sumber daya alam yang berkelanjutan sehingga pemanfaatan lahan dan keseimbangan ekosistem desa dapat dipantau secara optimal.',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom Kelima --}}

                @include('components.fitur.imageTextSectionRight', [
                    'title' => '
                                Peta Potensi Wisata',
                    'text' =>
                        'Dengan menunjukkan lokasi tempat-tempat yang menarik seperti wisata alam, tempat bersejarah, hingga fasilitas wisata, Peta Potensi Wisata akan sangat membantu untuk mengembangkan sektor pariwisata lokal serta mempromosikan warisan budaya dan keindahan alam desa.',
                    'image' => asset('images/desa5.jpg'),
                ])

                {{-- Kolom Keempat --}}
                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Peta Potensi Ekonomi',
                    'text' =>
                        'Peta ini memuat informasi mengenai peluang ekonomi yang ada di desa. Informasi ini akan membantu pemerintah dan para pengusaha lokal dalam mengidentifikasi dan mengembangkan sektor perekonomian desa.',
                    'image' => asset('images/desa5.jpg'),
                ])

                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'Peta Pemanfaatan Lahan',
                    'text' =>
                        'Peta yang memberikan pandangan holistik terhadap perkembangan desa ini akan menunjukkan bagaimana lahan desa digunakan untuk berbagai keperluan mulai dari pertanian, perumahan, komersial, hingga kawasan hijau. Melalui Peta Pemanfaatan Lahan, pemerintah dan masyarakat akan dengan mudah melakukan perencanaan pengembangan wilayah yang berkelanjutan',
                    'image' => asset('images/desa5.jpg'),
                ])

                {{-- Kolom Keempat --}}
                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Peta Aksesibilitas Desa',
                    'text' =>
                        'Peta Aksesibilitas menyoroti lokasi sarana transportasi, seperti stasiun bus, jalan tol, bandara terdekat, hingga jarak dari suatu lokasi ke lokasi lainnya di desa. Melalui informasi ini, tingkat aksesibilitas dan konektivitas desa dengan wilayah sekitarnya akan mudah untuk diukur yang mana dapat berdampak pada pertumbuhan ekonomi dan kesejahteraan masyarakat desa.',
                    'image' => asset('images/desa5.jpg'),
                ])

                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'Peta Sumber Daya Alam',
                    'text' =>
                        'Peta ini mencakup informasi mengenai sumber daya alam seperti mata air, hutan, hingga tambang yang ada di desa. Melalui peta ini, pemerintah dan masyarakat desa akan lebih mudah dalam merawat, mengelola, dan menggunakan sumber daya alam dengan bijak',
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
