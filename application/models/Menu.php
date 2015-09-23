<?php
class Menu extends CI_Model{
	public $_table;
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function menus(){
		$this->_table="cate";
		$menu['left']=$this->db->get($this->_table)->result_array();
		
		$menu['action']=array('add','view');
		
		$menu['controller']=array('News','User');
		return $menu;
	}
	
}