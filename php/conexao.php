<?php 
mysql_connect("localhost", "root");
mysql_select_db("lumia");
$result = mysql_query("SELECT * FROM `usuario`");
    $row = mysql_fetch_assoc($result);
?>