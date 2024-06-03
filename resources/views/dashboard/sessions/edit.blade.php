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
                <li class="breadcrumb-item">الجلسات</li>
                <li class="breadcrumb-item active" aria-current="page">تعديل جلسة</li>
            </ol>
        </nav>
    </div>

    <form id="myForm" autocomplete="off" class="needs-validation" novalidate method="POST" action="{{route('sessions.update', $session->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="user-info">
            <div class="header-title">
                <h5>بيانات الجلسة</h5>
            </div>
            <div class="container my-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-input d-flex flex-column mb-3">
                            <label class="mb-2" for="issue_id">اختر القضية</label>
                            <div class="input-parent-valid">
                                <select name="issue_id" id="issue_id" class="form-control">
                                    <option value="">اختر القضية</option>
                                    @foreach ($issues as $issue)
                                        <option value="{{ $issue->id }}" {{ $issue->id == $session->issue_id ? 'selected' : '' }}>{{ $issue->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-input d-flex flex-column mb-3">
                            <label class="mb-2" for="name">اسم الجلسة</label>
                            <div class="input-parent-valid">
                                <input name="name" type="text" placeholder="اسم الجلسة" value="{{ $session->name }}" />
                            </div>
                        </div>
                        <div class="form-input d-flex flex-column mb-3">
                            <label class="mb-2" for="sessionDateTime">تاريخ ووقت الجلسة</label>
                            <div class="input-parent-valid">
                                <input name="sessionDateTime" type="datetime-local" placeholder="اختر تاريخ الجلسة" value="{{ \Carbon\Carbon::parse($session->sessionDateTime)->format('Y-m-d\TH:i') }}" />
                            </div>
                        </div>
                        <div class="form-input d-flex flex-column mb-3">
                            <label class="mb-2" for="session_require">متطلبات الجلسة</label>
                            <div class="input-parent-valid">
                                <textarea name="session_require" placeholder="متطلبات الجلسة" rows="4" style="width:100%">{{ $session->session_require }}</textarea>
                            </div>
                        </div>
                        <div class="form-input d-flex flex-column mb-3">
                            <label class="mb-2" for="session_link">رابط الجلسة</label>
                            <div class="input-parent-valid">
                                <input name="session_link" type="text" placeholder="رابط الجلسة" value="{{ $session->session_link }}" />
                            </div>
                        </div>
                        <div class="form-input d-flex flex-column mb-3">
                            <label class="mb-2" for="note">ملاحظات الجلسة</label>
                            <div class="input-parent-valid">
                                <textarea name="note" placeholder="ملاحظات الجلسة" rows="4" style="width:100%">{{ $session->note }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <label class="mb-2" for="caseType">ملفات الجلسة</label>
                        <div class="card">
                            <div class="dropzone">
                                <div class="fallback">
                                    <input name="files[]" type="file" class="dropify" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-lg-12">
                <div class="user-info flex-fill">
                    <div class="header-title">
                        <h5>بيانات المحكمة</h5>
                    </div>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-input d-flex flex-column mb-3">
                                    <label class="mb-2" for="court">اسم المحكمة</label>
                                    <div class="input-parent-valid">
                                        <input name="court" type="text" placeholder="اسم المحكمة" value="{{ $session->court }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-input d-flex flex-column mb-3">
                                    <label class="mb-2" for="court_city">المدينة</label>
                                    <div class="input-parent-valid">
                                        <input name="court_city" type="text" placeholder="المدينة" value="{{ $session->court_city }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-input d-flex flex-column mb-3">
                                    <label class="mb-2" for="court_crcle">الدائرة</label>
                                    <div class="input-parent-valid">
                                        <input name="court_crcle" type="text" placeholder="الدائرة" value="{{ $session->court_crcle }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input d-flex flex-column mb-3">
                                    <label class="mb-2" for="judge_name">اسم القاضي</label>
                                    <input name="judge_name" type="text" placeholder="اسم القاضي" value="{{ $session->judge_name }}" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input d-flex flex-column mb-3">
                                    <label class="mb-2" for="pleading_degree">درجة الترافع</label>
                                    <input name="pleading_degree" type="text" placeholder="درجة الترافع" value="{{ $session->pleading_degree }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-lg-6">
                <div class="card card-body">
                    <div class="user-info">
                        <div class="header-title">
                            <h5>بيانات الموظفين</h5>
                        </div>
                        <div class="container my-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-input d-flex flex-column mb-3">
                                        <label class="mb-2" for="caseType">اختر الموظف</label>
                                        <div class="input-parent-valid">
                                            <select name="caseType" id="caseType" class="form-control">
                                                <option value="">اختر الموظف</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-input d-flex flex-column mb-3">
                                        <label class="mb-2" for="firstName">درجة الموظف</label>
                                        <div class="input-parent-valid">
                                            <input name="firstName" type="text" placeholder="درجة الموظف" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-body">
                    <div class="user-info">
                        <div class="header-title">
                            <h5>إضافة دفعة</h5>
                        </div>
                        <div class="container my-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-input d-flex flex-column mb-3">
                                        <label class="mb-2" for="firstName">اسم الدفعة</label>
                                        <div class="input-parent-valid">
                                            <input name="firstName" type="text" placeholder="اسم الدفعة" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-input d-flex flex-column mb-3">
                                        <label class="mb-2" for="firstName">قيمة الدفعة</label>
                                        <div class="input-parent-valid">
                                            <input name="firstName" type="text" placeholder="قيمة الدفعة" value="" />
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
            <button class="cancel-btn">إلغاء</button>
            <button class="add-user-btn loader-btn" type="submit">تحديث<span class="loader"></span></button>
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
