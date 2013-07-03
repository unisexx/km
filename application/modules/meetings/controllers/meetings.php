<?php
class Meetings extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
	// ข่าว Highlights
    function index(){
    	$data['meeting'] = new Meeting();
		$data['contents']->get(5);
		
		$this->load->view('admin/index',$data);
    }
	
}
?>