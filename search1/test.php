<?php
   
try
{
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=cleverdeals', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "database connection done";
}
catch(PDOException $ex)
{
	echo $ex->getMessage();
}
?>
<?php
session_start();

    $stmt = $pdo->query("SELECT * FROM address");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(count($rows)>0){
    echo '<table width="70%" border="1" cellpadding="5" cellspacing="5">
    <tr>
    <th>AddressId</th>
    <th>Location</th>
    <th>Street</th>
    <th>Main_Road</th>
    <th>City</th>
    <th>State</th>
    <th>Pincode</th>
    <th>Sector</th>
    </tr>';
    foreach ($rows as $row ) {
    	echo "<tr><td>";
    echo(htmlentities($row['AddressId']));
    echo("</td><td>");
    echo(htmlentities($row['Location']));
    echo("</td><td>");
    echo(htmlentities($row['Street']));
    echo("</td><td>");
    echo(htmlentities($row['Main_Road']));
    echo("</td><td>");
    echo(htmlentities($row['City']));
    echo("</td><td>");
    echo(htmlentities($row['State']));
    echo("</td><td>");
    echo(htmlentities($row['Pincode']));
    echo("</td><td>");
    echo(htmlentities($row['Sector']));
    echo("</td></tr>\n");
    }
    echo "</table>";
}else{
    echo('No rows found<br>');
}
  
?>
<?php

   $data = $pdo->query("SELECT * FROM project");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $rows) {
    echo $rows['Project_Name']."<br />\n";
}


?>
