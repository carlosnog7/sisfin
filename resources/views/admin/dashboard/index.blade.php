<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/layout.css" rel="stylesheet">
</head>
<body>
    <div class="custom-box d-flex flex-column align-items-center">
        <img src="{{ asset('/assets/images/logo.png') }}" alt="logo" class="logo">
        <form class="login-form">
            <a href="{{route ('inserirdados.index')}}" type="button" class="btn btn-primary btn-inserir">INSERIR DADOS</a>
            <a href="{{route ('consultardados.index')}}" type="button" class="btn btn-primary btn-consultar">CONSULTAR DADOS</a>
        <img src="{{ asset('assets/images/cruz.png')}}" alt="cruz" class="cruz">
        </form>
    </div>
</body>
</html>
