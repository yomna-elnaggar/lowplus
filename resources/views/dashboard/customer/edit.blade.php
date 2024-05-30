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
                <li class="breadcrumb-item"> العملاء </li>
                <li class="breadcrumb-item active" aria-current="page"> تعديل عميل </li>
            </ol>
        </nav>
    </div>
    
    <form id="myForm" autocomplete="off" class="needs-validation" novalidate method="POST" action="{{ route('customer.update', $customer->id) }}" data-type="customers" enctype="multipart/form-data" onsubmit="return validatePassword()">
        @csrf
        @method('PUT')
        <input type="hidden" name="customer_number" value="{{ $customer->customer_number }}" >
        
        <div class="user-info">
            <div class="header-title">
                <h5> البيانات الشخصية </h5>
            </div>
            <div class="container my-4">
                <div class="row">
                    <div class="d-flex mob-changeImg col-lg-12">
                        <div class="col-lg-6">
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="name"> اسم العميل <span style="color: red;">*</span> </label>
                                <input name="name" type="text" placeholder="اسم العميل" value="{{ $customer->name }}" required />
                            </div>
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="phone"> رقم الهاتف <span style="color: red;">*</span></label>
                                <input name="phone" type="text" placeholder="رقم الهاتف" value="{{ $customer->phone }}" required />
                            </div>
                        </div>

                        <div class="col-lg-6 d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <div class="position-relative d-inline-block w-300" style="width: 180px;">
                                    <input class="form-control dropify" name="image" data-default-file="{{$customer->image? url($customer->image) :'' }}" id="product-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex mob-changeImg col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="country"> الدولة <span style="color: red;">*</span> </label>
                                    <input type="text" class="form-control" id="country" required name="country" value="{{ $customer->country }}" placeholder="اسم الدولة">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="city"> المدينة <span style="color: red;">*</span> </label>
                                    <input type="text" class="form-control" id="city" name="city" value="{{ $customer->city }}" placeholder="اكتب اسم المدينة">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="region"> الحي</label>
                                    <input type="text" class="form-control" id="region" name="region" value="{{ $customer->region }}" placeholder="اكتب اسم الحي">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex mob-changeImg col-lg-12">
                        <div class="col-lg-6">
                            <div class="row mt-3"> <!-- Added mt-3 class for margin-top -->
                                <div class="form-input d-flex flex-column">
                                    <label for="address"> العنوان التفصيلي ( الشارع - رقم المبنى ) </label>
                                    <input type="text" name="address" value="{{ $customer->address }}" class="form-control" id="address">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        </div>
                    </div>  
                </div>
            </div>

            <div class="col-lg12 d-flex">
                <div class="user-info flex-fill">
                    <div class="header-title">
                        <h5> المرفقات </h5>
                    </div>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-lg-12">
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
            </div>
        </div>

        <div class="row my-4">
            <div class="col-lg-6 d-flex">
                <div class="user-info flex-fill">
                    <div class="header-title">
                        <h5> معلومات العميل </h5>
                    </div>
                    <div class="container my-4">
                        <div class="col-lg-12 mb-3">
                            <div class="form-input d-flex flex-column">
                                <label for="type">نوع العميل <span class="required-astric" style="color: #e60d0d;font-size: 18px;margin-right: 5px;">*</span> </label>
                                <select class="form-select" id="type" name="type" aria-label="Floating label select example">
                                    <option selected disabled>اختر نوع العميل</option>
                                    <option value="customer" {{ $customer->type == 'customer' ? 'selected' : '' }}> فرد </option>
                                    <option value="company" {{ $customer->type == 'company' ? 'selected' : '' }}> شركة </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-input d-flex flex-column">
                            <label for="file_number"> رقم العميل</label>
                            <input type="text" name="customer_number" required value="{{ $customer->customer_number }}" readonly class="form-control" id="file_number" placeholder="اسم العميل">
                        </div>
                    </div>

                    <div class="user-info flex-fill" id="nationalcontainer">
                        <div class="header-title">
                            <h5>معلومات الهوية  </h5>
                        </div>
                        <div class="container my-4">
                            <div class="form-input d-flex flex-column">
                                <label for="national_id"> رقم الهوية</label>
                                <input type="text" name="national_id" value="{{ $customer->national_id }}" class="form-control" id="national_id">
                            </div>
                            <div class="form-input d-flex flex-column"> 
                                <label for="national_image"> صورة الهوية </label>
                                <input type="file" name="national_image" class="form-control dropify" data-default-file="{{ $customer->national_image ? url($customer->national_image) : '' }}" id="national_image">
                            </div>
                        </div>
                    </div>

                    <div class="user-info flex-fill" id="taxcontainer">
                        <div class="header-title">
                            <h5>معلومات الشركة   </h5>
                        </div>
                        <div class="container my-4">
                            <div class="form-input d-flex flex-column">
                                <label for="tax_number2"> الرقم الضريبي</label>
                                <input type="text" name="tax_number2" value="{{ $customer->tax_number2 }}" required class="form-control" id="tax_number2">
                            </div>
                            <div class="form-input d-flex flex-column">
                                <label for="tax_number"> السجل التجاري</label>
                                <input type="text" name="tax_number" value="{{ $customer->tax_number }}" required class="form-control" id="tax_number">
                            </div>
                            <div class="form-input d-flex flex-column">
                                <label for="tax_image"> صورة السجل التجاري </label>
                                <input type="file" name="tax_image" class="form-control dropify" data-default-file="{{$customer->tax_image? url($customer->tax_image): '' }}" id="tax_image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex">
                <div class="user-info flex-fill">
                    <div class="header-title">
                        <h5> بيانات الحساب </h5>
                    </div>
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="email"> البريد الإلكتروني </label>
                                    <input name="email" type="text" placeholder="اكتب البريد الإلكتروني هنا" value="{{ $customer->email }}" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="password"> كلمة المرور </label>
                                    <input name="password" type="password" placeholder="اكتب كلمة المرور هنا" value="" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="confirmPassword"> تأكيد كلمة المرور </label>
                                    <input name="confirmPassword" id="confirmPassword" type="password" placeholder="اكتب تأكيد كلمة المرور هنا" value="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-end my-2">
            <button class="cancel-btn"> إلغاء </button>
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

        const typeElement = document.getElementById('type');
        const nationalContainer = document.getElementById('nationalcontainer');
        const taxContainer = document.getElementById('taxcontainer');

        // Initially show/hide containers based on customer type
        handleTypeChange();

        // Function to handle type change
        function handleTypeChange() {
            const type = typeElement.value;
            if (type === 'customer') {
                nationalContainer.style.display = 'block';
                taxContainer.style.display = 'none';
            } else if (type === 'company') {
                nationalContainer.style.display = 'none';
                taxContainer.style.display = 'block';
            }
        }

        // Event listener for type change
        typeElement.addEventListener('change', handleTypeChange);

        function validatePassword() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            if (password != confirmPassword) {
                alert("كلمة المرور وتأكيد كلمة المرور غير متطابقين!");
                document.getElementById("confirmPassword").value = "";
                document.getElementById("confirmPassword").focus();
                return false;
            }
            return true;
        }
    });
</script>
@endsection
