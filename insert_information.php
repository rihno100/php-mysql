<?php
$servername ="localhost";
$username ="wizard99v";
$password ="hwany1911^^";
$dbname ="wizard99v";

$name = $_POST['name'];
$inforText = $_POST['inforText'];
$sex = $_POST['sex'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$mysqldate = date( 'Y-m-d H:i:s');
//$phpdate = strtotime( $mysqldate );

$sql = "INSERT INTO user_board (nickname, textinformation,sex,date)
VALUES ('".$name."', '".$inforText."', '".$sex."','".$mysqldate."')";

if ($conn->query($sql) === TRUE) {
	header("Location: http://wizard99v.cafe24.com/php/massage.html"); /* Redirection du navigateur */ 
    //echo "New record created successfully".$data;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>