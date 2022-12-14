<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">

    <title>Multiservicios | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
 <link href="assets/css/cover.css" rel="stylesheet">




    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: #f51f1f;
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
 </head>

  <body class="d-flex h-100 text-center text-bg-dark">
    
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        
 <header class="mb-auto">

      @if(session('error'))
            <div class="alert alert-danger">
              <p>{{session('mensaje')}}</p>
            </div>
          @endif

        <div>
          <h3 class="float-md-start mb-0">Multiservicios Lorica</h3>
          @if (Route::has('login'))
          <nav class="nav nav-masthead justify-content-center float-md-end">
             @auth
            <a class="nav-link fw-bold py-1 px-0" href="{{ url('/dashboard') }}">Dasboard</a>
            @else
            <a class="nav-link fw-bold py-1 px-0 active" aria-current="page"  href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a class="nav-link fw-bold py-1 px-0" href="{{ route('register') }}">Register</a>
            @endif
           @endauth
        </nav>
        @endif
      </div>
</header>

    <main class="px-3">
        <h1>Bienvenido</h1>
        <p class="lead">Alcanzar el ??xito no significa que deba comprometer la calidad. Ya no. Aqu?? es donde entra Multiservicios Lorica. Siga adelante con nuestros servicios que cubren la gama de creatividad, seguridad y efiencia para la constante evoluci??n de hoy y de ma??ana en el mercado. Estamos zumbando con nuevas ideas que muerden el polvo y no toman prisioneros para llegar al punto.</p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Cont??ctanos</a>
        </p>
      </main>

      <footer class="mt-auto text-white-50">
        <p>Servicios que se adaptan a tus necesidades<a href="https://getbootstrap.com/" class="text-white"> Multiservicios Lorica</a>, by <a href="https://twitter.com/kleisy_15" class="text-white"> @KleacorSoft</a>.</p>
      </footer>
    </div>

     
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
      

</body>

</html>
