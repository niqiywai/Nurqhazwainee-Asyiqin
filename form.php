<html>
<head>
<title> formphp </title>
</head>
<body>

<?php

$name=$_post["name"];
$age=$_post["age"];
$gender=$_post["gender"];
$link=$_post["link"];
$checkbox=$_post["checkbox"];
$feedback=$_post["feedback"];

//connect to mySQL database server
$connection=mysql_connect("localhost", "form", "root", "")
or die("Could not connect to mySQL ".mysql_error());

//select the specified database
$selection=mysql_select_db("form")
or die("Unable to select database".mysql_error());

//create the query
$sql="INSERT INTO form(name, age, gender, link, checkbox, feedback) VALUES 
("$name", "$age", "$gender", "$link", "$checkbox", "$feedback")";

//execute query
$result=mysql_query($sql);

//confirm the record is added
if ($result)
{
  echo"Record added successfully! <br>";
  echo"Name: $name <br>";
  echo"Age: $age <br>";
  echo"Gender: $gender <br>";
  echo"Link: $link <br>";
  echo"Checkbox: $checkbox <br>";
  echo"Feedback: $feedback <br>";
}

else {die(mysql_error());}

?>

</body>
<html>