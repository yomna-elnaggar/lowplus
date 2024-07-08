@extends('dashboard.layouts.app')

@section('content')
<div class="container table-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> لوحة التحكم </a></li>
                <li class="breadcrumb-item active" aria-current="page">أقسام الموظفين</li>
            </ol>
        </nav>
    </div>

    <div class="mb-4 d-flex justify-content-between align-items-center">
        <div>
            <a href="{{ url('/category') }}" class="btn btn-outline-secondary active">أقسام الموظفين</a>
            <a href="{{ url('/jobtitle') }}" class="btn btn-outline-secondary">المسمى الوظيفي</a>
        </div>
        <div>
            
            <button type="button" class="search-btn-add" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                <i class="fa-solid fa-plus"></i> اضافة قسم جديد
            </button>
            <button type="button" class="search-btn-add" data-bs-toggle="modal" data-bs-target="#addJobTitleModal">
                <i class="fa-solid fa-plus"></i> اضافة مسمى جديد
            </button>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-3">
            <div class="d-flex">
                <input type="text" class="form-control me-2" placeholder="ابحث عن ..." />
                <button class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
            </div>
        </div>
    </div>

    {{-- Add Category Modal --}}
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryModalLabel">إضافة قسم جديد</h5>
                   
                </div>
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">اسم القسم</label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="أكتب اسم القسم">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                        <button type="submit" class="search-btn-add">حفظ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Add Job Title Modal --}}
    <div class="modal fade" id="addJobTitleModal" tabindex="-1" aria-labelledby="addJobTitleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addJobTitleModalLabel">اضافة مسمى جديد</h5>
                   
                </div>
                <form action="{{ route('jobtitle.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">اسم المسمى</label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="أكتب اسم المسمى">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                        <button type="submit" class="search-btn-add">حفظ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col"><input type="checkbox" id="selectAllCheckbox"></th>
                    <th scope="col">أقسام الموظفين</th>
                    <th scope="col">عدد الموظفين</th>
                    <th scope="col">تاريخ الاضافة</th>
                    <th scope="col">الحالة</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                <tr>
                    <td><input type="checkbox" class="checkall"></td>
                    <td>{{ $item->name }}</td>
                    <td>{{{$item->employees->count()}}}</td>
                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('Y/m/d') }}</td>
                    <td>
                        <div class="custom-controll">
                            <label class="switch mb-0">
                                <input type="checkbox" name="checkStatus" data-menu-id="{{ $item->id }}" {{ $item->status == 'active' ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>
                        </div>
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

                {{-- Edit Modal --}}
                <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">تعديل القسم</h5>
                              
                            </div>
                            <form action="{{ route('category.update', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">اسم القسم</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                                    <button type="submit" class="search-btn-add">تعديل</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Delete Modal --}}
                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">حذف القسم</h5>
                            </div>
                            <form action="{{ route('category.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="modal-body">
                                    <p>هل أنت متأكد من حذف هذا القسم؟</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-between align-items-center mt-3">
            <p class="mb-0">عرض 1 إلى 10 من أصل 12 مدخلاً</p>
            <nav>
                <ul class="pagination mb-0">
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

@section('footer')

<script>
    $(document).ready(function () {
        $('input[name="checkStatus"]').change(function () {
            let menuId = $(this).data('menu-id');
            let status = $(this).is(':checked') ? 'active' : 'inactive';

            $.ajax({
                url: '{{ route("category.update-status") }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: menuId,
                    status: status
                },
                
            });
        });
    });
</script>
@endsection