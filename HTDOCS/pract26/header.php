<header>
  <div class="popup">
    <a href="index.php">Главная</a>
    <?php if ($user_id) : ?>
      <a id="show_add_photo" href="#">Добавить фото</a>
    <?php endif; ?>
    <a href="#">Ваши посты</a>
    <a href="user.php">Личный кабинет</a>
    <?php if ($user_id) : ?>
      <a href="logout.php">Выйти</a>
    <?php endif; ?>
  </div>
  <div class="mobile_icon">
    <img src="menu.png" alt="">
  </div>
</header>
