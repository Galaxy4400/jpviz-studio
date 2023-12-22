@extends('layouts.inner')


@section('content')
	<div class="shop">
		<div class="shop__container _container">
			<div class="shop__body">
				<aside class="shop__aside">
					The design project for an apartment in the Phoenix residential complex is a modern and functional space combining stylish details and a comfortable arrangement. The design is based on the concept of minimalism with accents on natural materials and bright colors. The open layout of the apartment creates a sense of spaciousness and freedom, and the use of large windows allows you to get into the natural light as much as possible. The kitchen is combined with the living room, which contributes to easy and free communication between home and guests. The bedroom is arranged in such a way as to create an atmosphere of comfort and coziness, and the bathroom is distinguished by modern plumbing and stylish design. The overall decor of the premises affects the use of pastel shades and accents of bright colors, which creates a playful and cheerful mood in the apartment. This design project is ideal for both a young family and a successful businessman seeking an elegant and comfortable environment.
				</aside>
				<div class="shop__content">
					<div class="shop-categpries">
						<div class="shop-categpries__body">
							@each('shop.partials.category-card', $categories, 'category')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection