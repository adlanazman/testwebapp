<?php
  //connection string
$connectionInfo = array("UID" => "apuadmin", "pwd" => "{Manutd#14}", "Database" => "ddacdbtp047844", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:ddactp047844.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if(!$conn)
{
  die ("Error connection: ".sqlsrv_errors());
}

echo "Connection Success: connected!";

?>
