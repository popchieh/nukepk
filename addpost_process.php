<?php

session_start();

include("connect.php");

// timestamp
// create
$date = date_create();
// $date_value = date_timestamp_get($date) + 8*60*60; // TW timezone(GMT+8:00)
$date_value = $date->format("U");
$date_value += 8*60*60;

// // present
// date_timestamp_set($date, 1356633636);
// echo date_format($date, 'U = Y-m-d H:i:s') . "\n";

// // edit
// $date = date_create('1998-01-01 23:33:00');
// echo date_format($date, 'U = Y-m-d H:i:s') . "\n";

$STITLE = $_POST["STITLE"];
$SDATE = $date_value;
$SCONTENT = $_POST["SCONTENT"];
$STYPE = $_POST["STYPE"];
$PK = $_GET["pk"];

if( $STITLE != null && $SDATE != null && $SCONTENT != null && $STYPE != null && $PK != null)    
{

	$stmt = mysql_query("select count(SID) from story");   //活動主鍵值+1
	$kt = mysql_fetch_array($stmt);
	$k1 = $kt[0];
	$k1 = $k1+1;

	$sql = "INSERT INTO story VALUES('$k1', '$STYPE', '$SDATE', '$STITLE', '$SCONTENT', '$PK')";
	$result = mysql_query($sql);

	echo "<script language=javascript> alert(\"文章新增成功!\");
	      window.location.replace(\"index.php\");
	      top.leftFrame.location.reload();
	      </script>";		

}	else{
	
	echo "<script language=javascript> alert(\"有欄位未填!\");
	      window.location.replace(\"addpost.php?pk=$PK\");
	      top.leftFrame.location.reload();
	      </script>";		 		  		  
	
	
	
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
	</body>
</html>
