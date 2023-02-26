<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    {{-- Style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="row justify-content-center" style="margin-top: 150px">
        <div class="col-lg-6">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-bold text-center">Form Registrasi</h1>
                
                <form action="/register" method="POST">
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" name="name" id="name" required value="{{ old('name') }}" placeholder="Name">
                        <label for="name">Nama</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" id="email" required value="{{ old('email') }}" placeholder="name@emailexample.com">
                        <label for="email">Alamat Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom" name="password" id="password" required placeholder="Password">
                        <label for="password">Kata Sandi</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
                </form>
                <small class="d-block mt-3">Sudah punya akun? <a href="/login" class="text-primary">Login di sini</a></small>
            </main>
        </div>
    </div>

    

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>