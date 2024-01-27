<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lesson 6 - Arrays</title>
</head>
<body>
  <h1>Recommended Books</h1>
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
