<div class="page-header position-relative">
    <h1><?php echo $_GET['module']?> <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENTS BEGINS HERE -->

<div class="row-fluid">
    <div class="span12">
        <table id="table_report" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
        <th width="40">สถานะ</th>
        <th width="500">ชื่อเมนู</th>
        <th>วันที่สร้าง</th>
        <th>แก้ไขล่าสุด</th>
        <th><a class="btn btn-mini btn-primary" href="menu/admin/menu/form?module=<?php echo $_GET['module']?>"><i class="icon-pencil"></i> เพิ่มรายการ </a></th>
        </tr>
        </thead>
            
            <tbody>
            <?php foreach($menu as $row):?>
            <tr>
            <td>
            <label>
            <input class="ace-switch ace-switch-4" type="checkbox" name="status" value="<?php echo $row->id ?>" <?php echo ($row->status=="approve")?'checked="checked"':'' ?>/><span class="lbl"></span>
            </label>
            </td>
            <td><?php echo $row->title?></td>
			<td><?php echo mysql_to_th($row->created,'S',TRUE) ?></td>
			<td><?php echo mysql_to_th($row->updated,'S',TRUE) ?></td>
            <td>
            <div class='hidden-phone visible-desktop btn-group'>
            <a href="menu/admin/menu/form/<?php echo $row->id?>?module=<?php echo $_GET['module']?>" class='btn btn-mini btn-info'><i class='icon-edit'></i></a>
            <a class='btn btn-mini btn-danger' href="menu/admin/menu/delete/<?php echo $row->id?>?module=<?php echo $_GET['module']?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><i class='icon-trash'></i></a>
            </div>
            <div class='hidden-desktop visible-phone'>
            <div class="inline position-relative">
            <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
            <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
            <li><a href="menu/admin/menu/form/<?php echo $row->id?>?module=<?php echo $_GET['module']?>" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
            <li><a href="menu/admin/menu/delete/<?php echo $row->id?>?module=<?php echo $_GET['module']?>" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><span class="red"><i class="icon-trash"></i></span> </a></li>
            </ul>
            </div>
            </div>
            </td>
            </tr>
                
                <?php foreach($sub as $rows):?>
                <?php if($rows->parent==$row->id):?>
			    <tr>
			    <td>
			    <label>
			    <input class="ace-switch ace-switch-4" type="checkbox" name="status" value="<?php echo $rows->id ?>" <?php echo ($rows->status=="approve")?'checked="checked"':'' ?>/><span class="lbl"></span>
			    </label>
			    </td>
			    <td><?php echo "----- ".$rows->title?></td>
				<td><?php echo mysql_to_th($rows->created,'S',TRUE) ?></td>
				<td><?php echo mysql_to_th($rows->updated,'S',TRUE) ?></td>
			    <td>
			    <div class='hidden-phone visible-desktop btn-group'>
			    <a href="menu/admin/menu/form/<?php echo $rows->id?>?module=<?php echo $_GET['module']?>" class='btn btn-mini btn-info'><i class='icon-edit'></i></a>
			    <a class='btn btn-mini btn-danger' href="menu/admin/menu/delete/<?php echo $rows->id?>?module=<?php echo $_GET['module']?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><i class='icon-trash'></i></a>
			    </div>
			    <div class='hidden-desktop visible-phone'>
			    <div class="inline position-relative">
			    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
			    <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
			    <li><a href="menu/admin/menu/form/<?php echo $rows->id?>?module=<?php echo $_GET['module']?>" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
			    <li><a href="menu/admin/menu/delete/<?php echo $rows->id?>?module=<?php echo $_GET['module']?>" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><span class="red"><i class="icon-trash"></i></span> </a></li>
			    </ul>
			    </div>
			    </div>
			    </td>
			    </tr>
			                
                	<?php foreach($sub as $c):?>
	                <?php if($c->parent==$rows->id):?>
			        <tr>
			        <td>
			        <label>
			        <input class="ace-switch ace-switch-4" type="checkbox" name="status" value="<?php echo $c->id ?>" <?php echo ($c->status=="approve")?'checked="checked"':'' ?>/><span class="lbl"></span>
			        </label>
			        </td>
			        <td><?php echo "---------- ".$c->title?></td>
					<td><?php echo mysql_to_th($c->created,'S',TRUE) ?></td>
					<td><?php echo mysql_to_th($c->updated,'S',TRUE) ?></td>
			        <td>
			        <div class='hidden-phone visible-desktop btn-group'>
			        <a href="menu/admin/menu/form/<?php echo $c->id?>?module=<?php echo $_GET['module']?>" class='btn btn-mini btn-info'><i class='icon-edit'></i></a>
			        <a class='btn btn-mini btn-danger' href="menu/admin/menu/delete/<?php echo $c->id?>?module=<?php echo $_GET['module']?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><i class='icon-trash'></i></a>
			        </div>
			        <div class='hidden-desktop visible-phone'>
			        <div class="inline position-relative">
			        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
			        <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
			        <li><a href="menu/admin/menu/form/<?php echo $c->id?>?module=<?php echo $_GET['module']?>" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
			        <li><a href="menu/admin/menu/delete/<?php echo $c->id?>?module=<?php echo $_GET['module']?>" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><span class="red"><i class="icon-trash"></i></span> </a></li>
			        </ul>
			        </div>
			        </div>
			        </td>
			        </tr>
			                
	                	<?php foreach($sub as $d):?>
		                <?php if($d->parent==$c->id):?>
				        <tr>
				        <td>
				        <label>
				        <input class="ace-switch ace-switch-4" type="checkbox" name="status" value="<?php echo $d->id ?>" <?php echo ($d->status=="approve")?'checked="checked"':'' ?>/><span class="lbl"></span>
				        </label>
				        </td>
				        <td><?php echo "--------------- ".$d->title?></td>
						<td><?php echo mysql_to_th($d->created,'S',TRUE) ?></td>
						<td><?php echo mysql_to_th($d->updated,'S',TRUE) ?></td>
				        <td>
				        <div class='hidden-phone visible-desktop btn-group'>
				        <a href="menu/admin/menu/form/<?php echo $d->id?>?module=<?php echo $_GET['module']?>" class='btn btn-mini btn-info'><i class='icon-edit'></i></a>
				        <a class='btn btn-mini btn-danger' href="menu/admin/menu/delete/<?php echo $d->id?>?module=<?php echo $_GET['module']?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><i class='icon-trash'></i></a>
				        </div>
				        <div class='hidden-desktop visible-phone'>
				        <div class="inline position-relative">
				        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
				        <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
				        <li><a href="menu/admin/menu/form/<?php echo $d->id?>?module=<?php echo $_GET['module']?>" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
				        <li><a href="menu/admin/menu/delete/<?php echo $d->id?>?module=<?php echo $_GET['module']?>" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><span class="red"><i class="icon-trash"></i></span> </a></li>
				        </ul>
				        </div>
				        </div>
				        </td>
				        </tr>
		                		
		                <?php endif?>
	                	<?php endforeach?>
	                		
	                <?php endif?>
                	<?php endforeach?>
                		
                <?php endif?>
                <?php endforeach?>
                
        <?php endforeach?>
        </tbody>
        </table>
        
    </div><!--/span-->
</div><!--/row-->

<!-- PAGE menu ENDS HERE -->
</div>

<script type="text/javascript">
$(document).ready(function(){
    $("input:checkbox").click(function(){
        var value = this.checked ? "approve" : "draft";
        var name = $(this).attr("name");
        var jsonOptions= {};
        jsonOptions[name]= value;
        $.post("menu/admin/menu/approve/" + this.value,jsonOptions);
    });
    
    // var oTable1 = $('#table_report').dataTable( {
    // "aoColumns": [
      // { "bSortable": false },
      // null, null,null,
      // { "bSortable": false }
    // ] } );
    
    $('table th input:checkbox').on('click' , function(){
        var that = this;
        $(this).closest('table').find('tr > td:first-child input:checkbox')
        .each(function(){
            this.checked = that.checked;
            $(this).closest('tr').toggleClass('selected');
        });
            
    });

    $('[data-rel=tooltip]').tooltip();
});
</script>