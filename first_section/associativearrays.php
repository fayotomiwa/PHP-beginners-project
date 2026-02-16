<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 
  <title>Associative Arrays</title>
</head>
<body>
  <h2>
    Recommended Books
  </h2>

  <?php 
    $books = [
      [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'purchaseUrl' => 'http://exaple.com'
      ],
      [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://exmaple.com'
      ],
      [
        'name' => '',
        'author' => '',
        'purchaseUrl' => ''
      ]
    ];
  ?>

  <ul>
    <?php foreach ($books as $book) : ?>
      <li>
        <a href="<?= $book['purchaseUrl']; ?>">
          <?= $book['name']; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

<h2>Homework</h2>

    <?php

      $book = [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'purchaseUrl' => 'http://example.com'
      ];

    ?>

      <ul>
        <?php foreach ($books as $book) : ?>
              <li>
                  <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>(<?= $book['author'] ?>)
                  </a>
              </li>
          <?php endforeach; ?> 
      </ul>


    <?php

      // "Do Androids Dream of Electric Sheep" was released in 1968.
      // "Project Hail Mary" was released in 2021.

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
        ]
      ];
    ?>

    <?php foreach($books as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
              <?= $book['name'] ?> (<?= $book['releaseYear'] ?>)
            </a>
            
        </li>
    <?php endforeach ?>



</body>
</html>