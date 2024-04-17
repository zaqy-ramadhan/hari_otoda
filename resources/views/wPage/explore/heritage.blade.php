@extends('wPage.layouts.main')

@section('content')
<section class="sectionH-one">
    <div class="container">
        <div class="row">
            <div class="col-md-5 d-flex align-items-center custom-img-stadium">
             <h1>Warisan Sejarah Surabaya yang Harus Anda Kunjungi!</h1>
            </div>
            <div class="col-md-7">
                <img src="assets/img/heritageilus.png" alt="Heritage" class="img-fluid custom-img-stadium">
            </div>
        </div>
    </div>

    <section class="section-two-hotel">
    <div class="container pb-4">
        <div class="row">

            
            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Rumah Lahir Ir. Soekarno.jpg" class="custom-hotel-img" alt="">
                        <div class="custom-hotel-content">
                            <h5 class="custom-hotel-title" style="font-weight: bold">Rumah Lahir Ir. Soekarno </h5> 
                            <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt1">Deskripsi</button>
                            <a class="custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/WmnuPsfHzespeRVH6" target="_blank">Lokasi</a>
                        </div>
                    </div>
                </div>
            </div>
           

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Wisata Pecinan Kembang Jepun.jpg" class="custom-hotel-img" alt="">
                        <div class="custom-hotel-content">
                            <h5 class="custom-hotel-title" style="font-weight: bold">Wisata Pecinan Kembang Jepun</h5> 
                            <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt2">Deskripsi</button>
                            <a class="custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/iCySKgMAjBQcRinr5" target="_blank">Lokasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Perkampungan Peneleh (situs).jpg" class="custom-hotel-img" alt="">
                        <div class="custom-hotel-content">
                            <h5 class="custom-hotel-title" style="font-weight: bold">Perkampungan Peneleh (situs)</h5> 
                            <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt3">Deskripsi</button>
                            <a class="custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/BJdPv4AGtcQgQuTKA" target="_blank">Lokasi</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Langgar Dukur Kayu.jpg" class="custom-hotel-img" alt="">
                        <div class="custom-hotel-content">
                            <h5 class="custom-hotel-title" style="font-weight: bold">Langgar Dukur Kayu</h5> 
                            <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt4">Deskripsi</button>
                            <a class="custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/5qxfpTGKg5UTmo6p9" target="_blank">Lokasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Gedung PTPN XI.jpg" class="custom-hotel-img" alt="">
                        <div class="custom-hotel-content">
                            <h5 class="custom-hotel-title" style="font-weight: bold">Gedung PTPN XI</h5> 
                            <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt5">Deskripsi</button>
                            <a class="custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/Vcxt6N6S56FW2k5z6" target="_blank">Lokasi</a>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Kawasan Kota Lama (Europeesche Champ).jpg" class="custom-hotel-img" alt="">
                        <div class="custom-hotel-content">
                            <h5 class="custom-hotel-title" style="font-weight: bold">Kawasan Kota Lama (Europeesche Champ)</h5> 
                            <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt6">Deskripsi</button>
                            <a class="custom-btn-hotel custom-btn-primary" href="https://www.google.com/maps?q=-7.233604,112.736578" target="_blank">Lokasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Kelenteng Boen Bio.jpg" class="custom-hotel-img" alt="">
                        <div class="custom-hotel-content">
                            <h5 class="custom-hotel-title" style="font-weight: bold">Kelenteng Boen Bio</h5> 
                            <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt7">Deskripsi</button>
                            <a class="custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/eF913Yjmewrjgq3d7" target="_blank">Lokasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Tunjungan Romansa.jpg" class="custom-hotel-img" alt="">
                        <div class="custom-hotel-content">
                            <h5 class="custom-hotel-title" style="font-weight: bold">Tunjungan Romansa</h5> 
                            <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt8">Deskripsi</button>
                            <a class="custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/bw3dqnvHM24N2vtJ8" target="_blank">Lokasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Arca Joko Dolog.jpg" class="custom-hotel-img" alt="">
                        <div class="custom-hotel-content">
                            <h5 class="custom-hotel-title" style="font-weight: bold">Arca Joko Dolog</h5> 
                            <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt9">Deskripsi</button>
                            <a class="custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/j9wQUJ4sM1dms1fo6" target="_blank">Lokasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Balai Kota Surabaya.jpg" class="custom-hotel-img" alt="">
                        <div class="custom-hotel-content">
                            <h5 class="custom-hotel-title" style="font-weight: bold">Balai Kota Surabaya</h5> 
                            <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt10">Deskripsi</button>
                            <a class="custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/wwcLaacQaeeR7KCh7" target="_blank">Lokasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Balai Pemuda dan Alun-alun Surabaya.jpg" class="custom-hotel-img" alt="">
                        <div class="custom-hotel-content">
                            <h5 class="custom-hotel-title" style="font-weight: bold">Balai Pemuda dan Alun-alun Surabaya</h5> 
                            <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt11">Deskripsi</button>
                            <a class="custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/6ffSEs1S5kkXi3Sv6" target="_blank">Lokasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Monumen Tugu Pahlawan dan Museum Sepuluh Nopember.jpg" class="custom-hotel-img" alt="">
                        <div class="custom-hotel-content">
                            <h5 class="custom-hotel-title" style="font-weight: bold">Monumen Tugu Pahlawan dan Museum Sepuluh Nopember</h5> 
                            <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt12">Deskripsi</button>
                            <a class="custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/W3YwuQPWmbjKjoM66" target="_blank">Lokasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Masjid Agung Sunan Ampel.jpg" class="custom-hotel-img" alt="">
                        <div class="custom-hotel-content">
                            <h5 class="custom-hotel-title" style="font-weight: bold">Masjid Agung Sunan Ampel</h5> 
                            <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt13">Deskripsi</button>
                            <a class="custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/TxSyxR1Cf5vBdRTVA" target="_blank">Lokasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/DE JAVASCHE BANK (Museum Bank Indonesia).jpg" class="custom-hotel-img" alt="">
                        <div class="custom-hotel-content">
                            <h5 class="custom-hotel-title" style="font-weight: bold">DE JAVASCHE BANK (Museum Bank Indonesia)</h5> 
                            <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt14">Deskripsi</button>
                            <a class="custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/Ng7qxCrgxfiNFpQj7" target="_blank">Lokasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Gereja Kelahiran Santa Perawan Maria.jpg" class="custom-hotel-img" alt="">
                        <div class="custom-hotel-content">
                            <h5 class="custom-hotel-title" style="font-weight: bold">Gereja Kelahiran Santa Perawan Maria</h5> 
                            <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt15">Deskripsi</button>
                            <a class="custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/76oPcJcKXD5Nz7ds9" target="_blank">Lokasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!--Modal pop up-->
         <div class="modal fade" id="modalt1">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Rumah Lahir Ir. Soekarno </h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <p>Tanggal 6 Juni adalah ulang tahun Presiden Ir. Soekarno. Bapak Proklamator lahir pada tanggal 6 Juni 1901. Soekarno lahir di sebuah desa yang padat penduduk, yaitu Pandean IV, Kelurahan Peneleh, Kecamatan Genteng, Kota Surabaya. Rumah kelahiran Bung Karno berjarak 200 meter dari gang depan Pandean IV. Pada pandangan pertama, rumah tempat Bung Karno lahir sama sekali tidak mencolok.</p>                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt2">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Wisata Pecinan Kembang Jepun</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <p>Kembang Jepun Chinatown adalah tujuan kuliner malam di Surabaya. Berbagai penjual makanan dan minuman berjejer di Jalan Kembang Jepun mulai dari pukul 17.00 hingga 22.00. Jika Anda ingin berkunjung, pastikan untuk menandai hari Jumat, Sabtu, dan Minggu karena konsep wisata hanya diselenggarakan pada akhir pekan. Tidak hanya kuliner, menjelajahi area Chinatown adalah hal yang wajib dilakukan dengan naik becak wisata yang disediakan di sana dengan tarif flat Rp. 20.000.</p>                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt3">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Perkampungan Peneleh </h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <p>Area Peneleh, atau dikenal sebagai Warisan Peneleh, adalah salah satu area yang menawarkan objek wisata bagi wisatawan yang berkunjung ke Surabaya. Mulai dari jejak Rumah Lahir Bung Karno, Rumah HOS Tjokroaminoto, Masjid Jami' Peneleh hingga pemakaman Belanda Peneleh yang dapat dicapai dengan berjalan kaki. Singgah di Lodji Cafe sambil menikmati nuansa masa lalu tidak jauh dari Pemakaman Peneleh menandai akhir dari tur berjalan di Warisan Peneleh, Surabaya.</p>                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt4">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Langgar Dukur Kayu</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <p>Langgar Dukur Kayu, yang dulunya tempat Presiden Soekarno membaca al-Quran saat masih kecil. Selain itu, terdapat pula Gerabah, Sumur Tua, Makam Mbah Pitono, Makam Mbah Dimo, Makam Sheikh Zen Zaini Assegaf, Rumah Kayu, Rumah Jengki, dan Rumah Runtuhan yang menjadi pusat-pusat objek wisata.</p>                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt5">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Gedung PTPN XI</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <p>Gedung bersejarah yang kini menjadi kantor PT. Perkebunan Nusantara XI awalnya dimiliki oleh HVA (Handels Vereeniging Amsterdam/Asosiasi Pedagang Amsterdam). Pada saat itu di Indonesia, HVA menangani kegiatan ekspor gula ke luar negeri. Gedung HVA dibangun dari tahun 1920 hingga 1921 dan diresmikan pada tanggal 18 April 1925. Arsiteknya adalah Marius dari biro Hulswit, Fermont & Ed. Cuypers. Gaya bangunan ini mengusung gaya eklektisisme dan menambahkan elemen-elemen budaya Jawa tradisional untuk memperindah gedung HVA dengan mempresentasikan ukiran dan relief yang terinspirasi dari candi-candi di Jawa Timur di beberapa bagian dinding gedung. Tidak tanggung-tanggung, bahan bangunan yang digunakan diimpor dari Belanda dan Belgia. Namun, pendudukan Jepang atas Hindia Belanda menandai akhir keberadaan HVA di Indonesia. Selama kemerdekaan, gedung yang memiliki rencana bangunan berbentuk huruf U ini digunakan sebagai gudang senjata Tentara Jepang di Jawa Timur. Dari tanggal 30 September hingga 1 Oktober 1945 Arek-arek Surabaya mengambil alih kekuasaan dan senjata Jepang untuk digunakan dalam membela negara Indonesia. Setelah direbut, gedung ini menjadi markas Komando Militer Jawa Timur dan Kementerian Pertahanan. Selain itu, gedung ini juga digunakan sebagai tempat negosiasi antara Kolonel Pugh (utusan Jenderal Mallaby) dari pihak sekutu dan Dr. Moestopo dari pihak Indonesia yang bertujuan untuk mendamaikan kedua belah pihak pada tahun 1945. Pada tahun 1957 gedung ini menjadi milik pemerintah Republik Indonesia. Dan pada tahun 1958 Pemerintah Republik Indonesia mengnationalisasi gedung ini untuk ditempati oleh Perusahaan Perkebunan Negara (PPN). PPN kemudian berubah namanya menjadi PTPN dan gedung ini digunakan oleh PTPN XXIV. Kemudian gedung ini berubah nama menjadi PTPN XI yang merupakan hasil dari penggabungan PT Perkebunan XX dan PT Perkebunan XXIV-XXV.</p>                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt6">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Kawasan Kota Lama (Europeesche Champ)</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <p>Jalan Rajawali didominasi oleh bangunan-bangunan berarsitektur kolonial. Wilayah jalan ini adalah koridor di Surabaya yang masih mempertahankan keasliannya dan merupakan salah satu dari tiga "kampung tua" yang sering disebut sebagai "simpang tiga". Simpang tiga terdiri dari wilayah Arab "Ampel", wilayah Asia Timur "Kembang Jepun", dan wilayah kolonial "Jalan Rajawali". Objek wisata di Jalan Rajawali termasuk Gedung Cigar, Hotel Arcadia, SMPN 5 Surabaya, Gedung PTPN XII, Gedung PTPN XI, Gedung Pertamina, Gedung Internatio, Museum De Javasche Bank, Bank BNI, Kantor Pos Kebonrojo, Taman Sejarah, Jembatan Merah, pabrik sirup Siropen, pabrik mie Misoa, pelabuhan Perak, dan banyak lagi lainnya. Jalan Rajawali adalah area wisata kota tua yang hingga saat ini sering dikunjungi oleh wisatawan, terutama wisatawan asing.</p>                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt7">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Kelenteng Boen Bio</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Kemunculan kuil Tionghoa sebagai hasil dari perluasan area Chinatown di Surabaya yang dulunya berada di sekitar Jl. Kembang Jepun, Jl. Slompretan, Jl. Cokelat, dan sekitarnya, ke arah timur Surabaya di sekitar area Kapasan. Area pemukiman Tionghoa dulunya disebut oleh Belanda sebagai "Kamp Cina" yang sudah ada sebelum Belanda datang ke Surabaya. Kuil Boen Bio telah ada sejak tahun 1910-an dan terletak di depan Pariwisata Chinatown Surabaya (WKP) yang dulunya disebut Desa Kungfu. Kegiatan ibadah di Kuil Boen Bio ramai pada hari Minggu.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt8">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tunjungan Romansa</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <p>Objek wisata di area Tunjungan sangat beragam, didominasi oleh bangunan-bangunan tua dan bangunan warisan budaya sepanjang Jalan Tunjungan. Kenangan sejarah tentang pengoyakan bendera Belanda menjadi bendera Merah Putih juga terjadi di salah satu hotel di jalan ini yang eksistensinya masih ada hingga saat ini. Pada tahun 1920-an, Tunjungan terkenal sebagai area perdagangan. Sekarang Jalan Tunjungan semakin indah karena pemeliharaan bangunan yang optimal, yang diisi sebagai kantor-kantor, restoran makanan kontemporer, dan juga terdapat Tunjungan Romansa.</p>                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt9">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Arca Joko Dolog</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <p>Terletak di belakang Taman Apsari, patung Joko Dolog yang merupakan peninggalan Kerajaan Singosari, Raja Kertanegara. Patung Joko Dolog ini dipahat oleh seseorang bernama Nada, dan dilaksanakan kira-kira tiga tahun sebelum Raja Kertanegara meninggal karena dibunuh oleh prajurit Jayakartawang. Patung ini memiliki panjang 166 meter, lebar 138 cm, dan ketebalan 105 cm. Patung Joko Dolog digambarkan dengan kepala plontos dan dibuat dalam posisi duduk Bhumisparsa Mudra, yang melambangkan pemanggilan bumi dan saksi, di mana tangan kiri berada di atas pangkuan, sementara tangan kanan ditekuk di atas lutut. Patung Joko Dolog adalah salah satu pilihan tujuan wisata terkenal di pusat Kota Surabaya.</p>                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt10">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Balai Kota Surabaya</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <p>Gedung Balai Kota Surabaya didirikan pada tahun 1915-1925. Arsiteknya adalah GC. Citroen dan pelaksanaannya oleh H.V Hollandsche Beton Mij memakan biaya sekitar 1000 gulden pada saat itu (sekitar 8 juta) untuk seluruh biaya (termasuk peralatan). Oleh karena itu, Gedung Balai Kota Surabaya dikenal sebagai gedung 1000 gulden. Hingga saat ini, Balai Kota terus berfungsi sebagai kantor pemerintahan Kota Surabaya yang digunakan oleh Walikota dan Wakil Walikota yang sedang bertugas. Balai Kota sendiri juga memiliki bunker yang memiliki dua lorong, yang sebelah kanan konon menghubungkan Balai Kota dengan Rumah Dinas Walikota dan lorong sebelah kiri mengarah ke Gereja Maranatha. Di depan Gedung Balai Kota Surabaya terdapat taman yang disebut Taman Surya.</p>                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt11">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Balai Pemuda dan Alun-alun Surabaya</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <p>Balai Pemuda dibangun pada tahun 1907 dan disebut sebagai Simpangsche Societeit atau Simpangsche Club sebagai fasilitas hiburan malam bagi kaum elit Eropa (terutama warga Belanda) yang tinggal di Surabaya. Pada saat itu, penduduk pribumi kesulitan dalam mengucapkan nama bangunan ini sehingga penduduk setempat menamainya Roemah Kamar Bola karena terdapat permainan bilyar. Simpangsche Societeit dibangun oleh seorang arsitek dari Belanda bernama Westmaes. Bangunan yang kini menjadi salah satu warisan budaya Surabaya dirancang sedemikian rupa dengan memperhatikan iklim Surabaya. Kubah yang menyerupai mahkota adalah landmark dari Gedung Balai Pemuda ini. Saat ini, Balai Pemuda berfungsi sebagai pusat kegiatan seni dan budaya dilengkapi dengan fasilitas publik dan area terbuka yang luas. Fasilitas terbaru di Balai Pemuda adalah Alun-alun Surabaya yang terdiri dari area basement dan area outdoor. Salah satu sorotan di area basement adalah area pameran dan arena skateboarding yang dapat digunakan oleh masyarakat umum. Saat ini, Alun-alun Surabaya juga dilengkapi dengan fasilitas food court.</p>                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt12">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Monumen Tugu Pahlawan dan Museum Sepuluh Nopember</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <p>Tugu Pahlawan dibangun dengan bentuk "paku terbalik" setinggi 45 yard atau 40,50 meter. Di bagian bawah tugu dihiasi dengan ukiran yang menggambarkan trisula, cakra, stamba, dan padma sebagai simbol api perjuangan. Tugu Pahlawan mengandung nilai filosofis monumental sebagai simbol semangat pahlawan arek-arek Suroboyo dalam menghadapi penjajah. Untuk mendukung eksistensi Tugu Pahlawan, di area ini juga dibangun fasilitas sejarah, yaitu Museum Sepuluh Nopember yang diresmikan pada tanggal 19 Februari 2000 oleh Presiden Republik Indonesia, KH. Abdurrahman Wahid. Bangunan ini dirancang berbentuk piramida di mana terdapat sebanyak 416 koleksi yang terdiri dari Koleksi Foto, Senjata Rampasan, dan Artefak dari Pertempuran di Surabaya. Selain itu, di museum ini juga terdapat fasilitas pendukung seperti diorama elektronik dan diorama statis.</p>                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt13">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Masjid Agung Sunan Ampel</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <p>Objek wisata religi Masjid dan Makam Sunan Ampel merupakan tempat ziarah yang populer. Masjid Ampel dibangun untuk menghormati Sunan Ampel sebagai salah satu penyebar Islam di Pulau Jawa. Beliau adalah putra Ali Rachmatullah, kemudian menjadi Raden Rachmat yang akhirnya dikenal sebagai Sunan Ampel. Beliau meninggal pada tahun 1481 dan dimakamkan di sebelah kanan Masjid Ampel. Masjid Ampel sering dikunjungi sebagai tujuan wisata religi bagi wisatawan Muslim secara umum dari lokal hingga internasional. Bentuk bangunannya juga masih terjaga hingga saat ini.</p>                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt14">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">DE JAVASCHE BANK (Museum Bank Indonesia)</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <p>De Javasche Bank mengusung konsep Neo-Renaissance yang memiliki karakteristik seperti elemen simetris. Bangunan seluas 1000 meter persegi ini sebenarnya adalah hasil restorasi pada tahun 1910. Awalnya difungsikan pada tanggal 14 September 1829, pemerintah Hindia Belanda memutuskan untuk membangun bangunan baru di tempat yang sama karena alasan modernisasi. Bangunan ini dirancang agar lebih ramah terhadap iklim tropis di Indonesia. Setelah De Javasche Bank dinasionalisasi oleh pemerintah pada tahun 1951, bangunan ini menjadi kantor perwakilan Bank Indonesia Surabaya dari tahun 1953 hingga 1972. Kemudian, pada tanggal 27 Januari 2012, bangunan tiga lantai yang dimiliki oleh Bank Indonesia ditetapkan sebagai warisan budaya. Sekarang, orang-orang yang ingin melihat jejak perbankan di Surabaya dapat mengunjunginya secara gratis. Lokasinya juga mudah diakses dengan kendaraan pribadi maupun transportasi umum.</p>                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt15">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Gereja Kelahiran Santa Perawan Maria</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <p>Gereja Kelahiran Santa Perawan Maria terletak di Jalan Kepanjen, sehingga banyak orang menyebutnya sebagai Gereja Kepanjen. Gereja ini merupakan salah satu bangunan warisan arsitektur Eropa. Dibangun pada tahun 1899, bangunan utama memiliki kapasitas sekitar 3000 jemaat. Gereja Kepanjen hangus terbakar pada tahun 1945 dan direnovasi di beberapa sisi tanpa kehilangan bentuk aslinya. Bangunan gereja ini dibangun dalam gaya Neo Gothic yang dirancang oleh arsitek bernama Westmaas (Belanda) dan Muljono Widjosastro (Indonesia). Ketika memasuki ruang utama bangunan gereja ini, Anda akan disambut dengan ruangan megah dengan dinding bata klasik Eropa dan pilar-pilar setinggi 12m. Tidak hanya itu, pondasinya dikatakan terbuat dari 799 tiang kayu galam dengan kedalaman 15m. Jendela-jendela besar memungkinkan sinar matahari masuk. Mozaik kaca berwarna yang membentuk gambar perjalanan Kristus dan murid-murid-Nya memberikan kesan religius. Ketika dilihat dari luar, bangunan gereja berbentuk salib. Selain ruang gereja utama, di area tersebut juga terdapat ruang doa di sisi kiri bangunan utama untuk berdoa dan kantor gereja.</p>                    </div>
                </div>
            </div>
        </div>
</section>


        <section class="sectionH-three">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p style="color: white; font-size: 21.6px; font-weight: 900; margin-top:70px;">Select Other</p>
                        <div class="slider">
                            <div class="owl-carousel">
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <a href="heritage">
                                            <img src="assets/img/heritage.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <a href="shopping">
                                            <img src="assets/img/shop.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <a href="tourismspot">
                                            <img src="assets/img/spot.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <a href="hotel">
                                            <img src="assets/img/hotel.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <a href="culinary">
                                            <img src="assets/img/culinary.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <a href="culture">
                                            <img src="assets/img/culture.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>
@endsection