@extends('users.layout')
@push('title')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>{{ $userInfo->name }}</h2>
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
<!-- Start Feedback Area -->
<section class="feedback-area text-center border-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 feedback-item">
                <div class="image mb-2">
                    @if($userInfo->image)
                    <img class="rounded-circle" style="height:300px"
                        src="{{ asset('assets/img/users/'.$userInfo->id.'/'.$userInfo->image) }}"
                        alt="image">
                    @else
                    <img class="rounded-circle" style="height:300px" src="{{ asset('assets/img/users/default.jpg') }}"
                        alt="image">
                    @endif
                </div>
                <div class="info">
                    <h3>{{ $userInfo->name }}</h3>
                    <span>{{ $userInfo->email }}</span>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- End Feedback Area -->
@endsection
