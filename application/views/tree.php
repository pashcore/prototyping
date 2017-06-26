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
<script src="js/bootstrap/bootstrap-treeview.js"></script>
<script src="js/moment-with-locales.js"></script>
<script src="js/bootstrap/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
		$(function() {

        var defaultData = [
          {
            text: 'Parent 1',
            href: '#parent1',
            tags: ['4'],
            nodes: [
              {
                text: 'Child 1',
                href: '#child1',
                tags: ['2'],
                nodes: [
                  {
                    text: 'Grandchild 1',
                    href: '#grandchild1',
                    tags: ['0']
                  },
                  {
                    text: 'Grandchild 2',
                    href: '#grandchild2',
                    tags: ['0']
                  }
                ]
              },
              {
                text: 'Child 2',
                href: '#child2',
                tags: ['0']
              }
            ]
          },
          {
            text: 'Parent 2',
            href: '#parent2',
            tags: ['0']
          },
          {
            text: 'Parent 3',
            href: '#parent3',
             tags: ['0']
          },
          {
            text: 'Parent 4',
            href: '#parent4',
            tags: ['0']
          },
          {
            text: 'Parent 5',
            href: '#parent5'  ,
            tags: ['0']
          }
        ];

        $('#treeview1').treeview({
          data: defaultData
        });
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
	<div class="row">
		<div class="col-xs-12">
			<div class="row">
			<div id="treeview1" class="col-xs-4"></div>
			<div "col-xs-8" > 
				<div class="row">
				<ul class="nav nav-tabs col-xs-7" role="tablist">
				   	<li role="presentation" class="active"><a href="#One" aria-controls="One" role="tab" data-toggle="tab">One</a></li>
				    <li role="presentation"><a href="#Two" aria-controls="Two" role="tab" data-toggle="tab">Two</a></li>
				    <li role="presentation"><a href="#messages" aria-controls="Three" role="tab" data-toggle="tab">Three</a></li>
				    <li role="presentation"><a href="#Four" aria-controls="Four" role="tab" data-toggle="tab">Four</a></li>
 				</ul>
 				
 				<div class="tab-content col-xs-7 ">
  					<div role="tabpanel" class="tab-pane active" id="One">...</div>
				 	<div role="tabpanel" class="tab-pane" id="Two">..ваепвапв.</div>
				    <div role="tabpanel" class="tab-pane" id="messages">...</div>
				    <div role="tabpanel" class="tab-pane" id="Four">...</div>
				</div>
				</div>
			</div>
			</div>
		</div>
	</div>

</div>
</body>
</html>


