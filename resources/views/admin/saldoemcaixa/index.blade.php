<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saldo em Caixa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/saldoemcaixa.css" rel="stylesheet">
</head>
<body>
    <div class="custom-box d-flex flex-column align-items-center">
        <div class="inner-box">

        </div>
        <img src="{{ asset('/assets/images/logo.png') }}" alt="logo" class="logo">
        <form class="login-form">
            <a href="{{route ('inserirdados.index')}}" type="button" class="btn btn-primary btn-inserir">INSERIR DADOS</a>
            <a href="{{route ('saldoemcaixa.index')}}" type="button" class="btn btn-primary btn-saldo">SALDO EM CAIXA</a>
            <a href="{{route ('consultardados.index')}}" type="button" class="btn btn-primary btn-consultar">CONSULTAR DADOS</a>
        </form>
    </div>
</body>
</html>
