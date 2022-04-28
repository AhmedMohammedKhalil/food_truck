@extends('layout')

@push('css')
    <style>
        .widget-area .tagcloud a:focus , .widget-area .tagcloud a:hover {
            color: #1d1d1d;
            border: 1px solid #ededed;
            background-color: #ededed;
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
                    <h2>بحث</h2>
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
<section class="event-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                    @livewire('search')
            </div>
            <div class="col-lg-8 col-md-12">
                <section class="shop2-area ptb-100">
                    <div class="container">
                        <div class="section-title">
                            <h2>عربات الطعام</h2>
                        </div>
                        @livewire('foodtrucks')
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection
