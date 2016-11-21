<form action="result.php" method="post">
<p>your test is being processed..</p>
<p><input type="submit" value="click to view your results.."/></p>
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

$value =$_POST['rbc'];
$value2=$_POST['wbc'];
$value3=$_POST['plt'];
$value4=$_POST['fst'];
$value5=$_POST['pst'];
$value6=$_POST['hgb'];
$value7=$_POST['tgd'];
$value8=$_POST['clt'];
$value9=$_POST['ldl'];
$value10=$_POST['hdl'];
$value11=$_POST['ldlhdl'];
$value12=$_POST['tsh'];
$value13=$_POST['t3'];
$value14=$_POST['t4'];

$sql="insert into temp(rbc,wbc,plt,fst,pst,hgb,tgd,clt,ldl,hdl,ldlhdl,tsh,t3,t4) values('$value','$value2','$value3','$value4', '$value5' ,'$value6','
$value7','$value8','$value9', '$value10' ,'$value11','$value12','$value13','$value14');";
if(!mysql_query($sql)){
   die('Error:'. mysql_error());
}
mysql_close();

?>
