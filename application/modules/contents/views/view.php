<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10"><img src="themes/thaivbd/images/breadcrumb_left.png" width="10" height="26"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb"><?php echo $content->module?></div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; <a href="contents?module=<?php echo $content->module?>"><?php echo $content->module?></a> &gt; <?php echo $content->title?></div>
            </td>
            <td width="10" align="right"><img src="themes/thaivbd/images/breadcrumb_right.png" width="10" height="26"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                  <h1><?php echo $content->title?></h1>
                    <?php echo $content->detail?>
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>