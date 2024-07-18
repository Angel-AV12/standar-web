<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>U.E Colegio Privado Santa Marta</title>
<meta name="description" content="">
<meta name="author" content="ING Angel Alvarez Villarroel">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
<link rel="icon" href="img/favicon.ico">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<style> @import url('https://fonts.googleapis.com/css2?family=Concert+One&display=swap'); </style>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

</head>
<body>
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
   
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html">U.E Santa Marta</a> </div>
</nav>


<div id="contact-section">
  <div class="container">
    <div class="section-title center">
      <h2>Contacta con nosotros</h2>
      <hr>
    </div>
    <div class="col-md-4">
      <h4>Datos de contacto</h4>
      <div class="space">
        
        <p><i class="fa fa-map-marker"> A.V Libertador Quinta N°55,<br>Sector 23 de Enero, PRJ4+Q5V,<br>Maturín EDO Monagas Venezuela</i><br></p>
        <p><i class='bx bxs-calendar'>  Fundacion: 7 de Mayo del 2001</i></p>
        <p><i class="fa fa-envelope-o">  u.e.c.psantamartha@gmail.com</i></p>
        <p><i class="fa fa-phone">  +58 2916414983 </i></p>
        <p><i class="fa fa-phone">  +58 4128687799</i></p>
        <p><i class="fa fa-book">  Codigo: PD00951608</i></p>
        <p><i class='bx bx-file' >  RIF: J-30804669-8</i></p>
        
      </div>      
    </div>
    <div class="col-md-8">
      <h4>Déjanos un mensaje</h4>
      <form name="sentMessage" id="contactForm"  action="Generador.php" method="post">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input  type="email" name="email" id="email" class="form-control" placeholder="Correo" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea  id="message" name="message" class="form-control" rows="4" placeholder="Mensaje" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Enviar Mensaje</button>
      </form>
    </div>
  </div>
</div>

<div id="footer">
  <div class="container">
    <p>Copyright &copy; Santa Marta. Diseñado  Por <a href="#" rel="nofollow">ING Angel Alvarez</a></p>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>