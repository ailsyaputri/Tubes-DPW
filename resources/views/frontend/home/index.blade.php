@extends('layouts.frontend.master')

@section('title')
    Ngonser Yuk!
@endsection

@section('content')
    <!-- header caraousel -->
    <header>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/rsfit19201280gsm/events/2022/11/07/adc07e56-00e1-4343-a552-85eaf2217dcf-1667795647641-282fc76ddd336acdbcb8abbaba86194f.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/rsfit19201280gsm/events/2022/10/06/29079564-2dc1-415f-b006-b23044c5f416-1665038132854-ff126a459a092d5cd22496c8f8f52a3a.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/rsfit19201280gsm/events/2022/08/10/e380e036-dab3-40d3-9b0a-94f581c83ef2-1660126127138-f1b25dc20b893e7468be352492fb5ca4.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </header>
    <!-- start main -->
    <main>
        <div class="container">
            <!-- start section list product -->
            <section class="product">
                <div class="d-flex justify-content-between">
                    <div class="title">
                        <p class="text-success">Find your dream concert!</p>
                        <h2>Popular Event</h2>
                    </div>
                    {{-- <button class="btn btn-warning lihat d-none d-md-block">
                        <i class="fas fa-list me-1"></i> Show More
                    </button> --}}
                </div>
                <div class="row justify-content-center" id="list-product">
                    <div class="row">
                        <div class="col-md-3 col-10">
                            <div class="card p-3 shadow-nih rounded-20">
                                <img class="rounded-20 mb-3"
                                    src="https://i.pinimg.com/originals/46/fc/f5/46fcf53a037713c35b21ddc8d1205c24.jpg"
                                    alt="">
                                <h3 class="text-center">THE DREAM SHOW 2 : In A DREAM</h3>
                                <div class="tanggal">
                                    <small>Date</small>
                                    <p>4-6 March 2023</p>
                                </div>
                                <div class="card text-bg-success rounded-20 mt-3 text-center">AVAILABLE</div>
                            </div>
                        </div>

                        <div class="col-md-3 col-10">
                            <div class="card p-3 shadow-nih rounded-20">
                                <img class="rounded-20 mb-3"
                                    src="https://i.pinimg.com/originals/c3/e2/cd/c3e2cd20e42208f711fb1a4e60ce66d4.jpg"
                                    alt="">
                                <h3 class="text-center">2023 TREASURE TOUR [HELLO] IN JAKARTA</h3>
                                <div class="tanggal">
                                    <small>Date</small>
                                    <p>18-19 March 2023</p>
                                </div>
                                <div class="card text-bg-success rounded-20 mt-3 text-center">AVAILABLE</div>
                            </div>
                        </div>

                        <div class="col-md-3 col-10">
                            <div class="card p-3 shadow-nih rounded-20">
                                <img class="rounded-20 mb-3"
                                    src="https://i.pinimg.com/564x/17/27/1f/17271fb6e1d94ebc9c3533d6e3ce106e.jpg"
                                    alt="">
                                <h3 class="text-center">Westlife The Wild Dreams Tour 2023</h3>
                                <div class="tanggal">
                                    <small>Date</small>
                                    <p>9 February 2023</p>
                                </div>
                                <div class="card text-bg-danger rounded-20 mt-3 text-center">SOLD OUT</div>
                            </div>
                        </div>

                        <div class="col-md-3 col-10">
                            <div class="card p-3 shadow-nih rounded-20">
                                <img class="rounded-20 mb-3"
                                    src="https://i.pinimg.com/originals/8f/a8/c2/8fa8c2f93b1fedb699d917b89c2937d8.jpg"
                                    alt="">
                                <h3 class="text-center">WIN 1st Solo Fan Meeting in Jakarta</h3>
                                <div class="tanggal">
                                    <small>Date</small>
                                    <p>11 February 2023</p>
                                </div>
                                <div class="card text-bg-danger rounded-20 mt-3 text-center">SOLD OUT</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- @forelse ($data as $item)
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
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse --}}
        </div>
        </section>
        <!-- end section list product -->
        </div>
    </main>
    <!-- end main -->
@endsection
