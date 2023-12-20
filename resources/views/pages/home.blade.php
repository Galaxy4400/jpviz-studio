@extends('layouts.main')

@section('content')
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
							<img src="https://w.forfun.com/fetch/ec/ec0bd4610aa1a04d3fc7a476fcc5f00e.jpeg" alt="">
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
							<img src="{{ Vite::image('slide.jpg') }}" alt="">
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
							<h4 class="project-card__title">Project name 1</h4>
						</div>
						<figure class="project-card__bg _ibg">
							<img src="{{ Vite::image('p1.jpg') }}" alt="">
						</figure>
					</a>
					<a class="projects__item project-card" href="#">
						<div class="project-card__content">
							<h4 class="project-card__title">Project name 2</h4>
						</div>
						<figure class="project-card__bg _ibg">
							<img src="{{ Vite::image('p3.jpg') }}" alt="">
						</figure>
					</a>
					<a class="projects__item project-card" href="#">
						<div class="project-card__content">
							<h4 class="project-card__title">Project name 3</h4>
						</div>
						<figure class="project-card__bg _ibg">
							<img src="{{ Vite::image('p3.jpg') }}" alt="">
						</figure>
					</a>
					<a class="projects__item project-card" href="#">
						<div class="project-card__content">
							<h4 class="project-card__title">Project name 4</h4>
						</div>
						<figure class="project-card__bg _ibg">
							<img src="{{ Vite::image('p1.jpg') }}" alt="">
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
							<img src="{{ Vite::image('p1.jpg') }}" alt="">
						</figure>
					</a>
					<a class="shop-categpries__item shop-category" href="#">
						<div class="shop-category__content">
							<h5 class="shop-category__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h5>
						</div>
						<figure class="shop-category__bg _ibg">
							<img src="{{ Vite::image('p1.jpg') }}" alt="">
						</figure>
					</a>
					<a class="shop-categpries__item shop-category" href="#">
						<div class="shop-category__content">
							<h5 class="shop-category__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h5>
						</div>
						<figure class="shop-category__bg _ibg">
							<img src="{{ Vite::image('p1.jpg') }}" alt="">
						</figure>
					</a>
					<a class="shop-categpries__item shop-category" href="#">
						<div class="shop-category__content">
							<h5 class="shop-category__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h5>
						</div>
						<figure class="shop-category__bg _ibg">
							<img src="{{ Vite::image('p1.jpg') }}" alt="">
						</figure>
					</a>
					<a class="shop-categpries__item shop-category" href="#">
						<div class="shop-category__content">
							<h5 class="shop-category__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h5>
						</div>
						<figure class="shop-category__bg _ibg">
							<img src="{{ Vite::image('p1.jpg') }}" alt="">
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
@endsection