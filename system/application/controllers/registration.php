<?php
class Registration extends Controller {
       function Registration()
   {
     parent::Controller();
      $this->    load->    helper('url');
      $this-> load-> helper('form');
      $this->load->view('header');
   }
  function index()
  {
    #Input and textarea field attributes
    $data['fname'] = array('name' => 'fname', 'id' => 'fname');
    $data['email'] = array('name' => 'email', 'id' => 'email');
    $data['comments'] = array('name' => 'comments', 'id' => 'comments');

    #Checkbox attributes
    $data['purpose'] = array('name' => 'seminar', 'id' => 'purpose');
    $data['prepare'] = array('name' => 'seminar', 'id' => 'prepare');
    $data['principles'] = array('name' => 'seminar', 'id' => 'principles');
    $data['power'] = array('name' => 'seminar', 'id' => 'power');

    $this->load->view('registration_new', $data);
  }
}
?>