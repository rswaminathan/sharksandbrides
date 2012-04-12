<div class="page-header">
  <h1> Seed database </h1>
</div>

<?
$makers = array("HP", "Dell", "Apple", "Sony", "Acer");
$types = array("PC", "Laptop", "Printer");
$rams = array(1, 2, 3, 4, 8);
$hds = array(80, 120, 180, 250, 500);
$screens = array(11, 12, 13, 15, 17);
$speeds = array(1, 2, 2.2, 2.5, 3);
$prices = array(400, 600, 800, 1200, 1600, 2000);
$printer_types = array("Inkjet", "Laser");

for($i = 0; $i< 1000; $i++){
  $rand_type = rand(0,2);


  $speed = $speeds[array_rand($speeds)];
  $price = $prices[array_rand($prices)];
  $printer_type = $printer_types[array_rand($printer_types)];
  $screen = $screens[array_rand($screens)];
  $hd = $hds[array_rand($hds)];
  $ram = $rams[array_rand($rams)];
  $type = $types[array_rand($types)];
  $maker = $makers[array_rand($makers)];

  $sql = "INSERT INTO products(maker, model, type) VALUES('{$maker }', '$i', '$types[$rand_type]')";

  //echo $sql;

  $product_sql = array();
  $product_sql[0] = "INSERT INTO pcs(model, speed, ram, hd, price) VALUES('$i',
  {$speed }, {$ram }, {$hd }, {$price })";

  $product_sql[1] = "INSERT INTO laptops(model, speed, ram, hd, screen, price) VALUES('$i',
  {$speed }, {$ram }, {$hd },{$screen },  {$price })";

  $rand = rand(0,1);
  $product_sql[2] = "INSERT INTO printers(model, color, type, price) VALUES('$i',
  {$rand}, '{$printer_type}',  {$price })";
  //echo $product_sql[2];


  $r1 = mysql_query($sql);
  $r2 = mysql_query($product_sql[$rand_type]);

  if(!$r1 || !$r2){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
  }
}
?>

<p> Inserted 1000 random values into database </p>
<a href="/"> See products </a>
