<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Заглавная страница</title>
<link rel="icon" href="http://prototyping.local/images/favicon.png">
<!-- базовые стили -->
<link href="http://prototyping.local/css/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="http://prototyping.local/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet">
<!-- это кастомизация темы, изменения и докруты классов -- сюда -->
<link href="http://prototyping.local/css/bootstrap/theme.css" rel="stylesheet">
 <link href="http://prototyping.local/css/bootstrap/bootstrap-select.css" rel="stylesheet">
<script src="http://prototyping.local/js/jquery.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="http://prototyping.local/js/bootstrap/ie10-viewport-bug-workaround.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="js/bootstrap/html5shiv.min.js"></script>
<script src="js/bootstrap/respond.min.js"></script>
<![endif]-->
<script src="http://prototyping.local/js/bootstrap/bootstrap.min.js"></script>
<script src="http://prototyping.local/js/bootstrap/bootstrap-select.js"></script>
</head>
<body role="document">
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-collapse collapse">
			<div class="pull-left" style="margin-top: 5px;"><img src="http://prototyping.local/images/favicon.png" style="height: 25px; margin-left: 3px;"><br>ЭДС</div>
				<ul class="nav navbar-nav navbar-left">
					<li><a href="#">Задачи</a></li>
					<li><a href="#">Корреспонденция</a></li>
				</ul>
			<div class="dropdown navbar-btn pull-left" style="margin-left: 10px;">
				<button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">Инструменты <span class="caret"></span></button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Хэш-суммы файлов (md5)</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Подсчет листов в PDF-файлах</a></li>
				</ul>
			</div>
			<a class="btn btn-default navbar-btn pull-right" href="#" title="Завершение сеанса пользователя">Выход</a>
		</div>
	</div>
</div>
<div class="container theme-showcase" role="main">
	<h4>Короткая справка по прототипированию</h4>
	<p>
		<strong>1. Я хочу прототипировать СТРАНИЦУ, что мне делать и как её потом открыть?</strong><br>
		Все страницы находятся по пути <strong>application<?=DIRECTORY_SEPARATOR?>views<?=DIRECTORY_SEPARATOR?>pagename.php</strong>. В данном файле должно находиться полное содержимое страницы от &lt;!DOCTYPE html&gt; до &lt;/body&gt; со всеми нужными CSS-стилями и JS-файлами.<br />
		Чтобы открыть эту страницу нужно ввести в браузере: http://server/(folder)/index.php/page/show/pagename
	</p>
	<p>
		<strong>2. Мне нужно сделать запрос к серверу, что нужно для этого?</strong><br>
		Запросы к серверу делаются СТРОГО в формате ответа json.<br>
		Прежде необходимо подготовить данные в формате json, сохранить в текстовый файл и положить в директорию <strong>application<?=DIRECTORY_SEPARATOR?>datasets</strong><br />
		Чтобы открыть эту страницу нужно ввести в браузере: http://server/(folder)/index.php/api/data/load/setname <br />
		где setname это имя файла содержащего нужные данные данные.<br />
		<br />
		Чтобы сохранять файлы в подпапках схема URL будет чере двоеточие, пример:<br />
		<strong>application<?=DIRECTORY_SEPARATOR?>datasets<?=DIRECTORY_SEPARATOR?>test<?=DIRECTORY_SEPARATOR?>example2</strong> => http://server/(folder)/index.php/api/data/load/test:example2
	</p>
	<p>
		<strong>3. Мне нужна javascript библиотека или CSS-файл?</strong><br>
		Можно добавить, но прежде нужно проверить в директориях js и css, возможно они уже есть.
	</p>
</div>
</body>
</html>