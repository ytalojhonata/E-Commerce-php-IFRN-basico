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
    .navbar{
      height: 130px;
    }
    .bg-dark{
      background-color: #ff3333!important;
    }
    li a:hover, .dropdown:hover .dropbtn {
    background-color:black;
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
  top: 1160px;
  left: 700px;
  
 }
 .salada-img{
  height: 400px; 
  width: 1340px;
  position: relative;
  right: 117px;
 }

                              
  </style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top" style="height: 116px">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="imagens/logo.png"
        style="height: 110px;width: 180px;"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            
          <div class="btn-group">
            <a class="nav-link" href="{{ url('/cardapio') }}">Cardápio completo</a>
            <a class="nav-link" href="{{ url('/cardapio_sanduiches') }}">Sanduíches</a>
            <a class="nav-link" href="{{ url('/cardapio_saladas') }}">Saladas</a>
            <a class="nav-link" href="{{ url('/cardapio_sobremesas') }}">Sobremesas</a>
            <a class="nav-link" href="{{ route('login')}}">Login</a>
            <a class="nav-link" href="{{ route('register')}}">Registrar</a>
            <a class="nav-link" href="{{ url('/carrinho') }}">Carrinho</a>
          

           </div>
          
          </li>
          </ul>
      </div>
    </div>
  </nav>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('imagens/slideh.png'); height: 700px;">
          

        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style= "background-image: url('imagens/Slidec.png');height: 700px; width: 1343px;" >
         
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('imagens/slides.png');height: 700px; width: 1343px;">
          
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container" style="width: 1340px;">
    <a href="{{ url('/cardapio_saladas') }}"><img class="salada-img" src="imagens/saladas.png" ></a>
   </div>

   
    <div class="row" style="width: 1340px;">
      <div class="col-lg-6">
        <a href="#"><img class="mySlides" src="imagens/delivery1.jpg" style="width:90%" height="600px;">
           <img class="mySlides" src="imagens/delivery3.jpg" style="width:90%" height="600px;">
           <img class="mySlides" src="imagens/delivery2.jpg" style="width:90%" height="600px;"></a>
    </div>
  
  </div>
  <div class="sobremesa-foto">
  <a href="{{ url('/cardapio_sobremesas') }}"><img src="imagens/sobremesa.jpg" style=" height: 590px;
  width: 540px;"></a>
    
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