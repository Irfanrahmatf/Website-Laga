<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('dist/css/style2.css') }}">
    <title>Login</title>
</head>

<body>
    {{-- Navbar --}}
    @include('layouts.Navbar')
    {{-- End Navbar --}}
    <div class="text-container">
        <h1 class="text-heading">Masuk Lapor Warga</h1>
    </div>

    <div class="my-form">
        <div class="mb-3">
            <label for="exampleInputUsername" class="form-label">Username atau Email</label>
            <input type="text" class="form-control" id="exampleInputUsername" />
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" />
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Login</button>
            <div class="sudah-punya-akun">
                Belum punya akun? <a href="/resources/views/layouts/Daftar.blade.php">Daftar</a>
            </div>
        </div>
    </div>
</body>

</html>
