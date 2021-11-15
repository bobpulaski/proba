<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>--}}
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    {{--<div class="container">
        <form action="{{ route('organization.add') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="text-white font-bold bg-purple-700 hover:bg-purple-800 py-2 px-4 rounded"">Submit</button>
                    </form>
    </div>--}}

    <div class="font-sans min-h-screen antialiased bg-gray-900 pt-24 pb-5">
        <div class="flex flex-col justify-center sm:w-96 sm:m-auto mx-5 mb-5 space-y-8">
            <h1 class="font-bold text-center text-4xl text-yellow-500">Your<span class="text-blue-500">App</span></h1>
            <form action="{{ route('organization.add') }}" method="post">
                @csrf
                <div class="flex flex-col bg-white p-10 rounded-lg shadow space-y-6">
                    <h1 class="font-bold text-xl text-center">Sign in to your account</h1>

                    <div class="flex flex-col space-y-1">
                        <input type="text" name="username" id="username" class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow" placeholder="E-mail" />
                    </div>

                    <div class="flex flex-col space-y-1">
                        <input type="password" name="password" id="password" class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow" placeholder="Password" />
                    </div>

                    <div class="relative">
                        <input type="checkbox" name="remember" id="remember" checked class="inline-block align-middle" />
                        <label class="inline-block align-middle" for="remember">Remember me</label>
                    </div>

                    <div class="flex flex-col-reverse sm:flex-row sm:justify-between items-center">
                        <a href="#" class="inline-block text-blue-500 hover:text-blue-800 hover:underline">Forgot your password?</a>
                        <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-2 rounded focus:outline-none shadow hover:bg-blue-700 transition-colors">Log In</button>
                    </div>
                </div>
            </form>
            <div class="flex justify-center text-gray-500 text-sm">
                <p>&copy;2021. All right reserved.</p>
            </div>
        </div>
    </div>

</body>
</html>
