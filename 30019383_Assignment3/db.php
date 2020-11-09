<?php

    $db = "a3001938_Assignment3";
    $user = "a3001938_appuser";
    $pwd = "Bananajuice";
    
    
    
    $connection = new mysqli('localhost', $user, $pwd, $db);
    
  $record = $connection->query("select * from Subjects") or die($connection->error());
    
    if(isset($_POST['submit']))
    {
        $item = $_POST['Item'];
        $class = $_POST['Class'];
        $containment = $_POST['Containment'];
        $description = $_POST['Description'];
        $img = $_POST['Link'];
        $extra1 = $_POST['Extra_1'];
        $extra2 = $_POST['Extra_2'];
        $extra3 = $_POST['Extra_3'];
        
        $sql = "insert into Subjects(item, class, containment, description, img, extra1, extra2, extra3)
        values('$item', '$class', '$containment', '$description', '$img', '$extra1', '$extra2' ,'$extra3')";
        
        if($connection->query($sql) === TRUE)
        {
            echo "<h1>Record added</h1>";
            echo "<p><a href='index.php'>Home</a></p>";
        }
        else
        {
            echo "<h1>Error: Record not added</h1>";
            echo "<p>{$connection->error}</p>";
            echo "<p><a href='index.php>Home</a></p>";
        }
    }
    
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $item = $_POST['item'];
        $class = $_POST['class'];
        $containment = $_POST['containment'];
        $description = $_POST['description'];
        $img = $_POST['img'];
        $extra1 = $_POST['extra1'];
        $extra2 = $_POST['extra2'];
        $extra3 = $_POST['extra3'];
        
        $update = "update Subjects set item='$item', class='$class', containment='$containment', description='$description', img='$img', extra1='$extra1', extra2='$extra2', extra3='$extra3'
       where id='$id'";
       
            
        if($connection->query($update) === TRUE)
        {
           echo "<h1>Record Updated</h1>";
           echo "<p><a href='index.php' class='btn btn-success'>Home</a></p>";
           
        }
        else
        {
            echo "<h1>Error: Record not updated</h1>";
            echo "<p>{$connection->error}</p>";
            echo "<p><a href='index.php' class='btn btn-danger'>Home</a></p>";
        }
    
    }
    
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        
        $sql = "delete from Subjects where id='$id'";
        
        if($connection->query($sql) === TRUE)
        {
            echo "<h1>SCP record deleted</h1>
            <p><a href='index.php'>Return to main page</a></p>
            ";
        }
        
        else
        {
             echo "<h1>Error deleting record</h1>
             <p>{$connection->error}</p>
            <p><a href='index.php'>Return to main page</a></p>
            ";
            
        }
        
        
    }

?>