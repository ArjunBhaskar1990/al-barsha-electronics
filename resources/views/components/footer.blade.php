    <footer class="main-footer bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2>{{ $whychoose->footer_title1 }} <span> {{ $whychoose->footer_title2 }}</span></h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-lg-3 col-md-3">
                    <!-- Footer Contact Information Start -->
                    <div class="footer-contact-info">
                        <h3>address</h3>
                        <p>{{ $company->address1 }} </p>
                    </div>
                    <!-- Footer Contact Information End -->

                    <!-- Footer Social Link Start -->
                    <div class="footer-social-links">
                        <ul>
                            <li><a href="{{ url($company->pinterest) }}"><i class="fa-brands fa-pinterest-p"></i></a></li>
                            <li><a href="{{ url($company->xlink) }}"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="{{ url($company->fblink) }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="{{ url($company->instagram) }}"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Footer Social Link End -->
                </div>

                <div class="col-lg-2 col-md-3">
                    <!-- Footer Contact Information Start -->
                    <div class="footer-contact-info">
                        <h3>say hello</h3>
                        <p><a href="mailto:{{ $company->email }}"
                                class="text-white">{{ $company->email }}</a></p>
                        <p><span><a href="tel:{{ $company->phone1 }}" class="text-white">{{ $company->phone1 }}</a></span></p>
                    </div>
                    <!-- Footer Contact Information End -->
                </div>
            </div>

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <!-- Footer Menu Start -->
                        <div class="footer-menu">
                            <ul>
                                <li><a href="{{ route('page.home') }}">home</a></li>
                                <li><a href="{{ route('page.about') }}">about</a></li>
                                {{-- <li><a href="businesssetup.html">Bookkeeping</a></li> --}}
                                <li><a href="{{ route('page.contact') }}">contact</a></li>
                            </ul>
                        </div>
                        <!-- Footer Menu End -->
                    </div>

                    <div class="col-md-6">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © 2025 Al-Barsha.All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
    </footer>
    <!-- Footer End -->

