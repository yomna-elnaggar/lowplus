@extends('dashboard.layouts.app')

@section('content')

<div class="container projects-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> لوحة التحكم </a></li>
                <li class="breadcrumb-item active" aria-current="page"> تفاصيل القضية </li>
            </ol>
        </nav>

    </div>

</div>

<div class="container projects-page preview-modal">
    <div class="">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="task-info">
                            <h4>  ملف القضية </h4>
                            <div>
                                <h6>    عنوان القضية : </h6>
                                <h5> القضية رقم 1123 </h5>
                            </div>
                            <div>
                                <h6> رقم القضية : </h6>
                                <h5> 12/4/2024 </h5>
                            </div>
                            <div>
                                <h6> الحالة : </h6>
                                <h5> جاري البدء </h5>
                            </div>
                            <div>
                                <h6> النوع : </h6>
                                <h5> عاجل </h5>
                            </div>
                            <div>
                                <h6>  المرحلة : </h6>
                                <h5> عاجل </h5>
                            </div>
                            <div>
                                <h6>  التاريخ : </h6>
                                <p>  12/4/2024 </p>
                            </div>
                        </div>
                    </div>

                    <div class="container col-lg-8">
                        <div class="task-btns mb-4">
                            <button class="preview-route1"> العميل ,الخصم </button>
                            <button class="preview-route2"> المحكمة  </button>
                            <button class="preview-route3"> الجلسات <span class="start-num"> 10 </span> </button>
                            <button class="preview-route4"> الدفعات <span class="start-num"> 10 </span> </button>
                            <button class="preview-route5"> الملفات <span class="start-num"> 8 </span> </button>
                        </div>

                        <div id="route1">
                            <div class="col-lg-10">
                                <div class="task-info">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <h6> اسم العميل:</h6>
                                                <h5><a href="#">لقضية  1123</a></h5>
                                            </div>
                                            <div>
                                                <h6> صفة العميل:</h6>
                                                <h5>12/4/2024</h5>
                                            </div>
                                            <div>
                                                <h6>الخصم:</h6>
                                                <h5>جاري البدء</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <h6>رقم هاتف الخصم:</h6>
                                                <h5>عاجل</h5>
                                            </div>
                                            <div>
                                                <h6>عنوان الخصم:</h6>
                                                <h5>عاجل</h5>
                                            </div>
                                            <div>
                                                <h6>محامي الخصم :</h6>
                                                <h5>م بمعنى كامل.</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div id="route2">
                            <div class="col-lg-10">
                                <div class="task-info">
                                    <h4>   المحكمة </h4>
                                    <div>
                                        <h6>     اسم المحكمة : </h6>
                                        <h5> القضية رقم 1123 </h5>
                                    </div>
                                    <div>
                                        <h6>  المدينة : </h6>
                                        <h5> 12/4/2024 </h5>
                                    </div>
                                    <div>
                                        <h6> الدائرة : </h6>
                                        <h5> جاري البدء </h5>
                                    </div>
                                    <div>
                                        <h6> درجة الترافع : </h6>
                                        <h5> عاجل </h5>
                                    </div>
                                    <div>
                                        <h6>  اسم القاضي : </h6>
                                        <h5> عاجل </h5>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div id="route3">
                            <div class="all-files">
                                <button class="btn btn-primary mb-3" id="addFilesBtn">إضافة جلسة</button>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                
                                                <th scope="col">المحكمة</th>
                                                <th scope="col">المدينة </th>
                                                <th scope="col">الدائرة</th>
                                                <th scope="col">الموظف</th>
                                                <th scope="col">التاريخ</th>
                                                <th scope="col">الإجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div> علي عبدالهادي علي </div>
                                                </td>
                                                <td>
                                                    <div> 01022886619 </div>
                                                </td>
                                                <td>
                                                    <div> علي عبدالهادي علي </div>
                                                </td>
                                                <td>
                                                    <div> علي عبدالهادي علي </div>
                                                </td>
                                                <td>
                                                    <div> 01022886619 </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <i class="fa-solid fa-eye"></i>
                                                        
                                                        <div class="dropdown">
                                                            <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <div class="d-flex align-items-center justify-content-between sec">
                                                                    <p> تعديل </p>
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </div>
                                                                <div class="d-flex align-items-center justify-content-between sec">
                                                                    <p> حذف </p>
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
                        <div id="route4">
                            <div class="all-files">
                                <button class="btn btn-primary mb-3" id="addFilesBtn">إضافة دفعة</button>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">الاسم</th>
                                                <th scope="col">المبلغ </th>
                                                <th scope="col">التاريخ</th>
                                                <th scope="col">الإجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div>   الدفعة1 </div>
                                                </td>
                                                <td>
                                                    <div> 1022 </div>
                                                </td>
                                                <td>
                                                    <div> 010/2/2 </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <div class="dropdown">
                                                            <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <div class="d-flex align-items-center justify-content-between sec">
                                                                    <p> تعديل </p>
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </div>
                                                                <div class="d-flex align-items-center justify-content-between sec">
                                                                    <p> حذف </p>
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
                        <div id="route5">
                            <div class="all-files">
                                <div class="files-uploaded mb-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <i class="fa-light fa-file-lines"></i>
                                            <div class="mx-3">
                                                <h6> ملف القضية - pdf </h6>
                                                <p class="mb-0"> عبد الحميد الس - 21/4/2024 - 12:00 AM </p>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false"></i>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <div class="d-flex align-items-center justify-content-between sec">
                                                    <p> تعديل </p>
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between sec delet-sec">
                                                    <p> حذف </p>
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="files-uploaded mb-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <i class="fa-light fa-file-lines"></i>
                                            <div class="mx-3">
                                                <h6> ملف القضية - pdf </h6>
                                                <p class="mb-0"> عبد الحميد السيد - 21/4/2024 - 12:00 AM </p>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false"></i>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <div class="d-flex align-items-center justify-content-between sec">
                                                    <p> تعديل </p>
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between sec delet-sec">
                                                    <p> حذف </p>
                                                    <i class="fa-regular fa-trash-can"></i>
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
    </div>
