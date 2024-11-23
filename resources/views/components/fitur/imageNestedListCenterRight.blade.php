{{-- Kolom Pertama --}}
<section class="flex flex-wrap md:w-[80%] md:h-[30rem] box-border  mx-auto mt-[100px]">
    <div class="w-full md:hidden block order-first">
        <h2 class="text-[25px] md:text-3xl font-bold md:hidden bolck">{{ $title }}</h2>
    </div>
    <div class="md:w-[50%] flex flex-col  md:px-2 md:order-first order-last">
        <h2 class="text-[25px] md:text-3xl font-bold md:block hidden md:self-start">{{ $title }}</h2>
        <p class="text-gray-600 ">
          {{ $text }}
        </p>
        <ul class='list-disc md:pl-10 md:pt-2 pl-5'>
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