@extends ('layouts.panel')

@section('html_title','SB Admin 2 | 404')

@section ('body_main_content')

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <div style="min-height: 100%;min-height: 80vh;display: flex;align-items: center;">
                <div class="container-fluid">
                    <!-- 404 Error Text -->
                    <div class="text-center">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5">Page Not Found</p>
                        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                        <a href="{{ url()->previous() }}">&larr; Back to previous page</a>
                    </div>
                </div>
            </div>



            <!-- Footer -->
            <footer class="sticky-footer bg-white fixed-bottom">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

@endsection
