                    <!-- Logo Start -->
                    <a class="navbar-brand" href="{{ route('page.home') }}">
                        <img class="rounded pt-1" src="{{ asset('/storage/uploads/logo/'.$company->image) }}" style="height:78px;" alt="{{ $company->company_name }}">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('page.home') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('page.about') }}">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('page.services') }}">Our Service</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('page.contact') }}">Contact Us</a></li>
                                <!-- <li class="nav-item"> <a href="../business/index.html" class="btn-default mx-2">Business
                                        Setup</a></li> -->


                            </ul>
                        </div>
                        <!-- Header Btn Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="tel:{{ $company->phone1 }}" class="btn-phone"><i
                                    class="fa-solid fa-phone-volume"></i>{{ $company->phone1 }}</a>
                            <a href="contact.html" class="btn-default">get in touch</a>
                        </div>
                        <!-- Header Btn End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
