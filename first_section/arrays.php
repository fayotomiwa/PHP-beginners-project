<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 
  <title>Arrays</title>
</head>
<body>
  <h2>
    Recommended Books
  </h2>

  <?php 
    $books = [
      "Do Androids Dream of Electric Sheep",
      "The langaliers",
      "Hail Mary"
    ];
  ?>

  <ul>
    <?php foreach ($books as $book) : ?>
      <li><?= $book ?></li>
    <?php endforeach ?>
  </ul>

  <h3>Exam from Laracasts</h3>
  <?php
    $usernames = [
        "Eniola",
        "Folarin",
        "Ayotomiwa"
    ];
  ?>

  <?php foreach ($usernames as $username) : ?>
      <ol><?= $username ?></ol>
  <?php endforeach ?>
</body>
</html>