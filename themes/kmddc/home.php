<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<base href="<?php echo base_url(); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>สำนักจัดการความรู้ กรมควบคุมโรค กระทรวงสาธารณสุข</title>
<?php include "_css.php";?>

</head>
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
<body>
<div id="wrap">
	<div class="main">
       <?php include "_header.php";?>
       <?php echo modules::run("contents/inc_hilight");?>
      <?php include "_left.php";?>

      <div id="col2">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="6" height="6"><img src="images/border2_topleft.png" width="6" height="6" /></td>
        <td height="6" background="images/border2_top.png"> </td>
        <td><img src="images/border2_topright.png" width="6" height="6" /></td>
      </tr>
      <tr>
        <td><img src="images/border2_left.png" width="5" height="228" /></td>
        <td valign="top" bgcolor="#FFFFFF">
        <div id="btn" >
			<ul>
				<li class="btn1"><a href="km.html">&nbsp;</a></li>
                <li class="btn2"><a href="research.html">&nbsp;</a></li>
                <li class="btn3"><a href="#">&nbsp;</a></li>
                <li class="btn4"><a href="#">&nbsp;</a></li>
                <li class="btn5"><a href="#">&nbsp;</a></li>
                <li class="btn6"><a href="#">&nbsp;</a></li>
                <li class="btn7"><a href="#">&nbsp;</a></li>
                <li class="btn8"><a href="#">&nbsp;</a></li>
			</ul>
		</div>
            <div><a href="#" class="arrowleft">&nbsp;</a></div>
            <div><a href="#" class="arrowright">&nbsp;</a></div>
        </td>
        <td><img src="images/border2_right.png" width="5" height="228" /></td>
      </tr>
      <tr>
        <td width="6" height="6"><img src="images/border2_bottomleft.png" width="6" height="6" /></td>
        <td height="6" background="images/border2_bottom.png"> </td>
        <td width="6" height="6"><img src="images/border2_bottomright.png" width="6" height="6" /></td>
      </tr>
    </table>
		<br>
       <div id="km1">
       	<div class="titlekm1">&nbsp;</div>
        <hr class="hr2"/>
        <div id="vtab">
        <ul>
            <li class="tab1">โรคติดต่อทั่วไป</li>
            <li class="tab2">โรคจากการประกอบ-<br>อาชีพและสิ่งแวดล้อม</li>
            <li class="tab3">โรคติดต่อนำโดยแมลง</li>
            <li class="tab4">โรคไม่ติดต่อ</li>
            <li class="tab5">โรคติดต่อจากการสัมผัส</li>
        </ul>
		<div>
        	<!--[Tab1]><!Tab1]-->
            <h4>โรคติดต่อทั่วไป</h4>
 			                <div class="tb_km">
                <ul style="padding-top:15px; padding-left:5px; height:194px;">
                     <li><a href="#">กาฬโรค (Plague)</a></li>		 
                     <li><a href="#">กาฬหลังแอ่น (Meningococcal Meningitis)</a></li>  
                     <li><a href="#">ไข้ริฟต์ วาลเลย์ (Ritt Valley fever, RVF)</a></li>
                     <li><a href="#">ไข้หวัดนก (Avian Influenza)</a></li>
                     <li><a href="#">ไข้เหลือง (Yellow fever)</a></li>
                     <li><a href="#">ไข้เลือดออกอีโบลา</a></li>
                     <li><a href="#">ไข้เลือดออกแอฟริกัน</a></li>
                     <li><a href="#">คอตีบ (Diphtheria)</a></li>
                     <li><a href="#">คางทูม (Mumps)</a></li>
                     <li><a href="#">โรคชีวพิษโบทูลีน</a></li>
                     <li><a href="#">โรคซาร์ส (SARS)</a></li>
                     <li><a href="#">ตับอักเสบบี (Hepatits B)</a></li>
                     <li><a href="#">ทริคิโนซิส (Trichinosis)</a></li>
                     <li><a href="#">บาดทะยัก (Tetanus)</a></li>
                </ul>
                </div>
            	<div id="arrow_tb_km"><div class="arrow_tb_km_left"><a href="#">&nbsp;</a></div><div class="arrow_tb_km_right"><a href="#">&nbsp;</a></div></div>
		</div>
        <div>
 			<!--[Tab2]><!Tab2]-->
            <h4>โรคจากการประกอบอาชีพและสิ่งแวดล้อม</h4>
               <div class="tb_km">
                <ul style="padding-top:15px; padding-left:10px; height:194px;">
                     <li><a href="#">อันตรายจากเสียงดัง</a></li>		 
                     <li><a href="#">โรคบิสสิโนลิส</a></li>  
                     <li><a href="#">โรคซิลิโคสิส</a></li>
                     <li><a href="#">โรคพิษจากแมงกานีส</a></li>
                     <li><a href="#">โรคพิษจากตะกั่ว</a></li>
                     <li><a href="#">โรคพิษจากโครเมียม</a></li>
                     <li><a href="#">โรคพิษจากสารหนู</a></li>
                     <li><a href="#">โรคพิษจากโทลูอีน</a></li>
                     <li><a href="#">โรคพิษจากเบนซีน</a></li>
                     <li><a href="#">ปัญหาผลกระทบจากการปนเปื้อนของตะกั่ว</a></li>
                     <li><a href="#">ปัญหาผลกระทบจากการปนเปื้อนของสารแคดเมี่ยม</a></li>
                     <li><a href="#">ปัญหาผลกระทบจากโรงไฟฟ้าแม่เมาะ จ.ลำปาง</a></li>
                </ul>
                </div>
  
        </div>
        <div>
            <!--[Tab3]><!Tab3]-->
            <h4>โรคติดต่อนำโดยแมลง</h4>
                             <div class="tb_km">
                <ul style="padding-top:15px; padding-left:10px; height:194px;">
                     <li><a href="#">โรคไข้เลือดออก</a></li>		 
                     <li><a href="#">ไข้มาลาเรีย</a></li>  
                     <li><a href="#">โรคเท้าช้าง</a></li>
                     <li><a href="#">โรคไข้ปวดข้อยุงลาย (Chikungunya)</a></li>
                </ul>
                </div>
        </div>
        <div>
    		<!--[Tab4]><!Tab4]-->
            <h4>โรคไม่ติดต่อ</h4>
        	                 <div class="tb_km">
                <ul style="padding-top:15px; padding-left:10px; height:194px;">
                     <li><a href="#">โรคที่เกิดจากสุรา</a></li>		 
                     <li><a href="#">โรคจากการสูบบุหรี่</a></li>  
                     <li><a href="#">ความรู้ทั่วไปเกี่ยวกับโรคมะเร็ง</a></li>
                     <li><a href="#">โรคมะเร็งชนิดต่างๆ</a></li>
                     <li><a href="#">download เอกสารความรู้โรคมะเร็ง</a></li>
                     <li><a href="#">บุหรี่กับโรคหัวใจ</a></li>
                     <li><a href="#">มะเร็ง "ปอด" กับบุหรี่</a></li>
                     <li><a href="#">บุหรี่กับโรคถุงลมโป่งพอง</a></li>
                     <li><a href="#">โทษพิษภัยจากบุหรี่	</a></li>
                     <li><a href="#">อัมพาตครึ่งซีก</a></li>
                     <li><a href="#">การฟื้นฟูสมรรถนะหลังเป็นอัมพาต</a></li>
                     <li><a href="#">อาการของเส้นเลือดในสมองแตก</a></li>
                     <li><a href="#">กิน – อยู่อย่างไรให้ห่างไกลอัมพฤกษ์ อัมพาต</a></li>
                </ul>
                </div>
        </div>
        
        <div>
    		<!--[Tab5]><!Tab5]-->
        	 <h4>โรคติดต่อจากการสัมผัส</h4>
        	                 <div class="tb_km">
                <ul style="padding-top:15px; padding-left:10px; height:194px;">
                     <li><a href="#">โรคเอดส์</a></li>		 
                     <li><a href="#">โรคเรื้อน</a></li>  
                     <li><a href="#">โรคติดเชื้อทางเพศสัมพันธ์</a></li>
                     <li><a href="#">โรคติดเชื้อทางเพศสัมพันธ์อื่นๆ</a></li>
                </ul>
                </div>
        
        </div>
       </div>
       <br>
       <div class="tabGroup" style="margin-top:310px;">
    <input type="radio" name="tabGroup1" id="rad1" checked="checked"/>
    <label for="rad1" style="margin-left:20px;">หนังสือ</label>
  
    <input type="radio" name="tabGroup1" id="rad2"/>
    <label for="rad2">บทความ</label>
      
    <input type="radio" name="tabGroup1" id="rad3"/>
    <label for="rad3">วารสารวิชาการ</label>
    
    <input type="radio" name="tabGroup1" id="rad4"/>
    <label for="rad4">คู่มือ/แนวทาง</label>
     
    <input type="radio" name="tabGroup1" id="rad5"/>
    <label for="rad5">สื่อเผยแพร่อื่นๆ</label>
    <br/>
  
    <div class="tab1">
    	<div id="box_book">
            <div class="bookAll"><a href="#">&nbsp;</a></div>
        <ul id="slider_book">       
            <li id="Book6" >
                <img src="images/book_pic6.jpg" width="200" height="284">
                 <p><span class="titlebook">ถาม - ตอบ ข้อข้องใจปัญหา KM</span><span>ถาม KM ต่างจากการจัดทำระบบสารสนเทศอย่างไร<br>
