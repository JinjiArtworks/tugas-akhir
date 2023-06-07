@extends('layouts.admin')
@section('content')
    @php
        $total = 0;
        if ($data != null) {
            foreach ($data as $key => $value) {
                $price = (int) $value->price;
                $quan = (int) $value->order_qty;
                $total += $price * $quan;
            }
        }
        
    @endphp
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Laporan Penjualan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Laporan Penjualan</li>
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

                                {{-- <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>njualan
                                </div> --}}

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Laporan Penjualan</h5>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Nomor Order</th>
                                                <th scope="col">Pembeli</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Jumlah</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- {{ dd($data) }} --}}
                                            @foreach ($data as $d)
                                                <tr>
                                                    <th scope="row"><a href="#"><img
                                                                src="{{ asset('uploads/' . $d->image) }}"
                                                                alt=""></a>
                                                    </th>
                                                    <td>{{ $d->pName }} </td>
                                                    <td><b>#{{ $d->order_number }}</b></td>
                                                    <td>{{ $d->name }}</td>
                                                    <td>{{ $d->order_date }}</td>
                                                    <td>Rp. {{ number_format($d->price) }}</td>
                                                    <td class="fw-bold">{{ $d->order_qty }}</td>
                                                    <td>Rp. {{ number_format($d->order_qty * $d->price) }}</td>
                                                    <td>
                                                        @if ($d->status == 'On Progress')
                                                            <span class="badge bg-warning">{{ $d->status }}</span>
                                                    <td>
                                                        <form action="/mg-medicine-edit/">
                                                            <button type="submit" class="btn btn-warning-outline "
                                                                style="min-width: 80px;">
                                                                {{ __('✅') }}
                                                            </button>
                                                        </form>
                                                    </td>
                                                @else
                                                    <span class="badge bg-success">{{ $d->status }}</span>
                                                    </td>
                                            @endif
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><b>Rp. {{ number_format($total) }}</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
