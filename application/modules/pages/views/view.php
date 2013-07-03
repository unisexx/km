<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10"><img src="themes/thaivbd/images/breadcrumb_left.png" width="10" height="26"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb"><?php echo $page->name?></div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; <?php echo $page->name?></div>
            </td>
            <td width="10" align="right"><img src="themes/thaivbd/images/breadcrumb_right.png" width="10" height="26"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                  <!-- <h1><?php echo $page->name?></h1> -->
                  <?php echo $page->content?>
                  
                  <?php if($page->id==4):?>
                  	<table align="center" >
                  		<form>
                  			<tr>
                  				<td><label>ชื่อ - นามสกุล</label></td>
                  				<td><input type="text" name="name" /></td>
                  			</tr>
                  			<tr>
                  				<td><label>อีเมล</label></td>
                  				<td><input type="text" name="email" /></td>
                  			</tr>
                  			<tr valign="top">
                  				<td><label>ข้อความ</label></td>
                  				<td><textarea name="note" cols="40" rows="7" style="resize:none;"></textarea></td>
                  			</tr>
                  			<tr>
                  				<td></td>
                  				<td><button type="submit">ส่งข้อความ</button></td>
                  			</tr>
                  		</form>
                  	</table>
                  <?php endif?>
                  
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>