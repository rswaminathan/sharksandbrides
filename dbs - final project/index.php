<?
require_once ('db.php');
require_once('session.php');
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/static/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/static/custom.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"> </script>
  <script type="text/javascript" src="/static/bootstrap.min.js"> </script>
</head>
<body>
<?  require_once('header.php'); ?>

<div class="container">
<?
//Get page based on request string string
$url = $_SERVER['REQUEST_URI'];
//echo $url;

switch(true){
case($url == '/'):
  require_once('home.php');
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
case(preg_match('/employees/', $url)):
  require_once('employee.php');
  break;
default:
  $matches;
  preg_match('/\/index.php\/(.*)/', $url, $matches);
  require_once($matches[1] . ".php");
}
?>
</div>
<?
require_once('footer.php');
?>
</body>
</html>


