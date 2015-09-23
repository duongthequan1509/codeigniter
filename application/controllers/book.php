 <?php
    class Book extends CI_Controller{
        
        function __construct(){
            parent::__construct();
            $this->load->model('Book_Model');
        }
        
        function index(){
            // load thư viện cần thiết
            $this->load->library('pagination');
            $this->load->helper('url');
            $this->load->library('table');
            
            // cấu hình phân trang
            $config['base_url'] = base_url('/index.php/book'); // xác định trang phân trang
            $config['total_rows'] = $this->Book_Model->count_all(); // xác định tổng số record
            $config['per_page'] = 5; // xác định số record ở mỗi trang
            $config['uri_segment'] = 2; // xác định segment chứa page number
            
			$this->pagination->initialize($config);
           
			 
            // tạo table
            $this->table->set_heading('id','name');
            $data['data'] = $this->Book_Model->list_all($config['per_page'],$this->uri->segment(2));
            
            // load view
            $this->load->view('book/index',$data);
        }
        function them(){
			echo "fhhfhffhfhfhfhfhfhf";
				$data = array(
   						'name' => '$_POST[name]',
						'id'   => '$_POST[id]'
  						 
						);
			$this->db->insert('book', $data);  
			}
		function xoa(){
			$this->db->where('id',$id=11);
			$this->db->delete('book');  
			}
		function sua(){
			$data = array(
   						'name' => 'Hoa bi',
  						 
						);
			$this->db->where('id',$id=12);
			$this->db->update('book', $data); 
			}	
			
    }
	
	
	
?> 