@extends('dashboard.layouts.app')

@section('content')

<div class="container table-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> لوحة التحكم </a></li>
                <li class="breadcrumb-item active" aria-current="page"> الموظفين </li>
            </ol>
        </nav>

    </div>
    <div class="mb-4 mob-dir">
        <div class="d-flex align-items-center filt-dir">
            <div class="card-header border-bottom-dashed">

                <div class="row g-4 align-items-center">
                    <div class="col-sm d-flex flex-wrap align-items-start gap-2">
                        <div class="d-flex flex-wrap align-items-start">
                            <a href="https://daawasa.com/office/hrcategory" class="btn add-btn" 
                                style="border: 1px solid #babcbc; background-color: ">أقسام الموظفين</a>
                            <a href="https://daawasa.com/office/jobtitle" class="btn btn-default add-btn" 
                                style="border: 1px solid #babcbc; background-color: #e9ebec">المسمى الوظيفي</a>
                         </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="d-flex flex-wrap align-items-start gap-2">
                            <button  data-bs-toggle="modal" data-bs-target="#jobTitleModal" class="btn btn-success add-btn"><i class="ri-add-line align-bottom me-1"></i> اضافة مسمى جديد</button>
                            <button  data-bs-toggle="modal" data-bs-target="#hrCategoryModal" class="btn btn-success add-btn"><i class="ri-add-line align-bottom me-1"></i> إضافة قسم جديد</button>
                         </div>
                    </div>
                </div>
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
            {{-- <tbody>
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
                        <div> {{ \Carbon\Carbon::parse($item->created_at)->format('Y/m/d') }}</div>
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
            </tbody> --}}
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