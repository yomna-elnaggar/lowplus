@extends('dashboard.layouts.app')

@section('content')

<div class="container table-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> لوحة التحكم </a></li>
                <li class="breadcrumb-item active" aria-current="page">قائمة الصلاحيات </li>
            </ol>
        </nav>

    </div>

    <div class="mb-4 mob-dir">
        <div class="d-flex align-items-center filt-dir">
            
            <button class="search-btn-add">
                <a href="{{ url('/role/create') }}" style="color: white; text-decoration: none;">
                    <span><i class="fa-solid fa-plus"></i></span>  إضافة صلاحية جديدة  
                </a>
            </button>
    
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
                    <th scope="col">الاسم </th>
                    <th scope="col">عدد الموظفين </th>
                    <th scope="col">تاريخ الإضافة </th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <input class="form-check-input checkall" type="checkbox" value="" id="flexCheckChecked"> </td>
                    <td>
                        <div> صلاحية 1</div>
                    </td>
                    <td>0</td>
                    <td>20202/04/02</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="dropdown">
                                <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="d-flex align-items-center justify-content-between sec">
                                        <a  data-bs-toggle="modal" data-bs-target="#editModal">
                                            <span> تعديل </span>     
                                        </a>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between sec delet-sec">
                                        <a  data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            <span> حذف </span>     
                                        </a>
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