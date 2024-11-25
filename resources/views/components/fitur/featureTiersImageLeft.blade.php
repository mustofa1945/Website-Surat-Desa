<section
class="flex flex-wrap md:w-full md:h-[60vh]   mx-auto mt-[100px]">
<div class="w-full h-[10%] md:hidden flex md:justify-start justify-center block order-first">
    <h2 class="text-[25px] md:text-3xl font-bold md:hidden text-[#FF2E63] bolck">{{ $title }}</h2>
</div>
<div class="md:w-[65%] md:h-full h-[10%] flex flex-col justify-center md:px-2  order-last">
    <h2 class="text-[25px] md:text-3xl font-bold md:block hidden text-[#FF2E63] md:self-start">{{ $title }}</h2>
    <p class="text-[#252A34] md:text-[15px] text-[18px] ">
{{$text}}    </p>
</div>
<!-- Bagian Gambar -->
<div class="md:w-[35%] md:h-[100%] w-full bg-sky-500 h-[80vh] md:order-first order-2 flex md:justify-start justify-center ">
    <img src="{{ $image}}" alt="Administrasi Desa" class="w-[70%] md:w-full h-full bg-sky-500  object-cover">
</div>
</section>