@php
session_start();
$data = '15 á 17 de Maio de 2020';

//Diferença dos dias faltantes para iniciar o acampamento
$date1 = date_create(date('Y-m-d'));
$date2 = date_create("2019-10-18");
$diff = date_diff($date1, $date2);
$dia_evento = $diff->format("%a");
@endphp
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>O PROFETA E O GESTOR</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo-icon.png" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://kit.fontawesome.com/baf0f5547c.js" crossorigin="anonymous"></script>
</head>

<body data-spy="scroll" data-target="#navbarNav">
    @include('site.layouts.header')
    <div class="container-fluid padding section-ascape" id="sobre">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="">A Ascape</h2>
                <hr class="my-4">
                <p class="color-p text-center"> Apoia e desenvolve ações em defesa da vida através de execução de
                    projetos sociais, culturais e artísticos. </p>
            </div>
        </div>
        <div class="wave">
            <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path
                            d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                            id="Path">
                        </path>
                    </g>
                </g>
            </svg>
        </div>
    </div>
    <div class="container">
        <div class="row sobre">
            <div class="col-md-6 col-sm-12 item">
                <h4 class="text-center"><img src="{{ asset('images/1.png') }}">A origem</h4>
                <p> O Acampamento nasceu nos EUA destinado a executivos, que eram afastados do seu ambiente de trabalho
                    por uma semana para cuidar da pessoa do gestor transformando-o numa liderança servidora. </p>
            </div>
            <div class="col-md-6 col-sm-12 item">
                <h4 class="text-center"><img src="{{asset('images/2.png')}}">Finalidade</h4>
                <p>Desenvolver e aprimorar o sentido de equipe e liderança servidora, para melhorar o relacionamento
                    entre profissionais de diferentes áreas cuidando da dimensão humana e afetiva, o que incide
                    diretamente na melhoria da qualidade de vida. </p>
            </div>
            <div class="col-md-6 col-sm-12 item">
                <h4 class="text-center"><img src="{{asset('images/3.png')}}">Objetivo</h4>
                <p>Formar líderes e qualificar pessoas para o trabalho em equipe e em comunidade, despertando no mesmo,
                    a habilidade de influênciar e mobilizar pessoas em vista de um objetivo comum.</p>
            </div>
            <div class="col-md-6 col-sm-12 item">
                <h4 class="text-center"><img src="{{asset('images/4.png')}}">Visão</h4>
                <p>Qualificar o ser humano para assumir a responsabilidade da liderança servidora. </p>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="local">
        <div class="row text-center section">
            <div class="col-sm-6 ">
                <div>
                    <h2 class="">Atividades</h2>
                    <hr class="my-4">
                    <p>O Acampamento é realizado geralmente na zona rural, visando o afastamento das atividades de
                        rotina dos partipantes. Ocorrem atividades desde as primeiras horas da manhã até a noite. São
                        divididos em equipes, onde irão aprender ou reaprender o trabalho e a convivência em grupo,
                        falando, ouvindo e convivendo com as limitações dos companheiros.</p>
                </div>
            </div>
            <div class="col-sm-6 ">
                <h2 class="">Local</h2>
                <hr class="my-4">
                <div>
                    <p>
                        Acontece no Mosteiro da Misericórdia, em um sítio situado em contenda/PR , região metropolitana
                        de Curitiba/PR. Um lugar em meio a exuberante Mata Atlântica, sendo uma oportunidade incrível
                        para se retirar da correria do dia-a-dia e viver uma experiência transformadora!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid proximos-encontros" id="encontros">
        <div class="row text-center section-proximos">
            <div class="col-md">
                <h2 class="">PRÓXIMOS ENCONTROS</h2>
                <hr class="my-4">
                <div class="proximos-data">
                    <h4 class="padding-conteudo">{{$data}}</h4>
                    <a href="#inscricao"><button class="btn btn-lg">Participe</button></a>

                </div>
            </div>
        </div>
        <div class="container-fluid text-center d-none d-sm-block">
            <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                <div class="rect">
                    <h2>250</h2>
                    <p>Inscrições</p>
                </div>
                <div class="rect">
                    <p>Faltam</p>
                    <h2>{{$dia_evento}} </h2>
                    <p>Dias</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid action text-center" id="acoes">
        <h2 class="">AÇÕES</h2>
        <hr class="my-4">
        <div class="row">
            <div class="col-md-2 col-sm-6">
                <div class="icon">
                    <i class="material-icons">palette</i>
                </div>
                <h4>Arte</h4>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="icon">
                    <i class="material-icons">sports</i>
                </div>
                <h4>Esporte</h4>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="icon">
                    <i class="material-icons">accessibility_new</i>
                </div>
                <h4>Yoga</h4>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="icon">
                    <i class="material-icons">extension</i>
                </div>
                <h4>Cultura</h4>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="icon">
                    <i class="material-icons">library_music</i>
                </div>
                <h4>Música</h4>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="icon">
                    <i class="material-icons">home</i>
                </div>
                <h4>Acampamento</h4>
            </div>
        </div>
    </div>
    <div class="pricing py-5 faca-inscricao" id="inscricao">
        <div class="container">
            <div class="row">
                <h2 class="text-center">FAÇA SUA INSCRIÇÃO E GARANTA SUA VAGA NESSE ACAMPAMENTO QUE PODE MUDAR SUA FORMA
                    DE LIDERAR</h2>
                <div class="col align-self-center">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Investimento</h5>
                            <h6 class="card-price text-center">R$ 650,00</h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Alimentação Completa</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Hospedagem em barracas</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Estrutura de banho</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Deslocamento saindo de
                                    Curitiba</li>
                            </ul>
                            <button class="btn btn-block btn-my btn-primary text-uppercase" data-toggle="modal"
                                data-target="#modalForm">Increva-se</button>
                        </div>
                    </div>
                </div>
                @yield('inscricao')
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="container" id="contato">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contato</h5>
                    <p>+55 041 3564-2628</p>
                    <p>oprofetaeogestor@gmail.com</p>
                </div>
                <div class="col-md-4">
                    <h5>Endereço</h5>
                    <p>Rua Nova Aurora, 1340.</p>
                    <p>Sitio Cercado, Curitiba/PR</p>
                    <p>CEP: 81920-650</p>
                </div>
                <div class="col-md-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.7574933240926!2d-49.26835998548829!3d-25.546453643757683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcfbead4eb889f%3A0xbeb2e55b5cebb333!2sR.%20Nova%20Aurora%2C%201340%20-%20S%C3%ADtio%20Cercado%2C%20Curitiba%20-%20PR%2C%2081920-650!5e0!3m2!1sen!2sbr!4v1583287796170!5m2!1sen!2sbr"
                        width="400" height="230" frameborder="0" style="border:0;" allowfullscreen="">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="second-bar">
            <div class="container">
                <h2 class="logo"><a href="#">Ascape</a></h2>
                <div class="social-icons">
                    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="google"><i class="fab fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <div class="whatsapp-fixo">
        <a
            href="https://wa.me/5541985227055?text=Olá,%20gostaria%20de%20saber%20mais%20informações%20sobre%20o%20acampamento?">
            <img src="images\whatsapp.png" alt="Fale Conosco pelo WhatsApp" />
        </a>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/jquery.mask.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>