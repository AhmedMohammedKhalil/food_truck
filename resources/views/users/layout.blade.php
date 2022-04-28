@extends('layouts.app')
@section('content')
@stack('title')
<section class="event-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-12">
                @include('users.sidebar')
            </div>
            <div class="col-lg-10 col-md-12">
                @yield('article')
            </div>
        </div>
    </div>
</section
@endsection
