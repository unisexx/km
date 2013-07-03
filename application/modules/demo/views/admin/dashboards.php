<div class="page-header position-relative">
    <h1>Dashboard <small><i class="icon-double-angle-right"></i> overview & stats</small></h1>
</div><!--/page-header-->

<!-- <div class="row-fluid"> -->
	<!-- PAGE CONTENT BEGINS HERE -->

<div class="alert alert-block alert-success">
 <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
 <i class="icon-ok green"></i> Welcome to <strong class="green">Ace <small>(v1)</small></strong>,
 the lightweight, feature-rich, easy to use and well-documented admin template.
</div>

<div class="space-6"></div>

<div class="row-fluid">

 <div class="span6">
    <div class="widget-box transparent">
        
        <div class="widget-header">
            <h4 class="lighter smaller"><i class="icon-rss orange"></i>RECENT</h4>
            <div class="widget-toolbar no-border">
                <ul class="nav nav-tabs" id="recent-tab">
                    <li class="active"><a data-toggle="tab" href="#task-tab">News</a></li>
                    <li><a data-toggle="tab" href="#page-tab">Pages</a></li>
                    <!-- <li><a data-toggle="tab" href="#member-tab">Members</a></li>
                    <li><a data-toggle="tab" href="#comment-tab">Comments</a></li> -->
                </ul>
            </div>
        </div>
        
        <div class="widget-body">
         <div class="widget-main padding-5">
            <div class="tab-content padding-8">
            	
                <div id="task-tab" class="tab-pane active">
                    <h4 class="smaller lighter green"><i class="icon-list"></i> Sortable Lists</h4>
                    <ul id="tasks" class="item-list">
                    	
                    	<?php foreach ($contents as $row):?>
                    	<li class="item-orange">
                            <label class="inline"><input type="checkbox" /><span class="lbl"><?php echo $row->title?></span></label>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <a href="contents/admin/contents/form/<?php echo $row->id?>?module=<?php echo $row->module?>"><button class="btn btn-mini btn-info" ><i class="icon-edit"></i></button></a>
                                    <button class="btn btn-mini btn-danger "><i class="icon-trash"></i></button>
                                    <button class="btn btn-mini btn-yellow"><i class="icon-flag"></i></button>
                                </div>
                            </div>
                        </li>
                        <?php endforeach?>
                        
                        <!-- <li class="item-orange clearfix">
                            <label class="inline"><input type="checkbox" /><span class="lbl"> Answering customer questions</span></label>
                            <div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
                                <span class="percent">42</span>%
                            </div>
                        </li>
                        <li class="item-red clearfix">
                            <label class="inline"><input type="checkbox" /><span class="lbl"> Fixing bugs</span></label>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button class="btn btn-mini btn-info"><i class="icon-edit"></i></button>
                                    <button class="btn btn-mini btn-danger "><i class="icon-trash"></i></button>
                                    <button class="btn btn-mini btn-yellow"><i class="icon-flag"></i></button>
                                </div>
                            </div>
                        </li>
                        <li class="item-default clearfix">
                            <label class="inline"><input type="checkbox" /><span class="lbl"> Adding new features</span></label>
                            <div class="inline pull-right position-relative">
                                <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-closer">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done" data-placement="left"><span class="green"><i class="icon-ok"></i></span></a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="item-blue">
                            <label class="inline"><input type="checkbox" /><span class="lbl"> Upgrading scripts used in template</span></label>
                        </li>
                        <li class="item-grey">
                            <label class="inline"><input type="checkbox" /><span class="lbl"> Adding new skins</span></label>
                        </li>
                        <li class="item-green">
                            <label class="inline"><input type="checkbox" /><span class="lbl"> Updating server software up</span></label>
                        </li>
                        <li class="item-pink">
                            <label class="inline"><input type="checkbox" /><span class="lbl"> Cleaning up</span></label>
                        </li> -->
                    </ul>
                </div>
                
                <div id="page-tab" class="tab-pane">
                    <h4 class="smaller lighter green"><i class="icon-list"></i> Sortable Lists</h4>
                    <ul id="tasks" class="item-list">
                    	
                    	<?php foreach ($pages as $page):?>
                    	<li class="item-green">
                            <label class="inline"><input type="checkbox" /><span class="lbl"><?php echo $page->name?></span></label>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <a href="contents/admin/contents/form/<?php echo $page->id?>?module=<?php echo $page->name?>"><button class="btn btn-mini btn-info" ><i class="icon-edit"></i></button></a>
                                    <button class="btn btn-mini btn-danger "><i class="icon-trash"></i></button>
                                    <button class="btn btn-mini btn-yellow"><i class="icon-flag"></i></button>
                                </div>
                            </div>
                        </li>
                        <?php endforeach?>
                        
                    </ul>
                </div>
                
                <div id="member-tab" class="tab-pane">
                    <div class="clearfix">
                        <div class="itemdiv memberdiv">
                            <div class="user">
                                <img alt="Bob's avatar" src="themes/admin/media/images/user.jpg" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Bob Doe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">20 min</span></div>
                                <div>
                                    <span class="label label-warning">pending</span>
                                    <div class="inline position-relative">
                                        <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only"></i></button>
                                        <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                            <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve" data-placement="right"><span class="green"><i class="icon-ok"></i></span></a></li>
                                            <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject" data-placement="right"><span class="orange"><i class="icon-remove"></i></span> </a></li>
                                            <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="right"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="itemdiv memberdiv">
                            <div class="user">
                                <img alt="Joe's Avatar" src="themes/admin/media/images/avatar2.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Joe Doe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">1 hour</span></div>
                                <div>
                                    <span class="label label-warning">pending</span>
                                    <div class="inline position-relative">
                                        <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only"></i></button>
                                        <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                            <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve" data-placement="left"><span class="green"><i class="icon-ok"></i></span></a></li>
                                            <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject" data-placement="left"><span class="orange"><i class="icon-remove"></i></span> </a></li>
                                            <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

              
                        <div class="itemdiv memberdiv">
                            <div class="user">
                                <img alt="Jim's Avatar" src="themes/admin/media/images/avatar.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Jim Doe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">2 hour</span></div>
                                <div>
                                    <span class="label label-warning">pending</span>
                                    <div class="inline position-relative">
                                        <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only"></i></button>
                                        <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                            <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve" data-placement="right"><span class="green"><i class="icon-ok"></i></span></a></li>
                                            <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject" data-placement="right"><span class="orange"><i class="icon-remove"></i></span> </a></li>
                                            <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="right"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="itemdiv memberdiv">
                            <div class="user">
                                <img alt="Alex's Avatar" src="themes/admin/media/images/avatar2.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Alex Doe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">3 hour</span></div>
                                <div class="label label-important">blocked</div>
                            </div>
                        </div>


                        <div class="itemdiv memberdiv">
                            <div class="user">
                                <img alt="Bob's Avatar" src="themes/admin/media/images/avatar2.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Bob Doe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">6 hour</span> </div>
                                <div class="label label-success arrowed-in">approved</div>
                            </div>
                        </div>

                        
                        <div class="itemdiv memberdiv">
                            <div class="user">
                                <img alt="Susan's Avatar" src="themes/admin/media/images/avatar3.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Susan</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">yesterday</span></div>
                                <div class="label label-success arrowed-in">approved</div>
                            </div>
                        </div>

              
                        <div class="itemdiv memberdiv">
                            <div class="user">
                                <img alt="Phil's Avatar" src="themes/admin/media/images/avatar4.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Phil Doe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">2 days ago</span></div>
                                <div class="label label-info arrowed-in  arrowed-in-right">online</div>
                            </div>
                        </div>

                        
                        <div class="itemdiv memberdiv">
                            <div class="user">
                                <img alt="Alexa's Avatar" src="themes/admin/media/images/avatar1.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Alexa Doe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">3 days ago</span></div>
                                <div class="label label-success arrowed-in">approved</div>
                            </div>
                        </div>
                    </div>

                    <div class="center">
                        <i class="icon-group icon-2x green"></i> &nbsp; <a href="#">See all members &nbsp; <i class="icon-arrow-right"></i></a>
                    </div>
                    <div class="hr hr-double hr8"></div>

                </div><!-- member-tab -->
                
                
                
                <div id="comment-tab" class="tab-pane">
                    <div class="comments">
                        <div class="itemdiv commentdiv">
                            <div class="user">
                                <img alt="Bob's Avatar" src="themes/admin/media/images/avatar.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Bob Doe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">6 min</span></div>
                                <div class="text">
                                    <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                </div>
                            </div>
                            
                            <div class="tools">
                                <div class="inline position-relative">
                                    <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only"></i></button>
                                    <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                        <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve" data-placement="left"><span class="green"><i class="icon-ok"></i></span></a></li>
                                        <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject" data-placement="left"><span class="orange"><i class="icon-remove"></i></span> </a></li>
                                        <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="itemdiv commentdiv">
                            <div class="user">
                                <img alt="Jennifer's Avatar" src="themes/admin/media/images/avatar1.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Jennifer</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="blue">15 min</span></div>
                                <div class="text">
                                    <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip; 
                                </div>
                            </div>
                            
                            <div class="tools">
                                <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-pencil"></i></a>
                                <a href="#" class="btn btn-minier btn-danger"><i class="icon-only icon-trash"></i></a>
                            </div>
                        </div>
                        
                        
                        <div class="itemdiv commentdiv">
                            <div class="user">
                                <img alt="Joe's Avatar" src="themes/admin/media/images/avatar2.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Joe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="orange">22 min</span></div>
                                <div class="text">
                                    <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                </div>
                            </div>
                            
                            <div class="tools">
                                <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-pencil"></i></a>
                                <a href="#" class="btn btn-minier btn-danger"><i class="icon-only icon-trash"></i></a>
                            </div>
                        </div>
                        
                        
                        <div class="itemdiv commentdiv">
                            <div class="user">
                                <img alt="Rita's Avatar" src="themes/admin/media/images/avatar3.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Rita</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="red">50 min</span></div>
                                <div class="text">
                                    <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                </div>
                            </div>
                            
                            <div class="tools">
                                <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-pencil"></i></a>
                                <a href="#" class="btn btn-minier btn-danger"><i class="icon-only icon-trash"></i></a>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="hr hr8"></div>
                    <div class="center">
                            <i class="icon-comments-alt icon-2x green"></i> &nbsp; <a href="#">See all comments &nbsp; <i class="icon-arrow-right"></i></a>
                    </div>
                    <div class="hr hr-double hr8"></div>
                    
                </div>
            </div>
         </div><!--/widget-main-->
        </div><!--/widget-body-->
        
        
    </div><!--/widget-box-->
 </div><!--/span-->
 
 <div class="span6">
    <div class="widget-box ">
        
        <div class="widget-header">
            <h4 class="lighter smaller"><i class="icon-comment blue"></i>Conversation</h4>
        </div>
        
        <div class="widget-body">
         <div class="widget-main no-padding">
            
            <div class="dialogs">
                <div class="itemdiv dialogdiv">
                    <div class="user">
                        <img alt="Alexa's Avatar" src="themes/admin/media/images/avatar1.png" />
                    </div>
                    
                    <div class="body">
                        <div class="time"><i class="icon-time"></i> <span class="green">4 sec</span></div>
                        <div class="name"><a href="#">Alexa</a></div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. </div>
                        
                        <div class="tools">
                            <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
                        </div>
                    </div>
                </div>
                
                
                <div class="itemdiv dialogdiv">
                    <div class="user">
                        <img alt="John's Avatar" src="themes/admin/media/images/avatar.png" />
                    </div>
                    
                    <div class="body">
                        <div class="time"><i class="icon-time"></i> <span class="blue">38 sec</span></div>
                        <div class="name"><a href="#">John</a></div>
                        <div class="text">Raw denim you probably haven't heard of them jean shorts Austin.</div>
                        
                        <div class="tools">
                            <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
                        </div>
                    </div>
                </div>
                
                
                <div class="itemdiv dialogdiv">
                    <div class="user">
                        <img alt="Bob's avatar" src="themes/admin/media/images/user.jpg" />
                    </div>
                    
                    <div class="body">
                        <div class="time"><i class="icon-time"></i> <span class="orange">2 min</span></div>
                        <div class="name"><a href="#">Bob</a> <span class="label label-info arrowed arrowed-in-right">admin</span></div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. </div>
                        
                        <div class="tools">
                            <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
                        </div>
                    </div>
                </div>
                
                
                <div class="itemdiv dialogdiv">
                    <div class="user">
                        <img alt="Jim's Avatar" src="themes/admin/media/images/avatar4.png" />
                    </div>
                    
                    <div class="body">
                        <div class="time"><i class="icon-time"></i> <span class="muted">3 min</span></div>
                        <div class="name"><a href="#">Jim</a></div>
                        <div class="text">Raw denim you probably haven't heard of them jean shorts Austin.</div>
                        
                        <div class="tools">
                            <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
                        </div>
                    </div>
                </div>
                
                
                <div class="itemdiv dialogdiv">
                    <div class="user">
                        <img alt="Alexa's Avatar" src="themes/admin/media/images/avatar1.png" />
                    </div>
                    
                    <div class="body">
                        <div class="time"><i class="icon-time"></i> <span class="green">4 min</span></div>
                        <div class="name"><a href="#">Alexa</a></div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        
                        <div class="tools">
                            <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            
            <form>
                <div class="form-actions input-append">
                    <input placeholder="Type your message here ..." type="text" class="width-75" name="message" />
                    <button class="btn btn-small btn-info no-radius" onclick="return false;"><i class="icon-share-alt"></i> <span class="hidden-phone">Send</span></button>
                </div>
            </form>
        
         </div><!--/widget-main-->
        </div><!--/widget-body-->
        
    </div><!--/widget-box-->
 </div><!--/span-->

