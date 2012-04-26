<div class="page-header">
  <h1> Seed database </h1>
</div>

<?

//GENERATE SHARKS
$malenames = array("Liam", "Noah", "Aiden", "Jackson", "Caleb", "Oliver", "Grayson", "Ethan", "Alexander", "Owen", "Art", "Kevin", "Rahul", "Richard");
$categories = array("Great White", "Tiger", "Whale", "Bull", "Hammerhead", "Goblin", "Mako", "Blue", "Lemon", "Basking", "Megamouth", "Prehistoric");
$genders = array("Male", "Female");

for($i = 0; $i< 1000; $i++){
  $name = $malenames[array_rand($malenames)];
  $category = $categories[array_rand($categories)];
  $gender = $genders[array_rand($genders)];

  $sql = "INSERT INTO Sharks(item_id, name, age, category, gender, aquarium_id, picture_id) VALUES(" . $i . ", '" . $name . "', " . rand(0,99) . ", '" . $category . "', '" . $gender . "', " . rand(0,50) .",".rand(1,20).")";
  $r = mysql_query($sql);

  if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
  }
}

//ADD WEBSITE
$sql = "INSERT INTO Sharks(item_id, name, age, category, gender, aquarium_id, picture_id) VALUES(-1, 'Website', 1, '" . $category . "', '" . $gender . "', " . rand(0,50) .",".rand(1,20).")";
$r = mysql_query($sql);

if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
}

$sql = "INSERT INTO Products(item_id, type, description, price, percent_off) VALUES(-1, 'shark', 'Website. This one.', 1000000, 0)";
$r = mysql_query($sql);

if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
}


//BRIDES TABLE
$femalenames = array("Charlotte", "Sophia", "Amelia", "Olivia", "Ava", "Lily", "Emma", "Scarlett", "Audrey", "Harper", "Jennifer", "Sara", "Sarah");

for($i = 0; $i< 1000; $i++){
  $name = $femalenames[array_rand($femalenames)];
  $gender = $genders[array_rand($genders)];

  $sql = "INSERT INTO RussianBrides(item_id, name, age, ssn, gender, city_id, weight, picture_id) VALUES(" . $i . ", '" . $name . "', " . rand(0,99) . ", " . rand(100000000, 999999999) . ", '" . $gender . "', " . rand(1,10) . ", " . rand(80, 450) . "," . rand(21,40). ")";
  $r = mysql_query($sql);

  if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
  }
}

//PRODUCTS TABLE
for($i = 0; $i< 1000; $i++){
  $sql = "INSERT INTO Products(item_id, type, description, price, percent_off) VALUES(" . $i . ", 'shark', 'I am shark.', " . rand(50,12000) . ", 0)";
  $r = mysql_query($sql);

  if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
  }

  $sql = "INSERT INTO Products(item_id, type, description, price, percent_off) VALUES(" . $i . ", 'bride', 'Call me.', " . rand(50,12000) . ", 0)";
  $r = mysql_query($sql);

  if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
  }
}

//GENERATE AQUARIUMS
$aquariums = array("Pacific", "South", "Atlantic", "West", "North", "East", "Green", "Blue", "Red", "Arctic", "Flame", "Shooting Moon", "Highest Tide", "Shining Sun", "Pirate Bay", "Purple Tide", "Red Tide", "Blue Tide", "High Tide", "Aquarium1", "Aquarium2", "Aquarium3", "GenericAquarium1", "GenericAquarium1.0");
$genders = array("Male", "Female");

for($i = 0; $i< 50; $i++){
  $aquarium = $aquariums[array_rand($aquariums)];
  $trainer = $malenames[array_rand($malenames)];
  $manager = $malenames[array_rand($malenames)];


  $sql = "INSERT INTO Aquariums(aquarium_id, date_founded, manager, trainer, name) VALUES(" . $i . ", '" . rand(1900,2011) . "-" . rand(1,12) . "-" . rand(1, 28) . "', '" . $manager . "', '" . $trainer . "', '" . $aquarium . "')";
  $r = mysql_query($sql);

  if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
  }
}

//GENERATE HOMETOWNS
$hometowns = array("Abakan", "Balashov", "Claremont", "Dudinka", "Elista", "Izhevsk", "Kaliningrad", "Kaluga", "Maysky", "Moscow", "Novy Urengoy", "Reutov");

