<section class="flex flex-wrap gap-y-[4vh] md:gap-y-0 md:w-[80%] md:h-[10rem] h-[20vh] box-border mx-auto ">
    <div class="w-full h-[10%] md:hidden block order-first flex justify-center items-center md:justify-none md:items-none">
        <h2 class="text-[25px] md:text-3xl font-bold md:hidden bolck">{{ $title }}</h2>
    </div>
    <!-- Bagian Gambar -->
    <div class="w-full flex md:justify-none justify-center  h-[70%] md:w-[15%] md:h-full md:order-1 order-2 ">
        <img src="{{ $image }}" alt="Administrasi Desa"
            class="md:w-full w-[50%] h-full  object-cover">
    </div>
    <div class="w-full h-[20%] md:h-full md:w-[85%] flex flex-col justify-center items-center md:gap-y-3 md:px-2 md:order-2 order-last">
        <h2 class="text-lg md:text-3xl font-bold md:block hidden md:self-start">{{ $title }}</h2>
        <p class="w-full text-gray-600 ">
        {{ $text }}
        </p>
    </div>
</section>