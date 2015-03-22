<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title>home</title>
	<meta content="text/html; charset=windows-1252" http-equiv="content-type" />
</head>
<body>
<div style="text-align: center">
<h1><span pbzloc="34" style="font-weight: bold">Customers</span></h1>

<div style="text-align: left"><a href="index.html"><img border="0" height="127" src="home.png" style="height: 49px; width: 49px" width="127" /></a> <a href="javascript:history.go(-1)"><img border="0" height="299" src="back.png" style="height: 40px; width: 40px" width="300" /></a></div>

<div style="text-align: left"><input name="search" type="text" value="Search" /><select name="Name"><option selected="selected" value="">Name</option></select><br />
<button name="new">Search<br />
</button></div>

<div style="text-align: right"><button name="New">New</button></div>
</div>
<!-- php query -->
<?php
 //===========================================================================
 // 4920 PHP example code
 // Spring 2015
 // Written by: Lisa Michaud
 //
 // connect_test.php : Tests the database and contains all of the code for
 // opening a connection, sending a query, and displaying the results as a 
 // table.
 //===========================================================================

include "dbConnect.php";

// DISPLAY RESULTS

echo "<p>Here are the faculty in the DB:</p>";
echo "<table border=3>\n";

// FIRST ROW : the columsn

echo "\t<tr>\n";

$columns = $result->fetch_fields();

foreach ( $columns as $field )
  {
    echo "\t\t<td><b>$field->name</b></td>\n";
  }

echo "\t</tr>\n";

// REST OF THE TABLE

while ( $row = $result->fetch_array(MYSQLI_ASSOC ) )
  {
    echo "\t<tr>\n";
    foreach ( $row as $value )
      {
	echo "\t\t<td>$value</td>\n";
      }
    echo "\t<tr>\n";
  }



echo "</tr>";
echo "</table>\n";


// FREE UP RESULT SET

$result->close();



// CLOSE CONNECTION

$link->close();

?>


</body>
</html>
