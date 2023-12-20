<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body>
	<div class="wrapper">

		@include('layouts.header')

		<main class="page">

			@yield('content')

		</main>

		@include('layouts.footer')

	</div>

	<button class="move-up" type="button" data-move-up data-goto="wrapper" data-fix-m></button>


	@include('layouts.scripts')

</body>

</html>