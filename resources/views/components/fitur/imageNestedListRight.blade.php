{{-- Kolom Pertama --}}
<section class="flex flex-wrap md:w-[80%] md:h-[30rem] box-border">
    <div class="w-full md:hidden block order-first">
        <h2 class="text-[25px] md:text-3xl font-bold text-[#FF2E63] md:hidden bolck">{{ $title }}</h2>
    </div>
    <div class="md:w-[50%] flex flex-col  md:px-2 md:order-first order-last">
        <h2 class="text-[25px] md:text-3xl font-bold md:block hidden text-[#FF2E63] md:self-start">{{ $title }}</h2>
        <p class="text-[#252A34] ">
          {{ $text }}
        </p>
        <ul class='list-disc md:pl-10 md:pt-2 pl-5 text-[#252A34]'>
            @foreach ($list as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
    <!-- Bagian Gambar -->
    <div class="md:w-[50%] md:h-full order-2 ">
        <img src="{{ $image }}" alt="Administrasi Desa" class="w-full md:h-full  object-cover">
    </div>
</section>