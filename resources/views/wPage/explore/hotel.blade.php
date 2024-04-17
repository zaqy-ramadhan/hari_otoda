@extends('wPage.layouts.main')

@section('content')
<section class="section-one-hotel">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <h1>Temukan Hotel Terbaik, Langsung di Genggaman Anda!</h1>
            </div>
            <div class="col-md-6">
                <img src="assets/img/hotels.png" alt="contoh" class="img-fluid">
            </div>
        </div>
    </div>
    <section class="section-two-hotel">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 d-flex justify-content-center" id="hotelsCardContainer">
                <div class="col-md-12">
                    <!-- Card elements for hotels will be generated here by JavaScript -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="pagination" class="pagination-container"></div>
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