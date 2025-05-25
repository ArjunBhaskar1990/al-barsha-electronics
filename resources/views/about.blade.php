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
    <div class="page-header bg-section">
        <!-- Page Header Box Start -->
        <div class="page-header-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Page Header Content Start -->
                        <div class="page-header-content">
                            <h1 class="wow fadeInUp">About <span>us</span></h1>

                        </div>
                        <!-- Page Header Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header Box End -->
    </div>
    <!-- Page Header End -->


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


    <!-- Our Approach Start -->
    <div class="our-approach bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our approach</h3>

                        <h2 class="wow fadeInUp" data-wow-delay="0.25s">
                            {{ $ourapproach->approach_title1 }}
                            <span> {{ $ourapproach->approach_title2 }}</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5">
                    <!-- Section Btn Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.5s">
                        <a href="{{ route('page.contact') }}" class="btn-default">contact us</a>
                    </div>
                    <!-- Section Btn End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Approach Content Start -->
                    <div class="our-approach-content">
                        <p class="wow fadeInUp"> {{ $ourapproach->description }}</p>

                        <!-- Mission Vision Item Start -->
                        <div class="mission-vision-list">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <!-- Mission Vision Item Start -->
                                    <div class="mission-vision-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="icon-box">
                                            <img src="/storage/assets/images/icon-our-mission.svg" alt="">
                                        </div>

                                        <div class="mission-vision-content">
                                            <h3> {{ $ourapproach->speciality1 }}</h3>
                                            <p>{{ $ourapproach->speciality1desc }}</p>
                                        </div>
                                    </div>
                                    <!-- Mission Vision Item End -->
                                </div>

                                <div class="col-md-6 col-12">
                                    <!-- Mission Vision Item Start -->
                                    <div class="mission-vision-item wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="icon-box">
                                            <img src="/storage/assets/images/icon-our-vision.svg" alt="">
                                        </div>

                                        <div class="mission-vision-content">
                                            <h3> {{ $ourapproach->speciality2 }}</h3>
                                            <p>{{ $ourapproach->speciality2desc }}</p>
                                        </div>
                                    </div>
                                    <!-- Mission Vision Item End -->
                                </div>

                                <div class="col-lg-12 col-12">
                                    <!-- Our Value Item Start -->
                                    <div class="mission-vision-item our-value-item wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="icon-box">
                                            <img src="/storage/assets/images/icon-our-value.svg" alt="">
                                        </div>

                                        <div class="mission-vision-content">
                                            <h3> {{ $ourapproach->speciality3 }}</h3>
                                            <p>{{ $ourapproach->speciality3desc }}</p>
                                        </div>
                                    </div>
                                    <!-- Our Value Item End -->
                                </div>
                            </div>
                        </div>
                        <!-- Mission Vision Item End -->

                        <!-- Our Approch Content Footer Start -->
                        <div class="our-approach-content-footer wow fadeInUp" data-wow-delay="0.8s">
                            <a href="{{ route('page.contact') }}" class="btn-default">Let's work together to turn your
                                goals into
                                reality. <u>Contact us Today</u> </a>
                        </div>
                        <!-- Our Approch Content Footer End -->
                    </div>
                    <!-- Our Approach Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Our Approach Image Start -->
                    <div class="our-approach-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('/storage/uploads/ourapproach/'.$ourapproach->image) }}" alt="">
                        </figure>
                    </div>
                    <!-- Our Approach Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach End -->



    <!-- Our Partners Start -->
    <div class="our-partners">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our branches</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.25s">{{ $whychooseabout->ourbranch_title1 }}
                            <span>{{ $whychooseabout->ourbranch_title2 }}</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Contact Circle Start -->
                    <div class="contact-circle">
                        <img src="/storage/assets/images/contact-now-circle.svg" alt="">
                    </div>
                    <!-- Contact Circle End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 col-6">
                    <!-- Company Logo Start -->
                    <div class="company-logo wow fadeInUp">
                        <!-- <img src="images/company-logo-1.svg" alt=""> -->
                        <h5>{{ $company->address1 }}</h5>
                    </div>
                    <!-- Company Logo End -->
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <!-- Company Logo Start -->
                    <div class="company-logo wow fadeInUp" data-wow-delay="0.2s">
                        <h5>{{ $company->address2 }}</h5>
                    </div>
                    <!-- Company Logo End -->
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <!-- Company Logo Start -->
                    <div class="company-logo wow fadeInUp" data-wow-delay="0.4s">
                        <h5>{{ $company->address3 }}</h5>
                    </div>
                    <!-- Company Logo End -->
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <!-- Company Logo Start -->
                    <div class="company-logo wow fadeInUp" data-wow-delay="0.6s">
                        <h5>{{ $company->address4 }}</h5>
                    </div>
                    <!-- Company Logo End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Partners End -->

    <!-- Company Experience Section Start -->
    <div class="company-experience bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- Company Experience Content Start -->
                    <div class="company-experience-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">our expertise</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s">
                                {{ $expertise->title1 }}
                                <span>{{ $expertise->title2 }}</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.5s">{{ $expertise->desc }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Section Btn Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.75s">
                            <a href="{{ route('page.contact') }}" class="btn-default">contact now</a>
                        </div>
                        <!-- Section Btn End -->
                    </div>
                    <!-- Company Experience Content End -->
                </div>

                <div class="col-lg-7">
                    <!-- Company Experience List Start -->
                    <div class="company-experience-list">
                        <!-- Company Experience Item Start -->
                        <div class="company-experience-item">
                            <h2><span class="counter">{{ $expertise->percent_1 }}</span>%</h2>
                            <h3>{{ $expertise->percent_title_1 }}</h3>
                            <p>{{ $expertise->percent_desc_1 }}</p>
                        </div>
                        <!-- Company Experience Item End -->

                        <!-- Company Experience Item Start -->
                        <div class="company-experience-item">
                            <h2><span class="counter">{{ $expertise->percent_2 }}</span>+</h2>
                            <h3>{{ $expertise->percent_title_2 }}</h3>
                            <p>{{ $expertise->percent_desc_2 }}</p>
                        </div>
                        <!-- Company Experience Item End -->

                        <!-- Company Experience Item Start -->
                        <div class="company-experience-item">
                            <h2><span class="counter">{{ $expertise->percent_3 }}</span>%</h2>
                            <h3>{{ $expertise->percent_title_3 }}</h3>
                            <p>{{ $expertise->percent_desc_3 }}</p>
                        </div>
                        <!-- Company Experience Item End -->

                        <!-- Company Experience Item Start -->
                        <div class="company-experience-item">
                            <h2><span class="counter">{{ $expertise->percent_4 }}</span>+</h2>
                            <h3>{{ $expertise->percent_title_4 }}</h3>
                            <p>{{ $expertise->percent_desc_4 }}</p>
                        </div>
                        <!-- Company Experience Item End -->
                    </div>
                    <!-- Company Experience List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Company Experience Section End -->

    <!-- Why Choose Us Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-us-content">
                        <!-- Section Title Start -->


                        <div class="section-title">
                            <h3 class="wow fadeInUp">why choose us ?</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s">{{ $whychooseabout->title1 }}
                                <span>{{ $whychooseabout->title2 }}</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.5s">
                                {{ $whychooseabout->desc }}
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <div class="why-choose-skillbar">
                            <!-- Skills Progress Bar Start -->
                            <div class="skills-progress-bar">
                                <!-- Skill Item Start -->
                                <div class="skillbar" data-percent="90%">
                                    <div class="skill-data">
                                        <div class="skill-title">{{ $whychooseabout->percentage_title1 }}</div>
                                        <div class="skill-no">{{ $whychooseabout->percentage_title1_count }}%</div>
                                    </div>
                                    <div class="skill-progress">
                                        <div class="count-bar"></div>
                                    </div>
                                </div>
                                <!-- Skill Item End -->
                            </div>
                            <!-- Skills Progress Bar End -->

                            <!-- Skills Progress Bar Start -->
                            <div class="skills-progress-bar">
                                <!-- Skill Item Start -->
                                <div class="skillbar" data-percent="65%">
                                    <div class="skill-data">
                                        <div class="skill-title">{{ $whychooseabout->percentage_title2 }}</div>
                                        <div class="skill-no">{{ $whychooseabout->percentage_title2_count }}%</div>
                                    </div>
                                    <div class="skill-progress">
                                        <div class="count-bar"></div>
                                    </div>
                                </div>
                                <!-- Skill Item End -->
                            </div>
                            <!-- Skills Progress Bar End -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Why Choose Us Image Start -->
                    <div class="why-choose-us-image">
                        <div class="why-choose-us-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('/storage/uploads/whychoose/' . $whychooseabout->image1) }}"
                                    alt="">
                            </figure>
                        </div>
                        <div class="why-choose-us-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('/storage/uploads/whychoose/' . $whychooseabout->image2) }}"
                                    alt="">
                            </figure>
                        </div>

                        <!-- Why Choose Contact Circle Start -->
                        <div class="why-choose-contact-circle">
                            <img src="/storage/assets/images/why-choose-contact-circle.svg" alt="">
                        </div>
                        <!-- Why Choose Contact Circle End -->
                    </div>
                    <!-- Why Choose Us Image End -->
                </div>
            </div>
        </div>
    </div>


    @include('components.footer')
@endsection
