<?php
  ini_set("display_errors", "On"); 
  header("Content-Type:text/html; charset=utf-8");//PHP 亂碼

  require ('setup.php');     // 加載數據庫配置文件

  $sql = "SELECT * FROM t1";

  $numRecord = mysql_query($sql);

  while($rs=mysql_fetch_object($numRecord))

  {

     echo $rs->id;

     echo '<br>';

     echo $rs->name;

     echo '<br>';

     echo '<br>';

  }

?>