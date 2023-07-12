<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Web Mulia Kerta</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/asset/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/asset/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ url('public/asset/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ url('public/asset/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ url('public/asset/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ url('public/asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="header_main">
            <div class="mobile_menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('visi')}}">Visi-Misi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('struktur')}}">Struktur Organisasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('kontak')}}">Alamat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('login')}}">Login</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="container-fluid">
                <div class="menu_main">
                    <ul>
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('visi')}}">Visi-Misi</a></li>
                        <li><a href="{{url('struktur')}}">Struktur Organisasi</a></li>
                        <li><a href="{{url('kontak')}}">Alamat</a></li>
                        <li><a href="{{url('login')}}">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <h1 class="banner_taital">Website Kelurahan Mulia Kerta</h1>
                            <p class="banner_text">Jln.Pangeran Kusuma Jaya, Mulia Kerta, Kec. Benua Kayong, Kabupaten
                                Ketapang,
                                Kalimantan Barat 78821
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- about section start -->
    <div class="about_section layout_padding_1">
        <div class="container-fluid">
            <div class="row">
                <div class="contact_section layout_padding_2">
                    <div class="container">
                        <div class="email_text">
                            <h1 class="about_taital" style="text-align: center;">ALAMAT KAMI</h1>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15950.908351115842!2d109.986218!3d-1.8551593!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e051830b03176ed%3A0xeb310872cfeeb21c!2sKantor%20Kelurahan%20Mulia%20Kerta!5e0!3m2!1sid!2sid!4v1682695078369!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">

        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">  </p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{ url('public/asset/js/jquery.min.js') }}"></script>
    <script src="{{ url('public/asset/js/popper.min.js') }}"></script>
    <script src="{{ url('public/asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('public/asset/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ url('public/asset/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ url('public/asset/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ url('public/asset/js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ url('public/asset/js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
