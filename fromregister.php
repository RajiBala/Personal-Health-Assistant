
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/base2.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<body>
	<br>
	<br>
<br><br><br><br><br>
<a href="http://www.donateanorgan.com/" target="rightframe"><input type="button" value="DONATE ORGAN" /></a>
<br><br><br><br><br>
<div class="col-md-12">
	<button id="myButton2" type="button" class="btn btn-default">TAKE TEST</button>
</div>
<br><br><br><br><br>
<div class="col-md-12">
	<button id="myButton4" type="button" class="btn btn-default">BMI</button>
</div>
</div>
<script type="text/javascript">
    document.getElementById("myButton2").onclick = function () {
        location.href = "taketest.php";
    };
</script>
<script type="text/javascript">
    document.getElementById("myButton4").onclick = function () {
        location.href = "bmi.php";
    };
</script>
</body>


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

$a="select * from pregi where usr='$value' and pwd='$value2'";
if (!$a){
  echo 'hello';}
if(!mysql_query($a)){
   die('Error:'. mysql_error());
}


mysql_close();

?>
