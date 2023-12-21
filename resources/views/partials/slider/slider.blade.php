@if ($slides->isNotEmpty())
	<div class="main-slider" data-swiper>
		<div class="main-slider__slides">
			@each('partials.slider.slide', $slides, 'slide')
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
@endif