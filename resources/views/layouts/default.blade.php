<!DOCTYPE html>
<html lang="en">
<head>
	@include('include.head')
</head>
<body>
	<header class="row">
		@include('include.header')
	</header> 	

	@yield('content')
	
	<footer class="row">
		<@include('include.footer')
	</footer>
</body>
</html>