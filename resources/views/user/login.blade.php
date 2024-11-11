<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <title>Login</title>

    </style>
  </head>
  <body>
    <div class="row justify-content-center">
    <div class="col-lg-4">
     <main class="form-signin w-100 m-auto d-flex align-items-center " style="height: 100vh;">
        <div class="container border mt-5 rounded p-4 shadow-lg" style="max-width: 400px;">
          <form >
            <h1 class="h3 mb-3 fw-normal text-center mt-3">Please Login</h1>
            <div class="form-floating mb-3">
              <input type="email" name="email" class="form-control" id="Email" placeholder="Email" required>
              <label for="Email">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" name="password" class="form-control" id="Password" placeholder="Password" required>
              <label for="Password">Password</label>
            </div>

            <a href="/" class="btn btn-primary w-100 py-2" type="submit">Login</a>
        </form>
        <p class="text-center mt-3">Belum punya akun? <a href="/registrasi">Registrasi Sekarang!</a></p>
        </div>
      </main>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
