@extends('layouts.inner')


@section('content')
	<div class="contact-page">
		<div class="contact-page__container _container">
			<div class="contact-page__body">
				<div class="contact-page__column contact-page__column_contacts">
					<h3 class="contact-page__title">JP Visualization Studio</h3>
					<div class="contact-page__contacts">
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
				</div>
				<div class="contact-page__column contact-page__column_map">
					<iframe class="contact-page__map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A3ce58aeb989658bb5519d04995415ab4bbdd718a11120d094232de2beeaffffb&amp;source=constructor" frameborder="0"></iframe>
				</div>
			</div>
		</div>
	</div>
@endsection