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

    @yield('template')
    <style>
        @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

        body {
            background-color: white;
            font-family: 'Calibri', sans-serif !important;
        }

        .mt-100 {
            margin-top: 100px;

        }


        .card {
            margin-bottom: 30px;
            border: 0;
            -webkit-transition: all .3s ease;
            transition: all .3s ease;
            letter-spacing: .5px;
            border-radius: 8px;
            -webkit-box-shadow: 1px 5px 24px 0 rgba(68, 102, 242, .05);
            box-shadow: 1px 5px 24px 0 rgba(68, 102, 242, .05);
        }

        .card .card-header {
            background-color: #fff;
            border-bottom: none;
            padding: 24px;
            border-bottom: 1px solid #f6f7fb;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-header:first-child {
            border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
        }


        .card .card-body {
            padding: 30px;
            background-color: transparent;
        }

        .btn-primary,
        .btn-primary.disabled,
        .btn-primary:disabled {
            background-color: #4466f2 !important;
            border-color: #4466f2 !important;
        }
    </style>
    @yield('style')
</head>

{{-- Modal Start --}}
<div class="modal fade" id="bpd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">BPD</h3>
            </div>
            <div class="modal-body center">
                <p>Bagan</p>
                <img class="img-fluid" src="{{ asset('ZenBlog/assets/img/bagan.png') }}">
                &nbsp;&nbsp;
                <div class="card border-secondary mb-3">
                    <div class="card-header">Visi & Misi</div>
                    <div class="card-body">
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam erat velit, hendrerit ac neque
                            a, sagittis accumsan arcu. Phasellus a risus risus. Nulla quam velit, facilisis vitae nisi
                            sed, bibendum condimentum eros. Aliquam gravida porta odio nec eleifend. Praesent vitae
                            posuere nisl, id finibus mi. Duis id neque sem. Maecenas luctus ipsum semper ex tempor, et
                            fringilla felis efficitur. Duis non lorem mi. Vestibulum ante ipsum primis in faucibus orci
                            luctus et ultrices posuere cubilia curae; Nam venenatis id justo vehicula pulvinar. Sed
                            dignissim, elit sed vestibulum cursus, justo lectus volutpat enim, luctus pulvinar nulla
                            ante eu nisl. Nam venenatis dignissim est, a imperdiet quam euismod a. Pellentesque ut
                            tincidunt mi. Mauris sed lacinia velit.
                        </p>
                    </div>
                </div>
                &nbsp;&nbsp;
                <div class="card card-primary">
                    <div class="card-header">Tugas Pokok & Fungsi</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
                &nbsp;&nbsp;
                <div class="card card-primary">
                    <div class="card-header">Kepengurusan</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Asep Bensin S.SI</td>
                                    <td>Ketua</td>
                                </tr>
                                <tr>
                                    <td>Bagas</td>
                                    <td>Sekretaris</td>
                                </tr>
                                <tr>
                                    <td>Cika</td>
                                    <td>Bendahara</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
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
                                            class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
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
                                    <li class="menu-item"><a href="/logout">Logout</a></li>
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
                                    <input type="text" name="search" value=""
                                        placeholder="Search here...">
                                    <button form="form-search-top" type="button"><i class="fa fa-search"
                                            aria-hidden="true"></i></button>

                                </form>
                            </div>
                        </div>

                        
                        <div class="wrap-icon right-section">
                            <div class="wrap-icon-section wishlist">
                                <a href="/notification" class="link-direction">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <div class="left-info">
                                        <span class="index">0 item</span>
                                        <span class="title">Notifikasi</span>
                                    </div>
                                </a>
                            </div>
                            <div class="wrap-icon-section minicart">
                                <a href="/cart" class="link-direction">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <div class="left-info">
                                        <span class="index">4itesms</span>
                                        <span class="title">Keranjang</span>
                                    </div>
                                </a>
                            </div>
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
                                <a href="/seragam" class="link-term mercado-item-title">Seragam Batik</a>
                            </li>
                            <li class="menu-item">
                                <a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
                            </li>
                            <li class="menu-item">
                                <a href="/panduan" class="link-term mercado-item-title">Panduan Berjualan</a>
                            </li>
                            {{-- {{ dd($toko) }} --}}
                            {{-- jika sudah ada akun toko --}}
                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main id="main" class="main-site left-sidebar">
        <div class="container">
            <div class="content">
                <div class="row d-flex justify-content-center my-4">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="col-lg-12 ">
                                <h4 style="text-align: center">Tahapan Memulai Berjualan</h4>
                                <div class="mb-8">
                                    <h4>1. Mendaftar Akun Pribadi</h4>
                                    <img src="{{ asset('uploads/step/1.png') }}" alt="" style="">
                                    <p>Sebelum melakukan berjualan, pengguna diminta untuk mendaftarkan akun pada
                                        website terlebih dahulu.
                                        Untuk melakukan pendaftaran, dapat mengklik laman login pada gambar diatas.
                                    </p>
                                    <img src="{{ asset('uploads/step/2.png') }}" alt="" style="">
                                    <p>Setelah itu pengguna diminta untuk melakukan login pada website. Jika pengguna
                                        belum
                                        memiliki akun, maka dapat melakukan registrasi dengan cara menekan tombol
                                        register pada gambar diatas.
                                    </p>
                                    <img src="{{ asset('uploads/step/3.png') }}" alt="" style="">
                                    <p>Jika belum mempunyai akun, pengguna diminta untuk melakukan registrasi terlebih
                                        dahulu.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="col-lg-12 ">
                                <div class="mb-8">
                                    <h4>2. Mendaftar Akun Lapak</h4>
                                    <img src="{{ asset('uploads/step/1.png') }}" alt="" style="">
                                    <p>Untuk dapat berjualan, pengguna diminta untuk mendaftarkan toko mereka terlebih dahulu.
                                    </p>
                                    <img src="{{ asset('uploads/step/2.png') }}" alt="" style="">
                                    <p>Setelah itu pengguna diminta untuk melakukan login pada website. Jika pengguna
                                        belum
                                        memiliki akun, maka dapat melakukan registrasi dengan cara menekan tombol
                                        register pada gambar diatas.
                                    </p>
                                    <img src="{{ asset('uploads/step/3.png') }}" alt="" style="">
                                    <p>Jika belum mempunyai akun, pengguna diminta untuk melakukan registrasi terlebih
                                        dahulu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

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
   
