<?php
Class Pages extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function form($id){
		$data['page'] = new Page($id);
		$this->template->build('admin/form',$data);
	}
	
	function save($id=false)
	{
		if($_POST){
			$page = new Page($id);
            if(!$id)$_POST['user_id'] = $this->session->userdata('id');
            $_POST['module'] = $_GET['module'];
			$page->from_array($_POST);
			$page->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect('pages/admin/pages/form/'.$id.'?module='.$_GET['module']);
	}
	
}
?>