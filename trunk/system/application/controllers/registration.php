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
		$this->validation->set_error_delimiters('<li>▪ ', '</li>');
		
		// Установим правила для валидации
		$rules['login'] = "trim|required|min_length[3]|max_length[20]|xss_clean";
		$rules['password'] = "trim|required|min_length[6]|max_length[32]|matches[passconf]";
		$rules['passconf'] = "trim|required";
		$rules['email'] = "trim|required|valid_email";
		$rules['icq'] = "trim|min_length[6]|max_length[9]|numeric";
		$rules['phone'] = "trim|min_length[11]|max_length[15]|alpha_dash";
		$rules['skype'] = "trim|min_length[6]|max_length[32]|alpha_numeric";
		$rules['vk'] = "trim|min_length[1]|max_length[9]|numeric";
		$rules['name'] = "trim|min_length[3]|max_length[15]|xss_clean";
		
		// Применяем правила
		$this->validation->set_rules($rules);
		
		//Атрибуты полей ввода
		$data['login'] = array('name' => 'login', 'id' => 'login');
		$data['email'] = array('name' => 'email', 'id' => 'email');
		$data['password'] = array('name' => 'password', 'id' => 'password');
		$data['passconf'] = array('name' => 'passconf', 'id' => 'passconf');
		$data['icq'] = array('name' => 'icq', 'id' => 'icq');
		$data['phone'] = array('name' => 'phone', 'id' => 'phone');
		$data['skype'] = array('name' => 'skype', 'id' => 'skype');
		$data['vk'] = array('name' => 'vk', 'id' => 'vk');
		$data['name'] = array('name' => 'name', 'id' => 'name');
		$data['male'] = array('name' => 'sex[]', 'id' => 'male', 'checked' => FALSE);
		$data['female'] = array('name' => 'sex[]', 'id' => 'female', 'checked' => FALSE);
		$data['car'] = array('name' => 'car[]', 'id' => 'car', 'checked' => FALSE);
		$data['no_car'] = array('name' => 'car[]', 'id' => 'no_car', 'checked' => FALSE);
		
		if ($this->validation->run() == FALSE)
		{
			// Массив данных
			$data['title']  = 'Регистрация';
			
			// Подгрузка страниц из одноименных файлов
			// $partials = array('content'=>'about', 'sidebar'=>'help')
			$partials = array('content'=>'reg_form_view', 'sidebar'=>'hello');
			
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
			
			// Создание и загрузка страницы с данными
			$this->template->load('template_view', $partials, $data);
		}
		
    }
}
?>