<?php

class Main extends Controller {

    function __construct()
    {
        parent::Controller();    
    }
    
    function index()
    {
		// ������ ������
        $data['title']  = '�������';
		
        // ��������� ������� �� ����������� ������
		// $partials = array('content'=>'about', 'sidebar'=>'help')
        $partials = array('content'=>'about', 'sidebar'=>'hello');
		
		// �������� � �������� �������� � �������
        $this->template->load('template_view', $partials, $data);
		
    }
}
?>