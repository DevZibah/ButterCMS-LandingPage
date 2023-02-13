<!-- File: resources/views/features.blade.php -->

<section id="{{$scrollanchorid}}" class="feature-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-10">
                <div class="section-title mb-60">
                    <h2 class="mb-20">{{$header}}</h2>
                    <p>{{$subHeader}}</p>
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