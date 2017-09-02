<?php

$host = "localhost";
$username = "root";
$password  = "admin";
$db_name = "pangi";

mysql_connect($host, $username, $password);
mysql_select_db($db_name);

//Select query
$sql1="SELECT * FROM posts ";

$result = mysql_query($sql1);

$rows = mysql_fetch_assoc($result);
//
$newTitle = 'how to test';

$sql= "UPDATE pangi.posts SET  title = '$newTitle',description = 'importance',image_path = 'pangi',time = '2017-09-01 11:55:30' WHERE  posts.id =1;";



while ($rows = mysql_fetch_assoc($result))
{
  echo "<pre>";
  print_r($rows);
} mysql_query($sql);

 //

$sql= "UPDATE pangi.posts SET title = 'about to culture',description = 'export',image_path = 'php',time = '2017-09-02 1:56:58' WHERE posts.id =2;";

mysql_query($sql);

$result = mysql_query($sql1);

$sql= "UPDATE pangi.posts SET  title = 'Export quality',description = 'suspence',image_path = 'about php',time = '2016-05-15 12:10;34' WHERE  posts.id =3;";

mysql_query($sql);

$result = mysql_query($sql1);

$sql= "UPDATE pangi.posts SET title = 'how to export',description = 'table',image_path = 'how to create a table',time = '2015-03-25 11:30:18' WHERE posts.id =4;";

mysql_query($sql);

$result = mysql_query($sql1);

$sql2 = "SELECT * FROM photos ";

$result = mysql_query($sql2);

$rows = mysql_fetch_assoc($result);

$sql = "UPDATE pangi.photos SET  name = 'how to search',path = 'html',time = '2017-09-02 2:36:12',description = 'feeling good' WHERE  photos.id =1;";

mysql_query($sql);

$result = mysql_query($sql2);

while ($rows = mysql_fetch_assoc($result))
{
  echo "<pre>";
  print_r($rows);
}

$sql = "UPDATE pangi.photos SET name = 'suspence',path = 'php',time = '2017-09-02 4:36:44',description = 'about the nature' WHERE photos.id = 2;";

mysql_query($sql);

$result = mysql_query($sql2);

$sql = "UPDATE pangi.photos SET name = 'database',path = 'sql',time = '2017-09-02 4:46:13',description = 'how to do' WHERE photos.id = 3;";

mysql_query($sql);

$result = mysql_query($sql2);






?>
