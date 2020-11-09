<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Update record</title>
  </head>
  <body class="container">
    <h1>Update record</h1>
    
    <p><a href="index.php" class="btn btn-primary">Home</a></p>
    
    <?php
    
        include 'db.php';
        
        $id = $_GET['update'];
        
        $record = $connection->query("select * from Subjects where id='$id'") or die($connection->error);
        
        $row = $record->fetch_assoc();
    
    ?>
    
    <form class="form-group" action="db.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Enter a SCP item here:</label>
        <br>
        <input type="text" name="item" placeholder="SCP Item" class="form-control" value="<?php echo $row['item']; ?>">
        <br>
        <label>Enter SCP class:</label>
        <br>
        <input type="text" name="class" placeholder="SCP Class" class="form-control" value="<?php echo $row['class']; ?>">
        <br>
        <label>Enter SCP containment procedures here:</label>
        <br>
        <input type="text" name="containment" placeholder="Containment Procedures" class="form-control" value="<?php echo $row['containment']; ?>">
        <br>
        <label>Enter SCP description here:</label>
        <br>
        <input type="text" name="description" placeholder="Description" class="form-control" value="<?php echo $row['description']; ?>">
        <br>
        <label>Enter link to SCP image here:</label>
        <br>
        <input type="text" name="img" placeholder="Link" class="form-control" value="<?php echo $row['img']; ?>">
        <br>
        <label>Write any other relevant information here (1):</label>
        <br>
        <input type="text" name="extra1" placeholder="Extra 1" class="form-control" value="<?php echo $row['extra1']; ?>">
        <br>
        <label>Write any other relevant information here (2):</label>
        <br>
        <input type="text" name="extra2" placeholder="Extra 2" class="form-control" value="<?php echo $row['extra2']; ?>">
        <br>
        <label>Write any other relevant information here (3):</label>
        <br>
        <input type="text" name="extra3" placeholder="Extra 3" class="form-control" value="<?php echo $row['extra3']; ?>">
        <br>
        <input type="submit" name="update" class="btn btn-primary">
        
    </form>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>