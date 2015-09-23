 <?php
 class Quiz_models extends CI_Model{
   protected $table='news';
   function __construct(){
            $this->load->database(); // load database mac dinh khi goi Models
        }
   function list_all(){
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
   }
  
   function insert_data($data){
			$this->db->insert($this->table,$data);   
        }  
   function delete_data($id){
        $this->db->where("id","$id");
        $this->db->delete("news");
	   }
  function edit_data($data,$id){
        $this->db->where("id","$id");
        $this->db->update("news",$data);
	   }
	 public function getDataById($id){
	 	$this->db->where('id', $id);
		$result = $this->db->get('news');
		$data = $result->row_array();
		return $data;
	 }
          public function getContentById($id){
	 	
                $this->db->select('content');
                $this->db->where('id', $id);
		$result = $this->db->get('news');
		$data2 = $result->row_array();
              
                return $data2 ;
	 }
	 function update_data($data){
			$this->db->update($this->table,$data);    
        }  		
   function check($u,$p){
       
       $this->db->where("name",$u);
       $this->db->where("password",$p);
       $result=$this->db->get('users');
       
       $checkdata=$result->row_array();
   
  
       return $checkdata;
       
       
       
   }
        
        
         }
 