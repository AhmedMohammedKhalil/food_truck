@extends('layouts.app')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>تسجيل دخول</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title-shape">
            <img src="{{ asset('assets/img/page-title/down-shape.png') }}" alt="image">
        </div>
        <div class="page-title-shape-2">
            <img src="{{ asset('assets/img/page-title/down-shape-2.png') }}" alt="image">
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start Sign In Area -->
    <div class="sign-in-area ptb-100">
        <div class="container">
            <div class="sign-in-form">
                <div class="sign-in-title">
                    <p>سجل دخولك هنا من فضلك</p>
                </div>
                <livewire:admin.login />
            </div>
        </div>
    </div>
    <!-- End Sign In Area -->
@endsection
