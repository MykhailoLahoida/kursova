<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>knowledge pump</title>
		<link rel="stylesheet" href="css/client.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
		<script src="js/main.js"></script>
		<script src="https://kit.fontawesome.com/b17a47ede9.js" crossorigin="anonymous"></script>
		<meta name = "viewport" content="width=device-width">
	</head>
	<body>
	<header>
			<div class = "startpanel">
				<div class = "headerlogo">
					<img src = "img/blacklogo.png" alt = "logo" class = "logo">
					<span>knowledgepump</span>
				</div>
				<nav>
					<ul class = "menu">
						<li><a href = "/"> Головна </a>
						<li><a href = "/Directions"> Напрямки </a>
						<li><a href = "/about"> Про нас </a>
						<li><a href = "/contacts"> Контакти </a>
					</ul>
				</nav>
			</div>
		</header>
		<div class="popup" id="call_me">
				<div class = "content">
					<div class = "forms">
						@if ($errors->any())
							<div>
								<ul>
									@foreach($errors->all() as $error)
										<li>{{$error}}</li>
									@endforeach
								</ul>
							</div>
						@endif
						<form method = "post" action="/client/check">
							@csrf
							<h1> Прізвище та ім'я </h1>
							<input type="text" id = "name" name = "name">
							<h1> Номер телефону </h1>
							<input type="tel" id = "tel" name = "tel">
							<input value="Відправити" type="submit">
						</form>
					</div>
					<img src = "img/blacklogo.png" alt = "logo" class = "logo">
				</div>
		</div>
		@extends('footer')
		@section ('footer')
		@endsection
	</body>
</html>