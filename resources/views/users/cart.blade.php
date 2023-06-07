@extends('layouts.index')
@section('content')
    @php
        $total = 0;
        if ($cart != null) {
            foreach ($cart as $key => $value) {
                $price = (int) $value['price'];
                $quan = (int) $value['quantity'];
                $total = $price * $quan + $total;
            }
        }
    @endphp


    <main id="main" class="main-site">
        <div class="container">

            <div class=" main-content-area">
                <div class="wrap-iten-in-cart">
                    @if ($cart == null)
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="card-body cart" style="padding-top: 20rem">
                                    <div class="col-sm-12 empty-cart-cls text-center">
                                        <img src="{{ asset('uploads/cards.png') }}" width="130" height="130"
                                            class="img-fluid mb-4 mr-3">
                                        <h3><strong>Keranjang Kosong</strong></h3>
                                        <h4>Belanja dulu yuk</h4>
                                        <a href="/" class="btn btn-primary cart-btn-transform m-3"
                                            data-abc="true">Belanja Yuk! </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="wrap-breadcrumb">
                            <ul>
                                <li class="item-link"><a href="#" class="link">Keranjang</a></li>
                            </ul>
                        </div>
                        <h3 class="box-title">Products Name </h3>

                        <ul class="products-cart">
                            @foreach ($cart as $key => $c)
                                <li class="pr-cart-item">
                                    <div class="product-image">
                                        <figure><img src="{{ asset('uploads/' . $c['image']) }}" alt="">
                                        </figure>
                                    </div>
                                    <div class="product-name">
                                        <a class="link-to-product" href="#">{{ ucfirst($c['name']) }}</a>
                                    </div>
                                    <div class="price-field produtc-price">
                                        <p class="price">Rp. {{ number_format($c['price']) }}</p>
                                    </div>
                                    <div class="quantity">
                                        <p>x {{ $c['quantity'] }}</p>
                                    </div>
                                    <div class="price-field sub-total">
                                        <p class="price">Rp. {{ number_format($c['total_price']) }}</p>
                                    </div>
                                    <form method="GET" action="/remove-from-cart/{{ $c['id'] }}">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat confirm"
                                            data-toggle="tooltip" title='Delete'><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-trash"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                <path fill-rule="evenodd"
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                            </svg>
                                        </button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                </div>

                <div class="summary">
                    <div class="order-summary">
                        <h4 class="title-box">Order Summary</h4>
                        <p class="summary-info"><span class="title">Subtotal</span><b class="index">Rp.
                                {{ number_format($total) }}</b></p>
                        <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b>
                        </p>
                        <p class="summary-info total-info "><span class="title">Total</span><b class="index">Rp.
                                {{ number_format($total) }}</b>
                        </p>
                    </div>
                    <div class="checkout-info">
                        <a class="btn btn-checkout" href="checkout.html">Check out</a>
                    </div>
                </div>
            </div>
            <!--end main content area-->
        </div>
        @endif

        <!--end container-->

    </main>
@endsection
@section('script')
    <!--footer area-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Hapus Keranjang ?`,
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endsection
