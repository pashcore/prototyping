<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$datetimepick=isset($_POST['datetimepick'])?$_POST['datetimepick']:'';
$textarea=isset($_POST['textarea'])?$_POST['textarea']:'';
$executors=isset($_POST['executors'])?$_POST['executors']:'';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Тут я балуюсь..</title>
<link rel="icon" href="/images/favicon.png">
<!-- базовые стили -->
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/moment-with-locales.js" charset="UTF-8"></script>
<script type="text/javascript" src="/js/bootstrap/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="/js/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/select2/select2.min.js"></script>
<script type="text/javascript" src="/js/select2/select2_locale_ru.js"></script>
<link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/css/bootstrap/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">
<link href="/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link href="/css/bootstrap/theme.css" rel="stylesheet" media="screen">
<link href="/css/bootstrap/bootstrap-select.css" rel="stylesheet" media="screen">
<link href="/js/select2/select2.css" rel="stylesheet" media="screen">
<link href="/css/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">



<script type="text/javascript" src="/js/bootstrap/bootstrap-select.js"></script>
<!-- это кастомизация темы, изменения и докруты классов сюда -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="/js/bootstrap/ie10-viewport-bug-workaround.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="js/bootstrap/html5shiv.min.js"></script>
<script src="js/bootstrap/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">
    $( document ).ready(function() {
    $('#datetimepicker1').datetimepicker({locale:'ru'});
    $('#datetimepicker2').datetimepicker({locale:'ru'});
    $('#datetimepicker3').datetimepicker({locale:'ru'});
    $('.executors').select2({placeholder: "Исполнители"});
}); 
function fun1(vamy) {
      $.ajax({
          url: '/index.php/api/data/load/task:task1',
          type: 'GET',
          dataType: 'json',
          success: function (answ) {
　　　　　　　　   $.each(answ, function (index, value) {
                $('#task1_text').empty();
                $('#task1_text').append(value.task_text);
                $('#task1_deadline').val(value.deadline);
                $('#task1_facttime').val(value.fact_time);
                $('#task1_executor').empty();
                $('#task1_executor').append(value.executor);
                $('#task1_comment').empty();
                $('#task1_comment').append(value.comment);
              });
            }
        });
} 
function fun2(var_my) {
      $.ajax({
          url: '/index.php/api/data/load/task:task2',
          type: 'GET',
          dataType: 'json',
          success: function (answ) {
　　　　　　　　   $.each(answ, function (index, value) {
                $('#task2_text').empty();
                $('#task2_text').append(value.task_text);
                $('#task2_deadline').val(value.deadline);
                $('#task2_facttime').val(value.fact_time);
                $('#task2_executor').empty();
                $('#task2_executor').append(value.executor);
                $('#task2_comment').empty();
                $('#task2_comment').append(value.comment);
              });
            }
        });
} 
function fun3(var_my) {
      $.ajax({
          url: '/index.php/api/data/load/task:task3',
          type: 'GET',
          dataType: 'json',
          success: function (answ) {
　　　　　　　　   $.each(answ, function (index, value) {
                $('#task3_text').empty();
                $('#task3_text').append(value.task_text);
                $('#task3_deadline').val(value.deadline);
                $('#task3_facttime').val(value.fact_time);
                $('#task3_executor').empty();
                $('#task3_executor').append(value.executor);
                $('#task3_comment').empty();
                $('#task3_comment').append(value.comment);
              });
            }
        });
} 
function fun4(var_my) {
      $.ajax({
          url: '/index.php/api/data/load/task:task4',
          type: 'GET',
          dataType: 'json',
          success: function (answ) {
　　　　　　　　   $.each(answ, function (index, value) {
                $('#task4_text').empty();
                $('#task4_text').append(value.task_text);
                $('#task4_deadline').val(value.deadline);
                $('#task4_facttime').val(value.fact_time);
                $('#task4_executor').empty();
                $('#task4_executor').append(value.executor);
                $('#task4_comment').empty();
                $('#task4_comment').append(value.comment);
              });
            }
        });
} 
function saveAsFile(id){
  window.open('/img/' + id + '/file');
}
</script>
</head>
<body role="document">

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-collapse collapse">
			<div class="pull-left" style="margin-top: 5px;"><img src="/images/favicon.png" style="height: 25px; margin-left: 3px;"><br>ЭДС</div>
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
<header>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 back">
				<a class="btn btn-default navbar-btn pull-left" href="#" title="Предыдущая страница">Вернуться назад</a>
			</div>
			<div class="col-sm-4 empty"></div>
			<div class="col-sm-4 top_buttons"> 
        <a class="btn btn-default navbar-btn pull-right" href="#" title="Редактирование">Редактировать</a>
				<a class="btn btn-primary navbar-btn pull-right" href="#" title="Отправка сообщения">Ответить</a>
			
			</div>
		</div>
	</div>
