<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lesson 5</title>
  <style>
    body {
      display: grid;
      place-items: center;
      margin: 0;
      font-family: comic-sans;
      height: 100vh
    }
  </style>
</head>
<body>
  <?php
  $name = "Dark Matter";
  $hasBeenRead = true;
  $message = "You have not read $name";
  if ($hasBeenRead) {
    $message = "You have read $name";
  }
   ?>
  <h1>
    <?php echo $message; ?>
    <?= $message ?>
  </h1>
</body>
</html>
