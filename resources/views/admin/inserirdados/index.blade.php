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
            <a href='{{route ('dashboard.index')}}' type="submit" class="btn btn-voltar">VOLTAR</a>
            <div class="acao">
                <label class="acao-label">AÇÃO</label>
                <a href="" type="button" class="btn btn-entrada">ENTRADA</a>
                <a href="" type="button" class="btn btn-saida">SAÍDA</a>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="valor-label">VALOR</label>
                        <input type="text" id="valor" class="form-control" placeholder="0,00"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="data-label">DATA</label>
                        <input type="date" id="data" class="form-control"/>
                    </div>
                </div>
            </div>
            <div class="descricao">
                <label class="descricao-label">DESCRIÇÃO</label>
                <input type="text" name="valor" class="form-control custom-input"/>
            </div>
            <a href='' type="submit" class="btn btn-salvar">SALVAR</a>
        </div>
        <img src="{{ asset('/assets/images/logo.png') }}" alt="logo" class="logo">
        <form class="login-form">
            <a href="{{route ('inserirdados.index')}}" type="button" class="btn btn-primary btn-inserir">INSERIR DADOS</a>
            <a href="{{route ('saldoemcaixa.index')}}" type="button" class="btn btn-primary btn-saldo">SALDO EM CAIXA</a>
            <a href="{{route ('consultardados.index')}}" type="button" class="btn btn-primary btn-consultar">CONSULTAR DADOS</a>
        </form>
    </div>
    <script>
        document.getElementById('valor').addEventListener('input', function() {
            let valor = this.value.replace(/\D/g, '');

            let formattedValue = '';
            if (valor.length) {
                formattedValue = '0,0' + valor;
            } else if (valor.length === 2){
                formattedValue = '0,' + valor;
            } else {
                formattedValue = valor.slice(0, -2) + ',' + valor.slice(-2);
                formattedValue = formattedValue.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
            }
            this.value = formattedValue;
        });
    </script>
</body>
</html>
