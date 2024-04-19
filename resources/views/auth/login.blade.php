<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/login.css" rel="stylesheet">
</head>
<body>
    <div class="custom-box d-flex flex-column align-items-center">
        <img src="{{ asset('/assets/images/logo.png') }}" alt="logo" class="logo">
        <form class="login-form">
            <div data-mdb-input-init class="form-outline mb-4 custom-label">
                <label class="form-label" for="form2Example1">LOGIN</label>
                <input type="email" id="form2Example1" class="form-control custom-input"/>
            </div>

            <div data-mdb-input-init class="form-outline mb-4 custom-label">
                <label class="form-label" for="form2Example2">SENHA</label>
                <input type="password" id="form2Example2" class="form-control custom-input"/>
            </div>
            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4 entrar btn-entrar">ENTRAR</button>
        </form>
    </div>
</body>
</html>
