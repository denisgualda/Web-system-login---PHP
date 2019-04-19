
<?php
//CONNECT TO MYSQL DATABASE
define('DB_SERVER','localhost');
define('DB_NAME','**** DATABASE USERS NAME'); //DATABASE HAVE USERS
define('DB_USER','****** mysql user *****'); //MYSQL USER TO CONNECT
define('DB_PASS','****** MYSQL PASSWORD USER ***** '); //MYSQL PASSWORD USER

$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$con);
?> 
