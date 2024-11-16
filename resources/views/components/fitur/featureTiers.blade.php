<section class="relative border-2 w-[90%] border-slate-300 mx-auto mt-[10rem]">
    <h1
        class="absolute left-[2rem] top-[-1.8rem] text-[40px] w-[18rem] flex justify-center items-center bg-white h-[50px]">
        {{ $tiers }}</h1>

    @if ($tiers == 'Fitur Umum')
        @include('components.fitur.imageTextSection', [
            'judul' => 'Kabar Desa',
            'paragraf' => 'Dapatkan informasi terbaru dari seluruh penjuru dunia yang bermanfaat bagi warga
                                                                     desa di seluruh Indonesia. Temukan berbagai informasi acara, artikel, kesempatan seperti beasiswa
                                                                      dan lowongan pekerjaan, serta materi edukasi dari berbagai bidang.',
            'image' => 'https://via.placeholder.com/400',
            'imageLeft' => true,
        ])

        @include('components.fitur.imageTextSection', [
            'judul' => 'E-Pasar',
            'paragraf' => 'Melalui fitur E-Pasar, warga dapat memasarkan produk-produk dari desa mereka ke seluruh penjuru 
                                                                    Indonesia. Fitur ini terintegrasi dengan WhatsApp, sehingga memudahkan komunikasi dengan calon 
                                                                    pelanggan.',
            'image' => 'https://via.placeholder.com/400',
            'imageRight' => true,
        ])
        @include('components.fitur.imageTextSection', [
            'judul' => 'Layanan Publik',
            'paragraf' => 'Akses berbagai informasi layanan yang telah berkolaborasi dengan DIGIDES, termasuk pencarian 
                                                                    informasi bantuan sosial (bansos), lokasi vaksinasi, dan pengecekan Daftar Pemilih Tetap (DPT).
                                                                     Dengan Digides Mobile App, keterhubungan dan akses informasi bagi warga desa semakin mudah & praktis.',
            'image' => 'https://via.placeholder.com/400',
            'imageLeft' => true,
        ])
    @elseif($tiers == 'Fitur Premium')
        @include('components.fitur.imageTextSection', [
            'judul' => 'Layanan Jarak Jauh',
            'paragraf' => 'Warga dapat melakukan permintaan surat-surat dan administrasi dalam genggaman, menghadirkan pelayanan desa 
                                                        langsung ke rumah-rumah warga desa, dilengkapi juga pemantauan surat secara real time.',
            'image' => 'https://via.placeholder.com/400',
            'imageLeft' => true,
        ])

        @include('components.fitur.imageTextSection', [
            'judul' => 'Notifikasi Pengumuman Desa',
            'paragraf' => 'Tidak akan ada lagi keterlambatan dalam mendapatkan informasi tentang kegiatan desa 
                                                    karena sahabat desa akan menerima notifikasi setiap kali ada berita baru yang dirilis oleh kantor desa.',
            'image' => 'https://via.placeholder.com/400',
            'imageRight' => true,
        ])
        @include('components.fitur.imageTextSection', [
            'judul' => 'Personalisasi Tampilan',
            'paragraf' => 'Sahabat Desa akan merasakan pengalaman yang unik dengan akses ke fitur-fitur yang hanya tersedia bagi
                                                          warga desa terdaftar, seperti:',
            'list' => ['Berita Lokal', 'Kemajuan Desa', 'Penggunaan Anggaran', 'No Telp Penting'],
            'image' => 'https://via.placeholder.com/400',
            'imageLeft' => true,
        ])
    @elseif ($tiers == 'Fitur Utama')
        @include('components.fitur.imageTextSection', [
            'judul' => 'Buat Surat Mandiri',
            'paragraf' => 'Fitur ini berguna bagi warga yang datang ke kantor desa untuk membuat surat, 
                                                           warga dapat mengisi form yang disediakan oleh ANDI SMART dan dapat langsung mencetak surat yang diinginkan.',
            'image' => 'https://via.placeholder.com/400',
            'imageLeft' => true,
        ])

        @include('components.fitur.imageTextSection', [
            'judul' => 'Cetak dari Mobile App',
            'paragraf' =>
                'Fitur ini sangat praktis bagi warga yang ingin meminta surat jarak jauh, cukup dengan menggunakan aplikasi DIGIDES, lakukan request, mengisi form dan dapatkan kode surat yang nantinya akan dimasukkan ke Andi Smart untuk langsung mencetak surat yang telah di request.',
            'image' => 'https://via.placeholder.com/400',
            'imageRight' => true,
        ])
    @elseif ($tiers == 'Fitur Pengguna / Warga')
        @include('components.fitur.imageTextSection', [
            'judul' => 'Fitur Standby',
            'paragraf' => null,
            'list' => ['Cuaca', 'Berita Terbaru', 'Daftar Putar Video', 'Custom Tampilan'],
            'image' => 'https://via.placeholder.com/400',
            'imageLeft' => true,
        ])

        @include('components.fitur.imageTextSection', [
            'judul' => 'Fitur Pengenalan User',
            'paragraf' => null,
            'list' => ['Nama dan NIK', 'Pembaca KTP', 'Panggilan Suara'],
            'image' => 'https://via.placeholder.com/400',
            'imageRight' => true,
        ])

        @include('components.fitur.imageTextSection', [
            'judul' => 'Akses tidak Terbatas',
            'paragraf' => null,
            'list' => ['Menu Dinamis ( dapat diatur)'],
            'image' => 'https://via.placeholder.com/400',
            'imageLeft' => true,
        ])

        @include('components.fitur.imageTextSection', [
            'judul' => 'Kritik dan Saran',
            'paragraf' =>
                'Warga dapat dengan mudah menyalurkan umpan balik langsung kepada pemerintah desa melalui Andi Smart.',
            'image' => 'https://via.placeholder.com/400',
            'imageRight' => true,
        ])
    @elseif ($tiers == 'Fitur untuk Admin')
        @include('components.fitur.imageTextSection', [
            'judul' => 'Dashboard',
            'paragraf' => 'Dashboard memberikan pandangan cepat dan terperinci tentang aktivitas pengguna Andi Smart.',
                'Dashboard memberikan pandangan cepat dan terperinci tentang aktivitas pengguna Andi Smart.',
            'image' => 'https://via.placeholder.com/400',
            'imageRight' => true,
        ])

        @include('components.fitur.imageTextSection', [
            'judul' => 'Pengaturan Tampilan',
            'paragraf' => null,
            'list' => ['Profil Desa', 'Manajemen Daftar Putar Video', 'Pengaturan Warna Dominan'],
            'image' => 'https://via.placeholder.com/400',
            'imageLeft' => true,
        ])

        @include('components.fitur.imageTextSection', [
            'judul' => 'Manajemen Fitur Tambahan',
            'paragraf' => null,
            'list' => [
                'Perpajakan Daerah',
                'Perpustakaan Online',
                'Pembayaran Listrik',
                'Layanan Kesehatan',
                'Layanan Kemensos',
                'Dan lain-lain',
            ],
            'image' => 'https://via.placeholder.com/400',
            'imageRight' => true,
        ])
    @endif

</section>
