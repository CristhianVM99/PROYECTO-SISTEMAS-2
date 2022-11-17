<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PetPlus</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
{{-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> --}}
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
<link rel="shortcut icon" href="img/pagina/icono.ico" type="image/x-icon">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
{{-- <link rel="stylesheet" type="text/css"  href="css/bootstrap.min2.css"> --}}
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">PetPlus</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">¿Como Cuidar a tu Mascota?</a></li>
        <li><a href="#restaurant-menu" class="page-scroll">Nosotros</a></li>
        <li><a href="#portfolio" class="page-scroll">Servicios y noticias</a></li>
        <li><a href="#" class="page-scroll">Farmacia Online</a></li>
        {{-- #team --}}
        <li><a href="#call-reservation" class="page-scroll">Contacto</a></li>
        <li><a href="{{ route('login') }}" class="page-scroll btn-login"> Login </a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>PetPlus</h1>
            <p>Servicio / Atencion / Productos</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Comezemos</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
        <div class="about-img"><img src="img/pagina/cuidando_con_mascotas.jpg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Cuidando a tu Mascota</h2>
          <hr>
          <p>La hormona Oxitocina, que se secreta cuando el cuerpo experimenta placer, también se secreta cuando una mascota y su dueño experimentan interacciones positivas entre si</p>
          <h3>¿Sabias que?</h3>
          <p>Entre más fuerte sea el vínculo entre la persona y su mascota, mayor es la posibilidad de que la persona secrete esta hormona, creando estados de felicidad y también de salud. </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>¿Quienes Somos?</h2>
      <hr>
      <p>Una pequeña descripcion de nosotros es la siguiente.
      </p>
    </div>
  </div>
  <div class="restaurant-block">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" txt="Actualmente, es una Clínica Veterinaria multidisciplinaria que ofrece diferentes especialidades, conformada por un staff de 25 Médicos Veterinarios, liderados por el Dr. Pancho Cavero, en las sedes de Barranco, Lince, San Borja, Los Olivos y San Juan de Miraflores, ofreciendo servicios médicos de calidad con el uso de equipos médicos de última generación.">
        <img src="img/pagina/carousel_f3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" txt="La Clínica Veterinaria PetPlus inició sus actividades el 01 de Octubre del 2004. Sus fundadores, el Dr. Pancho Cavero y la Dra. Fiorella Cochella, decidieron ofrecer una propuesta médica innovadora, integral y de calidad.">
        <img src="img/pagina/carousel_f.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" txt="Desde su fundación, fue conocida por el desarrollo de nuevas técnicas y herramientas quirúrgicas y de rehabilitación, que permitieron ser una Clínica Veterinaria referente en el País y diferenciarse con propuestas innovadoras, como fue la silla de ruedas para mascotas, que permite realizar una adecuada rehabilitación en casos con buen pronóstico, así como ser instrumento de movilización del paciente aportando calidad de vida en otros casos.">
        <img src="img/pagina/carousel_f2.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      {{-- <span class="visually-hidden">Previous</span> --}}
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      {{-- <span class="visually-hidden">Next</span> --}}
      <span class="carousel-control-next-icon" aria-hidden="true"></span>      
    </button>
</div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Servicios</h2>
      <hr>
      <p>Ofrecemos los siguientes servicios a nuestros clientes.</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="categories">
        <ul class="cat">
          <li>
            <ol class="type">
              <li><a href="#" data-filter="*" class="active">All</a></li>
              <li><a href="#" data-filter=".breakfast">Servicios</a></li>
              <li><a href="#" data-filter=".lunch">Especialidades</a></li>
              <li><a href="#" data-filter=".dinner">Examenes Complementarios</a></li>
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/servicios/serv_01.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Acupuntura</h4>
              </div>
              <img src="img/servicios/serv_01.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/servicios/serv_02.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Cirugia Especializada</h4>
              </div>
              <img src="img/servicios/serv_02.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/servicios/serv_03.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Medicina Regenerativa</h4>
              </div>
              <img src="img/servicios/serv_03.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/servicios/serv_04.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Nutricion Clinica</h4>
              </div>
              <img src="img/servicios/serv_04.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/servicios/serv_05.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Oncologia</h4>
              </div>
              <img src="img/servicios/serv_05.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/servicios/serv_06.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Anestesia</h4>
              </div>
              <img src="img/servicios/serv_06.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/servicios/serv_07.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Cirugia General</h4>
              </div>
              <img src="img/servicios/serv_07.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/servicios/serv_08.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Nefrologia y Urologia</h4>
              </div>
              <img src="img/servicios/serv_08.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/servicios/serv_09.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Odontologia</h4>
              </div>
              <img src="img/servicios/serv_09.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/servicios/serv_10.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Tranfusion Sanguinea</h4>
              </div>
              <img src="img/servicios/serv_10.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/servicios/serv_11.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Cardiologia</h4>
              </div>
              <img src="img/servicios/serv_11.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/servicios/serv_12.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Endocrinologia</h4>
              </div>
              <img src="img/servicios/serv_12.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team Section -->
<div id="team" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-10 col-md-offset-1 section-title">
        <h2>Veterinarios</h2>
        <hr>
        <p>Contamos con Profesionales de calidad en sus campos y asi mismo doctores expertos.</p>
      </div>
      <div id="row">
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="img/pagina/vet-01.jfif" alt="..."></div>
            <div class="caption">
              <h3>DRA. FIORELLA COCHELLA</h3>
              <p>MV. MBA. Dplm. Fiorella Cochella. Médica Veterinaria Etóloga Clínica, orientada hacia el comportamiento y bienestar animal de animales de compañía. Egresada de la Universidad Nacional Mayor de San Marcos (UNMSM), Maestra en Administración de Negocios (UPC), Diplomado en Comportamiento animal (VetesWeb)</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="img/pagina/vet-02.jpg" alt="..."></div>
            <div class="caption">
              <h3>DR. PANCHO CAVERO</h3>
              <p>Médico Veterinario egresado de la Universidad Nacional Mayor de San Marcos, líder de opinión en temas de Neurología, traumatología y Ortopedia Veterinaria, Diplomado de Traumatología y Ortopedia en CEAMVET-México y realizó una pasantía en la Clínica San Juan de Dios, 2007</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="img/pagina/vet-03.jfif" alt="..."></div>
            <div class="caption">
              <h3>M.V. Julia Moreno</h3>
              <p>MV. MBA. Dplm. Fiorella Cochella. Médica Veterinaria Etóloga Clínica, orientada hacia el comportamiento y bienestar animal de animales de compañía. Egresada de la Universidad Nacional Mayor de San Marcos (UNMSM), Maestra en Administración de Negocios (UPC), Diplomado en Comportamiento animal (VetesWeb)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Call Reservation Section -->
<div id="call-reservation" class="text-center">
  <div class="container">
    <h2>Haga su Consulta al numero <strong>000-000-000-000</strong></h2>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title text-center">
      <h2>Contacto</h2>
      <hr>
      <p>si tiene alguna consulta puede reservar su cita con el siguiente formulario.</p>
    </div>
    <div class="col-md-10 col-md-offset-1">
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Nombre" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Mensaje" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-custom btn-lg">Reservar Cita</button>
      </form>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="col-md-4">
      <h3>Direccion</h3>
      <div class="contact-item">
        <p>4321 California St,</p>
        <p>San Francisco, CA 12345</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Horarios de atencion</h3>
      <div class="contact-item">
        <p>Mon-Thurs: 10:00 AM - 11:00 PM</p>
        <p>Fri-Sun: 11:00 AM - 02:00 AM</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Mas Informacion</h3>
      <div class="contact-item">
        <p>Phone: +1 123 456 1234</p>
        <p>Email: info@company.com</p>
      </div>
    </div>
  </div>
  <div class="container-fluid text-center copyrights">
    <div class="col-md-8 col-md-offset-2">
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
      <p>&copy; 2020, Todos los derechos reservados <a href="http://www.templatewire.com" rel="nofollow">LOS INGENIEROS</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main2.js"></script>
<script type="text/javascript" src="js/bootstrap.blunde.js"></script>
<!-- [ PARTICLE SCRIPT ] -->
{{-- <script src="js/particles.min.js"></script>
<script src="js/partical-animation.js"></script> --}}

{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script> --}}
</body>
</html>
