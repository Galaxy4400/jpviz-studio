<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@vite(['resources/scss/style.scss', 'resources/js/app.js'])

</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__container _container">
				<div class="header__body">
					<div class="header__column header__column_left">
						<div class="main-menu" data-menu="main-menu">
							<div class="main-menu__body" data-menu-container="main-menu">
								<nav class="main-menu main-menu_left">
									<ul class="main-menu__list">
										<li class="main-menu__item"><a class="main-menu__link" href="#">Projects</a></li>
										<li class="main-menu__item"><a class="main-menu__link" href="#">About</a></li>
										<li class="main-menu__item"><a class="main-menu__link" href="#">Shop</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<div class="header__column header__column_center">
						<a class="header__logo logo" href="#" data-adapt="header__column_left,767">
							<div class="logo__icon _icon-logo"></div>
							<div class="logo__text">JP Visualisation Studio</div>
						</a>
					</div>
					<div class="header__column header__column_right">
						<div class="header__actions">
							<a class="header__action header-cart _icon-cart" href="#"></a>
							<a class="header__action header-user _icon-user" href="#"></a>
							<button class="header__action menu-icon" data-menu-icon="main-menu"></button>
						</div>
						<nav class="main-menu main-menu_right" data-adapt="main-menu__body,1150">
							<ul class="main-menu__list">
								<li class="main-menu__item"><a class="main-menu__link" href="#">visualization</a></li>
								<li class="main-menu__item"><a class="main-menu__link" href="#">DESIGN</a></li>
								<li class="main-menu__item"><a class="main-menu__link" href="#">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<main class="page">

			<section class="page__header">
				<h1 class="_semantic-hidden">JP Visualisation Studio</h1>
				<div class="main-slider" data-swiper>
					<div class="main-slider__slides">
						<div class="main-slider__slide main-slider-slide">
							<div class="main-slider-slide__container _container">
								<div class="main-slider-slide__content">
									<h2 class="main-slider-slide__title h1">Description</h2>
									<p class="main-slider-slide__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam quam nulla porttitor massa. Amet nulla facilisi morbi tempus iaculis.</p>
									<a class="form__btn btn btn_arrow" href="#">Learn more</a>
								</div>
								<div class="main-slider-slide__bg _ibg">
									<img src="assets/img/slide.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="main-slider__slide main-slider-slide">
							<div class="main-slider-slide__container _container">
								<div class="main-slider-slide__content">
									<h2 class="main-slider-slide__title h1">Description</h2>
									<p class="main-slider-slide__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam quam nulla porttitor massa. Amet nulla facilisi morbi tempus iaculis.</p>
									<a class="form__btn btn btn_arrow" href="#">Learn more</a>
								</div>
								<div class="main-slider-slide__bg _ibg">
									<img src="https://img2.akspic.ru/attachments/crops/2/5/2/8/98252/98252-gornyj_relef-duh_ostrova-prirodnyj_zapovednik-pejzazhi_gor-ozero-2560x1440.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="main-slider__arrows main-slider-arrows">
						<div class="main-slider-arrows__container _container">
							<div class="main-slider-arrows__arrows">
								<button class="main-slider-arrows__arrow main-slider-arrows__arrow_prev _icon-arrow"></button>
								<button class="main-slider-arrows__arrow main-slider-arrows__arrow_next _icon-arrow"></button>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="page__projects">
				<header class="section-header">
					<div class="section-header__container _container">
						<div class="section-header__body">
							<div class="section-header__column section-header__column_left"></div>
							<div class="section-header__column section-header__column_center">
								<div class="section-header__title title-block">
									<h2 class="title-block__title">Projects</h2>
								</div>
							</div>
							<div class="section-header__column section-header__column_right">
								<a class="section-header__link link-more" href="#">All projects</a>
							</div>
						</div>
					</div>
				</header>
				<div class="projects">
					<div class="projects__container _container-max">
						<div class="projects__body">
							<a class="projects__item project-card" href="#">
								<div class="project-card__content">
									<h4 class="project-card__title">Project name 2</h4>
								</div>
								<figure class="project-card__bg _ibg">
									<img src="assets/img/p3.jpg" alt="">
								</figure>
							</a>
							<a class="projects__item project-card" href="#">
								<div class="project-card__content">
									<h4 class="project-card__title">Project name 2</h4>
								</div>
								<figure class="project-card__bg _ibg">
									<img src="assets/img/p1.jpg" alt="">
								</figure>
							</a>
							<a class="projects__item project-card" href="#">
								<div class="project-card__content">
									<h4 class="project-card__title">Project name 2</h4>
								</div>
								<figure class="project-card__bg _ibg">
									<img src="assets/img/p1.jpg" alt="">
								</figure>
							</a>
							<a class="projects__item project-card" href="#">
								<div class="project-card__content">
									<h4 class="project-card__title">Project name 2</h4>
								</div>
								<figure class="project-card__bg _ibg">
									<img src="assets/img/p3.jpg" alt="">
								</figure>
							</a>
						</div>
					</div>
				</div>
			</section>

			<section class="page__shop">
				<header class="section-header">
					<div class="section-header__container _container">
						<div class="section-header__body">
							<div class="section-header__column section-header__column_left"></div>
							<div class="section-header__column section-header__column_center">
								<div class="section-header__title title-block">
									<h2 class="title-block__title">Shop</h2>
								</div>
							</div>
							<div class="section-header__column section-header__column_right">
							</div>
						</div>
					</div>
				</header>
				<div class="page__container _container">
					<div class="shop-categpries">
						<div class="shop-categpries__body">
							<a class="shop-categpries__item shop-category" href="#">
								<div class="shop-category__content">
									<h5 class="shop-category__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h5>
								</div>
								<figure class="shop-category__bg _ibg">
									<img src="assets/img/p3.jpg" alt="">
								</figure>
							</a>
							<a class="shop-categpries__item shop-category" href="#">
								<div class="shop-category__content">
									<h5 class="shop-category__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h5>
								</div>
								<figure class="shop-category__bg _ibg">
									<img src="assets/img/p1.jpg" alt="">
								</figure>
							</a>
							<a class="shop-categpries__item shop-category" href="#">
								<div class="shop-category__content">
									<h5 class="shop-category__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h5>
								</div>
								<figure class="shop-category__bg _ibg">
									<img src="assets/img/p1.jpg" alt="">
								</figure>
							</a>
							<a class="shop-categpries__item shop-category" href="#">
								<div class="shop-category__content">
									<h5 class="shop-category__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h5>
								</div>
								<figure class="shop-category__bg _ibg">
									<img src="assets/img/p3.jpg" alt="">
								</figure>
							</a>
							<a class="shop-categpries__item shop-category" href="#">
								<div class="shop-category__content">
									<h5 class="shop-category__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h5>
								</div>
								<figure class="shop-category__bg _ibg">
									<img src="assets/img/p3.jpg" alt="">
								</figure>
							</a>
						</div>
					</div>
				</div>

			</section>

			<section class="page__form">
				<header class="section-header">
					<div class="section-header__container _container">
						<div class="section-header__body">
							<div class="section-header__column section-header__column_left"></div>
							<div class="section-header__column section-header__column_center">
								<div class="section-header__title title-block">
									<h2 class="title-block__title">Feedback</h2>
									<div class="title-block__label">Leave a request for a free consultation</div>
								</div>
							</div>
							<div class="section-header__column section-header__column_right">
							</div>
						</div>
					</div>
				</header>
				<div class="page__container _container">
					<form class="form form_feedback" name="feedback" action="./" method="post" data-form data-autocomplete-off>
						<div class="form__section">
							<div class="form__row">
								<div class="form__column">
									<input class="form__input input" type="email" name="Email" required placeholder="Email">
								</div>
								<div class="form__column">
									<input class="form__input input" type="tel" name="Phone" required placeholder="Phone" data-mask="+7 (999) 999-9999" data-mask-placeholder="_" data-mask-between="2">
								</div>
								<div class="form__column">
									<input class="form__input input" type="text" name="Name" required placeholder="Name" data-min="3">
								</div>
								<div class="form__column">
									<textarea class="form__input input" name="Message" required placeholder="Your question"></textarea>
								</div>
							</div>
						</div>
						<div class="form__actions">
							<button class="form__btn btn btn_long" type="submit">Send</button>
						</div>
					</form>
				</div>
			</section>

		</main>

		<footer class="footer">
			<div class="footer__container _container">
				<div class="footer__body">
					<div class="footer__column footer__column_about">
						<h3 class="footer__title">About us</h3>
						<div class="footer__text">JP Visualisation Studio is a studio of author's interior design of residential premises. Our interiors are made with love! Feel the comfort and functionality of every square meter.</div>
						<div class="footer__socials">
							<a class="social _icon-vk" href=""></a>
							<a class="social _icon-tg" href=""></a>
							<a class="social _icon-pntr" href=""></a>
							<a class="social _icon-yt" href=""></a>
						</div>
					</div>
					<div class="footer__column footer__column_sections">
						<h3 class="footer__title">All sections</h3>
							<nav class="footer-menu">
								<ul class="footer-menu__list">
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">HOME</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">PROJECTS</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">ABOUT</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">VISUALIZATION</a></li>
								</ul>
								<ul class="footer-menu__list">
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">DESIGN</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">SHOP</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">CONTACT</a></li>
								</ul>
							</nav>
					</div>
					<div class="footer__column footer__column_contact">
						<h3 class="footer__title">Contact</h3>
						<div class="footer__contacts">
							<div class="contact">
								<div class="contact__icon _icon-phone"></div>
								<a class="contact__contact" href="tel:+79999999999">+7 (999) 999-99-99</a>
							</div>
							<div class="contact">
								<div class="contact__icon _icon-env"></div>
								<a class="contact__contact" href="mailto:info@info.ru">info@info.ru</a>
							</div>
							<div class="contact">
								<div class="contact__icon _icon-mark"></div>
								<div class="contact__contact">Moscow area, Dubna, Entuziastov street, 19</div>
							</div>
						</div>
						<div class="footer__copy">© JP Visualisation Studio</div>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<button class="move-up" type="button" data-move-up data-goto="wrapper" data-fix-m></button>

</body>

</html>