 {{-- @dd($ListCategory[0]->Laptops[0]->trend) --}}
 @extends('layouts.app')

 @section('title', 'Beranda')

 @section('content')
     <div class="w-full flex justify-center items-center">
         @include('components.hero.firstHero')
     </div>

     <div class="md:w-[80%] w-full h-[20rem] flex flex-col md:mx-auto md:mt-[17rem] mt-[13rem]">
         <h1 class="place-self-center md:text-[3rem] text-[2rem]">Cerita Sukses Digital</h1>
         @include('components.slider.slider' , ['id' => 'image-slider'])
     </div>

     <div class="mt-[5rem] md:mx-auto  w-full  box-border px-4  md:py-8 py-4 bg-slate-200 ">
        <div class=" h-[85vh] w-full flex justify-center items-center box-border ">
         @include('components.fitur.imageAndButtonLeft', [
             'title' => 'WebGIS DIGIDES',
             'text' => 'Fitur ini sangat praktis bagi warga yang ingin meminta surat jarak jauh, cukup dengan menggunakan aplikasi DIGIDES, lakukan request,
                       mengisi form dan dapatkan kode surat yang nantinya akan dimasukkan ke Andi Smart untuk langsung mencetak surat yang telah di request..',
             'image' => asset('images/desa4.jpg'),
             'value' => 'Selengkapnya'
         ])
        </div>
     </div>

     <div class="md:mx-auto md:w-full w-full  border-2 md:py-6 py-6 px-4 bg-white">
        <div class=" h-[70vh] md:h-[85vh] w-full flex justify-center items-center box-border ">
            @include('components.fitur.imageAndButtonRight', [
             'title' => 'FITUR DIGIDES',
             'text' => 'Bersama DIGIDES, membawa desa anda ke era digital, pekerjaan jauh lebih efektif & efisien.
                        Nikmati beragam fitur aplikasi DIGIDES dengan satu platform yang sesuai dengan UU Desa & Peraturan Menteri Dalam Negeri.',
             'image' => asset('images/desa4.jpg'),
             'value' => 'Lihat Video'
         ])
        </div>
     </div>

     <div class="mt-[5rem]  bg-slate-200 md:block hidden">
         @include('section.solutionSection')
     </div>

     <div class="md:mx-auto  w-full  border-2  py-6 md:py-2 px-4 bg-white ">
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
                'Terintegrasi PRODESKEL, IDM, dan SDGs'
             ]
         ])
        </div>
     </div>

     <div class=" md:mx-auto md:w-full w-full   bg-slate-200 ">
         @include('section.benefitSection')
     </div>

     <div class="md:w-full w-full  md:mx-auto  ">
         @include('section.numberUserSection')
     </div>

     <div class="md:w-[90%] w-full md:h-[70vh] h-[60vh] md:px-0 px-5  md:mx-auto ">
        <h1 class="place-self-center md:text-[4rem] text-[2rem] ">Apa Kata Kepala Desa ?</h1>
         @include('components.slider.slider2')
     </div>

     <div class="md:w-full  mx-auto mt-[3rem]">
         @include('section.listVillageSection')
     </div>

     <div
         class="md:w-full md:h-[50rem] md:py-0  py-12 box-border flex md:justify-center items-center bg-slate-200  mx-auto mt-[3rem]">
         @include('section.faqSection')
     </div>
     
     <div class="w-full bg-white  mx-auto mt-[3rem]">
         @include('section.sponsorSection')
     </div>

 @endsection
