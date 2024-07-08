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
                <li class="breadcrumb-item">الموظفون</li>
                <li class="breadcrumb-item active" aria-current="page">تعديل موظف</li>
            </ol>
        </nav>
    </div>

    <form id="myForm" autocomplete="off" class="needs-validation" novalidate method="POST" action="{{ route('employee.update', $employee->id) }}" enctype="multipart/form-data" onsubmit="return validatePassword()">
        @csrf
        @method('PATCH')
        <div class="user-info">
            <div class="header-title">
                <h5>البيانات الشخصية</h5>
            </div>
            <div class="container my-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-input d-flex flex-column">
                            <label class="mb-2" for="name">اسم الموظف<span style="color: red;">*</span></label>
                            <input name="name" type="text" placeholder="اسم الموظف" value="{{ old('name', $employee->name) }}" required />
                        </div>
                        <div class="form-input d-flex flex-column">
                            <label class="mb-2" for="phone">رقم الهاتف<span style="color: red;">*</span></label>
                            <input name="phone" type="text" placeholder="رقم الهاتف" value="{{ old('phone', $employee->phone) }}" required />
                        </div>
                        <div class="form-input d-flex flex-column">
                            <label class="mb-2" for="email">البريد الإلكتروني<span style="color: red;">*</span></label>
                            <input name="email" type="email" placeholder="البريد الإلكتروني" value="{{ old('email', $employee->email) }}" required />
                        </div>
                        <div class="form-input d-flex flex-column">
                            <label class="mb-2" for="password">كلمة المرور</label>
                            <input name="password" id="password" type="password" placeholder="كلمة المرور" />
                        </div>
                        <div class="form-input d-flex flex-column">
                            <label class="mb-2" for="confirmPassword">تأكيد كلمة المرور</label>
                            <input name="confirmPassword" id="confirmPassword" type="password" placeholder="تأكيد كلمة المرور" />
                        </div>
                        <div class="form-input d-flex flex-column">
                            <label class="mb-2" for="address">العنوان<span style="color: red;">*</span></label>
                            <input name="address" type="text" placeholder="العنوان" value="{{ old('address', $employee->address) }}" required />
                        </div>
                        <div class="form-input d-flex flex-column">
                            <label class="mb-2" for="national_id">رقم الهوية<span style="color: red;">*</span></label>
                            <input name="national_id" type="text" placeholder="رقم الهوية" value="{{ old('national_id', $employee->national_id) }}" required />
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="position-relative d-inline-block" style="width: 180px;">
                                <input class="form-control dropify" name="logo" data-default-file="{{ url($employee->logo) }}" id="product-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-input d-flex flex-column mt-4">
                    <label for="category_id">القسم</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        <option value="">اختر القسم</option>
                        @foreach($categories as $item)
                            <option value="{{ $item->id }}" {{ $employee->category_id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-input d-flex flex-column mt-4">
                    <label for="jobtitle_id">المسمى الوظيفي</label>
                    <select name="jobtitle_id" id="jobtitle_id" class="form-control" required>
                        <option value="">اختر المسمى الوظيفي</option>
                        @foreach($jobtitles as $item)
                            <option value="{{ $item->id }}" {{ $employee->jobtitle_id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-input d-flex flex-column mt-4">
                    <label for="role_id">الصلاحية</label>
                    <select name="role_id" id="role_id" class="form-control" required>
                        <option value="">اختر الصلاحية</option>
                        
                    </select>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-end my-2">
            <button class="cancel-btn btn btn-secondary" type="button">إلغاء</button>
            <button class="add-user-btn loader-btn btn btn-primary" type="submit"><span class="loader"></span></button>
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

        // Password validation
        function validatePassword() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            if (password !== confirmPassword) {
                alert("كلمة المرور وتأكيد كلمة المرور غير متطابقين!");
                document.getElementById("confirmPassword").value = "";
                document.getElementById("confirmPassword").focus();
                return false;
            }
            return true;
        }

        // Attach form submit event listener to validate password
        document.getElementById('myForm').addEventListener('submit', function(event) {
            if (document.getElementById("password").value || document.getElementById("confirmPassword").value) {
                if (!validatePassword()) {
                    event.preventDefault();
                }
            }
        });
    });
</script>
@endsection
