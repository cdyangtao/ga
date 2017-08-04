<?php if (!defined('THINK_PATH')) exit();?><html>
  
<head>
    <title>
    title
    </title>
    <!--<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />-->
    <link href="__PUBLIC__/se7en/stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/style.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/layer.css" media="all" rel="stylesheet" type="text/css" />
    <script src="__PUBLIC__/se7en/javascripts/jquery.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery-ui.js" type="text/javascript"></script>
    
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  </head>
  <body>
 
<div class="modal-shiftfix">
<!-- Navigation -->
<div class="navbar navbar-fixed-top scroll-hide">
  <div class="container-fluid top-bar">
          <div class="pull-right">
            <ul class="nav navbar-nav pull-right">
              <li class="dropdown notifications hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-flag"></span>
                  <div class="sr-only">
                    Notifications
                  </div>
                  <p class="counter">
                    4
                  </p>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      New user added: Jane Smith
                    </p></a>
                    
                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      Sales targets available
                    </p></a>
                    
                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      New performance metric added
                    </p></a>
                    
                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      New growth data available
                    </p></a>
                    
                  </li>
                </ul>
              </li>
              <li class="dropdown messages hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-envelope"></span>
                  <div class="sr-only">
                    Messages
                  </div>
                  <p class="counter">
                    3
                  </p>
                </a>
                <ul class="dropdown-menu messages">
                  <li><a href="#">
                    <img width="34" height="34" src="images/avatar-male2.png" />Could we meet today? I wanted...</a>
                  </li>
                  <li><a href="#">
                    <img width="34" height="34" src="images/avatar-female.png" />Important data needs your analysis...</a>
                  </li>
                  <li><a href="#">
                    <img width="34" height="34" src="images/avatar-male2.png" />Buy Se7en today, it's a great theme...</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown settings hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-gear"></span>
                  <div class="sr-only">
                    Settings
                  </div>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="settings-link blue" href="javascript:chooseStyle('none', 30)"><span></span>Blue</a>
                  </li>
                  <li>
                    <a class="settings-link green" href="javascript:chooseStyle('green-theme', 30)"><span></span>Green</a>
                  </li>
                  <li>
                    <a class="settings-link orange" href="javascript:chooseStyle('orange-theme', 30)"><span></span>Orange</a>
                  </li>
                  <li>
                    <a class="settings-link magenta" href="javascript:chooseStyle('magenta-theme', 30)"><span></span>Magenta</a>
                  </li>
                  <li>
                    <a class="settings-link gray" href="javascript:chooseStyle('gray-theme', 30)"><span></span>Gray</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown user hidden-xs"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img width="34" height="34" src="images/avatar-male.jpg" />John Smith<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">
                    <i class="icon-user"></i>My Account</a>
                  </li>
                  <li><a href="#">
                    <i class="icon-gear"></i>Account Settings</a>
                  </li>
                  <li><a href="login1.html">
                    <i class="icon-signout"></i>Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="logo" href="index-2.html">se7en</a>
          <form class="navbar-form form-inline col-lg-2 hidden-xs">
            <input class="form-control" placeholder="Search" type="text">
          </form>
        </div>
  <div class="container-fluid main-nav clearfix">
          <div class="nav-collapse">
            <ul class="nav">
              <li>
                <a href="jsvascript:;"><span aria-hidden="true" class="se7en-home"></span>Dashboard</a>
              </li>
              
             
             <!-- 广告系列 -->
              <li class="dropdown"><a data-toggle="dropdown" <?php if(__URL__=='/campaign'):?>class="current"<?php endif;?> href="jsvascript:;">
                <span aria-hidden="true" class="se7en-feed"></span>广告系列<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="<?php echo U('/campaign/index','',false);?>" <?php if(__ACTION__=='/campaign/index'):?>class="current"<?php endif;?>>所有广告系列</a>
                  </li>
                  <li>
                    <a href="<?php echo U('/campaign/add','',false);?>" <?php if(__ACTION__=='/campaign/add'):?>class="current"<?php endif;?> >添加广告系列</a>
                  </li>                  
                </ul>
              </li>

              <!-- 广告组 -->
              <li class="dropdown"><a data-toggle="dropdown" <?php if(__URL__=='/adGroup'):?>class="current"<?php endif;?> href="jsvascript:;">
                <span aria-hidden="true" class="se7en-feed"></span>广告组<b class="caret"></b></a>
                <ul class="dropdown-menu">
                 <li>
                    <a href="<?php echo U('/adGroup/index','',false);?>" <?php if(__ACTION__=='/adGroup/index'):?>class="current"<?php endif;?>>所有广告组</a>
                  </li>
                  <li>
                    <a href="<?php echo U('/adGroup/add','',false);?>" <?php if(__ACTION__=='/adGroup/add'):?>class="current"<?php endif;?> >添加广告组</a>
                  </li>     
                </ul>
              </li>

             

              <li><a href="social.html">
                <span aria-hidden="true" class="se7en-tables"></span>设置子账户</a>
              </li>
             
            </ul>
          </div>
        </div>

        
