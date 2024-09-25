<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Login</title>
</head>
<body style="background-color: #f2f2f2">
  <section style="margin-top: 100px">
    <div class="container py-5 col xxl-6">
        <h3 class="fw-bold mb-3">Halaman Login</h3>
        <form action="{{route('action-login')}}" method="POST">
            @csrf
            <div class="form-group" mb-3>
                <label for="">Masukan email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="formgroup mb-3">
                <label for="">Masukan Pasword</label>
                <input type="password" name="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</section>

</body>
</html>


