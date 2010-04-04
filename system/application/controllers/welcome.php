<?
Class Welcome extends Controller
{
   function Welcome()
   {
     parent::Controller();
   }
   function index()
   {
        $data['content']='Hello World';
        $this->load->view('welcome_message',$data);
   }
  }
?>