</div>
<!-- End Navigation -->
</div>
<div class="container-fluid main-content">
  <div class="page-title">
    <h1>
      广告组
    </h1>
  </div>
  <!-- DataTables Example -->
  <div class="row">
    <div class="col-lg-12">
      <div class="widget-container fluid-height clearfix">
        <div class="heading">
          <i class="icon-table"></i>AdGroup List<a class="btn btn-sm btn-primary-outline pull-right" href="<?php echo U('/adGroup/add','',false);?>" id="add-campaign"><i class="icon-plus"></i>Add New</a>
        </div>

        <div class="widget-content padded clearfix">
         <table class="table table-bordered table-striped" id="dataTable1">
            <thead>
              <th class="check-header hidden-xs">
                <label><input id="checkAll" name="checkAll" type="checkbox"><span></span></label>
              </th>
              <th>Ad group</th>
              <th>Campaign name</th>
              <th>Status</th>
              <th class="hidden-xs">Default Max. CPC</th>              
              <th class="hidden-xs">labels</th>
              <th width="200"></th>
            </thead>
            <tbody>
              <?php foreach($adGroups as $adGroup):?>
              <tr>
                <td class="check hidden-xs">
                  <label><input name="optionsRadios1" type="checkbox" value="option1"><span></span></label>
                </td>
                <td><a class="" href="<?php echo U('/adGroup/detail','adGroupId='.$adGroup['id'],false);?>"><?php echo $adGroup['name'];?></a></td>
                <td><?php echo $adGroup['campaignName'];?></td>
                <td><?php echo $adGroup['status'];?></td>
                <td -class="hidden-xs"><?php echo $adGroup['biddingStrategyConfiguration']['bids'][0]['bid']['microAmount']/1000000;?></td>                
                <td class="hidden-xs">
                <?php foreach($adGroup['labels'] as $label):?>
                  <span class="label label-success" style="background:<?php echo $label['attribute']['backgroundColor'];?>"><?php echo $label['name'];?></span>
                <?php endforeach;?>
                </td>
                <td class="actions">
                  <div class="action-buttons">
                    <a class="table-actions add_ad_a" custom_attr="<?php echo $adGroup['id']; ?>" data-toggle="modal" href="#add_ad"><i class="icon-plus"></i></a><a class="table-actions" data-toggle="modal" href="#groupEdit_<?php echo $adGroup['id']; ?>"><i class="icon-pencil"></i></a><a class="table-actions removeAdGroup" custom_attr="<?php echo $adGroup['id']; ?>"  href="javascript:;"><i class="icon-trash"></i></a>
                  </div>
                </td>
              </tr>  

              <?php endforeach;?>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- end DataTables Example -->
     
        
  <!-- 隐藏的编辑界面 -->  
  <?php foreach($adGroups as $adGroup):?>
    <div class="modal fade" id="groupEdit_<?php echo $adGroup['id']; ?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
            <h4 class="modal-title">
              广告组编辑
            </h4>
          </div>
          <div class="modal-body">            
            <div class="widget-content padded">
              <form action="<?php echo U('update','',false);?>" class="form-horizontal" method="POST">
              <input type="hidden" name="id" value="<?php echo $adGroup['id'];?>" />
                <div class="form-group">
                  <label class="control-label col-md-3">Status</label>
                  <div class="col-md-7">
                    <select class="form-control" name="status">
                      <option value="ENABLED" <?php if($adGroup['status']=='ENABLED'): ?>selected=""<?php endif;?> >Enable</option>
                      <option value="PAUSED"   <?php if($adGroup['status']=='PAUSED'): ?>selected=""<?php endif;?> >Paused</option>
                      <option value="REMOVED" <?php if($adGroup['status']=='REMOVED'): ?>selected=""<?php endif;?> >Removed</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3">Name</label>
                  <div class="col-md-7">
                    <input class="form-control" placeholder="Text" type="text" name="name" value="<?php echo $adGroup['name'];?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3">Default Max. CPC</label>
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon">$</span><input class="form-control" type="text" name="cpc_amount" value="<?php echo $adGroup['biddingStrategyConfiguration']['bids'][0]['bid']['microAmount']/1000000;?>"></input>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3"></label>
                  <div class="col-md-7">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <button class="btn btn-default-outline" data-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default-outline" data-dismiss="modal" type="button">Close</button>
          </div>
        </div>
      </div>
    </div>   
    <?php endforeach;?>
  <!-- end 隐藏的编辑界面 -->        

  <!-- add Ad -->
  <div class="modal fade" id="add_ad">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
          <h4 class="modal-title">
            添加广告
          </h4>
        </div>
        <div class="modal-body">

          <div class="col-lg-12">
              <div class="widget-container fluid-height clearfix">
                <div class="heading">
                  <i class="icon-reorder"></i>广告设置
                </div>
                <div class="widget-content padded">
                  <form action="<?php echo U('add','',false);?>" method="POST" id='add_ad_form' class="form-horizontal">
                    <input type="hidden" name="adGroupId" value="" id="add_adGroupId"/>
                    

                    <div class="form-group">
                      <label class="control-label col-md-3" for="finalUrl">Final URL</label>
                      <div class="col-md-7">
                        <input class="form-control" id="finalUrl" placeholder="Text" type="text" name="finalUrl" />
                      </div>
                    </div>
                   
                    <div class="form-group">
                      <label class="control-label col-md-3">Headline 1</label>
                     <div class="col-md-7">
                        <input class="form-control" placeholder="Text" type="text" name="headline1" />
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3">Headline 2</label>
                      <div class="col-md-7">
                        <input class="form-control" placeholder="Text" type="text" name="headline2" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3">Path</label>
                      <label class="control-label col-md-1">/</label><div class="col-md-2"><input class="form-control" placeholder="path1" type="text" name="path1" /></div><label class="control-label col-md-1">/</label><div class="col-md-2"><input class="form-control" placeholder="path2" type="text" name="path2" /></div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3">Description</label>
                      <div class="col-md-7">
                        <textarea class="form-control" rows="3" name="desc"></textarea>
                      </div>
                    </div>

                    
                    <div class="form-group">
                      <label class="control-label col-md-3"></label>
                      <div class="col-md-7">
                        <!--<button class="btn btn-primary" type="submit">Submit</button>-->
                        <input class="btn btn-primary" type="submit" value="Submite">
                      </div>
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>

        
        </div>
       <!--  <div class="modal-footer">
          <button class="btn btn-primary" type="button">Save Changes</button><button class="btn btn-default-outline" data-dismiss="modal" type="button">Close</button>
        </div> -->
      </div>
    </div>
  </div>
  <!-- end add Ad -->