</div>
@endsection

@section('footer')
<script>
    $(document).ready(function() {
        $('#route2').hide();
        $('#route3').hide();
        $('#route4').hide(); // Initially hide route4
        $('#route5').hide(); // Initially hide route5
        $('.preview-route2').removeClass('active-preview');
        $('.preview-route3').removeClass('active-preview');
        $('.preview-route4').removeClass('active-preview'); // Remove active class from route4 button
        $('.preview-route5').removeClass('active-preview'); // Remove active class from route5 button
        $('.preview-route1').addClass("active-preview");

        $('.preview-route1').click(function() {
            $('#route1').show();
            $('#route2').hide();
            $('#route3').hide();
            $('#route4').hide(); // Hide route4 when route1 is clicked
            $('#route5').hide(); // Hide route5 when route1 is clicked
            $('.preview-route2').removeClass('active-preview');
            $('.preview-route3').removeClass('active-preview');
            $('.preview-route4').removeClass('active-preview'); // Remove active class from route4 button
            $('.preview-route5').removeClass('active-preview'); // Remove active class from route5 button
            $('.preview-route1').addClass("active-preview");
        });

        $('.preview-route2').click(function() {
            $('#route2').show();
            $('#route1').hide();
            $('#route3').hide();
            $('#route4').hide(); // Hide route4 when route2 is clicked
            $('#route5').hide(); // Hide route5 when route2 is clicked
            $('.preview-route1').removeClass('active-preview');
            $('.preview-route3').removeClass('active-preview');
            $('.preview-route4').removeClass('active-preview'); // Remove active class from route4 button
            $('.preview-route5').removeClass('active-preview'); // Remove active class from route5 button
            $('.preview-route2').addClass("active-preview");
        });

        $('.preview-route3').click(function() {
            $('#route3').show();
            $('#route1').hide();
            $('#route2').hide();
            $('#route4').hide(); // Hide route4 when route3 is clicked
            $('#route5').hide(); // Hide route5 when route3 is clicked
            $('.preview-route1').removeClass('active-preview');
            $('.preview-route2').removeClass('active-preview');
            $('.preview-route4').removeClass('active-preview'); // Remove active class from route4 button
            $('.preview-route5').removeClass('active-preview'); // Remove active class from route5 button
            $('.preview-route3').addClass("active-preview");
        });

        $('.preview-route4').click(function() {
            $('#route4').show(); // Show route4 when clicked
            $('#route1').hide();
            $('#route2').hide();
            $('#route3').hide();
            $('#route5').hide(); // Hide route5 when route4 is clicked
            $('.preview-route1').removeClass('active-preview');
            $('.preview-route2').removeClass('active-preview');
            $('.preview-route3').removeClass('active-preview');
            $('.preview-route5').removeClass('active-preview'); // Remove active class from route5 button
            $('.preview-route4').addClass("active-preview"); // Add active class to route4 button
        });

        $('.preview-route5').click(function() {
            $('#route5').show(); // Show route5 when clicked
            $('#route1').hide();
            $('#route2').hide();
            $('#route3').hide();
            $('#route4').hide(); // Hide route4 when route5 is clicked
            $('.preview-route1').removeClass('active-preview');
            $('.preview-route2').removeClass('active-preview');
            $('.preview-route3').removeClass('active-preview');
            $('.preview-route4').removeClass('active-preview'); // Remove active class from route4 button
            $('.preview-route5').addClass("active-preview"); // Add active class to route5 button
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