@extends('wPage.layouts.main')

@section('content')

<body>
  <script>
    function moveCircle(event) {
      const customCircle = document.getElementById('customCircle');
      const circleSize = customCircle.offsetWidth;

      // Menghitung posisi lingkaran agar berada persis di atas kursor
      const circleX = event.clientX - circleSize / 2;
      const circleY = event.clientY - circleSize / 2;

      customCircle.style.left = `${circleX}px`;
      customCircle.style.top = `${circleY}px`;
    }

    const customText = document.getElementById('customText');
    customText.addEventListener('mouseleave', () => {
      const customCircle = document.getElementById('customCircle');
      customCircle.style.transform = 'translate(-50%, -50%) scale(0)';
    });
  </script>
</body>
<section class="section-one-explore" style="padding: 0px;">
  <div class="video-section">
    <video autoplay muted loop>
      <source src="assets/vid/profilesby.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="overlay">
      <img class="img-fluid p-2" src="assets/img/Frame 166.png" alt="">
      <!-- <h2>HARI OTONOMI DAERAH KE-28</h2>
      <p>Surabaya</p> -->
    </div>
  </div>
  <div class="container mt-4">
    <div class="row p-5" style="background-color: #181C24; border-radius:100px">
      <div class="col-md-6">
        <img class="img-fluid" src="assets/img/indonesia 1.svg" alt="">
      </div>
      <div class="col">
        <p style="color:white; font-weight:400">
          Otonomi daerah merupakan konsep pemberian wewenang kepada daerah otonom atau wilayah administratif tertentu untuk mengatur dan mengelola urusan pemerintahan serta pembangunan di tingkat lokal sesuai dengan kebutuhan dan karakteristiknya sendiri. Konsep ini memberikan kesempatan bagi daerah untuk lebih mandiri dalam mengambil keputusan yang berhubungan dengan masalah lokal, seperti pengelolaan keuangan, pendidikan, kesehatan, infrastruktur, dan lain sebagainya.
        </p>
        <a href="" class="btn btn-warning" style="border-radius: 50px;">Rangkaian Acara HUT OTODA</a>
      </div>
    </div>
  </div>
  <section class="section-one-explore">
    <div class="container">
      <div class="row">
        <div class="col-md-5 d-flex align-items-center custom-img-stadium">
          <h1 style="color: white;">Semua yang Perlu Anda Tahu tentang Surabaya</h1>
        </div>
        <div class="col-md-7 d-flex align-items-center">
          <img src="assets/img/heritage1.webp" class="img-fluid custom-img-stadium" alt="Explore" />
        </div>
      </div>
    </div>
    <section class="section-two-explore">
      <div class="container">
        <div class="row">
          <div class="col-12">
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
            <div class="custom-text-container" onmousemove="moveCircle(event)">
              <div class="custom-circle" id="customCircle"></div>
              <h2 class="custom-text-hover" id="customText">Ayo Jelajahi Kota Surabaya!</h2>
            </div>
          </div>
        </div>
      </div>
      <section class="section-three-explore">
        <div class="container">
          <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column ">
              <img src="assets/img/sparkling.png" alt="Surabaya Sparkling" class="img-fluid mb-2" style="margin-top: -7px;">
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column">
              <p class="text-things mb-4">Surabaya Sparkling</p>
              <a type="button" class="btn" style="background-color:#A52F76; border: solid 2px #FAD32E; border-radius:50px; font-weight:bold; font-size:large; color:#FAD32E" target="_blank" href="https://www.youtube.com/embed/yF7axCVhE3g?si=SLJlfNuXkvsvZ4hf">Video Sparkling Surabaya</a>
            </div>
            <!-- <div class="col text-center pb-4">
            <a class="btn" data-bs-toggle="modal" data-bs-target="#modal1" style="background-color:#A52F76; border: solid 2px #FAD32E; border-radius:50px; font-weight:bold; font-size:large; color:#FAD32E">Isi Form Kehadiran</a>
          </div> -->
          </div>
        </div>
      </section>
    </section>
  </section>
</section>
@endsection