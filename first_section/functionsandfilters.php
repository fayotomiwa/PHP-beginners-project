<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Function and Filters</title>
</head>
<body>
  
  <?php 
    $books = [
      [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'purchaseUrl' => 'http://example.com',
        'releaseYear' => '1968'
      ],
      [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com',
        'releaseYear' => '2021'
      ],
      [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com',
        'releaseYear' => '2011'
      ]
    ];

    function filterByAuthor($books, $author) {
      $filteredBooks = [];

      foreach($books as $book) {
        if ($book['author'] === $author) {
          $filteredBooks[] = $book;
        }
      }

      return $filteredBooks;
    }

  ?>

<ul>
    <?php foreach (filterByAuthor($books, 'Andy Weir') as $book) : ?>
        <li>
          <a href="<?= $book['purchaseUrl'] ?>">
            <?php echo $book['name'] ?> (<?php echo $book['releaseYear']?>) - By <?php echo $book['author'] ?>
          </a>
        </li>
    <?php endforeach; ?>
  </ul>
  
 <!-- --------------------------------------------------------- -->

<ul>
    <?php foreach ($books as $book) : ?>
      <?php if ($book['author'] === 'Andy Weir') : ?>
        <li>
          <a href="<?= $book['purchaseUrl'] ?>">
            <?php echo $book['name'] ?> (<?php echo $book['releaseYear']?>) - By <?php echo $book['author'] ?>
          </a>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>


<!-- --------------------------------------------------------- -->
  



<!-- ---------------------------------------------------------- -->
<?php

function add() {
    return 7+15;
}

?>
 
<p><?= add(); ?></p>

<!-- ----------------------------------------------------------- -->
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

function filterByRecent($movies) {
    $filteredMovies = [];

    foreach($movies as $movie) {
        if ($movie['releaseYear'] >= 2000) {
            $filteredMovie[] = $movie;
        }
    }
    return $filteredMovie;
}

?>

<ul>
    <?php foreach (filterByRecent($movies) as $movie) :?>
    <li>
       <?= $movie['name'] ?>
    </li>
    <?php endforeach; ?>
</ul>

<!-- ---------------------------------------------------- -->

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
    return $movies[0];
}
?>

<?= getFirstMovie($movies)['name']; ?>


</body>
</html>