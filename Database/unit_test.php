<?php
require("Database.php");

$dbObj = new Database();

//case 1
//$result = $dbObj->execute("INSERT INTO TBL(firstname,lastname,email,pass) VALUES('JohnPaul','Rosal','jp@gmail.com','secret')");
//echo"Case 1 result: ".$result;

// CASE 2
//$result = $dbObj->execute("UPDATE TBL SET firstname='JP' WHERE id=1");
//echo "Case 2 Result: ".$result;

// CASE 3
//$result = $dbObj->execute("SELECT * FROM TBL ");
//echo "Case 3 Result: ".$result;

// CASE 4
//$result = $dbObj->execute("DELETE FROM TBL WHERE id=1 ");
//echo "Case 4 Result: ".$result;

// CASE 5
//$result = $dbObj->execute("INSET TBL(firstname, lastname, email, password) VALUES ('JP','Rosal'");
//echo "Case 5 Result: ".$result;

// CASE 6
//$result = $dbObj->execute("UPDATE INTO TBL SET firstname = 'JP' WHERE id=1");
//echo "Case 6 Result: ".$result;

// CASE 7
//$result = $dbObj->execute("DELETE INTO FROM TBL WHERE id=1 ");
//echo "Case 7 Result: ".$result;

// CASE 8
$result = $dbObj->execute("SELECT * INTO FROM TBL WHERE id=1 ");
echo "Case 8 Result: ".$result;

?>
