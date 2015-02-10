<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP Exercises - GetName</title>
  </head>
  <body>
    <h1>Get Name</h1>
  
    <?php
    
    if (isset($_GET['name'])) {
        echo '<p>Hello ' . $_GET['name'] . '!</p>';
    } else {
        echo '<p style="color: red">Name parameres is missing!';
        echo 'Please write "?name=YourName" at the and of the URL, without space!</p>';
    }
    
    ?>
    
  </body>
</html>