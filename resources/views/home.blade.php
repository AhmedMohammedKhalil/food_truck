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
            <div class="col-lg-3 col-md-12">
                <div class="about-image">
                    <img style="height:200px"  src="{{ asset('assets/img/about-2.jpg') }}" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-content mt-5">
                    <span class="d-block text-center">من نحن</span>
                    <h3 class="text-center">موقع يقدم عربات الطعام الموجوده فى جميع انحاء الكويت</h3>
                </div>
            </div>

            <div class="col-lg-3 d-lg-block d-none">
                <div class="about-image">
                    <img style="height:200px" src="{{ asset('assets/img/about.jpg') }}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
@push('col') col-lg-3 @endpush
@push('message')ستكون عربات الطعام متاحه قريبا  @endpush

@include('foodtrucks')

@endsection




