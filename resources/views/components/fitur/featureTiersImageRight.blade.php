<section class="flex flex-wrap md:w-full md:h-[60vh]  mx-auto mt-[100px]">
    <div class="w-full h-[10%] md:hidden flex md:justify-start justify-center block order-first">
        <h2 class="text-[25px] md:text-3xl font-bold md:hidden bolck">{{ $title }}</h2>
    </div>
    <div class="md:w-[65%] md:h-full h-[10%] flex flex-col justify-center md:px-2 md:order-first order-last">
        <h2 class="text-[25px] w-[90%] md:text-3xl font-bold md:block hidden md:self-start">
            {{ $title }}
        </h2>
        <p class="text-gray-600 md:text-[15px] text-[18px] ">
            {{ $text }} </p>
    </div>
    <!-- Bagian Gambar -->
    <div class="md:w-[35%] md:h-[100%] w-full h-[80vh] order-2 flex md:justify-start justify-center">
        <img src="{{ $image }}" alt="Administrasi Desa" class="w-[70%] md:w-full h-full  object-cover">
    </div>
</section>
