@extends('admins.layout')
@push('title')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>{{ $foodtruck->name }}</h2>
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
<section class="menu-area pb-100">
    <div class="container">
        <div class="tab menu-list-tab">
            <ul class="tabs">
                <li>
                    <a href="#">
                        <span> عربة الطعام</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>قائمة الطعام</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span>مكان العربة</span>
                    </a>
                </li>

            </ul>
            <div class="products-details-tab">
                <div class="tab_content">
                    <div class="tabs_item ">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="menu-bar">
                                    <div class="mb-2 text-center">
                                        @if($foodtruck->logo())
                                        <a class="single-gallery"
                                            href="{{ asset('assets/img/foodtrucks/'. $foodtruck->id .'/logo/'.$foodtruck->logo()->path) }}">
                                            <img class="" style="height:300px;width:500px"
                                                src="{{ asset('assets/img/foodtrucks/'. $foodtruck->id .'/logo/'.$foodtruck->logo()->path) }}"
                                                alt="image">
                                        </a>
                                        @else
                                        <a class="single-gallery"
                                            href="{{ asset('assets/img/foodtrucks/truck2.jpg') }}">
                                            <img class="" style="height:300px;width:500px"
                                                src="{{ asset('assets/img/foodtrucks/truck2.jpg') }}" alt="image">
                                        </a>
                                        @endif
                                    </div>
                                    <div class="products-details-tab-content">
                                        <ul class="additional-information">
                                            <li>
                                                <span>الإسم : </span> {{ $foodtruck->name }}
                                            </li>
                                            <li>
                                                <span>رقم الترخيص : </span> {{ $foodtruck->license_no }}
                                            </li>
                                            <li>
                                                <span>رقم الموبايل : </span> {{ $foodtruck->phone }}
                                            </li>
                                            <li>
                                                <span>الحالة : </span> @if($foodtruck->status == 0) لم يتم القبول بعد
                                                @elseif ($foodtruck->status == 1) تم القبول @else تم الرفض قد يكون
                                                الترخيص مزيف @endif
                                            </li>
                                            @if($foodtruck->facebook)
                                            <li>
                                                <span>فيسبوك : </span> {{ $foodtruck->facebook }}
                                            </li>
                                            @endif
                                            <li>
                                                <span>التفاصيل : </span>
                                                <p>{{ $foodtruck->description }}</p>
                                            </li>
                                            <li>
                                                <span>مواعيد العمل : </span>
                                                <p>{{ $foodtruck->worktime }}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="menu-bar">
                                    @if ($foodtruck->menu()->count() > 0)
                                    <div class="gallery">
                                        @foreach($foodtruck->menu() as $m)
                                        <a
                                            href="{{ asset('assets/img/foodtrucks/'. $foodtruck->id .'/menu/'.$m->path) }}">
                                            <img style="height:300px;width:300px"
                                                src="{{ asset('assets/img/foodtrucks/'. $foodtruck->id .'/menu/'.$m->path) }}"
                                                alt="image">
                                        </a>
                                        @endforeach
                                    </div>
                                    @else
                                    <div>
                                        <span class="d-block text-center">لا توجد أى قائمة</span>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="menu-bar">
                                    @if($foodtruck->location)
                                        <div class="products-details-tab-content">
                                            <ul class="additional-information">
                                                <li>
                                                    <span>المنطقة : </span> {{ $foodtruck->location->region->name }}
                                                </li>
                                                <li>
                                                    <span>البلوك : </span> {{ $foodtruck->location->block }}
                                                </li>
                                                <li>
                                                    <span>الشارع : </span> {{ $foodtruck->location->streat }}
                                                </li>
                                                <li>
                                                    <span>المنزل : </span> {{ $foodtruck->location->house }}
                                                </li>
                                            </ul>
                                        </div>
                                    @else
                                        <div>
                                            <span class="d-block text-center">لا يوجد مكان للعربة</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
