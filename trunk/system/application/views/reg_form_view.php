<h1>Регистрация<br /><info>Для работы с сервисом необходимо пройти регистрацию</info></h1>
<ul class=errors>
<?php echo $this->validation->error_string; ?>
</ul>
<?php echo form_open('registration'); ?>
<table>
	<tr>
		<td colspan=2><h2>Обязательная информация</h2></td>
	</tr>
	<tr>
		<td width=150>Логин</td>
		<td><?php echo form_input($login); ?>*</td>
	</tr>
	<tr>
		<td>Пароль</td>
		<td><?php echo form_input($password); ?>*</td>
	</tr>
	<tr>
		<td>Подтвердите пароль</td>
		<td><?php echo form_input($passconf); ?>*</td>
	</tr>
	<tr>
		<td>E-mail</td>
		<td><?php echo form_input($email); ?>*</td>
	</tr>
	<tr>
		<td colspan=2><h2>Контактная информация</h2></td>
	</tr>
	<tr>
		<td>ICQ</td>
		<td><?php echo form_input($icq); ?></td>
	</tr>
	<tr>
		<td>Моб. телефон</td>
		<td><?php echo form_input($phone); ?></td>
	</tr>
	<tr>
		<td>Skype</td>
		<td><?php echo form_input($skype); ?></td>
	</tr>
	<tr>
		<td>ID Вконтакте</td>
		<td><?php echo form_input($vk); ?></td>
	</tr>
	<tr>
		<td colspan=2><h2>Дополнительная информация</h2></td>
	</tr>
	<tr>
		<td>Имя</td>
		<td><?php echo form_input($name); ?></td>
	</tr>
	<tr>
		<td>Пол</td>
		<td><?php echo form_radio($male); ?>Мужской<br />
			<?php echo form_radio($female); ?>Женский</td>
	</tr>
	<tr>
		<td>Вы водите машину?</td>
		<td><?php echo form_radio($car); ?>Да<br />
			<?php echo form_radio($no_car); ?>Нет</td>
	</tr>
	<tr>
		<td colspan=2>
		<center><?php echo form_submit('submit', 'Завершить регистрацию'); ?></center>
		</td>
	</tr>
</table>
<?php echo form_close(); ?>