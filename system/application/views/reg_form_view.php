  <h1>Регистрация</h1>
  <?php echo form_open('reg_submit'); ?>
  <p><label for="login">Логин: </label><br /><?php echo form_input($login); ?></p>
  <p><label for="email">E-mail: </label><br /><?php echo form_input($email); ?></p>
  <p><label for="pass">Пароль: </label><br /><?php echo form_input($pass); ?></p>
  <?php echo form_submit('submit', 'Завершить регистрацию'); ?>
  <?php echo form_close(); ?>