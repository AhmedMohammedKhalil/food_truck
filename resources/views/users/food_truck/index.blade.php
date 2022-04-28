@extends('users.layout')
@push('title')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>{{ $food_truck->name }}</h2>
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
                                            @if($food_truck->logo())
                                            <a class="single-gallery"
                                                href="{{ asset('assets/img/foodtrucks/'. $food_truck->id .'/logo/'.$food_truck->logo()->path) }}">
                                                <img class="" style="height:300px;width:500px"
                                                    src="{{ asset('assets/img/foodtrucks/'. $food_truck->id .'/logo/'.$food_truck->logo()->path) }}" alt="image">
                                            </a>
                                            @else
                                            <a class="single-gallery" href="{{ asset('assets/img/foodtrucks/truck2.jpg') }}">
                                                <img class="" style="height:300px;width:500px" src="{{ asset('assets/img/foodtrucks/truck2.jpg') }}" alt="image">
                                            </a>
                                            @endif
                                        </div>
                                        <div class="products-details-tab-content">
                                            <ul class="additional-information">
                                                <li>
                                                    <span>الإسم : </span> {{ $food_truck->name }}
                                                </li>
                                                <li>
                                                    <span>رقم الترخيص : </span> {{ $food_truck->license_no }}
                                                </li>
                                                <li>
                                                    <span>رقم الموبايل : </span> {{ $food_truck->phone }}
                                                </li>
                                                <li>
                                                    <span>الحالة : </span> @if($food_truck->status == 0)  لم يتم القبول بعد  @elseif ($food_truck->status == 1)  تم القبول  @else  تم الرفض قد يكون الترخيص مزيف  @endif
                                                </li>
                                                @if($food_truck->facebook)
                                                <li>
                                                    <span>فيسبوك : </span> {{ $food_truck->facebook }}
                                                </li>
                                                @endif
                                                <li>
                                                    <span>التفاصيل : </span> <p>{{ $food_truck->description }}</p>
                                                </li>
                                                <li>
                                                    <span>مواعيد العمل : </span> <p>{{ $food_truck->worktime }}</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="cart-buttons mb-3">
                                            <div class="align-items-center d-flex justify-content-center">
                                                <div class="">
                                                    <a href="{{ route('user.food_truck.edit') }}" class="default-btn">
                                                        تعديل
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="menu-bar">
                                        @if ($food_truck->menu()->count() > 0)
                                            <div class="gallery">
                                                @foreach($food_truck->menu() as $m)
                                                    <a href="{{ asset('assets/img/foodtrucks/'. $food_truck->id .'/menu/'.$m->path) }}">
                                                        <img style="height:300px;width:300px"
                                                            src="{{ asset('assets/img/foodtrucks/'. $food_truck->id .'/menu/'.$m->path) }}" alt="image">
                                                    </a>
                                                @endforeach
                                            </div>
                                            <div class="cart-buttons mb-3">
                                                <div class="align-items-center d-flex justify-content-center">
                                                    <div class="">
                                                        <a href="{{ route('user.food_truck.menu.edit') }}" class="default-btn">
                                                            تعديل القائمة
                                                            <span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div>
                                                <span class="d-block text-center">لا توجد أى قائمة</span>
                                            </div>
                                            <div class="cart-buttons mb-3">
                                                <div class="align-items-center d-flex justify-content-center">
                                                    <div class="">
                                                        <a href="{{ route('user.food_truck.menu.create') }}" class="default-btn">
                                                            إضافة القائمة
                                                            <span></span>
                                                        </a>
                                                    </div>
                                                </div>
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
                                            @if($food_truck->location)
                                                <div class="products-details-tab-content">
                                                    <ul class="additional-information">
                                                        <li>
                                                            <span>المنطقة : </span> {{ $food_truck->location->region->name }}
                                                        </li>
                                                        <li>
                                                            <span>البلوك : </span> {{ $food_truck->location->block }}
                                                        </li>
                                                        <li>
                                                            <span>الشارع : </span> {{ $food_truck->location->streat }}
                                                        </li>
                                                        <li>
                                                            <span>المنزل : </span> {{ $food_truck->location->house }}
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="cart-buttons mb-3">
                                                    <div class="align-items-center d-flex justify-content-center">
                                                        <div class="">
                                                            <a href="{{ route('user.food_truck.location.edit',['id'=>$food_truck->location->id]) }}" class="default-btn">
                                                                تعديل
                                                                <span></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div>
                                                    <span class="d-block text-center">لا يوجد مكان للعربة</span>
                                                </div>
                                                <div class="cart-buttons mb-3">
                                                    <div class="align-items-center d-flex justify-content-center">
                                                        <div class="">
                                                            <a href="{{ route('user.food_truck.location.create') }}" class="default-btn">
                                                                إضافة المكان
                                                                <span></span>
                                                            </a>
                                                        </div>
                                                    </div>
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
