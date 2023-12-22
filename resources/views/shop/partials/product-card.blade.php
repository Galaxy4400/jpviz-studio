<div class="shop-cards__item shop-card">
	<div class="shop-card__content">
		<h5 class="shop-card__title"><a href="{{ route('shop.product', $product) }}">{{ $product->title }}</a></h5>
		<footer class="shop-card__footer">
			<div class="shop-card__price price">{{ $product->price }}</div>
			<button class="shop-card__buy _icon-cart"></button>
		</footer>
	</div>
	
	<a class="shop-card__bg _ibg" href="{{ route('shop.product', $product) }}">
		<img src="{{ $product->getFirstMedia('gallery')->getUrl('thumb') }}" alt="{{ $product->title }}">
	</a>
</div>