@extends('dashboard.layouts.app')

@section('content')
<div class="container table-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> لوحة التحكم </a></li>
                <li class="breadcrumb-item active" aria-current="page"> القضايا </li>
            </ol>
        </nav>
    </div>

    <div class="mb-4 mob-dir">
        <div class="d-flex align-items-center filt-dir">
            <button class="search-btn-add"> 
                 <a href="{{url('/issues/create')}}" style="color: white; text-decoration: none;"> 
                    <span> <i class="fa-solid fa-plus"></i> </span>إضافة قضية جديدة
                 </a>
            </button>
            <div class="hide-p">
                <div class="filter-collapse" data-bs-toggle="collapse" href="#collapseExample1" role="button"
                    aria-expanded="false" aria-controls="collapseExample1">
                    <p class="m-0 d-flex"> <span> <i class="fa-solid fa-filter"></i> </span> تصنيف </p>
                </div>
                <form>
                    <div class="collapse collapse-fill" id="collapseExample1">
                        <div class="card card-body filter-body">
                            <div class="mb-3">
                                <div class="d-flex flex-column form-input">
                                    <label for="caseTitle" class="mb-2"> عنوان القضية </label>
                                    <input id="caseTitle" class="p-1" type="text" name="caseTitle" placeholder="ادخل عنوان القضية " />
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex flex-column form-input">
                                    <label for="clientName" class="mb-2"> العميل </label>
                                    <input id="clientName" class="p-1" type="text" name="clientName" placeholder="ادخل العميل" />
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between my-3">
                                <button type="reset" class="reset-btn"> إعادة تعيين </button>
                                <button type="submit" class="confirm-btn"> تطبيق </button>
                            </div>
                        </div>
                    </div>
                </form>
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
                    <th scope="col">العميل </th>
                    <th scope="col">عنوان القضية</th>
                    <th scope="col">المحكمة </th>
                    <th scope="col">نوع القضية</th>
                    <th scope="col"> الحالة</th>
                    <th scope="col">المرحلة </th>
                    <th scope="col">الموظف المسؤول </th>
                    <th scope="col">تاريخ الإضافة </th>
                    <th scope="col">الحالة</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Issues as $item)
                <tr>
                    <td> <input class="form-check-input checkall" type="checkbox" value="" id="flexCheckChecked"> </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="imgBx"><img src="{{url($item->customer->image)}}" alt=""></div>
                            <div>{{$item->customer->name}}</div>
                        </div>
                    </td>
                    <td>
                        <div>{{$item->name}} </div>
                    </td>
                    <td>
                        <div>{{$item->court}}  </div>
                    </td>
                    <td>
                        <div>  {{$item->IsuesType_name}} </div>
                    </td>
                    <td>
                        <div>
                            <select name="IssuesCase_id" class="form-control" onchange="updateIssueCase({{ $item->id }}, this.value)">
                                 <option>{{$item->IssuesCase_name}} </option>
                                @foreach($IssuesCase as $case)
                                    <option value="{{ $case->id }}"> {{ $case->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </td>
                    <td>
                        <div>
                            <select name="IssuesPhase_id" class="form-control" onchange="updateIssuePhase({{ $item->id }}, this.value)">
                                 <option>{{$item->IssuesPhase_name}} </option>
                                @foreach($IssuesPhase as $phase)
                                    <option value="{{ $phase->id }}"> {{ $phase->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </td>
                    <td>
                        <div> الموظف 1 </div>
                    </td>
                    <td>
                        <div> {{ \Carbon\Carbon::parse($item->created_at)->format('Y/m/d') }} </div>
                    </td>
                    <td>
                        <div class="form-check form-switch d-flex align-items-center justify-content-center">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                checked />
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="{{route('issues.show',$item->id)}}"> <i class="fa-solid fa-eye"></i></a>
                            
                            <div class="dropdown">
                               <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="d-flex align-items-center justify-content-between sec">
                                      <a href="{{route('issues.edit',$item->id)}}">  <p> تعديل </p></a>
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
                        <h1 class="modal-title fs-5" id="deleteModal">  حذف القضية </h1>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('issues.destroy', $item->id) }}" method="POST">
                                @csrf
                                @METHOD('DELETE')
                                <h2 class="modal-title fs-5" id="deleteModal">   متأكد من حذف القضية ؟</h2>
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
            <div class="d-flex pag-btns">
                <button class="icon-pag"> < </button>
                <button class="num"> 1 </button>
                <button class="num"> 2 </button>
                <button class="icon-pag"> > </button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<script>
    function updateIssueCase(issueId, caseId) {
        $.ajax({
            url: '{{ url("issues/update-case") }}/' + issueId,
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                case_id: caseId
            },
            success: function(response) {
                alert('Issue case updated successfully');
            },
            error: function(response) {
                alert('Failed to update issue case');
            }
        });
    }

    function updateIssuePhase(issueId, phaseId) {
        $.ajax({
            url: '{{ url("issues/update-phase") }}/' + issueId,
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                phase_id: phaseId
            },
            success: function(response) {
                alert('Issue phase updated successfully');
            },
            error: function(response) {
                alert('Failed to update issue phase');
            }
        });
    }
</script>

@endsection
