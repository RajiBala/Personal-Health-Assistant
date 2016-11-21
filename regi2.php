<form action="fromregister.php" method="post">
<p>u r successfully registered..</p>
<p><input type="submit" value="click to continue"/></p>
</form>
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

$value =$_POST['usr'];
$value2=$_POST['pwd'];
$value3=$_POST['age'];
$value4=$_POST['gender'];
$value5=$_POST['phno'];
$value6=$_POST['email'];

$sql="insert into pregi(usr,pwd,age,gender,phno,email) values('$value','$value2','$value3','$value4', '$value5' ,'$value6');";
if(!mysql_query($sql)){
   die('Error:'. mysql_error());
}
mysql_close();

?>
