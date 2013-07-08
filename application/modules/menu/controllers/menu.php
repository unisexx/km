<?php
Class Menu extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data["menu"] = new Menus();
		$data["menu"]->where("parent = 0 AND title != 'หน้าแรก' AND status = 'approve'")->get();
		
		$data["sub"] = new Menus();
		$data["sub"]->get();
		
		$this->load->view('menu',$data);
	}
}
