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
                    <h2>المستخدمين</h2>
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
        @if($users->count() > 0)
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div>
                        <h2 class="text-center pb-3">المستخدمين</h2>
                    </div>
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">الإسم</th>
                                    <th scope="col">عربة الطعام</th>
                                    <th scope="col">صاحب عربة طعام؟</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $u)
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.users.show',['id'=>$u->id]) }}">
                                            <span>{{ $u->name }}</span>
                                        </a>
                                    </td>
                                    <td>
                                        @if($u->food_truck)
                                            <a href="{{ route('truck.details',['id'=>$u->food_truck->id]) }}">
                                                <span>{{ $u->food_truck->name }}</span>
                                            </a>
                                        @endif
                                    </td>
                                    <td>
                                        @if($u->type == "owner")
                                            <span>نعم</span>
                                        @else
                                            <span>لا</span>
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
