<?php
//*********************** Главная страница лендинга *************************
session_start();
$sale = 15; // скидка на товар в процентах;
$currency = 'грн'; // валюта;
$price_new = 649; // полная цена по умолчанию;
$price = $price_new;
$price_old = floor(($price_new / (100 - $sale)) * 100);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Универсальный ключ Tiger Wrench</title>
	<meta name="description" content="Купите Универсальный ключ Tiger Wrench по выгодной цене. Торопитесь, предложение ограничено.">
	<meta name="keywords" content="купить Универсальный ключ Tiger Wrench, цена Универсальный ключ Tiger Wrench, заказать Универсальный ключ Tiger Wrench, Универсальный ключ Tiger Wrench интернет магазин">
	<script type="text/javascript" src="js/jquery.min6f4a0.js"></script>
	<!-- Favicon -->
	<link rel="icon" href="png/33266b1be.png" type="image/png">
	<link rel="shortcut icon" href="png/33266b1be.png" type="image/png">
	<!-- OG -->
	<meta name="viewport" content="width=480" />
	<!-- CSS -->
	<link href="css/css62152.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/style79974.css"/>
	<!-- JS -->
	<script defer type="text/javascript" src="js/scripte316d.js"></script>

</head>
<body>
	<div class="wrap">
		<section class="b1">
			<h2>Универсальный чудо-ключ</h2>
			<h2 class="tiger">Tiger Wrench</h2>
		</section>
		<section class="b2">
			<ul class="osob">
				<li>
					<p>
						<span>не соскальзывает</span>
						с гладких поверхностей
					</p>
				</li>
				<li>
					<p>
						<span>Надежный</span>
						качественный материал
					</p>
				</li>
			</ul>
		</section>
		<section class="b3">
			<p>
				скидка
				<span>-<?= $sale?>%</span>
			</p>
		</section>
		<section class="b4 devmenu1">
			<!-- <div class="countbox"></div>
		-->
		<div class="price clearfix">
			<div class="old-cost">
				<p>
					<span> <b class="price_old6911"><?= $price_old?></b>
					</span> <b class="price_currency"><?= $currency?></b>
				</p>
			</div>
			<div class="new-cost">
				<p>
					<b class="price_only6911"><?= $price?></b>
					<small>
						<b class="price_currency"><?= $currency?></b>
					</small>
				</p>
			</div>
		</div>

		<a href="#buy" class="button-m">Заказать по акции</a>
	</section>
	<section class="b4 devmenu1" style="padding: 20px;background-color: #224c72">
	<video poster = "jpg/preview-video.jpg" controls style = "width: 100%;">
		<source src = "mp4/video.mp4" type = "video/mp4"></video>
</section>
<section style="padding-bottom: 30px; text-align: center;" class="b4 devmenu1">
	<img width="93%" src="svg/sh.svg"></section>
<section class="b5">
	<h2 class="title">Новый чудо-ключ</h2>
	<img class="delay" data-src="jpg/img57240.jpg" alt="Tiger wrench">
	<p>
		<span>Tiger wrench</span>
		– сочетает в себе 48 инструментов в одном и заменяет большие, громоздкие гнезда и комплекты инструментов для гаечного ключа. Он имеет вращающуюся головку на 360º на каждом конце, поэтому вы можете легко найти инструмент, необходимый для гаек и болтов любого размера и формы. Для удобства использования он регулируется под углом 45º, поэтому вы можете справиться с любыми труднодоступными гайками и болтами.
	</p>
</section>
<section class="b6">
	<h2 class="title">Преимущества чудо-ключа:</h2>
	<ul class="preim">
		<li>
			<p>
				Уникальный и простой в обращении, ключ удобно помещается в руке
			</p>
		</li>
		<li>
			<p>Уникальный дизайн, который сочетает в себе 48 инструментов</p>
		</li>
		<li>
			<p>
				Используется для ручных инструментов, гаечных ключей, идеально подходит для сборки мебели, ремонта дома и авто, и многое другое
			</p>
		</li>
		<li>
			<p>Чудо-ключ станет замечательным подарком для любого мужчины</p>
		</li>
	</ul>
