<?php

class Ttdt extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('ttdt_models');
		$this->load->library("session");
    }
	function index(){
		$data['hot'] = $this->ttdt_models->list_hot();
		$data['videott'] = $this->ttdt_models->list_videott();
		$data['tin'] = $this->ttdt_models->list_tin();
		$data['tintren'] = $this->ttdt_models->list_tintren();
		$data['moi'] = $this->ttdt_models->list_moi();
		$data['moitrai'] = $this->ttdt_models->list_moitrai();
		$data['sanpham'] = $this->ttdt_models->list_sanpham();
		$this->load->view('ttdt_view',$data);
		
		}
	function shop(){
		$this->load->view('shop');
		}
	//function admin(){
//		$session_id = $this->session->userdata('id');
//		$session_name=$this->session->set_userdata('name');
//	    if(!$session_id){
//             header("location: http://thethaodt.vn/ttdt/login");
//        }
//		
//     // load thư viện cần thiết
//        $this->load->library('pagination');
//        $this->load->helper('url');
//        // cấu hình phân trang
//        $config['base_url'] = base_url('ttdt/admin'); // xác định trang phân trang
//        $config['total_rows'] = $this->ttdt_models->count_all(); // xác định tổng số record
//        $config['per_page'] = 4; // xác định số record ở mỗi trang
//        $config['uri_segment'] = 3; // xác định segment chứa page number
//		$config['next_link']   = "-->";
//		$config['prev_link']   = "<--";
//		$this->pagination->initialize($config);
//        $data['data'] = $this->ttdt_models->list_all($config['per_page'],$this->uri->segment(3));
//		$this->load->view('admin.php',$data);
//		
//		}
	function sanpham(){
		$data['hot'] = $this->ttdt_models->list_hot();
		$data['video'] = $this->ttdt_models->list_video();
		$data['tin'] = $this->ttdt_models->list_tin();
		$data['moi'] = $this->ttdt_models->list_moi();
		$data['sanpham'] = $this->ttdt_models->list_sanpham();
		$data['sanphamtop'] = $this->ttdt_models->list_sanphamtop();
		$data['sanphamthem'] = $this->ttdt_models->list_sanphamthem();
		$this->load->view('sanpham',$data);
		
		}
	function lmht(){
		$data['hot'] = $this->ttdt_models->list_hot();
		$data['video'] = $this->ttdt_models->list_video();
		$data['tinlmht'] = $this->ttdt_models->list_tinlmht();
		$data['moi'] = $this->ttdt_models->list_moi();
		$data['tinlmhttren'] = $this->ttdt_models->list_tinlmhttren();
		$data['tinlmhtthem'] = $this->ttdt_models->list_tinlmhtthem();
		$this->load->view('lmht',$data);
		
		}
	function fifa(){
		$data['hot'] = $this->ttdt_models->list_hot();
		$data['video'] = $this->ttdt_models->list_video();
		$data['tinff'] = $this->ttdt_models->list_tinff();
		$data['moi'] = $this->ttdt_models->list_moi();
		$data['tinfftren'] = $this->ttdt_models->list_tinfftren();
		$data['tinffthem'] = $this->ttdt_models->list_tinffthem();
		$this->load->view('ff3',$data);
		
		}
	function video(){
		$data['hot'] = $this->ttdt_models->list_hot();
		$data['tin'] = $this->ttdt_models->list_tin();
		$data['moi'] = $this->ttdt_models->list_moi();
		$data['video'] = $this->ttdt_models->list_video();
		$data['videotop'] = $this->ttdt_models->list_videotop();
		$data['videothem'] = $this->ttdt_models->list_videothem();
		$this->load->view('video',$data);
		
		}
	function sukien(){
		$data['hot'] = $this->ttdt_models->list_hot();
		$data['video'] = $this->ttdt_models->list_video();
		$data['tin'] = $this->ttdt_models->list_tin();
		$data['moi'] = $this->ttdt_models->list_moi();
		$data['sanpham'] = $this->ttdt_models->list_sanpham();
		$this->load->library('pagination');
        $this->load->helper('url');
        // cấu hình phân trang
        $config['base_url'] = base_url('ttdt/sukien'); // xác định trang phân trang
        $config['total_rows'] = $this->ttdt_models->count_all(); // xác định tổng số record
        $config['per_page'] = 4; // xác định số record ở mỗi trang
        $config['uri_segment'] = 3; // xác định segment chứa page number
		$config['next_link']   = "Sau";
		$config['prev_link']   = "Trước";
		$config['first_link']   = "Đầu";
		$config['last_link']   = "Cuối";
		$this->pagination->initialize($config);
        $data['sukien'] = $this->ttdt_models->list_sukien($config['per_page'],$this->uri->segment(3));
			$this->load->view('sukien',$data);
		}
	function LMHT_news(){
		$this->load->view('LMHT_news');
		}
	function url($data) {
        function removesign($str) {
            $coDau = array("à", "á", "ạ", "ả", "ã", "â", "ầ", "ấ", "ậ", "ẩ", "ẫ", "ă", "ằ", "ắ"
                , "ặ", "ẳ", "ẵ", "è", "é", "ẹ", "ẻ", "ẽ", "ê", "�?", "ế", "ệ", "ể", "ễ", "ì", "í", "ị", "ỉ", "ĩ",
                "ò", "ó", "�?", "�?", "õ", "ô", "ồ", "ố", "ộ", "ổ", "ỗ", "ơ"
                , "�?", "ớ", "ợ", "ở", "ỡ",
                "ù", "ú", "ụ", "ủ", "ũ", "ư", "ừ", "ứ", "ự", "ử", "ữ",
                "ỳ", "ý", "ỵ", "ỷ", "ỹ",
                "đ",
                "À", "�?", "Ạ", "Ả", "Ã", "Â", "Ầ", "Ấ", "Ậ", "Ẩ", "Ẫ", "Ă"
                , "Ằ", "Ắ", "Ặ", "Ẳ", "Ẵ",
                "È", "É", "Ẹ", "Ẻ", "Ẽ", "Ê", "Ề", "Ế", "Ệ", "Ể", "Ễ",
                "Ì", "�?", "Ị", "Ỉ", "Ĩ",
                "Ò", "Ó", "Ọ", "Ỏ", "Õ", "Ô", "Ồ", "�?", "Ộ", "Ổ", "Ỗ", "Ơ"
                , "Ờ", "Ớ", "Ợ", "Ở", "Ỡ",
                "Ù", "Ú", "Ụ", "Ủ", "Ũ", "Ư", "Ừ", "Ứ", "Ự", "Ử", "Ữ",
                "Ỳ", "�?", "Ỵ", "Ỷ", "Ỹ",
                "�?", "ê", "ù", "à", " ");
            $khongDau = array("a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a"
                , "a", "a", "a", "a", "a", "a",
                "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e",
                "i", "i", "i", "i", "i",
                "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o"
                , "o", "o", "o", "o", "o",
                "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u",
                "y", "y", "y", "y", "y",
                "d",
                "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A"
                , "A", "A", "A", "A", "A",
                "E", "E", "E", "E", "E", "E", "E", "E", "E", "E", "E",
                "I", "I", "I", "I", "I",
                "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O"
                , "O", "O", "O", "O", "O",
                "U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U",
                "Y", "Y", "Y", "Y", "Y",
                "D", "e", "u", "a", "-");
            return str_replace($coDau, $khongDau, $str);
        }
        function removeSpecialChars($input) {
            return preg_replace('/[^a-zA-Z0-9\_]/', ' ', strtolower($input));
        }
        function cleanUpSpecialChars($string, $allowUnder = false) {
            $regExpression = "`\W`i";
            if ($allowUnder)
                $regExpression = "`[^a-zA-Z0-9-]`i";
            	$string = preg_replace(array($regExpression, "`[-]+`",), "-", $string);
            	return trim($string, '-');
        }

        $nameUrlSeo = cleanUpSpecialChars(removeSpecialChars(removesign($data)));
        return $nameUrlSeo;
   		 }
	function insert(){
	  $session_id = $this->session->userdata('id');
			$session_name=$this->session->userdata('name');
	   		 if(!$session_id){
             header("location: http://thethaodt.vn/ttdt/login");
               }
		   $data['admin']=$session_name;
	  if(!$session_id){
             header("location: http://thethaodt.vn/ttdt/login");
        }
      if($this->input->post('them'))
      {
		 if (empty($_POST['title']))
		  {
            echo "Moi bạn nhập đầy đủ thông tin !";
        }
		 elseif (empty($_POST['type_dr']))
		  {
            echo "Moi bạn nhập đầy đủ thông tin !";
        } 
		elseif (empty($_POST['content']))
		  {
            echo "Moi bạn nhập đầy đủ thông tin !";
        } 
		else {
         //Khai bao bien cau hinh
         $config = array();
         //thuc mục chứa file
         $config['upload_path']   = './public/upload/user';
         //Định dạng file được phép tải
         $config['allowed_types'] = 'jpg|png|gif';
         //Dung lượng tối đa
         
         //load thư viện upload
         $this->load->library('upload', $config);
         //thuc hien upload
         if($this->upload->do_upload('image'))
         {
             //chua mang thong tin upload thanh con
             $data = $this->upload->data();
             //in cau truc du lieu cua file da upload
            
			 $anh=$data['file_name'];
         }
         else
         {
            //hien thi lỗi nếu có
            $error = $this->upload->display_errors();
            echo $error;
         }
		 $d = strtotime('-3 H');		
	     $date=date('Y-m-d H:i:s:a',$d);
 		 $data = array(
		 		'create_at'=>$date,
                'img' => $anh,
                'title' => $_POST['title'],
				'url' => $this->url($_POST['title']),
                'type_dr' => $_POST['type_dr'],
				'type' => $_POST['type'],
				'sumay' => $_POST['sumay'],
                'content' => $_POST['content'],
            );
		  $this->ttdt_models->insert_data($data);
		  header("location: http://thethaodt.vn/ttdt/quanly");
		  }
		}
		  $this->load->view('insert_data',$data);
		}
	function new_view($id){
		if(isset($_POST['submit'])){
		  $d = strtotime('-3 H');		
	     $date=date('Y-m-d H:i:s:a',$d);
 		 $data = array(
		 		'date'=>$date,
				'id'=>$id,
                'author' => $_POST['name'],
                'content' => $_POST['noidung'],
            );
		  $this->ttdt_models->insert_comment($data);
		 }
		$data['hot'] = $this->ttdt_models->list_hot();
		
		$data['data1'] = $this->ttdt_models->getDataById($id);
		$data['comment'] = $this->ttdt_models->getcommentById($id);
		$tag = $this->ttdt_models->tag($id);
		$chuoi=$tag['tag'];
		$x = explode(",",$chuoi);
		$data['tag']=$x;$data['sotag']=count($x);
		$data['sanpham'] = $this->ttdt_models->list_sanpham();
		$query=$this->ttdt_models->getDataById($id);
		$view=$query['view']+1;
		$data['lienquan'] = $this->ttdt_models->list_lienquan();
		$chude=$query['type_dr'];
		$data['chude'] = $this->ttdt_models->list_chude($chude);
		$luotxem = array(
               'view'=>$view,
            );
		$this->ttdt_models->edit_data($luotxem,$id);
		$this->load->view('news_view',$data);
		}
	function delete() {
		$session_id = $this->session->userdata('id');
	  if(!$session_id){
             header("location: http://thethaodt.vn/ttdt/login");
        }
        $id = $_GET['newsid'];
        $this->ttdt_models->delete_data($id);
       header("location: http://thethaodt.vn/ttdt/quanly");
    }
	function edit(){
	  $session_id = $this->session->userdata('id');
			$session_name=$this->session->userdata('name');
	   		 if(!$session_id){
             header("location: http://thethaodt.vn/ttdt/login");
               }
	  if(!$session_id){
             header("location: http://thethaodt.vn/ttdt/login");
        }
	  $id = $_GET['newsid'];
      if($this->input->post('them'))
      {
		 if (empty($_POST['title']))
		  {
            echo "Moi bạn nhập đầy đủ thông tin !";
        }
		 elseif (empty($_POST['type_dr']))
		  {
            echo "Moi bạn nhập đầy đủ thông tin !";
        } 
		elseif (empty($_POST['content']))
		  {
            echo "Moi bạn nhập đầy đủ thông tin !";
        } 
		else {
         //Khai bao bien cau hinh
         $config = array();
         //thuc mục chứa file
         $config['upload_path']   = './public/upload/user';
         //Định dạng file được phép tải
         $config['allowed_types'] = 'jpg|png|gif';
         //load thư viện upload
         $this->load->library('upload', $config);
         //thuc hien upload
         if($this->upload->do_upload('image'))
         {
             //chua mang thong tin upload thanh con
             $data = $this->upload->data();
             //in cau truc du lieu cua file da upload
			 $anh=$data['file_name'];
         }
         else
         {
			 $data1 = $this->ttdt_models->getDataById($id);
             $anh=$data1['img'];
         }
		 if(isset($anh)){
		 $d = strtotime('-3 H');		
	     $date=date('Y-m-d H:i:s:a',$d);
 		 $data = array(
               'create_at'=>$date,
                'img' => $anh,
                'title' => $_POST['title'],
				'url' => $this->url($_POST['title']),
                'type_dr' => $_POST['type_dr'],
				'type' => $_POST['type'],
				'sumay' => $_POST['sumay'],
                'content' => $_POST['content'],
            );
		 
		  $this->ttdt_models->edit_data($data,$id);
		   header("location: http://thethaodt.vn/ttdt/quanly");
		  }
		}
		}
		  $data1 = $this->ttdt_models->getDataById($id);
		    $data1['admin']=	$session_name;
		  $this->load->view('edit_data',$data1);
		} 
		
		
		function login() {
        $this->load->view('ttdt_login');
        if (isset($_POST['submit'])) { // kiem tra xem co an nut dang nhap ko		
                $data['u'] = $_POST['name'];
                $data['p'] = $_POST['password'];

            //kiem tra du lieu tu form
            //ket noi CSDL , session
            if (isset($data)) {
                $dulieu = $this->ttdt_models->check($data['u'], $data['p']);
                if (count($dulieu) == 0) {
                    echo "Username or password is not correct, please try again";
                } else {
                     $this->session->set_userdata('id',$dulieu['id'] );
                     $this->session->set_userdata('name',$dulieu['name'] );
                     header("location: http://thethaodt.vn/ttdt/quanly");
                   
                 }
              }
           }
        }
	   function Logout(){
        $this->session->sess_destroy();
        header("location: http://thethaodt.vn/ttdt/login");
        
       }
	   function quanly(){
		    $session_id = $this->session->userdata('id');
			$session_name=$this->session->userdata('name');
	   		 if(!$session_id){
             header("location: http://thethaodt.vn/ttdt/login");
               }
		   $data['admin']=$session_name;	
		   $data['soluongtt']=count($this->ttdt_models->quanly_tt());
		   $data['soluongsk']=count($this->ttdt_models->quanly_sk());
		   $data['soluongsp']=count($this->ttdt_models->quanly_sp());
		   $data['soluongvd']=count($this->ttdt_models->quanly_vd());
		   $this->load->view('quanly.php',$data);
		   }
	    function quanly_tt(){
			$session_id = $this->session->userdata('id');
			$session_name=$this->session->userdata('name');
	   		 if(!$session_id){
             header("location: http://thethaodt.vn/ttdt/login");
               }
		   $data['admin']=$session_name;
		   $data['quanly_tt'] = $this->ttdt_models->quanly_tt();
		   $this->load->view('quanly_tt.php',$data);
		   }
		 function quanly_sp(){
			$session_id = $this->session->userdata('id');
			$session_name=$this->session->userdata('name');
	   		 if(!$session_id){
             header("location: http://thethaodt.vn/ttdt/login");
               }
		   $data['admin']=$session_name;
		   $data['quanly_sp'] = $this->ttdt_models->quanly_sp();
		   $this->load->view('quanly_sp.php',$data);
		   }
		 function quanly_sk(){
			$session_id = $this->session->userdata('id');
		   $session_name=$this->session->userdata('name');
	   	   if(!$session_id){
           header("location: http://thethaodt.vn/ttdt/login");
               }
		   $data['admin']=$session_name;
		   $data['quanly_sk'] = $this->ttdt_models->quanly_sk();
		   $this->load->view('quanly_sk.php',$data);
		   }
		   function quanly_vd(){
			$session_id = $this->session->userdata('id');
			$session_name=$this->session->userdata('name');
	   		if(!$session_id){
            header("location: http://thethaodt.vn/ttdt/login");
               }
		   $data['admin']=$session_name;
		   $data['quanly_vd'] = $this->ttdt_models->quanly_vd();
		   $this->load->view('quanly_vd.php',$data);
		   }
	    function search()
    		{
			$data['hot'] = $this->ttdt_models->list_hot();
			$data['video'] = $this->ttdt_models->list_video();
			$data['tin'] = $this->ttdt_models->list_tin();
			$data['moi'] = $this->ttdt_models->list_moi();
			$keyword =$this->input->post('name');
			if(isset($_GET['tag'])){
			$keyword=$_GET['tag'];}
			$data['results'] =  $this->ttdt_models->search($keyword);
			$data['soluong']=count($data['results']);
			$this->load->view('search',$data);
   		 }
		 function check(){
			 $this->load->view('check');
			 } 
			 function test(){
			 $this->load->view('inu');
			 } 
			  function js(){
			 $this->load->view('js');
			 } 

}