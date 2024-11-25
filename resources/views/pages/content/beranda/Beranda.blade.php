 {{-- @dd($ListCategory[0]->Laptops[0]->trend) --}}
 @extends('layouts.app')

 @section('title', 'Beranda')

 @section('content')
     <div class="w-full flex justify-center items-center">
         @include('components.hero.firstHero')
     </div>

     <div class="md:w-[80%] w-full  flex flex-col md:mx-auto md:mt-[18rem] mt-[13rem]">
         <h1 class="place-self-center md:text-[3rem] text-[2rem] text-[#FF2E63]">Cerita Sukses Digital</h1>
         @include('components.slider.slider')
     </div>

     <div class=" md:mx-auto  w-full  box-border px-4  mt-10 md:py-8 py-4 bg-[#252A34] ">
         <div class=" h-[85vh] w-full flex justify-center items-center box-border ">
             @include('components.fitur.imageAndButtonLeft', [
                 'title' => 'WebGIS DIGIDES',
                 'text' => 'Fitur ini sangat praktis bagi warga yang ingin meminta surat jarak jauh, cukup dengan menggunakan aplikasi DIGIDES, lakukan request,
                                                                           mengisi form dan dapatkan kode surat yang nantinya akan dimasukkan ke Andi Smart untuk langsung mencetak surat yang telah di request..',
                 'image' => asset('images/desa4.jpg'),
                 'value' => 'Selengkapnya',
             ])
         </div>
     </div>

     <div class="md:mx-auto md:w-full w-full  border-2 md:py-6 py-2 px-4  bg-[#EAEAEA] ">
         <div class=" h-[70vh] md:h-[85vh] w-full flex justify-center items-center box-border ">
             @include('components.fitur.imageAndButtonRight', [
                 'title' => 'FITUR DIGIDES',
                 'text' => 'Bersama DIGIDES, membawa desa anda ke era digital, pekerjaan jauh lebih efektif & efisien.
                                                                            Nikmati beragam fitur aplikasi DIGIDES dengan satu platform yang sesuai dengan UU Desa & Peraturan Menteri Dalam Negeri.',
                 'image' => asset('images/desa4.jpg'),
                 'value' => 'Lihat Video',
             ])
         </div>
     </div>

     <div class="mt-[5rem]   bg-[#252A34] md:block hidden">
         @include('section.solutionSection')
     </div>

     <div class="md:mx-auto  w-full  border-2  md:py-2 px-4 bg-[#EAEAEA] ">
         <div class=" h-[100vh] md:h-[85vh] w-full flex justify-center items-center box-border ">
             @include('components.fitur.imageNestedListCenterLeft', [
                 'title' => 'Fitur Lengkap dan Mudah Digunakan',
                 'text' => 'DIGIDES adalah platform inovatif untuk pengelolaan desa yang menyediakan berbagai layanan seperti Layanan Administrasi, 
                                                                            Persuratan Terstandar, Pengelolaan Pajak PBB-P2, Manajemen Bansos, Website Profil Desa, dan layanan pendukung lainnya seperti 
                                                                            Siskuedes Online, WebGIS, & Pantuan Kecamatan & Kabupaten dalam Dashboard',
                 'image' => asset('images/desa4.jpg'),
                 'list' => [
                     'Mudah digunakan',
                     'Terintegrasi antara Android dan Website',
                     'Dapat berjalan secara online dan offline',
                     'Mudah dalam memasukkan data',
                     'Terintegrasi PRODESKEL, IDM, dan SDGs',
                 ],
             ])
         </div>
     </div>

     <div class=" md:mx-auto md:w-full w-full   bg-[#252A34] ">
         @include('section.benefitSection')
     </div>

     <div class="md:w-full w-full  md:mx-auto bg-[#EAEAEA] ">
         @include('section.numberUserSection')
     </div>

     <div class="w-full  md:px-0 px-5  md:mx-auto bg-[#252A34] flex flex-col justify-center items-center py-[15vh]">
         <h1 class="place-self-center md:text-[4rem] text-[#FF2E63] text-[2rem] ">Apa Kata Kepala Desa ?</h1>
         @include('components.slider.slider2')
     </div>

     <div class="md:w-full  md:mx-auto  py-[10vh] flex flex-col justify-center items-center gap-y-[5vh]">
         <h2 class="text-lg md:text-3xl font-bold place-self-center text-[#FF2E63]">Telah Digunakan Oleh Beberapa Desa</h2>
         <div class="flex flex-wrap  w-full md:w-[65%] justify-center items-center gap-4">
             @include('components.card.card-villages', [
                 'image' => asset('images/beranda-images/logo-villages/logo_1.png'),
                 'namaDesa' => 'KAP. KEPATANG',
                 'desc' => '101 desa/kelurahan',
             ])

             @include('components.card.card-villages', [
                 'image' => asset('images/beranda-images/logo-villages/logo_2.png'),
                 'namaDesa' => 'KAB. KONAWE',
                 'desc' => '93 Desa/Kelurahan',
             ])

             @include('components.card.card-villages', [
                 'image' => asset('images/beranda-images/logo-villages/logo_3.png'),
                 'namaDesa' => 'KAB. KAUR',
                 'desc' => '93 Desa/Kelurahan',
             ])
             @include('components.card.card-villages', [
                 'image' => asset('images/beranda-images/logo-villages/logo_4.jpg'),
                 'namaDesa' => 'KAB. GOWA',
                 'desc' => '51 Desa/Kelurahan',
             ])
             @include('components.card.card-villages', [
                 'image' => asset('images/beranda-images/logo-villages/logo_5.png'),
                 'namaDesa' => 'KAB. DONGGALA',
                 'desc' => '44 Desa/Kelurahan',
             ])
             @include('components.card.card-villages', [
                 'image' => asset('images/beranda-images/logo-villages/logo_6.png'),
                 'namaDesa' => 'KAB. MAMASA',
                 'desc' => '43 Desa/Kelurahan',
             ])
             @include('components.card.card-villages', [
                 'image' => asset('images/beranda-images/logo-villages/logo_7.png'),
                 'namaDesa' => 'KAB. POLEWALI MANDAR',
                 'desc' => '35 Desa/Kelurahan',
             ])
             @include('components.card.card-villages', [
                 'image' => asset('images/beranda-images/logo-villages/logo_8.png'),
                 'namaDesa' => 'KAB. ENREKANG',
                 'desc' => '27 Desa/Kelurahan',
             ])
             @include('components.card.card-villages', [
                 'image' => asset('images/beranda-images/logo-villages/logo_9.png'),
                 'namaDesa' => 'KAB. MOROWALI',
                 'desc' => '27 Desa/Kelurahan',
             ])
             @include('components.card.card-villages', [
                 'image' => asset('images/beranda-images/logo-villages/logo_10.png'),
                 'namaDesa' => 'KAB. LUWU',
                 'desc' => '24 Desa/Kelurahan',
             ])
             @include('components.card.card-villages', [
                 'image' => asset('images/beranda-images/logo-villages/logo_11.png'),
                 'namaDesa' => 'KAB. BANGKA SELATAN',
                 'desc' => '23 Desa/Kelurahan',
             ])
             @include('components.card.card-villages', [
                 'image' => asset('images/beranda-images/logo-villages/logo_12.png'),
                 'namaDesa' => 'KOTA TIDORE KEPULAUAN',
                 'desc' => '22 Desa/Kelurahan',
             ])
         </div>

         @include('components.button.button-more', [
             'value' => 'Selengkapnya',
         ])

     </div>

     <div class="md:w-full md:py-0  py-12 box-border flex md:justify-center items-center  bg-[#252A34] ">
         @include('section.faqSection')
     </div>

     <div class="w-full  flex justify-center items-center flex-col py-[10vh] gap-y-8">
         <h2 class="text-lg md:text-3xl font-bold place-self-center text-[#FF2E63]">Didukung oleh :</h2>
         <div class="flex flex-wrap  w-full md:w-[50%] justify-center gap-6 items-center gap-4">
             @include('components.card.card-sponsor', [
                 'image' => asset('images/beranda-images/sponsor-images/sponsor_1.jpg'),
             ])
             @include('components.card.card-sponsor', [
                 'image' => asset('images/beranda-images/sponsor-images/sponsor_2.jpg'),
             ])
             @include('components.card.card-sponsor', [
                 'image' => asset('images/beranda-images/sponsor-images/sponsor_3.jpg'),
             ])
             @include('components.card.card-sponsor', [
                 'image' => asset('images/beranda-images/sponsor-images/sponsor_4.jpg'),
             ])
             @include('components.card.card-sponsor', [
                 'image' => asset('images/beranda-images/sponsor-images/sponsor_5.jpg'),
             ])
             @include('components.card.card-sponsor', [
                 'image' => asset('images/beranda-images/sponsor-images/sponsor_6.jpg'),
             ])
             @include('components.card.card-sponsor', [
                 'image' => asset('images/beranda-images/sponsor-images/sponsor_7.jpg'),
             ])
             @include('components.card.card-sponsor', [
                 'image' => asset('images/beranda-images/sponsor-images/sponsor_8.jpg'),
             ])
         </div>
     </div>

 @endsection
