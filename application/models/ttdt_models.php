<?php
    class Ttdt_models extends CI_Model{
        protected $table='news';
		function __construct(){
            $this->load->database(); 
		}
		function insert_data($data){
			$this->db->insert($this->table,$data);   
        } 
		function insert_comment($data){
			$this->db->insert('comment',$data);   
        }  	
		function list_all($number,$offset){
            $query =  $this->db->get('news',$number,$offset); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_sukien($number,$offset){
			$this->db->where('type','sukien');
            $query =  $this->db->get('news',$number,$offset); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function count_all(){
			return $this->db->count_all('news'); //dem so hang
			}
		function list_hot(){
		    $this->db->order_by("view desc");
			$this->db->limit('8');
			$query =  $this->db->get('news');
            return $query->result_array(); //tra ve theo mang
 	    }
		
		function list_moi(){
			$this->db->order_by('create_at', 'desc');
			$this->db->limit('4','2');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_moitrai(){
			$this->db->order_by('create_at', 'desc');
			$this->db->limit('1');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_sanpham(){
			$this->db->where('type','sanpham');
			$this->db->order_by('RAND()');
			$this->db->limit('12');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_sanphamthem(){
			$this->db->where('type','sanpham');
			$this->db->order_by('RAND()');
			$this->db->limit('3');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_sanphamtop(){
			$this->db->where('type','sanpham');
			$this->db->order_by('RAND()');
			$this->db->limit('1');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_video(){
			$this->db->where('type','video');
			$this->db->order_by('RAND()');
			$this->db->limit('9');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_videott(){
			$this->db->where('type','video');
			$this->db->order_by('RAND()');
			$this->db->limit('4');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_videothem(){
			$this->db->where('type','video');
			$this->db->order_by('RAND()');
			$this->db->limit('3');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_videotop(){
			$this->db->where('type','video');
			$this->db->order_by('RAND()');
			$this->db->limit('1');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_lienquan(){
			$this->db->where('type','tintuc');
			$this->db->limit('3');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_chude($data){
			$this->db->where('type_dr',$data);
			$this->db->order_by('RAND()');
			$this->db->limit('10');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_tinthem(){
			$this->db->where('type','tintuc');
			$this->db->order_by('RAND()');
			$this->db->limit('3');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_tin(){
			$this->db->where('type','tintuc');
			$this->db->order_by('RAND()');
			$this->db->limit('8');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_tintren(){
			$this->db->where('type','tintuc');
			$this->db->order_by('RAND()');
			$this->db->limit('1');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
			function list_tinlmhtthem(){
			$this->db->where('type','tintuc');
			$this->db->where('type_dr','LMHT');
			$this->db->order_by('RAND()');
			$this->db->limit('3');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_tinlmht(){
			$this->db->where('type','tintuc');
			$this->db->where('type_dr','LMHT');
			$this->db->order_by('RAND()');
			$this->db->limit('6');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_tinlmhttren(){
			$this->db->where('type','tintuc');
			$this->db->where('type_dr','LMHT');
			$this->db->order_by('RAND()');
			$this->db->limit('1');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_tinffthem(){
			$this->db->where('type','tintuc');
			$this->db->where('type_dr','FFO3');
			$this->db->order_by('RAND()');
			$this->db->limit('3');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_tinff(){
			$this->db->where('type','tintuc');
			$this->db->where('type_dr','FFO3');
			$this->db->order_by('RAND()');
			$this->db->limit('6');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function list_tinfftren(){
			$this->db->where('type','tintuc');
			$this->db->where('type_dr','FFO3');
			$this->db->order_by('RAND()');
			$this->db->limit('1');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		function delete_data($id){
			$this->db->where("id","$id");
			$this->db->delete("news");
	   }
	    function edit_data($data,$id){
			$this->db->where("id","$id");
			$this->db->update("news",$data);
	   }
	   function getDataById($id){
	 	$this->db->where('id', $id);
		$result = $this->db->get('news');
		$data = $result->row_array();
		return $data;
	   }
	   function getcommentById($id){
	 	$this->db->where('comment.id', $id);
		$result = $this->db->get('comment');
		$data = $result->result_array();
		return $data;
	   }
	   function check($u,$p){
       $this->db->where("name",$u);
       $this->db->where("password",$p);
       $result=$this->db->get('admin');
       $checkdata=$result->row_array();
       return $checkdata;  
   		}
	   function search($keyword)
   	    {
      
		$this->db->like('type',$keyword);
			$this->db->or_like('type_dr',$keyword); 
				$this->db->or_like('title',$keyword);  
        $query  =   $this->db->get('news');
        return $query->result_array();
    	}
		function tag($id){
			$this->db->select('tag');
			$this->db->where('id', $id);
			$result = $this->db->get('news');
			$data = $result->row_array();
			return $data;
			
			}
	    function quanly_tt(){
			$this->db->where('type','tintuc');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		 function quanly_sk(){
			$this->db->where('type','sukien');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		 function quanly_sp(){
			$this->db->where('type','sanpham');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
		 function quanly_vd(){
			$this->db->where('type','video');
            $query =  $this->db->get('news'); // select * form news
            return $query->result_array(); //tra ve theo mang
 	    }
}		
?> 