<!-- Section -->
<section class="container md:mx-auto px-6 box-border py-16">
    <!-- Child 1: Heading -->
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Solusi Yang Kami Berikan</h1>

    <!-- Child 2: div.anak-kedua -->
    <div class="anak-kedua flex flex-col md:flex-row md:justify-between space-y-8 md:space-y-0 md:space-x-8">
        <!-- Anak Kedua - Child 1: Cards (flex-col) -->
        <div class="flex flex-col space-y-4 md:w-1/3">
            @include('components.card.card-fitur', [
                'image' => asset("images/icons/database.png"),
                'title' => 'Administrasi',
                'text' => 'Pengelola Sistem Informasi administrasi secara mandiri',
            ])

            @include('components.card.card-fitur', [
                'image' => asset("images/icons/support.png"),
                'title' => 'Pelayanan',
                'text' => 'Sistem Pelayanan online untuk administrasi desa',
            ])

            @include('components.card.card-fitur', [
                'image' => asset("images/icons/contract.png"),
                'title' => 'Perpajakan',
                'text' => 'Sistem Pencatatan pajak mulai dari rekapitulasi perpajakan',
            ])

            @include('components.card.card-fitur', [
                'image' => asset("images/icons/ui-design.png"),
                'title' => 'ANDI Smart',
                'text' => 'Anjungan Mandiri untuk Mempermudah pengurusan surat',
            ])
        </div>



        <!-- Anak Kedua - Child 2: Image -->
        <div class="flex justify-center md:w-1/3 h-[50%] place-self-center">
            <img src="{{ asset("images/desa3.jpg") }}"" alt="Sample Image" class="bg-cover shadow-lg w-full md:w-3/4">
        </div>

        <!-- Anak Kedua - Child 3: Cards (flex-col) -->
        <div class="flex flex-col space-y-4 md:w-1/3">
            @include('components.card.card-fitur', [
            'image' => asset("images/icons/support.png"),
                'title' => 'Bantuan Sosial',
                'text' => 'Menyimpan dan mengelola data penerima bantuan sosial',
            ])

            @include('components.card.card-fitur', [
                'image' => asset("images/icons/profile.png"),
                'title' => 'Webprofil',
                'text' => 'Website profil untuk meningkatkan pitensi wisata desa',
            ])

            @include('components.card.card-fitur', [
                'image' => asset("images/icons/ui-design.png"),
                'title' => 'DIGIDES Mobile App',
                'text' => 'Marketplace dan permintann surat ekslusif untuk warga anda',
            ])

            @include('components.card.card-fitur', [
                'image' => asset("images/icons/database.png"),
                'title' => 'Absensi dan Buku Tamu',
                'text' => 'Buku Tamu Untuk warga Desa dan absensi untuk staff desa',
            ])
        </div>
    </div>
</section>
