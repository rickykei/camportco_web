<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD');
 
    }
 
    public function index()
    {
       //$this->invoice();
	redirect("main/product");
                
    }
 
    public function product()
    {
        $this->grocery_crud->set_table('product');
		   $this->grocery_crud->display_as('sts','Status (Available/Inactive)')->display_as('gen_news','Gen. to news feed (Y/N)');
 
		$output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
	
	   public function advertisement()
    {
        $this->grocery_crud->set_table('advertisement');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
 
    public function category()
    {
        $this->grocery_crud->set_table('category');
		 $this->grocery_crud->columns('id','cat_name','cat_name_tc','display_seq');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
	
	
    public function company()
    {
        $this->grocery_crud->set_table('company');
$this->grocery_crud->columns('id','company_name','sts','display_seq');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
	  public function sub_category()
    {
        $this->grocery_crud->set_table('sub_category');
		 $this->grocery_crud->columns('id','cat_id','sub_cat_name','sub_cat_name_tc','display_seq');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
		  public function newslink()
    {
        $this->grocery_crud->set_table('newslink');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
		  public function slideshow()
    {
        $this->grocery_crud->set_table('slideshow');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
			  public function country()
    {
        $this->grocery_crud->set_table('country');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
			  public function postal_fee()
    {
        $this->grocery_crud->set_table('postal_fee');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
		  public function invoice()
    {
        $this->grocery_crud->set_table('invoice');
		$this->grocery_crud->order_by('id','desc');
		 $this->grocery_crud->display_as('email_sts','E-invoice Status (Ready/Sent)');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
		  public function invoice_item()
    {
        $this->grocery_crud->set_table('invoice_item');
		$this->grocery_crud->order_by('id','desc');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
    	 
    function _example_output($output = null)
   {
        $this->load->view('our_template.php',$output);    
    }
    
    public function import() {
    	
    	if (isset($_POST['action'])) {
    		// Import product file
    		$this->load->model('import_model');
    		$this->import_model->import($_FILES["uplFile"]["tmp_name"]);
    	}
    	
    	$this->load->view('import.php');
    }
}
 
