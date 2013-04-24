<?php

$user = 'root'; // database user name
$passwd = 'root'; // database user password

$link = mysql_connect('localhost', $user, $passwd); // test in localhost
if (!@$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';

mysql_select_db("db_nuke"); // database name
 
?> 