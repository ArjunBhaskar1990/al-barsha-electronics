@extends('components.layout')
@section('content')
    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    @include('components.nav')
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->


    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie"
        style="background-image: url('/storage/uploads/common/{{ $servicebg->image }}')">
        <!-- Page Header Box Start -->
        <div class="page-header-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Page Header Content Start -->
                        <div class="page-header-content">
                            <h1 class="wow fadeInUp">Our<br><span>Services</span></h1>

                        </div>
                        <!-- Page Header Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header Box End -->
    </div>
    <!-- Page Header End -->


    <div class="scrolling-ticker work-ticker mt-4">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <!-- Scrolling Ticker Box Start -->
                    <div class="scrolling-ticker-box">
                        <!-- Scrolling Ticker Content Start -->
                        <div class="scrolling-content">

                            @foreach ($ourservice_details as $item)
                                <span>
                                    <img src="/storage/assets/images/asterisk-icon.svg"
                                        alt="">{{ $item->service_name }}
                                </span>
                            @endforeach

                        </div>

                    </div>
                    <!-- Scrolling Ticker Box End -->
                </div>


            </div>
        </div>
    </div>
    <section>
        <div class="container mt-5 py-5">
            <div class="row g-4">

                @foreach ($ourservice_details as $item)
                    @php

                    $link = str_replace(" ","-", strtoLower($item->service_name))

                    @endphp
                    <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">

                            <a href="{{ route('page.servicesdetails', [$link, $item->id]) }}">
                                <img src="{{ asset('/storage/uploads/services/' . $item->image) }}"
                                    alt="{{ $item->name }}">
                                <h3 class="card-title">{{ $item->service_name }}</h3>
                            </a>

                            <div class="px-5">
                                <p class="d-flex justify-content-center">
                                    {{ $item->desc }}
                                </p>
                            </div>

                            <div class="d-grid ">

                                <button class="btn btn-primary">
                                    <a href="https://wa.me/{{ $company->phone1 }}" alt=""
                                        class="w-100 text-white  ">
                                        <img style="width:25px; height:25px;" src="/storage/uploads/whatsapp.gif" />

                                        Whatsapp
                                    </a>
                                </button>




                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    @include('components.footer')
@endsection
