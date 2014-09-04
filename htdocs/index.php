<?php
	$quotes = array(
		array("One good thing about music, when it hits you, you feel no pain", "Bob Marley"),
		array("Music is a moral law. It gives soul to the universe, wings to the mind, flight to the imagination, and charm and gaiety to life and to everything", "Plato"),
		array("Music expresses that which cannot be said and on which it is impossible to be silent.", "Victor Hugo"),
		array("Music washes away from the soul the dust of everyday life.", "Berthold Auerbach"),
		array("Music washes away from the soul the dust of everyday life.", "Jimi Hendrix"),
		array("If my music can change someone’s mood for the better even a little bit, that’s amazing.", "Yanni"),
	);	
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>AMA</title>    
		<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'> -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/foundation.css"/>
		<script type="text/javascript" src="js/vendor/jquery.js"></script>

		<!-- Own styles -->
		<link rel="stylesheet" href="css/style.css"/>
		
		<!-- Font awesome -->
		<link rel="stylesheet" href="css/font-awesome.css">
		
		<!-- Quote rotator component -->
		<link rel="stylesheet" type="text/css" href="css/quoterotator.css">
		
		<!-- jCarrousel -->
		<link rel="stylesheet" type="text/css" href="css/jcarousel.responsive.css">
		<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
		<script type="text/javascript" src="js/jcarousel.responsive.js"></script>

		<script src="js/vendor/modernizr.js"></script>

		<!--[if !IE 7]>
		<style type="text/css">
			#wrap {display:table;height:100%}
		</style>
		<![endif]-->
	</head>
  
	<body class='background-studio'>
	
		<!-- <nav class="top-bar sticky" data-topbar>
			<ul class="title-area">
				<li class="name">
					<img src='img/logo-small.png'/>
				</li>
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>
			<section class="top-bar-section">
				<ul class="right">
					<li><a href="#">Right Button Active</a></li>
					<li><a href="#">Right Button Active</a></li>
				</ul>
				<ul class="left">
					<p>text</p>
				</ul>
			</section>
		</nav> -->
	
		
		<header class='white'>
			<div class='row wide'>
				<div class='large-2 large-uncentered small-8 small-centered columns'>
					<div id='header-logo' class='text-center'>
						<!-- <h3 class='no-margin'><strong>AMA<strong></h3> -->
						<img src='img/logo-small-white.png' alt='AMA'/>
					</div>
				</div>
				<div class='large-4 columns'>
					<div class='row'>
						<div id='header-menus' class='text-center'>							
							<div class='large-10 columns'>
								<p class='no-margin text-left'>Convertimos tus ideas en música</p>
							</div>
							<div class='large-1 columns'>
								<!-- <a><p>Menu A</p></a> -->
							</div>
							<div class='large-1 columns'>
								<!-- <a><p>Menu B</p></a> -->
							</div>
						</div>
					</div>
				</div>
				<div class='large-2 columns'></div>
				<div class='large-4 columns'>
					<div class='text-center'>
						<div class='row'>
							<div id='header-icons' class='margin-top-small'>
								<div class='large-3 small-12 columns'>
									<a data-reveal-id="modal-contact">CONTACTO</a>
									
									
									<div id="modal-contact" class="reveal-modal" data-reveal>
										<h2>CONTACTO</h2>
										<p class="lead">Haz realidad tu proyecto musical, contactanos directamente a los números <span class='blue'>(044) 333 100 47 26</span>, <span class='blue'>(044) 333 559 73 74</span> o <span class='blue'>(044) 333 369 27 53</span>. Si lo deseas puedes escribirnos a <a href="mailto:info@ama-creative.com"><span class="blue">info@amamusical.com</span></a> o llenar la siguiente forma.</p>
										
										<form data-abide action="#" method='POST' class='custom'>
											<div class='row'>
												<div class='row'>
													<div class='large-4 columns'>
														<h5>Nombre</h5>
														<input type='text' name="username" required /></input>
														<small class="error">Cuál es tu nombre?</small>
													</div>				
													<div class="large-4 columns">
														<h5>E-mail</h5>
														<input type='email' name='email' required />
														<small class="error">Cuál es tu mail?</small>
													</div>
													<div class="large-4 columns">
														<h5>Teléfono <small>(opcional)</small></h5>
														<input type='text' name='phone' />														
													</div>
													<!-- <div class='large-6 left columns'>
														<h5>Otro</h5>
														<input type='text' name="ideaname" placeholder="Ultra-turbo-helper or Octo-mobile-organizer" required></input>
														<small class="error">Error</small>
													</div> -->
												</div>
												<div class='row'>
													<div class='large-12 columns'>
														<h5>Descripción del proyecto</h5>
														<textarea name="description" placeholder="Quiero crear una canción para..." required></textarea>
														<small class="error">Requerimos una descripción de tu proyecto</small>
													</div>
												</div>
											</div>
											<div class='row'>
												<div class='text-center'>
													<?php /* Recaptcha here */ ?>
													<button type='submit'>Enviar</button>
												</div>
											</div>
										</form>
										
										
										<a class="close-reveal-modal">&#215;</a>
									</div>
								</div>
								<div class='large-3 small-12 columns'>
									<a data-reveal-id="modal-we">NOSOTROS</a>
									<div id="modal-we" class="reveal-modal" data-reveal>
										<h2>NOSOTROS</h2>
										<p class="lead">Nuestro equipo esta conformado por:</p>
										<div class="row margin-top-small">
											<div class="large-2 columns"><img src="/img/andres.jpg"/></div>
											<div id="large-10 columns" class='margin-top-med'>
												<h4><b>Andrés Malacara Mier y Terán</b></h4>
												<p>Estudió Ingeniería en Audio (2006 - 2007), Producción Musical (2007 - 2008) y Mezcla y Masterizacón en Uxmalase. En 2010 estudió Producción y Post-producción de Cine y Televisión en Trebas Institute, en Toronto, Ontario, Canada. Actualmente estudia la licenciatura de Derecho en el ITESO. Es apasionado por el arte y su objetivo es profesionalizar los proyectos creativos.</p>
												<a href="mailto:andres@amamusical.com"><span class="blue">andres@amamusical.com</span></a>
											</div>
										</div>
										<div class="row margin-top-small">
											<div class="large-2 columns"><img src="/img/carlos.jpg"/></div>
											<div id="large-10 columns" class='margin-top-med'>
												<h4><b>Carlos Andrés Arellano Pichardo</b></h4>
												<p>Estudió Ingeniería en Audio (2006 - 2007), Producción Musical (2007 - 2008) y Mezcla y Masterizacón en Uxmalase. En 2011 estudió en Achemea College, en Londres, Inglaterra, en donde se graduó con un diplomado en Ingeniería en Audio en Estudio de Grabación y Audio en Vivo. Es ingenioso para descubrir lo nuevo en el mundo del audio y para saber cómo aplicarlo en su trabajo, desde el punto de vista técnico y creativo.</p>
												<a href="mailto:carlos@amamusical.com"><span class="blue">carlos@amamusical.com</span></a>
											</div>
										</div>
										<div class="row margin-top-small">
											<div class="large-2 columns"><img src="/img/david.jpg"/></div>
											<div id="large-10 columns" class='margin-top-med'>
												<h4><b>David Anguiano</b></h4>
												<p>Compositor musical. Experto en transformar ideas, conceptos e historias en letras y melodías. Vive en el mundo de las ideas y su pasión es verlas manifestadas en música y nuevos modelos de negocio.</p>
												<a href="mailto:david@amamusical.com"><span class="blue">david@amamusical.com</span></a>
											</div>
										</div>
										<a class="close-reveal-modal">&#215;</a>
									</div>
								</div>
								<div class='large-3 small-12 columns'>
									<a data-reveal-id="modal-services">SERVICIOS</a>
									<div id="modal-services" class="reveal-modal" data-reveal>
										<h2>SERVICIOS</h2>
										<p class="lead">Otros de nuestros servicios:</p>
										<div class='margin-top-small'>
											<h3 class='nobreak'>En nuestro estudio</h3><!-- <p class='nobreak margin-left-small'>Grac asfsaf asfasfd</p> -->
											<p>Grabación, mezcla, masterización y post-producción.</p>
											<!-- <div class='row text-center'>
												<div class='large-3 columns'>
													<p>Grabación</p>
													<p>Sample text, sample text, sample text, sample text, sample text</p>
												</div>
												<div class='large-3 columns'>
													<p>Mezcla</p>
													<p>Sample text, sample text, sample text, sample text, sample text</p>
												</div>
												<div class='large-3 columns'>
													<p>Masterización</p>
													<p>Sample text, sample text, sample text, sample text, sample text</p>
												</div>
												<div class='large-3 columns'>
													<p>Post-producción de audio</p>
													<p>Sample text, sample text, sample text, sample text, sample text</p>
												</div>
											</div> -->
										</div>
										<div class='margin-top-small'>
											<h3>Servicios jurídicos en materia de Propiedad Intelectual</h3>
											<p>En AMA nos interesa profesionalizar la carrera de los artistas, es por eso que ofrecemos servicios de registro de marcas, trámites ante INDAUTOR, revisión de contratos y litigios en materia de Propiedad Intelectual.</p>
										</div>
										<a class="close-reveal-modal">&#215;</a>
									</div>
								</div>
								<div class='large-3 small-6 columns'></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>		
		
		
		<div id="main" class=''>


			<!-- Body -->
			<div class='row'>
				<div class='margin-top-big margin-bottom-big'>
					<div class='large-10 large-centered columns'>
						<!-- Quote rotator -->						
						<div class="row">
							<div class="large-8 columns large-centered">
								<div id='quote_space'>
									<h3 class='margin-top-big'>
										"
										<i>
										<?php
											$quote_number = rand(0, count($quotes) - 1);									
											echo $quotes[$quote_number][0];
										?>
										"
										</i>
									</h3>
									<p class='margin-top-med text-right'>
										<i>
										<?php
											echo $quotes[$quote_number][1];
										?>
										</i>
									</p>
								</div>
							</div>
						</div>
						
						<!-- Quote rotator -->
						<!-- <div id="cbp-qtrotator" class="cbp-qtrotator">
							<div class="cbp-qtcontent">
								<img src="img/1.jpg" alt="img01" />
								<blockquote>
								  <p>People eat meat and think they will become as strong as an ox, forgetting that the ox eats grass.</p>
								  <h4><i>-Pino Caruso</i></h4>
								</blockquote>
							</div>
							<div class="cbp-qtcontent">
								<img src="img/2.jpg" alt="img02" />
								<blockquote>
								  <p>Nothing will benefit human health and increase the chances for survival of life on Earth as much as</p>
								  <h4><i>-Albert Einstein</i></h4>
								</blockquote>
							</div>
							<div class="cbp-qtcontent">
								<img src="img/3.jpg" alt="img03" />
								<blockquote>
								  <p>If you don't want to be beaten, imprisoned, mutilated, killed or tortured then you shouldn't con</p>
								  <h4><i>-Moby</i></h4>
								</blockquote>
							</div>
							<div class="cbp-qtcontent">
								<img src="img/4.jpg" alt="img04" />
								<blockquote>
								  <p>My body will not be a tomb for other creatures.</p>
								  <h4><i>-Leonardo Da Vinci</i></h4>
								</blockquote>
							</div>
						</div> -->
					</div>
				</div>
			</div>
			
			<div class='row wide-90 margin-top-med'>
				<div class='row'>
					<div class='large-8 columns'>
						<h6 class='no-margin white'><strong>PROYECTOS RECIENTES</strong></h6>
					</div>
					<div class='large-4 columns'>
						<div class='float-right'>
							<ul class="small-block-grid-5">
								<li class='no-padding-bot'>
									<a class='margin-right-small' id='filter-none'>
										<span data-tooltip class="has-tip" title="Ver todos">
											<i class="fa fa-plus fa-1x-med"></i>
										</span>
									</a>
								</li>
								<li class='no-padding-bot'>
									<a class='margin-right-small' id='filter-educational'>
										<span data-tooltip class="has-tip" title="Académicos">
											<i class="fa fa-mortar-board fa-1x-med"></i>
										</span>
									</a>
								</li>
								<li class='no-padding-bot'>
									<a class='margin-right-small' id='filter-personal'>
										<span data-tooltip class="has-tip" title="Regalos">
											<i class="fa fa-gift fa-1x-med"></i>
										</span>
									</a>
								</li>
								<li class='no-padding-bot'>
									<a class='margin-right-small' id='filter-company'>
										<span data-tooltip class="has-tip" title="Fundaciones">
											<i class="fa fa-institution fa-1x-med"></i>
										</span>
									</a>
								</li>
								<li class='no-padding-bot'>
									<a class='margin-right-small' id='filter-artists'>
										<span data-tooltip class="has-tip" title="Artistas">
											<i class="fa fa-music fa-1x-med"></i>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="wrapper">
					<div class="jcarousel-wrapper no-margin">
						<div class="jcarousel">
							<ul id='mycarousel'>
								<li>
									<img class='canGray ama-educational' src="/img/feosong.jpg" alt="Image 1" data-reveal-id="feosong" />
									<div class='text-center'>
										<h5>The Feo Song</h5>
									</div>
									<div id="feosong" class="reveal-modal" data-reveal>
										<h2>The Feo Song</h2>
										<!-- Erase the next line comment if we want a subtitle -->
										<!-- <p class="lead">Your couch.  It is mine.</p> -->
										<div class='row'>
											<div class='large-12 large-centered columns'>
												<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/163724150&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
												<p class='margin-top-med'>Esta canción fue un proyecto en donde compusimos un tema para el patólogo y maestro de Kaplan Medical, en Estados Unidos, John Barone M.D. El tema explica la fisiopatología del tumor llamado Feocromocitoma, mediante una cómica historia de un chico muy feo en la disco.</p>
												<div class='text-center'>
													<a class=button data-reveal-id="modal-contact">Contáctanos y haz realidad tu proyecto musical</a>
												</div>
											</div>
										</div>
										<a class="close-reveal-modal">&#215;</a>
									</div>
								</li>
								<li>
									<img class='canGray ama-company' src="/img/contigo.jpg" alt="Image 1" data-reveal-id="contigo" />
									<div class='text-center'>
										<h5>Contigo Avanzamos A.C.</h5>
									</div>
									<div id="contigo" class="reveal-modal" data-reveal>
										<h2>Contigo Avanzamos A.C.</h2>
										<!-- Erase the next line comment if we want a subtitle -->
										<!-- <p class="lead">Your couch.  It is mine.</p> -->
										<div class='row'>
											<div class='large-12 large-centered columns'>
												<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/101332520&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
												<p class='margin-top-med'>Esta canción la compusimos para Contigo Avanzamos, A.C., una fundación de Guadalajara cuya misión es inculcar valores en la sociedad mexicana.</p>
												<div class='text-center'>
													<a class=button data-reveal-id="modal-contact">Contáctanos y haz realidad tu proyecto musical</a>
												</div>
											</div>
										</div>
										<a class="close-reveal-modal">&#215;</a>
									</div>
								</li>
								<li>
									<img class='canGray ama-personal' src="/img/cumple50.jpg" alt="Image 1" data-reveal-id="cumple50" />
									<div class='text-center'>
										<h5>Igual que Ayer</h5>
									</div>
									<div id="cumple50" class="reveal-modal" data-reveal>
										<h2>Igual que Ayer</h2>
										<!-- Erase the next line comment if we want a subtitle -->
										<!-- <p class="lead">Your couch.  It is mine.</p> -->
										<div class='row'>
											<div class='large-12 large-centered columns'>
												<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/163714730&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
												<p class='margin-top-med'>Esta canción la compusimos como un regalo de cumpleaños que le dieron a una señora de parte de su familia.</p>
												<div class='text-center'>
													<a class=button data-reveal-id="modal-contact">Contáctanos y haz realidad tu proyecto musical</a>
												</div>
											</div>
										</div>
										<a class="close-reveal-modal">&#215;</a>
									</div>
								</li>
								<li>
									<img class='canGray ama-educational' src="/img/lagrima.jpg" alt="Image 1" data-reveal-id="lagrima" />
									<div class='text-center'>
										<h5>Lágrima al Riñón</h5>
									</div>
									<div id="lagrima" class="reveal-modal" data-reveal>
										<h2>Lágrima al Riñon</h2>
										<!-- Erase the next line comment if we want a subtitle -->
										<!-- <p class="lead">Your couch.  It is mine.</p> -->
										<div class='row'>
											<div class='large-12 large-centered columns'>
												<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/137954794&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
												<p class='margin-top-med'>Esta canción fue un proyecto en donde compusimos un tema para el patólogo y maestro de Kaplan Medical, en Estados Unidos, John Barone M.D. El tema explica el Síndrome Nefrítico, mediante una historia del paciente ficticio Mr. Jones.</p>
												<div class='text-center'>
													<a class=button data-reveal-id="modal-contact">Contáctanos y haz realidad tu proyecto musical</a>
												</div>
											</div>
										</div>
										<a class="close-reveal-modal">&#215;</a>
									</div>
								</li>
								<li>
									<img class='canGray ama-artists' src="/img/segunda.jpg" alt="Image 1" data-reveal-id="segunda" />
									<div class='text-center'>
										<h5>La segunda</h5>
									</div>
									<div id="segunda" class="reveal-modal" data-reveal>
										<h2>La segunda</h2>
										<!-- Erase the next line comment if we want a subtitle -->
										<!-- <p class="lead">Your couch.  It is mine.</p> -->
										<div class='row'>
											<div class='large-12 large-centered columns'>
												<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/145935545&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
												<p class='margin-top-med'>Esta canción la compusimos y produjimos para Mary Isabl, una artista de Guadalajara. Ella llegó con una maqueta para que le desarrolláramos todo el tema.</p>
												<div class='text-center'>
													<a class=button data-reveal-id="modal-contact">Contáctanos y haz realidad tu proyecto musical</a>
												</div>
											</div>
										</div>
										<a class="close-reveal-modal">&#215;</a>
									</div>
								</li>
								<li>
									<img class='canGray ama-artists' src="/img/losdemas.jpg" alt="Image 1" data-reveal-id="losdemas" />
									<div class='text-center'>
										<h5>Como los demás</h5>
									</div>
									<div id="losdemas" class="reveal-modal" data-reveal>
										<h2>Como los demás</h2>
										<!-- Erase the next line comment if we want a subtitle -->
										<!-- <p class="lead">Your couch.  It is mine.</p> -->
										<div class='row'>
											<div class='large-12 large-centered columns'>
												<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/163714616&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
												<p class='margin-top-med'>Esta canción la compusimos y produjimos para Juan Pablo Carrasco para presentarla a una disquera importante.</p>
												<div class='text-center'>
													<a class=button data-reveal-id="modal-contact">Contáctanos y haz realidad tu proyecto musical</a>
												</div>
											</div>
										</div>
										<a class="close-reveal-modal">&#215;</a>
									</div>
								</li>
								<li>
									<img class='canGray ama-artists' src="/img/woodpirates.jpg" alt="Image 1" data-reveal-id="woodpirates" />
									<div class='text-center'>
										<h5>Wood & Pirates</h5>
									</div>
									<div id="woodpirates" class="reveal-modal" data-reveal>
										<h2>Wood & Pirates</h2>
										<!-- Erase the next line comment if we want a subtitle -->
										<!-- <p class="lead">Your couch.  It is mine.</p> -->
										<div class='row'>
											<div class='large-12 large-centered columns'>
												<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/111247562&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
												<p class='margin-top-med'>Esta canción la produjimos con Eduardo Villaseñor “Muller”.</p>
												<div class='text-center'>
													<a class=button data-reveal-id="modal-contact">Contáctanos y haz realidad tu proyecto musical</a>
												</div>
											</div>
										</div>
										<a class="close-reveal-modal">&#215;</a>
									</div>
								</li>
							</ul>
						</div>
						<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
						<a href="#" class="jcarousel-control-next">&rsaquo;</a>
						<!-- <p class="jcarousel-pagination"></p> -->
					</div>
				</div>
			</div>
		</div>

		<footer class='white'>
			<div class='row wide text-center'>
				<div class="large-3 columns">&nbsp;</div>
				<div class="large-6 columns text-center"><p class='no-margin'>AMA | 2014</p></div>
				<div class="large-3 columns">
					<div id='footer-icons' class='margin-top-small'>
						<div class='large-3 small-6 columns'>
							<a href='https://twitter.com/OficialAMA' target='_blank'>
								<i class="fa fa-twitter fa-2x"></i>
							</a>
						</div>
						<div class='large-3 small-6 columns'>
							<a href='https://www.facebook.com/AMAcreativo' target='_blank'>
								<i class="fa fa-facebook fa-2x"></i>
							</a>
						</div>
						<div class='large-3 small-6 columns'>
							<a href='http://instagram.com/amaoficial' target='_blank'>
								<i class="fa fa-instagram fa-2x"></i>
							</a>
						</div>
						<div class='large-3 small-6 columns'>
							<a href='https://soundcloud.com/ama-audio' target='_blank'>
								<i class="fa fa-soundcloud fa-2x"></i>
							</a>
						</div>
					</div>
				</div>
			
				
				<!-- <div class='large-2 large-uncentered small-12 small-centered columns'>
					<div id='footer-logo' class='text-center'>						
						<img src='img/logo-small-white.png' alt='AMA'/>
					</div>
				</div>
				<div class='large-7 columns'></div>
				<div class='large-3 columns'>
					<div class='text-center'>
						<div class='row'>
							<div id='footer-icons' class='margin-top-small'>
								<div class='large-3 small-6 columns'>
									<a href='#'>
										<i class="fa fa-twitter fa-2x"></i>
									</a>
								</div>
								<div class='large-3 small-6 columns'>
									<a href='#'>
										<i class="fa fa-facebook fa-2x"></i>
									</a>
								</div>
								<div class='large-3 small-6 columns'>
									<a href='#'>
										<i class="fa fa-instagram fa-2x"></i>
									</a>
								</div>
								<div class='large-3 small-6 columns'>
									<a href='#'>
										<i class="fa fa-soundcloud fa-2x"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</footer>
		
		<!-- Footer scripts -->
		<script>
			$("#filter-none").click(function () {
				removeGrays();
			});
			$("#filter-educational").click(function () {
				addGrays();
				$(".ama-educational").removeClass('grayed');
			});
			$("#filter-personal").click(function () {
				addGrays();
				$(".ama-personal").removeClass('grayed');
			});
			$("#filter-company").click(function () {
				addGrays();
				$(".ama-company").removeClass('grayed');
			});
			$("#filter-artists").click(function () {
				addGrays();
				$(".ama-artists").removeClass('grayed');
			});
			
			function removeGrays() {
				$(".canGray").removeClass('grayed');
			}
			
			function addGrays() {
				$(".canGray").addClass('grayed');
			}
		</script>
		
		
		<script src="js/foundation.min.js"></script>
		<script src="js/jquery.cbpQTRotator.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpQTRotator( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 700,
					// default transition easing
					easing : 'ease',
					// rotator interval (ms)
					interval : 8000
				}
				- destroy:
				$( selector ).cbpQTRotator( 'destroy' );
				*/

				$( '#cbp-qtrotator' ).cbpQTRotator();

			} );
		</script>
		
		<script>
			jQuery('#mycarousel').jcarousel({visible: 4});
		</script>
		
		<script>
			$(document).foundation();
			
			/* Sticky footer */
			window.onload = function() {
				stickyFooter();
				
				//you can either uncomment and allow the setInterval to auto correct the footer
				//or call stickyFooter() if you have major DOM changes
				//setInterval(checkForDOMChange, 1000);
			};

			//check for changes to the DOM
			function checkForDOMChange() {
				stickyFooter();
			}

			//check for resize event if not IE 9 or greater
			window.onresize = function() {
				stickyFooter();
			}

			//lets get the marginTop for the <footer>
			function getCSS(element, property) {

			  var elem = document.getElementsByTagName(element)[0];
			  var css = null;
			  
			  if (elem.currentStyle) {
				css = elem.currentStyle[property];
			  
			  } else if (window.getComputedStyle) {
				css = document.defaultView.getComputedStyle(elem, null).
				getPropertyValue(property);
			  }
			  
			  return css;

			}

			function stickyFooter() {
				
				if (document.getElementsByTagName("footer")[0].getAttribute("style") != null) {
					document.getElementsByTagName("footer")[0].removeAttribute("style");
				}
				
				if (window.innerHeight != document.body.offsetHeight) {
					var offset = window.innerHeight - document.body.offsetHeight;
					var current = getCSS("footer", "margin-top");
					
					if (isNaN(current) == true) {
						document.getElementsByTagName("footer")[0].setAttribute("style","margin-top:0px;");
						current = 0;
					} else {
						current = parseInt(current);
					}
									
					if (current+offset > parseInt(getCSS("footer", "margin-top"))) {			
						document.getElementsByTagName("footer")[0].setAttribute("style","margin-top:"+(current+offset)+"px;");
					}
				}
			}

		</script>
	</body>
</html>
