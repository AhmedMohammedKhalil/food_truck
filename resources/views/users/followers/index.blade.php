@extends('users.layout')
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
                    <h2>الأشخاص المتابعين</h2>
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
<section class="cart-area ptb-50">
    <div class="container">
        @if($followers->count() > 0)
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div>
                        <h2 class="text-center pb-3">الأشخاص المتابعين</h2>
                    </div>
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">الإسم</th>
                                    <th scope="col">عربة الطعام</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($followers as $f)
                                <tr>
                                    <td>
                                        <a href="{{ route('user.followers.show',['id'=>$f->id]) }}">
                                            <span>{{ $f->name }}</span>
                                        </a>
                                    </td>
                                    <td>
                                        @if($f->food_truck)
                                            <a href="{{ route('truck.details',['id'=>$f->food_truck->id]) }}">
                                                <span>{{ $f->food_truck->name }}</span>
                                            </a>
                                        @endif
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
