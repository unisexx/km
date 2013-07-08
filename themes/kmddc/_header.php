<div class="logo"></div>
<div class="w3c">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="17%"><div class="btnFB"><a href="#">&nbsp;</a></div></td>
            <td width="2%"><img src="themes/kmddc/images/line1.gif" width="1" height="18" border="0" /></td>
            <td width="33%" align="center">ขนาดอักษร</td>
            <td width="13%" align="center"><a href="#"><img src="themes/kmddc/images/a1.gif" width="14" height="13" border="0"></a></td>
            <td width="1%"><img src="themes/kmddc/images/line1.gif" width="1" height="15" border="0" /></td>
            <td width="13%" align="center"><a href="#"><img src="themes/kmddc/images/a2.gif" width="16" height="15" border="0"></a></td>
            <td width="1%"><img src="themes/kmddc/images/line1.gif" width="1" height="15" border="0" /></td>
            <td width="20%" align="center"><a href="#"><img src="themes/kmddc/images/a3.gif" width="18" height="18" border="0"></a></td>
          </tr>
	</table>
</div>
<div class="login">
	<form>
		<label>มุมสมาชิก</label>
			<input type="text" name="Username" title="E-mail" class="input_boxLogin" placeholder="ชื่อ" >
			<input type="password" name="Password" class="input_boxLogin" title="Password"  placeholder="รหัสผ่าน">
			<input name="btn_login" class="btn_login" >
		<label id="linkRegis"><a href="#" class="linkRegis">ลืมรหัสผ่าน</a> | <a href="#" class="linkRegis2">สมัครสมาชิก</a></label>
	</form></div>
	
   <?php echo modules::run("menu");?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript">
        $(function() {
            var $items = $('#vtab>ul>li');
            $items.mouseover(function() {
                $items.removeClass('selected');
                $(this).addClass('selected');

                var index = $items.index($(this));
                $('#vtab>div').hide().eq(index).show();
            }).eq(1).mouseover();
        });
</script>
    
<!-- This javascript is required to support IE version under 9 -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#topmenu ul li").mouseover(function(e) {$(this).addClass(" iehover ");});
		$("#topmenu ul li").mouseout(function(e) {$(this).removeClass(" iehover ");});
	});
</script>