ตอบ สารสนเทศเป็นประเภทหนึ่งของความรู้ เป็นการนำข้อมูล(ดิบ)มมาวิเคราะห์ โดยใช้ค่าทางสถิติ เพื่ออธิบายแนวโน้มของสิ่งที่เกิดเป็นปรากฏการณ์ แต่ต้องระวังความน่าเชื่อถือของการวิเคราะห์ เมื่อนำสารสนเทศที่ผ่านการวิเคราะห์ไปใช้แล้ว เราจึง เรียกว่า "ความรู้"</span><br>
<a href="#"><img src="images/btn_download.gif" width="75" height="18" /></a>&nbsp;
<a href="#" style="float:right;"><img src="images/btn_readmore_reg.png" width="49" height="12" /></a><br><br>
<span style="float:left;">จัดพิมพ์โดย : xxxxxx </span>
<span style="float:left; padding-left:20px;">จำนวนหน้า : 2110</span>
<span style="float:right;"><img src="images/downloadCount_24.png" width="24" height="24" style="margin-top:-5px;"></span> <span style="float:right; padding-left:5px;">160</span>
<span style="float:right;"><img src="images/readCount_24.png" width="24" height="24" style="margin-top:-5px;"></span> <span style="float:right;">100</span>   
</p>
				 
            <li id="Book5">
                <img src="images/book_pic5.jpg" width="200" height="284" />
                <p> <span class="titlebook">หวัดใหญ่2009 บทเรียนครั้งเก่า...สู่การเรียนรู้ครั้งใหม่</span><span>ในปีพ.ศ. 2552 ที่ผ่านมา ประเทศไทยและประชากรโลกได้ประสบภัยพิบัติจากโรคไข้หวัดใหญ่สายพันธุ์ใหม่ 2009 หรือที่เรียกอย่างเป็นทางการว่าไข้หวัดใหญ่สายพันธุ์ใหม่ชนิดเอ(เอ็ช1เอ็น1) ซึ่งท่านศาสตราจารย์เกียรติคุณนายแพทย์ประเสริฐ ทองเจริญ ได้เรียกว่าเป็นการ "ระบาดบันลือโลก" จากรายงานผู้ป่วยรายแรกประมาณกลางเดือนเมษายน 2553 ที่ประเทศเม็กซิโก ต่อมาโรคได้แพร่กระจายไปยังประเทศต่างๆทั่วโลก โดยเฉพาะประเทศสหรัฐอเมริกาถือได้ว่าเป็นประเทศที่มีระบบการเฝ้าระวังป้องกันควบคุมโรคที่ดีที่สุด ยังไม่สามารถต้านทานได้ มีการพบผู้ป่วยแพร่กระจายไปทุกมลรัฐจนองค์การอนามัยโลกต้องประกาศยกระดับการระบาดเป็นระดับสูงสุด</span><br>
