<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Login - {{ config('app.name') }}</title>
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <form class="bg-white shadow-xl mb-4 flex flex-wrap justify-center" action="{{ route('user.login.post') }}" method="POST" role="form">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Sign in</h1>
                    @csrf
                    <input class="block border border-grey-light w-full p-3 rounded mb-4" type="email" id="email" name="email" placeholder="Email address" autofocus value="{{ old('email') }}">
                    <input class="block border border-grey-light w-full p-3 rounded mb-4" type="password" id="password" name="password" placeholder="Password">
                    <button class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-dark focus:outline-none my-1" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>