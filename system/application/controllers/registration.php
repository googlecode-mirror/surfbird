<?php

class Registration extends Controller {

    function __construct()
    {
        parent::Controller();    
    }
    
    function index()
    {
		
		#Input and textarea field attributes
		$data['login'] = array('name' => 'login', 'id' => 'login');
		$data['email'] = array('name' => 'email', 'id' => 'email');
		$data['pass'] = array('name' => 'pass', 'id' => 'pass');

		// Массив данных
        $data['title']  = 'Регистрация';
		
        // Подгрузка страниц из одноименных файлов
		// $partials = array('content'=>'about', 'sidebar'=>'help')
        $partials = array('content'=>'reg_form_view', 'sidebar'=>'hello');
		
		// Создание и загрузка страницы с данными
        $this->template->load('template_view', $partials, $data);
		
    }
}
?>