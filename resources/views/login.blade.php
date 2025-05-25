<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/storage/assets/css/main.css" rel="stylesheet" media="screen">
    <link href="/storage/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <title>Al-Barsha Electronics</title>
</head>

<body
    style="background-color:black; background-image: url('/storage/uploads/login/albarsha.png'); background-repeat:no-repeat;  background-size: cover">

    {{-- @error('name')
                <span> {{ $messages }}</span>
        @enderror
        @error('password')
                <span> {{ $messages }}</span>
        @enderror --}}



    <div class="loginscreen">

        <div class="d-flex justify-content-center mt-1">
            <img class="login_logo" src="{{ asset('/storage/uploads/logo/logo.png') }}" alt="Al-Barsha">
        </div>
        <form action="{{ route('login.user') }}" method="POST" class="mt-5">
            @csrf
            <div class="d-flex justify-content-center ">
                <span class="errorcolor" id="username"></span>
                <span class="errorcolor" id="password"></span>


                @error('name')
                   <span class="errorcolor" id="username">{{ $message }}</span>
                @enderror
            </div>

            <div class="logininput mb-2 d-grid justify-content-center">
                <label class="text-white">Username</label> <br>
                <input class="mb-2" type="text" name="name" id="name" /> <br>
            </div>
            <div class="logininput mb-4 d-grid justify-content-center">
                <label class="text-white">Password</label> <br>
                <input class="mb-2" type="password" name="password" id="password" />
            </div>
            <div class="logininput mt-4 mb-3 d-grid justify-content-center">
                <button type="submit" class="btn btn-primary rounded fw-bold">Login</button>
            </div>
        </form>

    </div>

    <script src="/storage/assets/js/bootstrap.min.js"></script>
</body>

</html>
