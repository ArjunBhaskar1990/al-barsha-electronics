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



    <!-- Hero Section Start -->
    <div class="hero bg-section parallaxie">
        <div class="hero-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-9">
                        <!-- Hero Content Start -->
                        <div class="hero-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">{{ $homebanner->heading }}</h3>
                                <h1 class="wow fadeInUp" data-wow-delay="0.2s">
                                    @php
                                        $title = explode(' ', $homebanner->title);
                                        $titlerest = preg_replace('/\W\w+\s*(\W*)$/', '$1', $homebanner->title);
                                    @endphp
                                    {{ $titlerest }}
                                    <span>{{ end($title) }}</span>
                                </h1>
                            </div>
                            <!-- Section Title End -->

                            <!-- Hero Button Start -->
                            <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                <a href="{{ route('page.contact') }}" class="btn-default">get in touch</a>
                                <a href="{{ route('page.services') }}" class="btn-default btn-highlighted">explore more</a>
                            </div>
                            <!-- Hero Button End -->
                        </div>
                        <!-- Hero Content End -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="export-coaching-box wow fadeInUp" data-wow-delay="0.6s">
                            <!-- Export Coaching Step Start -->
                            <div class="export-coaching-step">
                                <div class="icon-box">
                                    <img src="/storage/assets/images/icon-export-coaching-1.svg" alt="">
                                </div>
                                <div class="export-coaching-step-content">
                                    <p>{{ $homebanner->feature1 }}</p>
                                </div>
                            </div>
                            <!-- Export Coaching Step End -->

                            <!-- Export Coaching Step Start -->
                            <div class="export-coaching-step">
                                <div class="icon-box">
                                    <img src="/storage/assets/images/icon-export-coaching-2.svg" alt="">
                                </div>
                                <div class="export-coaching-step-content">
                                    <p>{{ $homebanner->feature2 }}</p>
                                </div>
                            </div>
                            <!-- Export Coaching Step End -->

                            <!-- Export Coaching Step Start -->
                            <div class="export-coaching-step">
                                <div class="icon-box">
                                    <img src="/storage/assets/images/icon-export-coaching-3.svg" alt="">
                                </div>
                                <div class="export-coaching-step-content">
                                    <p>{{ $homebanner->feature3 }}</p>
                                </div>
                            </div>
                            <!-- Export Coaching Step End -->

                            <!-- Export Coaching Step Start -->
                            <div class="export-coaching-step">
                                <div class="icon-box">
                                    <img src="/storage/assets/images/icon-export-coaching-4.svg" alt="">
                                </div>
                                <div class="export-coaching-step-content">
                                    <p>{{ $homebanner->feature4 }} </p>
                                </div>
                            </div>
                            <!-- Export Coaching Step End -->

                            <!-- Export Coaching Step Start -->
                            <div class="export-coaching-step">
                                <div class="icon-box">
                                    <img src="/storage/assets/images/icon-export-coaching-5.svg" alt="">
                                </div>
                                <div class="export-coaching-step-content">
                                    <p>{{ $homebanner->feature5 }}</p>
                                </div>
                            </div>
                            <!-- Export Coaching Step End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
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

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="about-us-images">
                        <!-- About Us Img Start -->
                        <div class="about-us-img-1">
                            <figure class="image-anime">
                                <img src="{{ asset('/storage/uploads/about/' . $about->image1) }}" alt="">
                            </figure>
                        </div>
                        <!-- About Us Img End -->

                        <!-- About Us Img Start -->
                        <div class="about-us-img-2">
                            <figure class="image-anime">
                                <img src="{{ asset('/storage/uploads/about/' . $about->image2) }}" alt="">
                            </figure>
                        </div>
                        <!-- About Us Img End -->

                        <!-- About Experience Box Start -->
                        <div class="about-experience-box">
                            <div class="icon-box">
                                <img src="/storage/assets/images/icon-company-experience.svg" alt="">
                            </div>

                            <div class="about-experience-content">
                                <h3><span class="counter">{{ $about->experience }}</span>+ years of experience</h3>
                            </div>
                        </div>
                        <!-- About Experience Box End -->

                        <!-- Company Review Start -->
                        <div class="company-review">
                            <h3>{{ $about->review_count }}+ five star reviews</h3>
                        </div>
                        <!-- Company Review End -->
                    </div>
                    <!-- About Us Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">{{ $about->title1 }}
                                <span>{{ $about->title2 }}.</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">{{ $about->desc }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us List Start -->
                        <div class="about-us-list wow fadeInUp" data-wow-delay="0.6s">
                            <ul>
                                <li>{{ $about->feature1 }}</li>
                                <li>{{ $about->feature2 }}</li>
                            </ul>
                        </div>
                        <!-- About Us List End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body">
                            <!-- About Company Client Start -->
                            <div class="about-comapny-client wow fadeInUp" data-wow-delay="0.8s">
                                <!-- Company Client Images Start -->
                                <div class="company-client-images">
                                    <div class="client-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('/storage/uploads/about/' . $about->client_image1) }}"
                                                alt="">
                                        </figure>
                                    </div>
                                    <div class="client-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('/storage/uploads/about/' . $about->client_image2) }}"
                                                alt="">
                                        </figure>
                                    </div>
                                    <div class="client-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('/storage/uploads/about/' . $about->client_image3) }}"
                                                alt="">
                                        </figure>
                                    </div>
                                    <div class="client-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('/storage/uploads/about/' . $about->client_image4) }}"
                                                alt="">
                                        </figure>
                                    </div>
                                    <div class="client-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('/storage/uploads/about/' . $about->client_image5) }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Company Client Images End -->

                                <!-- Company Client Counter Start -->
                                <div class="company-client-counter">
                                    <p>Join our <span>{{ $about->client_count }}</span>+ satisfied client</p>
                                </div>
                                <!-- Company Client Counter End -->
                            </div>
                            <!-- About Company Client End -->

                            <!-- About Company Result Start -->
                            <div class="about-company-result wow fadeInUp" data-wow-delay="0.8s">
                                <div class="icon-box">
                                    <img src="/storage/assets/images/icon-company-result.svg" alt="">
                                </div>

                                <div class="company-result-content">
                                    <h3> {{ $about->bulb_title1 }}</h3>
                                    <p>{{ $about->bulb_title2 }}</p>
                                </div>
                            </div>
                            <!-- About Company Result End -->
                        </div>
                        <!-- About Us Body End -->

                        <!-- About Us Footet Start -->
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="1s">
                            <a href="{{ route('page.about') }}" class="btn-default">About Us</a>
                        </div>
                        <!-- About Us Footet End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Service Start -->
    <div class="our-service bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- Service Content Start -->
                    <div class="service-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Our services</h3>

                            <h2 class="wow fadeInUp" data-wow-delay="0.25s">{{ $ourservice->title1 }}
                                <span>{{ $ourservice->title2 }}</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.5s">{{ $ourservice->desc }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Service Btn Start -->
                        <div class="service-btn wow fadeInUp" data-wow-delay="0.75s">
                            <a href="{{ route('page.services') }}" class="btn-default">view Business services</a>
                        </div>
                        <!-- Service Btn End -->
                    </div>
                    <!-- Service Content End -->
                </div>

                <div class="col-lg-7">
                    <!-- Service Item List Start -->
                    <div class="service-item-list">

                        @foreach ($ourservice_details as $item)
                            <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="/storage/assets/images/icon-services-1.svg" alt="">
                                </div>

                                <div class="service-item-content">
                                    <!-- <h3>Audit support and compliance</h3> -->
                                    <h3>{{ $item->service_name }}</h3>
                                    <p>{{ $item->desc }}
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="service-footer wow fadeInUp" data-wow-delay="0.25s">
                        <p><span>free</span> Let's make something great work together. <a
                                href="{{ route('page.contact') }}">get free
                                quote</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Our Service End -->

    <!-- Our Potential Start -->
    <div class="our-potential">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Our Potential Content Start -->
                    <div class="our-potential-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Why Choose Us</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s">{{ $whychoose->title1 }}
                                <span> {{ $whychoose->title2 }} </span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.5s">{{ $whychoose->desc }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Our Potential Counter Start -->
                        <div class="our-potential-counter">
                            <!-- Potential Counter Item Start -->
                            <div class="potential-counter-item">
                                <div class="counter-circle">
                                    <h2><span class="counter">{{ $whychoose->sat_customer }}</span>%</h2>
                                </div>
                                <div class="potential-counter-content">
                                    <h3>satisfied customers</h3>
                                </div>
                            </div>
                            <!-- Potential Counter Item End -->

                            <!-- Potential Counter Item Start -->
                            <div class="potential-counter-item">
                                <div class="counter-circle">
                                    <h2><span class="counter">{{ $whychoose->pro_completed }}</span>K</h2>
                                </div>
                                <div class="potential-counter-content">
                                    <h3>projects completed</h3>
                                </div>
                            </div>
                            <!-- Potential Counter Item End -->
                        </div>
                        <!-- Our Potential Counter End -->

                        <!-- Our Potential Body Start -->
                        <div class="our-potential-body">
                            <!-- Potential Body Content Start -->
                            <div class="potential-body-content">
                                <h3 class="wow fadeInUp">{{ $whychoose->title3 }}</h3>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $whychoose->desc2 }}</p>
                            </div>
                            <!-- Potential Body Content End -->

                            <!-- Potential Body List Start -->
                            <div class="potential-body-list wow fadeInUp" data-wow-delay="0.4s">
                                <ul>
                                    <li>{{ $whychoose->feature_title1 }}</li>
                                    <li>{{ $whychoose->feature_title2 }}</li>
                                </ul>
                            </div>
                            <!-- Potential Body List End -->
                        </div>
                        <!-- Our Potential Body End -->
                    </div>
                    <!-- Our Potential Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Our Potential Image Start -->
                    <div class="our-potential-img">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('/storage/uploads/whychoose/' . $whychoose->image) }}" alt="image" />
                        </figure>
                    </div>
                    <!-- Our Potential Image End -->
                </div>
            </div>
        </div>
    </div>



    <div class="intro-video bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <!-- Section Title Start -->
                    <div class="section-title wow fadeInUp">
                        <h2>{{ $whychoose->youtube_title1 }} <span>{{ $whychoose->youtube_title2 }}</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6 col-md-4">
                    <!-- Intro Video Box Start -->
                    <div class="intro-video-box">
                        <!-- Video Play Button Start -->
                        <div class="video-play-button">
                            <a href="{{ url($whychoose->youtube_link) }}" class="popup-video" data-cursor-text="Play">
                                <i class="fa-solid fa-play"></i>
                            </a>
                            <p>watch video</p>
                        </div>
                        <!-- Video Play Button End -->
                    </div>
                    <!-- Intro Video Box End -->
                </div>

                <div class="col-lg-12">
                    <!-- Intro Video List Start -->
                    <div class="intro-video-list wow fadeInUp" data-wow-delay="0.25s">
                        <ul>
                            @foreach ($ourservice_details as $service)
                                <li>{{ $service->service_name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Intro Video List End -->
                </div>
            </div>
        </div>
    </div>


    <div class="our-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Our FAQs Content Start -->
                    <div class="our-faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">FAQ</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s">{{ $whychoose->faq_title1 }}
                                <span>{{ $whychoose->faq_title2 }}</span>
                            </h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQs CTA Box Start -->
                        <div class="faqs-cta-box wow fadeInUp" data-wow-delay="0.75s">
                            <!-- Company Client Images Start -->
                            {{-- <div class="company-client-images">
                                <div class="client-image">
                                    <figure class="image-anime">
                                        <img src="/storage/assets/images/satisfy-client-img-1.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="client-image">
                                    <figure class="image-anime">
                                        <img src="/storage/assets/images/satisfy-client-img-2.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="client-image">
                                    <figure class="image-anime">
                                        <img src="/storage/assets/images/satisfy-client-img-3.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="client-image">
                                    <figure class="image-anime">
                                        <img src="/storage/assets/images/satisfy-client-img-4.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="client-image">
                                    <figure class="image-anime">
                                        <img src="/storage/assets/images/satisfy-client-img-5.jpg" alt="">
                                    </figure>
                                </div>
                            </div> --}}
                            <!-- Company Client Images End -->
                            <div class="faqs-cta-content">
                                <h3>Still have any questions?</h3>
                                <p>We're ready to help you to answer any questions.</p>
                                <a href="tel:{{ $company->phone2 }}" class="btn-phone"><i
                                        class="fa-solid fa-phone-volume"></i>{{ $company->phone2 }}</a>
                            </div>
                        </div>
                        <!-- FAQs CTA Box End -->
                    </div>
                    <!-- Our FAQs Content End -->
                </div>

                <div class="col-lg-6">
                    <div class="our-faq-section">
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="faqaccordion">

                            @foreach ($barshafaq as $faq)
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}"
                                            aria-expanded="true" aria-controls="collapse1">
                                            {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                        aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>{{ $faq->answer }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            @endforeach



                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our FAQs Section End -->

    <!-- Our Testimonial Section Start -->
    <div class="our-testimonial bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8">
                    <div class="our-testimonial-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">testimonial</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s">{{ $whychoose->testi_title1 }}
                                <span>{{ $whychoose->testi_title2 }}</span>
                            </h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <div class="col-lg-8">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">

                                @foreach ($testimony as $item)

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-slider-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('/storage/uploads/testimonials/'. $item->image) }}" alt="">
                                            </figure>
                                        </div>

                                        <div class="testimonial-slider-content">
                                            <div class="testimonial-header">
                                                <div class="testimonial-rating-company">
                                                    <img src="/storage/assets/images/icon-testimonial-rating-4.svg"
                                                        alt="">
                                                </div>
                                                <div class="testimonial-quote">
                                                    <img src="/storage/assets/images/testimonial-quote.svg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>{{ $item->review }}</p>
                                            </div>
                                            <div class="author-content">
                                                <h3>{{ $item->name }}</h3>
                                                <p>{{ $item->designation }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                                @endforeach


                            </div>
                            <div class="testimonial-btn">
                                <div class="testimonial-button-prev"></div>
                                <div class="testimonial-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>


            </div>
        </div>
    </div>
 <br />

    @include('components.footer')
@endsection
