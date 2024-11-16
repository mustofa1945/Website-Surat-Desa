@extends('layouts.app')

@section('title', 'Kios')

@section('content')


    @include('components.fitur.imageTextSection', [
        'judul' => 'KIOS DIGIDES',
        'paragraf' => "Salah Satu Inovasi desa digital dengan KIOS DIGIDES adalah aplikasi gratis untuk transaksi digital seperti pembayaran listrik, isi ulang pulsa, paket data,
                                               top up voucher games dan masih banyak lagi. Tidak hanya itu, Kios DIGIDES dapat digunakan sebagai salah satu unit usaha BUMDES dengan modal yang sangat rendah",
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    <div class="flex flex-col mx-auto w-[80%] space-y-2">
        <h1 class="place-self-center text-[2rem] font-bold">Keuntungan menjadi member KIOS DIGIDES</h1>
        @include('components.card.profile-card', [
            'judul' => 'Keuntungan Besar',
            'text' => " Keuntungan yang lebih besar dengan aplikasi KIOS DIGIDES, 
                                                               sebagai perbandingan Anda dapat melihat daftar harga modal disini",
            'image' => 'https://via.placeholder.com/400',
        ])

        @include('components.card.profile-card', [
            'judul' => 'Siapapun Bisa',
            'text' => 'Siapapun dan dimanapun Anda, kamu bisa mulai usaha dan dapatkan pendapatan',
            'image' => 'https://via.placeholder.com/400',
        ])

        @include('components.card.profile-card', [
            'judul' => 'Keuntungan Besar',
            'text' => " Keuntungan yang lebih besar dengan aplikasi KIOS DIGIDES, 
                                                       sebagai perbandingan Anda dapat melihat daftar harga modal disini",
            'image' => 'https://via.placeholder.com/400',
        ])

        @include('components.card.profile-card', [
            'judul' => 'Cocok',
            'text' =>
                'Cocok untuk Ibu Rumah Tangga dan Anak Muda, bisnis ini sangat mudah dan tidak perlu pelatihan atau skill yang memakan waktu belajar',
            'image' => 'https://via.placeholder.com/400',
        ])

        @include('components.card.profile-card', [
            'judul' => 'Dukungan CS',
            'text' => 'Kios DIGIDES siap mendampingimu ketika bingung, jangan khawatir!',
            'image' => 'https://via.placeholder.com/400',
        ])
    </div>


    <div class="flex flex-col mx-auto w-[80%] space-y-2 mt-[50px]">
        <h1 class="place-self-center text-[2rem] font-bold">Keuntungan menjadi member KIOS DIGIDES</h1>
        <div class="flex  w-full h-full flex-wrap gap-2 justify-center items-center">
            @include('components.card.card', [
                'text' => 'Pulsa Operator',
                'image' => 'https://via.placeholder.com/400',
            ])

            @include('components.card.card', [
                'text' => 'Paket Data Internet',
                'image' => 'https://via.placeholder.com/400',
            ])

            @include('components.card.card', [
                'text' => 'Token Listrik',
                'image' => 'https://via.placeholder.com/400',
            ])
            @include('components.card.card', [
                'text' => 'Telkom',
                'image' => 'https://via.placeholder.com/400',
            ])
            @include('components.card.card', [
                'text' => 'PDAM',
                'image' => 'https://via.placeholder.com/400',
            ])
            @include('components.card.card', [
                'text' => 'BPJS',
                'image' => 'https://via.placeholder.com/400',
            ])
            @include('components.card.card', [
                'text' => 'Transfer antar Bank',
                'image' => 'https://via.placeholder.com/400',
            ])
            @include('components.card.card', [
                'text' => 'Voucher Game',
                'image' => 'https://via.placeholder.com/400',
            ])
        </div>
    </div>

    <div class="flex flex-col w-[75%] mx-auto space-y-5 mt-[4rem]">
        <h1 class="font-bold text-[2rem] place-self-center">
            Cara Bergabung
        </h1>
        <ul class="list-disc pl-6 text-[20px] flex flex-col space-y-4">
            <li>Download Aplikasi Kios DIGIDES di Google Play Store atau
                <a href="" class="text-sky-500"> klik di sini.</a>
            </li>
            <li>
                Daftar Akun dan jangan lupa lengkapi data diri Anda untuk melakukan pendaftaran jangan khawatir,
                pendaftarannya cepat dan gratis.
            </li>
            <li>
                Top Up Deposit Kios DIGIDES akan menjadi cara pembayaran untuk dapat mulai berjualan. Dapat dilakukan isi
                ulang lebih mudah dengan metode Bank Transfer, Virtual Account.
            </li>
            <li>
                Mulai Transaksi beli pulsa, paket data, token listrik atau bayar tagihan BPJS dan tagihan lain sekarang dan nikmati keuntungan yang luar biasa hanya dari desa.
            </li>
            <li>
                Untuk info lebih lanjut
                <a href="" class="text-sky-500">hubungi admin DIGIDES</a>
            </li>
        </ul>
    </div>

@endsection
