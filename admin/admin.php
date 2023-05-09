<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="../assets/styles/reset.css">
	<link rel="stylesheet" href="../assets/styles/style.css">
	<link rel="stylesheet" href="./assets/styles/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="foto">
			<a href="../index.php"><img src="../assets/img/logo.jpg"></a>
		</div>
		<div class="nav">
			<a href="?table=admins">Администраторы</a>
			<a href="?table=news">Новости</a>
			<a href="?table=teachers">Преподаватели</a>
		</div>
		<main>
		<?php
			if(isset($_GET['table'])) {
				include('../assets/php/connect.php');
		?>
		<section class="table__contant">
			<?php
				switch ($_GET['table']) {
					case 'admins':
						$result = $conn -> query("select * from admins");
						echo "<table><tr><th>ID</th><th>ФИО</th><th>Почта</th><th>Пароль</th></tr>";
						echo "<tr><form action='assets/php/addAdmins.php' method='POST'>
							<td><input class='add' type='hidden' name='id' required/></td>
							<td><input class='add' type='text' name='fullName' required/></td>
							<td><input class='add' type='email' name='email' required/></td>
							<td><input class='add' type='password' name='password' required/></td>
							<td><input class='btn' type='submit' value='Добавить'></td>
						</form></tr>";
						foreach($result as $row){
							echo "<tr>";
								echo "<td>" . $row["id"] . "</td>";
								echo "<td>" . $row["fullName"] . "</td>";
								echo "<td>" . $row["email"] . "</td>";
								echo "<td>" . $row["password"] . "</td>";
								echo "<td>
										<div class='conf'>                     
										<form class='delete' action='assets/php/delete.php' method='post'>
											<input type='hidden' name='id' value='" . $row["id"] . "' />
											<input type='hidden' name='table' value='admins' />
											<input class='btn' type='submit' value='Удалить'>
										</form>
										</div>
									</td>";      
							echo "</tr>";
						}
						echo "</table>";
						break;

					case 'news':
						$result = $conn -> query("select * from news");
						echo "<table><tr><th>ID</th><th>Название</th><th>Описание</th><th>Дата</th><th>Картинка</th></tr>";
						echo "<tr><form enctype='multipart/form-data' action='assets/php/addNews.php' method='POST'>
							<td><input class='add' type='hidden' name='id' required/></td>
							<td><input class='add' type='text' name='title' required/></td>
							<td><input class='add' type='text' name='description' required/></td>
							<td><input class='add' type='date' name='date' required/></td>
							<td><input type='file' name='src' required/></td>
							<td><input class='btn' type='submit' value='Добавить'></td>
						</form></tr>";
						foreach($result as $row){
							echo "<tr>";
								echo "<td>" . $row["id"] . "</td>";
								echo "<td>" . $row["title"] . "</td>";
								echo "<td>" . $row['description'] . "</td>";
								echo "<td>" . $row["date"] . "</td>";
								echo "<td>" . $row["img"] . "</td>";
								echo "<td>
										<div class='conf'>                 
										<form class='delete' action='assets/php/delete.php' method='POST'>
											<input type='hidden' name='id' value='" . $row["id"] . "' />
											<input type='hidden' name='table' value='news' />
											<input class='btn' type='submit' value='Удалить'>
										</form>
										</div>
									</td>";      
							echo "</tr>";
						}
						echo "</table>";
						break;

					case 'teachers':
						$result = $conn -> query("select * from teachers");
						echo "<table><tr><th>ID</th><th>Ф.И.О</th><th>Должность</th><th>Образование</th><th>Квалификация, наименование направления подготовки и (или) специальности</th><th>Учёная степень и/или Учёное звание (при наличии)</th><th>Повышение квалификации и (или) профессиональная переподготовка (при наличии)</th><th>Общий стаж работы</th><th>Стаж работы по специаль ности</th><th>Преподаваемые учебные предметы, курсы, дисциплины (модули)</th><th>УГС, в реализации которых участвует педагогически</th></tr>";
						echo "<tr><form action='assets/php/addTeachers.php' method='POST'>
							<td><input class='add' type='hidden' name='id' required/></td>
							<td class='width-100'><input class='add width-100' type='text' name='fullName' required/></td>
							<td class='width-100'><input class='add width-100' type='text' name='post' required/></td>
							<td class='width-100'><input class='add width-100' type='text' name='education' required/></td>
							<td class='width-150'><input class='add width-150' type='text' name='direction' required/></td>
							<td class='width-100'><input class='add width-100' type='text' name='academic' required/></td>
							<td><input class='add' type='text' name='training' required/></td>
							<td class='width-50'><input class='add width-50' type='text' name='allExp' required/></td>
							<td class='width-50'><input class='add width-50' type='text' name='exp' required/></td>
							<td class='width-150'><input class='add width-150' type='text' name='lesson' required/></td>
							<td class='width-150'><input class='add width-150' type='text' name='ugs' required/></td>
							<td><input class='btn' type='submit' value='Добавить'></td>
						</form></tr>";
						foreach($result as $row){
							echo "<tr>";
								echo "<td>" . $row["id"] . "</td>";
								echo "<td class='width-100'>" . $row["fullName"] . "</td>";
								echo "<td class='width-100'>" . $row['post'] . "</td>";
								echo "<td class='width-100'>" . $row["education"] . "</td>";
								echo "<td class='width-150'>" . $row["direction"] . "</td>";
								echo "<td class='width-100'>" . $row['academic'] . "</td>";
								echo "<td>" . $row["training"] . "</td>";
								echo "<td class='width-50'>" . $row["allExp"] . "</td>";
								echo "<td class='width-50'>" . $row['exp'] . "</td>";
								echo "<td class='width-150'>" . $row["lesson"] . "</td>";
								echo "<td class='width-150'>" . $row["ugs"] . "</td>";
								echo "<td>
										<div class='conf'>                 
										<form class='delete' action='assets/php/delete.php' method='POST'>
											<input type='hidden' name='id' value='" . $row["id"] . "' />
											<input type='hidden' name='table' value='teachers' />
											<input  class='btn' type='submit' value='Удалить'>
										</form>
										</div>
									</td>";      
							echo "</tr>";
						}
						echo "</table>";
						break;
					}
				?>
			</section>
			<?
				}
			?>
		</main>
	</div>
</body> 
</html>