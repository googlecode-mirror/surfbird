<?
Class Welcome extends Controller
{
   function Welcome()
   {
     parent::Controller();
      $this->    load->    helper('url');
      $this-> load-> helper('form');
      $this->load->library('calendar');
      $this->load->view('header');


   }
function index()
{

      $data['query']=$this->db->get('records'); // выборка всех записей из табл.
      $this->load->view('welcome_view',$data); // отправка данных во вьюер

}
function comments()
{
        $id=$this->    uri->    segment(3); // получаем номер записи блога из URL
        //(то что после третьего слэша)
        // подробнее о классе URI можно посмотреть в мануале
        $this->    db->    where('id',$id); // определяем условие выборки текущей записи
        // подробнее о реализации интерфейса к БД можно почитать в мануале
        $query1=$this->    db->    get('records'); // получам основную запись
        $data1 = $query1->    result();
        $this->    db->    where('record_id',$id); // определяем условие выборки комментариев
        $query2=$this->    db->    get('comments'); // получам комментарии из БД
        $data2 = $query2->    result();
        $this->    load->    view('comment_view', array('data1' =>     $data1, 'data2' =>     $data2));
        // в отличие от предыдущего контроллера здесь во вьюер передается массив данных.
}
function comment_add()
             {
                        $this-> db-> insert('comments',$_POST);
                        //!!! insert беззащитен от всякой фигни
                        redirect('welcome/comments/'.$_POST['record_id']);
                        // редирект на исходную позицию
             }
  }
?>