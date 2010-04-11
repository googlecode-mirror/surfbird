<?
Class Main extends Controller
  {
    function Main()
     {
      parent::Controller();
     }
     function index()
     {
        $data['content']='Welcome to Surfing Bird!';
        $this->load->view('main_view',$data);  
     }
   }
?>  