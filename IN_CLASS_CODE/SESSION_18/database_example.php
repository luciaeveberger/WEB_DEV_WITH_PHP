<?php

$dbhost = 'localhost:3307';
$dbuser = 'root';
$dbpass = '';
$db     = 'php_work';


$conn  = mysqli_connect($dbhost,$dbuser,'',$db);

if(! $conn){
    die('Could not connect connect: ') ;
}

echo 'Successfully Connected';

// USE A KNOWN DATABASE
$sql = "USE ". $db;
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// QUERY WE HAVE
$sql_query = "SELECT * FROM pet";
$result = $conn->query($sql_query);
print_r($result);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>