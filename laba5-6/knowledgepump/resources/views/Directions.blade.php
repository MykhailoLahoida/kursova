<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>knowledge pump</title>
		<link rel="stylesheet" href="css/Directions.css">
		<script src="js/main.js"></script>
		<script src="https://kit.fontawesome.com/b17a47ede9.js" crossorigin="anonymous"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
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
		<section id = "services">
			<div class = "title">
				<h1>
					Враховуючи компетенції викладача даного проекту, ми готуємо до ЗНО/НМТ з:
				</h1>
			</div>
			<div class = "services">
				<div class = "service">
					<img src = "img/history.png" alt = "Історія">
					<h2>
						Історія України
					</h2>
				</div>
				<div class = "service">
					<img src = "img/woman.png" alt = "Мова">
					<h2>
						Українська мова
					</h2>
				</div>
				<div class = "service">
					<img src = "img/calculator.png" alt = "Математика">
					<h2>
						Математика
					</h2>
				</div>
				<div class = "service">
					<img src = "img/atom.png" alt = "Фізика">
					<h2>
						Фізика
					</h2>
				</div>
				<div class = "service">
					<img src = "img/earth-globe.png" alt = "Географія">
					<h2>
						Географія
					</h2>
				</div>
			</div>
		</section>
		<section>
			<h1>
				Ми експерти у свому ділі!
			</h1>
			<div class = "contacts">
				<div class = "contact">
					<img src = "img/image 1.png" class = "zno">
				</div>
				<div class = "contact">
					<img src = "img/Відзнака МАН.jpg">
				</div>
				<div class = "contact">
					<img src = "img/photo_2022-06-23_18-53-50.jpg">
				</div>
			</div>
		</section>
		@extends('footer')
		@section ('footer')
		@endsection
		<div class="popup" id="berger">
			<img class="close-popup" src="img/crest.png" onclick="hide('berger')" role="button">
			<div class = "burgercontent">
				<a href = "/"><h1>Головна</h1></a>
				<a href = "/Directions"><h1>Напрямки</h1></a>
				<a href = "/about"><h1>Про нас</h1></a>
				<a href = "/contacts"><h1>Контакти</h1></a>
			</div>
		</div>
	</body>
</html>