<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>SCP Database Application</title>
  </head>
  <?php include 'db.php'; ?>
  <body class="container">
      
      <style>
        body {
        background-color: lightgrey;
        }

        h1 {
        color: maroon;
        align-content:center
        }
        
        p {
            color: red;
            
        }
        
        row{
            color: black;
        }
        
        
</style>
      
      <h1>
          SCP Subject Database Application
      </h1>
      
      
      <div class="row">
          <div class="col">
              <ul class="nav navbar-light bg-lightgrey">
                  <li><a href="index.php" class="nav-link">Home</a></li>
                  
                  
                  <?php foreach($record as $menu): ?>
                  
                  <li class="nav-item active">
                      
                      <a href="index.php?scp='<?php echo $menu['item']; ?>'" class="nav-link"><?php echo $menu['item']; ?></a>
                      
                  </li>
                  
                  <?php endforeach; ?>
                   <li><a href="create.php" class="nav-link">Create new record</a></li>
              </ul>
          </div>
      </div>
      
      <div class="row">
          <div class="col">
              <?php 
                    
                    if(isset($_GET['scp']))
                    {
                        $scp = trim($_GET['scp'], "'");
                        
                        
                        $record = $connection->query("select * from Subjects where item='$scp'") or die($connection->error());
                        
                        $single = $record->fetch_assoc();
                        
                        
                        $item = $single['item'];
                        $class = $single['class'];
                        $containment = $single['containment'];
                        $description = $single['description'];
                        $img = $single['img'];
                        $extra1 = $single['extra1'];
                        $extra2 = $single['extra2'];
                        $extra3 = $single['extra3'];
                    
                        
                        $id = $single['id'];
                        $update = "update.php?update=" . $id;
                        $delete = "db.php?delete=" . $id;
                        
                        echo "
                        <p><img src='{$img}'></p>
                        <h1>{$item}</h1>
                        <h2>{$class}</h2>
                        
                        <p>{$containment}</p>
                        <p>{$description}</p>
                        <p>{$extra1}</p>
                        <p>{$extra2}</p>
                        <p>{$extra3}</p>
                        
                        
                        
                        
                        ";
                        
                        echo "
                        <p><a href='{$update}' class='btn btn-warning'>Update</a> | <a href='{$delete}' class='btn btn-danger'>Delete</a><p>
                        
                        
                        
                        ";
                        
                    }
                    else
                    {
                        
                        echo "
                        
                        <h1>WELCOME</h1>
                        <p>The list above allows you to view, edit, and delete SCP subject files.</p>
                      
                        
                        ";
                    }
              
              ?>
          </div>
      </div>
      
      

  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>