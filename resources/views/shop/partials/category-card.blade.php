<a class="shop-categpries__item shop-category" href="{{ route('shop.category', $category) }}">
	<div class="shop-category__content">
		<h5 class="shop-category__title">{{ $category->title }}</h5>
	</div>
	<figure class="shop-category__bg _ibg">
		<img src="{{ $category->getFirstMedia('image')->getUrl('thumb') }}" alt="{{ $category->title }}">
	</figure>
</a>