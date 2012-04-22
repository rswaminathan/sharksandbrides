<? require_once ('db.php') ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/static/bootstrap.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"> </script>
<script type="text/javascript" src="/static/bootstrap.min.js"> </script>
</head>
<body>
<?
require_once('header.php');
?>

<div class="container">
<?
//Get page based on request string string
$url = $_SERVER['REQUEST_URI'];
//echo $url;

switch(true){
case($url == '/'):
  require_once('home.php');
  break;
case(preg_match('/seed_database/', $url)):
  require_once('insert_data.php');
  break;
case(preg_match('/search\/price/', $url)):
  $search_type = "Price";
  require_once('search_price.php');
  break;
case(preg_match('/search\/specs/', $url)):
  $search_type = "Specs";
  require_once('search_specs.php');
  break;
case(preg_match('/search\/manufacturer/', $url)):
  $search_type = "Manufacturer";
  require_once('search_manufacturer.php');
  break;
case(preg_match('/search\/budget/', $url)):
  $search_type = "Budget";
  require_once('search_budget.php');
  break;
case(preg_match('/create/', $url)):
  require_once('create.php');
  break;
case(preg_match('/employees/', $url)):
  require_once('employee.php');
  break;
case(preg_match('/employeereg/', $url)):
  require_once('employeereg.php');
  break;
case(preg_match('/employeegetpw/', $url)):
  require_once('employeegetpw.php');
  break;
}
?>
</div>
</body>
</html>

