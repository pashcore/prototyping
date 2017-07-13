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
<link href="css/bootstrap/bootstrap-treeview.css" rel="stylesheet">
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
<script src="js/bootstrap/bootstrap-treeview.js"></script>
<script type="text/javascript">
  $(function () {
 
    $('#1').click(function(){
      $("#dd").each(function(){
        $(this).append('</tr> <tr id="add_row"><td></td><td><input type="text" class="form-control" placeholder="название"></td><td><input type="text" class="form-control" placeholder="число"></td><td><input type="text" class="form-control" placeholder="Процент"></td></tr> ');
      });
    });

  });



 


</script>

 <style type="text/css">

 /* layout.css Style */
.upload-drop-zone {
  height: 200px;
  border-width: 2px;
  margin-bottom: 20px;
}

/* skin.css Style*/
.upload-drop-zone {
  color: #ccc;
  border-style: dashed;
  border-color: #ccc;
  line-height: 200px;
  text-align: center
}
.upload-drop-zone.drop {
  color: #222;
  border-color: #222;
}

</style>
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
  <div class="row">
    <h3>Фонд оплаты труда</h3>
  </div>
  <div class="row">
    <div>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th class="col-md-7">Название</th>
            <th class="col-md-3">Число</th>
            <th class="col-md-2">Процент</th>
          </tr>
        </thead>
        <tbody id="dd">
          <tr id="">
            <td><a class="btn btn-default" role="button"  id="1"><span class="glyphicon glyphicon-plus"></span></a></td>
            <td><input type="text" class="form-control" placeholder="Чашка"> </td>
            <td><input type="text" class="form-control" placeholder="30 000"></td>
            <td><input type="text" class="form-control" placeholder="30%"></td>
          </tr>
        </tbody>
      </table>
    </div>
    
  </div>

</div>
</body>
</html>