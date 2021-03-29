<?php

$dbhost = 'localhost:3307';
$dbuser = 'root';
$dbpass = '';
$db     = 'php_work';


$conn  = mysqli_connect($dbhost,$dbuser,'',$db);

# what are we doing in this satement -> we are checking our connection
if(! $conn){
    die('Could not connect: ') ;
}

echo 'Successfully Connected';


$new_test_database = "silly_new_database";
// USE A KNOWN DATABASE
$sql = "USE ". $db; // + .

$create_db = "CREATE ". $new_test_database;

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// QUERY WE HAVE
$sql_query = "CREATE TABLE IF NOT EXISTS  (
    id INT(6) NON_NULLABLE UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL
)";
$result = $conn->query($sql_query);
print_r($result);

# remembering -> the size of database does affect this !
# so if we are dealing with a HUGE databse -> we probably want to paginate
print_r(mysqli_fetch_all($result)); // in a body that is kind of ugly !
echo "<\br>";
# PARSING OUR RESULTS TO SOMETHING LESS UGLY!
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo " - Name: " . $row["name"] . "";
//        echo " - has a : " . $row["species"]. "";
//    }
} else {
    echo "0 results";
}
# you want to remember when you are done with the database -> THaT YOU CLOSE IT!!
mysqli_close($conn);

?>