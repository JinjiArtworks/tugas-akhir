@extends('layouts.index')
@section('content')
    <main id="main">
        <div class="container">
            <div class="row">
                {{-- {{ dd($kategori) }} --}}
                <ul class="product-list grid-products equal-container">
                    @foreach ($kategori as $k)
                        <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="/products/{{ $k->pId }}"
                                        title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure>
                                            <img src="{{ asset('uploads/' . $k->pImage) }}" width="800" height="800"
                                                alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="wrap-btn">
                                        <a href="/products/{{ $k->pId }}" class="function-link">Quick View</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="/products/{{ $k->id }}"
                                        class="product-name"><span>{{ $k->pName }}</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp.
                                            {{ number_format($k->pPrice) }}</span></div>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>

            </div>
        </div>
    </main>
@endsection
