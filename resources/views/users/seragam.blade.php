@extends('layouts.index')
@section('content')
    <main id="main" class="main-site left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12 main-content-area">
                    <ul class="product-list grid-products equal-container">
                        @foreach ($seragams as $s)
                            <li class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="/">
                                            <figure>
                                                <img src="{{ asset('uploads/' . $s->image) }}" width="800" height="400"
                                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h5> <b>{{ $s->name }}</b></h5> 
                                       
                                        <p>Toko : {{ $s->st}}</p>
                                        <p>Nomor Handphone : {{ $s->sp}}</p>
                                        <p>Alamat :  {{ $s->sa}}</p>

                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
