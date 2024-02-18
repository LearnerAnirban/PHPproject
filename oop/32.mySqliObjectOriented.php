<?php 
//PHP & MySql Methods
/*  >> MySQLi Procedural
    >> MySQLi Object-oriented
    >> PDO 

-- 3 Steps to work with database a PHP
    >> Connection
      ||-- $conn = new mysqli(server Name, user name, password, database name);
    >> Run SQL Query
      ||-- $conn>query(SQL Query);
    >> Close Connection
      ||-- $conn->close();

-- MySQLi Fetch Function
    $result = $conn->query(SQL Query);
    >> $result->fetch_assoc();
    >> $result->fetch_array();
    >> $result->fetch_row();
    >> $result->fetch_all();
    >> $result->fetch_field();
    
    >> $result-:affected_rows();

-- Procedural Methods (MySQLi Error Methods)
    >> $conn->connect_error();
    >> $conn->connect_errno();
    >> $conn->error();
    >> $conn->error_list();
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpTesting";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
  die("connection Failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "ID: {$row["ID"]} - Name: {$row["Name"]} - Age: {$row["Age"]}";
    echo "<br>";
  } 
}else {
  echo "No Result Fonund";
}