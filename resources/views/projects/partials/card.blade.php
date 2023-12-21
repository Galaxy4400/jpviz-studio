<a class="projects__item project-card" href="{{ route('project', $project) }}">
	<div class="project-card__content">
		<h4 class="project-card__title">{{ $project->title }}</h4>
	</div>
	<figure class="project-card__bg _ibg">
		<img src="{{ $project->getFirstMediaUrl('gallery') }}" alt="{{ $project->title }}">
	</figure>
</a>