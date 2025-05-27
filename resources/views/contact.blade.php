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
    <div class="page-header bg-section parallaxie" style="background-image:url('/storage/uploads/common/{{ $company->contact_breadcrumb }}')">
        <!-- Page Header Box Start -->
        <div class="page-header-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Page Header Content Start -->
                        <div class="page-header-content">
                            <h1 class="wow fadeInUp">Contact <span>us</span></h1>

                        </div>
                        <!-- Page Header Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header Box End -->
    </div>
    <!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7 col-md-9">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">get in touch</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.25s">Let's work together to create <span>the life and
                                business</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Us Form Start -->
                    <div class="contact-us-form">
                        <!-- Contact Us Title Start -->
                        <div class="contact-us-title">
                            <h3 class="wow fadeInUp">send a message</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Unlock your potential with expert guidance!
                                Schedule a free consultation toward personal and business success.</p>
                        </div>
                        <!-- Contact Us Title End -->

                        <!-- Contact Us Form Start -->
                        <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp"
                            data-wow-delay="0.4s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="fname" class="form-control" id="fname"
                                        placeholder="First Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="lname" class="form-control" id="lname"
                                        placeholder="Last Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email Address" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Phone Number" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default">submit message</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Contact Us Form End -->
                    </div>
                    <!-- Contact Us Form End -->
                </div>

                <div class="col-lg-6">
                    <!-- Contact Information Start -->
                    <div class="contact-information">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp">
                            <!-- Contact Info Contact Start -->
                            <div class="contact-info-contant">
                                <h3>call us</h3>
                                <p>Call us today for personalized coaching and transformative growth!</p>
                            </div>
                            <!-- Contact Info Contact End -->

                            <!-- Contact Info Body Start -->
                            <div class="contact-info-body">
                                <div class="icon-box">
                                    <img src="images/icon-phone.svg" alt="">
                                </div>

                                <div class="contact-info-title">
                                    <h3><a href="tel:{{$company->phone1 }}" class="colo">{{ $company->phone1 }}</a></h3>
                                    <h3><a href="tel:{{ $company->phone2 }}" class="colo">{{ $company->phone2 }}</a></h3>
                                </div>
                            </div>
                            <!-- Contact Info Body End -->
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Contact Info Contact Start -->
                            <div class="contact-info-contant">
                                <h3>email us</h3>
                                <p>Email us now for expert coaching and tailored growth solutions!</p>
                            </div>
                            <!-- Contact Info Contact End -->

                            <!-- Contact Info Body Start -->
                            <div class="contact-info-body">
                                <div class="icon-box">
                                    <img src="images/icon-mail.svg" alt="">
                                </div>

                                <div class="contact-info-title">
                                    <h3><a href="mailto:{{ $company->email }}"
                                            class="colo">{{ $company->email }}</a></h3>
                                </div>
                            </div>
                            <!-- Contact Info Body End -->
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                            <!-- Contact Info Contact Start -->
                            <div class="contact-info-contant">
                                <h3>visit us</h3>
                                <p>Visit us for personalized coaching and guidance toward lasting success!</p>
                            </div>
                            <!-- Contact Info Contact End -->

                            <!-- Contact Info Body Start -->
                            <div class="contact-info-body">
                                <div class="icon-box">
                                    <img src="images/icon-location.svg" alt="">
                                </div>

                                <div class="contact-info-title pt-4">
                                    <h3>{{ $company->address1 }} </h3> <br/>
                                    <h3>{{ $company->address2 }} </h3> <br/>
                                </div>
                            </div>
                            <!-- Contact Info Body End -->
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Information End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Google Map Start -->
    <div class="google-map bg-section">
        <div class="container-flude">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <!-- Google Map Iframe Start -->
                    <div class="google-map-iframe">
                        <iframe
                            src="{{ $company->google_map }}"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map Iframe End -->
                </div>
            </div>
        </div>
    </div>
    <br />


    @include('components.footer')
@endsection
