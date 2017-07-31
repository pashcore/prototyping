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
<script type="text/javascript" src="/js/fadeSlideShow.js"></script>
<link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/css/bootstrap/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">
<link href="/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link href="/css/bootstrap/theme.css" rel="stylesheet" media="screen">
<link href="/css/bootstrap/bootstrap-select.css" rel="stylesheet" media="screen">
<link href="/js/select2/select2.css" rel="stylesheet" media="screen">
<link href="/css/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">
<link href="/css/demoStyleSheet.css" rel="stylesheet" type="text/css" />



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
jQuery(document).ready(function(){
  jQuery('#slideshow').fadeSlideShow();
});
</script>
</head>
<body role="document">

<div id="slideshowWrapper">
    <ul id="slideshow">
      <li>
        <div style="background-image: url(/img/5.jpg); height: 700px; width: 500px;background-size: contain;">
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
      </li>
        <li>
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
        </li> <!-- This is the last image in the slideshow -->
        <li>
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
        </li>
        <li>
<div style="background-image: url(/img/2.jpg); height: 700px; width: 500px; background-size: contain;">
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
        </li>
        <li>
<div style="background-image: url(/img/1.jpg); height: 700px; width: 500px; background-size: contain;">
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
        </li>
    </ul><br clear="all" />
</div>

</body>
</html>