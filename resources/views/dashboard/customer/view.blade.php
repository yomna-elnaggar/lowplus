@extends('dashboard.layouts.app')



@section('content')

<div class="container projects-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> لوحة التحكم </a></li>
                <li class="breadcrumb-item active" aria-current="page"> تفاصيل العميل </li>
            </ol>
        </nav>
    </div>
</div>

<!-- filter -->
<div class="my-4 all-statics2">
    <div class="row">
        @foreach ([
            ['القضايا', 2],
            ['الجلسات', 1],
            ['خدمات', 3],
            ['فواتير', 3],
        ] as $item)
        <div class="col-lg-3">
            <div class="statics card">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i class="fa-sharp fa-solid fa-circle-dollar"></i>
                        <p class="title"> {{ $item[0] }} </p>
                    </div>
                    <p class="number"> {{ $item[1] }} </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container projects-page preview-modal">
    <div class="">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-xxl-3">
                        <div class="task-info">
                            <h4>معلومات العميل</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <th class="ps-0" scope="row">رقم العميل:</th>
                                        <td class="text-muted">{{ $customer->customer_number }}</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">نوع العميل:</th>
                                        <td class="text-muted">{{ $customer->type }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        @if ($customer->national_id)
                        <div class="task-info">
                            <h4>معلومات الهوية</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <th class="ps-0" scope="row">رقم الهوية:</th>
                                        <td class="text-muted">{{ $customer->national_id }}</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">صورة الهوية:</th>
                                        <td class="text-muted">
                                            <img src="{{ url($customer->national_image) }}" alt="" width="100px" height="100px">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @elseif ($customer->tax_number)
                        <div class="task-info">
                            <h4>المعلومات الضريبية</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <th class="ps-0" scope="row">الرقم الضريبي:</th>
                                        <td class="text-muted">{{ $customer->tax_number }}</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">السجل التجاري:</th>
                                        <td class="text-muted">{{ $customer->tax_number2 }}</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">صورة السجل التجاري:</th>
                                        <td class="text-muted">
                                            <img src="{{ url($customer->tax_image) }}" alt="" width="100px" height="100px">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endif
                    </div>

                    <div class="container col-lg-8">
                        <div class="task-btns mb-6">
                            <button class="preview-route1 active-preview">معلومات العميل</button>
                            <button class="preview-route2">القضايا</button>
                            <button class="preview-route3">الجلسات <span class="start-num">10</span></button>
                            <button class="preview-route4">الملفات <span class="start-num">8</span></button>
                        </div>

                        <div id="route1">
                            <div class="col-lg-12">
                                <div class="task-info">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h4>معلومات العميل</h4>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th class="ps-0" scope="row">اسم العميل:</th>
                                                        <td class="text-muted">{{ $customer->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">رقم الهاتف:</th>
                                                        <td class="text-muted">{{ $customer->phone }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">البريد الالكتروني:</th>
                                                        <td class="text-muted">{{ $customer->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">العنوان:</th>
                                                        <td class="text-muted">
                                                            {{ $customer->country }} 
                                                            @if ($customer->country && ($customer->city || $customer->region)) - @endif
                                                            {{ $customer->city }} 
                                                            @if ($customer->city && $customer->region) - @endif
                                                            {{ $customer->region }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">العنوان التفصيلي:</th>
                                                        <td class="text-muted">{{ $customer->address }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">تاريخ الانضمام:</th>
                                                        <td class="text-muted">{{ $customer->created_at }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="route2" style="display: none;">
                            <div class="all-files">
                                <button class="btn btn-primary mb-3" id="addFilesBtn">إضافة قضية</button>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">المحكمة</th>
                                                <th scope="col">المدينة</th>
                                                <th scope="col">الدائرة</th>
                                                <th scope="col">الموظف</th>
                                                <th scope="col">التاريخ</th>
                                                <th scope="col">الإجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>علي عبدالهادي علي</td>
                                                <td>01022886619</td>
                                                <td>علي عبدالهادي علي</td>
                                                <td>علي عبدالهادي علي</td>
                                                <td>01022886619</td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <i class="fa-solid fa-eye"></i>
                                                        <div class="dropdown">
                                                            <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <div class="d-flex align-items-center justify-content-between sec">
                                                                    <p>تعديل</p>
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </div>
                                                                <div class="d-flex align-items-center justify-content-between sec">
                                                                    <p>حذف</p>
                                                                    <i class="fa-regular fa-trash-can"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="route3" style="display: none;">
                            <div class="all-files">
                                <button class="btn btn-primary mb-3" id="addFilesBtn">إضافة جلسة</button>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">المحكمة</th>
                                                <th scope="col">المدينة</th>
                                                <th scope="col">الدائرة</th>
                                                <th scope="col">الموظف</th>
                                                <th scope="col">التاريخ</th>
                                                <th scope="col">الإجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>علي عبدالهادي علي</td>
                                                <td>01022886619</td>
                                                <td>علي عبدالهادي علي</td>
                                                <td>علي عبدالهادي علي</td>
                                                <td>01022886619</td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <i class="fa-solid fa-eye"></i>
                                                        <div class="dropdown">
                                                            <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <div class="d-flex align-items-center justify-content-between sec">
                                                                    <p>تعديل</p>
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </div>
                                                                <div class="d-flex align-items-center justify-content-between sec">
                                                                    <p>حذف</p>
                                                                    <i class="fa-regular fa-trash-can"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="route4" style="display: none;">
                            <div class="all-files">
                                <div class="files-uploaded mb-3">
                                    <button class="btn btn-primary mb-3" id="addFilesBtn">إضافة ملف</button>
                                    <div class="uploaded">
                                        <p>case_files.xlsx</p>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-eye"></i>
                                            <i class="fa-solid fa-download"></i>
                                            <i class="fa-regular fa-trash-can"></i>
                                        </div>
                                    </div>
                                    <div class="uploaded">
                                        <p>case_files.xlsx</p>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-eye"></i>
                                            <i class="fa-solid fa-download"></i>
                                            <i class="fa-regular fa-trash-can"></i>
                                        </div>
                                    </div>
                                    <div class="uploaded">
                                        <p>case_files.xlsx</p>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-eye"></i>
                                            <i class="fa-solid fa-download"></i>
                                            <i class="fa-regular fa-trash-can"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="container col-lg-8">
                                    <div class="uploadFiles mb-6">
                                        <div class="d-flex align-items-center justify-content-center flex-column">
                                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                            <p>اسحب الملف الى هنا</p>
                                            <p>او</p>
                                            <button>اختر ملف</button>
                                            <p>تحميل (pdf,jpeg,png,jpg)</p>
                                        </div>
                                    </div>
                                </div>
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
    $(document).ready(function() {
        $('#route2, #route3, #route4').hide();
        $('.preview-route1').addClass('active-preview');

        $('.preview-route1').click(function() {
            $('#route1').show();
            $('#route2, #route3, #route4').hide();
            $('.preview-route1').addClass('active-preview');
            $('.preview-route2, .preview-route3, .preview-route4').removeClass('active-preview');
        });

        $('.preview-route2').click(function() {
            $('#route2').show();
            $('#route1, #route3, #route4').hide();
            $('.preview-route2').addClass('active-preview');
            $('.preview-route1, .preview-route3, .preview-route4').removeClass('active-preview');
        });

        $('.preview-route3').click(function() {
            $('#route3').show();
            $('#route1, #route2, #route4').hide();
            $('.preview-route3').addClass('active-preview');
            $('.preview-route1, .preview-route2, .preview-route4').removeClass('active-preview');
        });

        $('.preview-route4').click(function() {
            $('#route4').show();
            $('#route1, #route2, #route3').hide();
            $('.preview-route4').addClass('active-preview');
            $('.preview-route1, .preview-route2, .preview-route3').removeClass('active-preview');
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