<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hari Otoda</title>
  <link rel="icon" href="{{ url('assets/img/otoda 28.svg')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" /-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" />
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/themify-icons.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/owl.carousel.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/magnific-popup.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/nice-select.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/footer.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/navigationbar.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/main.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/home.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/slider.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/exploreslider.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/hotel.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/exploremain.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/transportasi.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/detailtrans.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/detailnyus.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/things.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/berita.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/U-17.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/culture.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/transdetail.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/map.css')}}" media="all">

  

  <title>@yield('title')</title>
</head>

<body>
  @include('wPage.layouts.nav')
  @yield('content')
  @include('wPage.layouts.footer')

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="{{ url('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>

  <script src="{{ url('assets/js/vendor/bootstrap.min.js') }}"></script>

  <script src="{{ url('assets/js/navigationbar.js') }}"></script>
  <script src="{{ url('assets/js/home.js') }}"></script>
  <!--script src="{{ url('assets/js/thingspage.js') }}"></script-->
  <script src="{{ url('assets/js/home.js') }}"></script>
  <script src="{{ url('assets/js/exploreslider.js') }}"></script>
  <script src="{{ url('assets/js/carousel.js') }}"></script>
  <script src="{{ url('assets/js/pagescript.js') }}"></script>
  <script src="{{ url('assets/js/pagescriptcullinary.js') }}"></script>
  <!--script src="{{ url('assets/js/destination.js') }}"></script-->
  <!--script src="{{ url('assets/js/shopping.js') }}"></script-->
  <script src="{{ url('assets/js/event.js') }}"></script>
  <!--script src="{{ url('assets/js/pagescriptheritage.js') }}"></script-->
  <script src="{{ url('assets/js/stars.js') }}"></script>
  <script src="{{ url('assets/js/Target.js') }}"></script>
  <script src="{{ url('assets/js/NavIcon.js') }}"></script>
  <!--script src="{{ url('assets/js/transport.js') }}"></script-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" script src="exploremain.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
</body>

</html>