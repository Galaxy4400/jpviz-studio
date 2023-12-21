@extends('layouts.main')

@section('page')
	<section class="page__header">
		<h1 class="_semantic-hidden">{{ env('APP_NAME') }}</h1>
		@include('partials.slider.slider')
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

		@if ($projects->isNotEmpty())
			<div class="projects">
				<div class="projects__container _container-max">
					<div class="projects__body">
						@each('projects.partials.card', $projects, 'project')
					</div>
				</div>
			</div>
		@endif
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
					@each('partials.shop.category', $categories, 'category')
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