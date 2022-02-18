<?php

include("includes/config.php");

//Connect
$db = new mysqli(DBHOST, DBUSER, DBPASS, DBDATABASE);
if($db->connect_errno >0) {
    die("Connection error: " . $db->connect_error);
}

//SQL-query
$sql = "DROP TABLE IF EXISTS news;";

$sql .= "
CREATE TABLE todos(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    description TEXT NOT NULL,
    postdate timestamp NOT NULL DEFAULT current_timestamp()
);
";

echo "<pre>$sql</pre>";

//Send to server
if($db->multi_query($sql)) {
    echo "Table installed";
} else {
    echo "error";
}