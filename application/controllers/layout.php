 <?php
class Layout extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->model('Book_model');
    }
    public function index(){
        $temp['title']="QHOnline Layout";
        $temp['template']='index_layout';// view thong qua index_layout
        $temp['data']['info']="Welcome to CI Layout - QHOnline.Info"; //truyen cac tham so sang file index_layout, o day la truyen bien info vao index_layout voi gia tri cua info la "QHonline...."
        $this->load->view("bluesky/layout",$temp);
    }
} 