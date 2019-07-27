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
//CASE 8
//$result = $dbObj->execute("SELECT * INTO FROM TBL WHERE id=1 ");
//echo "Case 8 Result: ".$result;


//ACTIVITY 2
$test2 = new UserModel();
echo "CASE 1:";
var_dump($test2->insert("AB","CD","EF@gmail.com","123"));

echo "CASE 2:";
var_dump($test2->update());

echo "CASE 3: ";
var_dump($test2->readAll());


echo "CASE 4: ";
var_dump($test2->delete());

echo "CASE 5: ";
var_dump($test->insert("AA","sdf","sdf","sdf"));

echo "CASE 6: ";
var_dump(update());

echo "CASE 7: ";
var_dump(delete());


?>