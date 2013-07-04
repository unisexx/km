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
		$data['menu']->get();
		
		$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE)
	{
		$data["data"] = new Menus();
		$data["data"]->where("id = '$id'")->get();
		
		$data["menu"]= new Menus();
		$data["menu"]->get();
						
		$this->template->build("admin/form",$data);
	}
	
	function parent_sub($id)
	{
		$data["menu"] = new Menus();
		$data["menu"]->where("parent = $id")->get();
		
		$this->load->view("menu/admin/parent_sub",$data);
	}
	
	function debug($id=FALSE)
	{
		echo var_dump($_POST);
		exit();
	}
	
}
	