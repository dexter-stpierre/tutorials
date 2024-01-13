<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo "my title"; ?></title>
</head>
<body>
  <h1>
    <?php
      $greeting = 'Whatup';
      echo $greeting . ' ' . "world!";
      echo "$greeting world";
    ?>
  </h1>
  <p>Hello <?php echo 'Dexter'; ?>, how are you today?</p>
</body>
</html>