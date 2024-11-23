@extends('layouts.app')

@section('title', 'KIOS')

@section('content')
    <div class="mt-[100px] px-2 md:px-0">
        @include('components.fitur.imageTextSectionRight', [
            'title' => 'KIOS DIGIDES ',
            'text' => 'Salah Satu Inovasi desa digital dengan KIOS DIGIDES adalah aplikasi gratis untuk transaksi digital seperti pembayaran listrik, isi ulang pulsa, paket data, top up voucher games dan masih banyak lagi. T
                           idak hanya itu, Kios DIGIDES dapat digunakan sebagai salah satu unit usaha BUMDES dengan modal yang sangat rendah',
            'image' => asset('images/desa5.jpg'),
        ])
    </div>

    <div class="w-full md:w-[70%]  md:px-0  md:mx-auto flex mt-[30vh] flex-col gap-y-[8vh]">
        <h2 class="text-lg md:text-3xl font-bold place-self-center">Keuntungan menjadi member KIOS DIGIDES</h2>

        <div class="w-full flex flex-col md:gap-y-[2vh] gap-y-[12vh] px-5 md:px-0">
            @include('components.card.card-for-kios', [
                'title' => 'Keuntungan Besar',
                'text' =>
                    'Keuntungan yang lebih besar dengan aplikasi KIOS DIGIDES, sebagai perbandingan Anda dapat melihat daftar harga modal disini',
                'image' => asset('images/desa5.jpg'),
            ])
            @include('components.card.card-for-kios', [
                'title' => 'Sejahtera Bersama',
                'text' =>
                    'Kios Digides dapat dijadikan menjadi usaha Bumdes, sehingga ketika warga melakukan transaksi, maka keuntungan akan menjadi modal untuk peningkatan kesejahteraan daerah',
                'image' => asset('images/desa5.jpg'),
            ])
            @include('components.card.card-for-kios', [
                'title' => 'Siapapun Bisa',
                'text' => 'Siapapun dan dimanapun Anda, kamu bisa mulai usaha dan dapatkan pendapatan',
                'image' => asset('images/desa5.jpg'),
            ])
            @include('components.card.card-for-kios', [
                'title' => 'Cocok',
                'text' =>
                    'Cocok untuk Ibu Rumah Tangga dan Anak Muda, bisnis ini sangat mudah dan tidak perlu pelatihan atau skill yang memakan waktu belajar',
                'image' => asset('images/desa5.jpg'),
            ])
            @include('components.card.card-for-kios', [
                'title' => 'Dukungan CS',
                'text' => 'Kios DIGIDES siap mendampingimu ketika bingung, jangan khawatir!',
                'image' => asset('images/desa5.jpg'),
            ])
        </div>
    </div>

    <div class="w-full md:w-[50%]   md:px-0  md:mx-auto flex mt-[30vh] flex-col gap-y-[8vh]">
        <h2 class="text-lg md:text-3xl font-bold place-self-center text-center">Pembayaran apa saja yang dapat dilakukan dengan Kios
            DIGIDES</h2>

        <div class="flex flex-wrap w-full md:gap-6 gap-10  justify-center items-center">
            @include('components.card.card-mini', [
                'image' => asset('images\desa5.jpg'),
                'text' => 'Pulsa Operator',
            ])

            @include('components.card.card-mini', [
                'image' => asset('images\desa5.jpg'),
                'text' => 'Paket Data Internet',
            ])

            @include('components.card.card-mini', [
                'image' => asset('images\desa5.jpg'),
                'text' => 'Token Listrik',
            ])

            @include('components.card.card-mini', [
                'image' => asset('images\desa5.jpg'),
                'text' => 'Telkom',
            ])

            @include('components.card.card-mini', [
                'image' => asset('images\desa5.jpg'),
                'text' => 'PDAM',
            ])

            @include('components.card.card-mini', [
                'image' => asset('images\desa5.jpg'),
                'text' => 'BPJS',
            ])

            @include('components.card.card-mini', [
                'image' => asset('images\desa5.jpg'),
                'text' => 'Transfer antar Bank',
            ])

            @include('components.card.card-mini', [
                'image' => asset('images\desa5.jpg'),
                'text' => 'Voucher Gamer',
            ])
        </div>
    </div>

    <div class="md:w-[50%] w-full mx-auto bg-white shadow-md mt-[10vh] rounded-md p-10 md:p-6">
        <h2 class="w-full text-xl font-bold text-blue-600 flex justify-center  mb-4">Cara Bergabung</h2>
        <ul class="list-disc space-y-4 text-gray-700 flex flex-col">
            <li>
                <span>Download Aplikasi Kios DIGIDES di Google Play Store atau</span> 
                <a href="#" class="text-blue-500 underline">klik di sini</a>.
            </li>
            <li>Daftar Akun dan jangan lupa lengkapi data diri Anda untuk melakukan pendaftaran. Jangan khawatir, pendaftarannya cepat dan gratis.</li>
            <li>
                <strong>Top Up Deposit Kios DIGIDES</strong> akan menjadi cara pembayaran untuk dapat mulai berjualan. Dapat dilakukan isi ulang lebih mudah dengan metode Bank Transfer, Virtual Account.
            </li>
            <li>
                Mulai transaksi beli pulsa, paket data, token listrik atau bayar tagihan BPJS dan tagihan lain sekarang dan nikmati keuntungan yang luar biasa hanya dari desa.
            </li>
            <li>
                Untuk info lebih lanjut <a href="#" class="text-blue-500 underline">hubungi admin DIGIDES</a>.
            </li>
        </ul>
    </div>

@endsection
