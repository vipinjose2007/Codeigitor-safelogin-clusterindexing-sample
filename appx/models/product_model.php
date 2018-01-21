<?php
  class Product_model extends CI_Model {
       
      public function __construct(){
          
        $this->load->database();
		$this->load->library('encrypt');
		$this->load->library('session');
			$this->load->helper(array('form', 'url'));
			//$this->load->library('image_lib');
			
        
      } 

      public function getAllProducts(){  

        $this->db->select('products.name,products.name,products.descr,products.img,category.name as category_name, 
		');
		$this->db->from('products');
		$this->db->join('category', "category.id = products.category", 'left');
		$this->db->order_by('products.category','DESC');
        $query = $this->db->get();           
        $result = $query->result_array(); // print_r($result);exit;
              return $result;
           
      }
	  	public function get_allcategory()
	{
		
		 
		$query = $this->db->get('category') ;
		$result = $query->result() ;
		return $result ;
	}  
	
	 	public function saveProductvaluesAction()
	{
		 $this->load->library('upload');
		$prod_name = $this->input->post("pname");
		$descr = $this->input->post("descr");
		$category = $this->input->post("category");
		
		 
		$img_name = md5(time());
	
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = $img_name;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('file_up');
	 

		$name = $_FILES['file_up']['name'];
		$path='uploads/';
		$ext = end(explode(".",$name));
		$mainimg = $path.$img_name.'.'.$ext;
		$data = array(
				'category' => $category,
				'name' => $prod_name, 
				'descr' => $descr, 
				'img' => $mainimg, 
				//'url_key' => $this->generate_url_key(strtolower($prod_name)),
		);
		
	
		$query = $this->db->insert('products', $data);
		if($query){
			//echo "gugugugu";
			return TRUE;
		}else{
			return FALSE;
		}
	 
	}
public function checkLogin() {
		
        $this->load->library('encrypt');
		
		$username = trim($this->input->post('username')); //exit;
	    $password = trim($this->input->post('password'));
		
		//echo $encode_password = $this->encrypt->encode($password);
		
		$this->db->select('*')->from('users');
		$this->db->where('username',$username);
		$this->db->where('status', '1');
		$query = $this->db->get();		
		$result = $query->result_array();
		// echo $this->db->last_query(); echo $this->encrypt->decode($result[0]['password']); 
		 
		if(!empty($result)){
			$detail = $result[0];
			}
		
		if(strcmp($this->encrypt->decode($detail['password']), $password)==0) { 

		$eeid = $detail['emp_id'];		 
		
		     
			$session_data = array('uid'=>$eeid);
			//echo '<pre>'; print_r($session_data); exit;
			$this->session->set_userdata($session_data);
			$all = $this->session->all_userdata();  
			
		    $user_id  = $this->session->userdata('uid'); 
			//self::get_all_privilage_resourses_menu_by_user_id( $user_id);	
			return true;
		}else{
			return false;	
		}
		
	}
	

 
}