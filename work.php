<?php
$title="Главная страница"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД
?>

<div class="container mt-4">
	<div class="row">
		<div class="col">
			<center>
				<h1>Вакансии</h1>
			</center>
		</div>
	</div>
</div>

<!-- Если авторизован -->
<?php if(isset($_SESSION['logged_user'])) : ?>

	<!-- Пользователю отображается список предприятий -->

	<div id="companies">
		<a href="kolmar.php">
			<div class="card">
				<img src="/assets/img/kolmar.png" alt="Avatar" style="width:100%">
				<div class="container">
					<h4><b>УК Колмар</b></h4> 
					<p>Системный администратор</p> 
					<p>70 000 р</p>
				</div>
			</div>
		</a>

		<a href="#"> <!--href="itl.php"-->
			<div class="card">
				<img src="/assets/img/itl.png" alt="Avatar" style="width:100%">
				<div class="container">
					<h4><b>ИТЛ 24</b></h4> 
					<p>Учитель информатики</p> 
					<p>70 000 р</p>
				</div>
			</div>
		</a>

		<a href="#"> <!--href="yktygol.php"--> 
			<div class="card">
				<img src="/assets/img/mechel.png" alt="Avatar" style="width:100%">
				<div class="container">
					<h4><b>Якутуголь</b></h4>
					<p>Системный администратор</p>
					<p>70 000 р</p>
				</div>
			</div>
		</a>
	</div>

	

	


	<!-- Не авторизован -->
	<?php else : ?>

		<!-- Если пользователь не авторизован, отправим его на главную-->
		<?php header('Location: index.php');
	endif; ?>

<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->