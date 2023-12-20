<header class="header">
	<div class="header__container _container">
		<div class="header__body">
			<div class="header__column header__column_left">
				<div class="main-menu" data-menu="main-menu">
					<div class="main-menu__body" data-menu-container="main-menu">
						<nav class="main-menu main-menu_left">
							<ul class="main-menu__list">
								@foreach ($menuLeft as $item)
									<li class="main-menu__item"><a class="main-menu__link {{ $item->isActive() ? '_active' : ''}}" href="{{ $item->link() }}">{{ $item->label() }}</a></li>
								@endforeach
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="header__column header__column_center">
				<a class="header__logo logo" href="{{ route('home') }}" data-adapt="header__column_left,767">
					<div class="logo__icon _icon-logo"></div>
					<div class="logo__text">{{ env('APP_NAME') }}</div>
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
						@foreach ($menuRight as $item)
							<li class="main-menu__item"><a class="main-menu__link {{ $item->isActive() ? '_active' : ''}}" href="{{ $item->link() }}">{{ $item->label() }}</a></li>
						@endforeach
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>