 {{-- @dd($ListCategory[0]->Laptops[0]->trend) --}}
 @extends('layouts.app')

 @section('title', 'Beranda')

 @section('content')
     <div>
         @include('components.hero.firstHero')
     </div>

     <div class="md:w-[90%] w-[25rem] flex flex-col md:mx-auto  ml-5 md:mt-[17rem] mt-[13rem] md:text-[3rem] text-[2rem]">
         <h1 class="place-self-center">Cerita Sukses Digital</h1>
         @include('components.slider.slider')
     </div>

     <div class="mt-[5rem] md:mx-auto md:w-full w-[27.5rem] md:h-[40rem] h-[57rem] box-border px-4 bg-slate-200 ">
         @include('components.fitur.imageTextSectionLeft', [
             'judul' => 'WebGIS DIGIDES',
             'paragraf' => "Peta Desa menjadi salah satu aset penting bagi masyarakat desa, pemerintah, dan pihak-pihak terkait dalam proses perencanaan dan
                                    pengelolaan wilayah. Melalui webgis, kami memfasilitasi pemetaan desa, pemantauan lingkungan, serta pengambilan keputusan yang tepat & 
                                    berkelanjutan. Dengan WebGIS, Pemetaan Masyarakat Desa jauh lebih baik & terukur.",
             'image' => 'https://via.placeholder.com/400',
             'button' => 'Selengkapnya',
             'color' => 'green',
         ])
     </div>

     <div class="mt-[5rem] md:mx-auto md:w-full w-[27.5rem] md:h-[40rem] h-[57rem] box-border px-4 bg-slate-200 ">
         @include('components.fitur.imageTextSectionRight', [
             'judul' => 'FITUR DIGIDES',
             'paragraf' =>
                 'Bersama DIGIDES, membawa desa anda ke era digital, pekerjaan jauh lebih efektif & efisien. Nikmati beragam fitur aplikasi DIGIDES dengan satu platform yang sesuai dengan UU Desa & Peraturan Menteri Dalam Negeri.',
             'image' => 'https://via.placeholder.com/400',
             'button' => 'LIhat Video',
             'color' => 'green',
         ])
     </div>
     <div>
         @include('section.solutionSection')
     </div>
     <div>
         @include('components.fitur.imageTextSectionRight', [
             'judul' => 'Fitur Lengkap dan Mudah Digunakan',
             'paragraf' => "DIGIDES adalah platform inovatif untuk pengelolaan desa yang menyediakan berbagai layanan seperti Layanan Administrasi, Persuratan Terstandar, Pengelolaan Pajak PBB-P2, Manajemen Bansos, Website Profil Desa, dan layanan pendukung 
                                     lainnya seperti Siskuedes Online, WebGIS, & Pantuan Kecamatan & Kabupaten dalam Dashboard.",
             'image' => 'https://via.placeholder.com/400',
             'list' => [
                 'Mudah digunakan',
                 'Terintegrasi antara Android dan Website',
                 'Dapat berjalan secara online dan offline',
                 'Mudah dalam memasukkan data',
                 'Terintegrasi PRODESKEL, IDM, dan SDGs.',
             ],
             'color' => 'green',
             'icon' => asset("images/icons/checked.png")
         ])
     </div>
     <div class="w-full mx-auto bg-gray-200 ">
         @include('section.benefitSection')
     </div>
     <div class="w-full bg-white mx-auto ">
         @include('section.numberUserSection')
     </div>
     <div class="w-[90%] bg-white mx-auto ">
         @include('section.QuestFromVillageHeadSection')
     </div>
     <div class="w-[80%] border-2  mx-auto mt-[3rem]">
         @include('section.listVillageSection')
     </div>
     <div class="w-[80%] border-2  mx-auto mt-[3rem]">
         @include('section.faqSection')
     </div>
     <div class="w-full bg-white  mx-auto mt-[3rem]">
         @include('section.sponsorSection')
     </div>

 @endsection
