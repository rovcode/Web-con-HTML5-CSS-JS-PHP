<?php include_once 'View/snippets/head.php';?>
<body> 

<div class="super_container">
	
<?php  include_once 'View/snippets/menuv2.php';?>
	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(Public/asset/v2/images/01.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Hoy</div>
							<div class="home_slider_title">Nuevos diseños</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(Public/asset/v2/images/02.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Sevicios</div>
							<div class="home_slider_title">Ropa al po mayor</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(Public/asset/v2/images/03.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promociones</div>
							<div class="home_slider_title">Promos navideñas</div>
						</div>	
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav -->

			<div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.<div></div></li>
									<li class="home_slider_custom_dot">02.<div></div></li>
									<li class="home_slider_custom_dot">03.<div></div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>

	<!-- Promo -->

	<div class="promo">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">Nuevos</div>
						<div class="section_title">Productos recientes</div>
					</div>
				</div>
			</div>
			<div class="row promo_container">

				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="Public/asset/v2/images/promo_1.jpg" alt="">
							<div class="promo_content promo_content_1">
								<div class="promo_title">-30% </div>
								<div class="promo_subtitle">tops</div>
							</div>
						</div>
						<div class="promo_link"><a href="#">Comprar</a></div>
					</div>
				</div>

				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="Public/asset/v2/images/promo_2.jpg" alt="">
							<div class="promo_content promo_content_2">
								<div class="promo_title">-30% </div>
								<div class="promo_subtitle">Chompas</div>
							</div>
						</div>
						<div class="promo_link"><a href="#">Comprar</a></div>
					</div>
				</div>

				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="Public/asset/v2/images/promo_3.jpg" alt="">
							<div class="promo_content promo_content_3">
								<div class="promo_title">-25%f</div>
								<div class="promo_subtitle">Pantalones</div>
							</div>
						</div>
						<div class="promo_link"><a href="#">Comprar</a></div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<!-- Extra -->

	<div class="extra clearfix mt-5 mb-2">
		<div class="extra_promo extra_promo_1">
			<div class="extra_promo_image" style="background-image:url(Public/asset/v2/images/extra_1.jpg)"></div>
			<div class="extra_1_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="extra_1_price">30%<span></span></div>
				<div class="extra_1_title">Descuentos</div>
				<div class="extra_1_text">*Somos una tienda online, con la mejor moda para ti..</div>
				<div class="button extra_1_button"><a href="<?php $Config->getRoute("registro.php");?>">Ver</a></div>
			</div>
		</div>
		<div class="extra_promo extra_promo_2">
			<div class="extra_promo_image" style="background-image:url(Public/asset/v2/images/extra_2.jpg)"></div>
			<div class="extra_2_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="extra_2_title">
					<div class="extra_2_center">&</div>
					<div class="extra_2_top">Magenta</div>
					<div class="extra_2_bottom">Satyle</div>
				</div>
				<div class="extra_2_text">*Somos una tienda online, con la mejor moda para ti.</div>
				<div class="button extra_2_button"><a href="<?php $Config->getRoute("registro.php");?>">Ver</a></div>
			</div>
		</div>
	</div>


	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_content">
			<div class="newsletter_image" style="background-image:url(Public/asset/v2/images/newsletter.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<div class="section_subtitle">Para ti</div>
							<div class="section_title">Registrate y recibe un 20% de descuento</div>
							<div class="button gallery_button"><a href="<?php $Config->getRoute("registro.php");?>">Registrarme</a></div>
						</div>
					</div>
				</div>
				<!-- <div class="row newsletter_container">
					<div class="col-lg-10 offset-lg-1">
						<div class="newsletter_form_container">
							<form action="#">
								<input type="email" class="newsletter_input" required="required" placeholder="E-mail here">
								
							</form>
						</div>
						<div class="newsletter_text">Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec. Fusce vel lorem libero. Integer ex mi, facilisis sed nisi ut, vestib ulum ultrices nulla. Aliquam egestas tempor leo.</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>

	<!-- Footer -->

<?php  include_once 'View/snippets/footer.php'; ?>