<a href="#"><img src="images/btn_download.gif" width="75" height="18" /></a>&nbsp;
<a href="#" style="float:right;"><img src="images/btn_readmore_reg.png" width="49" height="12" /></a><br><br>
<span style="float:left;">จัดพิมพ์โดย : xxxxxx </span>
<span style="float:left; padding-left:20px;">จำนวนหน้า : 233</span>
<span style="float:right;"><img src="images/downloadCount_24.png" width="24" height="24" style="margin-top:-5px;"></span> <span style="float:right; padding-left:5px;">10</span>
<span style="float:right;"><img src="images/readCount_24.png" width="24" height="24" style="margin-top:-5px;"></span> <span style="float:right;">196</span>   
</p>
            </li>
            <li id="Book4">
                <img src="images/book_pic4.jpg" width="200" height="284" />
                <p> <span class="titlebook">บันทึกการเรียนรู้ การขับเคลื่อนงานป้องกันควบคุมโรคในชุมชน โดยกระบวนการมีส่วนร่วมของชุมชน (7 กรณีศึกษา)</span><span>บุคลากรของ สคร. ต้องปรับบทบาทและพัฒนา ความสามารถในการทำงานร่วมกับชุมชน ปรับแนวคิดและ วิธีการจากผู้ปฏิบัติมาเป็น "ผู้สนับสนุน ผู้หนุนเสริม" ชักชวน ให้ผู้เกี่ยวข้องด้านสุขภาพมาทำงานร่วมกัน กรมควบคุมโรค ก็ต้องมี "คลังความรู้" เพื่อจัดเก็บความรู้ต่างๆ ที่ต้องใช้งาน รวมทั้งมีการ "ถ่ายทอดความรู้" อย่างเป็นระบบ
                ปรับแนวคิดและ วิธีการจากผู้ปฏิบัติมาเป็น "ผู้สนับสนุน ผู้หนุนเสริม" ชักชวน ให้ผู้เกี่ยวข้องด้านสุขภาพมาทำงานร่วมกัน กรมควบคุมโรค ก็ต้องมี "คลังความรู้" เพื่อจัดเก็บความรู้ต่างๆ ที่ต้องใช้งาน รวมทั้งมีการ "ถ่ายทอดความรู้" อย่างเป็นระบบ</span><br>
