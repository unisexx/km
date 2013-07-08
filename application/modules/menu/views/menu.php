<div id="topmenu">
    <ul style="padding-top:12px; width:100%;">
    	
		<li><a href="<?php echo base_url()?>" class="home">&nbsp;</a></li>

		<?php foreach($menu as $a):?>
		<li><a href="<?php echo base_url().$a->url?>" ><?php echo $a->title?>
		<?php if($a->root==1):?><img src="themes/kmddc/images/arrow_topmenu.png" width="10" height="7" border="0"><?php endif?></a>
		<?php if($a->root!=0):?>
		<ul>
					
					<?php foreach($sub as $b):?>
					<?php if($b->parent==$a->id):?>
					<li><a href="<?php echo base_url().$b->url?>" ><?php echo $b->title?>
					<?php if($b->root==2):?><img src="themes/kmddc/images/arrow_topmenu2.png" width="5" height="10" border="0" style="float:right;"><?php endif?></a>
									
									<?php if($b->root!=0):?>
									<ul>
									<?php foreach($sub as $c):?>
									<?php if($c->parent==$b->id):?>
									<li><a href="<?php echo base_url().$c->url?>" ><?php echo $c->title?>
									<?php if($c->root==2):?><img src="themes/kmddc/images/arrow_topmenu2.png" width="5" height="10" border="0" style="float:right;"><?php endif?></a>
													
													<?php if($c->root!=0):?>
													<ul>
													<?php foreach($sub as $d):?>
													<?php if($d->parent==$c->id):?>
													<li><a href="<?php echo base_url().$d->url?>"><?php echo $d->title?></a></li>
													<?php endif?>
													<?php endforeach?>
													</ul>
													<?php endif?>
													
									</li>
									<?php endif?>
									<?php endforeach?>
									</ul>
									<?php endif?>
									
					</li>
					<?php endif?>
					<?php endforeach?>
					
		</ul>
		<?php endif?>
		</li>
		<?php endforeach?>
		
    </ul>
</div>