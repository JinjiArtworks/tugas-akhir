<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Batiknesia
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->

    {{-- YT TEMPLATE --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('yt/assets/images/favicon.ico') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('yt/assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('yt/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('yt/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('yt/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('yt/assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('yt/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('yt/assets/css/color-01.css') }}">

    

</head>

{{-- Modal Start --}}

{{-- End Modal --}}

<body class="home-page home-01 ">
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="topbar-menu-area">
                    <div class="container">
                        <div class="topbar-menu left-menu">
                            <ul>
                                <li class="menu-item">
                                    <a title="Hotline: (+123) 456 789" href="#"><span
                                            class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456
                                        789</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-menu right-menu">
                            <ul>
                                @if (!Auth::check())
                                    <li class="menu-item"><a href="/login">Login</a></li>
                                    <li class="menu-item"><a href="/register">Register</a>
                                    </li>
                                @endif

                                @if (Auth::check())
                                    <li class="menu-item">
                                        <form id="logout-form" action="/logout" method="post">
                                            @csrf
                                            <a clas="btn" href="" style="">
                                                <i class="bi bi-box-arrow-right"></i>
                                                <button type="submit" aria-current="page"
                                                    style="border: none; background-color: transparent; font-size: 12px; ">
                                                    Sign Out
                                                </button></a>
                                        </form>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="mid-section main-info-area">

                        <div class="wrap-logo-top left-section">
                            <a href="index.html" class="link-to-home"><img
                                    src="{{ asset('yt/assets/images/logo-top-1.png') }}" alt="mercado"></a>
                        </div>

                        <div class="wrap-search center-section">
                            <div class="wrap-search-form">
                                <form action="#" id="form-search-top" name="form-search-top">
                                    <input type="text" name="search" value="" placeholder="Search here...">
                                    <button form="form-search-top" type="button"><i class="fa fa-search"
                                            aria-hidden="true"></i></button>

                                </form>
                            </div>
                        </div>

                        <div class="wrap-icon right-section">
                            <a href="/notification" class="link-direction">
                                <i class="fa fa-lg fa-bell" style="color:#3c8fd8; " aria-hidden="true"></i>
                            </a>
                            <a href="/cart" class="link-direction">
                                <i class="fa fa-lg fa-shopping-cart " style="color:#3c8fd8; padding-left : 24px;"
                                    aria-hidden="true"></i>
                            </a>

                            
                            @if (Auth::check())
                                {{-- count untuk menghitung berapa banyak jumlah data yang ada pada query --}}
                                @if (count($toko) != 0)
                                    <a href="/dashboard" class="link-direction">
                                        <i class="fa fa-lg fa-user" style="color:#3c8fd8; padding-left : 24px; "
                                            aria-hidden="true"></i>
                                        {{ $toko[0]->name }}
                                    </a>
                                @else
                                    <a href="/registertoko" class="link-direction">
                                        <i class="fa fa-lg fa-user" style="color:#3c8fd8; padding-left : 24px; "
                                            aria-hidden="true"></i>
                                        Buka Lapak
                                    </a>
                                @endif
                            @else
                            @endif
                        </div>

                    </div>
                </div>
                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                            <li class="menu-item home-icon">
                                <a href="/home" class="link-term mercado-item-title"><i class="fa fa-home"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li class="menu-item">
                                <a href="/shop" class="link-term mercado-item-title">Produk</a>
                            </li>

                            <li class="menu-item">
                                <a href="/kategori" class="link-term mercado-item-title">Kategori</a>
                            </li>
                            <li class="menu-item">
                                <a href="/seragam" class="link-term mercado-item-title">Seragam Batik</a>
                            </li>
                            <li class="menu-item">
                                <a href="/sejarah" class="link-term mercado-item-title">Sejarah Batik</a>
                            </li>
                            <li class="menu-item">
                                <a href="/panduan" class="link-term mercado-item-title">Panduan Berjualan</a>
                            </li>
                            {{-- problemnya jika user ingin mendaftarkan toko, masih belum bisa --}}

                            {{-- {{ dd($toko) }} --}}
                            {{-- jika sudah ada akun toko --}}

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
    <script src="{{ asset('yt/assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('yt/assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('yt/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('yt/assets/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('yt/assets/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('yt/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('yt/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('yt/assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('yt/assets/js/functions.js') }}"></script>
    @yield('script')
</body>

</html>
