@extends('layouts.index')
@section('content')
    <main id="main" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12 main-content-area">
                    
                    <!--end wrap shop control-->

                    <div class="wrap-products">
                        <div class="wrap-product-tab tab-style-1">
                            <div class="tab-contents">
                                <div class="tab-content-item active" id="digital_1a">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                        data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                        data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
    
                                        @foreach ($product as $p)
                                            <div class="product product-style-2 equal-elem ">
                                                <div class="product-thumnail">
                                                    <a href="/products/{{ $p->id }}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                        <figure>
                                                            <img src="{{ asset('uploads/' . $p->image) }}" width="800"
                                                                height="800"
                                                                alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                        </figure>
                                                    </a>
                                                    <div class="wrap-btn">
                                                        <a href="/products/{{ $p->id }}" class="function-link" >Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <a href="/products/{{ $p->id }}"
                                                        class="product-name"><span>{{ $p->name }}</span></a>
                                                    <div class="wrap-price"><span class="product-price">Rp.
                                                            {{ number_format($p->price) }}</span></div>
                                                </div>
                                            </div>
                                        @endforeach
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">

                        <ul class="product-list grid-products equal-container">
                            @foreach ($product as $p)
                                <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="/products/{{ $p->id }}"
                                                title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure>
                                                    <img src="{{ asset('uploads/' . $p->image) }}" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="wrap-btn">
                                                <a href="/products/{{ $p->id }}" class="function-link">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="/products/{{ $p->id }}"
                                                class="product-name"><span>{{ $p->name }}</span></a>
                                            <div class="wrap-price"><span class="product-price">Rp.
                                                    {{ number_format($p->price) }}</span></div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>

                    </div> --}}

                    <div class="wrap-pagination-info">
                        <ul class="page-numbers">
                            <li><span class="page-number-item current">1</span></li>
                            <li><a class="page-number-item" href="#">2</a></li>
                            <li><a class="page-number-item" href="#">3</a></li>
                            <li><a class="page-number-item next-link" href="#">Next</a></li>
                        </ul>
                        <p class="result-count">Showing 1-8 of 12 result</p>
                    </div>
                </div>
                <!--end main products area-->


                <!--end sitebar-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            // $('.count').prop('disabled', true);
            $(document).on('click', '.plus', function() {
                $('.count2').val(parseInt($('.count2').val()) + 1);
            });
            $(document).on('click', '.minus', function() {
                $('.count2').val(parseInt($('.count2').val()) - 1);
                if ($('.count2').val() == 0) {
                    $('.count2').val(1);
                }
            });
        });
    </script>
@endsection
