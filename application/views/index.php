<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Page Content
	================================================== -->
	<!-- Hero -->
		<!--Imagenes comentadas se coloca la clave imgg  para darse una idea de como iba  -->
		<!--  imgg <section class="hero"> -->
		<section class="hero">
			<div class="container text-center">
				<div class="row">
				    <div class="col-md-12">
				      <a class="hero-brand" href="index.html" title="Home"><img alt="Redes Gesa" src="<?php echo $img;?>redes_gesa_3.png"></a>
				    </div>
				</div>
			  	<div class="col-md-12">
			    	<h1>
				        <?php echo lang('title_1');?>
			      	</h1>
				    <p class="tagline">
				      	<?php echo lang('tagline');?>
				    </p>
				    <a class="btn btn-full" href="#about">
				    	<?php echo lang('init_now');?>
				    </a>
			  	</div>
			</div>
		</section>
	<!-- /Hero -->

	<!-- Header -->
	  	<header id="header">
		    <div class="container">
		      	<div id="logo" class="pull-left">
		        	<a href="index.html"><img src="<?php echo $img;?>redes_logo1.png" alt="" title="" /></img></a>
		      	</div>
		      	<nav id="nav-menu-container">
		        	<ul class="nav-menu">
			        	<li>
			        		<a href="#about"><?php echo lang('about_us');?></a>
			        	</li>
			         	<li>
			         		<a href="#features"><?php echo lang('service');?></a>
			         	</li>
			          	<li>
			          		<a href="#portfolio"><?php echo lang('portfolio_header');?></a>
			          	</li>
			          	<li>
			          		<a href="#contact"><?php echo lang('contact_us_header');?></a>
			          	</li>
			        </ul>
		      	</nav>
		      <!-- #nav-menu-container -->
		      	<nav class="nav social-nav pull-right d-none d-lg-inline">
		        	<a href="#"><i class="fa fa-twitter"></i></a> 
		        	<a href="#"><i class="fa fa-facebook"></i></a> 
		        	<a href="#"><i class="fa fa-linkedin"></i></a> 
		        	<a href="#"><i class="fa fa-envelope"></i></a>
		      	</nav>
		    </div>
	  	</header>
	<!-- #header -->

	<!-- About -->
	  	<section class="about" id="about">
		    <div class="container text-center">
		      <h2>
		          <?php echo lang('about_us_about');?>
		        </h2>
		      <p>
		      	<?php echo lang('about');?>
		        <!-- Dentro de la especialidad se trabajaron principales, secundarios, algunas ampliaciones y reconstrucciones. -->
		      </p>
		      <div class="row stats-row">
		        <div class="stats-col text-center col-md-3 col-sm-6">
		        	<div class="circle">
		            	<span class="stats-no" data-toggle="counter-up">232</span> <?php echo lang('clients_satisfechs');?>
		          	</div>
		        </div>
		        <div class="stats-col text-center col-md-3 col-sm-6">
		          	<div class="circle">
		            	<span class="stats-no" data-toggle="counter-up">79</span> <?php echo lang('proyects');?>
		          	</div>
		        </div>
		        <div class="stats-col text-center col-md-3 col-sm-6">
		          	<div class="circle">
		            	<span class="stats-no" data-toggle="counter-up">1,463</span> <?php echo lang('hours_soport');?>
		          	</div>
		        </div>
		        <div class="stats-col text-center col-md-3 col-sm-6">
		          	<div class="circle">
		            	<span class="stats-no" data-toggle="counter-up">15</span> <?php echo lang('personal');?>
		          	</div>
		        </div>
		      </div>
		    </div>
	  	</section>
  	<!-- /About -->

  	<!-- Parallax -->
	     <div class="block bg-primary block-pd-lg block-bg-overlay text-center" data-bg-img="<?php echo $img;?>parallax-bg.jpg" data-settings='{"stellar-background-ratio": 0.6}' data-toggle="parallax-bg">
		    <h2>
		        <?php echo lang('welcome_parallax');?>
		      </h2>

		    <p>
		      <?php echo lang('descripcion_parallax');?>
		    </p>
		    <!-- <img alt="Bell - A perfect theme" class="gadgets-img hidden-md-down" src="<?php echo $img;?>gadgets.png"> -->
		  </div>
  	<!-- /Parallax -->

  	<!-- Features -->
	    <section class="features" id="features">
	      	<div class="container">
	        	<h2 class="text-center">
	            	<?php echo lang('service_features');?>
	          	</h2>
	        <div class="row">
	          	<div class="feature-col col-lg-4 col-xs-12">
	            	<div class="card card-block text-center">
	              		<div>
	                		<img class="hero-brand img-servicios" src="<?php echo $img;?>cableado_estructurado/cableado_1.jpg">
	              		</div>
		              	<div>
			                <h3><?php echo lang('structured_cabling');?></h3>
			                <p>
			                  	<?php echo lang('descripcion_cabling');?> 
			                </p>
			            </div>
		            </div>
	          	</div>
	          	<div class="feature-col col-lg-4 col-xs-12">
		            <div class="card card-block text-center">
			            <div>
			                <img class="hero-brand img-servicios" src="<?php echo $img;?>fibra/fibra_1.jpg">
			            </div>
		              	<div>
		                	<h3><?php echo lang('optical_fiber');?></h3>
		                	<p><!-- TEXTO --></p>
		              </div>
	            	</div>
	          	</div>
	          	<div class="feature-col col-lg-4 col-xs-12">
		            <div class="card card-block text-center">
		              	<div>
		                	<img class="hero-brand img-servicios" src="<?php echo $img;?>telefonia/telefonia_3.jpg">
		              	</div>
		              	<div>
		                	<h3><?php echo lang('telephony');?></h3>
		                	<p>
		                  		<?php echo lang('descripcion_telephony');?>
		                	</p>
		              	</div>
		            </div>
	          	</div>
	        </div>
	        <div class="row">
	          	<div class="feature-col col-lg-4 col-xs-12">
		            <div class="card card-block text-center">
		              	<div>
		                	<img class="hero-brand img-servicios" src="<?php echo $img;?>redes_lan/lan_2.jpg">
		              	</div>
		              	<div>
		                	<h3><?php echo lang('technical_support');?></h3>
			                <p>
			                  	<?php echo lang('descripcion_technical_support');?> 
			                </p>
		              	</div>
		            </div>
	          	</div>
	          	<!-- <div class="feature-col col-lg-4 col-xs-12">
		            <div class="card card-block text-center">
		              	<div>
			                <div class="feature-icon">
			                  	<span class="fa fa-cutlery"></span>
			                </div>
			            </div>
		              	<div>
			                <h3><?php echo lang('preventive_service');?></h3>
		              	</div>
		            </div>
	          	</div> -->
	          	<div class="feature-col col-lg-4 col-xs-12">
	          		<div class="card card-block text-center">
		              	<div>
		              		<img class="hero-brand img-servicios" src="<?php echo $img;?>cctv/cctv_1.jpg">
		              	</div>
		              	<div>
		                	<h3><?php echo lang('system_security');?></h3>
		                <p>
		                  	<?php echo lang('system_cctv');?>
		                </p>
		              	</div>
	            	</div>
	            </div>
	          	<div class="feature-col col-lg-4 col-xs-12">
	            	<div class="card card-block text-center">
		              	<div>
		                	<img class="hero-brand img-servicios" src="<?php echo $img;?>electricas/electricas_3.jpg">
		              	</div>
		              	<div>
		                	<h3><?php echo lang('electrical_installations');?></h3>
		                	<p>
		                  		<?php echo lang('desc_electrical_installations');?>
		                	</p>
		              	</div>
	            	</div>
	          	</div>
	          	<div class="feature-col col-lg-4 col-xs-12">
	            	<div class="card card-block text-center">
	            	</div>
	          	</div>
	          	<!-- <div class="feature-col col-lg-4 col-xs-12">
	            	<div class="card card-block text-center">
		              	<div>
		              		<img class="hero-brand img-servicios" src="<?php echo $img;?>cctv/cctv_1.jpg">
		              	</div>
		              	<div>
		                	<h3><?php echo lang('system_security');?></h3>
		                <p>
		                  	<?php echo lang('system_cctv');?>
		                </p>
		              	</div>
	            	</div>
	          	</div> -->
	        </div>
	      </div>
	    </section>
	<!-- /Features -->

	<!-- Call to Action -->
	    <section class="cta">
	      	<div class="container">
	        	<div class="row">
		          	<div class="col-lg-9 col-sm-12 text-lg-left text-center">
			            <h2><?php echo lang('title_extra');?></h2>
			            <p>
			            	<?php echo lang('description_extra');?>
			            </p>
		          	</div>
	        	</div>
	      	</div>
	    </section>
	<!-- /Call to Action -->

	<!-- Portfolio -->
	    <section class="portfolio" id="portfolio">
	      	<div class="container text-center">
	        	<h2><?php echo lang('portfolio');?></h2>
	        	<p>
	          		<?php echo lang('portfolio_descri');?>
	        	</p>
	      	</div>

	      	<div class="portfolio-grid">
	        	<div class="row">
	          		<div class="col-lg-3 col-sm-6 col-xs-12">
	            		<div class="card card-block">
		              		<a href="#">
		              			<img alt="" src="<?php echo $img;?>porta/porta_1.jpg">
		                		<div class="portfolio-over">
		                  			<div>
		                    			<h3 class="card-title"><?php echo lang('portfolio_1');?></h3>

		                    			<p class="card-text"><?php echo lang('portfolio_2');?></p>
		                  			</div>
		                		</div>
		                	</a>
	            		</div>
	          		</div>
		          	<div class="col-lg-3 col-sm-6 col-xs-12">
		           		<div class="card card-block">
		              		<a href="#"><img alt="" src="<?php echo $img;?>porta/porta_2.jpg">
			                	<div class="portfolio-over">
			                  		<div>
				                    	<h3 class="card-title"><?php echo lang('portfolio_3');?></h3>
				                    	<p class="card-text"><?php echo lang('portfolio_4');?></p>
			                  		</div>
								</div>
							</a>
		            	</div>
		          	</div>
		          	<div class="col-lg-3 col-sm-6 col-xs-12">
		            	<div class="card card-block">
			              	<a href="#"><img alt="" src="<?php echo $img;?>porta/porta_3.jpg">
			                	<div class="portfolio-over">
			                  		<div>
			                    		<h3 class="card-title"><?php echo lang('portfolio_5');?></h3>
			                    		<p class="card-text"><?php echo lang('portfolio_6');?></p>
			                  		</div>
			                	</div>
			            	</a>
		            	</div>
		          	</div>
		          	<div class="col-lg-3 col-sm-6 col-xs-12">
		            	<div class="card card-block">
		              		<a href="#"><img alt="" src="<?php echo $img;?>porta/porta_4.jpg">
				                <div class="portfolio-over">
				                  	<div>
					                    <h3 class="card-title"><?php echo lang('portfolio_7');?></h3>
					                    <p class="card-text"><?php echo lang('portfolio_8');?></p>
				                  	</div>
				                </div>
		            		</a>
		            	</div>
		          	</div>
		        </div>
	        	<div class="row">
		          	<div class="col-lg-3 col-sm-6 col-xs-12">
			            <div class="card card-block">
			              	<a href="#"><img alt="" src="<?php echo $img;?>porta/porta_5.png">
			                	<div class="portfolio-over">
			                  		<div>
					                    <h3 class="card-title"><?php echo lang('portfolio_9');?></h3>
					                    <p class="card-text"><?php echo lang('portfolio_10');?></p>
			                  		</div>
			                	</div>
			                </a>
			            </div>
		          	</div>
		          	<div class="col-lg-3 col-sm-6 col-xs-12">
			            <div class="card card-block">
			              	<a href="#"><img alt="" src="<?php echo $img;?>porta/porta_6.png">
				                <div class="portfolio-over">
				                  	<div>
				                    	<h3 class="card-title"><?php echo lang('portfolio_11');?></h3>
				                    	<p class="card-text"><?php echo lang('portfolio_12');?></p>
				                  	</div>
			                	</div>
			            	</a>
			            </div>
		          	</div>
	          		<div class="col-lg-3 col-sm-6 col-xs-12">
			            <div class="card card-block">
			              	<a href="#"><img alt="" src="<?php echo $img;?>porta/porta_7.png">
			                	<div class="portfolio-over">
			                  		<div>
			                  			<h3 class="card-title"><?php echo lang('portfolio_13');?></h3>
			                    		<p class="card-text"><?php echo lang('portfolio_14');?></p>
			                  		</div>
			                	</div>
			            	</a>
			            </div>
	          		</div>
	          		<div class="col-lg-3 col-sm-6 col-xs-12">
		            	<div class="card card-block">
			              	<a href="#">
			              		<img alt="" src="<?php echo $img;?>porta/porta_8.png">
				                <div class="portfolio-over">
				                  	<div>
				                    	<h3 class="card-title"><?php echo lang('portfolio_15');?></h3>
				                    	<p class="card-text"><?php echo lang('portfolio_16');?></p>
				                  	</div>
				                </div>
			            	</a>
		            	</div>
	          		</div>
	        	</div>
	      	</div>
	    </section>
  	<!-- /Portfolio -->

  	<!-- Contact  -->
  		<section id="contact">
	      	<div class="container">
		        <div class="row">
		          	<div class="col-md-12 text-center">
		            	<h2 class="section-title"><?php echo lang('contact_us');?></h2>
		          	</div>
		        </div>
		        <div class="row justify-content-center">
		          	<div class="col-lg-3 col-md-4">
		            	<div class="info">
			              	<div>
			                	<i class="fa fa-map-marker"></i>
			                	<p><?php echo lang('address');?></p>
			              	</div>
		              		<div>
		                		<i class="fa fa-envelope"></i>
		                		<p><?php echo lang('email');?></p>
		              		</div>
		              		<div>
		                		<i class="fa fa-phone"></i>
		                		<p><?php echo lang('phone');?></p>
		              		</div>
		            	</div>
		          	</div>
		          	<div class="col-lg-5 col-md-8">
			            <div class="form">
			              	<div id="sendmessage"><?php echo lang('sent_been');?></div>
			              	<div id="errormessage"></div>
				            <form action="" method="post" role="form" class="contactForm">
				                <div class="form-group">
				                  	<input type="text" name="name" class="form-control" id="name" placeholder="<?php echo lang('placeholder_name');?>" data-rule="minlen:4" data-msg="Este campo es obligatorio" />
				                  	<div class="validation"></div>
				                </div>
				                <div class="form-group">
				                  	<input type="email" class="form-control" name="email" id="email" placeholder="<?php echo lang('placeholder_email');?>" data-rule="email" data-msg="Este campo es obligatorio" />
				                  	<div class="validation"></div>
				                </div>
				                <div class="form-group">
				                  	<input type="text" class="form-control" name="subject" id="subject" placeholder="<?php echo lang('placeholder_subject');?>" data-rule="minlen:4" data-msg="Este campo es obligatorio" />
				                  	<div class="validation"></div>
				                </div>
				                <div class="form-group">
				                  	<textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Este campo es obligatorio" placeholder="<?php echo lang('placeholder_msg');?>"></textarea>
				                  	<div class="validation"></div>
				                </div>
				                <div class="text-center">
				                	<button  type="submit" id="enviar" onclick="sendMail();"><?php echo lang('sent_msg');?></button>
				                </div>
				            </form>
			            </div>
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
	    </section>
  	<!-- /Contact -->