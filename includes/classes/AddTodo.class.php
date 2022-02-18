<?php
class AddTodo {
// properties

private $db;
private $description;

// constructor with db-connection
function __construct() {
    $this->db = new mysqli(DBHOST, DBUSER, DBPASS, DBDATABASE);

    if($this->db->connect_errno >0) {
        die("Error connecting: " . $this->db->connect_error);
    }
}

// Add Todo
//public function addTodo(string $description) : bool {
    //check with method
    //if(!$this->description($description)) return false;
//}

//Set-methods
function setTodo(string $description) : bool {
    //check if 5 or less characters
    if(strlen($description)>=5) {
        $this->description = $description;

        return true;
    } else {
        return false;
    }
}




function __destruct()
{
    mysqli_close($this->db);
}

}




?>