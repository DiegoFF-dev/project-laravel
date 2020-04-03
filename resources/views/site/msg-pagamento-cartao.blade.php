<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>O PROFETA E O GESTOR</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo-icon.png" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://kit.fontawesome.com/baf0f5547c.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="modal fade" id="pagamento" tabindex="-1" role="dialog" aria- labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Você está inscrito, vamos fazer o pagamento?</h5>
                </div>
                <div class="modal-body">
                    <p>Seus dados foram enviados com sucesso para o responsável, não esqueça de levar o comprovante de pagamento ao acampamento!
                    </p>
                    <br>
                    <p>Estamos aguardando anciosos pela sua presença, até mais!</p>
                    <br>
                </div>
                <div class="modal-footer">                    
                    <a href="{{route('site-redirect-cartao')}}" class="btn btn-success">Pagar</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>