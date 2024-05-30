@extends('dashboard.layouts.app')

@section('content')

<div class="container user-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> لوحة التحكم </a></li>
                <li class="breadcrumb-item"> القضايا </li>
                <li class="breadcrumb-item active" aria-current="page"> تعديل القضية </li>
            </ol>
        </nav>

    </div>
    <form>
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
                                    <input name="firstName" type="text" placeholder=" عنوان القضية" value=""
                                        onChange="" />
                                </div>
                            </div>
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="lastName">  رقم القضية  </label>
                                <div class="input-parent-valid">
                                    <input name="lastName" type="text" placeholder=" رقم القضية " value=""
                                        onChange="" />
                                </div>    
                            </div>
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="caseNumber"> تاريخ القضية </label>
                                    <div class="input-parent-valid">
                                        <input name="caseNumber" type="date" placeholder="اختر تاريخ القضية" value="" onChange="" />
                                    </div>
                            </div>
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="lastName">  مبلغ القضية  </label>
                                <div class="input-parent-valid">
                                    <input name="lastName" type="text" placeholder=" مبلغ القضية " value=""
                                        onChange="" />
                                </div>    
                            </div>
                            
                        </div>
                        <div class="col-lg-1"></div><!-- Empty column for spacing -->
                        <div class="col-lg-5 pl-lg-3">
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="caseType"> اختر عميل </label>
                                <div class="input-parent-valid">
                                    <select name="caseType" id="caseType" class="form-control">
                                        <option value=""> اختر  عميل </option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="caseType"> اختر صفة عميل </label>
                                <div class="input-parent-valid">
                                    <select name="caseType" id="caseType" class="form-control">
                                        <option value=""> اختر صفة عميل </option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-input d-flex flex-column">
                                <label class="mb-2" for="caseType"> اختر نوع القضية </label>
                                    <div class="input-parent-valid">
                                        <select name="caseType" id="caseType" class="form-control">
                                            <option value=""> اختر نوع القضية </option>
                                            
                                        </select>
                                    </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <label  for="caseType">   ملفات القضية </label>
                <div id="drop-area2">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <h6> إستيراد ملف </h6>
                    <p> قم بسحب أو إسقاط الملف هنا </p>
                    <input type="file" id="fileInput2" multiple style="display: none;">
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
                                <div class="form-input  d-flex flex-column">
                                    <label class="mb-2" for="firstName">  اسم الخصم </label>
                                    <div class="input-parent-valid">
                                        <input name="firstName" type="text" placeholder="  اسم الخصم"
                                            value="" onChange="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-input  d-flex flex-column">
                                    <label class="mb-2" for="firstName">  رقم هاتف الخصم </label>
                                    <div class="input-parent-valid">
                                        <input name="firstName" type="text" placeholder="  رقم هاتف الخصم"
                                            value="" onChange="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-input  d-flex flex-column">
                                    <label class="mb-2" for="firstName">   عنوان الخصم </label>
                                    <div class="input-parent-valid">
                                        <input name="firstName" type="text" placeholder="  عنوان الخصم"
                                            value="" onChange="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="text"> محامي الخصم </label>
                                    <input name="text" type="text" placeholder="محامي الخصم " value=""
                                        onChange="" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="text"> رقم هاتف محامي الخصم </label>
                                    <input name="text" type="text" placeholder="رقم هاتف محامي الخصم "
                                        value="" onChange="" />
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
                                <div class="form-input  d-flex flex-column">
                                    <label class="mb-2" for="firstName">  اسم المحكمة </label>
                                    <div class="input-parent-valid">
                                        <input name="firstName" type="text" placeholder="  اسم المحكمة"
                                            value="" onChange="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-input  d-flex flex-column">
                                    <label class="mb-2" for="firstName">   المدينة </label>
                                    <div class="input-parent-valid">
                                        <input name="firstName" type="text" placeholder="   المدينة"
                                            value="" onChange="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-input  d-flex flex-column">
                                    <label class="mb-2" for="firstName">  الدائرة  </label>
                                    <div class="input-parent-valid">
                                        <input name="firstName" type="text" placeholder=" الدائرة"
                                            value="" onChange="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="text">   اسم القاضي </label>
                                    <input name="text" type="text" placeholder="اسم القاضي"
                                        value="" onChange="" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="text"> درجة الترافع  </label>
                                    <input name="text" type="text" placeholder="درجة الترافع "
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
                                                    <div class="form-input  d-flex flex-column">
                                                        <label class="mb-2" for="caseType"> اختر  الموظف </label>
                                                        <div class="input-parent-valid">
                                                            <select name="caseType" id="caseType" class="form-control">
                                                                <option value=""> اختر الموظف  </option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-input  d-flex flex-column">
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
                                <div class="col-lg-6 d-flex">
                                    <div class="user-info flex-fill">
                                        <div class="header-title">
                                            <h5> اضافة دفعة </h5>
                                        </div>
                                        <div class="container my-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-input  d-flex flex-column">
                                                        <label class="mb-2" for="firstName">  اسم الدفعة </label>
                                                        <div class="input-parent-valid">
                                                            <input name="firstName" type="text" placeholder="  اسم الدفعة"
                                                                value="" onChange="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-input  d-flex flex-column">
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