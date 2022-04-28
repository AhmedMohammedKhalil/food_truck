@extends('admins.layout')
@push('title')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>لوحة تحكم المناطق</h2>
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
    <!-- Start Cart Area -->
    <section class="cart-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="cart-buttons mb-3">
                        <div class="align-items-center d-flex justify-content-center">
                            <div class="">
                                <a href="{{ route('admin.regions.create') }}" class="default-btn">
                                    إضافة منطقة
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">الإسم</th>
                                    <th scope="col">الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regions as $r)
                                    <tr>
                                        <td class="name">
                                            <span class="name">{{ $r->name }}</span>
                                        </td>
                                        <td class="settings">
                                            <a href="{{ route('admin.regions.edit',['id'=>$r->id]) }}" class="edit" style="font-size:25px">
                                                <i class='bx bx-edit'></i>
                                            </a>
                                            @if($r->locations->count() == 0)
                                                <a href="{{ route('admin.regions.destroy',['id'=>$r->id]) }}" class="remove" style="font-size:25px">
                                                    <i class='bx bx-trash'></i>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                @if($regions->count() == 0)
                                    <tr>
                                        <td colspan="2" >
                                            <span class="text-center d-block">لا يوجد أى مناطق</span>
                                        </td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cart Area -->
@endsection
