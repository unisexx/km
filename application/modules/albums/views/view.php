<style>
.gal-blk img{float:left;margin:0 0 15px 15px;padding:1px;border:}    
</style>

<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10"><img src="themes/thaivbd/images/breadcrumb_left.png" width="10" height="26"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb">ภาพกิจกรรม</div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; <a href="albums">ภาพกิจกรรม</a> &gt; <?php echo $pictures->album->name ?></div>
            </td>
            <td width="10" align="right"><img src="themes/thaivbd/images/breadcrumb_right.png" width="10" height="26"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                  <h1><?php echo $pictures->album->name ?></h1>
                    <?php foreach($pictures as $row):?>
                        <div class="picture">
                            <a href="uploads/file/demo/demo.png" rel="lightbox[gal]" class="highlightit" alt="<?php echo $row->album->name ?>"><img src="uploads/file/demo/demo.png" width="122" height="95"></a>
                        </div>
                    <?php endforeach;?>
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>