<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir Dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/inserirdados.css" rel="stylesheet">
</head>

<body>
    <div class="custom-box d-flex flex-column align-items-center">
        <div class="inner-box">
            <a href='{{ route('dashboard.index') }}' type="button" class="btn btn-voltar">VOLTAR</a>
            <form id="formInserirDados" action="{{ route('inserirdados.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="valor-label" for="valor">VALOR</label>
                            <input type="text" id="valor" name="valor" class="form-control" placeholder="0,00" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="data-label" for="data">DATA</label>
                            <input type="date" id="data" name="data" class="form-control" required />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="descricao-label" for="descricao">DESCRIÇÃO</label>
                    <input type="text" id="descricao" name="descricao" class="form-control custom-input" required />
                </div>
                <div class="form-group">
                    <label class="acao-label">AÇÃO</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="acao" id="acao-entrada" value="entrada" required>
                        <label class="form-check-label" for="acao-entrada">
                            Entrada
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="acao" id="acao-saida" value="saida" required>
                        <label class="form-check-label" for="acao-saida">
                            Saída
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-salvar">SALVAR</button>
            </form>
        </div>
        <a href='{{ route('dashboard.index') }}'>
            <img src="{{ asset('/assets/images/logo.png') }}" alt="logo" class="logo">
        </a>
        <form class="login-form">
            <a href="{{ route('inserirdados.index') }}" type="button" class="btn btn-primary btn-inserir">INSERIR
                DADOS</a>
            <a href="{{ route('consultardados.index') }}" type="button"
                class="btn btn-primary btn-consultar">CONSULTAR DADOS</a>
        </form>
    </div>
</body>

</html>
