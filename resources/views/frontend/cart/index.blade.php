@extends('layouts.frontend.master')

@section('title')
    Keranjang Anda
@endsection

<link rel="shortcut icon" href="{{ asset('assets/images/logo/cart.png') }}" type="image/png">

@section('content')
    <main>
        <section class="cart">
            <div class="container">
                @foreach ($data as $key => $item)
                    <div class="card p-3 shadow-sm rounded mt-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <img class="me-3"
                                        src="{{ asset('img/' . $item->product->image) }}"
                                        width="120" height="120" alt="">
                                    <div class="title">
                                        <h3>{{ $item->product->title }}</h3>
                                        <p>...</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="d-flex action">
                                    <button class="btn btn-primary me-2"><i class="fas fa-minus"></i></button>
                                    <input type="number" value="{{ $item->jumlah }}" class="form-control text-center" readonly
                                        disabled>
                                    <button class="btn btn-primary ms-2"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="d-flex justify-content-between">
                                    <h3 class="harga text-success">Rp. {{ number_format($item->product->harga) }}</h3>
                                    <button class="btn btn-danger me-3 mt-3 hapus"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
