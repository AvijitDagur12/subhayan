<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>display page</title>
</head>
<body>
<h1>

<?php 

echo"This is display page"."</br>";
$name=$_POST["txt_name"];
$roll=$_POST["txt_roll"];
$dept=$_POST["txt_dept"];


echo $name."</br>";
echo $roll."</br>";
echo $dept."</br>";


$conn=new mysqli("localhost","root","","first");
$result=$conn->query("INSERT INTO rocky_tbl VALUES('" .$name." ',' " .$roll."',' " .$dept."')");

echo "Successsfully added";

 ?>


</h1>
          
</body>
</html>