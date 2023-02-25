<link href="css/style.css" rel="stylesheet" type="text/css">
<!-- navmenu-section -->

<section class="nav-sec">
        <div>
            <h3>{{$NavHeading}}</h3>
        </div>
        <div class='nav-list'>
            <li class="nav-item">
                <a class="page-scroll" href="/{{$HomeUrl}}">{{$HomeLabel}}</a>
            </li>
            <li class="nav-item">
                <a class="page-scroll" href="/{{$TestimonialUrl}}">{{$TestimonialLabel}}</a>
            </li>
            <li class="nav-item">
                <a class="page-scroll" href="/{{$AboutUrl}}">{{$AboutLabel}}</a>
            </li>
        </div>
</section>

<!-- Hero-section -->
<section id="{{$scrollanchorid}}" class="hero-section">
    <div class="container">
        <div class="row align-items-center d-flex">
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
                    <h1 class="mb-20">{{$featuresHeader}}</h1>
                    <h3>{{$featuresSubHeader}}</h3>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="single-feature1">
                    <div class="feature-icon">
                        <img src="{{$icon1}}" alt="" />
                    </div>
                    <div class="feature-content1">
                        <h4>{{$header1}}</h4>
                        <p>{{$description1}}</p>
                    </div>
                </div>
                <div class="single-feature1">
                    <div class="feature-content2">
                        <h4>{{$header2}}</h4>
                        <p>{{$description2}}</p>
                    </div>
                    <div class="feature-icon icon1">
                        <img src="{{$icon2}}" alt="" />
                    </div>
                </div>
                <div class="single-feature1">
                    <div class="feature-icon icon2">
                        <img src="{{$icon3}}" alt="" />
                    </div>
                    <div class="feature-content3">
                        <h4>{{$header3}}</h4>
                        <p>{{$description3}}</p>
                    </div>
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
                                <div class="test-image text-center text-lg-end">
                                    <img src="{{$image}}" alt="">
                                </div>
                                <div class="info">
                                    <h4>{{$fullname}}</h4>
                                    <p>{{$occupation}}</p>
                                    <div class="content">
                                        <p>{{$content}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial1">
                                <div class="test-image1 text-center text-lg-end">
                                    <img src="{{$image1}}" alt="">
                                </div>
                                <div class="info">
                                    <h4>{{$fullname1}}</h4>
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