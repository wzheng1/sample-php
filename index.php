<?php
require 'vendor/autoload.php';
$mail_object =& Mail::factory('sendmail', array("sendmail_path" => "/usr/sbin/sendmail"));
print_r($mail_object);
echo "<br />";
$con = mysqli_connect("$DATABASE_SERVICE_HOST","user","pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else
  {
   echo "Database conneciton test successfully";  
  }
?>
