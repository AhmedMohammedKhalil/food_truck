@extends('layouts.app')

@section('content')
<!-- Start Banner Area -->
<div class="banner-area">
    <div class="banner-shape">
        <img src="assets/img/banner-area/down-shape.png" alt="image">
    </div>
    <div class="banner-shape-2">
        <img src="assets/img/banner-area/down-shape-2.png" alt="image">
    </div>
</div>
<!-- End Banner Area -->

<!-- Start About Area -->
<section class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <span>من نحن</span>
                    <h3>موقع يقدم عربات الطعام الموجوده فى جميع انحاء الكويت</h3>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{ asset('assets/img/about.jpg') }}" alt="image">

                    <div class="shape">
                        <img src="assets/img/about/shape.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start shop2 Shop Area -->
<section class="shop2-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>عربات الطعام</span>
            <h2>جميع عربات الطعام</h2>
        </div>

        <div class="row">
            @php $flag = true; @endphp
            @foreach ($foodtrucks as $ft)
                @if($ft->location && $ft->menu()->count() > 0)
                    @php $flag = false; @endphp

                    <div class="col-lg-3 col-md-6">
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

            @if($flag == true)
                    <div>
                        <span class="d-block text-center">ستكون عربات الطعام متاحه قريبا</span>
                    </div>
            @endif
        </div>

    </div>
</section>
<!-- End shop2 Shop Area -->

@endsection




