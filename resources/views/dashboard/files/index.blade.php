@extends('dashboard.layouts.app')

@section('content')

<div class="container table-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> لوحة التحكم </a></li>
                <li class="breadcrumb-item active" aria-current="page"> المستخدمين </li>
            </ol>
        </nav>

    </div>

    <!-- filter -->
    <div class=" my-4 all-statics2">
        <div class="row">
            <div class="col-lg-3">
                <div class="statics card">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <i class="fa-sharp fa-solid fa-circle-dollar"></i>
                            <p class="title"> مشاهدة </p>
                        </div>
                        <p class="number"> 550 </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="statics card">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <i class="fa-sharp fa-solid fa-circle-dollar"></i>
                            <p class="title"> مشاهدة </p>
                        </div>
                        <p class="number"> 550 </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="statics card">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <i class="fa-sharp fa-solid fa-circle-dollar"></i>
                            <p class="title"> مشاهدة </p>
                        </div>
                        <p class="number"> 550 </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="statics card">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <i class="fa-sharp fa-solid fa-circle-dollar"></i>
                            <p class="title"> مشاهدة </p>
                        </div>
                        <p class="number"> 550 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- filter -->
    <div class="mb-4 mob-dir">
        <div class="d-flex align-items-center filt-dir">
            <button class="search-btn-add"> <span> <i class="fa-solid fa-plus"></i> </span> إضافة مستخدم
            </button>
            <div class="hide-p">
                <div class="filter-collapse" data-bs-toggle="collapse" href="#collapseExample1" role="button"
                    aria-expanded="false" aria-controls="collapseExample1">
                    <p class="m-0 d-flex"> <span> <i class="fa-solid fa-filter"></i> </span> تصنيف </p>
                </div>

                <div class="collapse collapse-fill" id="collapseExample1">
                    <div class="card card-body filter-body">
                        <div class="mb-3">
                            <label for="status" class="mb-2"> الحالة </label>
                            <select class="js-example-basic-single form-control">
                                <option value="" disabled selected> اختر الحالة </option>
                                <option value="1">Aly1</option>
                                <option value="2">Aly2</option>
                                <option value="3">Aly3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex flex-column form-input">
                                <label for="status" class="mb-2"> الحالة </label>
                                <input class="p-1" type="text" name="" placeholder="" />
                            </div>
                        </div>
                        <div>
                            <label for="status" class="mb-2"> الحالة </label>
                            <div class="form-check my-2">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                <label class="form-check-label" for="flexCheckChecked1">
                                    مفعل
                                </label>
                            </div>
                            <div class="form-check my-2">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                <label class="form-check-label" for="flexCheckChecked2">
                                    غير مفعل
                                </label>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between my-3">
                            <button class="reset-btn"> إعادة تعيين </button>
                            <button class="confirm-btn"> تطبيق </button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="filter-select d-flex">
                <select class="js-example-basic-single form-control">
                    <option value="1">20</option>
                    <option value="2">30</option>
                </select>
                <label class="mb-1 mx-2 d-flex align-items-center justify-content-center"> صف لكل صفحة
                </label>
            </div>
        </div>

        <div class="d-flex align-items-center filt-dir">
            <i class="fa-solid fa-trash"></i>
            <div class="d-flex flex-column form-input col-lg-4">
                <i class="fa-regular fa-magnifying-glass"></i>
                <input type="text" name="" placeholder="ابحث عن ..." />
            </div>
        </div>

    </div>


    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"> <input class="form-check-input" type="checkbox" value="" id="selectAllCheckbox">
                    </th>
                    <th scope="col">الإسم</th>
                    <th scope="col">رقم الموبايل</th>
                    <th scope="col">الحالة</th>
                    <th scope="col">الحالة</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <input class="form-check-input checkall" type="checkbox" value="" id="flexCheckChecked"> </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="imgBx"><img src="assets/images/user-logo.jpg" alt=""></div>
                            <div> علي عبدالهادي علي </div>
                        </div>
                    </td>
                    <td>
                        <div> 01022886619 </div>
                    </td>
                    <td>
                        <p class="active-status"> <i class="fa-solid fa-circle active-circle"></i> مفعل </p>
                    </td>
                    <td>
                        <div class="form-check form-switch d-flex align-items-center justify-content-center">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                checked />
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-eye"></i>
                            <i class="fa-solid fa-pen-to-square main-edit"></i>
                            <div class="dropdown">
                                <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="d-flex align-items-center justify-content-between sec">
                                        <p> تعديل </p>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between sec delet-sec">
                                        <p> حذف </p>
                                        <i class="fa-regular fa-trash-can"></i>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td> <input class="form-check-input checkall" type="checkbox" value="" id="flexCheckChecked"> </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="imgBx"><img src="assets/images/user-logo.jpg" alt=""></div>
                            <div> علي عبدالهادي علي </div>
                        </div>
                    </td>
                    <td>
                        <div> 01022886619 </div>
                    </td>
                    <td>
                        <p class="notactive-status"> <i class="fa-solid fa-circle notactive-circle"></i>
                            معطل </p>
                    </td>
                    <td>
                        <div class="form-check form-switch d-flex align-items-center justify-content-center">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-eye"></i>
                            <i class="fa-solid fa-pen-to-square main-edit"></i>
                            <div class="dropdown">
                                <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="d-flex align-items-center justify-content-between sec">
                                        <p> تعديل </p>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between sec">
                                        <p> حذف </p>
                                        <i class="fa-regular fa-trash-can"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td> <input class="form-check-input checkall" type="checkbox" value="" id="flexCheckChecked"> </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="imgBx"><img src="assets/images/user-logo.jpg" alt=""></div>
                            <div> علي عبدالهادي علي </div>
                        </div>
                    </td>
                    <td>
                        <div> 01022886619 </div>
                    </td>
                    <td>
                        <p class="active-status"> <i class="fa-solid fa-circle active-circle"></i> مفعل </p>
                    </td>
                    <td>
                        <div class="form-check form-switch d-flex align-items-center justify-content-center">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                checked />
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-eye"></i>
                            <i class="fa-solid fa-pen-to-square main-edit"></i>
                            <div class="dropdown">
                                <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="d-flex align-items-center justify-content-between sec">
                                        <p> تعديل </p>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between sec">
                                        <p> حذف </p>
                                        <i class="fa-regular fa-trash-can"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td> <input class="form-check-input checkall" type="checkbox" value="" id="flexCheckChecked"> </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="imgBx"><img src="assets/images/user-logo.jpg" alt=""></div>
                            <div> علي عبدالهادي علي </div>
                        </div>
                    </td>
                    <td>
                        <div> 01022886619 </div>
                    </td>
                    <td>
                        <p class=" notactive-status"> <i class="fa-solid fa-circle notactive-circle"></i>
                            معطل </p>
                    </td>
                    <td>
                        <div class="form-check form-switch d-flex align-items-center justify-content-center">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-eye"></i>
                            <i class="fa-solid fa-pen-to-square main-edit"></i>
                            <div class="dropdown">
                                <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="d-flex align-items-center justify-content-between sec">
                                        <p> تعديل </p>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between sec">
                                        <p> حذف </p>
                                        <i class="fa-regular fa-trash-can"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex align-items-center justify-content-between mt-2 pagen-parent">
            <div>
                <p class="pag-text"> عرض 1 إلى 10 من أصل 12 مدخلاً </p>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</div>

@endsection