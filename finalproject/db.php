<?
$con = mysql_connect("localhost:3306","root","homework");
if(!$con)
    {
    die('Could not connect: ' . mysqlerror());
    }

$db = mysql_select_db("finalproject");
echo mysql_error();
?>
