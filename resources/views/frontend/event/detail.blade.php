@extends('layouts.frontend.master')

@section('title')
    Detail Event : {{ $data->title }}
@endsection

@section('content')
    <!-- start main -->
    <main>
        <div class="container">
            <!-- start section list event -->
            <section class="detail">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card shadow-nih rounded-20">
                            <img class="rounded-20" src="{{ asset('img/' . $data->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card p-4 shadow-nih rounded-20">
                            <h3>
                                {{ $data->title }}
                            </h3>
                            <div class="d-flex justify-content-between">
                                <h4>Rp. {{ number_format($data->harga) }}</h4>
                                <div class="rating">
                                    <div class="d-flex">
                                        <div class="star me-1 text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p>4.5</p>
                                    </div>
                                </div>
                            </div>
                            <p>
                                {!! $data->desc !!}
                            </p>
                            {{-- <h4 class="mb-3">Question and Answers</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Accordion Item #1
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These
                                            classes control the overall
                                            appearance, as well as the showing and hiding via CSS transitions. You can
                                            modify any of this with
                                            custom CSS or overriding our default variables. It's also worth noting that
                                            just about any HTML can go
                                            within the <code>.accordion-body</code>, though the transition does limit
                                            overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by
                                            default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These
                                            classes control the overall
                                            appearance, as well as the showing and hiding via CSS transitions. You can
                                            modify any of this with
                                            custom CSS or overriding our default variables. It's also worth noting that
                                            just about any HTML can go
                                            within the <code>.accordion-body</code>, though the transition does limit
                                            overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by
                                            default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These
                                            classes control the overall
                                            appearance, as well as the showing and hiding via CSS transitions. You can
                                            modify any of this with
                                            custom CSS or overriding our default variables. It's also worth noting that
                                            just about any HTML can go
                                            within the <code>.accordion-body</code>, though the transition does limit
                                            overflow.
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3 shadow-nih rounded-20">
                            <h4 class="mb-3 text-center">Total Quantity</h4>
                            <form action="" method="POST">
                                @csrf
                                <div class="d-flex">
                                    <button class="btn btn-primary me-1"><i class="fas fa-minus"></i></button>
                                    <input type="number" name="jumlah" value="1" readonly
                                        class="form-control rounded-20 text-center">
                                    <button class="btn btn-primary ms-1"><i class="fas fa-plus"></i></button>
                                </div>
                                <p class="text-muted mt-3 text-center">
                                    Enter the number of purchases
                                </p>
                                <button type="submit" class="btn btn-primary btn-cart w-100"><i
                                        class="fas fa-shopping-cart me-1"></i>Buy
                                    Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <section class="review">
                <div class="text-center mt-5">
                    <div class="title">
                        <p class="text-success">Review Costumer</p>
                        <h2>Best Review</h2>
                    </div>
                </div>
                <div class="row" id="testimoni">
                    <div class="col-md-4">
                        <div class="card p-3 rounded-20 shadow-sm">
                            <div class="mb-2 border-opacity-50 rounded-15">
                                <div class="d-flex">
                                    <img src="https://images.tokopedia.net/img/cache/215-square/shops-1/2018/8/2/37620200/37620200_96f6d79e-f7ba-43a7-af5f-4ac5f421010c.jpeg"
                                        class="rounded-20 shadow-sm" width="50" height="50" alt="">
                                    <div class="penjual">
                                        <h4>Jhon Lord</h4>
                                        <div class="d-flex">
                                            <div class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0 mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card p-3 rounded-20 shadow-sm">
                            <div class="mb-2 border-opacity-50 rounded-15">
                                <div class="d-flex">
                                    <img src="https://images.tokopedia.net/img/cache/215-square/shops-1/2018/8/2/37620200/37620200_96f6d79e-f7ba-43a7-af5f-4ac5f421010c.jpeg"
                                        class="rounded-20 shadow-sm" width="50" height="50" alt="">
                                    <div class="penjual">
                                        <h4>Jhon Lord</h4>
                                        <div class="d-flex">
                                            <div class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0 mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card p-3 rounded-20 shadow-sm">
                            <div class="mb-2 border-opacity-50 rounded-15">
                                <div class="d-flex">
                                    <img src="https://images.tokopedia.net/img/cache/215-square/shops-1/2018/8/2/37620200/37620200_96f6d79e-f7ba-43a7-af5f-4ac5f421010c.jpeg"
                                        class="rounded-20 shadow-sm" width="50" height="50" alt="">
                                    <div class="penjual">
                                        <h4>Jhon Lord</h4>
                                        <div class="d-flex">
                                            <div class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0 mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section list event -->
        </div>
    </main>
    <!-- end main -->
@endsection
