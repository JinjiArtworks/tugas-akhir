@extends('layouts.admin')

@section('content')

    <body>
        <main id="main" class="main">
            <div class="pagetitle">
                <h1>Tambah Produk</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Produk</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            {{-- {{ dd($product) }} --}}
            <form method="POST" action="/storeproduct" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                        Image</label>
                    <div class="col-md-8 col-lg-9">
                        <img src="{{ asset('uploads/no-profile.png') }}" width="150px" height="150px" alt="product_image">
                        <div class="pt-2">
                            <input id="gambar" type="file" name="gambar">
                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i
                                    class="bi bi-trash"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama Produk: </label>
                    <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="name" value="">
                        {{-- {{ $product->name }} --}}
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="categories" class="col-md-4 col-lg-3 col-form-label">Kategori : </label>
                    <div class="col-md-8 col-lg-9">

                        <select class="form-select" aria-label="Default select example" name="categories_id">
                            @foreach ($cat as $c)
                                <option value="{{ $c->id }}">
                                    {{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>


                </div>
                <div class="row mb-3">
                    <label for="description" class="col-md-4 col-lg-3 col-form-label">Deskripsi : </label>
                    <div class="col-md-8 col-lg-9">
                        <textarea name="description" class="form-control" id="description" style="height: 100px"></textarea>
                        {{-- {{ $product->description }} --}}
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="price" class="col-md-4 col-lg-3 col-form-label">Harga : </label>
                    <div class="col-md-8 col-lg-9">
                        <input name="price" type="text" class="form-control" id="price"
                            value="">
                            {{-- "{{ $product->price }}" --}}
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stock" class="col-md-4 col-lg-3 col-form-label">Stok : </label>
                    <div class="col-md-8 col-lg-9">
                        <input name="stock" type="text" class="form-control" id="stock"
                            value="">
                            {{-- {{ $product->stock }} --}}
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form><!-- End Profile Edit Form -->
        </main>
    </body>
@endsection
