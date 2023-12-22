<a class="shop-categpries__item shop-category" href="#">
	<div class="shop-category__content">
		<h5 class="shop-category__title">{{ $category->title }}</h5>
	</div>
	<figure class="shop-category__bg _ibg">
		<img src="{{ $category->getFirstMediaUrl('image') }}" alt="{{ $category->title }}">
	</figure>
</a>