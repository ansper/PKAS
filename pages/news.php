<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/styles/reset.css">
	<link rel="stylesheet" type="text/css" href="../assets/styles/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/styles/news.css">
	<title>Новости</title>
</head>

<body>
	<div class="wrapper">
		<!-- ШАПКА -->
		<header>
			<div class="other__header__container _container">
				<a href="/"><img class="header__containerimg" src="../assets/img/logo.jpg" alt=""></a>
				<div class="header__top">
					<div class="header__burger">
						<span></span>
					</div>
					<nav class="header__menu">
						<ul>
							<li class="drop-item">
								<a href="#">Сведения</a>
								<ul class="dropdown">
									<li>
										<a href="/info">Основные сведения</a>
									</li>
									<li>
										<a href="">Структура и органы управления организации</a>
									</li>
									<li>
										<a href="">Документы </a>
									</li>
									<li>
										<a href="">Образование</a>
									</li>
									<li>
										<a href="">Руководство</a>
									</li>
									<li>
										<a href="">Педагогический состав</a>
									</li>
									<li>
										<a href="">Материально техническое обеспечение</a>
									</li>
									<li>
										<a href="">Стипендии и меры поддержки обучающихся</a>
									</li>
									<li>
										<a href="">Платные образовательные услуги</a>
									</li>
									<li>
										<a href="">Финансово хозяйственна деятельность</a>
									</li>
									<li>
										<a href="">Доступная среда</a>
									</li>
								</ul>
							</li>
							<li class="drop-item">
								<a href="#">Профессии</a>
								<ul class="dropdown">
									<li>
										<a href="">Архитектура</a>
									</li>
									<li>
										<a href="">Строительство и эксплуатация зданий и сооружений</a>
									</li>
									<li>
										<a href="">Реклама</a>
									</li>
									<li>
										<a href="">Садово-парковое и ландшафтное строительство</a>
									</li>
									<li>
										<a href="">Прикладная информатика</a>
									</li>
									<li>
										<a href="">Информационные системы и программирование</a>
									</li>
									<li>
										<a href="">Строительство и эксплуатация автомобильных дорог и аэродромов</a>
									</li>
									<li>
										<a href="">Сварочное производство</a>
									</li>
									<li>
										<a href="">Управление, эксплуатация и обслуживание многоквартирного дома</a>
									</li>
									<li>
										<a href="">Графический дизайнер</a>
									</li>
									<li>
										<a href="">Мастер отделочных строительных и декоративных работ</a>
									</li>
									<li>
										<a href="">Мастер по ремонту и обслуживанию инженерных систем ЖКХ</a>
									</li>
									<li>
										<a href="">Сварщик (ручной и частично механизированной сварки (наплавки))</a>
									</li>
								</ul>
							</li>
							<li class="drop-item">
								<a href="#">Абитуриенту</a>
								<ul class="dropdown">
									<li>
										<a href="">Платные образовательные услуги</a>
									</li>
									<li>
										<a href="">Стипендии и меры поддержки обучающихся</a>
									</li>
									<li>
										<a href="">Вакантные места для приема и перевода обучащихся</a>
									</li>
									<li>
										<a href="">Правила внутреннего распорядка</a>
									</li>
									<li>
										<a href="">Подать заявление</a>
									</li>
									<li>
										<a href="">Обязательный предварительный медицинский осмотр</a>
									</li>
									<li>
										<a href="">Перечень направлений подготовки</a>
									</li>
									<li>
										<a href="">Положение о приемной комиссии</a>
									</li>
									<li>
										<a href="">Приказы о зачислении</a>
									</li>
									<li>
										<a href="">Общежитие</a>
									</li>
									<li>
										<a href="">Договор об оказании платных образовательных услуг</a>
									</li>
								</ul>
							</li>
							<li class="drop-item">
								<a href="#">Студенту</a>
								<ul class="dropdown">
									<li>
										<a href="">Стипендии и меры поддержки обучающихся</a>
									</li>
									<li>
										<a href="">Дистанционное обучение</a>
									</li>
									<li>
										<a href="">Телефон доверия</a>
									</li>
									<li>
										<a href="">Количество вакатных мест для приема (перевода)</a>
									</li>
									<li>
										<a href="">Расписание занятий</a>
									</li>
									<li>
										<a href="">Правила внутреннего распорядка</a>
									</li>
									<li>
										<a href="">Памятки</a>
									</li>
								</ul>
							</li>
							<li class="drop-item">
								<a href="#">Трудоустройство</a>
								<ul class="dropdown">
									<li>
										<a href="">Cоциальные партнеры</a>
									</li>
									<li>
										<a href="">Трудоустройство выпускников</a>
									</li>
									<li>
										<a href="">Служба занятости</a>
									</li>
									<li>
										<a href="">Советы по трудоустройству</a>
									</li>
									<li>
										<a href="">Поддержка предпринимательства</a>
									</li>
									<li>
										<a href="">Cоглашение о сотрудничестве</a>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<main>
			<div class="news">
				<h2>Новости</h2>
				<div class="news__container _container">
					<?php
					include('./assets/php/connect.php');
					$max = $conn->query('select MAX(id) from news')->fetch_assoc()['MAX(id)'];
					$min = $conn->query('select MIN(id) from news')->fetch_assoc()['MIN(id)'];
					for ($i = $max; $i > $min - 1; $i--) {
						$result = $conn->query('select * from news where id=' . $i);
						$row = $result->fetch_assoc();
					?>
						<div class="news__block">
							<a href="/news/<?= $row['id'] ?>"><img class="news__fotos" src="../assets/img/news/<?= $row['img'] ?>" alt="img"></a>
							<div class="news__block__contant">
								<div class="news__block__top">
									<h3><a href="/news/<?= $row['id'] ?>"><?= $row['title'] ?></a></h3>
									<p><a href="/news/<?= $row['id'] ?>"><?= $row['description'] ?></a></p>
								</div>
								<div class="news__block__bot">
									<span><a href="/news/<?= $row['id'] ?>"><?= $row['date'] ?></a></span>
									<div class="grey_line"></div>
								</div>
							</div>
						</div>
					<?php
					}
					?>
					<button class="show__more">больше</button>
				</div>
			</div>
		</main>
		<!-- ПОДВАЛ -->
		<footer>
			<div class="footer__container _container">
				<div class="footer__contant">
					<div class="footer__src">
						<h3>ПОЛЕЗНЫЕ ССЫЛКИ</h3>
						<div class="line"></div>
						<div class="footer__src__container">
							<div class="footer__row">
								<a href="">Бебра</a>
								<a href="">Бебра</a>
								<a href="">Бебра</a>
							</div>
							<div class="footer__row">
								<a href="">Бебра</a>
								<a href="">978D85</a>
								<a href="">Бебра</a>
							</div>
							<div class="footer__row">
								<a href="">Бебра</a>
								<a href="">Бебра</a>
								<a href="">Бебра</a>
							</div>
						</div>
					</div>
					<div class="footer__contacts">
						<h3>КОНТАКТЫ</h3>
						<div class="line"></div>
						<span>г. Пенза, ул. Набережная р. Пензы, д. 3</span>
						<span>Администрация: pask_e@mail.ru</span>
						<span>Вопросы по работе сайта: +7 953 447 30 25 </span>
					</div>
				</div>
				<a class="footer-logo" href=""><img src="../assets/img/footer/footer__logo.jpg" alt=""></a>
			</div>
			<div class="copyright _container">
				<div class="copyright__container">
					<span>Copyright © 2015-2022 ГАПОУ ПО Пензенский колледж архитектуры и строительства <br> Designed by yfuhzpyjv</span>
					<div class="copyright__img">
						<a href=""><img src="../assets/img/footer/vk.png" alt=""></a>
						<a href=""><img src="../assets/img/footer/tg.png" alt=""></a>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script src="../assets/js/show_more.js"></script>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/js/script.js"></script>
<script src="../assets/js/slick.min.js"></script>

</html>