</header>
<div class="container theme-showcase" role="main">
	<h2 align="center">Входящее № 1337 от -- 
  </h2>
</div>

<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div align="middle" class="active item">
      <div style="background-image: url(/img/1.jpg); height: 700px; width: 500px; border: 10px solid transparent; border-image: url(/img/test.png) 15 round; background-size: contain;">
      <div align="right" style="padding: 3px; position: relative; top: 10px; right: 10px;">
          <a href="#">
          <i class="fa fa-search-plus fa-lg" aria-hidden="true"></i>
          </a>
          <a href="#">
          <i class="fa fa-download fa-lg" aria-hidden="true"></i>
          </a>
          <a href="#">
          <i class="fa fa-trash fa-lg" aria-hidden="true"></i>
          </a>
      </div>
    </div>
    </div>
    <div align="middle" class="item">
      <div style="background-image: url(/img/2.jpg); height: 700px; width: 500px; border: 1px dashed black; background-size: contain;">
      <div align="right" style="padding: 3px; position: relative; top: 10px; right: 10px;">
          <a href="#">
          <i class="fa fa-search-plus fa-lg" aria-hidden="true"></i>
          </a>
          <a href="#">
          <i class="fa fa-download fa-lg" aria-hidden="true"></i>
          </a>
          <a href="#">
          <i class="fa fa-trash fa-lg" aria-hidden="true"></i>
          </a>
      </div>
    </div>
    </div>
    <div align="middle" class="item">
      <div style="background-image: url(/img/3.jpg); height: 700px; width: 500px; background-size: contain;">
      <div align="right" style="padding: 3px; position: relative; top: 10px; right: 10px;">
          <a href="#">
          <i class="fa fa-search-plus fa-lg" aria-hidden="true"></i>
          </a>
          <a href="#">
          <i class="fa fa-download fa-lg" aria-hidden="true"></i>
          </a>
          <a href="#">
          <i class="fa fa-trash fa-lg" aria-hidden="true"></i>
          </a>
      </div>
    </div>   
    </div>
    <div align="middle" class="item">
      <div style="background-image: url(/img/4.jpg); height: 700px; width: 500px; background-size: contain;">
      <div align="right" style="padding: 3px; position: relative; top: 10px; right: 10px;">
          <a href="#">
          <i class="fa fa-search-plus fa-lg" aria-hidden="true"></i>
          </a>
          <a href="#">
          <i class="fa fa-download fa-lg" aria-hidden="true"></i>
          </a>
          <a href="#">
          <i class="fa fa-trash fa-lg" aria-hidden="true"></i>
          </a>
      </div>
    </div>
    </div>
    <div align="middle" class="item">
      <div style="background-image: url(/img/5.jpg); height: 700px; width: 500px; border: 8px solid transparent; border-image: url(/img/border.png) 30 stretch; background-size: contain;">
      <div align="right" style="padding: 3px; position: relative; top: 10px; right: 10px;">
          <a href="#">
          <i class="fa fa-search-plus fa-lg" aria-hidden="true"></i>
          </a>
          <a href="#">
          <i class="fa fa-download fa-lg" aria-hidden="true"></i>
          </a>
          <a href="#">
          <i class="fa fa-trash fa-lg" aria-hidden="true"></i>
          </a>
      </div>
  </div>
