@extends('wPage.layouts.main')

@section('content')
<section class="sectionC-one">
    <div class="container">
        <div class="row">
            <div class="col-md-5 d-flex align-items-center custom-img-stadium">
                <h1>Berwisata Kuliner di Surabaya</h1>
            </div>
            <div class="col-md-7 d-flex align-items-center">
                <img src="assets/img/food.png" alt="contoh" class="img-fluid custom-img-stadium">
            </div>
        </div>
    </div>
    <section class="sectionC-two">
        <div class="container">
            <div class="row mb-5 mt-5">
                <!--Slide 1-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-image-culture">
                            <img src="assets/img/Kuliner - Rujak Cingur.jpg" alt="Rujak Cingur" class="img-fluid" class="img-fluid">
                            <div class="culture-description">
                                <h1 class="text-center title-culture-custom" style="color: white;">Rujak Cingur</h1>
                                <p>Rujak adalah salad ala Indonesia yang disajikan dengan buah-buahan tropis, tahu goreng, tempe goreng, lontong, dan sayuran yang disiram dengan saus kacang yang dicampur dengan saus udang. Ini disebut Rujak Cingur, karena cingur merupakan bagian dari hidung sapi yang ditambahkan ke dalam Rujak.</p>                            </div>
                        </div>
                    </div>
                    <hr class="separator-culture">
                </div>

                <!--Slide 2-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-image-culture">
                            <img src="assets/img/rawon.jpg" alt="Rawon" class="img-fluid">
                            <div class="culture-description">
                                <h1 class="text-center title-culture-custom" style="color: white;">Rawon</h1>
                                <p>Rawon adalah salah satu kuliner khas Jawa Timur yang mudah ditemukan di Surabaya. Sup hitam kental ini terbuat dari kluwak (kenari hitam atau pangium) yang membuat sup rawon berwarna hitam. Rawon mengandung potongan daging sapi yang biasanya disajikan dengan tauge dan ditaburi bawang goreng. Cocok dinikmati selagi hangat dengan sepiring nasi putih dan telur asin, kerupuk udang, tempe goreng, dan sambal sebagai pelengkap. Dari warung pinggir jalan hingga restoran menawarkan Rawon sebagai salah satu menu di Surabaya. Cara menikmati Rawon dengan benar? Cobalah untuk sarapan atau makan malam.</p>                            </div>
                        </div>
                    </div>
                    <hr class="separator-culture">
                </div>

                <!--Slide 3-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-image-culture">
                            <img src="assets/img/Lontong Balap.jpg" alt="Lontong Balap" class="img-fluid">
                            <div class="culture-description">
                                <h1 class="text-center title-culture-custom" style="color: white;">Lontong Balap</h1>
                                <p>Lontong balap adalah makanan khas Indonesia yang merupakan ciri khas kota Surabaya di Jawa Timur. Makanan ini terdiri dari lontong, taoge, tahu goreng, lentho, bawang goreng, kecap, dan sambal. Lontong balap terdiri dari lontong yang diiris-iris dan di atas irisan lontong ini ditumpangi irisan tahu dan remasan beberapa lentho (bulatan kecil sebesar ibu jari dan dipencet ini bentuk lentho asli lontong balap, berbeda dengan lentho yang dipakai sekarang), kemudian di atasnya ditumpangi kecambah setengah matang yang porsinya terbanyak dalam hidangan, setelah itu diambilkan kuah secukupnya, sambal dan kecap disesuaikan selera pembeli. Makanan ini dihidangkan dengan pasangannya yaitu, beberapa tusuk sate kerang.</p>
                            </div>
                        </div>
                    </div>
                    <hr class="separator-culture">
                </div>

                <!--Slide 4-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-image-culture">
                            <img src="assets/img/pecel semanggi.jpg" alt="Pecel Semanggi" class="img-fluid">
                            <div class="culture-description">
                                <h1 class="text-center title-culture-custom" style="color: white;">Pecel Semanggi</h1>
                                <p>Ini adalah kuliner khas dari Surabaya yang tidak bisa ditemukan di mana-mana kecuali di Surabaya. Rasanya yang unik membuat banyak orang penasaran dengan rasanya. Berbeda dengan pecel lainnya karena sambal pecel semanggi dibuat dari ubi jalar sebagai bahan utamanya. Karakteristik lainnya terletak pada penyajiannya, daun semanggi dan tauge disusun dalam gaya pincuk yang terbuat dari daun pisang dan menggunakan kerupuk puli sebagai sendok.</p>                            </div>
                        </div>
                    </div>
                    <hr class="separator-culture">
                </div>

                <!--Slide 5-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-image-culture">
                            <img src="assets/img/sate-kelopo.jpg" alt="Sate Kelopo" class="img-fluid">
                            <div class="culture-description">
                                <h1 class="text-center title-culture-custom" style="color: white;">Sate Kelopo</h1>
                                <p>Jenis sate ini berbeda dari sate lainnya secara umum. Sate Klopo adalah jenis sate yang terbuat dari daging sapi atau ayam yang dibalut dengan kelapa parut yang telah dibumbui sebelumnya. Tusukan daging sapi dan ayam tersebut dilapisi dengan kelapa parut dan dipanggang di atas panggangan arang. Sate Klopo memiliki aroma khas dan rasa gurih, kemudian disajikan dengan saus kacang, bawang merah iris, dan cabai sesuai selera. Nikmati sate klopo dengan nasi atau lontong.</p>                            </div>
                        </div>
                    </div>
                    <hr class="separator-culture">
                </div>
            </div>
        </div>
        <section class="section-three-hotel">
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