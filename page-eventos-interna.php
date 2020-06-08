<?php
/**
 * Template Name: [Interna] Eventos
 */

get_header();
?> 

<main id="page-evtr-interna">

	<!-- AQUI COMEÇA O BANNER DA SESSÃO DO EVENTO -->


	<section class="banner-evtr-interna">
		<div class="container-fluid">
			<div class="row next-event">
				<div class="col-md-3"></div>
				<div class="col-md-6 img-edition">
					<img src="<?php echo get_template_directory_uri(); ?>/img/txt-last-edition.png">
				</div>
				<div class="col-md-3"></div>
			</div>

			<div class="row background-black">
				<div class="col-md-3"></div>

				<div class="col-md-3 desktop">
					<button type="button" class="btn btn-green">Quero participar</button>
				</div>

				<div class="col-md-3 desktop">
					<button type="button" class="btn btn-yellow">Quero participar</button>
				</div>

				<div class="col-md-3 btn-responsive mobile">
					<button type="button" class="btn btn-green">Quero participar</button>
				</div>

				<div class="col-md-3 btn-responsive mobile">
					<button type="button" class="btn btn-yellow">Quero participar</button>
				</div>

				<div class="col-md-3"></div>
			</div>
		</div>
	</section>

<!-- AQUI COMEÇA A CONTAGEM REGRESSIVA DO EVENTO -->
	<section id="contagem">
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-md-3"></div>

						<div class="col-md-6 title">
							<div class="countdown">
								<div class="row place-center">
									<div class="col-sm-12 title-countdown">O evento começará em</div>
									
									<div class="row box-date">
										<div id="days" class="col-sm-12 date-number">50</div>
										<div class="col-sm-12 current-timer">Dias</div>
									</div>

									<div class="row box-date">
										<div id="hours" class="col-sm-12 date-number">21</div>
										<div class="col-sm-12 current-timer">Horas</div>
									</div>

									<div class="row box-date">
										<div id="minutes" class="col-sm-12 date-number">48</div>
										<div class="col-sm-12 current-timer">Minutos</div>
									</div>

									<div class="row box-date">
										<div id="seconds" class="col-sm-12 date-number">35</div>
										<div class="col-sm-12 current-timer">Segundos</div>
									</div>

									<button type="button" class="btn btn-countdown">Quero ser lembrado</button>
							</div>
						</div>

						<div class="col-md-3"></div>
					</div>
				</div>
			</div>
	</section>

