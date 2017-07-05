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
<script type="text/javascript">
		var str_spec = '';
		$.ajax({	 
	        	url: 'index.php/api/data/load/task:list',
	        	dataType: 'json',
	  			success: function(answ){
	  				$('#go').empty();
	  				$.each(answ, function (index, value) {
	  					str_spec = '';
	  					str_spec += '<tr><td><span class="' + value.type + '" aria-hidden="true"></span></td><td>' + value.task +'</td><td>' + value.date_p + '</td><td>' + value.date_r + '</td></tr>'
	  				  $('#go').append(str_spec);
					});
	           	}

	      });
</script>
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
	<h2>Задачи</h2>
	<div class="row">
		<div class="col-xs-9">
			<ul class="nav nav-tabs " role="tablist">
	            <li role="presentation" class="active"><a href="#One" aria-controls="One" role="tab" data-toggle="tab">У меня в работе</a></li>
	            <li role="presentation"><a href="#Two" aria-controls="Two" role="tab" data-toggle="tab">Поставленные мною</a></li>
	        </ul>
		</div>
		<div class="col-xs-3">
			 <select class="selectpicker " data-live-search="true" standard title="Фамилия">
			    <optgroup label="ФИО">
			        <option>Балаев Антип Игнатиевич</option>
			        <option>Агафонов Родион Герасимович</option>
			        <option>Щербакова Жанна Юлиевна</option>
			        <option>Маслака Кира Алексеевна</option>
			        <option>Сигаев Прохор Фролович</option>
			        <option>Бореев Константин Сократович</option>
			    </optgroup>
			   </select>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
		<div class="tab-content ">
            <div role="tabpanel" class="tab-pane active" id="One">
            	<div class="row">
            		<div class="table-responsive">
					  <table class="table">
					    <thead>
					    	<tr>
					    		<th>Тип</th>
					    		<th>Задача</th>
					    		<th>Срок планируемый</th>
					    		<th>Срок реальный</th>
					    	</tr>
					    </thead>
					    <tbody id="go">
					    </tbody>
					  </table>
					</div>
            	</div>
            </div>
			<div role="tabpanel" class="tab-pane" id="Two">
            	gggggg
            </div>
        </div>
        </div>
	</div>


</div>
</body>
</html>