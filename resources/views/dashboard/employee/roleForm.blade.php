@extends('dashboard.layouts.app')

@section('header')
<link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="container user-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>
                <li class="breadcrumb-item">الصلاحيات</li>
                <li class="breadcrumb-item active" aria-current="page">إضافة صلاحية</li>
            </ol>
        </nav>
    </div>

    <form id="createproduct-form" autocomplete="off" class="needs-validation" method="POST" action="">
        @csrf
        <div class="container my-4">
            <div class="row my-4">
                <div class="col-lg-6">
                    <div class="form-input d-flex flex-column">
                        <label class="mb-2" for="name">اسم الصلاحية<span style="color: red;">*</span></label>
                        <input name="name" type="text" placeholder="اسم الصلاحية" value="" required />
                    </div>
                </div>
            </div>

            <div class="row my-4">
                @php
                    $permissions = [
                        'العملاء' => ['اضافة', 'عرض', 'تعديل', 'حذف'],
                        'القضايا' =>['اضافة', 'عرض', 'تعديل', 'حذف'],
                        'الجلسات' =>['اضافة', 'عرض', 'تعديل', 'حذف'],
                        'الخدمات' =>['اضافة', 'عرض', 'تعديل', 'حذف'],
                        'الموظفين' =>['اضافة', 'عرض', 'تعديل', 'حذف'],
                        'الملفات' =>['اضافة', 'عرض', 'تعديل', 'حذف'],
                        'المهام' =>['اضافة', 'عرض', 'تعديل', 'حذف'],
                        'المالية' =>['اضافة', 'عرض', 'تعديل', 'حذف'],
                    ];
                @endphp

                @foreach ($permissions as $category => $actions)
                <div class="col-lg-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>{{ $category }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="list-group">
                                @foreach ($actions as $action)
                                <div class="form-check mb-2">
                                    <input type="checkbox" id="{{ $category }}-{{ $action }}" name="permissions[]" value="{{ $category }}-{{ $action }}" class="form-check-input">
                                    <label for="{{ $category }}-{{ $action }}" class="form-check-label"> 
                                        {{ $action}}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-end my-2">
            <button class="cancel-btn btn btn-secondary" type="button">إلغاء</button>
            <button class="add-user-btn loader-btn btn btn-primary" type="submit"><span class="loader"></span> </button>
        </div>
    </form>
</div>
@endsection
