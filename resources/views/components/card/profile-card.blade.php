<div class="flex space-x-2 md:items-center bg-{{ $color }}-600 rounded-lg shadow-md w-full md:h-[150px] h-[14rem]">
    <!-- Child Div Pertama: Gambar -->
    @isset($image)
        <div class="w-[20%] h-full">
            <img src="{{ $image }}" alt="Gambar" class="w-full rounded-md h-full ">
        </div>
    @endisset

    <!-- Child Div Kedua: Teks -->
    <div class="w-[80%] p-4 md:h-[10rem] box-border text-white">
        <h1 class="text-xl font-bold ">{{ $title }}</h1>
        <p class="">{{ $text }}</p>
    </div>
</div>
