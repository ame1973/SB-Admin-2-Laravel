<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
</head>
<body class="@section('body_class')@show" id="@section('body_id')@show">
    @yield('body_main_content')
    @include('layouts.end_scripts')
    @section('body_end_scripts') @show
</body>
</html>