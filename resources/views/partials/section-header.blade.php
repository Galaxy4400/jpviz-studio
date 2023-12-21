@if (isset($title))
	<header class="section-header">
		<div class="section-header__container _container">
			<div class="section-header__body">
				<div class="section-header__column section-header__column_left"></div>
				<div class="section-header__column section-header__column_center">
					<div class="section-header__title title-block">
						<h2 class="title-block__title">{{ $title }}</h2>
						@if (isset($label))
							<div class="title-block__label">{{ $label }}</div>
						@endif
					</div>
				</div>
				<div class="section-header__column section-header__column_right">
					@if (isset($linkTitle) && isset($link))
						<a class="section-header__link link-more" href="{{ $link }}">{{ $linkTitle }}</a>
					@endif
				</div>
			</div>
		</div>
	</header>
@endif