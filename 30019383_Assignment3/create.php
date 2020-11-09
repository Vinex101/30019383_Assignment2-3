<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Create new SCP record</title>
  </head>
  <body class="container">
    <h1>Create a new SCP record</h1>
    
    <form class="form-group" action="db.php" method="post">
        <label>Enter a SCP item here:</label>
        <br>
        <input type="text" name="Item" placeholder="SCP Item" class="form-control">
        <br>
        <label>Enter SCP class:</label>
        <br>
        <input type="text" name="Class" placeholder="SCP Class" class="form-control">
        <br>
        <label>Enter SCP containment procedures here:</label>
        <br>
        <input type="text" name="Containment" placeholder="Containment Procedures" class="form-control">
        <br>
        <label>Enter SCP description here:</label>
        <br>
        <input type="text" name="Description" placeholder="Description" class="form-control">
        <br>
        <label>Enter link to SCP image here:</label>
        <br>
        <input type="text" name="Image" placeholder="Link" class="form-control">
        <br>
        <label>Write any other relevant information here (1):</label>
        <br>
        <input type="text" name="Extra_1" placeholder="Extra 1" class="form-control">
        <br>
        <label>Write any other relevant information here (2):</label>
        <br>
        <input type="text" name="Extra_2" placeholder="Extra 2" class="form-control">
        <br>
        <label>Write any other relevant information here (3):</label>
        <br>
        <input type="text" name="Extra_3" placeholder="Extra 3" class="form-control">
        <br>
        <input type="submit" name="submit" class="btn btn-primary">
        
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>