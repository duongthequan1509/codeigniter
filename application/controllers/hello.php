<?php
 
class hello extends CI_Controller
{
    function index()
    {
        $data['heading'] = "Đây là phần Heading của trang Hello.";
        $this->load->view('hello-view',$data); //using hello-view to show the html layout
    }
     
    function friend()
    {
        $data['friendName'] = $this->input->get('name');      
        $this->load->view('friend-view',$data); //using friend-view to show the html layout
    }
     
    function people()
    {
        $this->load->model('people_model');
        $data['people'] = $this->people_model->get_people();
        $this->load->view('people-view',$data);
    }
     
}
 
?>