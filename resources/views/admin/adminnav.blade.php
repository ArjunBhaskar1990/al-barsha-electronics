        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                    <a class="navbar-brand brand-logo me-5" href="/admin/dashboard">
                        <img src="/storage/uploads/logo/logo.png" class="me-2" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="/admin/dashboard">
                        <img src="/storage/uploads/logo/logo.png" class="me-2" alt="logo" /></a>
                </div>


                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>

                    <ul class="navbar-nav navbar-nav-right">
                    </ul>

                </div>
            </nav>
            <!-- partial -->

            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->



                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        {{-- <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false"
                                aria-controls="ui-basic">
                                <i class="icon-layout menu-icon"></i>
                                <span class="menu-title">Home Page</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="ui-basic4">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link"
                                            href="">Slider</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="">Slider Services</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="">About Us</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="">Corporate Solutions</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="">How We Operate</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="">Customer Exp.</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="">Why Choose Us</a></li>
                                </ul>
                            </div>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('page.company') }}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Company</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('page.homebanner') }}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Home Banner</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('page.aboutus') }}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">About Us</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('page.ourservices') }}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Our Services</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('page.whychoosehome') }}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Why Choose (Home)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('page.whychoose_about') }}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Why Choose (About)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('page.youtube') }}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Youtube Section</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('page.expertise') }}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Expertise</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('page.faqsection') }}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">FAQ Section</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('page.testimonials') }}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Testimonials</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('page.ourapproach') }}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Our Approach</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('page.branchfooter') }}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Our Branch & <br/>Footer Title <br/> Contact Image</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('page.metadata') }}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">SEO</span>
                            </a>
                        </li>


                        {{-- logout --}}
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a class="nav-link" href=""
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