<a href="#"><img src="images/btn_download.gif" width="75" height="18" /></a>&nbsp;
<a href="#" style="float:right;"><img src="images/btn_readmore_reg.png" width="49" height="12" /></a><br><br>
<span style="float:left;">จัดพิมพ์โดย : xxxxxx </span>
<span style="float:left; padding-left:20px;">จำนวนหน้า : 23</span>
<span style="float:right;"><img src="images/downloadCount_24.png" width="24" height="24" style="margin-top:-5px;"></span> <span style="float:right; padding-left:5px;">90</span>
<span style="float:right;"><img src="images/readCount_24.png" width="24" height="24" style="margin-top:-5px;"></span> <span style="float:right;">16</span>   
</p>
            </li>
            <li id="Book3">
                <img src="images/book_pic3.jpg" width="200" height="284" />
                <p> <span class="titlebook">ชุมชนกับการควบคุมโรค แนวคิดและบทเรียนจากการวิจัยเชิงปฏิบัติการแบบมรส่วนร่วม</span><span>ชุมชนวิจัย : วิจัยชุมชน การขยายการมีส่วนร่วมของชุมชน ในการนิยามคววามจริง และการสร้างและใช้ความรู้ เพื่อการเผชิญกับวิกฤตทางสุขภาพและสังคม อันเป็นหลักการพื้นฐานของสิ่งที่เรียกว่า การวิจัยเชิงปฏิบัติการแบบมีส่วนร่วม เป็นหนึ่งในการเคลื่อไหวตามแนวทางที่ว่านั้น</span><br>
