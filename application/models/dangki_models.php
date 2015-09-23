 <?php
    class dangki_models extends CI_Model{
        function __construct(){
            $this->load->database(); // load database
        }
        
        function list_all(){
            $query =  $this->db->get('dangki'); // select
            return $query->result_array();
        }
		
		
    }
?> 