</div>
</div>
  <!-- Carousel nav -->
<div class="container">
  <div style="background-image: url(/img/arrow2.png); height: 170px; width: 90px; background-size: cover; margin-left:23%; margin-top:10%;" class="carousel-control left" href="#myCarousel" data-slide="prev" >
  </div>
  <div style="background-image: url(/img/arrow1.png);height: 170px; width: 90px; background-size: cover; margin-right:23%; margin-top:10%;" class="carousel-control right" href="#myCarousel" data-slide="next">
  </div>
</div>
  
  
</div>
<div class="container" align="center">
  <a href="#"><h5>скачать одним архивом</h5></a>
</div>
<div class="container theme-showcase" role="main">
  <h2 align="center">Приложения<a href="#"><h5>добавить приложения</h5></a></h2>
</div>
<div class="row">
  <div class="header">
  	<div class="container">
  		<div class="row">
        <div class="container">
          <h2 align="center">Задачи:</h2>
        </div>
  				<table id="tab1" class="table table-striped table-hover" width="100%" border="0" cellpadding="5" cellspacing="0">
              <thead>
        <tr>
            <th>№</th>
            <th>Срок плановый / фактический</th>
            <th>Текст задачи</th>
            <th>Исполнитель</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><i class="fa fa-thumbs-up" aria-hidden="true"></i> 1</td>
            <td>20.01.16 / 21.01.16</td>
            <td>Без разницы</td>
            <td>Василий Альбертович Жмышенко</td>
            <td>
              <button onclick="fun1('lololo');" type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal1"><i class="fa fa-info" aria-hidden="true"></i>
</button>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1Label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1Label">Дополнительная информация</h4>
      </div>
      <div class="modal-body">
        <br><br>
          <div id="task1_text" style="border: 1px solid #ccc;"> Тут будет текст задачи</div>
          <br>
          <input id="task1_deadline" value=" Тут будет Крайний срок" />
          <br><br>
          <input id="task1_facttime" value=" Тут будет Фактич. срок" />
          <br><br>
          <div id="task1_executor" style="border: 1px solid #ccc;"> Тут будет исполнитель</div>
          <br>
          <div id="task1_comment" style="border: 1px solid #ccc;"> Тут будет комментарий исполнителя</div>
          <br><br>
          <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"></i>  Отмена</button>
        <button type="button" class="btn btn-success"> Сохранить</i>
          
      </div>
    </div>
      </div>
      
    </div>
  </div>
          </td>
            </tr>
        <tr>
            <td><i class="fa fa-thumbs-down" aria-hidden="true"></i> 2</td>
            <td>Дата 2</td>
            <td>Задача 2</td>
            <td>ФИО2</td>
            <td><button onclick="fun2('lololo');" type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal2"><i class="fa fa-info" aria-hidden="true"></i>
</button>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2Label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal2Label">Дополнительная информация</h4>
      </div>
      <div class="modal-body">
        <br><br>
          <div id="task2_text" style="border: 1px solid #ccc;"> Тут будет текст задачи</div>
          <br>
          <input id="task2_deadline" value=" Тут будет Крайний срок" />
          <br><br>
          <input id="task2_facttime" value=" Тут будет Фактич. срок" />
          <br><br>
          <div id="task2_executor" style="border: 1px solid #ccc;"> Тут будет исполнитель</div>
          <br>
          <div id="task2_comment" style="border: 1px solid #ccc;"> Тут будет комментарий исполнителя</div>
          <br><br>
          <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"></i>  Отмена</button>
        <button type="button" class="btn btn-success"> Сохранить</i>
          
      </div>
    </div>
      </div>
      
    </div>
  </div></td>
        </tr>
        <tr>
            <td><i class="fa fa-hourglass-end" aria-hidden="true"></i> 3</td>
            <td>Дата 3</td>
            <td>Задача 3</td>
            <td>ФИО3</td>
            <td><button onclick="fun3('lololo');" type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal3"><i class="fa fa-info" aria-hidden="true"></i>
