<?php

class Quiz extends CI_Controller {

    protected $table = 'news';

    function __construct() {
        parent::__construct();
        $this->load->Model('Quiz_models');

        //neu chua login
    }

    function __destruct() {
       

//    if($this->_user_is_login())
//    {
//       //neu thanh vien da dang nhap thi xoa session login
//       $this->session->unset_userdata('login');
//    }
//    header("location: http://codeigniter.vnn/quiz/index1"); 
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

    function insert() {
        $this->load->view('insert_view');
        if (empty($_POST['name'])) {
            echo "M�?i bạn nhập đầy đủ thông tin !";
        } elseif (empty($_POST['desseo'])) {
            echo "M�?i bạn nhập đầy đủ thông tin !";
        } elseif (empty($_POST['content'])) {
            echo "M�?i bạn nhập đầy đủ thông tin !";
        } else {
            $data = array(
                'name' => $_POST['name'],
                'url' => $this->url($_POST['name']),
                'desseo' => $_POST['desseo'],
                'content' => $_POST['content'],
                'active' => $_POST['active'],
            );
            $this->Quiz_models->insert_data($data);
            header("location: http://codeigniter.vnn/quiz/index1");
        }
    }

    function delete() {

        $id = $_GET['newsid'];

        $this->Quiz_models->delete_data($id);
        header("location: http://codeigniter.vnn/quiz/index1");
    }

    function edit() {
        $session_id = $this->session->userdata('id');
        $session_name = $this->session->userdata('name');
        if(!$session_id){
             header("location: http://codeigniter.vnn/quiz/index");
        }
        
        $id = $_GET['newsid'];
        if (empty($_POST)) {
            echo "M�?i bạn nhập đầy đủ thông tin !";
        } elseif (empty($_POST['desseo'])) {
            echo "M�?i bạn nhập đầy đủ thông tin !";
        } elseif (empty($_POST['content'])) {
            echo "M�?i bạn nhập đầy đủ thông tin !";
        } else {
            $data = array(
                'name' => $_POST['name'],
                'url' => $this->url($_POST['name']),
                'desseo' => $_POST['desseo'],
                'content' => $_POST['content'],
                'active' => $_POST['active'],
            );
            $this->Quiz_models->edit_data($data, $_POST['id']);
            header("location: http://codeigniter.vnn/quiz/index1");
        }
        $data = $this->Quiz_models->getDataById($id);
       
        $this->load->view('edit_view', $data);
    
        
        }

    function index1() {
        $this->load->helper('url'); //load url helper array
        $data['baseURL'] = base_url();
        $data['data'] = $this->Quiz_models->list_all();

        $this->load->view('quiz_view', $data); //qua view thi mang 2 chieu thanh mang 1 chieu..
    }

    function xem() {
        $userid = $this->session->userdata('id');
        $data['data'] = $this->Quiz_models->list_all();
        echo "<pre>";
        
        $this->load->view('xem', $data);
    }

    function index() {
        $this->load->view('login_view');
        if (isset($_POST['ok'])) { // kiem tra xem co an nut dang nhap ko		
            if (isset($_POST['name'])) {
                $data['u'] = $_POST['name'];
            }
            if (isset($_POST['password'])) {
                $data['p'] = $_POST['password'];
            }

            //kiem tra du lieu tu form
            //ket noi CSDL , session
            if (isset($data)) {
                $dulieu = $this->Quiz_models->check($data['u'], $data['p']);
                if (count($dulieu) == 0) {
                    echo "Username or password is not correct, please try again";
                } else {
                     $this->session->set_userdata('id',$dulieu['id'] );
                     $this->session->set_userdata('level',$dulieu['level'] );
                      $this->session->set_userdata('name',$dulieu['name'] );
                    
                    if ($dulieu['level'] == 2) {
                        header("location: http://codeigniter.vnn/quiz/index1");
                    } else {
                        header("location: http://codeigniter.vnn/quiz/xem");
                      exit();
                    }
                }
            }
        }
    }
    function tin(){
        $id = $_GET['tinid'];
        $data = $this->Quiz_models->getContentById($id);
        
        $this->load->view('tin',$data);
        
    }
            function Logout(){
        $this->session->sess_destroy();
        header("location: http://codeigniter.vnn/quiz/index");
        
    }
}