<a href="#"><img src="images/btn_download.gif" width="75" height="18" /></a>&nbsp;
<a href="#" style="float:right;"><img src="images/btn_readmore_reg.png" width="49" height="12" /></a><br><br>
<span style="float:left;">จัดพิมพ์โดย : xxxxxx </span>
<span style="float:left; padding-left:20px;">จำนวนหน้า : 200</span>
<span style="float:right;"><img src="images/downloadCount_24.png" width="24" height="24" style="margin-top:-5px;"></span> <span style="float:right; padding-left:5px;">168</span>
<span style="float:right;"><img src="images/readCount_24.png" width="24" height="24" style="margin-top:-5px;"></span> <span style="float:right;">19</span>   
</p>
            </li>
            <li id="Book2">
                <img src="images/book_pic2.jpg" width="200" height="284" />
                <p> <span class="titlebook">เรียนรู้ความสำเร็จ อำเภอดีเด่นควบคุมโรคเข้มแข็งแบบยั่งยืน ประจำปี 2554</span><span>หนังสือ "เรียนรู้ความสำเร็จ...อำเภอดีเด่นควบคุมโรคเข้มแข็งแบบยั่งยืน ประจำปี 2554 ในพื้นที่ 18 เขตตรวจราชการกระทรวงสาธารณสุข" เล่มนี้ เป็นการถ่ายทอดเรื่องราวความสำเร็จในการดำเนินงานของอำเภอ จนได้รับรางวัล "อำเภอดีเด่นควบคุมโรคเข้มแข็งแบบยั่งยืน" ในปี 2554 กรมควบคุมโรคขอขอบคุณบุคคลทั้งหมดที่มีส่วนเกี่ยวข้องให้ "อำเภอเข้มแข็งแบบยั่งยืน" ปรากฏขึ้นจริงอย่างเป็นรูปธรรมในพื้นที่ของทั้ง 18 เขตตรวจราชการ และหวังว่า หนังสือเล่มนี้จะช่วยจุดประกายให้กับทีมงานสุขภาพในระดับอำเภออื่นๆ กลับไปพัฒนาอำเภอตนเองให้เกิดกระบวนการพัฒนาสุขภาพของประชาชนในพื้นที่รับผิดชอบและขยายผลผลักดันสู่การเป็น "อำเภอควบคุมโรคเข้มแข็งแบบยั่งยืน" ต่อไป</span><br>
<a href="#"><img src="images/btn_download.gif" width="75" height="18" /></a>&nbsp;
<a href="#" style="float:right;"><img src="images/btn_readmore_reg.png" width="49" height="12" /></a><br><br>
<span style="float:left;">จัดพิมพ์โดย : xxxxxx </span>
<span style="float:left; padding-left:20px;">จำนวนหน้า : 135</span>
<span style="float:right;"><img src="images/downloadCount_24.png" width="24" height="24" style="margin-top:-5px;"></span> <span style="float:right; padding-left:5px;">80</span>
<span style="float:right;"><img src="images/readCount_24.png" width="24" height="24" style="margin-top:-5px;"></span> <span style="float:right;">300</span>   
</p>
            </li>
		 	<li id="Book1" >
                <img src="images/book_pic1.jpg" width="200" height="284"/>
                 <p> <span class="titlebook">รายงานศักยภาพอำเภอตัวแทนในการประเมินอำเภอควบคุมโรคเข้มแข็งแบบยั่งยืน ปี 2554</span><span>การบริหารทรัพยากรจากส่วนภูมิภาคสู่ท้องถิ่นและชุมชน เพื่อแก้ไขปัญหาของประชาชนในพื้นที่ มีศูนย์รวมและจุดเชื่อมโยงในการดำเนินงานอยู่ที่หน่วยงานระดับ "อำเภอ" เช่นเดียวกับการดำเนินงานเฝ้าระวังป้องกันควบคุมโรค ซึ่งมีการดำเนินงานเป็นปกติของหน่วยงานสาธารณสุขระดับอำเภออยู่แล้ว แต่ขาดการเชื่อมโยงภาพเชิงระบบ และมีความเข้มแข็งแตกต่างกันในแต่ละพื้นที่ กรมควบคุมโรค กระทรวงสาธารณสุข เห็นความสำคัญของการสนับสนุน ผลักดัน ให้เกิดความร่วมมือระหว่างหน่วยงานภายใต้กระทรวงสาธารณสุขกับหน่วยงานอื่นๆในจังหวัดและอำเภอ เพื่อให้เกิดภาพของระบบเฝ้าระวัง ป้องกันควบคุมโรคและภัยสุขภาพระดับอำเภอ โดยการมีส่วนร่วมของทุกภาคส่วน ดังนั้นในปี 2554 กรมควบคุมโรคจึงได้มีนโยบาย "อำเภอควบคุมโรคเข้มแข็งแบบยั่งยืน" เพื่อพัฒนาระบบการเฝ้าระวัง ป้องกัน ควบคุมโรค ในระดับอำเภอให้มีความชัดเจรขึ้น</span><br>
