<?php
  $name = 'Petya';
  $surname = 'Petrov';
  $age = 20;
  $salary = 110000;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практ 20</title>
</head>
<body>
  <?php
    echo "<p>Меня зовут $name $surname, мне $age лет, я получаю " . ($salary * 12) . " в год</p>";
  ?>
  <p>Меня зовут <?php echo $name . " "; echo $surname ?>, мне <?php echo $age; ?> лет, я получаю <?php echo $salary * 12; ?> в год</p>
  <p>Меня зовут <?= $name ?> <?= $surname ?>, мне <?= $age ?> лет, я получаю <?= $salary * 12 ?> в год</p>
</body>
</html>
