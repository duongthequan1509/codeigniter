<?php
class News extends CI_Controller{
	public $_data;
	public $_class;
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		
		//layout
		$this->load->Model("Menu");
		$this->_data['menu']=$this->Menu->menus();
		$this->_data['contr']=__CLASS__;
	}

	public function add(){
		$this->_data['title']="This is Add action";
		$this->_data['message']="This is add <i>news</i> action";
		
		$this->_data['show']="Admin/News/Add";
		
		$this->load->view("Admin/layout",$this->_data);
		
	}
	public function view(){
		$this->_data['title']="This is View Action";
		$this->_data['message']="This is view <i>news</i> action";
		
		$this->_data['show']="Admin/News/View";
		
		$this->load->view("Admin/layout",$this->_data);
		
	}
}