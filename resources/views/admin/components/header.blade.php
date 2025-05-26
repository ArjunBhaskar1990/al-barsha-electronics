<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Al-Barsha Electronics :: Administrator</title>

    @include('admin.components.styles')
</head>

<body>


    @yield('content')
    </div>

    @include('admin.components.scripts')
</body>

</html>
