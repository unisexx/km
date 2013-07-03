<div class="page-header position-relative">
    <h1><?php echo $_GET['module']?> <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->


<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="pages/admin/pages/save/<?php echo $page->id?>?module=<?php echo $_GET['module']?>" enctype="multipart/form-data">
        
        <div class="control-group">
            <label class="control-label" for="form-field-9">รายละเอียด</label>
            <div class="controls">
                <textarea class="input-xxlarge" id="form-field-9" name="content" rows="8"><?php echo $page->content?></textarea>
            </div>
        </div>
        
        <div class="form-actions">
            <?php echo form_hidden('menu_title', $_GET['module']);?>
            <button class="btn btn-info" type="submit"><i class="icon-ok"></i> Submit</button>
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset"><i class="icon-undo"></i> Reset</button>
            &nbsp; &nbsp; &nbsp;
            <button class="btn" onclick="window.open('/km/pages/view/<?php echo $page->id?>')" ><i class="icon-undo"></i> Preview</button>
        </div>
        
<!-- PAGE CONTENT ENDS HERE -->
</div>

<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
    tiny('content');
</script>