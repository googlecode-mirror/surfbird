<?php

class Main extends Controller {

    function __construct()
    {
        parent::Controller();    
    }
    
    function index()
    {
		// Массив данных
        $data['title']  = 'Главная';
		
        // Подгрузка страниц из одноименных файлов
		// $partials = array('content'=>'about', 'sidebar'=>'help')
        $partials = array('content'=>'about', 'sidebar'=>'hello');
		
		// Создание и загрузка страницы с данными
        $this->template->load('template_view', $partials, $data);
		
    }
}
?>