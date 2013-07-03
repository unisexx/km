<div class="page-header position-relative">
    <h1>ประชุมสัมมนา <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->


<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="meetings/admin/meetings/save/<?php echo $meeting->id?>" enctype="multipart/form-data">
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">หัวข้อ</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="title" value="<?php echo $meeting->title?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-9">รายละเอียด</label>
            <div class="controls">
                <textarea class="input-xxlarge" id="form-field-9" name="detail" rows="8"><?php echo $meeting->content?></textarea>
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">วันที่่สัมมนา</label>
            <div class="controls">
                <input type="text" id="start" class="datepicker" name="start"  value="<?php echo $meeting->title?>" style="width:150px;" >
                &nbsp;&nbsp;&nbsp;&nbsp; ถึง &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id="end" class="datepicker" name="end"value="<?php echo $meeting->title?>" style="width:150px;" >
            </div>
        </div>
        
        <div class="form-actions">
            <button class="btn btn-info" type="submit"><i class="icon-ok"></i> Submit</button>
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset"><i class="icon-undo"></i> Reset</button>
        </div>
        
<!-- PAGE CONTENT ENDS HERE -->
</div>

<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
    tiny('detail');
</script>

<!-- Datepicker -->
<!-- <script type="text/javascript" >
	$(function() {
    $( "#start" ).datepicker({
      changeMonth: true,
      numberOfMonths: 3,
      dateFormat: "yy-mm-dd",
      onClose: function( selectedDate ) {
        $( "#end" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#end" ).datepicker({
      numberOfMonths: 3,
      dateFormat: "yy-mm-dd",
      onClose: function( selectedDate ) {
        $( "#start" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });
</script> -->

