<?php
class Meetings extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['meeting'] = new Meeting();
		$data['meeting']->order_by("start","desc")->get();
		
		$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE)
	{
		$data['meeting'] = new Meeting($id);
		
		$this->template->build('admin/form',$data);
	}
	
	function save()
	{
		if($_POST)
        {
            $meeting = new Meeting($id);
			
            // if($_FILES['image']['name'])
            // {
                // if($content->id){
                    // $content->delete_file($content->id,'uploads/content','image');
                // }
                // $_POST['image'] = $content->upload($_FILES['image'],'uploads/content/');
            // }
            
			if(!$id)$_POST['user_id'] = $this->session->userdata('id');
			if(!$id)$_POST['status'] = "draft";
			$_POST['slug'] = clean_url($_POST['title']);
            $meeting->from_array($_POST);
            $meeting->save();
            set_notify('success', lang('save_data_complete'));
        }
        redirect($_POST['referer']);
	}
	
	function delete()
	{
		if($id)
		{
			$meeting = new Meeting($id);
			$meeting->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function approve($id)
	{
        if($_POST)
        {
            $content = new Meeting($id);
            $content->from_array($_POST);
            $content->save();
        }
	}
		
}
?>