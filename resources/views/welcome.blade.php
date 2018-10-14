<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Medical</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">=
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
		@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
			<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="/"><img src="img/logo.png" alt=""></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="/">Home</a>
									<a href="#service">Serviços</a>
									<a href="#appoinment">Marcação de Consulta</a>
									<a href="#consultant">Nossos Medicos</a>
                                    <a href="{{ route('login') }}">
                                            Login
                                        </a>

                            
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- End Header Area -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="container">
						<div class="row fullscreen align-items-center justify-content-center">
							<div class="banner-content col-lg-6 col-md-12">
								<h1 class="text-uppercase">
								Nós somos <br>a equipe de <br>
								 excelência
								</h1>
								<p>
									Prestamos serviços na área de Saúde marque já a sua consulta e deixa tudo na mão dos nossos Profissionais;
								</p>
								<!-- <button class="primary-btn2 mt-20 text-uppercase ">Get Started<span class="lnr lnr-arrow-right"></span></button> -->
							</div>
							<div class="col-lg-6 d-flex align-self-end img-right">
								<img class="img-fluid" src="img/header-img.png" alt="">
							</div>
						</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<section class="feature-area section-gap" id="service">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="single-feature d-flex flex-row pb-30">
								<div class="icon">
									<span class="lnr lnr-rocket"></span>
								</div>
								<div class="desc">
									<h4 class="text-uppercase">Serviços de Emergência 24/7</h4>
									<p>
									A visão da equipa de Serviços de Emergência é direccionada no sentido de maximizar a qualidade de assistência,  através<br> de cuidados humanizados e de uma forma holística.  
									</p>
								</div>
							</div>
							<div class="single-feature d-flex flex-row pb-30">
								<div class="icon">
									<span class="lnr lnr-chart-bars"></span>
								</div>
								<div class="desc">
									<h4 class="text-uppercase">Radiologia e Imagiologia</h4>
									<p>
										inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
									</p>
								</div>
							</div>
							<div class="single-feature d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-bug"></span>
								</div>
								<div class="desc">
									<h4 class="text-uppercase">Medicina Legal</h4>
									<p>
										inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="single-feature d-flex flex-row pb-30">
								<div class="icon">
									<span class="lnr lnr-heart-pulse"></span>
								</div>
								<div class="desc">
									<h4 class="text-uppercase">Cuidados Intensivos</h4>
									<p>
									A vida do doente deve ser respeitada em todas as suas dimensões. Portanto, as acções de enfermagem são planeadas e desenvolvidas com base em saber técnico, científico sustentado em princípios éticos e legais da profissão com vista a promoção da humanização e qualidade dos cuidados de enfermagem.
									</p>
								</div>
							</div>
							<div class="single-feature d-flex flex-row pb-30">
								<div class="icon">
									<span class="lnr lnr-paw"></span>
								</div>
								<div class="desc">
									<h4 class="text-uppercase">Anatomia Patológica</h4>
									<p>
										inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
									</p>
								</div>
							</div>
							<div class="single-feature d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-users"></span>
								</div>
								<div class="desc">
									<h4 class="text-uppercase">Farmácia</h4>
									<p>
										inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End feature Area -->


			<!-- Start about Area -->
			<section class="about-area" id="appoinment">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 col-md-12 about-left no-padding">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 col-md-12 about-right no-padding">
							<h1>Marcar Consulta</h1>
							<form class="booking-form" id="myForm" action="donate.php">
								 	<div class="row">
								 		<div class="col-lg-12 d-flex flex-column">
							 				<input name="name" placeholder="Nome do Paciente" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient name'" class="form-control mt-20" required="" type="text" required>
								 		</div>
							 			<div class="col-lg-6 d-flex flex-column">
											<input name="phone" placeholder="Telefone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" class="form-control mt-20" required="" type="text" required>
										</div>
										<div class="col-lg-6 d-flex flex-column">
											<input id="datepicker2" name="app-date" class="single-in mt-20"  onblur="this.placeholder = 'Data da Consulta'" type="text" placeholder="Data da Consulta" required>
										</div>
										<div class="col-lg-12 flex-column">
											<textarea class="form-control mt-20" name="message" placeholder="Mensagem" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensagem'" required=""></textarea>
										</div>

										<div class="col-lg-12 d-flex justify-content-end send-btn">
											<button class="submit-btn primary-btn mt-20 text-uppercase ">confirm booking<span class="lnr lnr-arrow-right"></span></button>
										</div>

										<div class="alert-msg"></div>
									</div>
					  		</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End about Area -->

			<!-- Start consultans Area -->
			<section class="consultans-area section-gap" id="consultant">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Nossos Medicos</h1>
							<p>
								Formados em diversas áreas das mais variadas com um único foco cuidar da sua Saúde <br> o seu maior preço é a vida.
							</p>
						</div>
					</div>
					<div class="row">
					<div class="col-lg-3 col-md-3 vol-wrap">
							<div class="single-con">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/Dra. Sandra-Mavale.png" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<h4>Dra. Sandra Mavale</h4>
								      		<p>
											  Directora Científica e Pedagógica
								      		</p>
								      	</div>
								    </a>
								 </div>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-3 vol-wrap">
							<div class="single-con">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/Dra. Matilde Mabui.jpg" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<h4>Dra. Matilde Mabui</h4>
								      		<p>
											  Directora de Enfermagem
								      		</p>
								      	</div>
								    </a>
								 </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 vol-wrap">
							<div class="single-con">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/Dr. Fortunato de Oliveira.jpg" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<h4>Dr. Fortunato de Oliveira</h4>
								      		<p>
											  Director Administrativo
								      		</p>
								      	</div>
								    </a>
								 </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 vol-wrap">
							<div class="single-con">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/Dra. Farida Urci.jpg" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<h4>Dra. Farida Urci</h4>
								      		<p>
											  Directora Clínica
								      		</p>
								      	</div>
								    </a>
								 </div>
							</div>
						</div>
					
					</div>
				</div>
			</section>
			<!-- End consultans Area -->

			<!-- Start fact Area -->
			<section class="facts-area pt-100 pb-100">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 single-fact">
							<h2 class="counter">2536</h2>
							<p class="text-uppercase">Pacientes Atendidos</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<h2 class="counter">6784</h2>
							<p class="text-uppercase">Raio-X feitos</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<h2 class="counter">1059</h2>
												<p class="text-uppercase">Consultas Marcadas</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<h2 class="counter">2239</h2>
							<p class="text-uppercase">Vidas Salvas</p>
						</div>
					</div>
				</div>
			</section>
			<!-- end fact Area -->

			<!-- Start blog Area -->
			<section class="blog-area section-gap">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8 pb-30 header-text">
							<h1>Postagens Recentes</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="single-blog col-lg-4 col-md-4">

							<img class="f-img img-fluid mx-auto" src="img/b1.jpg" alt="">
							<h4>
								<a href="#">Portable Fashion for young women</a>
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea.
								 commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
						</div>
						<div class="single-blog col-lg-4 col-md-4">
							<img class="f-img img-fluid mx-auto" src="img/b2.jpg" alt="">
							<h4>
								<a href="#">Summer ware are coming</a>
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea.
 								commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
						</div>
						<div class="single-blog col-lg-4 col-md-4">
							<img class="f-img img-fluid mx-auto" src="img/b3.jpg" alt="">
							<h4>
								<a href="#">Summer ware are coming</a>
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
							</p>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end blog Area -->

			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2  col-md-6">
							<div class="single-footer-widget">
								<h6>Redes Sociais</h6>
								<ul class="footer-nav">
									<li><a class="fa fa-facebook-square " href="#"> Facebook</a></li>
									<li><a class="fa fa-twitter-square" href="#"> Twitter</a></li>
									<li><a class="fa fa-instagram" href="#"> Instagram</a></li>
									<li><a class="fa fa-linkedin-square" href="#"> Linkedin</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4  col-md-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Contacte-nos</h6>
								<p>
									153, Rua dos Sem fronteiras, Maputo - 1205
								</p>
								<h3>+258 840302176</h3>
								<h3>+258 845001085</h3>
							</div>
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Newsletter</h6>
								<p>Pode confiar em nós. Somente enviaremos ofertas, nem se quer um unico spam.</p>
								<div id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
												<input name="EMAIL" placeholder="Insira o Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Insira o Email '" required="" type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
											</div>

											<div class="col-lg-4 col-md-12">
												<button class="nw-btn primary-btn">Subscrever<span class="lnr lnr-arrow-right"></span></button>
											</div>
										</div>
										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | + Saude developed with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">MazasDaUEM</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>
