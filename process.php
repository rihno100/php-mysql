<meta charset="utf-8">
<?php
$servername = "localhost";
$username = "*****";
$password = "*****";
$dbname = "*****";

// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);
mysql_select_db('*****');
 	 $sql = "INSERT INTO user WHERE name ='강소라';

	 $result = mysql_query('select*from user');
	 while($row = mysql_fetch_array($result)){
		 echo $row[name].'<br>';
	 }

// Check connection
/*if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}

$sql = "INSERT INTO use (name)
VALUES ('John')";

if (mysql_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysql_error($conn);
}

echo $sql;
mysql_close($conn);*/

////////////////////////////////////////////////////////////////////////////////

 /*$dbConnect = mysql_connect('localhost','wizard99v','hwany1911^^','wizard99v');
 mysql_select_db('wizard99v');
 if($_GET['mode'] == 'insert'){
	 $sql = "INSERT INTO phpmydata (title,information,created) VAUES ('".mysql_real_escape_string($_POST['title'])."','".mysql_real_escape_string($_POST['information'])."',now())";
	 $table_info = 'select*from phpmydata';
	 $result = mysql_query($table_info);
	 while($row = mysql_fetch_array($result)){
		 echo $row[title].'<br>';
		 }
	 echo $sql;
 };*/
  /*if($_GET['mode'] == 'insert'){
	  echo $_POST['name'];
	 $sql = "INSERT INTO user (name,created) VAUES (2,'정우성')";
	 $table_info = 'select*from user';
	 $result = mysql_query($table_info);
	 while($row = mysql_fetch_array($result)){
		 echo $row[name].'<br>';
		 }
	 echo $sql;
 };*/
?>