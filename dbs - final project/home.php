<div class="banner">
  <div class="row">
    <div class="span4">
      <h1> Beautiful and Deadly </h1>
    </div>
    <div class="span8">
    <div id="myCarousel" class="carousel">
      <div class="carousel-inner">
        <div class="active item"></div>
        <div class="item"></div>
        <div class="item"></div>
      </div>
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    </div>
  </div>
</div>

<?
$result = mysql_query('SELECT * FROM products');
echo mysql_error();

if (mysql_num_rows($result) == 0) {
  echo "Nothing found";
  exit;
}

?>

