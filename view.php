<?php
  //connection string
$connectionInfo = array("UID" => "apuadmin", "pwd" => "{Manutd#14}", "Database" => "ddacdbtp047844", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:ddactp047844.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if(!$conn)
{
  die ("Error connection: ".sqlsrv_errors());
}

//echo "Connection Success: connected!";

echo "<table border = '1'>";
  $tsql= "SELECT * FROM [dbo].[restaurant]";
  $getResults= sqlsrv_query($conn, $sql);
  if ($getResults == FALSE)
  {
  die(sqlsrv_errors());
  }
  while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
  {
  echo "<tr>";
  echo "<td>". $row['restaurant_id'] . "</td>";
  echo "<td>". $row['restaurant_name'] ."</td>";
  echo "<td>". $row['restaurant_address'] . "</td>";
  echo "<td>". $row['restaurant_phone'] . "</td>";
  echo "</tr>";
  }
sqlsrv_free_stmt($getResults);
?>