for($i = 1; $i<= 10; $i++){
  $mayor = $malenames[array_rand($malenames)];
  $sql = "INSERT INTO Hometowns(city_id, name, population, mayor) VALUES(" . $i . ", '" . $hometowns[$i] . "', " . rand(90000, 9000001) . ", '" . $mayor . "')";
  $r = mysql_query($sql);

  if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
  }
}

//GENERATE SPECIALS
$random_sid = array(rand(1,100), rand(101,200), rand(201,300), rand(301,400), rand(401,500), rand(501,600), rand(601,700), rand(701,800), rand(801,900), rand(901,999));
$random_bid = array(rand(1,100), rand(101,200), rand(201,300), rand(301,400), rand(401,500), rand(501,600), rand(601,700), rand(701,800), rand(801,900), rand(901,999));

for($i = 0; $i< 10; $i++){
  $sql = "INSERT INTO Specials(special_id, percent_off, shark_id, bride_id) VALUES(" . $i . ", '" . rand(5,95) . "', " . $random_sid[$i] . ", '" . $random_bid[$i] . "')";
  $r = mysql_query($sql);

  if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
  }

  $sql = "UPDATE Sharks SET special_id=" . $i . " WHERE item_id='" . $random_sid[$i] ."'";
  $r = mysql_query($sql);

  if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
  }

  $sql = "UPDATE RussianBrides SET special_id=" . $i . " WHERE item_id='" . $random_bid[$i] . "'";
  $r = mysql_query($sql);

  if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
  }
}

//MAKE PICTURES TABLE
$picture_width = 200;
$picture_height = 200;
for($i = 1; $i< 21; $i++){
  $picture_id = $i;
  $picture_url = "sharks/shark".$i.".jpg";
  $picture_type = "shark";
  $sql = "INSERT INTO Pictures(picture_id, picture_url, picture_width, picture_height, picture_type) VALUES(".$picture_id.", '" . $picture_url . "', " . $picture_width . ", " . $picture_height . ", '" . $picture_type . "')";
  $r = mysql_query($sql);

  if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
  }
}
for($i = 1; $i< 21; $i++){
  $picture_id = $i+20;
  $picture_url = "brides/bride".$i.".jpg";
  $picture_type = "bride";
  $sql = "INSERT INTO Pictures(picture_id, picture_url, picture_width, picture_height, picture_type) VALUES(".$picture_id.", '" . $picture_url . "', " . $picture_width . ", " . $picture_height . ", '" . $picture_type . "')";
  $r = mysql_query($sql);

  if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
  }
}

//Shipping methods
	$sql = "INSERT INTO ShippingMethods(shipping_id, shipper_name, shipment_type, shipment_cost) VALUES("."0". " , " . "'Little Red Riding Hood'" . ", " . "'Yesterday Delivery '". ", " . "1000" . ")";
	echo $sql;
	$r = mysql_query($sql);
if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
	}
	$sql = "INSERT INTO ShippingMethods(shipping_id, shipper_name, shipment_type, shipment_cost) VALUES("."1". " , " . "'Tron Bike'" . ", " . "'Seizure Inducing'". ", " . "80" . ")";
	
  $r = mysql_query($sql);
  
if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
	}
	$sql = "INSERT INTO ShippingMethods(shipping_id, shipper_name, shipment_type, shipment_cost) VALUES("."2". " , " . "'Carrier Pidgeon'" . ", " . "'Four Months'". ", " . "200" . ")";
  $r = mysql_query($sql);
  
if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
	}
	$sql = "INSERT INTO ShippingMethods(shipping_id, shipper_name, shipment_type, shipment_cost) VALUES("."3". " , " . "'There Can Only Be One'" . ", " . "'Highlander Delivery '". ", " . "10000" . ")";
	
  $r = mysql_query($sql);
if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
}
	$sql = "INSERT INTO ShippingMethods(shipping_id, shipper_name, shipment_type, shipment_cost) VALUES("."4". " , " . "'Cannon'" . ", " . "'Objects May Be Slightly Damaged'". ", " . "200" . ")";
	$r = mysql_query($sql);
	
if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
	}
?>
<p> Inserted 1000 random sharks into database. </p>
<p> Inserted 1000 random russian brides into database. </p>
<p> Inserted 50 random aquariums into database. </p>
<p> Inserted 10 random hometowns into database. </p>
<p> Inserted 10 random combo specials (today's deals) into database. </p>
<p> Added pictures to picture table </p>
