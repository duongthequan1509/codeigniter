<?php
 
class people_model extends CI_Model
{
     
    function get_people()
    {
        $query = $this->db->get('people'); // Giống như selected * from people
        return $query->result(); // trả về tất cả các giá trị lấy được trong bảng people về mảng 
    }
     
}
 
?>