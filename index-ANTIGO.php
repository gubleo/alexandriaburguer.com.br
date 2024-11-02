<!DOCTYPE html>
<html>

<head>
	<!-- Google Tag Manager -->
	<script>(function (w, d, s, l, i) {
			w[l] = w[l] || []; w[l].push({
				'gtm.start':
					new Date().getTime(), event: 'gtm.js'
			}); var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
					'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-TWDC43L');</script>
	<!-- End Google Tag Manager -->
	<meta charset="UTF-8">
	<title>AlexandriA Burger</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link rel="apple-touch-icon" href="img/favicon.png" />
	<link rel="apple-touch-icon-precomposed" href="img/favicon.png" />

	<!-- FONTES -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fontes/gobold/gobold.css">
	<link rel="stylesheet" type="text/css" href="fontes/axiforma-book/stylesheet.css">
	<!-- FONTES -->

	<!-- LIBS AND CSS -->
	<link rel="stylesheet" type="text/css" href="frameworks/css/bootstrap-utilities.min.css">
	<link rel="stylesheet" type="text/css" href="frameworks/css/grid.css">
	<link rel="stylesheet" type="text/css" href="frameworks/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="frameworks/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="frameworks/lightbox/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<meta name="google-site-verification" content="FPRzMK6TkZHdzx4904e5z6hQe94IPw39-0wgyW7MX70" />
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWDC43L" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<section class="banner">
		<div class="row">
			<!-- CHAMADA -->
			<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
				<div class="logo">
					<img src="img/logo.png" alt="">
				</div>

				<div class="chamada">
					<h1>empreenda com a melhor <br>franquia de rodízio</h1>
					<!--<h2>de mini smash burger</h2>-->
					<h2>de smash burger</h2>

					<!-- <h4>fature<span class="item"></span> </h4> -->
					<h4>fature até</h4>
					<h3>5.2 milhões <span class="ano"><span class="item"></span>ao ano </span></h3>
					<!-- <h3>2.4 milhões <span class="ano"><span class="item"></span>ao ano </span></h3> -->
				</div>

				<div class="hamburgers">
					<img src="img/hamburguers2.png" alt="">
				</div>
			</div>

			<!-- FORMULÁRIO -->
			<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
				<div class="formulario" id="formulario">
					<div class="titulo-form">
						<!-- <h2>invista a partir de</h2>
						<h1>R$ 169 mil</h1>
						<h2>e seja franqueado</h2> -->

						<h2>preencha e seja um</h2>
						<h1>franqueado</h1>
						<h2>de sucesso!</h2>
					</div>

					<form id="form" name="formulario" class="form" action="form/send_email.php" method="post">
						<div class="campos">
							<input type="hidden" class="utmmedium" name="utmmedium" value="">
							<input type="hidden" class="utmcampaign" name="utmcampaign" value="">
							<input type="hidden" class="utmcontent" name="utmcontent" value="">
							<input type="hidden" class="utmcrm" name="utmcrm" value="">

							<div class="">
								<label for="nome" class="form-label">Nome:</label>
								<input type="text" class="form-control" id="nome" name="nome" required>
							</div>

							<div class="mt-3">
								<label for="email" class="form-label">E-mail:</label>
								<input type="email" class="form-control" id="email" name="email" required>
							</div>

							<div class="mt-3">
								<label for="telefone" class="form-label">Telefone:</label>
								<input type="text" class="form-control" id="telefone" name="telefone" required
									maxlength="15">
							</div>

							<div class="mt-3">
								<label for="capital" class="form-label">O Capital de Investimento é a partir de R$ 500 mil:</label>
								<select class="form-control" id="capital" name="capital" required>
									<option value="" selected disabled hidden>
										Selecione
									</option>
									<!-- <option value="Até R$100 mil">Até R$100 mil</option> -->
									<option value="De R$100 mil a R$150 mil">Possuo R$ 500 mil</option>
									<option value="De R$150 mil a R$200 mil">Possou Acima de R$ 500 mil</option>
									<option value="De R$200 mil a R$300 mil">Não Possuo R$ 500 mil</option>
									<!-- <option value="Acima de R$300 mil">Acima de R$300 mil</option> -->
								</select>
							</div>
						</div>

						<div class="bt-section">
							<button type="submit" class="btn-form" id="btn-form">receber uma apresentação</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="cta orange">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 d-flex justify-content-center">
			<div>
				<h1>invista agora na <span>alexandria burger</span>
					<img class="arrows" src="img/next-arrow.png" alt="">
				</h1>
			</div>
		</div>
	</section>

	<section class="mercado">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			<div class="titulo">
				<h1>o mercado</h1>
				<h2>o mercado</h2>
				<p>
					O mercado de alimentação cresce cerca de 10% todos os anos. <br>
					Se compararmos com o crescimento do PIB, a alimentação <br>
					cresce 3 e até 4 vezes mais.
				</p>
			</div>

			<div class="itens">
				<div class="item">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<div class="pt01">
								<img src="icones/cifrao.svg" alt="">
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<div class="pt02">
								<h1>01</h1>
							</div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
							<div class="pt03">
								<p>
									O faturamento de franchising atingiu R$163,319 bilhões em 2017. Tornando o Brasil um
									dos líderes mundiais em franchising.
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<div class="pt01">
								<img src="icones/trend.svg" alt="">
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<div class="pt02">
								<h1>02</h1>
							</div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
							<div class="pt03">
								<p>
									O segmento de Alimentação cresce cerca de 10% todos os anos. Se compararmos ao PIB,
									cresce 3 e até 4 vezes mais.
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<div class="pt01">
								<img src="icones/burger.svg" alt="">
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<div class="pt02">
								<h1>03</h1>
							</div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
							<div class="pt03">
								<p>
									Hamburguerias representam pouco mais de 50% do faturamento das redes de fast-food –
									estimado em mais de R$ 22 bilhões em 2014.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="modelos">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			<div class="titulo">
				<h1>modelos</h1>
				<h2>modelo de negócio</h2>
			</div>

			<!-- <div class="item">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="imagem">
							<img src="img/imgmodelo.jpg" alt="">
							<span>01</span>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 d-flex align-items-center">
						<div class="texto">
							<h1>modelo</h1>
							<h2>loja de rua</h2>

							<p>Investimento de R$ 169 mil</p>
							<p>Payback de 8 a 12 meses</p>
							<p>Lucratividade de 15 a 20%</p>
							<p>Prazo de abertura de 60 a 90 dias, após <br> a escolha do ponto</p>
						</div>
					</div>
				</div>
			</div> -->

			<div class="item">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="imagem">
							<img src="img/imgmodelo-snall.jpg" alt="">
							<span>01</span>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 d-flex align-items-center">
						<div class="texto">
							<h1>modelo</h1>
							<h2>small</h2>

							<!-- <p>Investimento de R$ 169 mil</p> -->
							<p>Indicação de cidades até 100k habitantes</p>
							<p>Faturamento: 1,4 a 2,4 milhões ano (120 a 200 mil/ mês)</p>
							<p>Lojas: até 180m2ª - em torno de 80 lugares</p>
							<p>A partir R$ 249 mil reais.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="imagem">
							<img src="img/imgmodelo-full.jpg" alt="">
							<span>02</span>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 d-flex align-items-center">
						<div class="texto">
							<h1>modelo</h1>
							<h2>full</h2>

							<!-- <p>Investimento de R$ 169 mil</p> -->
							<p>Indicação de cidades acima 150k habitantes</p>
							<p>Faturamento: 2,4 a 5,2 milhões ano (200 a 440 mil/ mês)</p>
							<p>Lojas: acima 250m2ª - entre 100 a 160 lugares</p>
							<p>A partir de R$ 349 mil reais.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="video">
		<!-- <div class="youtube" data-embed="PmqXdlfwd-s"> -->
		<div class="youtube" data-embed="9iIPs_uhNHw">
			<div class="play-button">
				<img src="icones/play-button.svg" />
			</div>
		</div>
	</section>

	<section class="cta white">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 d-flex justify-content-center">
			<div>
				<h1>quero ser agora um franqueado</span><img class="arrows" src="img/next-arrow.png" alt="">
				</h1>
			</div>
		</div>
	</section>

	<section class="vantagens">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			<div class="titulo">
				<h1>diferenciais</h1>
				<h2>porque investir?</h2>
			</div>

			<div class="itens">
				<div class="row">

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="item">
							<div class="row">
								<div
									class="col-lg-3 col-md-3 col-sm-3 col-xs-12 d-flex align-items-center justify-content-center">
									<div class="imagem">
										<img src="icones/arquiteto.svg" alt="">
									</div>
								</div>
								<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 d-flex align-items-center">
									<div class="texto">
										<p>
											Acompanhamento <br>
											exclusivo na montagem <br>
											da unidade
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="item">
							<div class="row">
								<div
									class="col-lg-3 col-md-3 col-sm-3 col-xs-12 d-flex align-items-center justify-content-center">
									<div class="imagem">
										<img src="icones/pin-de-localizacao.svg" alt="">
									</div>
								</div>
								<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 d-flex align-items-center">
									<div class="texto">
										<p>
											Análise e auxílio na <br>
											escolha do ponto <br>
											comercial
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="item">
							<div class="row">
								<div
									class="col-lg-3 col-md-3 col-sm-3 col-xs-12 d-flex align-items-center justify-content-center">
									<div class="imagem">
										<img src="icones/desenvolve.svg" alt="">
									</div>
								</div>
								<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 d-flex align-items-center">
									<div class="texto">
										<p>
											Sofware de venda <br>
											que reduz a necessidade <br>
											de mão de obra
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="item">
							<div class="row">
								<div
									class="col-lg-3 col-md-3 col-sm-3 col-xs-12 d-flex align-items-center justify-content-center">
									<div class="imagem">
										<img src="icones/processo-de-trabalho.svg" alt="">
									</div>
								</div>
								<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 d-flex align-items-center">
									<div class="texto">
										<p>
											Modelo de negócio <br>
											com fácil implantação <br>
											e gestão
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="item">
							<div class="row">
								<div
									class="col-lg-3 col-md-3 col-sm-3 col-xs-12 d-flex align-items-center justify-content-center">
									<div class="imagem">
										<img src="icones/propaganda.svg" alt="">
									</div>
								</div>
								<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 d-flex align-items-center">
									<div class="texto">
										<p>
											Fundo de propaganda <br>
											revertido exclusivamente <br>
											para o franqueado
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="item">
							<div class="row">
								<div
									class="col-lg-3 col-md-3 col-sm-3 col-xs-12 d-flex align-items-center justify-content-center">
									<div class="imagem">
										<img src="icones/marca-comercial.svg" alt="">
									</div>
								</div>
								<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 d-flex align-items-center">
									<div class="texto">
										<p>
											Direito de <br>
											marca registrada
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="item">
							<div class="row">
								<div
									class="col-lg-3 col-md-3 col-sm-3 col-xs-12 d-flex align-items-center justify-content-center">
									<div class="imagem">
										<img src="icones/aprovado.svg" alt="">
									</div>
								</div>
								<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 d-flex align-items-center">
									<div class="texto">
										<p>
											Modelo de negócio <br>
											testado e aprovado <br>
											com excelência
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="item">
							<div class="row">
								<div
									class="col-lg-3 col-md-3 col-sm-3 col-xs-12 d-flex align-items-center justify-content-center">
									<div class="imagem">
										<img src="icones/chefe-de-cozinha.svg" alt="">
									</div>
								</div>
								<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 d-flex align-items-center">
									<div class="texto">
										<p>
											Cozinha Central <br>
											para melhor logística <br>
											de compras
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="item">
							<div class="row">
								<div
									class="col-lg-3 col-md-3 col-sm-3 col-xs-12 d-flex align-items-center justify-content-center">
									<div class="imagem">
										<img src="icones/retorno-do-investimento.svg" alt="">
									</div>
								</div>
								<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 d-flex align-items-center">
									<div class="texto">
										<p>
											Baixo investimento <br>
											com alta <br>
											lucratividade
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="item">
							<div class="row">
								<div
									class="col-lg-3 col-md-3 col-sm-3 col-xs-12 d-flex align-items-center justify-content-center">
									<div class="imagem">
										<img src="icones/franquia.svg" alt="">
									</div>
								</div>
								<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 d-flex align-items-center">
									<div class="texto">
										<p>
											Possibilidade de <br>
											se tornar um <br>
											multifranqueado
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="hamburgers">
				<img src="img/hamburgers-vantagens.png" alt="">
			</div>
		</div>
	</section>

	<div class="galeria">
		<div class="imagem">
			<img src="img/blumenau_1.jpg" alt="">
		</div>
		<div class="imagem">
			<img src="img/santafelicidade-1.jpg" alt="">
		</div>
		<div class="imagem">
			<img src="img/altoboq-1.jpg" alt="">
		</div>
		<div class="imagem">
			<img src="img/pinhais-1.jpg" alt="">
		</div>
		<div class="imagem">
			<img src="img/blumenau_2.jpg" alt="">
		</div>
		<div class="imagem">
			<img src="img/santafelicidade-2.jpg" alt="">
		</div>
		<div class="imagem">
			<img src="img/altoboq-2.jpg" alt="">
		</div>
		<div class="imagem">
			<img src="img/pinhais-2.jpg" alt="">
		</div>
	</div>

	<section class="depoimentos">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			<div class="titulo">
				<h1>depoimentos</h1>
				<h2>depoimentos</h2>
			</div>

			<div class="galeria-dep">
				<div class="item">
					<div class="imagem">
						<span>"</span>
						<div class="img"></div>
					</div>

					<div class="texto">
						<h1>unidade são josé dos pinhais.</h1>
						<p>
							Decidimos investir na AlexandriA Burger após uma visita a unidade piloto em Blumenau.
							Notamos que o negócio era um sucesso, e realmente é.
							Participamos da inauguração de Joinville e aí mesmo que a certeza de investimento na rede se
							concretizou.
							A franquia preza muito por qualidade no produto entregue ao cliente, além de ter um suporte
							ao franqueado incrível.
							Desde nossa decisão no ingresso da rede, até o apoio na escolha do ponto e sua implantação,
							além de acompanhamento em todo o processo pós abertura tem sido incrível.
							Recomendo a quem procura um investimento com ótimo retorno se tornar um franqueado da
							AlexandriA Burger assim como nós.
							Em São José dos Pinhas a AlexandriA Burger é um sucesso! <span>"</span>
						</p>
					</div>
				</div>

				<div class="item">
					<div class="imagem">
						<span>"</span>
						<div class="img"></div>
					</div>

					<div class="texto">
						<h1>unidade blumenau</h1>
						<p>
							Somos a unidade piloto deste projeto incrível. Iniciamos com muito amor e hoje a AlexandriA
							tem um espaço especial em nossos corações. Ter visto em tão pouco tempo a marca ter este
							avanço nos deixa cada vez mais certos de que este modelo de negócio já é
							sucesso.<span>"</span>
						</p>
					</div>
				</div>

				<div class="item">
					<div class="imagem">
						<span>"</span>
						<div class="img"></div>
					</div>

					<div class="texto">
						<h1>unidade joinville</h1>
						<p>
							Já tínhamos experiência na área da alimentação, inclusive como franqueados. Apostamos na
							Alexandria Burger e todas as nossas expectativas foram alcançadas.
							Estamos tendo um ótimo retorno de nosso investimento, inclusive antes do que programado.
							A AlexandriA Burger em Joinville já é um sucesso.<span>"</span>
						</p>
					</div>
				</div>

				<div class="item">
					<div class="imagem">
						<span>"</span>
						<div class="img"></div>
					</div>

					<div class="texto">
						<h1>unidade curitiba- alto da xv</h1>
						<p>
							Vimos uma ótima oportunidade de investimento quando a franquia da AlexandriA Burger foi
							apresentada a nossa equipe.
							Temos um ótimo feeling pra negócios voltados ao ramo da alimentação e vimos ali um sucesso
							exponencial.
							Nossas expectativas foram superadas e nossos investimentos na rede não param por aqui. Logo
							nos tornaremos multi-franqueados dessa hamburgueria que aqui em Curitiba já é um
							sucesso.<span>"</span>
						</p>
					</div>
				</div>

				<div class="item">
					<div class="imagem">
						<span>"</span>
						<div class="img"></div>
					</div>

					<div class="texto">
						<h1>unidade itajaí</h1>
						<p>
							Somos com muito orgulho a quinta unidade da rede da AlexandriA Burger.
							Inclusive faço através do meu escritório particular toda a contabilidade da rede e o
							crescimento e proporções que a marca tem tomado me fez querer apostar nesse modelo de
							negócios.
							Já possuía um restaurante e a escolha da troca de placa para implantação de mais uma unidade
							da AlexandriA Burger foi se concretizando a cada dia após a formatação da rede em modelo de
							franquia.
							Se existe algo hoje que eu indico a quem procura se tornar um empreendedor é se unir a esta
							franquia, pois seu sucesso é garantido.
							Em Itajaí a AlexandriA Burger também está presente e já é um sucesso.<span>"</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="cta orange">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 d-flex justify-content-center">
			<div>
				<h1>invista agora na alexandria burger
					<img class="arrows" src="img/next-arrow.png" alt="">
				</h1>
			</div>
		</div>
	</section>

	<section class="ondeestamos">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			<h1>onde<br><span>estamos</span></h1>
			<div class="d-flex justify-content-center">
				<img src="img/mapa.png" alt="">
			</div>
		</div>
	</section>

	<section class="quemsomos">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			<div class="item">
				<div class="row">
					<div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
						<img src="img/img-quemsomos.png" alt="">
					</div>

					<div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
						<div class="texto">
							<h1>quem somos</h1>

							<p>
								A AlexandriA é um projeto que iniciou como um adicional a Barbearia do idealizador da
								marca, Alex Remualdo. Em pouco tempo o negócio que foi pensado para agregar valor ao
								objetivo principal, no caso a barbearia, acabou tomando proporções inimagináveis. Sua
								ideia deu tão certo que as pessoas vinham de cidades distantes para experimentar o tão
								famoso rodízio de mini Smash Burger da AlexandriA.
							</p>

							<p>
								Então, em conversa informal com seu atual Sócio, Carlos Eduardo, que já dominava o
								mercado de franquia, também no ramo alimentício, a ideia de transformar em franquia a
								AlexandriA Burger foi amadurecendo. Em um período muito curto de tempo, a formatação
								aconteceu e no primeiro mês a venda de 3 unidades já mostrou como o negócio é inovador e
								atrativo. No segundo mês, o fechamento de mais 2 unidades vem acelerando
								exponencialmente o crescimento e fazendo a marca presente em 2 estados, Santa Catarina e
								Paraná.
							</p>

							<p>
								O crescimento não para de acontecer e acreditamos que logo estaremos presentes em todo o
								país. Venha você também fazer parte deste sucesso, levando a AlexandriA para sua cidade!
							</p>

							<div class="d-flex justify-content-center">
								<a href="#formulario">quero ser franqueado</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section class="barra-fixa">
		<div class="row">
			<div class="col-xs-12">
				<span>Ficou interessado? Saiba mais agora mesmo!</span>
			</div>

			<div class="col-xs-12">
				<a href="#formulario" class="btn-barra">Quero receber a apresentação</a>
			</div>
		</div>
	</section>

	<footer class="footer">
		AlexandriA Burger © <span id="ano"></span> - Todos os direitos reservados | <a href="https://agenciad3b.com.br/"
			target="_blank">D3B MARKETING DIGITAL</a>
	</footer>

	<!-- LIBS VUE AND JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
	<script src="frameworks/jquery/jquery-3.5.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
		integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
		crossorigin="anonymous"></script>
	<script src="frameworks/bootstrap5/js/bootstrap.min.js"></script>
	<script src="frameworks/slick/slick.min.js"></script>
	<script src="frameworks/fontawesome/js/all.min.js"></script>
	<script src="frameworks/lightbox/js/lightbox.min.js"></script>
	<script src="js/app.js"></script>
</body>

</html>