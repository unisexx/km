<?php
class Pages extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function view($id){
	    $data['page'] = new Page($id);
        $this->template->build('view',$data);
	}
}
?>
