<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "Hello there <br>";

    $sql = "SELECT * FROM users WHERE id = '1'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $resultCheck = mysqli_num_rows($result);
    echo $row['password']."<br>";
    echo $resultCheck."<br>";

    if($resultCheck > 0){
      while($row = mysqli_fetch_assoc($result)){
        echo $row['login']."<br>";
        echo "<h1>".$row['login']."</h1>";
      }
    }

    ?>

  </body>
</html>
