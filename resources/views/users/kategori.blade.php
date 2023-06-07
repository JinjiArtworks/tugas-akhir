@extends('layouts.index')
@section('content')
    <main id="main">
        <div class="container">
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                                data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                            {{-- {{ dd($kategori) }} --}}
                                @foreach ($kategori as $k)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="/kategori/{{ $k->id }}"
                                                title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure>
                                                    <img src="{{ asset('uploads/' . $k->image) }}" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a style = "pointer-events: none" class="product-name"><span
                                                    style="text-align: center"><b>{{ $k->name }}</b></span></a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
