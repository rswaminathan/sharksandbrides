<div class="page-header">
  <h1> Seed database </h1>
</div>

<?

//GENERATE SHARKS
$malenames = array("Liam", "Noah", "Aiden", "Jackson", "Caleb", "Oliver", "Grayson", "Ethan", "Alexander", "Owen");
$categories = array("Great White", "Tiger", "Whale", "Bull", "Hammerhead", "Goblin", "Mako", "Blue", "Lemon", "Basking", "Megamouth", "Prehistoric");
$genders = array("Male", "Female");

for($i = 0; $i< 1000; $i++){
  $name = $malenames[array_rand($malenames)];
  $category = $categories[array_rand($categories)];
  $gender = $genders[array_rand($genders)];

  $sql = "INSERT INTO Sharks(item_id, name, age, category, gender, aquarium_id, price) VALUES(" . $i . ", '" . $name . "', " . rand(0,99) . ", '" . $category . "', '" . $gender . "', " . rand(0,50) . ", " . rand(50,99) . ")";
  $r = mysql_query($sql);
  
  if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
  }
}

//BRIDES TABLE
$femalenames = array("Charlotte", "Sophia", "Amelia", "Olivia", "Ava", "Lily", "Emma", "Scarlett", "Audrey", "Harper");

for($i = 0; $i< 1000; $i++){
  $name = $femalenames[array_rand($femalenames)];
  $gender = $genders[array_rand($genders)];

  $sql = "INSERT INTO RussianBrides(item_id, name, age, ssn, gender, city_id, price, weight) VALUES(" . $i . ", '" . $name . "', " . rand(0,99) . ", " . rand(100000000, 999999999) . ", '" . $gender . "', " . rand(1,10) . ", " . rand(50,99) . ", " . rand(80, 450) . ")";
  $r = mysql_query($sql);
  
  if(!$r){
    echo "<div class='alert alert-error'> An error occured seeding the database</div>";
    echo mysql_error();
    exit;
  }
}

//GENERATE AQUARIUMS
$aquariums = array("Pacific", "South", "Atlantic", "West", "North", "East", "Green", "Blue", "Red", "Arctic");
$genders = array("Male", "Female");

for($i = 0; $i< 50; $i++){
  $aquarium = $aquariums[array_rand($malenames)];
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

?>

<p> Inserted 1000 random sharks into database. </p>
<p> Inserted 1000 random russian brides into database. </p>
<p> Inserted 50 random aquariums into database. </p>
<p> Inserted 50 random hometowns into database. </p>