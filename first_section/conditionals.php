<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <title>Conditional and Booleans</title>

  <style>
    body {
      display: grid;
      place-items: center;
      height: 100vh;
      margin: 0;
      font-family: monospace;
    }
  </style>
</head>
<body>

    <?php 
      $name = "Dark Matter";
      $read = true;

      if ($read) {
        $message = "You have read $name";
      } else {
        $message = "You have NOT read $name";
      }
    ?>
  
  <h1>
    <?= $message ?>
  </h1>


  <h2>
    <?php
      $finished = false;
    ?>

    <?php

      $name = 'The Martian';
      // $finished = true;

      if ($finished) {
          $message = "I finished reading $name";
      } else {
          $message = "I am currently reading $name";
      }

      echo $message;

    ?>
  </h2>

</body>
</html>