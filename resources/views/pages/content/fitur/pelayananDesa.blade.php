@extends('layouts.app')

@section('title', 'Pelayanan')

@section('content')


    @include('components.fitur.imageTextSection', [
        'judul' => 'Pelayanan Desa',
        'paragraf' => "Pelayanan Desa akan membantu perangkat desa dalam pembuatan surat secara cepat,
                                                 & mudah. Sudah sesuai dengan Permendagri 104 Tahun 2019 Tentang Pendokumentasian Administrasi 
                                                 Kependudukan, lebih dari 100 format surat dan formulir tersedia. Dilengkapi dengan pengarsipan
                                                  surat keluar yang otomatis. Dilengkapi Barcode untuk validasi surat dan sudah dapat terintergrasi dengan 
                                                  Tanda Tangan Elektronik (TTE).",
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'fitur' => 'Fitur',
        'judul' => 'Layanan Umum',
        'paragraf' => "Menyediakan surat-surat umum terstandar dan sangat mudah dibuat. Cukup 1 menit surat sudah bisa dicetak
                                         dan ditanda tangani.",
        'list' => [
            'Surat Keterangan Usaha',
            'Surat Keterangan Tempat Usaha',
            'Surat Keterangan Pengantar Barang',
            'Surat Keterangan Pengantar Ternak',
            'Surat Keterangan Tidak Mampu(Sekolah)',
            'Surat Keterangan Tidak Mampu(Umum)',
            'Surat Keterangan Rumah Tanggan Miskin Sekali',
            'Surat Keterangan Penghasilan Orang Tua',
            'Permohonan Izin Keramaian Pesta',
            'Surat Pengantar SKCK',
            'Surat Keterangan Ahli Waris',
            'Surat Keterangan Bepergian',
            'Surat Keterangan Tidak Berada di Tempat',
            'Surat Keterangan Beda Identitas',
            'Surat Keterangan Lainnya',
        ],
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])


    @include('components.fitur.nestedList', [
        'judul' => 'Layanan Kependudukan',
        'paragraf' => "Menyediakan surat-surat kependudukan mulai dari mutasi dan terintegrasi dengan data 
                            penduduk pada layanan Administrasi. Mutasi otomatis tanpa perlu edit lagi warga/masyarakat yang mengalami mutasi.",
        'list' => [
            'Biodata Penduduk' => [
                'Formulir Kartu Keluarga(Pengganti F-1.01)',
                'Formulir Pendaftaran Peristiwa Kependudukan(F-1.02)',
                'Surat Pernyataan Tidak Memiliki Dokumen',
                'Kependudukan (F-1.04)',
                'Surat Pernyataan Perubahan Data Kependudukan (F-1.05)',
                'Formulir Biodata Penduduk Untuk Perubahan Data WNI (F-1.06)',
                'Surat Kuasa Dalam Pelayanan Administrasi Kependudukan (F-1.07)',
                'Formulir Permohonan KK Baru WNI(F-1.15)',
                'Formulir Permohonan Perubahan KK Baru WNI (F-1.16)',
                'Formulir Permohonan KTP (F-1.21)',
                'Surat Keterangan Domisili',
                'Surat Keterangan Hilang Kartu Keluarga',
            ],
            'Pindah' => [
                'Surat Keterangan Pindah',
                'Formulir Pendaftaran Perpindahan Penduduk (F-1.03)',
                'Surat Keterangan Pindah Datang WNI Dalam Satu Desa/Kelurahan (F-1.24)',
                'Surat Keterangan Pindah WNI Antar Desa/Kelurahan (F-1.26)',
                'Surat Keterangan Pindah Datang WNI Antar Desa/Kelurahan (F-1.28)',
                'Surat Keterangan Pindah WNI Antar Kecamatan (F-1.30)',
                'Surat Keterangan Pindah Datang WNI Antar Kecamatan(F-1.32)',
                'Surat Pengantar Pindah (F-1.33)',
                'Surat Pengantar Pindah Datang (F-1.35)',
                'Formulir Permohonan Pindah WNI Antar Provinsi (F-1.36)',
                'Formulir Permohonan Pindah Datang WNI Antar Provinsi (F-1.38)',
            ],
            'Kelahiran' => [
                'Surat Keterangan Kelahiran (F-2.01)',
                'SPTJM Kebenaran dan Kelahiran',
                'SPTJM Kebenaran Sebagai Pasangan Suami Istri',
                'Surat Pernyataan Belum Memiliki Akta Kelahiran',
            ],
            'Kematian' => [
                'Surat Keterangan Kematian (F-2.29)',
                'Surat Kematian (A-5)',
                'Surat Keterangan Penguburan',
            ],
        ],
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Layanan Nikah',
        'paragraf' => 'Menyediakan surat pernikahan penduduk berdasarkan Keputusan Direktur Jenderal Bimbingan Masyarakat Islam 
                       Nomor 473 Tahun 2020 Tentang Petunjuk Teknis Pelaksanaan Pencatatan Pernikahan.',
        'list' => [
            'Pengantar Nikah (N1-N6)',
            'Surat Keterangan Pernah Nikah',
            'Surat Keterangan Belum Pernah Nikah',
            'Surat Keterangan Duda/Janda',
        ],
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Layanan Pertanahan',
        'paragraf' => "Menyediakan surat pertanahan warga dengan aturan yang baku.",
        'list' => [
            'Surat Keterangan Pencocokan Sporadik',
            'Sporadik',
            'Surat Keterangan Kepemilikan Tanah',
            'Surat Keterangan Jaminan Rumah',
            'Keterangan Ahli Wari',
            'Keterangan Desa',
        ],
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

@include('components.fitur.imageTextSection', [
    'judul' => 'Layanan Lainnya',
    'paragraf' => "Menyediakan surat yang dapat menyesuaikan kebutuhan desa dan jadi wadah bagi desa untuk berinovasi dalam pengaplikasian surat.",
    'image' => 'https://via.placeholder.com/400',
    'imageLeft' => true,
])



    <div class="w-[90%] mx-auto">
        @include('components.slider.slider')
    </div>
@endsection
