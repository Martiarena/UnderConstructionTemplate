<?php 
	$ano = "2022";
	$empresa = "Nombre empresa xd";
	$descripcion = "sitio web en construcción. ";
	$keywords = "Raúl Martiarena, Diseño web, web developer";
	$direccion = "Morbi vehicula, orci id venenatis commodo";
	$telefono = "(01) 555-5555 | 999-999-999";
	$email = "suemail@gmail.com";
	$url = "suweb.com";
	$type = 0;
	$facebook = "#";
	$twitter = "#";
	$linkedin = "#";
	$whatsapp = "#";
	$yoemail = "raulmartiarena89@gmail.com";
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title><?php echo $empresa; ?> | Sitio web en construcci&oacute;n</title>
		<meta name="description" content="<?php echo $descripcion; ?>" />
		<meta name="keywords" content="<?php echo $keywords; ?>" />
        <meta name="DC.title" content="<?php echo $empresa.' | Sitio web en construcción' ?>" />
		<meta name="DC.description" content="<?php echo $descripcion; ?>" />
        <meta name="robots" content="noindex, nofollow">

		<meta property="og:title" lang="en" content="<?php echo $empresa.' | Sitio web en construcción' ?>" />
		<meta property="og:type" content="company" />
		<meta property="og:description" content="<?php echo $descripcion; ?>" />
		<meta property="og:url" content="http://<?php echo $url; ?>" />
		<meta property="og:image" content="http://<?php echo $url; ?>/img/face1.jpg" />
		<meta property="og:image" content="http://<?php echo $url; ?>/img/face2.jpg" />

		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body data-ng-app="contactApp">
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<div class="pad-zero">
			<div id="splitlayout" class="splitlayout reset-layout">
				<div class="intro">
					<div class="side side-left">
						<div class="col-lg-8 col-md-9 col-sm-9 col-xs-9 align-center content-wrap">
						<div class="logo align-center text-left">
							<?php if ($type==0){ ?>
							<img src="img/logo-dark.png" alt="logo">
							<?php }else{ ?>
							<h1><?php echo $empresa; ?></h1>
							<?php } ?>
						</div>
						<div class="main">
							<section id="home" class="section active">
								<div  class="preloader"></div>
								<div class="align-center text-left">
									<span class="small-hr animated fadeInLeft"  data-animation="fadeInLeft" data-out-animation="fadeOutLeft" data-out-animation-delay="200"></span>
									<p class="animated fadeInLeft"  data-animation="fadeInLeft" data-out-animation="fadeOutLeft" data-out-animation-delay="300">Pronto estaremos en línea...</p>
									<div class="type-wrap text-left">
										<h1 id="heightg" class="animated fadeInLeft"  data-animation="fadeInLeft" data-out-animation="fadeOutLeft" data-out-animation-delay="900"><span id="typed" ></span></h1>
									</div>
									<div class="notify-btn main-menu">
										<ul class="datos">
											<?php if ($direccion!="" || $email!="" || $telefono!=""){ ?>
											<li>
												<strong style="text-transform: uppercase;">Contacto</strong>
											</li>
											<?php } ?>
											<?php if ($direccion!=""){ ?>
											<li>
												<strong>Dirección : </strong> <?php echo $direccion; ?>
											</li>
											<?php } ?>
											<?php if ($telefono!=""){ ?>
											<li>
												<strong>Teléfono : </strong> <?php echo $telefono; ?>
											</li>
											<?php } ?>
											<?php if ($email!=""){ ?>
											<li>
												<strong>Email : </strong> <?php echo $email; ?>
											</li>
											<?php } ?>
										</ul>
										<div style="clear:both;"></div>
										<div class="social-box">
											<ul class="social-icons">
												<?php if ($facebook!=""){ ?>
												<li>
													<a href="<?php echo $facebook; ?>" class="social-icon">
														<i class="fa fa-facebook-square" aria-hidden="true"></i>
													</a>
												</li>
												<?php } ?>
												<?php if ($twitter!=""){ ?>
												<li>
													<a href="<?php echo $twitter; ?>" class="social-icon">
														<i class="fa fa-twitter-square" aria-hidden="true"></i>
													</a>
												</li>
												<?php } ?>
												<?php if ($linkedin!=""){ ?>
												<li>
													<a href="<?php echo $linkedin; ?>" class="social-icon">
														<i class="fa fa-linkedin-square" aria-hidden="true"></i>
													</a>
												</li>
												<?php } ?>
												<?php if ($whatsapp!=""){ ?>
												<li>
													<a href="<?php echo $whatsapp; ?>" class="social-icon">
														<i class="fa fa-whatsapp" aria-hidden="true"></i>
													</a>
												</li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>		
							</section>
							<div class="copyright">
								<p>&copy; <?php echo $ano; ?> <?php echo $empresa; ?> | Desarrollo web por <a href="http://raulmartiarena.com/">Ra&uacute;l Martiarena</a></p>
							</div>
						</div>
						</div>
					</div>
					<div class="side side-right">
						<div class="layer clouds">
							<div class="cloud cloud-1">
								<img src="img/cloud-1.png" width="1600" height="850" alt="">
							</div>
							<div class="cloud cloud-2">
								<img src="img/cloud-2.png" width="1600" height="850" alt="">
							</div>
							<div class="cloud cloud-3">
								<img src="img/cloud-1.png" width="1600" height="850" alt="">
							</div>
						</div>
						<div class="counter-content">
							<div class="col-lg-8 col-md-9 col-sm-9 col-xs-9 align-center text-left">
								<p class="tagline">Si desea tener presencia en internet, no dude en escribirme a: <a class="email-c" href="mailto:<?php echo $yoemail; ?>"><?php echo $yoemail; ?></a></p>
							</div>	
						</div>
						<div class="trans-overlay-dark"></div>	
					</div>
				</div>
			</div>
		</div>
		<!-- Scripts -->
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jquery.countdown.js"></script>
		<script src="js/typed.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/init.js"></script>
	</body>
</html>