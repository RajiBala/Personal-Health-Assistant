<?php
define('DB_NAME','pha');
define('DB_USER','root');
define('DB_PASSWORD','root');
define('DB_HOST','localhost');
$link=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link){
  die('could not connect:'. mysqlerror());
}

$db_selected=mysql_select_db(DB_NAME, $link);


if(!$db_selected){
  die('can\'t use '. DB_NAME .': '. mysqlerror());
}

$value =$_POST['ht'];
$value2=$_POST['wt'];
$sql="insert into bmi(ht,wt) values('$value','$value2');";
if(!mysql_query($sql)){
   die('Error:'. mysql_error());
}
echo 'your bmi is';

mysql_close();

?>
