@extends('layouts.admin')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Produk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Produk</li>
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

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                        <li><a class="dropdown-item" href="/createproduct">+ Tambah Produk</a></li>
                                    </ul>
                                </div>

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Daftar Produk</h5>
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Produk</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Stok</th>
                                                <th scope="col">Action</th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- {{ dd($product) }} --}}
                                            @foreach ($product as $p)
                                                <tr>
                                                    <th scope="row"><a href="#"><img
                                                                src="{{ asset('uploads/' . $p->image) }}"
                                                                alt=""></a>
                                                    </th>
                                                    <td>{{ $p->name }}</td>
                                                    <td>{{ $p->cName }}</td>
                                                    <td>Rp. {{ number_format($p->price) }}</td>
                                                    <td class="fw-bold">{{ $p->stock }}</td>
                                                    <td>
                                                        <form action="{{ route('product.edit', ['id' => $p->id]) }}">
                                                            <button type="submit" class="btn btn-warning"
                                                                style="min-width: 80px;">
                                                                {{ __('Edit') }}
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('product.delete', ['id' => $p->id]) }}">
                                                            <button type="submit"
                                                                class="btn btn-xs btn-danger btn-flat confirm"
                                                                data-toggle="tooltip" title='Delete'><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor" class="bi bi-trash"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                                </svg>
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
