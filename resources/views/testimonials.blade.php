<!-- File: resources/views/testimonials.blade.php -->

<section id="{{$content['scroll_anchor_id']}}" class="testimonial-section mt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9">
                <div class="testimonial-active-wrapper">

                    <div class="section-title text-center">
                        <h2 class="mb-20">{{$content['header']}}</h2>
                    </div>

                    <div class="testimonial-active">
                        @foreach($content['testimonial'] as $testimonial)
                            <div class="single-testimonial">
                                <div class="quote">
                                    <i class="lni lni-quotation"></i>
                                </div>
                                
                                <div class="hero-image text-center text-lg-end">
                                    <img src="{{$content['Image']}}" alt="">
                                </div>
                                <div class="info">
                                    <h6>{{$testimonial['FullName']}}</h6>
                                    <p>{{$testimonial['Occupation']}}</p>
                                    <div class="content">
                                        <p>{{$testimonial['content']}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>