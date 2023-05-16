<?php
	session_start();
	if($_SESSION['login_status']) {
		
	} else {
		header('Location: /');
	}
?>
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
			<a href="/"><img src="../assets/img/logo.jpg"></a>
		</div>
		<div class="nav">
			<a href="?table=admins">Администраторы</a>
			<a href="?table=news">Новости</a>
			<a href="?table=apply">Заявления</a>
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
						echo "<table><tr><th>ID</th><th>Название</th><th>Описание</th><th>Дата</th><th>Картинка</th><th>Редактирование</th></tr>";
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
										<form action='assets/php/edit.php' method='POST'>
											<input type='hidden' name='id' value='" . $row["id"] . "' />
											<input type='hidden' name='table' value='news' />
											<input class='add' type='text' name='title' value='" . $row["title"] . "' />
											<input class='add' type='text' name='description' value='" . $row["description"] . "' />
											<input class='add' type='text' name='date' value='" . $row["date"] . "' />
											<input class='add' type='text' name='img' value='" . $row["img"] . "' />
											<input class='btn' type='submit' value='сохранить'>
										</form>             
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

					case 'apply':
						$result = $conn -> query("select * from apply");
						echo "<table><tr><th>ID</th><th>ФИО</th><th>Дата рождения</th><th>Пол</th><th>Гражданство</th><th>Фото</th><th>Коментарий</th></tr>";
						foreach($result as $row){
							echo "<tr>";
								echo "<td>" . $row["id"] . "</td>";
								echo "<td>" . $row["fio"] . "</td>";
								echo "<td>" . $row["date"] . "</td>";
								echo "<td>" . $row["gender"] . "</td>";
								echo "<td>" . $row["citizenship"] . "</td>";
								echo "<td>" . $row["file"] . "</td>";
								echo "<td>" . $row["comment"] . "</td>";
								echo "<td>
										<div class='conf'>                 
										<form class='delete' action='assets/php/delete.php' method='POST'>
											<input type='hidden' name='id' value='" . $row["id"] . "' />
											<input type='hidden' name='table' value='apply' />
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