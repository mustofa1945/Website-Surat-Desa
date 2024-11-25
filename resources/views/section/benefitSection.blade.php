    <!-- Section -->
    <section class="container mx-auto md:px-6 py-16 flex-col flex md:gap-0 gap-5">
        <!-- Child 1: Header -->
        <div class="mb-8">
            <h1 class="md:text-4xl text-[25px] font-bold text-[#EAEAEA] place-self-center">Manfaat DIGIDES</h1>
        </div>

        <!-- Child 2: div.anak-kedua -->
        <div class="anak-kedua flex  gap-x-10 md:mx-0 mx-2 md:gap-x-0 box-border">

            <!-- Anak Kedua - Child 1: Title and Cards -->
            <div class="flex flex-col items-center w-1/2 gap-x-4 md:gap-y-0">
                <h1 class="md:text-2xl text-[20px] font-semibold text-[#EAEAEA]">Tanpa DIGIDES</h1>
                <div class="grid gap-10 md:gap-4 md:mt-0 mt-4">

                    @include('components.card.profile-card', [
                        'title' => 'Jangkauan',
                        'text' => 'Pengenalan Potensi Desa sangat terbatas',
                        'color' => 'orange',
                    ])

                    @include('components.card.profile-card', [
                        'title' => 'Kecepatan',
                        'text' => '30 Menit s/d 1 → 4 hari',
                        'color' => 'orange',
                    ])

                    @include('components.card.profile-card', [
                        'title' => 'Kecerdasan',
                        'text' => 'Data kacau dan butuh SDM yang mengerti semuanya',
                        'color' => 'orange',
                    ])

                </div>
            </div>

            <!-- Anak Kedua - Child 2: Images -->
            <div class="flex  md:block hidden w-1/4 ">
                <div class="w-full  mt-[5rem] flex justify-center items-center ">
                    <img src="{{ asset('images/icons/wifi-signal.png') }}" alt="Image 1"
                        class="w-20 h-20 bg-cover ">
                </div>
                <div class="w-full  mt-[5rem] flex justify-center items-center ">
                    <img src="{{ asset('images/icons/menu.png') }}" alt="Image 2" class=" w-20 h-20 bg-cover">
                </div>
                <div class="w-full  mt-[5rem] flex justify-center items-center">
                    <img src="{{ asset('images/icons/idea.png') }}" alt="Image 3" class="w-20 h-20 bg-cover">
                </div>
            </div>

            <!-- Anak Kedua - Child 3: Title and Cards (same as first child) -->
            <div class="flex flex-col w-1/2 items-center">
                <h1 class="md:text-2xl text-[20px] font-semibold text-[#EAEAEA]">Dengan DIGIDES</h1>
                <div class="grid gap-10 md:gap-4  md:px-10 md:mt-0 mt-4">

                    @include('components.card.profile-card', [
                        'title' => 'Jangkauan',
                        'text' => 'Dengan promosi digital dapat menjangkau lebih banyak (tak terbatas)',
                        'color' => 'teal',
                    ])

                    @include('components.card.profile-card', [
                        'title' => 'Kecepatan',
                        'text' => '+1-5 Menit',
                        'color' => 'teal',
                    ])

                    @include('components.card.profile-card', [
                        'title' => 'Kecerdasan',
                        'text' => 'Smart System',
                        'color' => 'teal',
                    ])
                </div>
            </div>

        </div>
    </section>
