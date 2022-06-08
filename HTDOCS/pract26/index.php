<?php
  session_start();
  $user_id = $_SESSION["user_id"] ?? false;
  require "vendor/autoload.php";
  $db = new Photos\DB();
  $data = $db->get_all_photos();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Главная</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="media.css">
</head>

<body>
  <?php include "header.php" ?>
  <h1>Галерея</h1>
  <div id="grid">
    <?php foreach ($data as $photo): ?>
      <?= (new Photos\Photo($photo["Id"], $photo["Image"], $photo["Text"]))->get_html() ?>
    <?php endforeach; ?>
  </div>
  <?php include "add_form.php" ?>
  <div id="popup_photo">
    <img src="" alt="">
  </div>
  <script src="script.js"></script>
</body>

</html>
