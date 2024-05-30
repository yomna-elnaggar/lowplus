@extends('dashboard.layouts.app')

@section('content')
<div class="container user-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> لوحة التحكم </a></li>
                <li class="breadcrumb-item"> الجلسات </li>
                <li class="breadcrumb-item active" aria-current="page"> تعديل جلسة </li>
            </ol>
        </nav>
    </div>

    <form>
        <div class="user-info">
            <div class="header-title">
                <h5> البيانات الجلسة </h5>
            </div>
            <div class="container my-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-input d-flex flex-column mb-3">
                            <label class="mb-2" for="caseType"> اختر القضية </label>
                            <div class="input-parent-valid">
                                <select name="caseType" id="caseType" class="form-control">
                                    <option value=""> اختر  القضية </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-input d-flex flex-column mb-3">
                            <label class="mb-2" for="caseNumber"> تاريخ الجلسة </label>
                            <div class="input-parent-valid">
                                <input name="caseNumber" type="date" placeholder="اختر تاريخ الجلسة" value="" onChange="" />
                            </div>  
                        </div>

                        <div class="form-input d-flex flex-column mb-3">
                            <label class="mb-2" for="caseNumber"> متطلبات الجلسة </label>
                            <div class="input-parent-valid">
                                <textarea name="caseNumber" placeholder=" متطلبات الجلسة" rows="4" onChange="" style="width:100%"></textarea>
                            </div>
                        </div>

                        <div class="form-input d-flex flex-column mb-3">
                            <label class="mb-2" for="lastName">  رابط الجلسة  </label>
                            <div class="input-parent-valid">
                                <input name="lastName" type="text" placeholder=" رابط الجلسة " value="" onChange="" />
                            </div> 
                        </div>

                        <div class="form-input d-flex flex-column mb-3">
                            <label class="mb-2" for="caseNumber"> وقت الجلسة </label>
                            <div class="input-parent-valid">
                                <input name="caseNumber" type="time" placeholder="اختر وقت الجلسة" value="" onChange="" />
                            </div>
                        </div>

                        <div class="form-input d-flex flex-column mb-3">
                            <label class="mb-2" for="caseNumber"> ملاحظات الجلسة </label>
                            <div class="input-parent-valid">
                                <textarea name="caseNumber" placeholder=" ملاحظات الجلسة" rows="4" onChange="" style="width:100%"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <label class="mb-2" for="caseType">   ملفات الجلسة </label>
                        <div id="drop-area2" class="drop-area">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                            <h6> إستيراد ملف </h6>
                            <p> قم بسحب أو إسقاط الملف هنا </p>
                            <input type="file" id="fileInput2" multiple style="display: none;">
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
                                    <label class="mb-2" for="firstName">اسم المحكمة</label>
                                    <div class="input-parent-valid">
                                        <input name="firstName" type="text" placeholder="اسم المحكمة" value="" onChange="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-input d-flex flex-column mb-3">
                                    <label class="mb-2" for="firstName">المدينة</label>
                                    <div class="input-parent-valid">
                                        <input name="firstName" type="text" placeholder="المدينة" value="" onChange="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-input d-flex flex-column mb-3">
                                    <label class="mb-2" for="firstName">الدائرة</label>
                                    <div class="input-parent-valid">
                                        <input name="firstName" type="text" placeholder="الدائرة" value="" onChange="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input d-flex flex-column mb-3">
                                    <label class="mb-2" for="text">اسم القاضي</label>
                                    <input name="text" type="text" placeholder="اسم القاضي" value="" onChange="" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input d-flex flex-column mb-3">
                                    <label class="mb-2" for="text">درجة الترافع</label>
                                    <input name="text" type="text" placeholder="درجة الترافع" value="" onChange="" />
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
                            <h5> البيانات الموظفين </h5>
                        </div>
                        <div class="container my-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-input d-flex flex-column mb-3">
                                        <label class="mb-2" for="caseType"> اختر  الموظف </label>
                                        <div class="input-parent-valid">
                                            <select name="caseType" id="caseType" class="form-control">
                                                <option value=""> اختر الموظف  </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-input d-flex flex-column mb-3">
                                        <label class="mb-2" for="firstName">    درجة الموظف </label>
                                        <div class="input-parent-valid">
                                            <input name="firstName" type="text" placeholder=" درجة الموظف"
                                                value="" onChange="" />
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
                            <h5> اضافة دفعة </h5>
                        </div>
                        <div class="container my-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-input d-flex flex-column mb-3">
                                        <label class="mb-2" for="firstName">  اسم الدفعة </label>
                                        <div class="input-parent-valid">
                                            <input name="firstName" type="text" placeholder="  اسم الدفعة"
                                                value="" onChange="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-input d-flex flex-column mb-3">
                                        <label class="mb-2" for="firstName">   قيمة الدفعة </label>
                                        <div class="input-parent-valid">
                                            <input name="firstName" type="text" placeholder="   قيمة الدفعة"
                                                value="" onChange="" />
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
            <button class="cancel-btn"> إلغاء </button>
            <button class="add-user-btn loader-btn" type="submit"> <span class="loader"></span> </button>
        </div>
    </form>    
</div>
@endsection
