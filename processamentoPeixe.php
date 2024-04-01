
<?php 

$imagem1 = $_POST["imagem1"];
$imagem2 = $_POST["imagem2"];
$nome_cientifico = $_POST["nome_cientifico"];
$nome = $_POST["nome"];
$tipo_de_agua = $_POST["tipo_de_agua"];
$tamanho = $_POST["tamanho"];
$habitat = $_POST["habitat"];
$paises = $_POST["paises"];
$comportamento_alimentar = $_POST["comportamento_alimentar"];
$temperamento = $_POST["temperamento"];
$cores = $_POST["cores"];
$descricao = $_POST["descricao"];

require_once("assets/classes/Sql.php");


// Desativa a exibição de warnings
ini_set('display_errors', 0);
// Define o nível de exibição de erros para evitar que os warnings sejam exibidos
error_reporting(E_ALL & ~E_WARNING);

// Seu código PHP aqui


?>


<!doctype html>
<html class="no-js" lang="pt-br">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet">
        
        <!-- title of site -->
        <title>PEIXELÂNDIA</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

        <!--flaticon.css-->
		<link rel="stylesheet" href="assets/css/flaticon.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
	
		<!--welcome-hero start -->
		<section id="home" class="welcome-hero">

			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav style="background-color:#000;" class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <div class="container" >

				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="index.html">PEIXELÂNDIA<span></span></a>

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
				                    <li><a href="home.php">Home</a></li>
				                    <li><a href="home.php#service">Peixes</a></li>
				                    <li class="scroll"><a href="#contact">Contato</a></li>
				                </ul><!--/.nav -->
				            </div><!-- /.navbar-collapse -->
				        </div><!--/.container-->
				    </nav><!--/nav-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			    <div class="clearfix"></div>

			</div><!-- /.top-area-->
			<!-- top-area End -->

		</section><!--/.welcome-hero-->
        <section style="margin-top:4em;" id="new-cars" class="new-cars">
			<div class="container">
				<div class="section-header">
					<p><?php echo $nome_cientifico ?></p>
					<h2><?php echo $nome ?></h2>
				</div><!--/.section-header-->
				<div class="new-cars-content">
					<div class="owl-carousel owl-theme" id="new-cars-carousel">
						<div class="new-cars-item">
							<div class="single-new-cars-item">
								<div class="row">
									<div class="col-md-7 col-sm-12">
										<div class="new-cars-img">
											<img style="border-radius:10px;" src="<?php echo $imagem1 ?>" alt="img"/>
										</div><!--/.new-cars-img-->
									</div>
									<div class="col-md-5 col-sm-12">
										<div class="new-cars-txt">
											<b>Nome Cientifico:</b> <?php echo " " . $nome_cientifico ?> <br> 
                                            <br>
                                            <b>Nome Popular:</b> <?php echo " " . $nome ?> <br>
                                            <br>
                                            <b>Tipo de Água:</b> <?php echo " " . $tipo_de_agua ?> <br>
                                            <br>
                                            <b>Tamanho:</b> <?php echo " " . $tamanho ?> <br>
                                            <br>
                                            <b>Habitat:</b> <?php echo " " . $habitat ?> <br>
											<br>
                                            <b>Principais países:</b> <?php echo " " . $paises ?> <br>
											<br>

										</div><!--/.new-cars-txt-->	
									</div><!--/.col-->
								</div><!--/.row-->
							</div><!--/.single-new-cars-item-->
						</div><!--/.new-cars-item-->
						<div class="new-cars-item">
							<div class="single-new-cars-item">
								<div class="row">
									<div class="col-md-7 col-sm-12">
										<div class="new-cars-img">
											<img style="border-radius:10px;" src="<?php echo $imagem2 ?>" alt="img"/>
										</div><!--/.new-cars-img-->
									</div>
									<div class="col-md-5 col-sm-12">
										<div class="new-cars-txt">
                                            <b>Comportamento Alimentar:</b> <?php echo " " . $comportamento_alimentar ?> <br> 
                                             <br>    
                                            <b>Temperamento:</b> <?php echo " " . $temperamento ?> <br>
                                            <br>
                                            <b>Principais Cores:</b> <?php echo " " . $cores ?> <br>
                                            <br>
                                            

										</div><!--/.new-cars-txt-->	
									</div><!--/.col-->
								</div><!--/.row-->
							</div><!--/.single-new-cars-item-->
						</div><!--/.new-cars-item-->

					</div><!--/#new-cars-carousel-->
				</div>
                <div>
                    <p><?php echo $descricao ?></p>
                </div>
			</div><!--/.container-->

		</section>

		
		
		<footer id="contact"  class="contact">
			<div class="container" >
				<div class="footer-top"  style="height:10em;">
					<div class="row" style="height:10em;">
						<div class="col-md-3 col-sm-6">
							<div class="single-footer-widget">
								<div class="footer-logo">
									<a href="index.html">Peixelândia</a>
								</div>
								<p>
                                Para entrar em contato, por favor, envie um e-mail para:
								</p>
								<div class="footer-contact">
									<p>peixelandiaoficial@gmail.com</p>
									
								</div>
							</div>
						</div>
						
						
					
					</div>
				</div>
				
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.contact-->
		<!--contact end-->


		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
    </body>
	
</html>

<?php



?>