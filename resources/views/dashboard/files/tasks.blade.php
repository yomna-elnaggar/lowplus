@extends('dashboard.layouts.app')

@section('content')

<div class="container projects-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> لوحة التحكم </a></li>
                <li class="breadcrumb-item active" aria-current="page"> المهام </li>
            </ol>
        </nav>

    </div>

    <div class="mb-4 mob-dir">
        <div class="d-flex align-items-center filt-dir">
            <div class="hide-p">
                <div class="filter-collapse" data-bs-toggle="collapse" href="#collapseExample1" role="button"
                    aria-expanded="false" aria-controls="collapseExample1">
                    <p class="m-0 d-flex"> <span class="sp-ico"> <i class="fa-solid fa-filter"></i> </span> تصنيف </p>
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

            <div class="filter-collapse">
                <p class="m-0 d-flex"> <span class="sp-ico"> <i class="fa-regular fa-arrow-down-wide-short"></i> </span>
                    ترتيب
                </p>
            </div>

            <div class="d-flex flex-column form-input">
                <i class="fa-regular fa-magnifying-glass"></i>
                <input type="text" name="" placeholder="ابحث عن ..." />
            </div>

        </div>

        <div class="d-flex align-items-center project-num">
            <i class="fa-regular fa-square-kanban mx-2"></i>
            <p class="mb-0 fw-500"> 73 مهمة </p>
        </div>

    </div>

    <div class="row gy-3 row-mob-task">

        <div class="task-parent task-sec2">
            <h5> جارى البدء <span class="start-num"> 1 </span> </h5>
            <div class="card project-card flex-fill mb-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault111">
                        <label class="form-check-label" for="flexCheckDefault111">
                            إنشاء ملف القضية
                        </label>
                    </div>
                    <div class="dropdown">
                        <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false"></i>
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
                <div class="open-preview" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="important-text important-sec1 d-flex align-items-center">
                            <div class="import-point"></div>
                            <p class="mb-0 mx-2"> هام </p>
                        </div>
                        <div>
                            <p class="mb-0 date-tex"> 21/4/2024 </p>
                        </div>
                    </div>

                    <div class="users-num d-flex align-items-center justify-content-between ">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center num-list">
                                <i class="fa-light fa-message-dots"></i>
                                <p class="mb-0 mx-2"> 3 </p>
                            </div>
                            <div class="d-flex align-items-center num-list">
                                <i class="fa-light fa-paperclip"></i>
                                <p class="mb-0 mx-2"> 3 </p>
                            </div>
                        </div>
                        <div class="users-imgs d-flex">
                            <img class="img1" src="./assets/images/user-logo.jpg" alt="">
                            <img class="img2" src="./assets/images/user-logo.jpg" alt="">
                            <div class="img3">
                                <p class="m-0"> +4 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card project-card flex-fill mb-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault111">
                        <label class="form-check-label" for="flexCheckDefault111">
                            إنشاء ملف القضية
                        </label>
                    </div>
                    <div class="dropdown">
                        <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false"></i>
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
                <div class="open-preview" data-bs-toggle="modal" data-bs-target="#exampleModal2">

                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="important-text important-sec1 d-flex align-items-center">
                            <div class="import-point"></div>
                            <p class="mb-0 mx-2"> هام </p>
                        </div>
                        <div>
                            <p class="mb-0 date-tex"> 21/4/2024 </p>
                        </div>
                    </div>

                    <div class="users-num d-flex align-items-center justify-content-between ">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center num-list">
                                <i class="fa-light fa-message-dots"></i>
                                <p class="mb-0 mx-2"> 3 </p>
                            </div>
                            <div class="d-flex align-items-center num-list">
                                <i class="fa-light fa-paperclip"></i>
                                <p class="mb-0 mx-2"> 3 </p>
                            </div>
                        </div>
                        <div class="users-imgs d-flex">
                            <img class="img1" src="./assets/images/user-logo.jpg" alt="">
                            <img class="img2" src="./assets/images/user-logo.jpg" alt="">
                            <div class="img3">
                                <p class="m-0"> +4 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card project-card add-project-card flex-fill" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <i class="fa-regular fa-plus"></i>
                    <h6> إضافة مشروع جديد </h6>
                </div>
            </div>
        </div>

        <div class="task-parent task-sec2">
            <h5> جارى البدء <span class="start-num"> 1 </span> </h5>
            <div class="card project-card flex-fill mb-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault222">
                        <label class="form-check-label" for="flexCheckDefault222">
                            إنشاء ملف القضية
                        </label>
                    </div>
                    <div class="dropdown">
                        <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false"></i>
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
                <div class="open-preview" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="important-text important-sec2 d-flex align-items-center">
                            <div class="import-point"></div>
                            <p class="mb-0 mx-2"> عادى </p>
                        </div>
                        <div>
                            <p class="mb-0 date-tex"> 21/4/2024 </p>
                        </div>
                    </div>

                    <div class="users-num d-flex align-items-center justify-content-between ">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center num-list">
                                <i class="fa-light fa-message-dots"></i>
                                <p class="mb-0 mx-2"> 3 </p>
                            </div>
                            <div class="d-flex align-items-center num-list">
                                <i class="fa-light fa-paperclip"></i>
                                <p class="mb-0 mx-2"> 3 </p>
                            </div>
                        </div>
                        <div class="users-imgs d-flex">
                            <img class="img1" src="./assets/images/user-logo.jpg" alt="">
                            <img class="img2" src="./assets/images/user-logo.jpg" alt="">
                            <div class="img3">
                                <p class="m-0"> +4 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card project-card flex-fill mb-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault222">
                        <label class="form-check-label" for="flexCheckDefault222">
                            إنشاء ملف القضية
                        </label>
                    </div>
                    <div class="dropdown">
                        <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false"></i>
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
                <div class="open-preview" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="important-text important-sec2 d-flex align-items-center">
                            <div class="import-point"></div>
                            <p class="mb-0 mx-2"> عادى </p>
                        </div>
                        <div>
                            <p class="mb-0 date-tex"> 21/4/2024 </p>
                        </div>
                    </div>

                    <div class="users-num d-flex align-items-center justify-content-between ">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center num-list">
                                <i class="fa-light fa-message-dots"></i>
                                <p class="mb-0 mx-2"> 3 </p>
                            </div>
                            <div class="d-flex align-items-center num-list">
                                <i class="fa-light fa-paperclip"></i>
                                <p class="mb-0 mx-2"> 3 </p>
                            </div>
                        </div>
                        <div class="users-imgs d-flex">
                            <img class="img1" src="./assets/images/user-logo.jpg" alt="">
                            <img class="img2" src="./assets/images/user-logo.jpg" alt="">
                            <div class="img3">
                                <p class="m-0"> +4 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card project-card add-project-card flex-fill" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <i class="fa-regular fa-plus"></i>
                    <h6> إضافة مشروع جديد </h6>
                </div>
            </div>
        </div>

        <div class="task-parent task-sec2">
            <h5> جارى البدء <span class="start-num"> 1 </span> </h5>
            <div class="card project-card flex-fill mb-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault333">
                        <label class="form-check-label" for="flexCheckDefault333">
                            إنشاء ملف القضية
                        </label>
                    </div>
                    <div class="dropdown">
                        <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false"></i>
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
                <div class="open-preview" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="important-text important-sec3 d-flex align-items-center">
                            <div class="import-point"></div>
                            <p class="mb-0 mx-2"> غير هام </p>
                        </div>
                        <div>
                            <p class="mb-0 date-tex"> 21/4/2024 </p>
                        </div>
                    </div>

                    <div class="users-num d-flex align-items-center justify-content-between ">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center num-list">
                                <i class="fa-light fa-message-dots"></i>
                                <p class="mb-0 mx-2"> 3 </p>
                            </div>
                            <div class="d-flex align-items-center num-list">
                                <i class="fa-light fa-paperclip"></i>
                                <p class="mb-0 mx-2"> 3 </p>
                            </div>
                        </div>
                        <div class="users-imgs d-flex">
                            <img class="img1" src="./assets/images/user-logo.jpg" alt="">
                            <img class="img2" src="./assets/images/user-logo.jpg" alt="">
                            <div class="img3">
                                <p class="m-0"> +4 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card project-card flex-fill mb-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault333">
                        <label class="form-check-label" for="flexCheckDefault333">
                            إنشاء ملف القضية
                        </label>
                    </div>
                    <div class="dropdown">
                        <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false"></i>
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
                <div class="open-preview" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="important-text important-sec3 d-flex align-items-center">
                            <div class="import-point"></div>
                            <p class="mb-0 mx-2"> غير هام </p>
                        </div>
                        <div>
                            <p class="mb-0 date-tex"> 21/4/2024 </p>
                        </div>
                    </div>
                    <div class="users-num d-flex align-items-center justify-content-between ">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center num-list">
                                <i class="fa-light fa-message-dots"></i>
                                <p class="mb-0 mx-2"> 3 </p>
                            </div>
                            <div class="d-flex align-items-center num-list">
                                <i class="fa-light fa-paperclip"></i>
                                <p class="mb-0 mx-2"> 3 </p>
                            </div>
                        </div>
                        <div class="users-imgs d-flex">
                            <img class="img1" src="./assets/images/user-logo.jpg" alt="">
                            <img class="img2" src="./assets/images/user-logo.jpg" alt="">
                            <div class="img3">
                                <p class="m-0"> +4 </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card project-card add-project-card flex-fill" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <i class="fa-regular fa-plus"></i>
                    <h6> إضافة مشروع جديد </h6>
                </div>
            </div>
        </div>

    </div>

