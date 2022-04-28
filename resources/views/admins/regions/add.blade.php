@extends('admins.layout')
@push('title')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>إضافة منطقة</h2>
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
    <!-- Start Sign In Area -->
    <div class="sign-in-area">
        <div class="container">
            <div class="sign-in-form">
                <livewire:admin.add-region />
            </div>
        </div>
    </div>
    <!-- End Sign In Area -->
@endsection
