<a class="projects__item project-card" href="#">
	<div class="project-card__content">
		<h4 class="project-card__title">{{ $project->title }}</h4>
	</div>
	<figure class="project-card__bg _ibg">
		<img src="{{ asset($project->image) }}" alt="{{ $project->title }}">
	</figure>
</a>