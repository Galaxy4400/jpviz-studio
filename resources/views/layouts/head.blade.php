<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title', ($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : env('APP_NAME'))</title>

	@vite(['resources/scss/style.scss', 'resources/js/app.js'])

</head>