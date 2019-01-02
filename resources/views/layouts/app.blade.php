<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="css/app.css ">
</head>
<body>
	@include('inc.navbar')
	<br>

	<div class="container">
		@if(Request::is('/'))
			@include('inc.showcase')
		@endif
		<div class="row">
			<div class="col-md-8 col-lg-8"> 
				@include('inc.messages')

				@yield('content')
			</div>

			<div class="com-md-4 col-lg-4">
				@include('inc.sidebar')
			</div>
		</div>
	</div>
	
</body>

<br>
@include('inc.footer')
</html>