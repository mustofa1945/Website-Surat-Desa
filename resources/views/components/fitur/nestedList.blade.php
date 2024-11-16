<section class="mx-auto mt-[1rem]  px-6 w-[90%] py-16 flex-col">
    @isset($fitur)
        <h1 class="text-[35px] place-self-center font-bold mb-[30px]">{{ $fitur }}</h1>
    @endisset
    <div class="flex justify-between items-center w-full ">


        @isset($imageLeft)
            <div class=" w-[50%] flex justify-start">
                <img src="{{ $image }}" alt="Sample Image" class="rounded-lg shadow-lg w-full md:w-3/4">
            </div>
        @endisset
        <div class="flex flex-col  w-[50%] text-left">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $judul }}</h1>
            <p class="text-gray-600 mb-6">
                {{ $paragraf }}
            </p>
            @isset($list)
                <ul class="list-disc pl-6 text-[20px]">
                    @foreach ($list as $item => $value)
                        <li>
                            {{ $item}}
                            <ul class="list-disc pl-6 text-[20px]"">
                                @foreach ($value as $items)
                                    <li>{{ $items }}</li>
                                @endforeach
                            </ul> 
                        </li>
                    @endforeach
                </ul>
            @endisset
        </div>

        <!-- Child 1: Image Container -->
        @isset($imageRight)
            <div class="md:w-1/2 flex w-[20%] justify-end mb-8 md:mb-0">
                <img src="{{ $image }}" alt="Sample Image" class="rounded-lg shadow-lg w-full md:w-3/4">
            </div>
        @endisset
    </div>
</section>
