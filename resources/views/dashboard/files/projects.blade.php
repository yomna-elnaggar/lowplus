@extends('dashboard.layouts.app')

@section('content')

<div class="container projects-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> لوحة التحكم </a></li>
                <li class="breadcrumb-item active" aria-current="page"> المشاريع </li>
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

            <div class="d-flex flex-column form-input">
                <i class="fa-regular fa-magnifying-glass"></i>
                <input type="text" name="" placeholder="ابحث عن ..." />
            </div>

        </div>

        <div class="d-flex align-items-center project-num">
            <i class="fa-regular fa-square-kanban mx-2"></i>
            <p class="mb-0 fw-500"> 12 مشروع </p>
        </div>

    </div>

    <div class="row gy-3">
        <div class="col-lg-4 d-flex">
            <div class="card project-card flex-fill">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5> القضية رقم 1123 </h5>
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

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6> تاريخ البدء : <span> 21/4/2024 </span> </h6>
                    <i class="fa-regular fa-angle-left"></i>
                    <h6> تاريخ الإنتهاء : <span> 21/4/2024 </span> </h6>
                </div>

                <div class="progress-parent mb-4">
                    <h6> إجمالي مستوى التقدم <span class="precent"> %20 </span> </h6>
                    <div class="progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="20"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 20%"></div>
                    </div>
                </div>

                <div class="users-num d-flex align-items-center justify-content-between ">
                    <div class="d-flex align-items-center num-list">
                        <i class="fa-light fa-ballot-check mx-1"></i>
                        <p class="mb-0 mx-1"> 3 </p>
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

        <div class="col-lg-4 d-flex">
            <div class="card project-card flex-fill">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5> القضية رقم 1123 </h5>
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

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6> تاريخ البدء : <span> 21/4/2024 </span> </h6>
                    <i class="fa-regular fa-angle-left"></i>
                    <h6> تاريخ الإنتهاء : <span> 21/4/2024 </span> </h6>
                </div>

                <div class="progress-parent mb-4">
                    <h6> إجمالي مستوى التقدم <span class="precent"> %40 </span> </h6>
                    <div class="progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="40"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 40%"></div>
                    </div>
                </div>

                <div class="users-num d-flex align-items-center justify-content-between ">
                    <div class="d-flex align-items-center num-list">
                        <i class="fa-light fa-ballot-check mx-1"></i>
                        <p class="mb-0 mx-1"> 3 </p>
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

        <div class="col-lg-4 d-flex">
            <div class="card project-card flex-fill">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5> القضية رقم 1123 </h5>
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

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6> تاريخ البدء : <span> 21/4/2024 </span> </h6>
                    <i class="fa-regular fa-angle-left"></i>
                    <h6> تاريخ الإنتهاء : <span> 21/4/2024 </span> </h6>
                </div>

                <div class="progress-parent mb-4">
                    <h6> إجمالي مستوى التقدم <span class="precent"> %70 </span> </h6>
                    <div class="progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="70"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                </div>

                <div class="users-num d-flex align-items-center justify-content-between ">
                    <div class="d-flex align-items-center num-list">
                        <i class="fa-light fa-ballot-check mx-1"></i>
                        <p class="mb-0 mx-1"> 3 </p>
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

        <div class="col-lg-4 d-flex">
            <div class="card project-card flex-fill">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5> القضية رقم 1123 </h5>
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

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6> تاريخ البدء : <span> 21/4/2024 </span> </h6>
                    <i class="fa-regular fa-angle-left"></i>
                    <h6> تاريخ الإنتهاء : <span> 21/4/2024 </span> </h6>
                </div>

                <div class="progress-parent mb-4">
                    <h6> إجمالي مستوى التقدم <span class="precent"> %90 </span> </h6>
                    <div class="progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="90"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 90%"></div>
                    </div>
                </div>

                <div class="users-num d-flex align-items-center justify-content-between ">
                    <div class="d-flex align-items-center num-list">
                        <i class="fa-light fa-ballot-check mx-1"></i>
                        <p class="mb-0 mx-1"> 3 </p>
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

        <div class="col-lg-4 d-flex">
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

@endsection

@section('footer')
<script>
    const progressBars = document.querySelectorAll('.progress-bar');

    function updateProgressBarColor() {
        progressBars.forEach(progressBar => {
            const ariaValueNow = parseInt(progressBar.parentElement.getAttribute('aria-valuenow'));
            if (ariaValueNow >= 0 && ariaValueNow < 25) {
                progressBar.style.background = "rgba(197, 0, 48, 1)"
            } else if (ariaValueNow >= 25 && ariaValueNow < 50) {
                progressBar.style.background = "#ffc107"
            } else if (ariaValueNow >= 50 && ariaValueNow < 75) {
                progressBar.style.background = "rgba(36, 66, 125, 1)"
            } else if (ariaValueNow >= 75 && ariaValueNow <= 100) {
                progressBar.style.background = "#4DB847"
            }
        });
    }

    updateProgressBarColor();
</script>
@endsection
