@extends('layouts.index')
@section('content')
    <main id="main">
        <div class="container">
            <!--MAIN SLIDE-->
            <div class="wrap-main-slide">
                <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true"
                    data-dots="false">
                    <div class="item-slide">
                        <img src="{{ 'yt/assets/images/main-slider-1-1.jpg' }}" alt="" class="img-slide">
                        <div class="slide-info slide-1">
                            <h2 class="f-title">Kid Smart <b>Watches</b></h2>
                            <span class="subtitle">Compra todos tus productos Smart por internet.</span>
                            <p class="sale-info">Only price: <span class="price">$59.99</span></p>
                            <a href="#" class="btn-link">Shop Now</a>
                        </div>
                    </div>
                    <div class="item-slide">
                        <img src="{{ 'yt/assets/images/main-slider-1-2.jpg' }}" alt="" class="img-slide">
                        <div class="slide-info slide-2">
                            <h2 class="f-title">Extra 25% Off</h2>
                            <span class="f-subtitle">On online payments</span>
                            <p class="discount-code">Use Code: #FA6868</p>
                            <h4 class="s-title">Get Free</h4>
                            <p class="s-subtitle">TRansparent Bra Straps</p>
                        </div>
                    </div>
                    <div class="item-slide">
                        <img src="{{ 'yt/assets/images/main-slider-1-3.jpg' }}" alt="" class="img-slide">
                        <div class="slide-info slide-3">
                            <h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
                            <span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
                            <p class="sale-info">Stating at: <b class="price">$225.00</b></p>
                            <a href="#" class="btn-link">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Main Slide --}}
           
            <!--Latest Products-->
            <div class="wrap-show-advance-info-box style-1">
                <h3 class="title-box ">All Products</h3>
                <div class="wrap-top-banner">
                    <a href="#" class="link-banner banner-effect-2">
                        <figure><img src="{{ asset('yt/assets/images/digital-electronic-banner.jpg') }}" width="1500"
                                height="240" alt=""></figure>
                    </a>
                </div>
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
            </div>

        </div>
    </main>

    <footer id="footer">
        <div class="wrap-footer-content footer-style-1">
            <div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Free Shipping</h4>
								<p class="fc-desc">Free On Oder Over $99</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Guarantee</h4>
								<p class="fc-desc">30 Days Money Back</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Safe Payment</h4>
								<p class="fc-desc">Safe your online payment</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Online Suport</h4>
								<p class="fc-desc">We Have Support 24/7</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
            <div class="main-footer-content" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Contact Details</h3>
                                <div class="item-content">
                                    <div class="wrap-contact-detail">
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <p class="contact-txt">Darmo Trade Center</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <p class="contact-txt">(+123) 456 789 - (+123) 666 888</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <p class="contact-txt">Darmo@gmail.com</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                            <div class="wrap-footer-item">
                                <h3 class="item-header">Hot Line</h3>
                                <div class="item-content">
                                    <div class="wrap-hotline-footer">
                                        <span class="desc">Call Us toll Free</span>
                                        <b class="phone-number">(+123) 456 789 - (+123) 666 888</b>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                            <div class="row">
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">Location</h3>
                                    <div class="item-content">
                                        <div class="wrap-vertical-nav">
                                           *tembak api*
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
@section('script')
@endsection
