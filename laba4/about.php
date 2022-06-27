<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>knowledge pump</title>
		<link rel="stylesheet" href="css/about.css">
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
						<li><a href = "index.php"> Головна </a>
						<li><a href = "Directions.php"> Напрямки </a>
						<li><a href = "about.php"> Про нас </a>
						<li><a href = "contacts.php"> Контакти </a>	
					</ul>
				</nav>
				<img class = "burger" src = "img/blackberger.png" onclick="show('berger')">
			</div>
		</header>
		<section id = "services">
			<div class = "title">
				<h1>
					knowledgepump - це:
				</h1>
			</div>
			<div class = "services">
				<div class = "service">
					<h1>175</h1>
					<h2>балів - це середній бал наших учнів</h2>
				</div>
				<div class = "service">
					<h1>200</h1>
					<h2>балів набрали 20 наших учнів</h2>
				</div>
				<div class = "service">
					<h1>534</h1>
					<h2>учні готувалися разом з нами</h2>
				</div>
			</div>
		</section>
		<h1>
			Про нас
		</h1>
		<section class = "about">
			<img src = "img/IMG_9378.jpg">
			<span><p>Мене звати Михайло і я радий вас вітати на сторінці своєї навчальної онлайн-платформи knowledgepump!</p>

			<p>Особливість даної платформи полягає в тому, що ми використовуємо новітній підхід для подачі інформації,
			який допоміг мені в 2020 році підготуватися до ЗНО лише за 1.5 тижня! Мої результати були досить 
			непоганими : 190 балів з математики й української мови та літератури, 196 балів з фізики.
			У момент оголошення результатів цих екзаменів я зрозумів, що більшість репетиторів подають інформацію вкрай
			неефективно. Саме тому я вирішив покласти цьому край і створив дану платформу.</p>

			<p>Користуючись послугами нашої платформи, ви будете отримувати інформацію, яка згрупована в логічні 
			та тематичні блоки, а також яка буде подана вам максимально ефективно. Ми не будемо заставляти вас 
			вчити тонни теорії, а натомість ви будете займатися цікавою практикою, яка точно вам пригодиться для 
			успішного складання ЗНО.</p>

			<p>Ми доведемо вам, що навчання може бути цікавим та відносно нетривалим!</p></span>
		</section>
		<section>
			<div class = "title">
				<h1>
					Відгуки
				</h1>
			</div>
			<div class = "coments">
				<div class = "row">
					<div class = "coment">
						<img src = "img/Комент 1.png" class = "imgcoment">
					</div>
					<div class = "coment">
						<img src = "img/Комент 2.png" class = "imgcoment">
					</div>
				</div>
				<div class = "row">
					<div class = "coment">
						<img src = "img/Комент 3.png" class = "imgcoment">
					</div>
					<div class = "coment">
						<img src = "img/Комент 4.png" class = "imgcoment">
					</div>
				</div>
			</div>
		</section>
		<footer>
			<h2>2022 © Всі права захищені</h2>
			<div class = "footerlogo">
				<img src = "img/logo.png" alt = "logo" >
				<a name = "#top"><span>knowledgepump</span></a>
			</div>
			<a href="#top" class = "topbutton"> Вгору </a>
		</footer>
		<div class="popup" id="berger">
			<img class="close-popup" src="img/crest.png" onclick="hide('berger')" role="button">
			<div class = "burgercontent">
				<a href = "index.php"><h1>Головна</h1></a>
				<a href = "Directions.php"><h1>Напрямки</h1></a>
				<a href = "about.php"><h1>Про нас</h1></a>
				<a href = "contacts.php"><h1>Контакти</h1></a>
			</div>
		</div>
	</body>
</html>