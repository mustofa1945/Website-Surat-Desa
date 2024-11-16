    <!-- Section -->
    <section class="container mx-auto px-6 py-16 flex-col flex">
        <!-- Child 1: Header -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-800 place-self-center text-green-500">Manfaat DIGIDES</h1>
        </div>

        <!-- Child 2: div.anak-kedua -->
        <div class="anak-kedua flex justify-around px-[10px] py-[10px] box-border">

            <!-- Anak Kedua - Child 1: Title and Cards -->
            <div class="flex flex-col items-center w-full space-y-4">
                <h1 class="text-2xl font-semibold text-gray-800 text-green-500">Tanpa DIGIDES</h1>
                <div class="grid gap-4">

                    @include('components.card.profile-card', [
                        'title' => 'Jangkauan',
                        'text' => 'Pengenalan Potensi Desa sangat terbatas',
                        'color' => "orange"
                    ])

                    @include('components.card.profile-card', [
                        'title' => 'Kecepatan',
                        'text' => '30 Menit s/d 1 → 4 hari',
                        'color' => "orange"
                    ])

                    @include('components.card.profile-card', [
                        'title' => 'Kecerdasan',
                        'text' => 'Data kacau dan butuh SDM yang mengerti semuanya',
                        'color' => "orange"
                    ])

                </div>
            </div>

            <!-- Anak Kedua - Child 2: Images -->
            <div class="flex w-full  justify-around items-center flex-col space-x-4">
                <img src="{{ asset("images/icons/wifi-signal.png") }}" alt="Image 1" class="w-20 h-20">
                <img src="{{ asset("images/icons/menu.png") }}" alt="Image 2" class="w-20 h-20">
                <img src="{{ asset("images/icons/idea.png") }}" alt="Image 3" class="w-20 h-20">
            </div>

            <!-- Anak Kedua - Child 3: Title and Cards (same as first child) -->
            <div class="flex flex-col w-full items-center space-y-4">
                <h1 class="text-2xl font-semibold text-gray-800 text-green-500">Dengan DIGIDES</h1>
                
                @include('components.card.profile-card', [
                    'title' => 'Jangkauan',
                    'text' => 'Dengan promosi digital dapat menjangkau lebih banyak (tak terbatas)',
                    'color' => "teal"

                ])

                @include('components.card.profile-card', [
                    'title' => 'Kecepatan',
                    'text' => '+1-5 Menit',
                    'color' => "teal"

                ])

                @include('components.card.profile-card', [
                    'title' => 'Kecerdasan',
                    'text' => 'Smart System',
                    'color' => "teal"

                ])
            </div>

        </div>
    </section>
