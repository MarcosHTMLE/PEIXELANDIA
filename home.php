
<?php 

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
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <div class="container">

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
				                    <li class=" scroll active"><a href="#home">Home</a></li>
				                    <li class="scroll"><a href="#service">Peixes</a></li>
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

			<div class="container">
				<div class="welcome-hero-txt">
					<h2>O catálogo de peixes mais completo</h2>
					<p>
                    Explore o catálogo de peixes mais completo e descubra um mundo aquático de diversidade e beleza!
					</p>
					<button class="welcome-btn" onclick="window.location.href='#filtros'">Explorar</button>
				</div>
			</div>

			<div id="filtros" class="container">
				<div class="row">
					<div class="col-md-12">
						<div  class="model-search-content">
							<div  class="row">
                                <form action="processamentoFiltros.php" method="POST">
                                    <div class="col-md-offset-1 col-md-2 col-sm-12">
                                    <div class="single-model-search">
                                            <h2>Nome</h2>
                                            <div class="inputs">
                                                
                                                    <input name="Nome" type="text" <?php echo "value='". $_SESSION["nome"]."'" ?> ></input>

                                        
                                            </div><!-- /.model-select-icon -->
                                        </div>
                                        <div class="single-model-search">
                                            <h2>Oceano</h2>
                                            <div class="model-select-icon">
                                                <select name="Oceano" class="form-control">

                                                    <option value="default">Selecione</option><!-- /.option-->

                                                    <option value="Nenhum" <?php if($_SESSION["oceano"] == "Nenhum"){ echo "selected";} ?>  >Nenhum</option><!-- /.option-->

                                                    <option value="Pacífico" <?php if($_SESSION["oceano"] == "Pacífico"){ echo "selected";} ?> >Pacífico</option><!-- /.option-->
                                                    <option value="Índico" <?php if($_SESSION["oceano"] == "Índico"){ echo "selected";} ?>  >Índico</option><!-- /.option-->
                                                    <option value="Atlântico" <?php if($_SESSION["oceano"] == "Atlântico"){ echo "selected";} ?>>Atlântico</option><!-- /.option-->
                                                    

                                                </select><!-- /.select-->
                                            </div><!-- /.model-select-icon -->
                                        </div>
                                    </div>
                                    <div class="col-md-offset-1 col-md-2 col-sm-12">
                                        <div class="single-model-search">
                                            <h2>Tipo de Água</h2>
                                            <div class="model-select-icon">
                                                <select name="Agua" class="form-control">

                                                    <option value="default">Selecione</option><!-- /.option-->

                                                    <option value="Água Doce" <?php if($_SESSION["agua"] == "Água Doce"){ echo "selected";}?> > Água Doce</option><!-- /.option-->

                                                    <option value="Água Salgada" <?php if($_SESSION["agua"] == "Água Salgada"){ echo "selected";}?> >Água Salgada</option><!-- /.option-->
                                                    

                                                </select><!-- /.select-->
                                            </div><!-- /.model-select-icon -->
                                        </div>
                                        <div class="single-model-search">
                                            <h2>Tamanho</h2>
                                            <div class="model-select-icon">
                                                <select name="Tamanho" class="form-control">

                                                    <option value="default">Selecione</option><!-- /.option-->

                                                    <option value="Grande" <?php if($_SESSION["tamanho"] == "Grande"){ echo "selected";}?> >Grande</option><!-- /.option-->

                                                    <option value="Médio" <?php if($_SESSION["tamanho"] == "Médio"){ echo "selected";}?>>Médio</option><!-- /.option-->
                                                    <option value="Pequeno" <?php if($_SESSION["tamanho"] == "Pequeno"){ echo "selected";}?> >Pequeno</option><!-- /.option-->

                                                </select><!-- /.select-->
                                            </div><!-- /.model-select-icon -->
                                        </div>
                                    </div>
                                    <div class="col-md-offset-1 col-md-2 col-sm-12">
                                        <div class="single-model-search">
                                            <h2>Continente</h2>
                                            <div class="model-select-icon">
                                                <select name="Continente" class="form-control">

                                                    <option value="default">Selecione</option><!-- /.option-->

                                                    <option value="Todos" <?php if($_SESSION["continente"] == "Todos"){ echo "selected";}?>>Todos</option><!-- /.option-->

                                                    <option value="América" <?php if($_SESSION["continente"] == "América"){ echo "selected";}?>>América</option><!-- /.option-->
                                                    <option value="Ásia" <?php if($_SESSION["continente"] == "Ásia"){ echo "selected";}?>>Ásia</option><!-- /.option-->
                                                    <option value="África" <?php if($_SESSION["continente"] == "África"){ echo "selected";}?>>África</option><!-- /.option-->
                                                    <option value="Europa" <?php if($_SESSION["continente"] == "Europa"){ echo "selected";}?>>Europa</option><!-- /.option-->
                                                    <option value="Oceania" <?php if($_SESSION["continente"] == "Oceania"){ echo "selected";}?>>Oceania</option><!-- /.option-->

                                                </select><!-- /.select-->
                                            </div><!-- /.model-select-icon -->
                                        </div>
                                        <div class="single-model-search">
                                            <h2>Comp. Alimentar</h2>
                                            <div class="model-select-icon">
                                                <select name="Comportamento" class="form-control">

                                                    <option value="default">Selecione</option><!-- /.option-->

                                                    <option value="Carnívoro" <?php if($_SESSION["comportamento"] == "Carnívoro"){ echo "selected";}?>>Carnívoro</option><!-- /.option-->

                                                    <option value="Onívoro" <?php if($_SESSION["comportamento"] == "Onívoro"){ echo "selected";}?>>Onívoro</option><!-- /.option-->

                                                    <option value="Herbívoro" <?php if($_SESSION["comportamento"] == "Herbívoro"){ echo "selected";}?>>Herbívoro</option><!-- /.option-->

                                                </select><!-- /.select-->
                                            </div><!-- /.model-select-icon -->
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="single-model-search text-center">
                                            <button type="submit" class="welcome-btn model-search-btn">
                                                Buscar
                                            </button>
                                        </div>
                                    </div>
                                </form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--service start -->
		<section id="service" class="service">
			<div  id="peixes" class="container">
				<div class="service-content" >
                    <section  class="articles">
                       
                        <?php
                        
                        $sql = new Sql();
                        $sql->listar();
                        
                        ?>
                        
					</section>
				</div>
			</div><!--/.container-->
            <div style="width:100%; margin-top:2em;">
                <nav style="float:right;padding-right:3em;" aria-label="Navegação de página exemplo">
                    <?php
                        
                        $sql->Paginacao();

                       
                        
                       
                        
                        
                    ?>
                </nav>
            </div>
		</section><!--/.service-->
		
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