</button>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3Label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal3Label">Дополнительная информация</h4>
      </div>
      <div class="modal-body">
        <br><br>
          <div id="task3_text" style="border: 1px solid #ccc;"> Тут будет текст задачи</div>
          <br>
          <input id="task3_deadline" value=" Тут будет Крайний срок" />
          <br><br>
          <input id="task3_facttime" value=" Тут будет Фактич. срок" />
          <br><br>
          <div id="task3_executor" style="border: 1px solid #ccc;"> Тут будет исполнитель</div>
          <br>
          <div id="task3_comment" style="border: 1px solid #ccc;"> Тут будет комментарий исполнителя</div>
          <br><br>
          <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"></i>  Отмена</button>
        <button type="button" class="btn btn-success"> Сохранить</i>
          
      </div>
    </div>
      </div>
      
    </div>
  </div></td>
        </tr>
        <tr>
          <td><i class="fa fa-fire" aria-hidden="true"></i> 4</td>
          <td>Дата 4</td>
          <td>Задача 4</td>
          <td>ФИО4</td>
          <td><button onclick="fun4('lololo');" type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal4"><i class="fa fa-info" aria-hidden="true"></i>
</button>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal4Label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal4Label">Дополнительная информация</h4>
      </div>
      <div class="modal-body">
        <br><br>
          <div id="task4_text" style="border: 1px solid #ccc;"> Тут будет текст задачи</div>
          <br>
          <input id="task4_deadline" value=" Тут будет Крайний срок" />
          <br><br>
          <input id="task4_facttime" value=" Тут будет Фактич. срок" />
          <br><br>
          <div id="task4_executor" style="border: 1px solid #ccc;"> Тут будет исполнитель</div>
          <br>
          <div id="task4_comment" style="border: 1px solid #ccc;"> Тут будет комментарий исполнителя</div>
          <br><br>
          <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"></i>  Отмена</button>
        <button type="button" class="btn btn-success"> Сохранить</i>
          
      </div>
    </div>
      </div>
      
    </div>
  </div></td>
        </tr>
        <tr>
          <td><div id="task5_task_id" name="task5_task_id"></div></td>
          <td><div id="task5_deadline" name="task5_deadline"><?php echo (isset($_POST["datetimepick"]) ? $_POST["datetimepick"] : '');?></div></td>
          <td><div id="task5_text" name="task5_text"><?php echo (isset($_POST["textarea"]) ? $_POST["textarea"] : '');?></div></td>
          <td><div id="task5_executor" name="task5_executor"><?php echo (isset($_POST["executors"]) ? $_POST["executors"] : '');?></div></td>

        </tr>
      </table>
      </td>
      </table>
    
 <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
              <i class="fa fa-plus" aria-hidden="true"></i>
</button>
<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Добавить задачу</h4>
      </div>
      <div class="modal-body">
        <div class="task_menu">
            <div class="container">
              <form id="taskname" action="letter_btn.php" method="post">
                <textarea id="textarea" name="textarea"  cols="76" rows="4" placeholder=" Наименование задачи..."></textarea>
            </div>
              
  <div class="container">
    <div class="row">
        <div class='col-md-6'>
            <div class="form-group">
                <div class='input-group date' id="datetimepicker1" name="datetimepicker1">
                    <input type="text" name="datetimepick" id="datetimepick" placeholder="Крайний срок:" class="form-control">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
  <select id="executors" name="executors" class="executors" style="width: 300px;" multiple>
    <option value="Валера">Челик 1</option>
    <option value="Алёша">Челик 2</option>
    <option value="Игорь">Челик 3</option>
    <option value="Егор">Челик 4</option> 
</select>
</div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"></i>  Отмена</button>
        <button type="submit" class="btn btn-success"></i>  Сохранить</button>
      </div>
    </div>
    </form>
  </div>
</div>
</div>
</div>
    </tbody>
</table>
        </div>
</div>
    		</div>
		</div>
  	</div>
  </div>
</div>

</body>
</html>