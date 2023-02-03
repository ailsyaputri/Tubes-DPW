@extends('layouts.frontend.master')

@section('title')
    Events
@endsection

@section('content')
    <main>
        <div class="container">
            <!-- start section list product -->
            <section class="product">
                <div class="row justify-content-center" id="list-product">
                    @forelse ($data as $item)
                        <div class="col-md-3 col-10">
                            <div class="card p-3 shadow-nih rounded-20">
                                <img class="rounded-20 mb-3" src="{{ asset('img/' . $item->image) }}" alt="">
                                <div class="topic">
                                    <h3>
                                        {{ $item->title }}
                                    </h3>
                                    <div class="d-flex justify-content-between">
                                        <div class="harga">
                                            <small>Price</small>
                                            <p>Rp. {{ number_format($item->harga) }}</p>
                                        </div>

                                        <a href="{{ route('detail', $item->id) }}" class="text-info">
                                            <i></i> Detail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </section>
            <!-- end section list product -->
        </div>
    </main>
@endsection
