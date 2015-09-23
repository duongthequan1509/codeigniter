 <?php
    class Sach_Models extends CI_Model{
		protected $table = "sach";
        function __construct(){
			//
        }
        
        function list_all(){
            $query =  $this->db->get($this->table);
			echo $this->db->last_query(); die();
            return $query->result_array();
        }
    }
?> 