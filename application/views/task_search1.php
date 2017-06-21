<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<base href="http://prototyping.local/">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Заглавная страница</title>
<link rel="icon" href="images/favicon.png">
<!-- базовые стили -->
<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap/bootstrap-theme.min.css" rel="stylesheet">
<!-- это кастомизация темы, изменения и докруты классов -- сюда -->
<link href="css/bootstrap/theme.css" rel="stylesheet">
<link href="css/bootstrap/bootstrap-select.css" rel="stylesheet">
<link href="css/bootstrap/bootstrap-datetimepicker.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/bootstrap/ie10-viewport-bug-workaround.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="js/bootstrap/html5shiv.min.js"></script>
<script src="js/bootstrap/respond.min.js"></script>
<![endif]-->

<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/bootstrap/bootstrap-select.js"></script>
<script src="js/moment-with-locales.js"></script>
<script src="js/bootstrap/bootstrap-datetimepicker.min.js"></script>

</head>
<body role="document">
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-collapse collapse">
			<div class="pull-left" style="margin-top: 5px;"><img src="images/favicon.png" style="height: 25px; margin-left: 3px;"><br>ЭДС</div>
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
	<h2>Поиск</h2>

	<div class="form-group">
	    <label for="inputTxt1" class="col-sm-2 control-label">Текст задачи</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="inputTxt1" placeholder="Текст задачи">
	    </div>
	</div>

	<div class="form-group">
	  <label class="col-sm-4 control-label">Специальность исполнителя</label>
	  <div class="col-sm-3">
	  <select class="form-control">
		  <option>1</option>
		  <option>2</option>
		  <option>3</option>
		  <option>4</option>
		  <option>5</option>
		</select>
		</div>
	</div>
	<div class="form-group">
	    <label for="inputTxt2" class="col-sm-2 control-label">Исполнитель</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="inputTxt2" placeholder="Исполнитель">
	    </div>
	</div>
	<div class="form-group">
	    <label for="inputTxt3" class="col-sm-2 control-label">Проверяющий</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="inputTxt3" placeholder="Проверяющий">
	    </div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">Дата</label>
	    
	        <div class='col-sm-5'>
	            <div class="form-group">
	                <div class='input-group date' id='datetimepicker2'>
	                    <input type='text' class="form-control" />
	                    <span class="input-group-addon">
	                        <span class="glyphicon glyphicon-calendar"></span>
	                    </span>
	                </div>
	            </div>
	        </div>
	        <script type="text/javascript">
	            $(function () {
	                $('#datetimepicker2').datetimepicker({
	                    locale: 'ru',
	                    format: 'DD/MM/YYYY'

	                });
	            });
	        </script>
	    
	</div>
	<div class="form-group">
	    <label for="inputTxt4" class="col-sm-3 control-label">Номенклатурная группа</label>
	    <div class="col-sm-9">
	      <input type="text" class="form-control" id="inputTxt4" placeholder="Номенклатурная группа">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label">Статус задачи</label>
	    <div class="col-sm-2">
	      <label>
		    <input type="checkbox" value="Черновик">
		    Черновик
		  </label>
	    </div>
	    <div class="col-sm-2">
	      <label>
		    <input type="checkbox" value="В работе">
		    В работе
		  </label>
	    </div>
	    <div class="col-sm-3">
	      <label>
		    <input type="checkbox" value="Приостановлена">
		    Приостановлена
		  </label>
	    </div>
	    <div class="col-sm-2">
	      <label>
		    <input type="checkbox" value="Закрыта">
		    Закрыта
		  </label>
	    </div>
	  </div> 

	<button type="button" class="btn btn-primary">Поиск</button>

	<div class="table-responsive">
	  <table class="table">
	    ...
	  </table>
	</div>
</div>
</body>
</html>


