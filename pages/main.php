<?php
include('./assets/php/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/styles/reset.css">
	<link rel="stylesheet" href="../assets/styles/style.css">
	<link rel="stylesheet" href="../assets/styles/main.css">

	<title>ГАПО ПО ПКАС</title>
</head>

<body>
	<div class="wrapper">
		<!-- ШАПКА -->
		<header>
			<div class="header__container">
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
										<a href="/administration">Структура и органы управления организации</a>
									</li>
									<li>
										<a href="">Документы</a>
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
										<a href="">Стипендии меры поддержки обучающихся</a>
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
										<a href="">Стипендии меры поддержки обучающихся</a>
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
				<div class="header__bottom">
					<h1>ПЕНЗЕНСКИЙ КОЛЛЕДЖ АРХИТЕКТУРЫ И СТРОИТЕЛЬСТВА</h1>
					<img srcset="../assets/img/header/logo.png 425w,
									../assets/img/header/logo.png 768w,
					            ../assets/img/header/logo.png 1024w,
					            ../assets/img/header/logo.png 1280w,
					            ../assets/img/header/logo.png 1600w" sizes="(max-width: 425px) 580px,
									(max-width: 924px)  960px,
					           (max-width: 1024px) 1048px, 
					           (max-width: 1280px) 1280px,
					           (max-width: 1600px) 1480px, 1600px" src="../assets/img/header/logo.png" alt="logo">
				</div>
			</div>
		</header>
		<!-- ШАПКА -->
		<main>
			<!-- ДЕНЬ ОТКРЫТЫХ ДВЕРЕЙ -->
			<section class="video">
				<div class="bg__opendoors">
					<img src="../assets/img/opendoor/bg_opendoors.png" alt="">
				</div>
				<div class="video__container _container ">
					<h2>День открытых дверей</h2>
					<iframe width="937" height="526" src="https://www.youtube.com/embed/ofbJI4SRhME" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					<a href="">еще видео</a>
				</div>
			</section>
			<!-- ДЕНЬ ОТКРЫТЫХ ДВЕРЕЙ -->
			<!-- НОВОСТИ -->
			<section class="news">
				<div class="news__container _container">
					<div class="last__news">
						<h2>Недавнее из колледжа</h2>
						<?php
						$max = "MAX(id)";
						$last = $conn->query("select $max from news")->fetch_assoc();
						$lastResult = $conn->query("select * from news where id = $last[$max]");
						$lastRow = $lastResult->fetch_assoc();
						?>
						<img class="newsfotos" src="../assets/img/news/<?= $lastRow['img'] ?>" alt="news">
						<h3><a href="/news/<?= $lastRow['id'] ?>"><?= $lastRow['title'] ?></a></h3>
						<span class="date"><a href="/news/<?= $lastRow['id'] ?>"><?= $lastRow['date'] ?></a>
							<div class="news-bottom"></div>
						</span>

					</div>
					<div class="other__news">
						<?php
						for ($i = $last[$max] - 1; $i > $last[$max] - 5; $i--) {
							if ($i < 1) {
								break;
							}
							$result = $conn->query("select * from news where id = $i");
							$row = $result->fetch_assoc();
						?>
							<div class="other__news__container">
								<a href="/news/<?= $row['id'] ?>">
									<h4><?= $row['title'] ?></h4>
									<p><?= $row['date'] ?></p>
									<div class="news-bottom"></div>
								</a>
							</div>
						<?php
						}
						?>
						<div class="bt">
							<a href="/news" class="tex">все новости</a>
						</div>
					</div>
				</div>
			</section>
			<!-- НОВОСТИ -->
			<!-- НАШИ ПРЕПОДАВАТЕЛИ -->
			<div id="slickclider">
				<div class="slidertitle__row">
					<div class="sidertitle__body">
						<div class="slidertitle__title">Наши преподаватели</div>
					</div>
				</div>
				<div class="slickclider">
					<div class="slider">
						<div class="slider__item">
							<div class="sliderr__body">
								<img class="sliderr__img" srcset="../assets/img/slider/Ellipse 5.png 320w" sizes="(max-width: 320px) 100px" src="../assets/img/slider/Ellipse 5.png" alt="">
								<div class="sliderr__title">Сидорин Александр<br> Сергеевич</div>
								<div class="sliderr__text">Преподаватель физической<br> культуры</div>
							</div>
						</div>

						<div class="slider__item">
							<div class="sliderr__body">
								<img class="sliderr__img" src="../assets/img/slider/Ellipse 5 (1).png" alt="">
								<div class="sliderr__title">Первушкин Никита<br> Евгеньевич</div>
								<div class="sliderr__text">Преподаватель информационных<br> технологий</div>
							</div>
						</div>

						<div class="slider__item">
							<div class="sliderr__body">
								<img class="sliderr__img" src="../assets/img/slider/Ellipse 5 (2).png" alt="">
								<div class="sliderr__title">Бычкова Мария<br> Владимировна</div>
								<div class="sliderr__text">Преподаватель английского<br> языка</div>
							</div>
						</div>

						<div class="slider__item">
							<div class="sliderr__body">
								<img class="sliderr__img" src="../assets/img/slider/Ellipse 5 (1).png" alt="">
								<div class="sliderr__title">Первушкин Никита<br> Евгеньевич</div>
								<div class="sliderr__text">Преподаватель информационных<br> технологий</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- НАШИ ПРЕПОДАВАТЕЛИ -->
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
					<span>Copyright © 2015-2022 ГАПОУ ПО Пензенский колледж архитектуры и строительства <br> Designed by
						yfuhzpyjv</span>
					<div class="copyright__img">
						<a href=""><img src="../assets/img/footer/vk.png" alt=""></a>
						<a href=""><img src="../assets/img/footer/tg.png" alt=""></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- ПОДВАЛ -->
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="../assets/js/script.js"></script>
	<script src="../assets/js/slick.min.js"></script>
</body>

</html>