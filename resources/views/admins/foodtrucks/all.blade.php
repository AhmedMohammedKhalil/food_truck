@extends('admins.layout')
@push('css')
    <style>
        .cart-table table {
            text-align:center;
        }
    </style>
@endpush
@push('title')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>عربات الطعام</h2>
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
<section class="cart-area pb-100">
    <div class="container">
        @if($newfoodtrucks->count() > 0)
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div>
                        <h2 class="text-center pb-3">عربات الطعام المضافة حديثا</h2>
                    </div>
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">الإسم</th>
                                    <th scope="col">رقم الترخيص</th>
                                    <th scope="col">الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($newfoodtrucks as $nft)
                                <tr>
                                    <td>
                                        <span>{{ $nft->name }}</span>
                                    </td>
                                    <td>
                                        <span>{{ $nft->license_no }}</span>
                                    </td>
                                    <td class="settings">
                                        <a href="{{ route('admin.foodtrucks.show',['id'=>$nft->id]) }}" class="show" >
                                            عرض
                                        </a>
                                        <a href="{{ route('admin.foodtrucks.accept',['id'=>$nft->id]) }}" class="accept"
                                            >
                                            قبول
                                        </a>
                                        <a href="{{ route('admin.foodtrucks.reject',['id'=>$nft->id]) }}" class="reject"
                                            >
                                            رفض
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif

        @if($rejectfoodtrucks->count() > 0)
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div>
                    <h2 class="text-center pb-3">عربات الطعام المرفوضة</h2>
                </div>
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">الإسم</th>
                                <th scope="col">رقم الترخيص</th>
                                <th scope="col">الإعدادات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rejectfoodtrucks as $rft)
                            <tr>
                                <td>
                                    <span>{{ $rft->name }}</span>
                                </td>
                                <td>
                                    <span>{{ $rft->license_no }}</span>
                                </td>
                                <td class="settings">
                                    <a href="{{ route('admin.foodtrucks.show',['id'=>$rft->id]) }}" class="show" >
                                        عرض
                                    </a>
                                    <a href="{{ route('admin.foodtrucks.accept',['id'=>$rft->id]) }}" class="accept"
                                        >
                                        قبول
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif

        @if($acceptfoodtrucks->count() > 0)
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div>
                    <h2 class="text-center pb-3">عربات الطعام المتاحة</h2>
                </div>
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">الإسم</th>
                                <th scope="col">رقم الترخيص</th>
                                <th scope="col">الإعدادات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($acceptfoodtrucks as $ft)
                            <tr>
                                <td>
                                    <span>{{ $ft->name }}</span>
                                </td>
                                <td>
                                    <span>{{ $ft->license_no }}</span>
                                </td>
                                <td class="settings">
                                    <a href="{{ route('admin.foodtrucks.show',['id'=>$ft->id]) }}" class="edit"
                                        >
                                        عرض
                                    </a>
                                    <a href="{{ route('admin.foodtrucks.reject',['id'=>$ft->id]) }}" class="remove"
                                        >
                                        رفض
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif

    </div>
</section>
@endsection
