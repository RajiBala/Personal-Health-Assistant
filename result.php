<?php
define('DB_NAME','pha');
define('DB_USER','root');
define('DB_PASSWORD','root');
define('DB_HOST','localhost');
$link=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

   if(! $link )
   {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * from p_status';
   mysql_select_db('pha');
   $retval = mysql_query( $sql, $link );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   
while($row = mysql_fetch_array($retval, MYSQL_NUM))
   {
      echo "PERSON ID :{$row[0]}  <br> ".
         "HIGH BP : {$row[1]} <br> ".
         "LOW BP : {$row[2]} <br> ".
		 "THYROID : {$row[3]} <br> ".
		 "ANAEMIA : {$row[4]} <br> ".
		 "DIABETES : {$row[5]} <br> ".
         "--------------------------------<br>";
   }
   
   echo ".......Thanks for visiting ...........\n";
   
   mysql_close($link);
?>