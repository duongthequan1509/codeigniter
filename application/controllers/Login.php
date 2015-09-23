<?php
class Login extends CI_Controller
{
    // Hàm load form login
    public function index()
    {
        $data['title']= "Day la trang login";
		
		// Load view
        $this->load->view('login-view',$data);
    }
}
?>