@extends('dashboard.layouts.app')

@section('content')

<div class="container user-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> لوحة التحكم </a></li>
                <li class="breadcrumb-item"> المستخدمين </li>
                <li class="breadcrumb-item active" aria-current="page"> إضافة مستخدم </li>
            </ol>
        </nav>

    </div>

    <div class="user-info">
        <div class="header-title">
            <h5> البيانات الشخصية </h5>
        </div>
        <div class="container my-4">
            <div class="row">
                <div class="d-flex mob-changeImg col-lg-12">
                    <div class="col-lg-6">
                        <div class="form-input d-flex flex-column">
                            <label class="mb-2" for="firstName"> الإسم الأول </label>
                            <input name="firstName" type="text" placeholder="اكتب الإسم الأول هنا" value=""
                                onChange="" />
                        </div>
                        <div class="form-input d-flex flex-column">
                            <label class="mb-2" for="lastName"> الإسم الأخير </label>
                            <input name="lastName" type="text" placeholder="اكتب الإسم الأخير هنا" value=""
                                onChange="" />
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="change-img d-flex">
                            <div>
                                <div class="d-flex align-items-center">
                                    <input type="file" id="file-input" style="display:none;" accept=".jpg, .png, .gif"
                                        onchange="previewImage(event)">
                                    <div class="imgBx2 change-btn">
                                        <i class="fa-solid fa-camera" onclick="triggerFileInput(event)"></i>
                                        <img id="profile-image" src="assets/images/change-img1.png" alt=""
                                            onclick="triggerFileInput(event)">
                                        <i class="fa-regular fa-circle-xmark" onclick="deleteImage()"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="form-input d-flex flex-column">
                        <label class="mb-2" for="firstName"> رقم الموبايل </label>
                        <input name="firstName" type="text" placeholder="اكتب رقم الموبايل هنا" value="" onChange="" />
                    </div>
                    <div class="form-input d-flex flex-column">
                        <label class="mb-2" for="lastName"> إسم الشركة </label>
                        <input name="lastName" type="text" placeholder="اكتب إسم الشركة هنا" value="" onChange="" />
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="row my-4">
        <div class="col-lg-6 d-flex">
            <div class="user-info flex-fill">
                <div class="header-title">
                    <h5> البيانات الشخصية </h5>
                </div>
                <div class="container my-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-input not-valid-input d-flex flex-column">
                                <label class="mb-2" for="firstName"> البريد الإلكتروني </label>
                                <div class="input-parent-valid">
                                    <input name="firstName" type="text" placeholder="اكتب البريد الإلكتروني هنا"
                                        value="" onChange="" />
                                    <p class="mb-0 valid-text"> يرجب ادخال البريد الالكتروني </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="password"> كلمة المرور </label>
                                <input name="password" type="password" placeholder="اكتب كلمة المرور هنا" value=""
                                    onChange="" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="confirmPassword"> تأكيد كلمة المرور </label>
                                <input name="confirmPassword" type="password" placeholder="اكتب تأكيد كلمة المرور هنا"
                                    value="" onChange="" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="status" class="mb-2"> الحالة </label>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                    <label class="form-check-label" for="flexCheckDefault1">
                                        مفعل
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        غير مفعل
                                    </label>
                                </div>
                            </div>

                            <label for="status" class="mb-2"> الحالة </label>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        مفعل
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        غير مفعل
                                    </label>
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
                    <h5> بيانات الحساب </h5>
                </div>
                <div class="container my-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="firstName"> البريد الإلكتروني </label>
                                <input name="firstName" type="text" placeholder="اكتب البريد الإلكتروني هنا" value=""
                                    onChange="" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="password"> كلمة المرور </label>
                                <input name="password" type="password" placeholder="اكتب كلمة المرور هنا" value=""
                                    onChange="" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="confirmPassword"> تأكيد كلمة المرور </label>
                                <input name="confirmPassword" type="password" placeholder="اكتب تأكيد كلمة المرور هنا"
                                    value="" onChange="" />
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
            <p> البيانات الشخصية </p>
            <div>
                <i class="fa-solid fa-angle-down coll-icon"></i>
                <i class="fa-solid fa-angle-up coll-icon2"></i>
            </div>
        </div>

        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <div class="user-info">
                    <div class="container my-4">
                        <div class="row">
                            <div class="d-flex mob-changeImg col-lg-12">
                                <div class="col-lg-6">
                                    <div class="form-input d-flex flex-column">
                                        <label class="mb-2" for="firstName"> الإسم الأول </label>
                                        <input name="firstName" type="text" placeholder="اكتب الإسم الأول هنا" value=""
                                            onChange="" />
                                    </div>
                                    <div class="form-input d-flex flex-column">
                                        <label class="mb-2" for="lastName"> الإسم الأخير </label>
                                        <input name="lastName" type="text" placeholder="اكتب الإسم الأخير هنا" value=""
                                            onChange="" />
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="firstName"> رقم الموبايل </label>
                                    <input name="firstName" type="text" placeholder="اكتب رقم الموبايل هنا" value=""
                                        onChange="" />
                                </div>
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="lastName"> إسم الشركة </label>
                                    <input name="lastName" type="text" placeholder="اكتب إسم الشركة هنا" value=""
                                        onChange="" />
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-end my-5">
        <button class="cancel-btn"> إلغاء </button>
        <button class="add-user-btn loader-btn"> <span class="loader"></span> </button>
    </div>

</div>

@endsection