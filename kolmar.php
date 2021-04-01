<?php
$title="Главная страница"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД
?>

<div class="container mt-4">
	<div class="row">
		<div class="col">
			<center>
				<h1>Системный администратор</h1>
				
			<div class="border" align="center">

				<div class="recuest"><h2>Требования:</h2></div>

					<div class="formrec" align="left">

						<div>
							<input type="checkbox" class="form-check-input" id="competition1" name="Linux">
							<label class="form-check-label" for="Linux">Linux</label>
						</div>

						<div>
							<input class="form-check-input" type="checkbox" id="competition2" name="Network">
							<label class="form-check-label" for="Network">Сети</label>
						</div>

						<div>
							<input class="form-check-input" type="checkbox" id="competition3" name="Excel">
							<label class="form-check-label" for="Excel">Excel</label>
						</div>

						<div>
							<input class="form-check-input" type="checkbox" id="competition4" name="Word">
							<label class="form-check-label" for="Word">Word</label>
						</div>

					</div>

			<br>
			<center><button type="button" id="sub" class="btn btn-outline-dark">Подтвердить</button></center>
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