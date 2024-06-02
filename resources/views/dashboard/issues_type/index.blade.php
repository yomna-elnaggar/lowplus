@extends('dashboard.layouts.app')

@section('content')

<div class="container table-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> لوحة التحكم </a></li>
                <li class="breadcrumb-item active" aria-current="page"> انواع القضايا </li>
            </ol>
        </nav>

    </div>

    <!-- filter -->
    {{-- <div class=" my-4 all-statics2">
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
    </div> --}}

    <!-- filter -->
    <div class="mb-4 mob-dir">
        <div class="d-flex align-items-center filt-dir">
            
           <!-- Button trigger modal -->
            <button type="button" class="search-btn-add" data-bs-toggle="modal" data-bs-target="#addModal">
                <span> <i class="fa-solid fa-plus"></i> </span>  إضافة نوع قضية 
            </button>
            
            <!-- add Modal -->
            <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addModalLabel">إضافة نوع قضية </h1>
                    
                    </div>
                    <div class="modal-body">
                        <form action="{{route('issues_type.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">نوع القضية</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            {{-- <div class="mb-3">
                                <label for="add_date" class="form-label">تاريخ الإضافة</label>
                                <input type="date" class="form-control" id="add_date" name="add_date" required>
                            </div> --}}
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                                <button type="submit" class="btn btn-primary">حفظ </button>
                            </div>
                        </form>
                    </div>
                    
                </div>
                </div>
            </div>

            {{-- <div class="hide-p">
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
            </div> --}}
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
                    <th scope="col">نوع القضية</th>
                    <th scope="col">تاريخ الإضافة </th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($IsuesType as $item)
                <tr>
                    <td> <input class="form-check-input checkall" type="checkbox" value="" id="flexCheckChecked"> </td>
                    <td>
                        <div> {{$item->name}}</div>
                    </td>
                    <td>
                        <div>{{ \Carbon\Carbon::parse($item->created_at)->format('Y/m/d') }} </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="dropdown">
                                <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="d-flex align-items-center justify-content-between sec">
                                        <a  data-bs-toggle="modal" data-bs-target="#editModal{{$item->id}}">
                                            <span> تعديل </span>     
                                        </a>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between sec delet-sec">
                                        <a  data-bs-toggle="modal" data-bs-target="#deleteModal{{$item->id}}">
                                            <span> حذف </span>     
                                        </a>
                                        <i class="fa-regular fa-trash-can"></i>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
                <!-- edit Modal -->
                <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModalLabel">تعديل نوع قضية </h1>
                        
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('issues_type.update', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label">نوع القضية</label>
                                    <input type="text" class="form-control" id="name" value="{{$item->name}}" name="name" required>
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="add_date" class="form-label">تاريخ الإضافة</label>
                                    <input type="date" class="form-control" id="add_date" name="add_date" required>
                                </div> --}}
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                                    <button type="submit" class="btn btn-primary">تعديل </button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    </div>
                </div>
                <!-- delete Modal  -->
                <div class="modal fade" id="deleteModal{{$item->id}}" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModal">  حذف نوع القضية </h1>
                        
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('issues_type.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <h2 class="modal-title fs-5" id="deleteModal">   متأكد من حذف نوع القضية ؟</h2>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                                    <button type="submit" class="btn btn-danger">حذف </button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    </div>
                </div>
                @endforeach
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