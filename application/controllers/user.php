
<?php
    class user extends CI_Controller{
        
        function __construct(){
            parent::__construct();
            
        }
        
        function index(){
			$this->load->helper('form');
			
			
			
			$data['title']='dang ki thanh vien';
			$this->load->view('user',$data);
			}
	}