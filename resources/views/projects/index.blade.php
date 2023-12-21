@extends('layouts.inner')


@section('content')
	<div class="projects">
		<div class="projects__container _container-max">
			<div class="projects__body">
				@each('projects.partials.card', $projects, 'project')
			</div>
		</div>
	</div>
@endsection