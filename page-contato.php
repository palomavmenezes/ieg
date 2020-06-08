<?php get_header(); ?>
<!-- !!!!! ============ AQUI COMEÇA O CONTEÚDO DA PÁGINA ============ !!!! -->

<main id="page-contato">

	<!-- ============ BANNER ============= -->
  	<section id="bg-contato">
		<div class="container-fluid">
			<div class="row b-home-slides">
				<div class="col-md-12">
					<h1>Contato</h1>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ FORM ============= -->
	<section id="banner-contato">
		<div class="container">
			<div class="row">
				<div class="col-md-5 padding-left-contact">
						<div class="txt-contato">
							<h2>Fale Conosco!</h2>
							<p><strong>Você tem alguma dúvida ou quer entender melhor sobre nossas soluções?</strong> Entre em contato pelo formulário e será um prazer te ajudar.</p>
						</div>
				</div>

				<div class="col-md-6">
					<div class="row">
						    <div class="col-md-12 contact">
						        <div class="row">
						          <div class="col-md-6 input-icons">
						            <i class="fa fa-user icon name"></i>
						            <input class="form-control form-ieg" id="nome" type="text" placeholder="Nome">
						          </div>

						          <div class="col-md-6 input-icons">
						            <i class="fa fa-user icon"></i>
						            <input class="form-control form-ieg" id="cargo" type="text" placeholder="Cargo">
						          </div>

						         <div class="col-md-6 input-icons">
						            <i class="fa fa-building icon"></i>
						            <input class="form-control form-ieg" id="empresa" type="text" placeholder="Empresa">
						          </div>

						          <div class="col-md-6 input-icons">
						            <i class="fa fa-envelope icon"></i>
						            <input class="form-control form-ieg" id="email" type="email" placeholder="Email">
						          </div>
						        </div>
						    </div>

						     <div class="col-md-12 contact">
						        <div class="row"><div class="col-md-6 input-icons">
						            <i class="fa fa-phone icon"></i>
						            <input class="form-control form-ieg" id="telefone" type="text" placeholder="Telefone">
						          </div>

						          <div class="col-md-6 input-icons">
						            <i class="fa fa-check-circle icon"></i>
						            <select class="form-control form-ieg" id="exampleFormControlSelect1" value="Área de Interesse">
						            	<option>Escola de Negócios</option>
									    <option>Pesquisa e Consultoria</option>
									    <option>Estudos de Benchmarking</option>
									    <option>Eventos</option>
						            </select>
						          </div>
						        </div>
						    </div>

						    <div class="col-md-12 contact">
						        <div class="row">
						           <div class="col-md-12 input-icons">
						            <i class="fa fa-comment icon message"></i>
						            <textarea class="form-control form-ieg" id="mensagem" type="textarea" rows="9" placeholder="Mensagem"></textarea>
						          </div>
						        </div>
						      </div>

						      <div class="col-md-12 btn-send">
						        <button type="button" class="btn btn-light btn-blue">Enviar</button>
						    </div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ END FORM ============= -->

	<section id="info-contacts">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h6>Escola</h6>
					<p>(21) 3173-0107 / (21) 2223-1528 / (21) 2223-2895 Escola de Negócios: cursos@ieg.com.br Desenvolvimento de pessoas: contato@ieg.com.br</p>
				</div>

				<div class="col-md-4">
					<h6>Pesquisa e Consultoria</h6>
					<p>(21) 2431-2930 / (21) 2431-2544 Pesquisa: pesquisascsc@ieg.com.br Consultoria: projetos@ieg.com.br</p>
				</div>

				<div class="col-md-4">
					<h6>Eventos e Treinamentos</h6>
					<p>(21) 2431-2930 / (21) 2431-2544 Pesquisa: pesquisascsc@ieg.com.br Consultoria: projetos@ieg.com.br</p>
				</div>
			</div>
		</div>
	</section>


	<section id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.8582086570705!2d-43.19186798503339!3d-22.95544848498708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997fe15a64d2d7%3A0x52907d33d368dc8b!2sR.%20Mena%20Barreto%2C%20120%20-%20Botafogo%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2022271-100!5e0!3m2!1spt-BR!2sbr!4v1580139739830!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</section>

</main>

<?php
get_footer();
