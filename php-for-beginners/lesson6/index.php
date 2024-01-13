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
    "The Heroes",
    "Raven Tower",
    "Babel",
   ]
  ?>
  <ul>
    <?php foreach ($books as $book) : ?>
      <li><?= $book ?></li>
    <?php endforeach ?>
  </ul>
</body>
</html>