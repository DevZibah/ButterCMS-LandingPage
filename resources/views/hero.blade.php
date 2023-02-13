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

