<section class="flex flex-wrap md:w-[80%] md:h-[30rem] h-[90%] box-border">
    <div class="w-full md:hidden block order-first   flex justify-center items-end">
        <h2 class="text-[25px] md:text-3xl font-bold text-[#EAEAEA] md:hidden bolck">{{ $title }}</h2>
    </div>
    <!-- Bagian Gambar -->
    <div class="md:w-[50%] md:h-full md:order-1 order-2 ">
        <img src="{{ $image }}" alt="Administrasi Desa">
            class="w-full h-full  object-cover">
    </div>
    <div class="md:w-[50%] flex flex-col md:justify-center md:items-center gap-y-2 md:pt-0 pt-2   md:px-4 md:order-2 order-last">
        <h2 class="text-[25px] md:text-3xl font-bold md:block hidden text-[#EAEAEA] md:self-start">{{ $title }}</h2>
        <p class="text-[#EAEAEA] ">
        {{ $text }}
        </p>
        <div class="w-full flex md:justify-start justify-center md:mt-[0.8rem] mt-[1.2rem]">
            @include('components.button.button-more' , [
                'value' => $value
            ])
        </div>
    </div>
</section>