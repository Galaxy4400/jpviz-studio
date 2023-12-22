@extends('layouts.inner')


@section('content')
	<div class="product">
		<div class="product__container _container">
			<div class="product__body">
				<div class="product__column product__column_gallery">
					<div class="product-gallery" data-gallery>
						@foreach ($product->getMedia('gallery') as $mediaItem)
							<div class="product-gallery__item _active">
								<a class="product-gallery__img _ibg" href="{{ $mediaItem->getUrl() }}">
									<img src="{{ $mediaItem->getUrl('thumb') }}">
								</a>
							</div>
						@endforeach
					</div>
					<div class="product__slider">
						<div class="product-slider" data-swiper>
							<div class="product-slider__slides">
								@foreach ($product->getMedia('gallery') as $mediaItem)
									<div class="product-slider__slide">
										<figure class="product-slider__img _ibg">
											<img src="{{ $mediaItem->getUrl('thumb') }}">
										</figure>
									</div>
								@endforeach
							</div>
						</div>
						<div class="product__slider-arrows">
							<div class="product__slider-arrow product__slider-arrow_prev _icon-arrow"></div>
							<div class="product__slider-arrow product__slider-arrow_next _icon-arrow"></div>
						</div>
					</div>
				</div>
				<div class="product__column product__column_content">
					<h3 class="product__title">{{ env('APP_NAME') }}</h3>
					<div class="product__description">{{ $product->content }}</div>
					<div class="product__label">To download the project, you need to buy it</div>
					<div class="product__actions">
						<div class="product__price price">{{ $product->price }}</div>
						<button class="product__btn btn">Add to cart</button>
					</div>
				</div>
			</div>
			<div class="product-info" data-tabs="product-info">
				<div class="product-info__nav" data-tabs-controls>
					<button class="product-info__btn" type="button">Description</button>
					<button class="product-info__btn" type="button">Specifications</button>
				</div>
				<div class="product-info__content" data-tabs-container>
					<div class="product-info__panel">{{ $product->description }}</div>
					<div class="product-info__panel">
						<dl class="product-specifications">
							<div class="product-specifications__item">
								<dt class="product-specifications__param">Format</dt>
								<dd class="product-specifications__value">max, fbx, obj</dd>
							</div>
							<div class="product-specifications__item">
								<dt class="product-specifications__param">Archive size</dt>
								<dd class="product-specifications__value">345 mb</dd>
							</div>
							<div class="product-specifications__item">
								<dt class="product-specifications__param">Other</dt>
								<dd class="product-specifications__value">.jpg, .tif</dd>
							</div>
							<div class="product-specifications__item">
								<dt class="product-specifications__param">Polygons</dt>
								<dd class="product-specifications__value">2 188 609</dd>
							</div>
							<div class="product-specifications__item">
								<dt class="product-specifications__param">Platform</dt>
								<dd class="product-specifications__value">3dsMax 2017</dd>
							</div>
							<div class="product-specifications__item">
								<dt class="product-specifications__param">Render</dt>
								<dd class="product-specifications__value">Corona</dd>
							</div>
						</dl>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection