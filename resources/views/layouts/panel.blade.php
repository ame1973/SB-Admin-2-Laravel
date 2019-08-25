<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
</head>
<body class="@section('body_class')@show">
    @yield('body_main_content')
    @include('layouts.end_scripts')
</body>
</html>