<?php

 
    $db = "a3001938_Assignment3";
    $user = "a3001938_appuser";
    $pwd = "Bananajuice";


 $connection = new mysqli('localhost',$user,$pw,$db) or die(mysqli_error($connection));
 
 $result = $connection->query("select * from pages") or die($connection->error());
 
if(isset($_POST['item']))
{
    $item = $_POST['item'];
    
    $class = $_POST['class'];
    $containment = $_POST['containment'];
    $description = $_POST['description'];
    $img = $_POST['img'];
    $extra1 = $_POST['extra1'];
    $extra2 = $_POST['extra2'];
    $extra3 = $_POST['extra3'];
    
    $sql = "insert into Subjects(item,class,containment,description,img,extra1,extra2,extra3)
    values('$item','$class','$containment','$description','$img','$extra1','$extra2','$extra3')";
    
    
    if($connection->query($sql) === TRUE)
    {
        echo "
        <h1>Record added succesfully</h1>
        <p><a href='index.php'>Back to index page</p>
        
        ";
        
    }
    
    else
    {
        echo "
        <h1>Error submitting data</h1>
        <p>{$connection->error}</p>
        <p><a href='index.php'>Back to index page</p>
        
        ";
        
    }
    
}


    if(isset($_GET['delete']))
    {
        echo "hello";
    }

?>