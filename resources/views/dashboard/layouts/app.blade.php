

@include('dashboard.layouts.header')
<body>
    <div class="content-grid">

        <!-- sidebar -->

        @include('dashboard.layouts.sidebar')

        <div class="parent-sec">

            @include('dashboard.layouts.nav')

            @yield('content')

        </div>

    </div>

    @include('dashboard.layouts.footer')
