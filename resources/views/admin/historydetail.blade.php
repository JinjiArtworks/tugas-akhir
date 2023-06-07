@extends('layouts.admin')

@section('content')
    @php
        $total = 0;
        if ($order != null) {
            foreach ($order as $key => $value) {
                $price = (int) $value->pPrice;
                $quan = (int) $value->order_qty;
                $total += $price * $quan;
            }
        }
        
    @endphp
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Detail Transaksi </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item">Riwayat Transaksi</a></li>
                    <li class="breadcrumb-item active">Detail Transaksi</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Detail Transaksi</h5>
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Produk</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- {{ dd($order) }} --}}
                                            @foreach ($order as $od)
                                                <tr>
                                                    <th scope="row"><a href="#"><img
                                                                src="{{ asset('uploads/' . $od->pImage) }}"
                                                                alt=""></a></th>
                                                    <td>{{ $od->pName }}</td>
                                                    <td>{{ $od->order_qty }}</td>
                                                    <td>Rp. {{ number_format($od->pPrice) }}</td>
                                                    <td>Rp. {{ number_format($od->order_qty * $od->pPrice) }}</td>
                                                </tr>
                                            @endforeach
                                            <tr></tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b>Rp. {{number_format( $total) }}</b></td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- End Top Selling -->
                    </div>
                </div><!-- End Left side columns -->
            </div>
        </section>

    </main><!-- End #main -->
@endsection
