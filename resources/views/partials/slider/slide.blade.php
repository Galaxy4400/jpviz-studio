<div class="main-slider__slide main-slider-slide">
	<div class="main-slider-slide__container _container">
		<div class="main-slider-slide__content">
			<h2 class="main-slider-slide__title h1">{{ $slide->title }}</h2>
			@if ($slide->description)
				<p class="main-slider-slide__text">{{ $slide->description }}</p>
			@endif
			@if ($slide->link)
				<a class="form__btn btn btn_arrow" href="{{ $slide->link }}">Learn more</a>
			@endif
		</div>
		<div class="main-slider-slide__bg _ibg">
			<img src="{{ asset($slide->image) }}" alt="{{ $slide->title }}">
		</div>
	</div>
</div>