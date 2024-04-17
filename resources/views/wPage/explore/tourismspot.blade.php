@extends('wPage.layouts.main')

@section('content')
<section class="sectionT-one">
    <div class="container">
        <div class="row">
            <div class="col-md-5 d-flex align-items-center custom-img-stadium">
                <h1>Ayo Jalan-Jalan di Surabaya</h1>
            </div>
            <div class="col-md-7 d-flex align-items-center">
                <img src="assets/img/tourism spot.png" alt="contoh" class="img-fluid custom-img-stadium">
            </div>
        </div>
    </div>
</section>

<section class="section-two-hotel">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Patung Budha 4 Wajah.JPG" class="custom-hotel-img" alt="">
                    </div>
                    <div class="custom-hotel-content">
                        <h5 class="custom-hotel-title" style="font-weight: bold">Patung Buddha 4 Wajah</h5>
                        <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt1">Deskripsi</button>
                        <a class="btn custom-btn-hotel custom-btn-primary" href="https://www.google.com/maps?q=-7.24697544210278,112.80117259064619" target="_blank">Lokasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Sentra Kuliner G-Walk.jpg" class="custom-hotel-img" alt="">
                    </div>
                    <div class="custom-hotel-content">
                        <h5 class="custom-hotel-title" style="font-weight: bold">Sentra Kuliner G-Walk</h5>
                        <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt2">Deskripsi</button>
                        <a class="btn custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/dQhCJJG1Br3s33Uw6" target="_blank">Lokasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Museum Blockbuster.jpg" class="custom-hotel-img" alt="">
                    </div>
                    <div class="custom-hotel-content">
                        <h5 class="custom-hotel-title" style="font-weight: bold">Museum Blockbuster</h5>
                        <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt3">Deskripsi</button>
                        <a class="btn custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/7aDxDFmjYT9ZqNjX9" target="_blank">Lokasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Kebun Binatang Surabaya.jpg" class="custom-hotel-img" alt="">
                    </div>
                    <div class="custom-hotel-content">
                        <h5 class="custom-hotel-title" style="font-weight: bold">Kebun Binatang Surabaya</h5>
                        <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt5">Deskripsi</button>
                        <a class="btn custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/YwNqjqagzGbGuqVr8" target="_blank">Lokasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Wisata Perahu Kalimas.jpg" class="custom-hotel-img" alt="">
                    </div>
                    <div class="custom-hotel-content">
                        <h5 class="custom-hotel-title" style="font-weight: bold">Wisata Perahu Kalimas</h5>
                        <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt6">Deskripsi</button>
                        <a class="btn custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/s5FpJL6fpjsdoqCw6" target="_blank">Lokasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Museum Pendidikan Surabaya.jpg" class="custom-hotel-img" alt="">
                    </div>
                    <div class="custom-hotel-content">
                        <h5 class="custom-hotel-title" style="font-weight: bold">Museum Pendidikan Surabaya</h5>
                        <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt8">Deskripsi</button>
                        <a class="btn custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/n3iq95hePzmitvbc9" target="_blank">Lokasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Taman Suroboyo.jpg" class="custom-hotel-img" alt="">
                    </div>
                    <div class="custom-hotel-content">
                        <h5 class="custom-hotel-title" style="font-weight: bold">Taman Suroboyo</h5>
                        <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt9">Deskripsi</button>
                        <a class="btn custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/EgZwmnUyTEFDL72E7" target="_blank">Lokasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Romokalisari Adventure Land.jpg" class="custom-hotel-img" alt="">
                    </div>
                    <div class="custom-hotel-content">
                        <h5 class="custom-hotel-title" style="font-weight: bold">Romokalisari Adventure Land</h5>
                        <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt10">Deskripsi</button>
                        <a class="btn custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/Potx4HPZceHopzct8" target="_blank">Lokasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Monumen Kapal Selam.jpg" class="custom-hotel-img" alt="">
                    </div>
                    <div class="custom-hotel-content">
                        <h5 class="custom-hotel-title" style="font-weight: bold">Monumen Kapal Selam</h5>
                        <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt11">Deskripsi</button>
                        <a class="btn custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/3ZbaiohRSxvfMVai9" target="_blank">Lokasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Kebun Raya Mangrove Gunung Anyar.jpg" class="custom-hotel-img" alt="">
                    </div>
                    <div class="custom-hotel-content">
                        <h5 class="custom-hotel-title" style="font-weight: bold">Kebun Raya Mangrove Gunung Anyar</h5>
                        <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt4">Deskripsi</button>
                        <a class="btn custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/d92cza2z2FrcSH167" target="_blank">Lokasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Taman Hiburan Pantai (THP) Kenjeran.jpg" class="custom-hotel-img" alt="">
                    </div>
                    <div class="custom-hotel-content">
                        <h5 class="custom-hotel-title" style="font-weight: bold">Taman Hiburan Pantai (THP) Kenjeran</h5>
                        <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt7">Deskripsi</button>
                        <a class="btn custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/6fitJ5iyF68ovLpQ6" target="_blank">Lokasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Taman Bermain Atlantis Land Kenjeran.jpg" class="custom-hotel-img" alt="">
                    </div>
                    <div class="custom-hotel-content">
                        <h5 class="custom-hotel-title" style="font-weight: bold">Taman Bermain Atlantis Land Kenjeran</h5>
                        <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt12">Deskripsi</button>
                        <a class="btn custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/6yTdz5FBWpWqUQdP7" target="_blank">Lokasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="custom-hotel-container">
                    <div class="custom-card-hotel">
                        <img src="assets/img/Museum Olahraga Surabaya.jpg" class="custom-hotel-img" alt="">
                    </div>
                    <div class="custom-hotel-content">
                        <h5 class="custom-hotel-title" style="font-weight: bold">Museum Olahraga Surabaya</h5>
                        <button class="btn custom-btn-hotel custom-btn-primary" data-toggle="modal" data-target="#modalt13">Deskripsi</button>
                        <a class="btn custom-btn-hotel custom-btn-primary" href="https://maps.app.goo.gl/SRprifW83AnUvDJm7" target="_blank">Lokasi</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal pop up-->
        <div class="modal fade" id="modalt1">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Patung Buddha 4 Wajah</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Patung Empat Wajah Buddha diresmikan pada tanggal 9 November 2004. Patung ini menduduki bangunan mirip stupa, di mana Buddha duduk di singgasananya. Karena ada empat wajah, wajah depan adalah wajah yang menghadap lurus ke depan dengan tangan memegang manik-manik doa. Empat wajah dalam patung Buddha ini mewakili empat kualitas baik Buddha, yaitu kasih sayang, kemurahan hati, keadilan, dan meditasi. Patung ini memiliki kemiripan dengan patung Buddha di Bangkok, yang terdiri dari: wajah perdamaian dan kesehatan, wajah hubungan baik, wajah keberuntungan, dan wajah perlindungan dari kejahatan.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt2">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sentra Kuliner G-Walk</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>G-Walk terletak di area perumahan Citraland yang didirikan sejak tahun 2002. Konsepnya adalah pusat kuliner sepanjang koridor jalan dengan banyak kafe dan restoran yang menawarkan berbagai hidangan dari setiap penyewa, makanan dan minuman yang beragam, dan konsep Lokasi. Selain itu, desain koridor konsep modern dengan dekorasi lampu warna-warni menarik untuk spot foto. Setiap tahun, sepanjang koridor G-Walk diadakan berbagai atraksi menarik. G-Walk selalu ramai dengan para pecinta kuliner setiap hari dan malam.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt3">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Museum Blockbuster</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Museum Blockbuster didirikan pada tahun 2018 dan memiliki lebih dari 3000 koleksi, semuanya merupakan barang langka dan edisi terbatas. Terdiri dari action figure, diorama, patung, properti film, koleksi boneka, dan mainan lainnya.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt4">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Kebun Raya Mangrove Gunung Anyar</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Kebun Raya Mangrove atau Taman Botani Mangrove Surabaya adalah area konservasi yang baru saja diresmikan pada tanggal 26 Juli 2023. KRM Surabaya merupakan gabungan dari Ekowisata Mangrove Gunung Anyar dan Medokan Sawah dengan luas total lahan 27 Ha. Saat ini, KRM Surabaya memiliki koleksi 57 spesies mangrove atau 36% dari total spesies mangrove di Indonesia. Selain sebagai area konservasi dan edukasi, terdapat berbagai fasilitas seperti area jogging track, tur perahu, menara pemantauan, ATV, area UMKM, area bermain, auditorium, toko souvenir, dan spot foto instagramable. Terdapat pula kegiatan penanaman dan pembibitan mangrove sebagai bagian dari upaya konservasi dan pencegahan abrasi.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt5">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Kebun Binatang Surabaya</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Kebun Binatang Surabaya adalah salah satu kebun binatang di Indonesia yang dulunya merupakan kebun binatang terlengkap di Asia Tenggara, dengan lebih dari 211 spesies hewan yang berbeda terdiri dari lebih dari 2.236 ekor hewan. Kebun Binatang Surabaya juga berfungsi sebagai fasilitas konservasi, pendidikan, tempat penelitian, dan rekreasi.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt6">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Wisata Perahu Kalimas</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Kalimas Boat Ride Tour adalah salah satu destinasi wisata terkenal di Surabaya. Dengan suasana langit senja hingga lampu gemerlap gedung-gedung megah terlihat mempesona dari atas perahu wisata ini. Kalimas Boat Tour beroperasi setiap hari dari pukul 15.00 hingga 21.00. Ada dua dermaga keberangkatan, dari dermaga Taman Prestasi (beli tiket online di www.tiketwisata.surabaya.go.id) dan dermaga Monumen Kapal Selam (tiket offline tersedia).</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt7">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Taman Hiburan Pantai (THP) Kenjeran</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Taman Pantai Kenjeran menyajikan objek wisata pantai di bagian utara Surabaya. Pemandangan pantai yang indah, pemandangan laut dan matahari terbenam, serta Jembatan Suramadu dapat dinikmati dari sini. Lebih nyaman untuk mengunjungi Taman Pantai Kenjeran karena sekarang fasilitasnya lebih lengkap dan rapi. Terdapat taman bermain, food court, gazebo, gerai suvenir untuk produk UMKM, dan juga jembatan kayu untuk menikmati pantai Kenjeran dan Jembatan Suroboyo lebih dekat. Jangan lupa untuk mencicipi kuliner khas daerah pesisir, lontong kupang dengan sate kerang dan es kelapa, serta berbelanja oleh-oleh ketika mengunjungi Taman Pantai Kenjeran.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt8">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Taman Suroboyo</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Taman Suroboyo terletak di depan Pusat Ikan Bulak (SIB), dengan luas area sekitar 11.000 meter persegi. Di taman ini, terdapat ikon Surabaya, yaitu Patung Suro Boyo setinggi 25 meter. Di tengah taman, terdapat area terbuka yang dapat digunakan untuk olahraga, rollerblade, atau sekadar menikmati suasana. Di sisi kanan taman, terdapat tanaman rindang dan area bermain untuk anak-anak. Saat cuaca cerah, datanglah ke Taman Suroboyo untuk menikmati matahari terbit yang indah.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt9">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Museum Pendidikan Surabaya</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Museum Pendidikan Surabaya adalah museum tematik yang didirikan sebagai langkah untuk melestarikan sejarah dan budaya bangsa dengan tujuan mendukung kegiatan pendidikan, penelitian, dan rekreasi di Surabaya. Museum ini mengumpulkan bukti materi tentang Pendidikan di masa Pra-Keaksaraan, Klasik, Kolonial, dan Kemerdekaan. Museum ini dulunya adalah sekolah Taman Siswa. Jumlah koleksi yang saat ini dipamerkan di Museum Pendidikan Surabaya adalah 889 koleksi yang terkait dengan pendidikan di Surabaya.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt10">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Romokalisari Adventure Land</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Sentra Ikan Romokalisari (SIR) diresmikan oleh Wali Kota Surabaya Tri Rismaharini (sekarang menteri sosial) pada 10 Desember 2020. Di dekat SIR ini terdapat sebuah pulau, yaitu kelompok Pulau Galang yang menjadi menu utama untuk tur perahu di Pusat Ikan Romokalisari.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt11">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Monumen Kapal Selam</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Monumen Kapal Selam merupakan replika asli dari kapal selam KRI Pasopati 410 dari Satuan Kapal Selam Armada Timur Indonesia (Satselarmatim). Monkasel juga merupakan monumen kapal selam terbesar di wilayah Asia. KRI Pasopati 410 adalah tipe SS Whiskey Class yang dibuat di Vladi Wostok, Rusia pada tahun 1952. Masuk ke dalam jajaran Angkatan Laut pada 29 Januari 1962 dengan tugas utama untuk mengganggu jalur transportasi laut lawan. Monumen ini diresmikan pada 27 Juni 1998 oleh Laksamana TNI Arief Kushariadi. Dibuka untuk umum pada 15 Juli 1998.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt12">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Taman Bermain Atlantis Land Kenjeran</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Terletak di area Kenpark Surabaya, Atlantis Land menawarkan berbagai fasilitas dan wahana yang dapat dinikmati oleh pengunjung. Mulai dari wahana untuk anak-anak hingga dewasa. Menjadi salah satu destinasi wisata keluarga paling populer di Surabaya. Beberapa wahana yang tersedia seperti kolam bola, mini coaster, disco pang-pang, seluncuran boomerang, diorama, patung lilin, istana es, waterland, dan banyak lagi. Selain itu, ada juga atraksi Dancing Fountain yang dapat dinikmati mulai pukul 17.30 setiap hari.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalt13">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Museum Olahraga Surabaya</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Museum ini diinisiasi pada tahun 2019 dan diresmikan oleh Walikota Surabaya, Eri Cahyadi, dan Menteri Sosial Republik Indonesia, Tri Rismaharini pada tanggal 8 Mei 2021. Dibangun untuk menggambarkan dinamika sejarah dan budaya bangsa Indonesia yang terkait dengan cerita dan objek sejarah olahraga dengan bukti materi yang ditinggalkan oleh Para Pejuang dan Pahlawan Olahraga Surabaya. Museum ini, yang terdiri dari dua lantai, menyimpan koleksi Atlet Surabaya sebanyak 235 jenis koleksi. Ratusan koleksi ini dibagi menjadi tiga jenis. Pertama, koleksi sejarah, yang merupakan koleksi yang diperoleh dari hasil penemuan, hasil ekskavasi, atau bukti materi sejarah sebanyak sekitar 169 buah. Kedua, koleksi heraldik, dengan tanda penghargaan atau jasa, pangkat, lambang, atau logo sebanyak 65 buah, dan ketiga, koleksi teknologi terkait objek dengan elemen teknologi sebanyak satu buah.</p>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="sectionT-three">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p style="color: white; font-size: 21.6px; font-weight: 900; margin-top:70px;">Select Other</p>
                <div class="slider">
                    <div class="owl-carousel">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection