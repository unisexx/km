<?php
Class Menu extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['menu'] = new Menus();
		$data['menu']->where("parent = 0")->get();
		
		$data["sub"] = new Menus();
		$data["sub"]->get();
		
		$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE)
	{
		$data['menu'] = new Menus();
		$data['menu']->where("parent = 0")->get();
		
		$data["sub"] = new Menus();
		$data["sub"]->get();
		
		$data["data"] = new Menus();
		$data["data"]->where("id = '$id'")->get();
				
		$data["categorie"] = new Content();
		$data["categorie"]->distinct('');
		$data["categorie"]->select("module");
		$data["categorie"]->get();
		
		$data["content"] = new Content();
		$data["content"]->get();
								
		$this->template->build("admin/form",$data);
	}
	
	function save($id=NULL)
	{
		if($_POST)
		{
			$data= new Menus($id);
			if(!$id)$_POST['user_id']=$this->session->userdata('id');
			if(!$id)$_POST['status']="draft";
			
			if($_POST["parent"]=='')$_POST["parent"]='0';
			if($_POST["url"]=='')$_POST["url"]='#';
			
			$data->from_array($_POST);
			$data->save();
			set_notify('success',lang('save_data_complete'));
		}
		redirect($_POST["referer"]);
	}
	
	function approve($id){
        if($_POST)
        {
            $content = new Menus($id);
            $content->from_array($_POST);
            $content->save();
        }
    }
	
	function delete($id)
	{
		if($_POST)
		{
			$data= new Menus($id);
			$data->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER["HTTP_REFERER"]);
	}
	
}