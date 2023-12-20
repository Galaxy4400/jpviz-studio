<header class="page-inner__header inner-header">
	<div class="inner-header__top"></div>
	<div class="inner-header__bottom">
		<div class="inner-header__container _container">
			<div class="inner-header__content">
				{{ Breadcrumbs::render() }}
				<div class="title-block">
					<h2 class="title-block__title">{{ ($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : env('APP_NAME') }}</h2>
				</div>
			</div>
		</div>
	</div>
</header>
