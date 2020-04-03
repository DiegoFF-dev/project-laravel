<html lang="pt-br">
    <head>      
        <title>Redirecionamento</title>        
    </head>
    <body >
        <div style = 'display: none;' >          
            <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
            <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post">
                <!-- NãO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                <input type="hidden" name="code" value="D942C3ED888835E554772F8084A680E5" />
                <input type="hidden" name="iot" value="button" />
                <input type="submit" id="pagseguro">
            </form>
            <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
        </div>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>        
    <script src="{{asset('js/script.js')}}"></script>
    </body>
</html> 