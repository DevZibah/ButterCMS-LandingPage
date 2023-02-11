<!-- File: resources/views/hero.blade.php -->

<section id="{{$content['scroll-anchor-id']}}" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-10">
                <div class="hero-content">
                    <h1>{{$content['header']}}</h1>
                    <p>{{$content['sub-header']}}</p>

                    <a href="{{$content['hero-button_url']}}" target="_blank" class="main-btn btn-hover">{{$content['hero-button_label']}}</a>
                    <a href="https://buttercms.com/join/" target="_blank">Need an account?</a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="hero-image text-center text-lg-end">
                    <img src="{{$content['hero-image']}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>