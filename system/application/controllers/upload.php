<?php

class Upload extends Controller {

	function Upload()
	{
		parent::Controller();
		$this->load->helper(array('form', 'url'));
	}


	function index()
	{
			$data['title']  = 'Загрузка файлов';
			$data['error']  = '';
			//$this->load->view('upload_form', array('error' => ' ' ));
			// Подгрузка страниц из одноименных файлов
			// $partials = array('content'=>'about', 'sidebar'=>'help')
			$partials = array('content'=>'upload_form_view', 'sidebar'=>'hello');

			// Создание и загрузка страницы с данными
			$this->template->load('template_view', $partials, $data);
		
	}
	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['encrypt_name']  = 'TRUE';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload())
		{
			$data = array('error' => $this->upload->display_errors(), 'title' => 'Загрузка файла');
			
			$partials = array('content'=>'upload_form_view', 'sidebar'=>'hello');

			// Создание и загрузка страницы с данными
			$this->template->load('template_view', $partials, $data);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data(), 'title' => 'Загрузка файла');
						
			$partials = array('content'=>'upload_success_view', 'sidebar'=>'hello');

			// Создание и загрузка страницы с данными
			$this->template->load('template_view', $partials, $data);
		}
	}	
}
?>