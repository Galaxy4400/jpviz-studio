@extends('layouts.inner')


@section('content')
	<div class="project">
		<div class="project__container _container">
			<div class="project__content">
				<div class="project__description _special-styles">
					<p>The design project for an apartment in the Phoenix residential complex is a modern and functional space combining stylish details and a comfortable arrangement. The design is based on the concept of minimalism with accents on natural materials and bright colors. The open layout of the apartment creates a sense of spaciousness and freedom, and the use of large windows allows you to get into the natural light as much as possible. The kitchen is combined with the living room, which contributes to easy and free communication between home and guests. The bedroom is arranged in such a way as to create an atmosphere of comfort and coziness, and the bathroom is distinguished by modern plumbing and stylish design. The overall decor of the premises affects the use of pastel shades and accents of bright colors, which creates a playful and cheerful mood in the apartment. This design project is ideal for both a young family and a successful businessman seeking an elegant and comfortable environment.</p>
				</div>
				<div class="project__advantages project-advantages">
					<h3 class="project-advantages__title">Advantages</h3>
					<div class="project-advantages__list">
						<div class="project-advantages__item advantage">
							<div class="advantage__column advantage__column_icon">
								<span class="_icon-check"></span>
							</div>
							<div class="advantage__column advantage__column_text">
								<span>Uniqueness:</span> the project allows you to create a unique and individual atmosphere in the living space.
							</div>
						</div>
						<div class="project-advantages__item advantage">
							<div class="advantage__column advantage__column_icon">
								<span class="_icon-check"></span>
							</div>
							<div class="advantage__column advantage__column_text">
								<span>Exclusive materials and quality of execution:</span> designers can offer the use of exclusive materials and interior elements.
							</div>
						</div>
						<div class="project-advantages__item advantage">
							<div class="advantage__column advantage__column_icon">
								<span class="_icon-check"></span>
							</div>
							<div class="advantage__column advantage__column_text">
								<span>Maximum functionality:</span> in the process of project development, all the needs and habits of the client are taken into account.
							</div>
						</div>
					</div>
				</div>
				<div class="project__advantages project-gallery" data-gallery>
					@foreach ($project->getMedia('gallery') as $mediaItem)
						<div class="project-gallery__item">
							<a class="project-gallery__img _ibg" href="{{ $mediaItem->getUrl() }}">
								<img src="{{ $mediaItem->getUrl('thumb') }}"/>
							</a>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection