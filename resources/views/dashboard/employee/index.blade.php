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
            <button class="search-btn-add">
                <a href="{{ url('/employee/create') }}" style="color: white; text-decoration: none;">
                    <span><i class="fa-solid fa-plus"></i></span> إضافة موظف
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
                    <th scope="col"><input class="form-check-input" type="checkbox" value="" id="selectAllCheckbox"></th>
                    <th scope="col">الإسم</th>
                    <th scope="col">رقم الموبايل</th>
                    <th scope="col"> البريد</th>
                    <th scope="col">الصلاحية</th>
                    <th scope="col">الحالة</th>
                    <th scope="col">تاريخ الاضافة</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $item)
                <tr>
                    <td><input class="form-check-input checkall" type="checkbox" value="" id="flexCheckChecked"></td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="imgBx"><img src="{{ url($item->logo) }}" alt="{{ $item->name }}"></div>
                            <div>{{ $item->name }}</div>
                        </div>
                    </td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->email }}</td>
                    <td>الصلاحية</td>
                    <td>
                        <p class="active-status">
                            <i class="fa-solid fa-circle status-toggle" data-id="{{ $item->id }}" data-status="{{ $item->status }}" style="cursor: pointer; color: {{ $item->status == 'active' ? 'green' : 'gray' }}"></i>
                        </p>
                    </td>
                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('Y/m/d') }}</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            
                            <div class="dropdown">
                                <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="d-flex align-items-center justify-content-between sec">
                                       <a href="{{ route('employee.edit', [$item->id]) }}">
                                        <p> تعديل </p></a>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between sec delet-sec">
                                        <a data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
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
                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModal">حذف الموظف</h1>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('employee.destroy', [$item->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <h2 class="modal-title fs-5" id="deleteModal">متأكد من حذف الموظف</h2>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                                    <button type="submit" class="btn btn-danger">حذف</button>
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
                <p class="pag-text">عرض 1 إلى 10 من أصل 12 مدخلاً</p>
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

@section('footer')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handle status toggle
        document.querySelectorAll('.status-toggle').forEach(item => {
            item.addEventListener('click', function () {
                const userId = this.getAttribute('data-id');
                const currentStatus = this.getAttribute('data-status');
                const newStatus = currentStatus === 'active' ? 'inactive' : 'active';
                
                fetch('{{ route('employee.updateStatus') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ id: userId })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'active') {
                        this.style.color = 'green';
                        this.setAttribute('data-status', 'active');
                    } else {
                        this.style.color = 'gray';
                        this.setAttribute('data-status', 'inactive');
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        });
    });
</script>
@endsection
