<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Page Content ================================================== -->
	<!-- NEW MENU -->
		<div class="navbar navbar-fixed-top" data-activeslide="1">
			<div class="container">
			
				<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				
				<div class="nav-collapse collapse navbar-responsive-collapse">
					<ul class="nav row nav-menu" id="nav-menu-container">
						<li data-slide="1" class="col-12 col-sm-2"><a id="menu-link-1" href="#hero" title="Next Section"><span class="icon icon-home"></span> <span class="text">HOME</span></a></li>
						<li data-slide="2" class="col-12 col-sm-2"><a id="menu-link-2" href="#about1" title="Next Section"><span class="icon icon-user"></span> <span class="text">NOSOTROS</span></a></li>
						<li data-slide="3" class="col-12 col-sm-2"><a id="menu-link-3" href="#features" title="Next Section"><span class="icon icon-briefcase"></span> <span class="text">SERVICIOS</span></a></li>
						<li data-slide="4" class="col-12 col-sm-2"><a id="menu-link-4" href="#portfolio" title="Next Section"><span class="icon icon-gears"></span> <span class="text">PORTAFOLIO</span></a></li>
						<li data-slide="5" class="col-12 col-sm-2"><a id="menu-link-5" href="#contact" title="Next Section"><span class="icon icon-heart"></span> <span class="text">CONTACTO</span></a></li>
					</ul>
					<div class="row">
						<div class="col-sm-2 active-menu"></div>
					</div>
				</div><!-- /.nav-collapse -->
			</div><!-- /.container -->
		</div><!-- /.navbar -->
	<!-- NEW MENU -->
	<!-- Hero -->
		<section class="hero slide story" id="hero" data-slide="1">
			<div class="container text-center">
  				<div class="col-md-12 animatedParent">
				    <h1 class="animated Down">
				      	Bienvenidos a
				    </h1>
			  	</div>
			  	<div class="row">
				    <div class="col-md-12" inner>
				      <img id="log_principal" class="hero-brand" alt="Redes Gesa" src="<?php echo $img;?>redes_logo4.png">
				      <img id="log_secundario" class="hero-brand" alt="Redes Gesa" src="<?php echo $img;?>redes_logo4.4.png">
				    </div>
				</div>
				<div class="col-md-12 animatedParent">
				    <p class="tagline animated Up">
				      	Una empresa con mucha seguridad
				    </p>
				    
				    <!-- <a class="btn btn-full" href="#about">
				    	Comienza ahora
				    </a> -->
			  	</div>
			</div>
		</section>
	<!-- /Hero -->
	<!-- Header -->
	<!-- Header -->
	<!-- About -->
	    <section id="about1" class="about slide story" data-slide="2">
	      	<div class="container">
	         	<div class="container text-center">
	          		<h2>Acerca de nosotros</h2>
	          		<p align="justify">
	          			Somos una empresa 100% mexicana que inició operaciones en 1989 en el estado de Aguascalientes, Ags. Con un contrato por parte de CONSTRUCCIONES TELEFÓNICAS MEXICANA, S.A. DE C.V. para hacernos cargo de una parte del programa de Redes de TEL-MEX. En ese tiempo se realizaron obras de redes principalmente en los estados de Aguascalientes y Zacatecas. Nos especializamos en los servicios de Cableado Estructurado Voz-Datos, Redes de Fibra Óptica, Telefonía Convencional, Soporte Técnico en Redes LAN, Servicio Preventivo, Instalaciones Eléctricas de Energía Regulada, Sistemas de Seguridad. Ademas de que somos <span>PARNER DE CISCO.</span>
	          		</p>
	        	</div>
		        <div class="row about-cols animatedParent">
		          	<div class="col-md-4 fadeInUp animated DownLeft">
		            	<div class="about-col mvo">
		              		<div class="img">
		                		<img src="<?php echo $img;?>about/about-mission.jpg" alt="" class="img-fluid">
		                		<div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
		              		</div>
		              		<h2 class="title">Nuestra Mision</h2>
		              		<p style="text-align: justify;">Ser la mejor alternativa para dar soluciones y servicios de comunicación de voz datos, c.c.t.v,  y control de acceso, siguiendo  los estándares internacionales de calidad y usando las mejores marcas  y la  más moderna tecnología en telecomunicaciones y sistema de seguridad.</p>
		           	 	</div>
		          	</div>
		          	<div class="col-md-4 fadeInUp animated DownLeft ln">
			            <div class="about-col mvo">
			              	<div class="img">
			                	<img src="<?php echo $img;?>about/about-plan.jpg" alt="" class="img-fluid">
			                	<div class="icon"><i class="ion-ios-list-outline"></i></div>
			              	</div>
			              	<h2 class="title">Nuestro Plan</h2>
			              	<p>Dar atención personalizada a nuestros clientes de acuerdo a sus necesidades</p>
			            </div>
		          	</div>
		          	<div class="col-md-4 fadeInUp wow animated DownLeft sln">
		            	<div class="about-col mvo">
		              		<div class="img">
		                		<img src="<?php echo $img;?>about/about-vision.jpg" alt="" class="img-fluid">
		                		<div class="icon"><i class="ion-ios-eye-outline"></i></div>
		              		</div>
		              		<h2 class="title">Nuestra Vision</h2>
		              		<p style="text-align: justify;">Gestionar de forma eficaz y eficiente todas sus necesidades, estableciendo relaciones entre que nuestros clientes se despreocupen de toda la problemática de las nuevas tecnologías en sus entornos empresariales.</p>
		            	</div>
		          	</div>
		        </div>
		    </div>
	    </section>
  	<!-- /About -->
  	<!-- Parallax --> 	
		<div class="block bg-primary block-pd-lg block-bg-overlay text-center slide story" data-bg-img="<?php echo $img;?>parallax-bg.jpg" data-settings='{"stellar-background-ratio": 0.6}' data-toggle="parallax-bg" id="features">
		    <h2>
		        Bienvenido a Redes Gesa
		    </h2>
		    <p>
		      Haremos de tu lugar, un lugar más seguro.
		    </p>
		</div>
		<div>
			<!-- servicios 2 -->
				<div class="container">
					<section class="" id="service">
				      <div class="container">
				        <div class="row">
				          <div class="col-lg-12 text-center">
				            <h2 class="section-heading text-uppercase">Servicios</h2>
				            <h3 class="section-subheading text-muted">Servicios que ofrecemos.</h3>
				          </div>
				        </div>
				        <div class="row">
				          <div class="col-md-4 col-sm-6 portfolio-item">
				            <a class="portfolio-link" data-toggle="modal" data-target="#portfolioModal1">
				              <div class="portfolio-hover">
				                <div class="portfolio-hover-content">
				                  <i class="fa fa-plus fa-3x"></i>
				                </div>
				              </div>
				              <img class="img-fluid" src="<?php echo $img;?>cableado_estructurado/cableado_1.jpg" alt="">
				            </a>
				            <div class="portfolio-caption">
				              <h4>Cableado Estructurado </h4>
				              <p class="text-muted">Voz-Datos</p>
				            </div>
				          </div>
				          <div class="col-md-4 col-sm-6 portfolio-item">
				            <a class="portfolio-link" data-toggle="modal" data-target="#portfolioModal2">
				              <div class="portfolio-hover">
				                <div class="portfolio-hover-content">
				                  <i class="fa fa-plus fa-3x"></i>
				                </div>
				              </div>
				              <img class="img-fluid" src="<?php echo $img;?>fibra/fibra_1.jpg" alt="">
				            </a>
				            <div class="portfolio-caption">
				              <h4>Redes de</h4>
				              <p class="text-muted">Fibra Optica</p>
				            </div>
				          </div>
				          <div class="col-md-4 col-sm-6 portfolio-item">
				            <a class="portfolio-link" data-toggle="modal" data-target="#portfolioModal3">
				              <div class="portfolio-hover">
				                <div class="portfolio-hover-content">
				                  <i class="fa fa-plus fa-3x"></i>
				                </div>
				              </div>
				              <img class="img-fluid" src="<?php echo $img;?>telefonia/telefonia_3.jpg" alt="">
				            </a>
				            <div class="portfolio-caption">
				              <h4>Telefonia</h4>
				              <p class="text-muted">Convencional</p>
				            </div>
				          </div>
				          <div class="col-md-4 col-sm-6 portfolio-item">
				            <a class="portfolio-link" data-toggle="modal" data-target="#portfolioModal4">
				              <div class="portfolio-hover">
				                <div class="portfolio-hover-content">
				                  <i class="fa fa-plus fa-3x"></i>
				                </div>
				              </div>
				              <img class="img-fluid" src="<?php echo $img;?>redes_lan/lan_2.jpg" alt="">
				            </a>
				            <div class="portfolio-caption">
				              <h4>Soporte Tecnico</h4>
				              <p class="text-muted"> en Redes Lan</p>
				            </div>
				          </div>
				          <div class="col-md-4 col-sm-6 portfolio-item">
				            <a class="portfolio-link" data-toggle="modal" data-target="#portfolioModal5">
				              <div class="portfolio-hover">
				                <div class="portfolio-hover-content">
				                  <i class="fa fa-plus fa-3x"></i>
				                </div>
				              </div>
				              <img class="img-fluid" src="<?php echo $img;?>cctv/cctv_1.jpg" alt="">
				            </a>
				            <div class="portfolio-caption">
				              <h4>Sistemas</h4>
				              <p class="text-muted">de Seguridad</p>
				            </div>
				          </div>
				          <div class="col-md-4 col-sm-6 portfolio-item">
				            <a class="portfolio-link" data-toggle="modal" data-target="#portfolioModal6">
				              <div class="portfolio-hover">
				                <div class="portfolio-hover-content">
				                  <i class="fa fa-plus fa-3x"></i>
				                </div>
				              </div>
				              <img class="img-fluid" src="<?php echo $img;?>electricas/electricas_3.jpg" alt="">
				            </a>
				            <div class="portfolio-caption">
				              <h4>Instaciones Electricas</h4>
				              <p class="text-muted">de Energia Regulada</p>
				            </div>
				          </div>
				        </div>
				      </div>
				    </section>
			    </div>
			<!-- servicios 2 -->
			<!-- MODALES -->
				<!-- Modal 1 -->
				    <div class="service-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Cableado Estructurado Voz-Datos</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <p>Contamos con certificación de AVAYA SYSTIMAX (AT&T),  SIEMON,  WIREMOLD Y TYCO AMP; ALCATEL, NEXANS CHASTWORTH, HUBBELL Y LEVITON.</p>
					      </div>
					    </div>
					  </div>
					</div>

				    <!-- Modal 2 -->
					    <div class="service-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLongTitle">Redes de Fibra Optica</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <p>Descripción personal de fibra óptica.</p>
						      </div>
						    </div>
						  </div>
						</div>

				    <!-- Modal 3 -->
				    	<div class="service-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLongTitle">Telefonia Convencional</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <p>Contamos con la aprobación de Teléfonos de México para Instalación y Diseño.</p>
						      </div>
						    </div>
						  </div>
						</div>

				    <!-- Modal 4 -->
				    	<div class="service-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLongTitle">Soporte Tecnico en Redes Lan</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <p>Implementación de Voz sobre IP. Restricciones de ancho de banda, video sobre IP, experiencia con líneas telefónicas analógicas y digitales.</p>
						      </div>
						    </div>
						  </div>
						</div>

				    <!-- Modal 5 -->
				    	<div class="service-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLongTitle">Sistemas de Seguridad</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <p>Sistemas de Cctv, Control de Acceso, Alarmas  e Intrusión, Automatización y  Detección de Humos.</p>
						      </div>
						    </div>
						  </div>
						</div>

				    <!-- Modal 6 -->
				    <div class="service-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLongTitle">Instalaciones Electricas de Energia Regulada</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <p>Contamos con la experiencia para el diseño e ingeniería en Redes de Corriente Regulada, y UPS’s.</p>
						      </div>
						    </div>
						  </div>
						</div>
			<!-- MODALES -->
			<!-- Call to Action -->
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
	              <div class="carousel-inner" id="slider_empresas">
	              	
	                <div class="carousel-item active" >
	                  <div class="slider-container-empresas">
						<h4>Empresas a las que hemos brindado servicio:</h4>
						<p>PEMEX , JHONSON CONTROLS , GRUPO ALTIVA , INGENERIA Y CONSTRUCCION 2000 , CHEREM Y CHEREM </p>
					</div>
	                </div>
	           
	                <div class="carousel-item">
	                  <div class="slider-container-empresas">
			       		<h4>Empresas a las que hemos brindado servicio:</h4>
						<p>PROCISA , INDUSTRIAS Q.S.T , ABARROTES LOS ANICETOS , ABARROTERA LUPITA , COMERCIALIZADORA "Z"</p>
					</div>
					</div>
				
	                <div class="carousel-item">
	                  <div class="slider-container-empresas">
			       		<h4>Empresas a las que hemos brindado servicio:</h4>
						<p>FOTO ARTE , FEMSA , COMITE OLIMPICO , GRUPO SANCELA , ORACLE DE MEXICO</p>
					</div>
	                </div>
	            
	                <div class="carousel-item">
	                  <div class="slider-container-empresas">
			       		<h4>Estamos dados de alta como integradores con:</h4>
						<p>MAGO CAD , INALARM , FIBREMEX , INGRAM , SEGMAN</p>
					</div>
	                </div>
	            
	              </div>
		        </div>       
	          	<script type="text/javascript">
	            	$('.carousel').carousel();
	        	</script>
			<!-- /Call to Action -->
			<!-- Portfolio -->
			    <section class="features story" id="portfolio" data-slide="4">
			      	<div class="container text-center">
			        	<h2>Portafolio</h2>
			        	<p>
			          		Descripción del Portafolio
			        	</p>
			      	</div>
					    <div style="height:400px;">
							<div class="demo">
								<div class="wrapper">
									<div class="coverflow">
							            <img src="<?php echo $img;?>porta/2.jpg" />
										<img src="<?php echo $img;?>porta/31058643-cctv-cameras-vector-icons-set.jpg" />
										<img src="<?php echo $img;?>porta/496403485.jpg" />
										<img src="<?php echo $img;?>porta/alarmsysteem-plaatsen.jpg" />
										<img src="<?php echo $img;?>porta/banner2-1024x680.jpg" />
										<img src="<?php echo $img;?>porta/banner3-min-1920x700-1.jpg" />
										<img src="<?php echo $img;?>porta/cctv.jpg" />
										<img src="<?php echo $img;?>porta/default-cctv-dealers-6.jpg" />
										<img src="<?php echo $img;?>porta/face-recognition-featured.jpg" />
										<img src="<?php echo $img;?>porta/Fotolia_98022797_Subscription_Monthly_M.jpg" />
										<img src="<?php echo $img;?>porta/image.jpg" />
										<img src="<?php echo $img;?>porta/porta_1.jpg" />
										<img src="<?php echo $img;?>porta/porta_2.jpg" />
										<img src="<?php echo $img;?>porta/porta_3.jpg" />
										<img src="<?php echo $img;?>porta/porta_4.jpg" />
										<img src="<?php echo $img;?>porta/porta_5.png" />
										<img src="<?php echo $img;?>porta/porta_6.png" />
										<img src="<?php echo $img;?>porta/porta_7.png" />
										<img src="<?php echo $img;?>porta/porta_8.png" />
									</div>
								</div>
							</div>
						</div>
				</section>
			<!-- Portfolio -->
		</div>
	<!-- Parallax -->
	<!-- Clientes  -->
		<section id="clientes" class="clientes slide">
			<div class="container text-center">
				<h2>Principales marcas de productos que manejamos:</h2>
				<div class="container">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  		<div class="carousel-inner">
				    		<div class="carousel-item active">
				      			<img  src="<?php echo $img;?>clients/client-1.png" alt="First slide">
				      			<img  src="<?php echo $img;?>clients/client-2.png" alt="Second slide">
				      			<img  src="<?php echo $img;?>clients/client-3.png" alt="Second slide">
				      			<img  src="<?php echo $img;?>clients/client-4.png" alt="Second slide">
				    		</div>
				    		<div class="carousel-item">
				    			<img  src="<?php echo $img;?>clients/client-5.png" alt="First slide">
				      			<img  src="<?php echo $img;?>clients/client-6.png" alt="Second slide">
				      			<img  src="<?php echo $img;?>clients/client-7.png" alt="Second slide">
				      			<img  src="<?php echo $img;?>clients/client-8.png" alt="Second slide">
				    		</div>
				    		<div class="carousel-item">
				    			<img  src="<?php echo $img;?>clients/client-9.png" alt="First slide">
				      			<img  src="<?php echo $img;?>clients/client-10.png" alt="Second slide">
				      			<img  src="<?php echo $img;?>clients/client-11.png" alt="Second slide">
				      			<img  src="<?php echo $img;?>clients/client-12.png" alt="Second slide">
				    		</div>
				    		<div class="carousel-item">
				    			<img  src="<?php echo $img;?>clients/client-13.png" alt="First slide">
				      			<img  src="<?php echo $img;?>clients/client-14.png" alt="Second slide">
				      			<img  src="<?php echo $img;?>clients/client-15.png" alt="Second slide">
				      			<img  src="<?php echo $img;?>clients/client-16.png" alt="Second slide">
				    		</div>
				    		<div class="carousel-item">
				    			<img  src="<?php echo $img;?>clients/client-17.png" alt="First slide">
				      			<img  src="<?php echo $img;?>clients/client-18.png" alt="Second slide">
				      			<img  src="<?php echo $img;?>clients/client-19.png" alt="Second slide">
				      			<img  src="<?php echo $img;?>clients/client-20.png" alt="Second slide">
				    		</div>
				  		</div>
				  		<div class="indicators">
				  			<ol class="carousel-indicators owl-dot">
					    		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active cirucle"></li>
					    		<li data-target="#carouselExampleIndicators" data-slide-to="1" class="cirucle"></li>
					    		<li data-target="#carouselExampleIndicators" data-slide-to="2" class="cirucle"></li>
					    		<li data-target="#carouselExampleIndicators" data-slide-to="3" class="cirucle"></li>
					    		<li data-target="#carouselExampleIndicators" data-slide-to="4" class="cirucle"></li>
							</ol>
				  		</div>
					</div>
				</div>
			</div>
		</section>
	<!-- Clientes  -->
  	<!-- Contact  -->
  		<section id="contact" class="slide story" data-slide="5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-starat">
                        <h2 class="section-title">Contáctanos</h2>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-6 col-md-4 info">
                                <div>
                                    <i class="fa fa-envelope"></i>
                                    <p>atencion@redesgesa.com</p>
                                </div>
                                <div>
                                    <i class="fa fa-phone"></i>
                                    <p>53868019</p>
                                </div>
                            </div>
                             <div class="col-lg-6 col-md-8 form">
                                <div id="sendmessage">Your message has been sent. Thank you!</div>
                                <div id="errormessage"></div>
                                <form action="" method="post" role="form" class="contactForm">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Este campo es obligatorio" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Este campo es obligatorio" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Este campo es obligatorio" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Este campo es obligatorio" placeholder="Mensaje"></textarea>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="text-center">
                                        <button  type="submit" id="enviar" onclick="sendMail();">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="loader" style="display: none;">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="lading"></div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="map_responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.7919365195926!2d-99.18266628571763!3d19.464535444703902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f89aec0b3a35%3A0x31d76185d40e186e!2sCalle+Texcoco+135%2C+Claveria%2C+02080+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1523647661720" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  	<!-- /Contact -->
	<script src="<?php echo $js;?>animated.js"></script>
<!-- Page Content ================================================== -->