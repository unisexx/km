<?php
class Permissions extends Admin_Controller
{
	
	public $module = array(
		'administrators' => array('label' => 'ผู้ดูแล', 'permission' => array('full')),
		'coverpages' => array('label' => 'หน้าแรก', 'permission' => array('full')),
		'hilights' => array('label' => 'ไฮไลท์', 'permission' => array('full')),
		'informations' => array('label' => 'ข่าวประชาสัมพันธ์', 'permission' => array('full')),
		'articles' => array('label' => 'บทความน่าสนใจ', 'permission' => array('full')),
		'vdos' => array('label' => 'vdo แนะนำ', 'permission' => array('full')),
		'downloads' => array('label' => 'เอกสารดาวน์โหลด', 'permission' => array('full')),
		'galleries' => array('label' => 'ภาพกิจกรรม', 'permission' => array('full')),
		'calendars' => array('label' => 'ปฎิทินกิจกรรม', 'permission' => array('full')),
		'permissions' => array('label' => 'สิทธิ์การใช้งาน', 'permission' => array('full')),
		'dashboards' => array('label' => 'สถิติโดยรวม', 'permission' => array('full')),
	);
	
	public $crud = array(
		'read' => 'ดู',
		'create' => 'เพิ่ม',
		'update' => 'แก้ไข',
		'delete' => 'ลบ',
		'download' => 'ดาวน์โหลด',
		'full' => 'ทั้งหมด'
	);
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data['user_types'] = new User_type();
		$data['user_types']->order_by('id','asc')->get_page();
		$this->template->build('admin/permission_index',$data);
	}
	
	public function form($id=FALSE){
		$data['user_type'] = new User_type($id);
		$data['rs_perm'] = $this->permission_row($id);
		$data['module'] = $this->module;
		$data['crud'] = $this->crud;
		$this->template->build('admin/permission_form',$data);
	}
	
	public function permission_row($user_type_id)
	{
		if($user_type_id)
		{
			$perms = new Permission();
			$perms = $perms->where("user_type_id = ".$user_type_id)->get();
			foreach($perms as $item)
			{
				$perm[$item->module] = array(
					'read' => $item->read,
					'create' => $item->create,
					'update' => $item->update,
					'delete' => $item->delete,
					'download' => $item->download,
					'full' => $item->full
				);
			}
			return @$perm;
		}
		else return NULL;
	}
	
	public function save($id=FALSE){
		if($_POST){
			$user_type = new User_type($id);
			$user_type->from_array($_POST);
			$user_type->save();
			foreach($user_type->permission as $item) $item->delete();
			if(isset($_POST['checkbox'])){
				foreach($_POST['checkbox'] as $module => $item)
				{
					$data['user_type_id'] = $user_type->id;
					$data['module'] = $module;
					foreach($item as $perm => $val) $data[$perm] =  $val;
					$permission = new Permission();
					$permission->from_array($data);
					$permission->save();
					$data = array();
				}	
			}
			set_notify('success', lang('save_data_complete'));
		}
		//redirect('permissions/admin/permissions');
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	public function delete($id){
		if($id){
			$user_type = new User_type($id);
			foreach($user_type->permission as $item) $item->delete();
			$user_type->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>