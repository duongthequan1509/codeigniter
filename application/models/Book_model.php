 <?php
    class Book_Model extends CI_Model{
       
		
		function __construct(){
            $this->load->database(); // load database
        }
        
        function list_all($number,$offset){
            $query =  $this->db->get('book',$number,$offset); // select
            return $query->result_array();
        }
		
		function count_all(){
			return $this->db->count_all('book'); //dem so hang
			
			}
    }
?> 