<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lesson 6 - Arrays</title>
</head>
<body>
  <h1>Recommended Books</h1>

  <?php
  $books = [
    [
      'title' => "The Heroes",
      'author' => "Joe Abercrombie",
      'purchaseUrl' => "http://www.amazon.com",
      'publishYear' => 2011
    ],
    [
      'title' => "Raven Tower",
      'author' => "Ann Leckie",
      'purchaseUrl' => "http://www.amazon.com",
      'publishYear' => 2019
    ],
    [
      'title' => "Babel",
      'author' => "R.F. Kuang",
      'purchaseUrl' => "http://www.amazon.com",
      'publishYear' => 2022
    ],
    [
      'title' => "The Blade Itself",
      'author' => "Joe Abercrombie",
      'purchaseUrl' => "http://www.amazon.com",
      'publishYear' => 2006
    ]
  ];

  function filter($items, $predicate) {
    $filteredItems = [];

    foreach ($items as $item) {
      if ($predicate($item)) {
        $filteredItems[] = $item;
      }
    }
    return $filteredItems;
  }

  $filteredBook = array_filter($books, function ($item) {
    return $item['publishYear'] >= 1950 && $item['publishYear'] <= 2020;
  })
  ?>
  <ul>
    <?php foreach ($filteredBook as $book) : ?>
      <li>
        <a href="<?= $book['purchaseUrl'] ?>">
          <?= $book['title'] ?> by <?= $book['author'] ?> (<?=$book['publishYear'] ?>)
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</body>
</html>