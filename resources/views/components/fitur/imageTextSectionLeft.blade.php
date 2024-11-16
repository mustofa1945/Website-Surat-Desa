 <section class="md:mx-auto md:px-6 md:w-[90%] md:py-16 md:items-center md:flex flex-col">

     @isset($fitur)
         <h1 class="text-[35px]  place-self-center font-bold mb-[30px]">{{ $fitur }}</h1>
     @endisset


     <div class="grid md:grid-cols-4 md:grid-rows-2 grid-cols-1 grid-rows-10 md:gap-0 gap-3 ">

             <div class="md:col-span-2 md:row-span-2 md:order-1 row-span-4 order-2 flex justify-start">
                 <img src="{{ $image }}" alt="Sample Image" class="rounded-lg shadow-lg">
             </div>


         {{-- Div Pertama --}}
         <div class="md:col-span-2 md:row-span-1 row-span-2 order-1 md:order-2 md:flex  md:items-end flex justify-center  md:justify-start items-end h-full">
             @if (isset($color))
                 <h1 class=" md:text-4xl text-[20px]    font-bold text-{{ $color }}-600 mb-4">
                     {{ $judul }}
                 </h1>
             @else
                 <h1 class="md:text-4xl text-[20px]   font-bold text-gray-800 mb-4">{{ $judul }}</h1>
             @endif
         </div>

         <div class=" md:row-span-1 md:col-span-2 row-span-4 order-3 flex flex-col">
             <p class=" text-gray-600 mb-6">
                 {{ $paragraf }}
             </p>

             @isset($button)
                 <div class="w-[40%] self-center md:self-start ">
                     @include('components.button.button-more', ['value' => $button])
                 </div>
             @endisset

             @isset($list)
                 @if (!isset($icon))
                     <ul class=" list-disc pl-6 text-[20px]">
                         @foreach ($list as $item)
                             <li class="">
                                 {{ $item }}
                             </li>
                         @endforeach
                     </ul>
                 @else
                     <ul class=" list-disc pl-6 text-[20px]">
                         @foreach ($list as $item)
                             <li class="flex space-x-3 items-center">
                                 <img src="{{ $icon }}" alt="Gambar 1" class="icon w-[25px] h-[25px]">
                                 <span>{{ $item }}</span>

                             </li>
                         @endforeach
                 @endif
             @endisset
         </div>
     </div>

 </section>
