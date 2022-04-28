<!-- Start shop2 Shop Area -->
<section class="shop2-area ptb-50 ">
    <div class="container">
        <div class="section-title">
            <span>عربات الطعام</span>
            <h2>جميع عربات الطعام</h2>
        </div>

        <div class="row">
            @php $flag = true; @endphp
            @if($foodtrucks)
                @foreach ($foodtrucks as $ft)
                    @if($ft->location && $ft->menu()->count() > 0)
                        @php $flag = false; @endphp

                        <div class="@stack('col') col-md-6">
                            <div class="shop2-item">
                                <div class="image">
                                    @if($ft->logo())
                                        <a class="single-gallery"
                                            href="{{ asset('assets/img/foodtrucks/'. $ft->id .'/logo/'.$ft->logo()->path) }}">
                                            <img class="" style="height:200px"
                                                src="{{ asset('assets/img/foodtrucks/'. $ft->id .'/logo/'.$ft->logo()->path) }}" alt="image">
                                        </a>
                                    @else
                                        <a class="single-gallery" href="{{ asset('assets/img/foodtrucks/truck2.jpg') }}">
                                            <img class="" style="height:200px" src="{{ asset('assets/img/foodtrucks/truck2.jpg') }}" alt="image">
                                        </a>
                                    @endif
                                <div class="shop2-btn">
                                        <a href="{{ route('truck.details',['id'=>$ft->id]) }}" class="default-btn">
                                            <i class="flaticon-play-button"></i>
                                            للمزيد
                                            <span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="content">
                                    <h3>{{ $ft->name }}</h3>
                                    <p>{{ $ft->description }}</p>
                                    <span>{{ $ft->owner->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
            @if($flag == true)
                    <div>
                        <span class="d-block text-center">@stack('message')</span>
                    </div>
            @endif
        </div>

    </div>
</section>
<!-- End shop2 Shop Area -->
