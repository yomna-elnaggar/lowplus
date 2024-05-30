<div class="sidebar" id="sidebar">
            <i class="fa-regular fa-xmark close-sidebar"></i>
            <div class="d-flex justify-content-center align-items-center mt-4 mb-5"><img class="logo"
                    src="./assets/images/logo.png" alt=""></div>

            <div class="d-flex justify-content-start align-items-center my-2 sidebar-link active-link">
                <span class="sidebar-menu-icon"><i class="fa-solid fa-grid-2"></i></span>
                <h6 class="mx-3 side-links"> لوحة التحكم </h6>
            </div>

            <div class="col-lg-12 mb-2 hide-p">
                <div class="d-flex justify-content-between align-items-center collapseLink my-2 sidebar-link"
                    data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    <div class="d-flex align-items-center">
                        <span class="sidebar-menu-icon"><i class="fa-solid fa-users"></i></span>
                        <h6 class="mx-3"> العملاء </h6>
                    </div>

                    <div>
                        <i class="fa-solid fa-angle-down coll-icon"></i>
                        <i class="fa-solid fa-angle-up coll-icon2"></i>
                    </div>
                </div>

                <div class="collapse collapse-mob" id="collapseExample">
                    <div class="collapse-links">
                        <h6 class="coll-links"><a href="{{url('/customer/create')}}">  إضافة عميل </a></h6>
                        <h6 class="active coll-links"><a href="{{url('/customer')}}"> كل العملاء  </a></h6>
                        <h6 class="coll-links"><a href="{{url('/customer')}}"> العملاء المفعلين </a></h6>

                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-2 hide-p">
                <div class="d-flex justify-content-between align-items-center collapseLink my-2 sidebar-link"
                    data-bs-toggle="collapse" href="#Issues" role="button" aria-expanded="false"
                    aria-controls="Issues">
                    <div class="d-flex align-items-center">
                        <span class="sidebar-menu-icon"><i class="fa-solid fa-landmark"></i></span>
                        <h6 class="mx-3"> القضايا </h6>
                    </div>
                    
                    <div>
                        <i class="fa-solid fa-angle-down coll-icon"></i>
                        <i class="fa-solid fa-angle-up coll-icon2"></i>
                    </div>
                </div>

                <div class="collapse collapse-mob" id="Issues">
                    <div class="collapse-links">
                        <h6 class="active coll-links"><a href="{{url('/issues')}}"> القضايا </a> </h6>
                        <h6 class="coll-links"><a href="{{url('/issues_type')}}">  أنواع القضايا </a></h6>
                        <h6 class="coll-links"> <a href="{{url('/issues_case')}}"> حالات القضايا </a></h6>
                        <h6 class="coll-links"> <a href="{{url('/issues_phase')}}"> مراحل القضايا </a></h6>

                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-start align-items-center my-2 sidebar-link">
                <span class="sidebar-menu-icon"><i class="fa-solid fa-book-open-cover"></i></span>
                <h6 class="mx-3 side-links"><a href="{{url('/sessions')}}"> الجلسات </a></h6>
            </div>

            <div class="d-flex justify-content-start align-items-center my-2 sidebar-link ">
                <span class="sidebar-menu-icon"><i class="fa-solid fa-ballot-check"></i></span>
                <h6 class="mx-3 side-links"> المهام </h6>
            </div>

        </div>