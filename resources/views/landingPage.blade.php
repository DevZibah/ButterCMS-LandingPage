<!-- navmenu-section -->

<ul id="nav" class="navbar-nav ms-auto">
    <h3>{{$NavHeading}}</h3>
    <li class="nav-item">
        <a class="page-scroll" href="/{{$HomeUrl}}">{{$HomeLabel}}</a>
    </li>
    <li class="nav-item">
        <a class="page-scroll" href="/{{$TestimonialUrl}}">{{$TestimonialLabel}}</a>
    </li>
    <li class="nav-item">
        <a class="page-scroll" href="/{{$AboutUrl}}">{{$AboutLabel}}</a>
    </li>
</ul>

<!-- Hero-section -->
<section id="{{$scrollanchorid}}" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-10">
                <div class="hero-content">
                    <h1>{{$header}}</h1>
                    <p>{{$subHeader}}</p>

                    <a href="{{$herobuttonurl}}" target="_blank" class="main-btn btn-hover">{{$herobuttonlabel}}</a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="hero-image text-center text-lg-end">
                    <img src="{{$heroimage}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- features-section -->

<section id="{{$scrollanchorid}}" class="feature-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-10">
                <div class="section-title mb-60">
                    <h2 class="mb-20">{{$featuresHeader}}</h2>
                    <p>{{$featuresSubHeader}}</p>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="row">
                    @foreach($features as $feature)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-feature">
                                <div class="feature-icon">
                                    <img src="{{$feature['icons']}}" alt="" />
                                </div>
                                <div class="feature-content">
                                    <h4>{{$feature['header']}}</h4>
                                    <p>{{$feature['description']}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- testimonials-section -->

<section class="testimonial-section mt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9">
                <div class="testimonial-active-wrapper">

                    <div class="section-title text-center">
                        <h2 class="mb-20">{{$testimonialMenu}}</h2>
                    </div>

                    <div class="testimonial-active">
                            <div class="single-testimonial">
                                <div class="hero-image text-center text-lg-end">
                                    <img src="{{$image}}" alt="">
                                </div>
                                <div class="info">
                                    <h6>{{$fullname}}</h6>
                                    <p>{{$occupation}}</p>
                                    <div class="content">
                                        <p>{{$content}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="hero-image text-center text-lg-end">
                                    <img src="{{$image1}}" alt="">
                                </div>
                                <div class="info">
                                    <h6>{{$fullname1}}</h6>
                                    <p>{{$occupation1}}</p>
                                    <div class="content">
                                        <p>{{$content1}}</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>