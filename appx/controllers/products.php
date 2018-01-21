<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
		
				//$this->load->library('session') ; 
				$this->load->helper('form') ;	
				//$this->load->library('encrypt');
    }
	
	public function listAllProducts()
	{
		 
		  $data['products'] = $this->product_model->getAllProducts();
		  //echo '<pre>'; print_r($result);exit;
		  $this->load->view('header');
		  $this->load->view('listProducts',$data);
		  
	}
	public function index()
	{
		 
		  $data['products'] = $this->product_model->getAllProducts();
		  //echo '<pre>'; print_r($result);exit;
		  $this->load->view('header');
		  $this->load->view('login',$data);
		  
	}
	
	public function checkLogin()
	{
		 
		   
		  if($this->product_model->checkLogin()==true){	
							  redirect('products/listAllProducts');
						}else {
							
							echo 'In-correct Username / Password ';

							}
		  
	}
	
	
	public function add_product()
	{
		//echo 'hii';
		  $data['products'] = $this->product_model->getAllProducts();
		  //echo '<pre>'; print_r($result);exit;
		  $this->load->view('header');
		  $this->load->view('addProducts',$data);
		  
	}
		public function get_category()
	{ 
		$result = $this->product_model->get_allcategory($country) ;
		foreach($result as $cat)
		{	
			echo '<option value="'.$cat->id.'">'.$cat->name.'</option>';
		}
		
	}   
	
			public function saveproductvalues()
	{ 
		
		 $this->product_model->saveProductvaluesAction();
		 redirect('products/listAllProducts');
		 
		 //echo $_FILES['file_up']['name'];
		  //echo '<pre>'; print_r($_POST);exit;
		  //$this->load->view('header');
		  //$this->load->view('addProducts',$data);
		  
		
	} 
	
}
