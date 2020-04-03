<div id="home">
    <nav class="navbar navbar-previous navbar-expand-lg navbar-light fixed-top" id="navscroll">
        <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sobre">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#local">Local</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#encontros">Encontros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#acoes">Ações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#inscricao">Inscrições</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contato">Contato</a>
                </li>
                <li class="nav-item">
                    @auth
                    <a class="nav-link" href="{{ url('/admin') }}">Home</a>
                    @else
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    @endauth
                </li>
            </ul>
        </div>
    </nav>
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
        <!-- Overlay-->
        <div class="overlay"></div>

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class=""></li>
            <li data-target="#bs-carousel" data-slide-to="1" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="2" class=""></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-1"></div>
                <div class="hero">
                    <img src="{{asset('images/semfundo.png')}}" class="img-responsive mx-auto d-block">
                    <div class="days">
                        <h3>15 á 17 de Maio de 2020</h3>
                    </div>
                </div>
                <div class="saiba-mais text-center">
                    <a href="#sobre">
                        <h4>Saiba Mais</h4><i class="fa fa-angle-down"></i>
                    </a>
                </div>
            </div>
            <!--
          <div class="item slides active">
            <div class="slide-2"></div>
            <div class="hero">
              <hgroup>
                <h1>We are smart</h1>
                <h3>Get start your next awesome project</h3>
              </hgroup>
              <button class="btn btn-hero btn-lg" role="button">See all features</button>
            </div>
          </div>
          <div class="item slides">
            <div class="slide-3"></div>
            <div class="hero">
              <hgroup>
                <h1>We are amazing</h1>
                <h3>Get start your next awesome project</h3>
              </hgroup>
              <button class="btn btn-hero btn-lg" role="button">See all features</button>
            </div>
          </div>
          -->
        </div>
    </div>
</div>