</div>

<script type="text/javascript">
$(function(){
  

  $(".removeAdGroup").on("click",function(index){
    var adGroupId=$(this).attr('custom_attr');
    //console.log(adGroupId);return;
    layer.open({
        title: '提示',
        content: '确认要删除该广告组 ?',
        btn:['确定','取消'],
        yes: function(index){
            ajaxLoading.start();
            $.ajax({
              type: "POST",
              url: "<?php echo U('remove','',false);?>",
              data: "adGroupId="+adGroupId,
              cache:false,
              dataType:'json',
              success: function(msg){
                 ajaxLoading.end();
                 layer.close(index);  
                 if(msg.status==1){
                    layer.open({
                          title: '提示',
                          content: '删除成功',
                          btn:['好的'],
                          end: function(index){
                              layer.close(index);   
                              window.location.href="<?php echo U('index','',false); ?>";                                                                
                          },
                      });
                 }else{
                    layer.open({
                          title: '提示',
                          content: '删除失败',
                          btn:['好的'],
                          yes: function(index){
                              layer.close(index);                                                                      
                          },
                      });
                 }
              },

            });                                                               
          },
          no:function(index){
            layer.close(index);  
          }
      });
       
    }) 




  $("#add_ad_form").validate({
      rules: {
        finalUrl: "required",
        headline1: "required",
        headline2: "required",
        desc: "required",       
      },
      messages: {
        finalUrl: "cant be empty",
        headline1: "cant be empty",
        headline2: "cant be empty",
        desc: "cant be empty",
      }
  });
  $(".add_ad_a").on("click",function(){
    var adGroupId=$(this).attr('custom_attr');
    $("#add_adGroupId").val(adGroupId);
  });
  $("#add_ad_form").on("submit",function(index){
  
    var formData=$(this).serialize();
    if($(this).valid()){
      ajaxLoading.start();
      $.ajax({
        type: "POST",
        url: "<?php echo U('/adGroup/addAd','',false);?>",
        data: formData,
        cache:false,
        dataType:'json',
        success: function(msg){
            ajaxLoading.end();
            layer.close(index);  
            if(msg.status==1){
              layer.open({
                    title: '提示',
                    content: '添加广告成功',
                    btn:['好的'],
                    end: function(index){
                        layer.close(index);   
                        window.location.href="<?php echo U('/adGroup/index','',false); ?>";                                                                
                    },
                });
            }else{
              layer.open({
                    title: '提示',
                    content: '添加广告失败',
                    btn:['好的'],
                    yes: function(index){
                        layer.close(index);                                                                      
                    },
                });
            }
        },
      });
    }
    
    
  });



























  });


  
</script>>


    </div>
	
    <script src="__PUBLIC__/se7en/javascripts/bootstrap.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/raphael.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/selectivizr-min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.mousewheel.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/fullcalendar.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/gcal.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/datatable-editable.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/excanvas.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/isotope_extras.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/modernizr.custom.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/select2.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/styleswitcher.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/wysiwyg.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/summernote.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.inputmask.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.validate.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/bootstrap-fileupload.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/bootstrap-timepicker.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/bootstrap-colorpicker.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/typeahead.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/daterange-picker.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/date.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/morris.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/skycons.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/fitvids.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/main.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/respond.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/layer.js" type="text/javascript"></script>

  </body>

</html>