<a href="#"><img src="images/btn_download.gif" width="75" height="18" /></a>&nbsp;
<a href="#" style="float:right;"><img src="images/btn_readmore_reg.png" width="49" height="12" /></a><br><br>
<span style="float:left;">จัดพิมพ์โดย : xxxxxx </span>
<span style="float:left; padding-left:20px;">จำนวนหน้า : 240</span>
<span style="float:right;"><img src="images/downloadCount_24.png" width="24" height="24" style="margin-top:-5px;"></span> <span style="float:right; padding-left:5px;">160</span>
<span style="float:right;"><img src="images/readCount_24.png" width="24" height="24" style="margin-top:-5px;"></span> <span style="float:right;">196</span>   
</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>จัดพิมพ์โดย : xxxxxx</td>
    <td>จำนวนหน้า : 240</td>
    <td><img src="images/run_reg.png" width="25" height="24" /> 196</td>
    <td><img src="images/readCount_24.png" width="24" height="24" /> 160</td>
  </tr>
</table>
            </li>
        </ul>
        <div class="pre"><a href="#">&nbsp;</a></div>
        <div class="next"><a href="#">&nbsp;</a></div>
        <div style="background-color:#f4f5f5;">
        <ul id="thumb">
            <li><a href="#Book6"><img src="images/book_pic6_small.jpg" width="84" height="111" /></a></li>
            <li><a href="#Book5"><img src="images/book_pic5_small.jpg" width="84" height="111" /></a></li>
            <li><a href="#Book4"><img src="images/book_pic4_small.jpg" width="84" height="111" /></a></li>
            <li><a href="#Book3"><img src="images/book_pic3_small.jpg" width="84" height="111" /></a></li>
            <li><a href="#Book2"><img src="images/book_pic2_small.jpg" width="84" height="111" /></a></li>
            <li><a href="#Book1"><img src="images/book_pic1_small.jpg" width="84" height="111" /></a></li>
        </ul>
		</div>
        </div>
    </div>
    <div class="tab2">
    <div class="articleAll"><a href="#">&nbsp;</a></div>
    	<table id="article" width="100%">
         <thead>
         	<th scope="col" align="center">ลำดับ</td>
            <th scope="col" align="center">เรื่อง</td>
            <th scope="col" width="150">ผู้แต่ง</td>
            <th scope="col" align="center">อ่าน</td>
            <th scope="col" align="center">ดาวน์โหลด</td>
          </thead>
  		<tbody>
          <tr>
          	<td>1</td>
            <td><a href="#">สัมมนาวิชาการ เวทีแลกเปลี่ยนเรียนรู้ "รวมพล คนรักสุขภาพ" ประจำปี 2553</a></td>
            <td>สำนักจัดการความรู้<br>กรมควบคุมโรค</td>
            <td>1092</td>
            <td>70</td>
          </tr>
          <tr>
            <td>2</td>
            <td><a href="#">บทความเรื่อง "การวิจัยนโยบาย คืออะไร และทำอย่างไร?"</a></td>
            <td>ดร. สุคนธา คงศีล</td>
            <td>1934</td>
            <td>148</td>
          </tr>
          <tr>
            <td>3</td>
            <td><a href="#">ตัวอย่างการใช้กระบวนการจัดการความรู้ในการแก้ไขปัญหาสาธารณสุขในโรงพยาบาล : ตอน 4 งานอนามัยแม่และเด็ก</a></td>
            <td>นพ.วิทยา สวัสดิวุฒิพงศ์</td>
            <td>1186</td>
            <td>43</td>
          </tr>
          <tr>
            <td>4</td>
            <td><a href="#">ตัวอย่างการใช้กระบวนการจัดการความรู้ในการแก้ไขปัญหาสาธารณสุขในโรงพยาบาล : ตอน 3 การคัดกรองโรคเรื้อรังที่สำคัญ</a></td>
            <td>นพ.วิทยา สวัสดิวุฒิพงศ์</td>
            <td>1062</td>
            <td>47</td>
          </tr>
          <tr>
            <td>5</td>
            <td><a href="#">ตัวอย่างการใช้กระบวนการจัดการความรู้ในการแก้ไขปัญหาสาธารณสุขในโรงพยาบาล : ตอน 2 การควบคุมการระบาดของโรคโบทูลิซัม</a></td>
            <td>นพ.วิทยา สวัสดิวุฒิพงศ์</td>
            <td>703</td>
            <td>14</td>
          </tr>
          <tr>
            <td>6</td>
            <td><a href="#">ตัวอย่างการใช้กระบวนการจัดการความรู้ในการแก้ไขปัญหาสาธารณสุขในโรงพยาบาล : ตอน 2 การควบคุมการระบาดของโรคโบทูลิซัม</a></td>
            <td>นพ.วิทยา สวัสดิวุฒิพงศ์</td>
            <td>704 </td>
            <td>14</td>
          </tr>
          <tr>
            <td>7</td>
            <td><a href="#">ตัวอย่างการใช้กระบวนการจัดการความรู้ในการแก้ไขปัญหาสาธารณสุขในโรงพยาบาล : ตอน 1 การควบคุมการติดเชื้อในโรงพยาบาล</a></td>
            <td>นพ.วิทยา สวัสดิวุฒิพงศ์</td>
            <td>1190</td>
            <td>52</td>
          </tr>
          <tr>
            <td>8</td>
            <td><a href="#">"ซีแอล" ไม่โปร่งใส : มันอะไรกันแน่ ?</a></td>
            <td>นพ.สุรเดช วลีอิทธิกุล</td>
            <td>716 </td>
            <td>5</td>
          </tr>
          <tr>
            <td>9</td>
            <td><a href="#">KM กับ วัฒนธรรม ?ไวไวควิก?</a></td>
            <td>วีรบูรณ์ วิสารทสกุล</td>
            <td>735</td>
            <td>9</td>
          </tr>
          <tr>
            <td>10</td>
            <td><a href="#">มุสา 7 ประการ เรื่องการใช้สิทธิ์เหนือสิทธิบัตรยา</a></td>
            <td>ผศ.ดร.วิทยา กุลสมบูรณ์</td>
            <td>677</td>
            <td>7</td>
          </tr>
         </tbody>
        </table>

    </div>
    <div class="tab3">Tab 3 content</div>
    <div class="tab4">Tab 4 content</div>
    <div class="tab5">Tab 5 content</div>
   
