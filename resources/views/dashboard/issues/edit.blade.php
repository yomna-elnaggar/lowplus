@extends('dashboard.layouts.app')
@section('header')
<link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet" />
@endsection
@section('content')

<div class="container user-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> لوحة التحكم </a></li>
                <li class="breadcrumb-item"> القضايا </li>
                <li class="breadcrumb-item active" aria-current="page"> تعديل قضية </li>
            </ol>
        </nav>

    </div>
    <form id="myForm" autocomplete="off" class="needs-validation" novalidate method="POST" action="{{ route('issues.update', $issue->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="user-info">
            <div class="header-title">
                <h5> البيانات القضية </h5>
            </div>
            <div class="container my-4">
                <div class="row">
                    <div class="d-flex mob-changeImg col-lg-12">
                        <div class="col-lg-5 pr-lg-3">
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="firstName"> عنوان القضية </label>
                                <div class="input-parent-valid">
                                    <input name="name" type="text" placeholder=" عنوان القضية" value="{{ $issue->name }}" />
                                </div>
                            </div>
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="lastName"> رقم القضية </label>
                                <div class="input-parent-valid">
                                    <input name="issue_number" type="text" placeholder=" رقم القضية " value="{{ $issue->issue_number }}" />
                                </div>    
                            </div>
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="issue_date"> تاريخ القضية </label>
                                <div class="input-parent-valid">
                                    <input name="issue_date" type="date" placeholder="اختر تاريخ القضية" value="{{ $issue->issue_date }}" />
                                </div>
                            </div>
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="issue_amount"> مبلغ القضية </label>
                                <div class="input-parent-valid">
                                    <input name="issue_amount" type="text" placeholder=" مبلغ القضية " value="{{ $issue->issue_amount }}" />
                                </div>    
                            </div>
                        </div>
                        <div class="col-lg-1"></div><!-- Empty column for spacing -->
                        <div class="col-lg-5 pl-lg-3">
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="customer_id"> اختر عميل </label>
                                <div class="input-parent-valid">
                                    <select name="customer_id" id="customer_id" class="form-control">
                                        <option value=""> اختر عميل </option>
                                        @foreach($Customers as $item)
                                         <option value="{{ $item->id }}" {{ $item->id == $issue->customer_id ? 'selected' : '' }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="isues_type_id"> اختر نوع القضية </label>
                                <div class="input-parent-valid">
                                    <select name="isues_type_id" id="isues_type_id" class="form-control">
                                        <option value=""> اختر نوع القضية </option>
                                        @foreach($IsuesType as $item)
                                         <option value="{{ $item->id }}" {{ $item->id == $issue->isues_type_id ? 'selected' : '' }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <label for="caseType"> ملفات القضية </label>
                <div class="dropzone " id="drop-area2">
                    <input name="files[]" type="file" class="dropify" multiple>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-lg-6 d-flex">
                <div class="user-info flex-fill">
                    <div class="header-title">
                        <h5> البيانات الخصم </h5>
                    </div>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="contender_name"> اسم الخصم </label>
                                    <div class="input-parent-valid">
                                        <input name="contender_name" type="text" placeholder=" اسم الخصم" value="{{ $issue->contender_name }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="contender_phone"> رقم هاتف الخصم </label>
                                    <div class="input-parent-valid">
                                        <input name="contender_phone" type="text" placeholder=" رقم هاتف الخصم" value="{{ $issue->contender_phone }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="contender_address"> عنوان الخصم </label>
                                    <div class="input-parent-valid">
                                        <input name="contender_address" type="text" placeholder=" عنوان الخصم" value="{{ $issue->contender_address }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="contender_attorney"> محامي الخصم </label>
                                    <input name="contender_attorney" type="text" placeholder="محامي الخصم" value="{{ $issue->contender_attorney }}" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="contender_attorney_phone"> رقم هاتف محامي الخصم </label>
                                    <input name="contender_attorney_phone" type="text" placeholder="رقم هاتف محامي الخصم" value="{{ $issue->contender_attorney_phone }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <div class="user-info flex-fill">
                    <div class="header-title">
                        <h5> بيانات المحكمة </h5>
                    </div>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="court"> اسم المحكمة </label>
                                    <div class="input-parent-valid">
                                        <input name="court" type="text" placeholder=" اسم المحكمة" value="{{ $issue->court }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="court_city"> المدينة </label>
                                    <div class="input-parent-valid">
                                        <input name="court_city" type="text" placeholder=" المدينة" value="{{ $issue->court_city }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="court_crcle"> الدائرة </label>
                                    <div class="input-parent-valid">
                                        <input name="court_crcle" type="text" placeholder=" الدائرة" value="{{ $issue->court_crcle }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="judge_name"> اسم القاضي </label>
                                    <input name="judge_name" type="text" placeholder="اسم القاضي" value="{{ $issue->judge_name }}" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="pleading_degree"> درجة الترافع </label>
                                    <input name="pleading_degree" type="text" placeholder="درجة الترافع" value="{{ $issue->pleading_degree }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 my-3 hide-p2">
            <div class="filter-collapse2" data-bs-toggle="collapse" href="#collapseExample" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                <p> البيانات اضافية </p>
                <div>
                    <i class="fa-solid fa-angle-down coll-icon"></i>
                    <i class="fa-solid fa-angle-up coll-icon2"></i>
                </div>
            </div>

            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <div class="user-info">
                        <div class="container my-4">
                            <div class="row my-4">
                                <div class="col-lg-6 d-flex">
                                    <div class="user-info flex-fill">
                                        <div class="header-title">
                                            <h5> البيانات الموظفين </h5>
                                        </div>
                                        <div class="container my-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-input d-flex flex-column">
                                                        <label class="mb-2" for="caseType"> اختر الموظف </label>
                                                        <div class="input-parent-valid">
                                                            <select name="caseType" id="caseType" class="form-control">
                                                                <option value=""> اختر الموظف </option>
                                                                {{-- Add logic to populate this select with employees data and pre-select if needed --}}
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-input d-flex flex-column">
                                                        <label class="mb-2" for="firstName"> درجة الموظف </label>
                                                        <div class="input-parent-valid">
                                                            <input name="firstName" type="text" placeholder=" درجة الموظف" value="{{ $issue->employee_degree ?? '' }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex">
                                    <div class="user-info flex-fill">
                                        <div class="header-title">
                                            <h5> اضافة دفعة </h5>
                                        </div>
                                        <div class="container my-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-input d-flex flex-column">
                                                        <label class="mb-2" for="firstName"> اسم الدفعة </label>
                                                        <div class="input-parent-valid">
                                                            <input name="firstName" type="text" placeholder=" اسم الدفعة" value="{{ $issue->batch_name ?? '' }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-input d-flex flex-column">
                                                        <label class="mb-2" for="firstName"> قيمة الدفعة </label>
                                                        <div class="input-parent-valid">
                                                            <input name="firstName" type="text" placeholder=" قيمة الدفعة" value="{{ $issue->batch_amount ?? '' }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-end my-5">
            <a href="{{ route('issues.index') }}" class="cancel-btn"> إلغاء </a>
            <button class="add-user-btn loader-btn" type="submit"> <span class="loader"></span>  </button>
        </div>
    </form>    
</div>
@endsection
@section('footer')
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Dropify
        $('.dropify').dropify({
            messages: {
                'default': '<span style="font-size: 12px;">قم بسحب وإفلات الملف هنا أو انقر لتحديد الملف</span>',
                'replace': '<span style="font-size: 12px;">قم بسحب وإفلات الملف أو انقر لتحديد الملف</span>',
                'remove': '<span style="font-size: 12px;">إزالة</span>',
                'error': '<span style="font-size: 12px;">عفواً، حدث خطأ ما.</span>'
            }
        });
    });
</script>

@endsection
