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

    <div class="row userInfo-sec">
        <div class="col-lg-4">
            <div class="user-sec">
                <div class="user-imgBx">
                    <img src="assets/images/user-logo.jpg" alt="">
                    <p class="user-name"> علي عبدالهادي </p>
                    <div class="d-flex align-items-center justify-content-between w-100 my-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <i class="fa-solid fa-check-to-slot"></i>
                            <div>
                                <p class="fw-bold"> 500 </p>
                                <p> مهام </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <i class="fa-solid fa-check-to-slot"></i>
                            <div>
                                <p class="fw-bold"> 500 </p>
                                <p> مهام </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <i class="fa-solid fa-check-to-slot"></i>
                            <div>
                                <p class="fw-bold"> 500 </p>
                                <p> مشاريع </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="user-details">
                    <h6> التفاصيل </h6>
                    <p> الاسم : <span> علي عبدالهادي </span> </p>
                    <p> البريد الالكتروني : <span> AlyA-Elhady@gmail.com </span> </p>
                    <p> الحالة : <span> نشط </span> </p>
                    <p> السماحية : <span> نشط </span> </p>
                    <p> رقم الضريبي : <span> 894523 </span> </p>
                    <p> رقم الهاتف : <span> 0101010100 </span> </p>
                    <p> اللغة : <span> العربية </span> </p>
                    <p> الدولة : <span> مصر </span> </p>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-3">
                    <button class="follow-btn"> متابعة </button>
                    <button class="delete-btn"> حذف الحساب </button>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="mb-3 navig-btns">
                <button class="user-info-route1"> <span><i class="fa-solid fa-lock"></i></span> الحماية
                </button>
                <button class="user-info-route2"> <span><i class="fa-regular fa-window-maximize"></i></span>
                    المعلومات </button>
            </div>
            <div id="route1" class="user-sec">
                <h6> تغيير كلمة السر </h6>
                <div class="validate-sec">
                    <p class="fw-bold">Ensure that these requirements are met </p>
                    <p> Minimum 8 Characters long uppercase & symbol </p>
                </div>
                <div class="row">
                    <div class="d-flex flex-column form-input w-50 col-xl-6 my-3">
                        <label class="mb-2" for="name"> كلمة السر الجديدة </label>
                        <input type="password" name="" placeholder="كلمة السر الجديدة " />
                    </div>

                    <div class="d-flex flex-column form-input w-50 col-xl-6 my-3">
                        <label class="mb-2" for="name"> تاكيد كلمة السر الجديدة </label>
                        <input type="password" name="" placeholder="تاكيد كلمة السر الجديدة " />
                    </div>
                    <div>
                        <button class="change-pass-btn"> تغيير كلمة السر </button>
                    </div>
                </div>
            </div>
            <div id="route2" class="user-sec">

                <div class="col-lg-12 my-3 hide-p">
                    <div class="filter-collapse" data-bs-toggle="collapse" href="#collapseExample1" role="button"
                        aria-expanded="false" aria-controls="collapseExample1">
                        <div class="row w-100 align-items-center user-coll">
                            <div class="imgBx col-lg-2"><img class="coll-img" src="assets/images/user-logo.jpg" alt="">
                            </div>
                            <div class="col-lg-4">
                                <p> Name: <span> Aly A-Elhady </span></p>
                                <p> Email: <span> AlyA-Elhady@gmail.com </span></p>
                            </div>
                            <div class="col-lg-3">
                                <p> Start Date: <span> 23/3/2024 </span></p>
                                <p> End Date: <span> 23/3/2024 </span></p>
                            </div>
                            <div class="col-lg-3">
                                <p> Total: <span> 50 </span></p>
                                <p> Remaining: <span> 30 </span></p>
                                <p> Profit: <span> 20 </span></p>
                            </div>
                        </div>
                        <div>
                            <i class="fa-solid fa-angle-down coll-icon"></i>
                            <i class="fa-solid fa-angle-up coll-icon2"></i>
                        </div>
                    </div>

                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p> Name: <span> Aly A-Elhady </span></p>
                                    <p> Email: <span> AlyA-Elhady@gmail.com </span></p>
                                </div>

                                <div class="col-lg-6">
                                    <p> Age: <span> 30 </span></p>
                                    <p> Phone: <span> 0101010100 </span></p>
                                </div>

                            </div>
                            <hr />
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"> ID </th>
                                            <th scope="col">NAME</th>
                                            <th scope="col">PRICE</th>
                                            <th scope="col">COUNT</th>
                                            <th scope="col">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div> Product 1 </div>
                                                </div>
                                            </td>
                                            <td>200</td>
                                            <td> 3 </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-pen-to-square mx-2"></i>
                                                    <i class="fa-regular fa-trash-can mx-2"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div> Product 2 </div>
                                                </div>
                                            </td>
                                            <td>200</td>
                                            <td> 3 </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-pen-to-square mx-2"></i>
                                                    <i class="fa-regular fa-trash-can mx-2"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div> Product 3 </div>
                                                </div>
                                            </td>
                                            <td>200</td>
                                            <td> 3 </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-pen-to-square mx-2"></i>
                                                    <i class="fa-regular fa-trash-can mx-2"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div> Product 4 </div>
                                                </div>
                                            </td>
                                            <td>200</td>
                                            <td> 3 </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-pen-to-square mx-2"></i>
                                                    <i class="fa-regular fa-trash-can mx-2"></i>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 my-3 hide-p">
                    <div class="filter-collapse" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                        aria-expanded="false" aria-controls="collapseExample2">
                        <div class="row w-100 align-items-center user-coll">
                            <div class="imgBx col-lg-2"><img class="coll-img" src="assets/images/user-logo.jpg" alt="">
                            </div>
                            <div class="col-lg-4">
                                <p> Name: <span> Aly A-Elhady </span></p>
                                <p> Email: <span> AlyA-Elhady@gmail.com </span></p>
                            </div>
                            <div class="col-lg-3">
                                <p> Start Date: <span> 23/3/2024 </span></p>
                                <p> End Date: <span> 23/3/2024 </span></p>
                            </div>
                            <div class="col-lg-3">
                                <p> Total: <span> 50 </span></p>
                                <p> Remaining: <span> 30 </span></p>
                                <p> Profit: <span> 20 </span></p>
                            </div>
                        </div>
                        <div>
                            <i class="fa-solid fa-angle-down coll-icon"></i>
                            <i class="fa-solid fa-angle-up coll-icon2"></i>
                        </div>
                    </div>

                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p> Name: <span> Aly A-Elhady </span></p>
                                    <p> Email: <span> AlyA-Elhady@gmail.com </span></p>
                                </div>

                                <div class="col-lg-6">
                                    <p> Age: <span> 30 </span></p>
                                    <p> Phone: <span> 0101010100 </span></p>
                                </div>

                            </div>
                            <hr />
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"> ID </th>
                                        <th scope="col">NAME</th>
                                        <th scope="col">PRICE</th>
                                        <th scope="col">COUNT</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div> Product 1 </div>
                                            </div>
                                        </td>
                                        <td>200</td>
                                        <td> 3 </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-pen-to-square mx-2"></i>
                                                <i class="fa-regular fa-trash-can mx-2"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div> Product 2 </div>
                                            </div>
                                        </td>
                                        <td>200</td>
                                        <td> 3 </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-pen-to-square mx-2"></i>
                                                <i class="fa-regular fa-trash-can mx-2"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div> Product 3 </div>
                                            </div>
                                        </td>
                                        <td>200</td>
                                        <td> 3 </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-pen-to-square mx-2"></i>
                                                <i class="fa-regular fa-trash-can mx-2"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div> Product 4 </div>
                                            </div>
                                        </td>
                                        <td>200</td>
                                        <td> 3 </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-pen-to-square mx-2"></i>
                                                <i class="fa-regular fa-trash-can mx-2"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('footer')

@endsection