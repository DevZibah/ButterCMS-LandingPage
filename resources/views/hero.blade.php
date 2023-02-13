<!-- File: resources/views/hero.blade.php -->

<section id="{{$scrollanchorid}}" class="hero-section">
    <h5>hey you</h5>
    <h4>{{$slug}}</h4>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-10">
                <div class="hero-content">
                    <h1>{{$header}}</h1>
                    <p>{{$subHeader}}</p>

                    <a href="{{$herobuttonurl}}" target="_blank" class="main-btn btn-hover">{{$herobuttonlabel}}</a>
                    <a href="https://buttercms.com/join/" target="_blank">Need an account?</a>
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

