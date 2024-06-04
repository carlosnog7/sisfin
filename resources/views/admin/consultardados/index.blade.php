<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar Dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/consultardados.css" rel="stylesheet">
</head>

<body>
    <div class="custom-box d-flex flex-column align-items-center">
        <div class="inner-box">
            <a href='{{ route('dashboard.index') }}' type="submit" class="btn btn-voltar">VOLTAR</a>
            <table class="table">
                <label class="movimentacoes">ULTIMAS MOVIMENTAÇÕES</label>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="table-success">1</th>
                        <td class="table-success">R$200,00</td>
                        <td class="table-success">Doação</td>
                        <td class="table-success">24/04/2024</td>
                    </tr>
                    <tr>
                        <th scope="row" class="table-danger">2</th>
                        <td class="table-danger">R$100,00</td>
                        <td class="table-danger">Limpeza</td>
                        <td class="table-danger">24/04/2024</td>
                    </tr>
                    <tr>
                        <th scope="row" class="table-success">3</th>
                        <td class="table-success">R$600,00</td>
                        <td class="table-success">Dizimo</td>
                        <td class="table-success">24/04/2024</td>
                    </tr>
                    <tr>
                        <th scope="row" class="table-danger">4</th>
                        <td class="table-danger">R$50,00</td>
                        <td class="table-danger">Marmita</td>
                        <td class="table-danger">24/04/2024</td>
                    </tr>
                </tbody>
            </table>
            <div href='' type="submit" class="relatorio">GERAR RELATÓRIO</div>
                <button class="btn btn-relatorio-entradas">ENTRADAS</button>
                <button class="btn btn-relatorio-saidas">SAÍDAS</button>
                <button class="btn btn-relatorio-geral">GERAL</button>
            <div href='' type="submit" class="planilha">GERAR PLANILHA</div>
                <button class="btn btn-planilha-entradas">ENTRADAS</button>
                <button class="btn btn-planilha-saidas">SAÍDAS</button>
                <button class="btn btn-planilha-geral">GERAL</button>
        </div>
        <img src="{{ asset('/assets/images/logo.png') }}" alt="logo" class="logo">
        <form class="login-form">
            <a href="{{ route('inserirdados.index') }}" type="button" class="btn btn-primary btn-inserir">INSERIR
                DADOS</a>
            <a href="{{ route('consultardados.index') }}" type="button" class="btn btn-primary btn-consultar">CONSULTAR
                DADOS</a>
        </form>
    </div>
</body>

</html>
