<div id="slider" >
	<ul id="run_highLight">
		<li id="run_highLight"><a href="<?php echo base_url("contents/").$contents->id?>"><img src="<?php echo $contents->image?>" width="970" height="266" border="0"></a></li>
	</ul>
</div>
<div id="run">
    <ul>
      <li><a href="#" class="active">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
    </ul>
</div>
<hr class="hr1"/>
<div class="clr"></div>

<script type="text/javascript">
$(document).ready(function(){
	$("#highlight #slider li:first").show();
	$("#highlight #run ul li a:first").addClass('active');
	
	$("#highlight #run ul li a").click(function(){
		$(this).addClass("active").parent().siblings().find('a').removeClass("active");
		 $("#highlight #slider li:eq(" + $("#highlight #run ul li").index($(this).parent()) + ")").fadeIn('slow').siblings().hide();
		 clearInterval ( timeout );
		return false;
	});
			
	var timeout = setInterval("hilight();",5000);
});

function hilight(){
	var index = ($("#highlight #run ul li a").index($("#highlight #run ul li a.active")) + 1) % 5;
	// console.log(index);
	$("#highlight #run ul li:eq(" + index + ")").find('a').addClass("active").parent().siblings().find('a').removeClass("active");
	$("#highlight #slider li:eq(" + index + ")").fadeIn('slow').siblings().hide();
}
</script>
