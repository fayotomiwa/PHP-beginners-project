<?php 

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
        'purchaseUrl' => 'http://example.com',
        'releaseYear' => 2021
      ],
      [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com',
        'releaseYear' => 2011
      ]
    ];

    function filter($items, $fn) {
      $filteredItems = [];

      foreach($items as $item) {
        if ($fn($item)) {
          $filteredItems[] = $item;
        }
      }

      return $filteredItems;
    }
    $filteredBooks = array_filter($books, function ($book) {
      return $book['author'] === 'Andy Weir';
    });
  ?>

<ul>
    <?php foreach ($filteredBooks as $book) : ?>
        <li>
          <a href="<?= $book['purchaseUrl'] ?>">
            <?php echo $book['name'] ?> (<?php echo $book['releaseYear']?>) - By <?php echo $book['author'] ?>
          </a>
        </li>
    <?php endforeach; ?>
  </ul>


  <!-- --------------------------------------------- -->

  <?php

$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
    ],
];

// Hint - the PHP equivalent of "and" is &&.


$filteredBooks = array_filter($books, function($book) {
    return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2000;
});

require "index.view.php";