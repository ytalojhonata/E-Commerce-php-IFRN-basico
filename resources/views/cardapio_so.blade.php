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
        .btn-primary1{
        background-color:#d39e00;
        border-color:   #d39e00;
       }
       .btn-primary1:hover{
         background-color:   #d39e00;
         border-color:   #d39e00;
       }
       .btn-primary2{
        background-color: #994d00;
        border-color:   #994d00;
       }
        .btn-primary2:hover{
        background-color:   #994d00;
        border-color:   #994d00;
       }
        .btn-primary3{
        background-color:   #ffff4d;
        border-color:   #ffff4d;
       }
        .btn-primary3:hover{
        background-color:   #ffff4d;
        border-color:   #ffff4d;
       }
        .btn-primary4{
        background-color:  #e67300;
        border-color:   #e67300;
       }
        .btn-primary4:hover{
        background-color:   #e67300;
        border-color:   #e67300;
       }
        .btn-primary5{
        background-color:s;
        border-color:   #ffe066;
       }
        .btn-primaryy5:hover{
        background-color:   #ffe066;
        border-color:   #ffe066;
       }
       .btn-primary6{
        background-color: #ffe066;
        border-color:   #ffe066;
       }
        .btn-primaryy6:hover{
        background-color:   #ffe066;
        border-color:   #ffe066;
       }
    
    /*-----------------------------#Chessburger#-----------------------------------------*/        
        .btn-secondary1{
        background-color:#d39e00;
        border-color:   #d39e00;
       }
       .btn-secondary1:hover{
         background-color:   #d39e00;
         border-color:   #d39e00;
       }
       .btn-secondary2{
        background-color: #994d00;
        border-color:   #994d00;
       }
     .btn-secondary2:hover{
        background-color:   #994d00;
        border-color:   #994d00;
       }
     .btn-secondary3{
        background-color:   #ffff4d;
        border-color:   #ffff4d;
       }
     ..btn-secondary3:hover{
        background-color:   #ffff4d;
        border-color:   #ffff4d;
       }
     .btn-secondary4{
        background-color:  #e67300;
        border-color:   #e67300;
       }
     .btn-secondary4:hover{
        background-color:   #e67300;
        border-color:   #e67300;
       }
    .btn-secondary5{
        background-color: #ffe066;
        border-color:   #ffe066;
       }
     ..btn-secondary5:hover{
        background-color:   #ffe066;
        border-color:   #ffe066;
       }

    /*-----------------------------#Lariburger#-----------------------------------------*/
     

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
            <i class="nav-link">
                <a href="#" onclick="document.getElementById('logout-form').submit();">Sair</a>
            </i>
            <form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </li>
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
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <div class="imagem-fixa" >
             <img src="imagens/slides.png" width="820 px" height="630 px">
          </div>
         </div>
         
        </div>
        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="imagens/sundae1.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Sundae Chocolate</a>
                </h4>
                <h5>R$ 08,25</h5>
                <p class="card-text">
                  <button type="button" class="btn btn-primary1">Canudinho Waffle</button>  
                  <button type="button" class="btn btn-primary2">Sorvete de Baunilha</button> 
                  <button type="button" class="btn btn-primary3">Cobertura de Nutella</button>
                  <button type="button" class="btn btn-primary4">Castanha</button>
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="imagens/sundae2.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Sundae de Morango</a>
                </h4>
                <h5>R$ 08,25</h5>
                <p class="card-text">
                  <button type="button" class="btn btn-primary1">Canudinho Waffle</button>  
                  <button type="button" class="btn btn-primary2">Sorvete de Baunilha</button> 
                  <button type="button" class="btn btn-primary3">Cobertura de Morango</button>
                  <button type="button" class="btn btn-primary4">Castanha</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="imagens/sundae3.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Sundae Misto</a>
                </h4>
                <h5>R$ 10,25</h5>
                <p class="card-text">
                  <button type="button" class="btn btn-primary1">Canudinho Waffle</button>  
                  <button type="button" class="btn btn-primary2">Sorvete de Baunilha</button> 
                  <button type="button" class="btn btn-primary3">Cobertura de Morango</button>
                  <button type="button" class="btn btn-primary3">Cobertura de Nutella</button>
                  <button type="button" class="btn btn-primary4">Castanha</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="imagens/cascao1.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Cascão de Chocolate</a>
                </h4>
                <h5>R$ 06,50</h5>
                <p class="card-text">
              <button type="button" class="btn btn-primary1">Casca crocante de baunilha</button> 
              <button type="button" class="btn btn-primary2">Sorvete de Baunilha</button> 
              <button type="button" class="btn btn-primary3">Cobertura de Nutella</button>
              <button type="button" class="btn btn-primary4">Castanha</button>
                </p>
              </div>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="imagens/cascao2.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Cascão de Morango</a>
                </h4>
                <h5>R$ 06,50</h5>
                <p class="card-text">
              <button type="button" class="btn btn-primary1">Casca crocante de baunilha</button> 
              <button type="button" class="btn btn-primary2">Sorvete de Baunilha</button> 
              <button type="button" class="btn btn-primary3">Cobertura de Morango</button>
              <button type="button" class="btn btn-primary4">Castanha</button>
                </p>
              </div>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="imagens/cascao3.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Cascão Misto</a>
                </h4>
                <h5>R$ 09,50</h5>
                <p class="card-text">
              <button type="button" class="btn btn-primary1">Casca crocante de baunilha</button> 
              <button type="button" class="btn btn-primary2">Sorvete de Baunilha</button> 
              <button type="button" class="btn btn-primary3">Cobertura de Nutella</button>
              <button type="button" class="btn btn-primary3">Cobertura de Morango</button>
              <button type="button" class="btn btn-primary4">Castanha</button>
                </p>
              </div>
            </div>
          </div>
          </div>

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
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