</section>
<section class="b8">
	<div>
		<h2 class="title">Комментарий специалиста</h2>
		<h3>
			Александр Довлатов
			<span>Сантехник, стаж 20 лет</span>
		</h3>
	</div>
	<p>
		«Всегда было сложно собираться на работу, то одного ключа не хватает, то другого. Увидел рекламу универсального ключа, купил, и ни разу не пожалел. Кроме того, что такой инструмент заменяет мне как минимум 50 гаечных ключей, так он еще и занимает мало места в моем рабочем чемоданчике. Очень удобный функционал».
	</p>
</section>
<section class="b9">
	<h2 class="title">отзывы покупателей</h2>
	<div class="reviews">
		<div>
			<img src="png/rev118a30.png" alt="Tiger wrench">
			<h3>Денис Романов</h3>
			<p>
				Если сами дома занимаетесь заменой сантехники (смесители, гибкая подводка и т.п.), то лучше иметь этот ключ. Такая необходимость изредка возникает, но почему то в самый неподходящий момент. Из плюсов большой функционал и прорезиненная ручка.
			</p>
		</div>
		<div>
			<img class="delay" data-src="png/rev20690d.png" alt="Tiger wrench">
			<h3>Виталий Захаров</h3>
			<p>
				Одна из самых удачных моих покупок! Сэкономил с помощью этого ключа кучу денег, очень удобный, заменяет сразу множество обычных ключей, в руках держать одно удовольствие.
			</p>
		</div>
		<div>
			<img class="delay" data-src="png/rev376a26.png" alt="Tiger wrench">
			<h3>Евгений Лукин</h3>
			<p>
				Купил чудо-ключ Tiger Wrench на данном сайте, ключ легко держать в руках и делать мелкие ремонты по дому. Теперь еще закажу один универсальный чудо-ключ своему брату на подарок.
			</p>
		</div>
	</div>
</section>
<section class="b10">
	<ul class="ship">
		<li>
			<p>
				<b>Доставка почтой</b>
				1 до 3 дня.
			</p>
		</li>
		<li>
			<p>
				<b>Никаких предоплат!</b>
				Оплата заказов осуществляется по факту получения товара.
			</p>
		</li>
		<li>
			<p>
				Перед отправкой товар проходит
				<b>тщательную проверку</b>
				на предмет брака и дефектов.
			</p>
		</li>
	</ul>
</section>
<section class="b1">
	<h2>Универсальный чудо-ключ</h2>
	<h2 class="tiger">Tiger Wrench</h2>
</section>
<section class="b2 end">
	<ul class="osob">
		<li>
			<p>
				<span>не соскальзывает</span>
				с гладких поверхностей
			</p>
		</li>
		<li>
			<p>
				<span>Надежный</span>
				качественный материал
			</p>
		</li>
	</ul>
</section>
<section class="b3">
	<p>
		скидка
		<span>-<?= $sale?>%</span>
	</p>
</section>
<section class="b4">
	<!-- <div class="countbox"></div>
-->
<div class="price clearfix">
	<div class="old-cost">
		<p>
			<span>
				<b class="price_old6911"><?= $price_old?></b>
			</span>
			<b class="price_currency"><?= $currency?></b>
		</p>
	</div>
	<div class="new-cost">
		<p>
			<b class="price_only6911"><?= $price?></b>
			<small>
				<b class="price_currency"><?= $currency?></b>
			</small>
		</p>
	</div>
</div>
<form id="buy" class="m1-form orderformcdn" action="form-ok.php" method="post">
	<input class="field" name="name" type="text" placeholder="Введите Ваше имя" >
	<input class="field" name="phone" type="tel" placeholder="Введите Ваш телефон" >

	<button type="submit" class="button-m">Оформить заказ</button>
</form>
</section>
<footer style="padding: 25px 0; color: #000000; font-size: 16px">
<center>
	<div style="font-size:13px;">
      <p style="text-align: center">СПД "МАНЬКО О.Ф." - ОГРН 4534321922723  <br>   65049, Україна, м.Одеса, вул. Фрунзе 11/2 </p>
      <p style="text-align: center">
  
        Режим работы:
        Пн - Вс:  08:00 - 23:00 <br>
        Контактный телефон : + 38 (050) 174-28-38<br>
        <a style="color:inherit;"  href="politics.html">Политика конфиденциальности</a>
        <br>
        <a style="color:inherit;"  href="agreement.html">Пользовательское соглашение</a>
      </p>
    </div>
</center>
</footer>
</div>
</body>
</html>