</div><!--/row-->


<!-- PAGE CONTENT ENDS HERE -->
</div>
        
        
<script type="text/javascript">
$(function() {

    $('.dialogs,.comments').slimScroll({
        height: '300px'
    });
    
    $('#tasks').sortable();
    $('#tasks').disableSelection();
    $('#tasks input:checkbox').removeAttr('checked').on('click', function(){
        if(this.checked) $(this).closest('li').addClass('selected');
        else $(this).closest('li').removeClass('selected');
    });

    var oldie = $.browser.msie && $.browser.version < 9;
    $('.easy-pie-chart.percentage').each(function(){
        var $box = $(this).closest('.infobox');
        var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
        var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
        var size = parseInt($(this).data('size')) || 50;
        $(this).easyPieChart({
            barColor: barColor,
            trackColor: trackColor,
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: parseInt(size/10),
            animate: oldie ? false : 1000,
            size: size
        });
    })

    $('.sparkline').each(function(){
        var $box = $(this).closest('.infobox');
        var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
        $(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
    });
    
    



  var data = [
    { label: "social networks",  data: 38.7, color: "#68BC31"},
    { label: "search engines",  data: 24.5, color: "#2091CF"},
    { label: "ad campaings",  data: 8.2, color: "#AF4E96"},
    { label: "direct traffic",  data: 18.6, color: "#DA5430"},
    { label: "other",  data: 10, color: "#FEE074"}
  ];
 var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
 $.plot(placeholder, data, {
    
    series: {
        pie: {
            show: true,
            tilt:0.8,
            highlight: {
                opacity: 0.25
            },
            stroke: {
                color: '#fff',
                width: 2
            },
            startAngle: 2
            
        }
    },
    legend: {
        show: true,
        position: "ne", 
        labelBoxBorderColor: null,
        margin:[-30,15]
    }
    ,
    grid: {
        hoverable: true,
        clickable: true
    },
    tooltip: true, //activate tooltip
    tooltipOpts: {
        content: "%s : %y.1",
        shifts: {
            x: -30,
            y: -50
        }
    }
    
 });

 
  var $tooltip = $("<div class='tooltip top in' style='display:none;'><div class='tooltip-inner'></div></div>").appendTo('body');
  placeholder.data('tooltip', $tooltip);
  var previousPoint = null;

  placeholder.on('plothover', function (event, pos, item) {
    if(item) {
        if (previousPoint != item.seriesIndex) {
            previousPoint = item.seriesIndex;
            var tip = item.series['label'] + " : " + item.series['percent']+'%';
            $(this).data('tooltip').show().children(0).text(tip);
        }
        $(this).data('tooltip').css({top:pos.pageY + 10, left:pos.pageX + 10});
    } else {
        $(this).data('tooltip').hide();
        previousPoint = null;
    }
    
 });






        var d1 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d1.push([i, Math.sin(i)]);
        }

        var d2 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d2.push([i, Math.cos(i)]);
        }

        var d3 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.2) {
            d3.push([i, Math.tan(i)]);
        }
        

        var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
        $.plot("#sales-charts", [
            { label: "Domains", data: d1 },
            { label: "Hosting", data: d2 },
            { label: "Services", data: d3 }
        ], {
            hoverable: true,
            shadowSize: 0,
            series: {
                lines: { show: true },
                points: { show: true }
            },
            xaxis: {
                tickLength: 0
            },
            yaxis: {
                ticks: 10,
                min: -2,
                max: 2,
                tickDecimals: 3
            },
            grid: {
                backgroundColor: { colors: [ "#fff", "#fff" ] },
                borderWidth: 1,
                borderColor:'#555'
            }
        });


        $('[data-rel="tooltip"]').tooltip();
})




</script>