<!-- AQUI ACABA A CONTAGEM REGRESSIVA DO EVENTO -->

  <!-- ========= INÍCIO BREADCRUMB ========= -->
   <section id="breadcrumb">
      <div class="container">
	      <nav aria-label="breadcrumb">
	        <ol class="breadcrumb">
	          <li class="breadcrumb-item"><a href="#">Home</a></li>
	          <li class="breadcrumb-item"><a href="#">Para sua empresa</a></li>
	          <li class="breadcrumb-item"><a href="#">Eventos e Treinamentos</a></li>
	          <li class="breadcrumb-item active" aria-current="page" style="font-weight: 900">8 th Shared Services Knowledge Exchange</li>
	        </ol>
	      </nav>
      </div>
    </section>
      <!-- ========= FIM BREADCRUMB ========= -->

      <!-- AQUI COMEÇA SOBRE O EVENTO -->
      <section id="sobre-o-evento">
			<div class="container">
				<div class="row">
					<div class="col-md-12 title">
						<h2>SOBRE O SHARED SERVICES<br> KNOWLEDGE EXCHANGE</h2>
						<h6>Desde 2013, o Shared Services Knowledge Exchange representa o maior evento de interação e discussão sobre Serviços Compartilhados do país, reunindo um público formado por alta e média gerência em busca de soluções operacionais para as principais dificuldades e limitações enfrentadas pelos Centros. Em 2018, o 6th SSKE contou com a presença de mais de 150 profissionais de cerca de 60 empresas que debateram o CSC como protagonista da transformação das organizações. Neste ano, o 7th SSKE aconteceu nos dias 20 e 21 de agosto e debateu o tema: "Entre erros e acertos, como passar pela jornada de transformação dos CSCs?"</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/img/consult-interna.jpg">
					</div>
				</div>
			</div>
	</section>

	<!-- AQUI COMEÇA PROGRAMAÇÃO E PALESTRANTES DO EVENTO -->
	<section id="courses">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 programacao">
					<button type="button" class="btn btn-yellow">Ver Programação</button>
				</div>

				<div class="col-md-6 palestrantes">
					<button type="button" class="btn btn-green">Conheça os Palestrantes</button>
				</div>
			</div>
		</div>
	</section>

	<!-- AQUI COMEÇA OS PATROCINADORES DO EVENTO -->
	<section id="patrocinadores">
		<div class="container">
			<div class="row">
				<div class="col-md-12 title">
					<h2>PATROCINADORES 8th SSKE</h2>
				</div>

				<div class="col-md-12 premium">
					<div class="row">
						<div class="col-md-5"><hr style="height:1px; border:none; color:#707070; background-color:#707070;"/></div>
						<div class="col-md-2 title-patrocinadores">Premium</div>
						<div class="col-md-5"><hr style="height:1px; border:none; color:#707070; background-color:#707070;"/></div>
					</div>
					<div class="row imgs-logos">
						<div class="col-md-4"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
						<div class="col-md-4"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
						<div class="col-md-4"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
					</div>
				</div>

				<div class="col-md-12 master">
					<div class="row">
						<div class="col-md-5"><hr style="height:1px; border:none; color:#707070; background-color:#707070;"/></div>
						<div class="col-md-2 title-patrocinadores">Master</div>
						<div class="col-md-5"><hr style="height:1px; border:none; color:#707070; background-color:#707070;"/></div>
					</div>
					<div class="row imgs-logos">
						<div class="col-md-4"></div>
						<div class="col-md-4"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
						<div class="col-md-4"></div>
					</div>
				</div>

				<div class="col-md-12 startups">
					<div class="row">
						<div class="col-md-5"><hr style="height:1px; border:none; color:#707070; background-color:#707070;"/></div>
						<div class="col-md-2 title-patrocinadores">Startups</div>
						<div class="col-md-5"><hr style="height:1px; border:none; color:#707070; background-color:#707070;"/></div>
					</div>
					<div class="row imgs-logos">
						<div class="col-md-4"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
						<div class="col-md-4"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
						<div class="col-md-4"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- AQUI O MAPA -->
	<section id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.8582086570705!2d-43.19186798503339!3d-22.95544848498708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997fe15a64d2d7%3A0x52907d33d368dc8b!2sR.%20Mena%20Barreto%2C%20120%20-%20Botafogo%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2022271-100!5e0!3m2!1spt-BR!2sbr!4v1580139739830!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</section>

	<!-- AQUI COMEÇA A CONTAGEM REGRESSIVA DO EVENTO -->
	<section id="empresas-participantes">
		<div class="container">
			<div class="row">
				<div class="col-md-12 title">
					<h2>Empresas participantes 2019</h2>
				</div>
				<div class="col-sm-2 offset-1"></div>
				<div class="col-md-2 logo-participantes"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
				<div class="col-md-2 logo-participantes"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
				<div class="col-md-2 logo-participantes"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
				<div class="col-sm-2"></div>

				<div class="col-sm-2 offset-1"></div>
				<div class="col-md-2 logo-participantes"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
				<div class="col-md-2 logo-participantes"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
				<div class="col-md-2 logo-participantes"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
				<div class="col-sm-2"></div>

				<div class="col-sm-2 offset-1"></div>
				<div class="col-md-2 logo-participantes"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
				<div class="col-md-2 logo-participantes"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
				<div class="col-md-2 logo-participantes"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
				<div class="col-sm-2"></div>

				<div class="col-sm-3 offset-1"></div>
				<div class="col-md-2 logo-participantes"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
				<div class="col-md-2 logo-participantes"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-beejobs.png"></div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</section>

	<section id="photo-event">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Veja como foi o 8th SSke</h2>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="col-md-4 photo-col4-top"><img src="<?php echo get_template_directory_uri(); ?>/img/col-4-top.png"></div>
						<div class="col-md-8 photo-col8-lateral"><img src="<?php echo get_template_directory_uri(); ?>/img/col-8-top.png"></div>
					</div>
				</div>
			</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-8 photo-col8">
						<img src="<?php echo get_template_directory_uri(); ?>/img/col-8.png">
					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12 photo-col4" style="margin-top: 5px;"><img src="<?php echo get_template_directory_uri(); ?>/img/col-4-middle.png">
							</div>
							<div class="col-md-12 photo-col4"><img src="<?php echo get_template_directory_uri(); ?>/img/col-4-bottom.png">
							</div>
						</div>
					</div>
				</div>

				<button type="button" class="btn btn-blue">Ver mais fotos</button>
			</div>
	</section>

	<section id="prev-event">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 txt-edit">
					<h2>Veja como foi Edição anterior do sske</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4"> </div>
				<div class="col-md-4 img-edition">
					<img src="<?php echo get_template_directory_uri(); ?>/img/txt-last-edition.png">
				</div>
				<div class="col-md-4"> </div>

				<div class="col-md-12 btn-edition">
					<button type="button" class="btn btn-yellow">Ver mais fotos</button>
				</div>
			</div>
		</div>
	</section>




