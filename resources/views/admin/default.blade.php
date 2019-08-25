@extends ('layouts.panel')

@section ('body_id', 'page-top')

@section ('body_main_content')

    <div id="wrapper">
        @include('layouts.body_menu_sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.body_topbar')
                @yield('content')
            </div>

        @include('layouts.body_footer')
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('layouts.body_logout_modal')

@endsection