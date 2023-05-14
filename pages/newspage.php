<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/styles/reset.css">
	<link rel="stylesheet" type="text/css" href="../assets/styles/style.css">
	<link rel="stylesheet" href="../assets/styles/newspage.css">


	<title>ГАПО ПО ПКАС</title>
</head>

<body>
	<div class="wrapper">
		<!-- ШАПКА -->
		<header>
			<div class="other__header__container _container">
				<a href="/"><img class="header__containerimg" src="../assets/img/logo.jpg" alt="logo"></a>
				<div class="header__top">
					<nav>
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
								<a href="">Профессии</a>
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
								<a href="">Абитуриенту</a>
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
								<a href="">Студенту</a>
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
								<a href="">Трудоустройство</a>
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
		<!-- ШАПКА -->
		<main>
			<div class="newspage">
				<div class="newspage__container _container">
					<div class="newspage__row">
						<div class="newspage__content">
							<?php
								include('./assets/php/connect.php');
								$id = $matches[1];

								$query = $conn->prepare("select * from news where id = ?");
								$query->bind_param('i', $id);
								$query->execute();
								$query->bind_result($id, $title, $content, $time, $files);
								$query->fetch();
								$query->close();
							?>
							
							<div class="newspage__foto">
								<img src="../assets/img/news/<?= $files?>" alt="">
							</div>
							<div class="newspage__title"><?= $title?></div>
							<div class="newspage__date"><?= $time?></div>
							<div class="text"><?= $content?></div>
						</div>
						<div class="newspage__content2">
							<?php
							$max = "MAX(id)";
							$minus = 4;
							$last = $conn->query("select $max from news")->fetch_assoc();
							for ($i = $last[$max]; $i > $last[$max] - $minus; $i--) {
								if ($i < 1) {
									break;
								} else if ($i == $id) {
									$i--;
									$minus++;
								}
								$result = $conn->query("select * from news where id = $i");
								$row = $result->fetch_assoc();
							?>
							<div class="news">
								<a href="/news/<?= $row['id']?>">
									<h4><?= $row['title'] ?></h4>
									<p><?= $row['date'] ?></p>
									<div class="news-bottom"></div>
								</a>
							</div>
							<?php
							}
							?>
							<div class="bt">
								<a class="tex" href="/news">все новости</a>
							</div>
						</div>
					</div>
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
				<a href=""><img src="../assets/img/footer/footer__logo.jpg" alt=""></a>
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


</body>

</html>