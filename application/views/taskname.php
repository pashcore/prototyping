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

</script>

</head>

</body>
</html>