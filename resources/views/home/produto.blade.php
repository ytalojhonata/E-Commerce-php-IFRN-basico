<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cardapio-Lariccok</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
   
   <style type="text/css">
       .navbar{
        background-color: black!important;
       }

     
    /*-----------------------------#Pagina-geral#-----------------------------------------*/
    .imagem-fixa{
      width: 825px;
      height: 635px;
    }
    button{
      height: 30px;
    }
    .bg-dark{
      background-color: black!important;
    }
    .btn-danger{
      background-color: black!important;
      border-color: black!important;
    }
    .dropdown-menu{
      position:relative;
      left: 1060px;
      background-color: #ff3333!important;
      border-color: #ff3333!important;
      color: white;
    }
    .dropdown-item{
      color: white;
    }
    

   </style>
</head>


<body>
  

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">Logo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/carrinho') }}">Carrinho
              <span class="sr-only">(current)</span>
            </a>
          </li>
          @if (Auth::guest())
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/login') }}">Entrar
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/register') }}">Cadastre-se
              <span class="sr-only">(current)</span>
            </a>
          </li>
         @else
         <li class="nav-item active">
          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit();">Sair!
            </a>
             <form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </div>
            </li>
        @endif
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
     
      <div class="col-lg-3">

        <h1 class="my-4">Cardápio</h1>
        <div class="list-group">
          <a href="{{url('/cardapio_sanduiches')}}" class="list-group-item">Sanduíches</a>
          <a href="{{url('/cardapio_saladas')}}" class="list-group-item">Saladas</a>
          <a href="{{url('cardapio_sobremesas') }}" class="list-group-item">Sobremesas</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          
          <div class="imagem-fixa" >
             <img src="imagens/slideh.png" width="820 px" height="630 px">
          </div>
         </div>
   
        <div class="row">
         @foreach($registros as $registro)
          <div class="col-lg-4 col-md-6 mb-4" >
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src=" imagens/{{ $registro->imagem }}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{ $registro->nome }}</a>
                </h4>
                <h5>R$ {{ number_format($registro->valor, 2, ',', '.') }}</h5>
                <p >
                  {{ $registro->descricao }}
                </p>
              </div>
                <form method="POST" action="{{ route('carrinho.adicionar') }}">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $registro->id }}">
                <button class="btn-large col l6 m6 s6 green accent-4 tooltipped" data-position="bottom" data-delay="50" data-tooltip="O produto será adicionado ao seu carrinho">Comprar</button>   
            </form>
            </div>
           
          </div>
          @endforeach
          
        </div>
     <!-- /.row -->
         
        
      </div>
      <!-- /.col-lg-9 -->
    </div>
    <!-- /.row -->
    
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Laricook-2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
