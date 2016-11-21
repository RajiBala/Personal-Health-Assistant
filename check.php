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
   
   $sql = "create table check(test_id number(30),tests varchar2(40),min_val float(40),
   max_val float(40));";
   mysql_select_db('pha');
   $retval = mysql_query( $sql, $link );
   
   $sql2 = "insert into check values(1,'rbc',3.77,5.28);";
   mysql_select_db('pha');
   $retval = mysql_query( $sql2, $link );
   
   $sql3 = "insert into check values(2,'wbc',4.02,10.5);";
   mysql_select_db('pha');
   $retval = mysql_query( $sql3, $link );
   
   $sql4 = "insert into check values(3,'platelets',140,415);";
   mysql_select_db('pha');
   $retval = mysql_query( $sql4, $link );
   
   $sql5 = "insert into check values(4,'fasting',);";
   mysql_select_db('pha');
   $retval = mysql_query( $sql5, $link );
   
    $sql6 = "insert into check values(5,'post');";
   mysql_select_db('pha');
   $retval = mysql_query( $sql6, $link );
   
    $sql7 = "insert into check values(6,'haemoglobin',11.1,15.9);";
   mysql_select_db('pha');
   $retval = mysql_query( $sql7, $link );
   
    $sql8 = "insert into check values(7,'triglycerides',0,114);";
   mysql_select_db('pha');
   $retval = mysql_query( $sql8, $link );
   
   $sql9 = "insert into check values(8,'cholestrol',100,189);";
   mysql_select_db('pha');
   $retval = mysql_query( $sql9, $link );
   
   $sql10 = "insert into check values(9,'ldl',0,119);";
   mysql_select_db('pha');
   $retval = mysql_query( $sql10, $link );
   
   $sql11 = "insert into check values(10,'hdl',39,59);";
   mysql_select_db('pha');
   $retval = mysql_query( $sql1, $link );
   
   $sql12 = "insert into check values(11,'ldl/hdl',);";
   mysql_select_db('pha');
   $retval = mysql_query( $sql12, $link );
   
      
   $sql12 = "insert into check values(11,'ldl/hdl',);";
   mysql_select_db('pha');
   $retval = mysql_query( $sql12, $link );
   
      
   $sql13 = "insert into check values(12,'tsh',0.450,4.500);";
   mysql_select_db('pha');
   $retval = mysql_query( $sql13, $link );
   
   $sql14 = "insert into check values(13,'t3',);";
   mysql_select_db('pha');
   $retval = mysql_query( $sql14, $link );
   
     $sql15 = "insert into check values(14,'t4',);";
   mysql_select_db('pha');
   $retval = mysql_query( $sql15, $link );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   echo "......TABLE SHOWING RANGE OF VALUES FOR TESTS......\n";
   while($row = mysql_fetch_array($retval, MYSQL_NUM))
   {
      echo "TEST ID :{$row[0]}  <br> ".
         "TEST : {$row[1]} <br> ".
         "MIN VALUE : {$row[2]} <br> ".
		 "MAX VALUE : {$row[3]} <br> ".
         "--------------------------------<br>";
	
   }
   
   $VAL1 = 
   
   $hbp = "";
   mysql_select_db('pha');
   $retval = mysql_query( $hbp, $link );
   
   
   
   
   
   
   mysql_close($LINK);
?>