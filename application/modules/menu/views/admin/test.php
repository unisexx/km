<?php echo menu_list($menu,$sub)?>

<select value="parent">
	<?php foreach($menu as $row):?>
		<option value="<?php echo $row->id?>"><?php echo $row->title?></option>
		<?php foreach($sub as $rows):?>
			<?php if($rows->parent==$row->id):?>
				<option value="<?php echo $rows->id?>">-----&nbsp;<?php echo $rows->title?></option>
			<?php endif?>
		<?php endforeach?>
	<?php endforeach?>
</select>

<select value="categorie" >
<?php foreach($categorie as $num):?>
	
	<option value="<?php echo $num->id?>"><?php echo $num->module?></option>
	
	<?php foreach($content as $nums):?>
		
		<?php if($nums->module==$num->module):?>
			<option value="<?php echo $nums->id?>">-----&nbsp;<?php echo $nums->title?></option>
		<?php endif?>
		
	<?php endforeach?>
	
<?php endforeach?>
</select>