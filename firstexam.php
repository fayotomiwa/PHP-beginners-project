<?php

$name = 'Joe';
?>
<ul>
  <?= $name ?>
</ul>

<!-- ------------------------------------ -->
<?php

$greeting = 'Hello World';
?>
<!-- Render the $greeting string to the page -->
<ol>
 <?= $greeting ?>
</ol>


<!-- ------------------------------------ -->

<?php

$popularNames = [
    'popularNames' => "Oliver", "Violet", "Noah", "Aurora"
];
?>
<ul>
  <?php foreach ($popularNames as $name) : ?>
    <li>
      <?= $name ?>
    </li>
  <?php endforeach; ?>
</ul>

<!-- ------------------------------------ -->

<?php

// Joe is 25, and Jane is 30.

$names = [
  [
    'name' => 'Joe',
    'age'=> 25	
  ], [
      'name' => 'Jane',
      'age' => 30
  ]
];

?>

<?php foreach ($names as $name) : ?>
  <li>
    <?= $name['name'] ?> (<?= $name['age'] ?>)
  </li>
  <?php endforeach; ?>


<!-- ------------------------------------- -->

<?php

$post = [
    'title' => 'My Blog Post',
    'author' => 'LaryRobot',
    'slug' => 'my-blog-post'
];
?>
<ol>
  <?= $post['slug'] ?>
</ol>

<!-- ------------------------------------- -->
<?php

$confirmed = false;

if (!$confirmed) {
  echo "This appointment has not yet been confirmed.";
}

?>

<!-- ------------------------------------- -->

<?php

$books = ['Frankenstein', 'Animal Farm', '1984'];

foreach ($books as $book) {
    echo "<li>$book</li>";
}
?>

<!-- ------------------------------------- -->

<?php

function greet($thing) {
  return "Hello there, $thing.";
}

?>
<!-- ------------------------------------- -->

<?php

function isManager($person) {
	return $person['role'] === 'Manager';
}

 echo $person['role'];
?>


