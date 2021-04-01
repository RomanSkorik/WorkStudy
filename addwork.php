<?php
$title="Главная страница"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД
?>

<div class="container mt-4">
	<div class="row">
		<div class="col myform">
			
				<div></div>
				<div>
				<h1>Заявка на добавление вакансии</h1>
		<form action="workrequest.php" method="post">
			<input type="text" class="form-control" name="login" id="login" placeholder="Введите название компаниии"><br>
			<input type="email" class="form-control" name="email" id="email" placeholder="Введите контактный email"><br>
			<input type="text" class="form-control" name="job" id="job" placeholder="Введите название вакансии" required><br>
			<input type="text" class="form-control" name="requirements" id="requirements" placeholder="Введите требования к вакансии" required><br>
			<input type="text" class="form-control" name="salary" id="salary" placeholder="Введите заработную плату" required><br>
			<button class="btn btn-success" name="do_signup" type="submit" >Отправить заявку</button>
		</form>
		</div>
			</center>
		</div>			
	</div>
</div>



<!-- Если авторизован -->
<?php if(isset($_SESSION['logged_user'])) : ?>

	<!-- Пользователю отображается список предприятий -->
	<div id="competitions">

	</div>

	<!-- Не авторизован -->
	<?php else : ?>

		<!-- Если пользователь не авторизован, отправим его на главную-->

		<?php header('Location: index.php');
	endif; ?>

<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->