<select name="amphur_id" >
<?php foreach ($amphur as $row):?>
	<option value="<?php echo $row->id?>"><?php echo $row->amphur_name?></option>
<?php endforeach?>
</select>