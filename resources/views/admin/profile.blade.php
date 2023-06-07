@extends('layouts.admin')

@section('content')

    <body>
        <main id="main" class="main">
            <section class="section profile">
                <div class="row">
                    <div class="col-xl-4">

                        <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                {{-- {{ dd($store) }} --}}
                                @foreach ($store as $s)
                                    <img src="{{ asset('uploads/' . $s->image) }}" alt="Profile" class="rounded-circle">
                                    <h2>{{ $s->name }}</h2>
                                    <div class="social-links mt-2">
                                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                    </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-8">

                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <ul class="nav nav-tabs nav-tabs-bordered">

                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#profile-overview">Overview</button>
                                    </li>

                                    <li class="nav-item">
                                        <form action="{{ 'edit-profile/'.$s->id }}">
                                        <button type = "submit" class="nav-link" data-bs-toggle="tab">Edit
                                            Profile</button>
                                        </form>
                                    </li>

                                </ul>
                                <div class="tab-content pt-2">

                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <h5 class="card-title">Profile Details</h5>


                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Nama Toko : </div>
                                            <div class="col-lg-9 col-md-8">{{ $s->name }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Alamat: </div>
                                            <div class="col-lg-9 col-md-8">{{ $s->address }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Nomor Handphone : </div>
                                            <div class="col-lg-9 col-md-8">{{ $s->phone }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Tentang Toko : </div>
                                            <div class="col-lg-9 col-md-8">{{ $s->description }}</div>
                                        </div>
                                    </div>

                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->

    </body>
@endsection