</div>

  <!--create-Modal -->
  <div class="modal fade project-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> إضافة مهمة </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i
                                class="fa-regular fa-xmark"></i> </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="firstName"> إسم المهمة </label>
                                    <input name="firstName" type="text" placeholder="اكتب الإسم الأخير هنا" value=""
                                        onChange="" />
                                </div>
                            </div>

                            <div class="col-lg-6 select-input">
                                <label class="mb-2" for="name"> إسم المشروع التابع له </label>
                                <select class="js-example-basic-single form-control">
                                    <option value="1"> الحالة رقم 1 </option>
                                    <option value="2"> الحالة رقم 2 </option>
                                    <option value="3"> الحالة رقم 3 </option>
                                </select>
                            </div>

                            <div class="col-lg-6 select-input">
                                <label class="mb-2" for="name"> الحالة </label>
                                <select class="js-example-basic-single form-control">
                                    <option value="1"> تم الإنتهاء </option>
                                    <option value="2"> تم الإنتهاء </option>
                                    <option value="3"> تم الإنتهاء </option>
                                </select>
                            </div>

                            <div class="col-lg-6 select-input">
                                <label class="mb-2" for="name"> الأولوية </label>
                                <select class="js-example-basic-single form-control">
                                    <option value="1"> عاجل </option>
                                    <option value="2"> عاجل </option>
                                    <option value="3"> عاجل </option>
                                </select>
                            </div>

                            <div class="date-picker col-lg-6">
                                <label class="mb-2" for="name"> التاريخ </label>
                                <input id="datepicker1" type="text" class="datepicker form-control"
                                    placeholder="حدد تاريخ البدء">
                            </div>


                            <div class="col-lg-6 select-input">
                                <label class="mb-2" for="name"> المسند إليهم </label>
                                <select class="js-example-basic-single form-control">
                                    <option value="1"> تم الإنتهاء </option>
                                    <option value="2"> تم الإنتهاء </option>
                                    <option value="3"> تم الإنتهاء </option>
                                </select>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-input d-flex flex-column">
                                    <label class="mb-2" for="message"> وصف المهمة <span class="valid-icon"> * </span>
                                    </label>
                                    <textarea name="message" id="" cols="2" rows="2"
                                        placeholder="اكتب الوصف الخاص بالمهمة"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <label class="mb-2" for="name"> الملفات المرفقة </label>
                                <div id="drop-area">
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <h6> إستيراد ملف </h6>
                                    <p> قم بسحب أو إسقاط الملف هنا </p>
                                    <input type="file" id="fileInput" multiple style="display: none;">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="cancel-btn" data-bs-dismiss="modal">إلغاء</button>

                        <button type="button" class="add-project-btn">إضافة مشروع</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- preview-Modal -->
        <div class="modal fade project-modal preview-modal" id="exampleModal2" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> إنشاء ملف القضية </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i
                                class="fa-regular fa-xmark"></i> </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="task-info">
                                    <h4> إنشاء ملف القضية </h4>
                                    <div>
                                        <h6> إسم المشروع التابع له : </h6>
                                        <h5> القضية رقم 1123 </h5>
                                    </div>
                                    <div>
                                        <h6> التاريخ : </h6>
                                        <h5> 12/4/2024 </h5>
                                    </div>
                                    <div>
                                        <h6> الحالة : </h6>
                                        <h5> جاري البدء </h5>
                                    </div>
                                    <div>
                                        <h6> الأولوية : </h6>
                                        <h5> عاجل </h5>
                                    </div>
                                    <div>
                                        <h6> المسند إليهم : </h6>
                                        <ul>
                                            <li> محمد علاء محمد </li>
                                            <li> خالد على أحمد </li>
                                            <li> أحمد عماد الطوخي </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h6> وصف المهمة : </h6>
                                        <p> إنها سلسلة من الكلمات اللاتينية التي ، عند وضعها في موضعها ، لا تشكل جملًا
                                            بمعنى كامل. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="task-btns mb-4">
                                    <button class="preview-route1"> الأنشطة <span class="start-num"> 22 </span> </button>
                                    <button class="preview-route2"> الكومنتات <span class="start-num"> 10 </span> </button>
                                    <button class="preview-route3"> الملفات <span class="start-num"> 8 </span> </button>
                                </div>

                                <div id="route1">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="imgBx"><img src="assets/images/user-logo.jpg" alt=""></div>
                                        <div>
                                            <h6> عبد الحميد السيد <span> قام بإضافة كومنت جديد على مهمة </span> إنشاء
                                                ملف القضية </h6>
                                            <p class="mb-0"> 21/4/2024 - 12:00 AM </p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mb-3">
                                        <div class="imgBx"><img src="assets/images/user-logo.jpg" alt=""></div>
                                        <div>
                                            <h6> عبد الحميد السيد <span> قام بإضافة كومنت جديد على مهمة </span> إنشاء
                                                ملف القضية </h6>
                                            <p class="mb-0"> 21/4/2024 - 12:00 AM </p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mb-3">
                                        <div class="imgBx"><img src="assets/images/user-logo.jpg" alt=""></div>
                                        <div>
                                            <h6> عبد الحميد السيد <span> قام بإضافة كومنت جديد على مهمة </span> إنشاء
                                                ملف القضية </h6>
                                            <p class="mb-0"> 21/4/2024 - 12:00 AM </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="route2">
                                    <div class="all-comments">
                                    <div class="parent-comment mb-3">
                                        <div class="d-flex align-items-start justify-content-between mb-1">
                                            <div class="d-flex align-items-start">
                                                <div class="imgBx"><img src="assets/images/user-logo.jpg" alt=""></div>
                                                <div>
                                                    <h6> عبد الحميد السيد </h6>
                                                    <p class="mb-0"> 21/4/2024 - 12:00 AM </p>
                                                    <div class="comment">
                                                        <p> إنها سلسلة من الكلمات اللاتينية التي ، عند وضعها في موضعها. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <div class="d-flex align-items-center justify-content-between sec">
                                                        <p> تعديل </p>
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between sec delet-sec">
                                                        <p> حذف </p>
                                                        <i class="fa-regular fa-trash-can"></i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="parent-comment mb-3">
                                        <div class="d-flex align-items-start justify-content-between mb-1">
                                            <div class="d-flex align-items-start">
                                                <div class="imgBx"><img src="assets/images/user-logo.jpg" alt=""></div>
                                                <div>
                                                    <h6> عبد الحميد السيد </h6>
                                                    <p class="mb-0"> 21/4/2024 - 12:00 AM </p>
                                                    <div class="comment">
                                                        <p> إنها سلسلة من الكلمات اللاتينية التي ، عند وضعها في موضعها. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <div class="d-flex align-items-center justify-content-between sec">
                                                        <p> تعديل </p>
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between sec delet-sec">
                                                        <p> حذف </p>
                                                        <i class="fa-regular fa-trash-can"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                    <div class="add-comment my-5">
                                        <div class="d-flex align-items-center">
                                            <div class="imgBx"><img src="assets/images/user-logo.jpg" alt=""></div>
                                            <textarea name="" id="" cols="30" rows="3"
                                                placeholder="أضف كومنت ..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <button class=comment-btn> نشر </button>
                                        </div>
                                    </div>
                                    <div>

                                    </div>
                                </div>
                                <div id="route3">
                                    <div class="all-files">
                                    <div class="files-uploaded mb-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-light fa-file-lines"></i>
                                                <div class="mx-3">
                                                    <h6> ملف القضية - pdf </h6>
                                                    <p class="mb-0"> عبد الحميد السيد - 21/4/2024 - 12:00 AM </p>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <div class="d-flex align-items-center justify-content-between sec">
                                                        <p> تعديل </p>
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between sec delet-sec">
                                                        <p> حذف </p>
                                                        <i class="fa-regular fa-trash-can"></i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="files-uploaded mb-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-light fa-file-lines"></i>
                                                <div class="mx-3">
                                                    <h6> ملف القضية - pdf </h6>
                                                    <p class="mb-0"> عبد الحميد السيد - 21/4/2024 - 12:00 AM </p>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <div class="d-flex align-items-center justify-content-between sec">
                                                        <p> تعديل </p>
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between sec delet-sec">
                                                        <p> حذف </p>
                                                        <i class="fa-regular fa-trash-can"></i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                        <div id="drop-area2">
                                            <i class="fa-solid fa-cloud-arrow-up"></i>
                                            <h6> إستيراد ملف </h6>
                                            <p> قم بسحب أو إسقاط الملف هنا </p>
                                            <input type="file" id="fileInput2" multiple style="display: none;">
                                        </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('footer')
