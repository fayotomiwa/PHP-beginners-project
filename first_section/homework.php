<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homework</title>
</head>
<body>
  <h1>Homework Solution</h1>
  <?php

  $book = [
    'name' => 'Do Androids Dream of Electric Sheep',
    'author' => 'Philip K. Dick',
    'purchaseUrl' => 'http://example.com'
  ];


  echo $book['name']; 
  ?>

<?php

// "Do Androids Dream of Electric Sheep" was released in 1968.
// "Project Hail Mary" was released in 2021.

$books = [
	[
		'name' => 'Do Androids Dream of Electric Sheep',
		'author' => 'Philip K. Dick',
		'purchaseUrl' => 'http://example.com',
    'releaseYear' => 1968
	],
	[
		'name' => 'Project Hail Mary',
		'author' => 'Andy Weir',
		'releaseYear' => 2021,
    'purchaseUrl' => 'http://example.com'
	]
];
?>
  <?php foreach($books as $book) : ?> 
    <li>
      <?= $book['name'] ?> (<?= $book['releaseYear'] ?>)
    </li>
    <li>
     <?= $book['author'] ?> <a href="<?= $book['purchaseUrl'] ?>">
    </li>
     
  <?php endforeach ?>


<!-- echo $books['releaseYear']; -->


<?php

$a = 7;
$b = 4;

function add($a, $b) {
    return $a + $b; 
}
?>

<p>
  <?= add($a, $b); ?>
</p>

<?php

$movies = [
    [
        'name' => 'Back to the Future',
        'releaseYear' => 1985,
    ],

    [
        'name' => 'Pirates of the Caribbean',
        'releaseYear' => 2003,
    ],

    [
        'name' => 'Interstellar',
        'releaseYear' => 2014,
    ],
];

function getFirstMovie($movies)
{
    // Write your code here
    $firstItem = [];

    foreach ($movies as $movie) {
        if ($movie === $movie) {
            $firstItem[] = $movie;
        }
    }

    return $firstItem;
}
?>


<?php foreach(getFirstMovie($movies) as $movie) : ?>
    <li>
        <?= $movie['name'] ?> 
    </li>
<?php endforeach; ?>


<?php

$movies = [
    [
        'name' => 'Back to the Future',
        'releaseYear' => 1985,
    ],

    [
        'name' => 'Pirates of the Caribbean',
        'releaseYear' => 2003,
    ],

    [
        'name' => 'Interstellar',
        'releaseYear' => 2014,
    ],
];

function filterByRecent($movies)
{
    // Write your code here
    $recentMovies = [];

    foreach ($movies as $movie) {
        if ($movie['releaseYear'] >= 2000) {
            $recentMovies[] = $movie;
        }
    }

    return $recentMovies;
}
?>

<ul>
  <?php foreach(filterByRecent($movies) as $movie) : ?>
      <li>
          <?= $movie['name'] ?> 
          
      </li>
  <?php endforeach; ?>
</ul>




</body>
</html>

