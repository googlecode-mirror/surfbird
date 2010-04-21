<?php

class Registration extends Controller {

	function __construct()
	{
		parent::Controller();
	}

	function index()
	{
		// Подключим библиотеку валидации полей
		$this->load->library('validation');
		$this->lang->load('help');
		$this->validation->set_error_delimiters('<li>▪ ', '</li>');
		
		// Установим правила для валидации
		$rules['login'] = "trim|required|min_length[3]|max_length[20]|xss_clean";
		$rules['password'] = "trim|required|min_length[6]|max_length[32]|matches[passconf]|md5";
		$rules['passconf'] = "trim|required";
		$rules['email'] = "trim|required|valid_email";

		// Применяем правила
		$this->validation->set_rules($rules);
		
		//Атрибуты полей ввода
		$data['login'] = array('name' => 'login', 'id' => 'login');
		$data['email'] = array('name' => 'email', 'id' => 'email');
		$data['password'] = array('name' => 'password', 'id' => 'password');
		$data['passconf'] = array('name' => 'passconf', 'id' => 'passconf');

		if ($this->validation->run() == FALSE)
		{
			// Массив данных
			$data['title'] = 'Регистрация';
			$data['help'] = $this->lang->line('help_reg_about');
			
			// Подгрузка страниц из одноименных файлов
			// $partials = array('content'=>'about', 'sidebar'=>'help')
			$partials = array('content'=>'reg_form_view', 'sidebar'=>'helper_view');

			// Создание и загрузка страницы с данными
			$this->template->load('template_view', $partials, $data);
		}
		else
		{
			// Массив данных
			$data['title']  = 'Регистрация успешно завершена';
			
			// Подгрузка страниц из одноименных файлов
			// $partials = array('content'=>'about', 'sidebar'=>'help')
			$partials = array('content'=>'form_success_view', 'sidebar'=>'hello');
			$this->load->model('registration_model','', TRUE);
			$this->registration_model->add_user();
			// Создание и загрузка страницы с данными
			$this->template->load('template_view', $partials, $data);
		}
		
	}
}
?>