<script>
    $('#route2').hide();
    $('#route3').hide();
    $('.preview-route2').removeClass('active-preview');
    $('.preview-route3').removeClass('active-preview');
    $('.preview-route1').addClass("active-preview");

    $('.preview-route1').click(function () {
        $('#route1').show();
        $('#route2').hide();
        $('#route3').hide();
        $('.preview-route2').removeClass('active-preview');
        $('.preview-route3').removeClass('active-preview');
        $('.preview-route1').addClass("active-preview");
        $(document).ready(function () {

        });
    });

    $('.preview-route2').click(function () {
        $('#route2').show();
        $('#route1').hide();
        $('#route3').hide();
        $('.preview-route1').removeClass('active-preview');
        $('.preview-route3').removeClass('active-preview');
        $('.preview-route2').addClass("active-preview");
        $(document).ready(function () {

        });

    });

    $('.preview-route3').click(function () {
        $('#route3').show();
        $('#route1').hide();
        $('#route2').hide();
        $('.preview-route1').removeClass('active-preview');
        $('.preview-route2').removeClass('active-preview');
        $('.preview-route3').addClass("active-preview");
        $(document).ready(function () {

        });

    });

</script>

<script>
    const dropArea = document.getElementById('drop-area');

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    ['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, unhighlight, false);
    });

    function highlight() {
        dropArea.classList.add('active');
    }

    function unhighlight() {
        dropArea.classList.remove('active');
    }

    dropArea.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;

        handleFiles(files);
    }

    function handleFiles(files) {
        [...files].forEach(uploadFile);
    }

    function uploadFile(file) {
        const formData = new FormData();
        formData.append('file', file);

        // You can perform further actions here, like uploading the file to a server
        console.log('File uploaded:', file.name);
    }

    const fileInput = document.getElementById('fileInput');
    fileInput.addEventListener('change', function() {
        handleFiles(this.files);
    });

    // Allow click on the drop area to trigger file input click
    dropArea.addEventListener('click', function() {
        fileInput.click();
    });
</script>

<script>
    const dropArea2 = document.getElementById('drop-area2');

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea2.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    ['dragenter', 'dragover'].forEach(eventName => {
        dropArea2.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropArea2.addEventListener(eventName, unhighlight, false);
    });

    function highlight() {
        dropArea2.classList.add('active');
    }

    function unhighlight() {
        dropArea2.classList.remove('active');
    }

    dropArea2.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;

        handleFiles(files);
    }

    function handleFiles(files) {
        [...files].forEach(uploadFile);
    }

    function uploadFile(file) {
        const formData = new FormData();
        formData.append('file', file);

        // You can perform further actions here, like uploading the file to a server
        console.log('File uploaded:', file.name);
    }

    const fileInput2 = document.getElementById('fileInput2');
    fileInput2.addEventListener('change', function() {
        handleFiles(this.files);
    });

    // Allow click on the drop area to trigger file input click
    dropArea2.addEventListener('click', function() {
        fileInput2.click();
    });
</script>
@endsection