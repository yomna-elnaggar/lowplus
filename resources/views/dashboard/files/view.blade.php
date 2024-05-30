@extends('dashboard.layouts.app')

@section('content')

<div class="container projects-page">
    <div class="my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> لوحة التحكم </a></li>
                <li class="breadcrumb-item active" aria-current="page"> المهام </li>
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
                            <h4> إنشاء ملف القضية </h4>
                            <div>
                                <h6> إسم المشروع التابع له : </h6>
                                <h5> القضية رقم 1123 </h5>
                            </div>
                            <div>
                                <h6> التاريخ : </h6>
                                <h5> 12/4/2024 </h5>
                            </div>
                            <div>
                                <h6> الحالة : </h6>
                                <h5> جاري البدء </h5>
                            </div>
                            <div>
                                <h6> الأولوية : </h6>
                                <h5> عاجل </h5>
                            </div>
                            <div>
                                <h6> المسند إليهم : </h6>
                                <ul>
                                    <li> محمد علاء محمد </li>
                                    <li> خالد على أحمد </li>
                                    <li> أحمد عماد الطوخي </li>
                                </ul>
                            </div>
                            <div>
                                <h6> وصف المهمة : </h6>
                                <p> إنها سلسلة من الكلمات اللاتينية التي ، عند وضعها في موضعها ، لا تشكل جملًا
                                    بمعنى كامل. </p>
                            </div>
                        </div>
                    </div>

                    <div class="container col-lg-8">
                        <div class="task-btns mb-4">
                            <button class="preview-route1"> الأنشطة <span class="start-num"> 22 </span> </button>
                            <button class="preview-route2"> الكومنتات <span class="start-num"> 10 </span> </button>
                            <button class="preview-route3"> الملفات <span class="start-num"> 8 </span> </button>
                        </div>

                        <div id="route1">
                            <div class="d-flex align-items-center mb-3">
                                <div class="imgBx"><img src="assets/images/user-logo.jpg" alt=""></div>
                                <div>
                                    <h6> عبد الحميد السيد <span> قام بإضافة كومنت جديد على مهمة </span> إنشاء
                                        ملف القضية </h6>
                                    <p class="mb-0"> 21/4/2024 - 12:00 AM </p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="imgBx"><img src="assets/images/user-logo.jpg" alt=""></div>
                                <div>
                                    <h6> عبد الحميد السيد <span> قام بإضافة كومنت جديد على مهمة </span> إنشاء
                                        ملف القضية </h6>
                                    <p class="mb-0"> 21/4/2024 - 12:00 AM </p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="imgBx"><img src="assets/images/user-logo.jpg" alt=""></div>
                                <div>
                                    <h6> عبد الحميد السيد <span> قام بإضافة كومنت جديد على مهمة </span> إنشاء
                                        ملف القضية </h6>
                                    <p class="mb-0"> 21/4/2024 - 12:00 AM </p>
                                </div>
                            </div>
                        </div>
                        <div id="route2">
                            <div class="all-comments">
                                <div class="parent-comment mb-3">
                                    <div class="d-flex align-items-start justify-content-between mb-1">
                                        <div class="d-flex align-items-start">
                                            <div class="imgBx"><img src="assets/images/user-logo.jpg" alt=""></div>
                                            <div>
                                                <h6> عبد الحميد السيد </h6>
                                                <p class="mb-0"> 21/4/2024 - 12:00 AM </p>
                                                <div class="comment">
                                                    <p> إنها سلسلة من الكلمات اللاتينية التي ، عند وضعها في موضعها. </p>
                                                </div>
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
                                <hr />
                                <div class="parent-comment mb-3">
                                    <div class="d-flex align-items-start justify-content-between mb-1">
                                        <div class="d-flex align-items-start">
                                            <div class="imgBx"><img src="assets/images/user-logo.jpg" alt=""></div>
                                            <div>
                                                <h6> عبد الحميد السيد </h6>
                                                <p class="mb-0"> 21/4/2024 - 12:00 AM </p>
                                                <div class="comment">
                                                    <p> إنها سلسلة من الكلمات اللاتينية التي ، عند وضعها في موضعها. </p>
                                                </div>
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
                            <div class="add-comment my-5">
                                <div class="d-flex align-items-center">
                                    <div class="imgBx"><img src="assets/images/user-logo.jpg" alt=""></div>
                                    <textarea name="" id="" cols="30" rows="3" placeholder="أضف كومنت ..."></textarea>
                                </div>
                                <div class="d-flex align-items-center justify-content-end">
                                    <button class=comment-btn> نشر </button>
                                </div>
                            </div>
                            <div>

                            </div>
                        </div>
                        <div id="route3">
                            <div class="all-files">
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
                            <div id="drop-area2">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                <h6> إستيراد ملف </h6>
                                <p> قم بسحب أو إسقاط الملف هنا </p>
                                <input type="file" id="fileInput2" multiple style="display: none;">
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
$('#route2').hide();
$('#route3').hide();
$('.preview-route2').removeClass('active-preview');
$('.preview-route3').removeClass('active-preview');
$('.preview-route1').addClass("active-preview");

$('.preview-route1').click(function() {
    $('#route1').show();
    $('#route2').hide();
    $('#route3').hide();
    $('.preview-route2').removeClass('active-preview');
    $('.preview-route3').removeClass('active-preview');
    $('.preview-route1').addClass("active-preview");
    $(document).ready(function() {

    });
});

$('.preview-route2').click(function() {
    $('#route2').show();
    $('#route1').hide();
    $('#route3').hide();
    $('.preview-route1').removeClass('active-preview');
    $('.preview-route3').removeClass('active-preview');
    $('.preview-route2').addClass("active-preview");
    $(document).ready(function() {

    });

});

$('.preview-route3').click(function() {
    $('#route3').show();
    $('#route1').hide();
    $('#route2').hide();
    $('.preview-route1').removeClass('active-preview');
    $('.preview-route2').removeClass('active-preview');
    $('.preview-route3').addClass("active-preview");
    $(document).ready(function() {

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