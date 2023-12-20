@extends('layouts.main')


@section('page')
	<div class="page__inner page-inner">

		@include('layouts.inner-head')

		<div class="page-inner__body">

			@yield('content')

		</div>

	</div>
@endsection
