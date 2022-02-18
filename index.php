<?php
$page_title = "Startsida";
//header include here
include("includes/header.php");
?>
<?php // include main content
include("includes/main-content.php");

?>

<!--<main>-->
 <div class="container">
    <h1>Things I need TODO</h1><br>
    

<?php

$addtodo = new AddTodo();

if (isset($_POST['todo'])) {
    // create variabel
    $todo = $_POST['todo'];

    if ($addtodo->setTodo($todo)) {
        header("Location:index.php");
    } else {
        echo "<p class='errorMsg'>A task needs atleast 5 characters to be valid.</p>";
    }
}

?>

    <form action="index.php" method="POST">
        <label for="todo">Enter task: </label><br>
        <input class="addTodo" type="text" id="todo" name="todo">
        <input class="addTodoBtn" type="submit" name="submit" value="Add Todo">
    </form>




        
      
 </div>
        
        <!--</main>-->
<?php //include footer
include("includes/footer.php");
?>