@extends('admins.layout')
@push('title')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>لوحة التحكم</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-title-shape">
        <img src="{{ asset('assets/img/page-title/down-shape.png') }}" alt="image">
    </div>
    <div class="page-title-shape-2">
        <img src="{{ asset('assets/img/page-title/down-shape2.png') }}" alt="image">
    </div>
</div>
<!-- End Page Title Area -->
@endpush
@section('article')
<section class="fun-facts-area pt-100 pb-70" style="background: #50d3ff">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                    <h3>
                        <span class="counter">{{ $trucksCount }}</span>
                    </h3>
                    <p><a href="{{ route('admin.foodtrucks.all') }}">عربات الطعام</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                    <h3>
                        <span class="counter" >{{ $usersCount }}</span>
                    </h3>
                    <p><a href="{{ route('admin.users.index') }}">المستخدمين</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                    <h3>
                        <span class="counter" >{{ $regionsCount }}</span>
                    </h3>
                    <p><a href="{{ route('admin.regions.index') }}">المناطق</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