</div>
	
      <div id="Gallery" style="width:730px;">
       <div class="titlePicGallery">&nbsp;</div><div class="PicGalleryAll"><a href="#">&nbsp;</a></div>
      <div id="peg"></div>
     <div class="picgallery">
       		<div class="arrowleftGall"><a href="#">&nbsp;</a></div>
        	<div class="picture1">
            <a href="#" class="highlightit"><img src="images/ex_pic1.jpg" width="130" height="119" /></a>
          <a href="#">ประชุมเชิงปฏิบัติการ</a></div>
            <div class="picture2">
            <a href="#" class="highlightit"><img src="images/ex_pic2_.jpg" width="130" height="119" /></a>
            <a href="#">ไข้หวัดใหญ่ฯ 2009</a></div>
            <div class="picture3">
            <a href="#" class="highlightit"><img src="images/ex_pic3_.jpg" width="130" height="119" /></a>
            <a href="#">ประชุม SRRT</a></div>
            <div class="picture4">
            <a href="#" class="highlightit"><img src="images/ex_pic4.jpg" width="130" height="119" /></a>
            <a href="#">แฮปปี้ทุกวันร่วมกันสู้หวัด </a></div>
            <div class="arrowrightGall"><a href="#">&nbsp;</a></div>
       </div>
       </div>
        <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>
       </div>
       
      </div>
  </div>
    <div id="footer">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbfooter">
          <tr>
            <td width="69%" align="right"> จำนวนเยี่ยมชม    ณ วันนี้ : <span class="no">3</span> <span class="no">1</span> <span class="no">2</span> <span class="no">5</span> &nbsp;&nbsp;|&nbsp;&nbsp;ณ เดือนนี้ : <span class="no">6</span> <span class="no">4</span> <span class="no">3</span>   <span class="no">3</span>  <span class="no">0</span>    &nbsp;&nbsp;|&nbsp;&nbsp; ณ ปีนี้ :  <span class="no">2</span> <span class="no">6</span> <span class="no">0</span> <span class="no">2</span> <span class="no">0</span> <span class="no">7</span></td>
            <td width="31%" height="30px" align="left" style="padding-left:30px;"><a href="#" class="linkstat">&nbsp;</a></td>
          </tr>
          <tr>
            <td colspan="2" align="center">สำนักจัดการความรู้ กรมควบคุมโรค กระทรวงสาธารณสุข ถนนติวานนท์ อ.เมือง จ.นนทบุรี 11000  โทร 0-2590-3251-3 โทรสาร 0-2590-3251-3 ต่อ16 , 02-965-9610</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="center"> <span class="textcopyright">Copyright @ 2013 www.kmddc.go.th All Rights Reserved.</span></td>
          </tr>
        </table>
		</div>
    </div>
</div>

</body>
</html>
