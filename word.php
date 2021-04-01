<?php
$title="Главная страница"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД
?>

<div class="container mt-4">
	<div class="row">
		<div class="col">
			<center>
				<h1>Курс по Word</h1>
			</center>
		</div>
	</div>
	<div class="courceContainer">
		<div>
			<p class="lessonNumber">Урок 1</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/7Qvr1cujdag" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<div>
			<p class="lessonNumber">Урок 2</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/7Qvr1cujdag" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div>
			<p class="lessonNumber">Урок 3</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/7Qvr1cujdag" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
</div>



<!-- Если авторизован -->
<?php if(isset($_SESSION['logged_user'])) : ?>

	<!-- Пользователю отображается список предприятий -->
	




	<!-- Не авторизован -->
	<?php else : ?>

		<!-- Если пользователь не авторизован, отправим его на главную-->
		<?php header('Location: index.php');
	endif; ?>

<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->