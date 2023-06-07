@extends('layouts.admin')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Riwayat Transaksi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Riwayat Transaksi</li>
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
                                    <h5 class="card-title">Riwayat Transaksi</h5>
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Pembeli</th>
                                                <th scope="col">Tanggal Transaksi</th>
                                                <th scope="col">Detail Pesanan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- {{ dd($order) }} --}}
                                            @foreach ($order as $od)
                                                
                                            <tr>
                                                <th scope="row"><a href="#"><img
                                                            src="{{ asset('uploads/no-profile.png') }}"
                                                            alt=""></a></th>
                                                <td>{{ $od->uName }}</td>
                                                <td>{{ $od->order_date }}</td>
                                                <td>
                                                    <form action="/detail-order/{{ $od->uId }}">
                                                        <button type="submit" class="btn btn-primary"
                                                            style="min-width: 80px;">
                                                            {{ __('View') }}
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
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