{{-- Kolom Pertama --}}
<section class="flex flex-wrap md:w-[80%] md:h-[30rem] box-border ">
    <div class="w-full md:hidden block order-first">
        <h2 class="text-[25px] md:text-3xl font-bold md:hidden text-[#FF2E63] bolck">{{ $title }}</h2>
    </div>
    <div class="md:w-[50%] flex flex-col justify-center items-center md:px-2 md:order-first order-last">
        <h2 class="text-[25px] md:text-3xl font-bold md:block hidden text-[#FF2E63] md:self-start">{{ $title }}</h2>
        <p class="text-[#252A34] ">
          {{ $text }}
        </p>
        <div class="w-full flex md:justify-start justify-center md:mt-[0.8rem] mt-[1.2rem]">
            @include('components.button.button-more' , [
                'value' => $value
            ])
        </div>
    </div>
    <!-- Bagian Gambar -->
    <div class="md:w-[50%] md:h-full order-2 ">
        <img src="{{ $image }}" alt="Administrasi Desa" class="w-full md:h-full  object-cover">
    </div>
</section>