<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
</head>
<body class="text-gray-800 font-roboto">

    <!-- start sidebar -->
    @include('layouts.sidebar')
    <!-- end sidebar -->
    <x-topbar title="Dasboard" />
    <!-- start main -->
    @include('layouts.content')
    <!-- end main -->
    @include('layouts.footer')
    <!-- start script -->
    @include('layouts.script')
    <!-- end script -->
</body>
</html>
