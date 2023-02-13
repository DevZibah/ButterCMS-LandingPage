<!-- File: resources/views/hero.blade.php -->

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

<!-- File: resources/views/features.blade.php -->

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