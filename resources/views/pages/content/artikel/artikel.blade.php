@extends('layouts.app')

@section('title', 'Artikel')

@section('content')

    {{-- @dd($artikel[0]) --}}

    <div class="flex flex-col mx-auto w-[80%] space-y-6 mt-[100px] bg-white p-4 rounded-lg shadow-lg">
        <!-- Judul Utama -->
        <h1 class="place-self-center text-3xl font-bold  text-[#FF2E63]">Artikel</h1>

        <div class="w-full flex flex-wrap gap-3">


            <!-- Kontainer Kartu -->
            @foreach ($artikel as $item)
                <div class="md:w-1/5 w-full flex flex-col space-y-4">
                    <!-- Gambar Utama -->
                    <div class="w-full flex justify-center">
                        <img src="{{ asset('images/desa8.jpg') }}" alt="Gambar Utama" class="w-full rounded-lg shadow-md">
                    </div>

                    <!-- Informasi Yayasan -->
                    <div class="flex flex-col  space-y-2 text-gray-700">
                        <h1 class="text-xl font-semibold">{{ $item->title }}</h1>
                        <p class="text-sm text-gray-600">{{ $item->users[0]->name }}</p>
                        <!-- Lokasi -->
                        <div class="flex items-center justify-between space-x-2 mt-2">
                            <p class="text-sm font-medium">{{ \Carbon\Carbon::parse($item->creat_at)->diffForHumans() }}
                            </p>
                            <a href="" class='hover:text-sky-500'>More Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>


@endsection
