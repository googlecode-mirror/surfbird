<h1>Регистрация</h1>
<ul class=errors>
<?php echo $this->validation->error_string; ?>
</ul>
<?php echo form_open('registration'); ?>
<table width=100% class=regform>
	<tr>
		<td colspan=2><h2>Заполните поля формы</h2></td>
		<td width=50> или </td>
		<td><h2>Зарегистрируйтесь в два клика</h2></td>
	</tr>
	<tr class=line>
		<td width=150>Логин</td>
		<td><?php echo form_input($login); ?>*</td>
		<td></td>
		<td><center><button>Я имею аккаунт Вконтакте</button></center></td>
	</tr>
	<tr class=line>
		<td>Пароль</td>
		<td><?php echo form_input($password); ?>*</td>
		<td></td>
		<td><center><button>Я имею аккаунт Google</button></center></td>
	</tr>
	<tr class=line>
		<td>Подтвердите пароль</td>
		<td><?php echo form_input($passconf); ?>*</td>
		<td></td>
		<td><center><button>Я имею аккаунт Яндекс</button></center></td>
	</tr>
	<tr class=line>
		<td>E-mail</td>
		<td><?php echo form_input($email); ?>*</td>
		<td></td>
		<td><center><button>Я имею аккаунт OpenID</button></center></td>
	</tr>
	<tr class=line>
		<td colspan=2>
		<center><br /><?php echo form_submit('submit', 'Завершить регистрацию'); ?></center></td>
		<td colspan=2></td>
	</tr>
</table>
<?php echo form_close(); ?>