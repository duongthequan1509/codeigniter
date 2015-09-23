<?php
class Main extends CI_Controller
{
    public function index()
    {
        $this->load->helper('array'); //load helper array
 
        //Tạo biến $arr chứa một mảng bất kỳ
        $arr = array(
            "Thomas Jefferson"=>"I find that the harder I work, the more luck I seem to have.",
            "George Burns"=>"Don't stay in bed, unless you can make money in bed.",
            "Vince Lombardi"=>"We didn't lose the game; we just ran out of time.",
            "Mario Andretti"=>"If everything seems under control, you're not going fast enough.",
            "Albert Einstein"=>"Reality is merely an illusion, albeit a very persistent one.",
            "Louis Pasteur"=>"Chance favors the prepared mind"
        );
 
        //Lấy ra một phần từ bên trong mảng
        $data['Albert_Einstein'] = element("Albert Einstein",$arr);
 
        //Lấy ra một phần tử bất kỳ bên trong mảng
        $data['Random_Element'] = random_element($arr);
 
        //Lấy ra nhiều phẩn từ một mảng và tạo thành một mảng mới
        $data['Elements'] = elements(array("Thomas Jefferson","George Burns","Louis Pasteur"),$arr);
 
        $this->load->view('main-view',$data);
    }
}
?>