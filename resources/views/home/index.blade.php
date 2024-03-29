<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Laricook</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
   <link rel="stylesheet" href="{{ asset('vendor/Ionicons/css/ionicons.min.css') }}">
  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

  <style type="text/css">
    
    .bg-dark{
      background-color: black!important;
    }
    li a:hover, .dropdown:hover .dropbtn {
    background-color:gray;
    }
    li.dropdown {
      display: inline-block;  
    }
    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    }
    .dropdown-content a {
    color: black;
    padding: 12px 62px;
    text-decoration: none;
    display: block;
    text-align: left;
    font-size: large;
    }

 .dropdown-content a:hover{background-color: #CDC5BF;}

 .dropdown:hover .dropdown-content {
    display: block;
    }
 .sobremesa-foto{
  position: absolute;
  top: 1270px;
  left: 700px;
  
 }
 .salada-img{
  height: 550px; 
  width: 950px;
  position: relative;
  right: 26px;
  top: 10px;
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
     .logo{
      height: 90px;
      width: 200px;
      position: relative;
      right: 120px;
    }
    .carouselExampleFade{
      width:950px; 
      height: 630px;
    }
   
    
    .w-100{
      width: 950px!important;
      height: 650px;
    }
    .carousel-item{
      width:930px!important; 
    }

                             
  </style>

</head>

<body>
  
    
  
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top" style="height: 90px">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}"><img class="logo" src="imagens/logonew.png"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            
          <div class="btn-group">
            <li class="nav-item active"><a class="nav-link" href="{{ url('/cardapio') }}">Cardápio</a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ url('/carrinho') }}">Carrinho</a></li>
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
          </div>
          
          </li>
          </ul>
      </div>
    </div>
  </nav>

  <header>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="height: 630px; width: 980px; position: relative; left: 210px;">
  <div class="carousel-inner" style="height: 630px; width: 1020px;">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagens/slideh.png" width="750" height="630" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/slides.png" width="750" height="630">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/slidesalada.png" width="750" height="630">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
  </header>

  <!-- Page Content -->
  <div class="container "style="width: 900px;">
    <a href="{{ url('/cardapio_saladas') }}"><img class="salada-img" src="imagens/saladas.png" ></a>
   </div>

   
    <div class="row" style="width: 1000px; position: relative; left: 120px;">
      <div class="col-lg-6" style="position: relative; top: 10px;height: 610px!important" >
        <a href="#"><img class="mySlides" src="imagens/delivery1.jpg" style="width:90%" height="600px;">
           <img class="mySlides" src="imagens/delivery3.jpg" style="width:90%" height="600px;">
           <img class="mySlides" src="imagens/delivery2.jpg" style="width:90%" height="600px;"></a>
    </div>
  
  </div>
  <div class="sobremesa-foto">
  <a href="{{ url('/cardapio_sobremesas') }}"><img src="imagens/sobremesa.jpg" style=" height: 560px;
  width: 520px;"></a>
    
  </div>
   
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); 
}
</script>

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