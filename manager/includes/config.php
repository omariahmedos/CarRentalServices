<?php 
// DB credentials.
/*define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','carrental');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}*/

// $conn = mysqli_connect("localhost","root","","carrental") or die("db err");

define('DB_HOST',$_SERVER['RDS_HOSTNAME']);
define('DB_USER',$_SERVER['RDS_USERNAME']);
define('DB_PASS',$_SERVER['RDS_PASSWORD']);
define('DB_NAME',$_SERVER['RDS_DB_NAME']);
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

$conn = mysqli_connect('ddac-db.cwcalt25nmc3.us-east-1.rds.amazonaws.com', 'admin', 'ddac1234', 'carrental', 3306);

?>