<?php
  $data = [
    ["path" => "https://picsum.photos/seed/51/1920/1080", "title" => "Пальмы"],
    ["path" => "https://picsum.photos/seed/52/1920/1080", "title" => "Закат"],
    ["path" => "https://picsum.photos/seed/53/1920/1080", "title" => "Город"],
    ["path" => "https://picsum.photos/seed/54/1920/1080", "title" => "Фотограф"],
    ["path" => "", "title" => "Тест"],
    ["path" => "https://picsum.photos/seed/55/1920/1080", "title" => ""]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практ 21</title>
  <style>
    img {
      max-width: 500px;
    }
  </style>
</head>
<body>
  <?php
    foreach ($data as $str) {
      if ($str["path"] && $str["title"]) {
        echo "<img src='{$str["path"]}' />";
        echo "<p>{$str["title"]}</p>";
      }
    }
  ?>
  <?php foreach ($data as $str) :
    if ($str["path"] && $str["title"]):
  ?>
    <img src="<?= $str["path"] ?>" />
    <p><?= $str["title"] ?></p>
  <?php
    endif;
  endforeach;
  ?>
</body>
</html>
