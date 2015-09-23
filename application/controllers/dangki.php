
<?php
    class dangki extends CI_Controller{
        
        function __construct(){
            parent::__construct();
           	$this->load->model('dangki_models'); 
        }
        
        function index(){
						$this->load->view('dangki-view');
			}
	}