<div class="page-header position-relative">
    <h1><?php echo $_GET['module']?> <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->

    <form id="validation-form" class="form-horizontal" method="post" action="menu/admin/menu/save/<?php echo $data->id?>?module=<?php echo $_GET['module']?>" enctype="multipart/form-data">
        
        <!-- <div class="control-group">
            <label class="control-label" for="id-input-file-1">ภาพประกอบข่าว</label>
            <div class="controls">
                <?php if($menu->image):?>
                <img class="img" style="width:150px;" src="<?php echo (is_file('uploads/content/'.$menu->image))? 'uploads/content/'.$menu->image : 'media/images/dummy/656x253.gif' ?>"  /> <br><br>
                <?php endif;?>
                <div class="input-xxlarge">
                    <input type="file" id="id-input-file-1" name="image"/>
                </div>
            </div>
        </div> -->
        
        <!-- file manager -->
        <!-- <div class="control-group">
            <label class="control-label" for="form-field-2">ภาพประกอบข่าว</label>
            <div class="controls">
            	<?php if($menu->image):?>
                <img class="img" style="width:150px;" src="<?php echo (is_file($menu->image))? $menu->image : 'media/images/dummy/656x253.gif' ?>"  /> <br><br>
                <?php endif;?>
                <input type="text" id="form-field-2" class="input-xxlarge" name="image" value="<?php echo $menu->image?>"> <input class="btn btn-mini btn-info" type="button" name="browse" value="เลือกไฟล์" onclick="browser($(this).prev(),'file')" />
            </div>
        </div> -->
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">หัวข้อ</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="title" value="<?php echo $data->title?>">
            </div>
        </div>
        
	    <div class="control-group">
	        <label class="control-label" for="form-field-1">เมนูย่อย</label>
	        <div class="controls">
	        	<select name="parent">
            	<option value="">--- เลือกเมนูย่อย ---</option>
					<?php foreach($menu as $row):?>
						<option value="<?php echo $row->id?>"><?php echo $row->title?></option>
						
						<?php foreach($sub as $rows):?>
							<?php if($rows->parent==$row->id):?>
								<option value="<?php echo $rows->id?>"><?php echo "--- ".$rows->title?></option>
								
								<?php foreach($sub as $c):?>
									<?php if($c->parent==$rows->id):?>
										<option value="<?php echo $c->id?>"><?php echo "------ ".$c->title?></option>
									<?php endif?>
								<?php endforeach?>
								
							<?php endif?>
						<?php endforeach?>
						
					<?php endforeach?>
				</select>
	        </div>
	    </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">ลิงค์</label>
            <div class="controls">
            	<select name="url" >
            	<option value="">--- เลือกลิงค์ ---</option>
				<?php foreach($categorie as $num):?>
					
					<option value="<?php echo $num->id?>"><?php echo $num->module?></option>
					
					<?php foreach($content as $nums):?>
						
						<?php if($nums->module==$num->module):?>
							<option value="<?php echo $nums->id?>">-----&nbsp;<?php echo $nums->title?></option>
						<?php endif?>
						
					<?php endforeach?>
					
				<?php endforeach?>
				</select>
            </div>
        </div>
        
        <div class="form-actions">
        	<?php echo form_referer() ?>
            <button class="btn btn-info" type="submit"><i class="icon-ok"></i> Submit</button>
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset"><i class="icon-undo"></i> Reset</button>
        </div>
        
    </form>
<!-- PAGE CONTENT ENDS HERE -->
</div>


<!-- inline scripts related to this page -->
<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
    tiny('detail');
</script>

<script type="text/javascript">
</script>

<script type="text/javascript">
$(function() {
    
    $('#id-input-file-1').ace_file_input({
        no_file:'No File ...',
        btn_choose:'Choose',
        btn_change:'Change',
        droppable:false,
        onchange:null,
        thumbnail:false //| true | large
        //whitelist:'gif|png|jpg|jpeg'
        //blacklist:'exe|php'
        //onchange:''
        //
    });
    
    $('#validation-form').validate({
        errorElement: 'span',
        errorClass: 'help-inline',
        focusInvalid: false,
        rules: {
            title: {
                required: true
            }
        },

        messages: {
            title: {
                required: "กรุณากรอกหัวข้อ"
            }
        },

        invalidHandler: function (event, validator) { //display error alert on form submit   
            $('.alert-error', $('.login-form')).show();
        },

        highlight: function (e) {
            $(e).closest('.control-group').removeClass('info').addClass('error');
        },

        success: function (e) {
            $(e).closest('.control-group').removeClass('error').addClass('info');
            $(e).remove();
        },

        errorPlacement: function (error, element) {
            if(element.is(':checkbox') || element.is(':radio')) {
                var controls = element.closest('.controls');
                if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                else error.insertAfter(element.nextAll('.lbl').eq(0));
            } 
            else if(element.is('.chzn-select')) {
                error.insertAfter(element.nextAll('[class*="chzn-container"]').eq(0));
            }
            else error.insertAfter(element);
        },

        // submitHandler: function (form) {
        // },
        // invalidHandler: function (form) {
        // }
    });
});
</script>