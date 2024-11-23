<section class="flex flex-wrap md:w-[80%] md:h-[30rem] box-border ">
    <div class="w-full md:hidden block order-first">
        <h2 class="text-lg md:text-3xl font-bold md:hidden bolck">{{ $title }}</h2>
    </div>
    <!-- Bagian Gambar -->
    <div class="md:w-[50%] md:h-full md:order-1 order-2 ">
        <img src="{{ $image }}" alt="Administrasi Desa"
            class="w-full md:h-full  object-cover">
    </div>
    <div class="md:w-[50%] flex flex-col md:justify-center md:items-center md:px-2 md:gap-y-5 md:order-2 order-last">
        <h2 class="text-[25px] md:text-3xl font-bold md:block hidden md:self-start">{{ $title }}</h2>
        <p class="text-gray-600 ">
        {{ $text }}
        <ul class='list-disc w-full md:pl-10 pl-5'>
            @foreach ($list as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
        </p>
    </div>
</section>