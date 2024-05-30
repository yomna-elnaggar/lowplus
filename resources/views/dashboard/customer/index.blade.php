@extends('dashboard.layouts.app')

@section('content')

<div class="container table-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> لوحة التحكم </a></li>
                <li class="breadcrumb-item active" aria-current="page"> العملاء </li>
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
            <button class="search-btn-add">
                <a href="{{url('/customer/create')}}" style="color: white; text-decoration: none;">
                  <span><i class="fa-solid fa-plus"></i></span> إضافة عميل
                </a>
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
                    <th scope="col"> البريد</th>
                    <th scope="col">النوع</th>
                    <th scope="col">الحالة</th>
                    <th scope="col">تاريخ الاضافة</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Customers as $item)
                <tr>
                    <td> <input class="form-check-input checkall" type="checkbox" value="" id="flexCheckChecked"> </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="imgBx"><img src="{{url($item->image)}}" alt="{{$item->name}}"></div>
                            <div>{{$item->name}} </div>
                        </div>
                    </td>
                    <td>
                        <div> {{$item->phone}} </div>
                    </td>
                    <td>
                        <div> {{$item->email}} </div>
                    </td>
                    <td>
                        <div> {{$item->type}} </div>
                    </td>
                    
                    <td>
                        <p class="active-status">
                            <i class="fa-solid fa-circle {{$item->status == 'active' ? 'active-circle' : 'inactive-circle'}}"></i>
                            {{$item->status == 'active' ? 'مفعل' : 'غير مفعل'}}
                        </p>
                    </td>
                    <td>
                        <div>  {{$item->created_at}}</div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="{{route('customer.show',[$item->id])}}"><i class="fa-solid fa-eye"></i></a>
                            <div class="dropdown">
                                <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="d-flex align-items-center justify-content-between sec">
                                       <a href="{{route('customer.edit',[$item->id])}}">
                                        <p> تعديل </p></a>
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
                 <!-- delete Modal  -->
                 <div class="modal fade" id="deleteModal{{$item->id}}" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModal">  حذف العميل </h1>
                        
                        </div>
                        <div class="modal-body">
                            <form action="{{route('customer.destroy',[$item->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <h2 class="modal-title fs-5" id="deleteModal">   متأكد من حذف العميل ؟</h2>
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