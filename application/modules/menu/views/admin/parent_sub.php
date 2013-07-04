<div class="control-group">
	<label class="control-label" for="province" class="span5">เมนูย่อย</label>
		<div class="controls">
			<select name="parent" id="menu_id_sub">
				<option>--- เลือกลิงค์ ---</option>
				<?php foreach($menu as $row):?>
					<option value="<?php echo $row->id?>"><?php echo $menu->title?></option>
				<?php endforeach ?>
			</select>
		</div>
</div>
        
<div id="result_parent_sub_sub"></div>

<script type="text/javascript">
	$("#menu_id_sub").change(function(){
		var menu_id_sub = $("#menu_id_sub").val();
		$.get("menu/admin/menu/parent_sub/"+menu_id_sub,
		function(data){
			$("#result_parent_sub_sub").html(data)
		})
	});
</script>