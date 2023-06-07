@extends('layouts.index')
@section('content')
    <main id="main" class="main-site">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>detail</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12 main-content-area">
                    <div class="wrap-product-detail">
                        <div class="detail-media">
                            <div class="product-gallery">
                                <img src="{{ asset('uploads/' . $product->image) }}" />
                            </div>
                        </div>
                        <div class="detail-info" style="padding-top: 0px">
                            <h1 class="product-name" style="font-size: 25px">{{ $product->name }}</h1>

                            <div class="product-rating">
                                {{ $product->rating }}
                                {{-- cara otomatis bintang sesuai dengan rating tu gmana ya --}}
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <a href="#" class="count-review">(05 review)</a>
                            </div>
                            <div class="short-desc">
                                <p>Terjual: {{ $product->terjual }} </p>
                            </div>
                            <div class="wrap-price"><span class="product-price">Rp.
                                    {{ number_format($product->price) }}</span></div>
                            <div class="stock-info in-stock">
                                <p class="availability">Stock: <b>{{ $product->stock }}</b></p>
                            </div>
                            <div class="wrap-butons">
                                <form action="{{ url('add-to-cart/' . $product->id) }}" method="POST">
                                    @csrf
                                    <div class="quantity">
                                        <span>Quantity:</span>
                                        <div class="quantity-input">
                                            <input class="count2" type="number" name="quantity" value="1"
                                                data-max="120" pattern="[0-9]*">
                                            <a class="btn btn-reduce"></a>
                                            <a class="btn btn-increase"></a>
                                        </div>
                                    </div>
                                    <div style="padding-top:25px">
                                        <button class="btn add-to-cart" type="submit" style="width: 30rem">Masukkan
                                            Keranjang</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="advance-info ">
                            <div class="tab-control normal">
                                <a href="#review" class="tab-control-item active">Reviews</a>
                            </div>
                            <div class="tab-contents">
                                <div class="tab-content-item active" id="review">
                                    <div class="wrap-review-form">
                                        <div id="comments">
                                            <h2 class="woocommerce-Reviews-title">1 review for
                                                <span>{{ $product->name }}</span>
                                            </h2>
                                            <ol class="commentlist">
                                                <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                                    id="li-comment-20">
                                                    <div id="comment-20" class="comment_container">
                                                        <img alt="" src="{{ asset('uploads/' . $product->image) }}"
                                                            height="80" width="80">
                                                        <div class="comment-text">
                                                            <div class="star-rating">
                                                                <span class="width-80-percent">Rated <strong
                                                                        class="rating">2</strong> out of 5</span>
                                                            </div>
                                                            <p class="meta">
                                                                <strong class="woocommerce-review__author">Rifki</strong>
                                                                <span class="woocommerce-review__dash">–</span>
                                                                <time class="woocommerce-review__published-date"
                                                                    datetime="2008-02-14 20:00">Tue, Aug 15, 2017</time>
                                                            </p>
                                                            <div class="description">
                                                                <p>Produknya keren abis!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div><!-- #comments -->
                                        <p>__________________________________________________________________________________________________________
                                        </p>
                                        {{-- to give ratings! learn later --}}
                                        <div id="review_form_wrapper">
                                            <div id="review_form">
                                                <div id="respond" class="comment-respond">
                                                    <form action="#" method="post" id="commentform"
                                                        class="comment-form" novalidate="">
                                                        <p class="comment-notes">
                                                            <span id="email-notes">Berikan rating untuk produk ini !
                                                            </span>
                                                        </p>
                                                        <div class="comment-form-rating">
                                                            <span>Your rating</span>
                                                            <p class="stars">

                                                                <label for="rated-1"></label>
                                                                <input type="radio" id="rated-1" name="rating"
                                                                    value="1">
                                                                <label for="rated-2"></label>
                                                                <input type="radio" id="rated-2" name="rating"
                                                                    value="2">
                                                                <label for="rated-3"></label>
                                                                <input type="radio" id="rated-3" name="rating"
                                                                    value="3">
                                                                <label for="rated-4"></label>
                                                                <input type="radio" id="rated-4" name="rating"
                                                                    value="4">
                                                                <label for="rated-5"></label>
                                                                <input type="radio" id="rated-5" name="rating"
                                                                    value="5" checked="checked">
                                                            </p>
                                                        </div>
                                                        <p class="comment-form-author">
                                                            <label for="author">Name <span
                                                                    class="required">*</span></label>
                                                            <input id="author" name="author" type="text"
                                                                value="">
                                                        </p>
                                                        <p class="comment-form-email">
                                                            <label for="email">Email <span
                                                                    class="required">*</span></label>
                                                            <input id="email" name="email" type="email"
                                                                value="">
                                                        </p>
                                                        <p class="comment-form-comment">
                                                            <label for="comment">Your review <span
                                                                    class="required">*</span>
                                                            </label>
                                                            <textarea id="comment" name="comment" cols="45" rows="8"></textarea>
                                                        </p>
                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" id="submit"
                                                                class="submit" value="Submit">
                                                        </p>
                                                    </form>

                                                </div><!-- .comment-respond-->
                                            </div><!-- #review_form -->
                                        </div><!-- #review_form_wrapper -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            // $('.count').prop('disabled', true);
            $(document).on('click', '.btn-increase', function() {
                $('.count2').val(parseInt($('.count2').val()) + 1);
            });
            $(document).on('click', '.btn-reduce', function() {
                $('.count2').val(parseInt($('.count2').val()) - 1);
                if ($('.count2').val() == 0) {
                    $('.count2').val(1);
                }
            });
        });
    </script>
@endsection
