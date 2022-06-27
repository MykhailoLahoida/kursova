<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>knowledge pump</title>
		<link rel="stylesheet" href="css/contacts.css">
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
				<img class = "burger" src = "img/blackberger.png" onclick="show('berger')">
			</div>
		</header>
		<section>
			<div class = "contacts">
				<img src = "img/IMG_0847.JPG" class = "me">
				<div class = "cont">
					<h1> Контакти: </h1>
					<div class = "contact">
						<img src = "img/phone.png">
						<h2>
							+38 099 092 9832
						</h2>
					</div>
					<div class = "contact">
						<img src = "img/telegram.png">
						<h2>
							@misha0907
						</h2>
					</div>
					<div class = "contact">
						<img src = "img/viber.png">
						<h2>
							+38 099 092 9832
						</h2>
					</div>
					<div class = "contact">
						<img src = "img/youtube.png">
						<h2>
							Knowledge pump
						</h2>
					</div>
					<div class = "contact">
						<img src = "img/gmail.png">
						<h2>
							mishlagoida@gmail.com
						</h2>
					</div>
				</div>
			</div>
		</section>
		<div class="popup" id="berger">
			<img class="close-popup" src="img/crest.png" onclick="hide('berger')" role="button">
			<div class = "burgercontent">
				<a href = "/"><h1>Головна</h1></a>
				<a href = "/Directions"><h1>Напрямки</h1></a>
				<a href = "/about"><h1>Про нас</h1></a>
				<a href = "/contacts"><h1>Контакти</h1></a>
			</div>
		</div>
		@extends('footer')
		@section ('footer')
		@endsection
	</body>
</html>