<!-- ======== CARROSSEL DE EVENTOS ========= -->
<section id="outros-eventos">
  <div class="container">
    <div class="row">
<div class="col-md-11 title-events-carousel">
  <h3>Conheça nossos outros eventos</h3>
</div>
<div class="col-md-1 arrows">
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<section id="slider" class="desktop">
  <div class="container">
    <div class="row">
  <div class="col-12">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
      <div class="carousel-item active slide-events">
      <div class="row w-100">
        <div class="col-md-6">
            <div class="row events">
              <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/img/img-caroulsel1.jpeg" class="img-slide-events"></div>
              <div class="col-md-4 description"><h4>01 de Novembro</h4>
                <p>Breve descrição do evento</p>
                <p>Cubo Itaú - São Paulo, SP</p>
                <button type="button" class="btn btn-light btn-events">Conheça o SSLF <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-white.png"></button>
              </div>
            </div>
        </div>
        <div class="col-md-6 second-slide">
              <div class="row events">
              <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/img/img-caroulsel2.jpg" class="img-slide-events"></div>
              <div class="col-md-4 description"><h4>02 de Novembro</h4>
                <p>Breve descrição do evento</p>
                <p>Cubo Itaú - São Paulo, SP</p>
                <button type="button" class="btn btn-light btn-events">Conheça o SSLF <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-white.png"></button>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="carousel-item slide-events">
      <div class="row w-100">
        <div class="col-md-6">
            <div class="row events">
              <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/img/img-caroulsel2.jpg" class="img-slide-events"></div>
              <div class="col-md-4 description"><h4>02 de Novembro</h4>
                <p>Breve descrição do evento</p>
                <p>Cubo Itaú - São Paulo, SP</p>
                <button type="button" class="btn btn-light btn-events">Conheça o SSLF <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-white.png"></button>
              </div>
            </div>
        </div>
        <div class="col-md-6 second-slide">
              <div class="row">
              <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/img/img-caroulsel1.jpeg" class="img-slide-events"></div>
              <div class="col-md-4 description"><h4>01 de Novembro</h4>
                <p>Breve descrição do evento</p>
                <p>Cubo Itaú - São Paulo, SP</p>
                <button type="button" class="btn btn-light btn-events">Conheça o SSLF <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-white.png"></button>
              </div>
            </div>
        </div>
      </div>
  </div>
  </div>
</div>
</div>
    </div>
  </div>
</section>

<!-- ========== CAROUSEL MOBILE ========== -->
<section id="slider" class="mobile">
  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
      <div class="carousel-item slide-events active">
      <div class="row w-100">
        <div class="col-md-12">
              <img src="<?php echo get_template_directory_uri(); ?>/img/img-caroulsel1.jpeg" class="img-slide-events">
                <div class="description"><h4>01 de Novembro</h4>
                <p>Breve descrição do evento</p>
                <p>Cubo Itaú - São Paulo, SP</p>
                <button type="button" class="btn btn-light btn-events">Conheça o SSLF <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-white.png"></button>
              </div>
        </div>
      </div>
    </div>
    <div class="carousel-item slide-events">
      <div class="row w-100">
        <div class="col-md-12">
            <div class="row events">
              <div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/img/img-caroulsel1.jpeg" class="img-slide-events">
                <div class="description"><h4>01 de Novembro</h4>
                <p>Breve descrição do evento</p>
                <p>Cubo Itaú - São Paulo, SP</p>
                <button type="button" class="btn btn-light btn-events">Conheça o SSLF <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-white.png"></button>
              </div>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>
    </div>
  </div>
</section>

<!-- END CAROUSEL MOBILE -->

<?php get_template_part('inc/depoimentos'); ?>
<?php get_template_part('inc/contact'); ?>


</main>
<script type="text/javascript">

	function countdown(){
		var now = new Date();
		var eventDate = new Date(2020, 2, 20);

		var currentTiime = now.getTime();
		var eventTime = eventDate.getTime();

		var remTime = eventTime - currentTiime;

		var s = Math.floor(remTime / 1000);
		var m = Math.floor(s / 60);
		var h = Math.floor(m / 60);
		var d = Math.floor(h / 24);

		h %= 24;
		m %= 60;
		s %= 60;

		h = (h < 10) ? "0" + h : h;
		m = (m < 10) ? "0" + m : m;
		s = (s < 10) ? "0" + s : s;

		document.getElementById("days").textContent = d;
		document.getElementById("days").innerText = d;

		document.getElementById("hours").textContent = h;
		document.getElementById("minutes").textContent = m;
		document.getElementById("seconds").textContent = s;

		setTimeout(countdown, 1000);
	}

	countdown();
</script>

<?php
get_footer();
