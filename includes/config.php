<?php
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.class.php'; //sökväg till mappen för dina klasser
});
// Utseende på title
$site_title = "Dennis Webb ";
$divider = " | ";
?>

<?php
//Developer mode on/off (true or false)
$devmode = true; 

if($devmode) {
error_reporting(-1);
ini_set("display_errors", 1);

//Database settings local
define("DBHOST", "localhost");
define("DBUSER", "grupp");
define("DBPASS", "password");
define("DBDATABASE", "grupp");

} else {
    // Database setiings posted
}

?>