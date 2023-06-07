@extends('layouts.index')
@section('content')
    <main id="main">
        <div class="container">
            <div class="py-2">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <div class="col-md-8">
                            <h4 class="title" style="text-align: center">Status Barang</h4>
                            <div class="card">
                                <div class="card-block ">
                                    <div class="row">
                                        {{-- {{ dd($product) }} --}}
                                        {{-- {{ dd($product) }} --}}
                                        @if ($product == null)
                                            <p>No Data</p>
                                        @else
                                            @foreach ($product as $p)
                                                <div class="col-sm-4">
                                                    <img src="{{ asset('uploads/' . $p->image) }}" width="150px"
                                                        height="200px" alt="">
                                                </div>
                                                <div class="col-md-8" style="padding: 0">
                                                    <h4>{{ $p->name }}</h4>
                                                    <p>Pesanan Nomor :
                                                        <b>#{{ $p->on }}</b>
                                                    </p>
                                                    <p>Tanggal :
                                                        <b>{{ $p->od }}</b>
                                                    </p>
                                                    <span>Status : </span> <a class="btn btn-xs btn-warning"
                                                        style=" pointer-events: none;"> {{ $p->os }}</a>
                                                </div>
                                            @endforeach
                                        @endif


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
