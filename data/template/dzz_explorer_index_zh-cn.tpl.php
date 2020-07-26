<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:10:{s:82:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./dzz/explorer/template/index.htm";i:1595156077;s:103:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./core/template/default/common/header_simple_start.htm";i:1584086883;s:101:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./core/template/default/common/header_simple_end.htm";i:1584086883;s:97:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./core/template/default/common/commer_header.htm";i:1584086883;s:88:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./dzz/explorer/template/header_left.htm";i:1595156077;s:90:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./dzz/explorer/template/header_search.htm";i:1595156077;s:96:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./core/template/default/common/header_right.htm";i:1584086883;s:81:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./dzz/explorer/template/left.htm";i:1595156077;s:94:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./dzz/explorer/template/right_contextmenu.htm";i:1595156079;s:90:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./core/template/default/common/footer.htm";i:1584086883;}*/?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } ?><?php echo $_G['setting']['sitename'];?> </title>
<meta name="keywords" content="<?php if(!empty($_G['setting']['metakeywords'])) { echo htmlspecialchars($_G['setting']['metakeywords']); } ?>" />
<meta name="description" content="<?php if(!empty($_G['setting']['metadescription'])) { echo htmlspecialchars($_G['setting']['metadescription']); ?> <?php } ?>" />
<meta name="generator" content="DzzOffice" />
<meta name="author" content="DzzOffice" />
<meta name="copyright" content="2012-<?php echo dgmdate(TIMESTAMP,'Y-m-d');?> www.dzzoffice.com" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<meta name="renderer" content="webkit">
<base href="<?php echo $_G['siteurl'];?>" />
<link rel="stylesheet" type="text/css" href="static/bootstrap/css/bootstrap.min.css?<?php echo VERHASH;?>">
<link rel="stylesheet" type="text/css" href="static/css/app_manage.css?<?php echo VERHASH;?>">
<link rel="stylesheet" type="text/css" href="static/dzzicon/icon.css?<?php echo VERHASH;?>"/>
<link rel="stylesheet" href="static/popbox/popbox.css">
<script type="text/javascript" src="static/jquery/jquery.min.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/jquery/jquery.json-2.4.min.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>',MOD_PATH='<?php echo MOD_PATH;?>',APP_URL='<?php echo MOD_URL;?>',MOD_URL='<?php echo MOD_URL;?>';</script>
<script type="text/javascript" src="./data/template/dzz_explorer_index_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/popbox/jquery.popbox.js?<?php echo VERHASH;?>" ></script>
<!--[if lt IE 9]>
  <script src="static/bootstrap/js/html5shiv.min.js" ></script>
  <script src="static/bootstrap/js/respond.min.js" ></script>
<![endif]--><?php Hook::listen('header_tpl') ?> <script type="text/javascript">
 if(!!window.ActiveXObject || "ActiveXObject" in window){
 try{$.ajaxSetup({ cache: false });}catch(e){}
 window.MSIE=1;
 } 
</script>
<link rel="stylesheet" href="static/select2/select2.css">
<link rel="stylesheet" href="static/perfect-scrollbar/css/perfect-scrollbar.css?<?php echo VERHASH;?>">
<link rel="stylesheet" href="static/js/datepicker/datepicker.css?<?php echo VERHASH;?>">
<link href="static/jstree/themes/default/style.min.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<link rel="stylesheet" href="static/css/smilies.css">
<link rel="stylesheet" href="static/css/checkbox.css">
<link rel="stylesheet" href="static/tagsinput/jquery.tagsinput.css">
<link rel="stylesheet" href="static/dzzthumb/jquery.dzzthumb.css">
<link rel="stylesheet" href="static/css/common.css">
<link rel="stylesheet" href="<?php echo MOD_PATH;?>/css/index.css">
<link rel="stylesheet" href="<?php echo MOD_PATH;?>/css/filelist_middleicon/style.css" />
<link rel="stylesheet" href="<?php echo MOD_PATH;?>/css/filelist_detaillist/style.css" />
<link rel="stylesheet" href="<?php echo MOD_PATH;?>/css/rightmenu/style.css" />
<link rel="stylesheet" href="<?php echo MOD_PATH;?>/css/file_detailed.css">
<link rel="stylesheet" href="<?php echo MOD_PATH;?>/css/navigation.css">
<link rel="stylesheet" href="<?php echo MOD_PATH;?>/css/headersearch.css">
<link rel="stylesheet" href="<?php echo MOD_PATH;?>/css/single.css">

<script type="text/javascript" src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" ></script>
<style type="text/css">
.bs-main-container {
padding: 0;
}
</style><script type="text/javascript" src="./data/template/dzz_explorer_index_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" class="<?php echo $bodyClass;?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div>    <!--固定的头部-->
    
<nav class="navbar navbar-inverse resNav bs-top-container" >
<div class="resNav-item resNav-left">     
    <ul class="nav navbar-nav navbar-nav-left">
    <li>
        <a href="javascript:;" class="leftTopmenu left-drager-op" onclick="_header.leftTopmenu(this)" style="padding: 8px;">
            <div class="gb_fc"><span class="dzz dzz-menu" style="display: block;"></span></div>
        </a>
    </li>
    <li>
        <a href="<?php echo MOD_URL;?>" class="navbar-nav-left-title">网盘</a>
    </li>
</ul>    </div>
    <div class="resNav-item resNav-center"><div class="resSearch">
    <div class="form-group">
        <div class="input-search input-search-dark input-search-word">
            <i class="input-search-icon dzz dzz-search" aria-hidden="true"></i>
            <input type="text" class="form-control search  form-search" name="filetype" value="" placeholder="搜索" id="searchval">
            <ul class="dropdown-height less_searchcondition">
                <li>
                    <a href="javascript:;" data-val="document">文档</a>
                </li>
                <li>
                    <a href="javascript:;" data-val="excel">电子表格</a>
                </li>
                <li>
                    <a href="javascript:;" data-val="ppt">演示文稿</a>
                </li>
                <li>
                    <a href="javascript:;" data-val="image">图片和照片</a>
                </li>
                <li role="separator" class="divider"></li>
                <li class="dropdown">
                    <a href="javascript:;">搜索更多工具</a>
                </li>
            </ul>
            <span aria-hidden="true" id="emptysearchcondition" class="header-closebutton hide">×</span>
            <button type="button" class="input-search-drop dzz dzz-arrow-dropdown input-search-width"></button>
            <div class="dropdown-width" id="dropdown-width">
                <div class="dropdown-cap">                	
                    <div class="dropdown-type clearfix" data-type="type">
                        <p class="typeword col-sm-2 col-md-2">类型</p>
                        <div class="col-md-10 col-sm-10">
                        <button type="button" class="typebutton" data-toggle="dropdown"><span class="anytime">不限</span><i class="glyphicon glyphicon-triangle-bottom"></i></button>
                        <input type="hidden" name="moresearch_filetype" value=""/>
                        <ul class="dropdown-menu search_type" aria-labelledby="dropdownMenu1">
                            <li>
                                <a href="javascript:;" data-val="all">不限</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-val="image">图片和照片</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-val="pdf">PDF</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-val="document">文档</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-val="excel">电子表格</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-val="ppt">演示文稿</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-val="video">视频</a>
                            </li>

                            <li>
                                <a href="javascript:;" data-val="folder">文件夹</a>
                            </li>
                        </ul>
                       
                        </div> 
                        <button type="button" class="close" aria-label="Close" style="position:absolute"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <div class="dropdown-type clearfix" data-type="owner">
                        <p class="typeword col-sm-2 col-md-2">所有者</p>
                        <div class="col-md-10 col-sm-10">
                        <button type="button" class="typebutton" data-toggle="dropdown"><span class="anytime">不限</span><i class="glyphicon glyphicon-triangle-bottom"></i></button>
                        <input type="hidden" name="moresearch_user" value=""/>
                        <ul class="dropdown-menu searchowner" aria-labelledby="dropdownMenu1">
                            <li>
                                <a href="javascript:;" data-val="all">不限</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-val="self">归我所有</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-val="noself">不归我所有</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-val="user">特定的人</a>

                            </li>
                        </ul>
                       
                        <div class="typeowner ">
                            <input class="js-example-basic-multiple js-states name_emile" id="id_label_multiples" multiple="multiple" value="" />
                      
                        </div> 
                       </div>
                    </div>
                    <div class="dropdown-type clearfix" data-type="badge" style="position: relative;overflow: hidden;"  data-fill="false">
                        <p class="typeword col-sm-2 col-md-2">标记</p>
                        <div class="col-md-10 col-sm-10 header-seaech-checkbox" >
                        <div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" name="flag[]" value="isdelete">
                            <label>在回收站</label>
                        </div>
                        <div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" name="flag[]" value="isstarred">
                            <label>已收藏</label>
                        </div>
                        </div>
                    </div>
                  
<div class="dropdown-type clearfix" data-type="position" style="position: relative;overflow: hidden;" id="positionsearch" data-fill="false">
                        <p class="typeword col-sm-2 col-md-2">位置</p>
                        <div class="col-md-10 col-sm-10 header-seaech-checkbox" id="header-seaech-checkbox">
                        <!--<div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" name="position" value="isdelete">
                            <label>在回收站</label>
                        </div>
                        <div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" name="position" value="isstarred">
                            <label>已收藏</label>
                        </div>-->
                        </div>
                    </div>
                  
                    <div class="dropdown-hr"></div>
                    <div class="dropdown-type clearfix" data-type="date">
                        <p class="typeword col-sm-2 col-md-2">修改日期</p>
                        <div class="col-md-10 col-sm-10">
                        <button type="button" class="typebutton" data-toggle="dropdown"><span class="anytime">任何时间</span><i class="glyphicon glyphicon-triangle-bottom"></i></button>
                        <input type="hidden" name="moresearch_daterange" value=""/>
                        <ul class="dropdown-menu searchdate" aria-labelledby="dropdownMenu1">
                            <li>
                                <a href="javascript:;" data-val="all">任何时间</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-val="1">今天</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-val="-1">昨天</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-val="-7">过去7天</a>
                            </li>
                            <li>
                                <a href="javascript:;"  data-val="-30">最近30天</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-val="-90">过去90天</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-val="datetime">自定义</a>
                            </li>
                        </ul>
                        <div class="typexname typexdate">
                            <p class="data-time">日期范围：</p>
                            <input type="text" id="selectStart"  placeholder="开始时间"  name="startdate">
                            <input type="text" id="selectEnd"   placeholder="结束时间" name="enddate">
                        </div>
                        </div>
                    </div>
                    <div class="dropdown-project clearfix" data-type="name">
                        <p class="typeword col-sm-2 col-md-2">关键词</p>
                        <div class="typexname col-md-10 col-sm-10">
                            <input type="text" value="" id="resourcesname" name="filename" placeholder="请输入关键词，多个关键词用逗号分割" searchname/>
                        </div>
                    </div>
                    <div class="modal-footer">
                    	<button type="button" class="btn btn-primary" id="conditionSearchFile">搜索</button>
                        <button type="button" class="btn btn-primary-outline resetting">重置</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-toggle">
<ul class="sizeMenu pull-right">
        <li class="listchange">
        	<a class="icons-thumbnail" href="javascript:;" onclick="_filemanage.Arrange(this,'')" iconview="4" >
        		<i class="dzz dzz-view-list" data-toggle="tooltip" data-placement="bottom" title="iconview"></i>
        	</a>
        </li>
        <li class="rightswitch">
        	<a href="javascript:;" class="toggRight">
        		<i class="dzz dzz-info" data-toggle="tooltip" data-placement="bottom"></i>
        	</a>
        </li>
    </ul>
<div class="new-buildMenu">
                <div class="dropdown newMenu">
                    <button type="button" class="btn btn-cricular  dropdown-toggle" id="exampleColorDropdown2" data-toggle="dropdown">新建/上传</button>
                    <ul class="dropdown-menu dropdown-menu-primary" aria-labelledby="exampleGroupDrop1" role="menu">
                       
                        <li role="presentation" class="js-newfolder folderPermMust">
                            <a href="javascript:void(0)" onclick="_filemanage.NewIco('newFolder')" role="menuitem">
                            	<span class="dzz dzz-folder filee-icon filee-folder"></span>
                            	<span class="file-text">新建文件夹</span></a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li class="yunfile-upload js-upload-file"><a href="javascript:;">
                        	<span class="dzz  dzz-upload filee-icon filee-upload"></span>
                        	<span class="file-text">上传文件</span>
                            <input type="file" name="files[]" id="wangpan-upload-file" class="wangpan-upload-file" multiple="" data-uploadtype="file"></a>
                        </li>
                        <li class="yunfile-upload js-upload-folder"><a href="javascript:;">
                        	<span class="dzz dzz-folder filee-icon filee-folder"></span>
                        	<span class="file-text">上传文件夹</span>
                            <input type="file" name="files[]" multiple="" webkitdirectory="" value="" id="wangpan-upload-folder" class="wangpan-upload-file" data-uploadtype="folder"></a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li role="presentation">
                            <a href="javascript:void(0)" onclick="_filemanage.NewIco('newLink')" role="menuitem">
                            	<span class="dzz dzz-language filee-icon filee-language"></span>
                            	<span class="file-text">新建网址</span>
                            </a>
                        </li>
                        <!--<li role="presentation">
                            <a href="javascript:void(0)" onclick="_filemanage.NewIco('newDzzDoc')" role="menuitem">
                            	<span class="dzz dzz-description filee-icon filee-description"></span>
                            	<span class="file-text">Dzz文档</span>
                            </a>
                        </li>-->
                        <li role="presentation">
                            <a href="javascript:void(0)" onclick="_filemanage.NewIco('newTxt')" role="menuitem">
                            	<span class="dzz dzz-file filee-icon filee-file"></span>
                            	<span class="file-text">文本文档</span>
                            </a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li role="presentation">
                            <a href="javascript:void(0)" onclick="_filemanage.NewIco('newDoc')" role="menuitem">
                            	<span class="filee-icon dzz dzz-file-text filee-file-text"></span>
                            	<span class="file-text">Word 文档</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" onclick="_filemanage.NewIco('newExcel')" role="menuitem">
                            	<span class="dzz dzz-file-excel filee-icon filee-file-excel"></span>
                            	<span class="file-text">Excel 工作表</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" onclick="_filemanage.NewIco('newPowerPoint')" role="menuitem">
                            	<span class="dzz dzz-file-ppt filee-icon filee-file-ppt"></span>
                            	<span class="file-text">PPT 演示文稿</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

</div>
<script type="text/javascript">
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<script type="text/javascript" src="static/select2/select2.min.js" ></script>
<script type="text/javascript" src="<?php echo MOD_PATH;?>/js/header-search.js" ></script>    </div>
     <div class="resNav-item resNav-right">
     <ul class="nav navbar-nav">
<li>
<a href="javascript:;">
<span class="navbar-borderleft"></span>
</a>
</li>
<li class="app_popup-parent">

<a href="javascript:;" id="desktop_app" data-href="index.php?mod=system&amp;op=app_ajax&amp;operation=app" class="app_popup_icon js-popbox" data-placement="bottom" data-trigger="focus" data-auto-adapt="true" data-toggle="popover"><span class="dzz dzz-apps basil"></span></a>
</li>
<li>
<a href="javascript:;" id="dzz_notification" data-href="index.php?mod=system&amp;op=notification&amp;filter=new" class="navbar-notice js-popbox" data-placement="bottom" data-trigger="focus" data-auto-adapt="true" data-toggle="popover">
<span class="dzz dzz-notifications"></span>
<span class="badge hide">&nbsp;</span>
</a>
</li>
<li>
<a href="javascript:;" class="imgHeight js-popbox" data-href="user.php?mod=space&amp;op=navmenu&amp;modname=<?php echo MOD_NAME;?>" data-placement="bottom" data-trigger="focus" data-auto-adapt="true" data-toggle="popover"><?php echo avatar_block($_G[uid]);?></a>
</li>
</ul></div>
</nav>


<script type="text/javascript">
jQuery(document).ready(function(e) {
    _header.init('<?php echo FORMHASH;?>');//初始化头部效果
    //_header.Topcolor();
//_notice.init();
jQuery(".resNav .js-popbox").each(function(){
jQuery(this).popbox();
});
_notice.getNotificationCount();
});
_notice={};
_notice.flashStep=1;
_notice.checkurl='index.php?mod=system&op=notification&filter=checknew';
_notice.normalTitle= document.title;
_notice.getNotificationCount=function(){
jQuery.getJSON(_notice.checkurl,function(json){
var sum=parseInt(json.sum);
_notice.showTips(sum);
if(json.timeout>0) window.setTimeout(_notice.getNotificationCount,json.timeout);
});
}
_notice.showTips=function(sum){
if(sum>0){
jQuery('#dzz_notification>span.badge').html(sum).removeClass('hide');
jQuery('#dzz_notification>span.dzz').hide();
//_notice.flashTitle();
}else{
jQuery('#dzz_notification>span.badge').addClass('hide');
jQuery('#dzz_notification>span.dzz').show();
//_notice.flashTitle(1);
}
}
_notice.flashTitle=function(flag){
//仅窗口不在焦点时闪烁title，回到焦点时停止闪烁并将title恢复正常
if(flag ||　CurrentActive){//当前处于焦点
document.title=_notice.normalTitle;
_notice.flashTitleRun = false;
return;//退出循环
}
_notice.flashTitleRun = true;
_notice.flashStep++;
if (_notice.flashStep==3) {_notice.flashStep=1;}
if (_notice.flashStep==1) {document.title="【您有新的通知】";}
if (_notice.flashStep==2) {document.title="【　　　　　　】";}
setTimeout(function(){_notice.flashTitle();},500);  //循环
}
</script>    <!--第二部分-->
<div class="below bs-container"> 
  
  <!--左侧菜单--> 
  <div class="leftMenu  clearfix bs-left-container">
  <div class="leconMenu"> 
    <?php if($explorer_setting['left_topcontent']) { ?>
    <div class="latelMenu  left-typecore">
      <p class="recent-use active document-data"  data-href="<?php echo MOD_URL;?>&op=recent" data-hash="recent"><span class="dzz dzz-recent"></span>最近使用</p>
    </div>
    <div class="positionMenu  left-typecore">
      <h6>位置</h6>
      <div class="mechsnismMenu" id="position" class="usertree-container list-unstyled" style="padding:5px 0">
    </div>
  </div>
  <div class="typeMenu  left-typecore">
    <h6><span>类型</span>
      <?php if($explorer_setting['allownewcat']) { ?>
      <button type="button" class="groupbutton " onclick="showWindow('addsearchcat','<?php echo MOD_URL;?>&op=ajax&operation=addsearchcat','get',0)" ><span class="dzz dzz-add-circle"></span></button>
      <?php } ?>
    </h6>
    <div class="typeaMenu  left-typecore" id="catsearchmenu"> 
      <?php if(is_array($catsearch)) foreach($catsearch as $v) { ?>      <p class="pictures document-data" data-href="<?php echo MOD_URL;?>&op=catsearch" id="searchcat_<?php echo $v['id'];?>" data-hash="catsearch&do=searchfile&id=<?php echo $v['id'];?>" data-args="do_searchfile-id_<?php echo $v['id'];?>"> 
        <?php if($v['catname'] == lang('pictures')) { ?> 
        <span class="dzz dzz-photo"></span> 
        <?php } elseif($v['catname'] == lang('document')) { ?> 
        <span class="dzz dzz dzz-file"></span> 
        <?php } else { ?> 
        <span class="dzz dzz dzz-file-type"></span> 
        <?php } ?> 
        <?php echo $v['catname'];?> </p>
      <?php } ?> 
    </div>
  </div>
  <div class="toolMenu  left-typecore">
    <h6>工具</h6>
    <div class="toolaMenu">
      <p class="dynamics document-data" data-href="<?php echo MOD_URL;?>&op=share" data-hash="share&uid=<?php echo $uid;?>"><span class="dzz dzz-share"></span>分享</p>
      <p class="dynamics document-data" data-href="<?php echo MOD_URL;?>&op=dynamic" data-hash="dynamic"><span class="dzz dzz-dynamic"></span>动态</p>
      <p class="dynamics document-data" data-href="<?php echo MOD_URL;?>&op=recycle" data-hash="recycle&uid=<?php echo $uid;?>"><span class="dzz dzz-delete"></span>回收站</p>
      <p class="collection document-data"  data-href="<?php echo MOD_URL;?>&op=collection" data-hash="collection"><span class="dzz dzz-grade"></span>收藏</p>
    </div>
  </div>
  <?php } ?> 
  <?php if($_G['adminid'] == 1) { ?>
  <div class="adminMenu left-typecore">
    <h6>管理</h6>
    <div class="adminiMenu"> 
      <!--<p class="folder-management document-data" data-href="<?php echo MOD_URL;?>&op=perm" data-hash="perm"><span class="dzz dzz-fold-limit"></span>文件夹权限</p>-->
      <p class="folder-management document-data" data-href="<?php echo MOD_URL;?>&op=app" data-hash="app"><span class="dzz dzz-settings"></span>功能管理</p>
      <?php if($explorer_setting['grouponperm']) { ?>
      <p class="folder-management document-data" data-href="<?php echo MOD_URL;?>&op=groupmanage" data-hash="groupmanage"><span class="dzz dzz-manage-group"></span>群组管理</p>
      <?php } ?> 
    </div>
  </div>
  <?php } ?> 
  
</div>
</div>
<div id="template_newGroupButton" style="display:none"> 
  <?php if($explorer_setting['allownewgroup']) { ?>
  <button type="button" class="groupbutton" onclick="showWindow('newGroup','<?php echo MOD_URL;?>&op=ajax&operation=addgroup')"><span class="dzz dzz-add-circle"></span></button>
  <?php } ?> 
</div>
<!--上传完成框-->
<div class="docunment-dialog docunment-dialog-uploader ismin" id="upload_file_tips" style="display:none;">
  <div class="dialog-header">
   
  <h3 id="upload_header" class="dialog-header-title">
  <span id="upload_header_status" class="upload-all-text">文件准备中...</span>
  <span id="upload_header_number_container" class="upload-all-container" style="display: none">
  		[
<span id="upload_header_completed" class="upload-all-cpmpleted">0</span>
    <span class="pipe">/</span>
<span id="upload_header_total" class="upload-all-total">0</span>
]
  </span>
  <span id="upload_header_speed" class="upload-all-speed"></span>
  <div id="upload_header_progress" class="process" style="position:absolute;left:0;top:0;z-index:-1;height:45px;background-color:#e8f5e9;-webkit-transition:width 0.6s ease in;-o-transition:width 0.6s ease in;transition:width 0.6s ease in;width:0%;"></div>
  </h3>
    <div class="dialog-control"> 
    	<span class="dzz dzz-max dialog-header-narrow"></span> 
    	<span class="dzz dzz-close dialog-header-close"></span> </div>
  </div>
  <div class="dialog-body">
    <div class="upload-list-wrapper">
      <div class="upload-list-header">
        <div class="upload-file-name">文件(夹)名</div>
        <div class="upload-file-size">大小</div>
        <div class="upload-file-path">上传目录</div>
        <div class="upload-file-status">状态</div>
        <!--<div class="upload-file-operate">操作</div>--> 
      </div>
      <div class="dialog-tips has-error">
        <div id="dialog_body_text" class="dialog-body-text">有0个文件上传成功</div>
        <em class="dzz dzz-close dialog-close"></em> </div>
      <div class="dialog-uploader-list">
        <ul class="dialog-filelist-ul" id="uploading_file_list">
        </ul>
      </div>
      <div class="progress-in"></div>
    </div>
  </div>
</div>
<script type="text/javascript" src="static/tagsinput/jquery.tagsinput.js" ></script>
<link rel="stylesheet" href="static/tagsinput/jquery.tagsinput.css">
<script type="text/javascript">
    /*jstree 左侧个人、机构及群组*/


$(document).ready(function(e) {
    _explorer.jstree=$('#position').jstree({
        "core": {
            "multiple": true,
            "check_callback": true,
            "themes": {
                "responsive": false
            },
            'data': function (node, cb) {
                var self = this;
                $.getJSON(MOD_URL+'&op=grouptree&do=get_children', {'id': node.id}, function (json) {
                    cb.call(this, json);
                });
            }
        },
        "types": {
            "#": {
                "max_children": -1,
                "max_depth": -1,
                "valid_children": -1
            },
            "organization": {//部门
                "icon": "dzz dzz-account-box",
                "valid_children": ['depart','folder']
            },
 "department": {
                "icon": "dzz/system/images/department.png",
                "valid_children": ['depart','folder']
            },
 "group": {//群组
                 "li_attr":'aaa',
                "icon": "dzz dzz-group",
                "valid_children": ['folder']
            },
"home": {//我的网盘
                "icon": "dzz dzz-mydisk",
                "valid_children": ['folder']
            },
            "folder": {//群组
                "icon": "dzz dzz-folder",
                "valid_children": ['folder']
            },
        },
       /* "checkbox": {
            "keep_selected_style": false
        },
        "search": {
            "show_only_matches": false
            , "fuzzy": false
            , "ajax": {'url': 'index.php?mod=system&op=grouptree&do=search', 'dataType': 'json'}
        },*/
        "plugins": ['types', 'search','wholerow']
    });

    $('#position').off('select_node.jstree').on('select_node.jstree', function (e, data) {
        var inst = $('#position').jstree(true);
        var node = data.node;
        var hash = node.li_attr.hashs;
var ohash=window.location.hash.replace('#','');
if(ohash.replace(/&do=\w+/i,'')== hash){
}else{
location.hash=hash;
}
        inst.open_node(node);
        return false;
    });
});
   
    $('#position').off('open_node.jstree').on('open_node.jstree', function (e, data) {
 var node = data.node;
if(node.id=='group') jQuery(jQuery('#template_newGroupButton').html()).appendTo('#group');
});

    $("#position").off('ready.jstree').on('ready.jstree', function(e) {
         var inst = $("#position").jstree(true);
         var hash = location.hash;
         if(hash) {
            var hash = (hash.replace(/^#/,''));
             _explorer.jstree_select(hash);
        }else{
location.hash='#recent';
}
//增加添加群组按钮
jQuery(jQuery('#template_newGroupButton').html()).appendTo('#group');
     });
  

</script> 
  <div class="left-drager"></div>
  <!--中间内容-->
  <div id="middleconMenu" class="bs-main-container"></div>
  <!--右侧菜单-->
<div class="rightMenu" id="rightMenu">
<div class="nothing_message">
<div class="nothing_allimg">
<img src="dzz/explorer/img/noFilePage-FileChoice.png">
<p>选择文件或文件夹，即可查看其详细信息。</p>
</div>
</div>
</div>
</div>


<div id="contextmenu" style="display: none;"> 
  
<div id="right_ico">
    <div class="menu-item open" onclick="_filemanage.Open('{rid}');jQuery('#right_contextmenu').hide();">
        	<span class="menu-icon dzz dzz-open"></span>
        	<span class="menu-text">打开</span>
        </div>
        <div class="menu-item openwith">
        	<span class="menu-icon dzz dzz-export"></span>
            <span class="menu-text">打开方式</span>
            <span class="menu-rightarrow"></span>
    	<div class="menu" style="display: none;">
    	    	
    </div>
    </div>
        <span class="menu-sep"></span>
       <div class="menu-item download" onclick="_filemanage.downAttach('{rid}');jQuery('#right_contextmenu').hide();">
       		<span class="menu-icon dzz dzz-download"></span>
        	<span class="menu-text">下载</span>
        </div>
        <div class="menu-item downpackage" onclick="_filemanage.downpackage('{rid}');jQuery('#right_contextmenu').hide();">
        	<span class="menu-icon dzz dzz-download"></span>
        	<span class="menu-text">打包下载</span>
        </div>
        <div class="menu-item share" onclick="_filemanage.share('{rid}');jQuery('#right_contextmenu').hide();">
       		<span class="menu-icon dzz dzz-share"></span>
        	<span class="menu-text">分享</span>
        </div>
    <div class="menu-item collect" onclick="_filemanage.collect('{rid}');jQuery('#right_contextmenu').hide();">
        	<span class="menu-icon dzz dzz-star"></span>
        	<span class="menu-text">收藏</span>
        </div>
       
        <div class="menu-item property" onclick="_filemanage.property('{rid}');jQuery('#right_contextmenu').hide();">
        	<span class="menu-icon  dzz"></span>
        	<span class="menu-text">属性</span>
        </div> 
    <span class="menu-sep"></span>
    
    <div class="menu-item rename" onclick="_filemanage.rename('{rid}');jQuery('#right_contextmenu').hide();">
        	<span class="menu-icon dzz dzz-create"></span>
        	<span class="menu-text">重命名</span>
        </div>
    <div class="menu-item cut" onclick="_filemanage.cut('{rid}');jQuery('#right_contextmenu').hide();">
        	<span class="menu-icon dzz dzz-content-cut"></span>
        	<span class="menu-text">剪切</span>
        </div>
    <div class="menu-item copy" onclick="_filemanage.copy('{rid}');jQuery('#right_contextmenu').hide();">
        	<span class="menu-icon dzz dzz-copy"></span>
        	<span class="menu-text">复制</span>
        </div>
    
         <div class="menu-item paste" onclick="_filemanage.paste('{fid}');jQuery('#right_contextmenu').hide();">
        	<span class="menu-icon icon-paste"></span>
        	<span class="menu-text">粘贴</span>
    </div>
    
        
   
        <span class="menu-sep"></span>
        <div class="menu-item cancleshare" onclick="_filemanage.cancleshares('{rid}');jQuery('#right_contextmenu').hide();">
            <span class="menu-icon dzz dzz-delete"></span>
            <span class="menu-text">取消分享</span>
        </div>
        <div class="menu-item editshare" onclick="_filemanage.share('{rid}');jQuery('#right_contextmenu').hide();">
            <span class="menu-icon dzz dzz-create"></span>
            <span class="menu-text">编辑分享</span>
        </div>
        <div class="menu-item delete" onclick="_filemanage.delIco('{rid}');jQuery('#right_contextmenu').hide();">
        	<span class="menu-icon dzz dzz-delete"></span>
        	<span class="menu-text">删除</span>
        </div>
        <div class="menu-item recover" onclick="_filemanage.RecoverFile('{rid}');jQuery('#right_contextmenu').hide();">
            <span class="menu-icon dzz dzz-rotate"></span>
            <span class="menu-text">恢复</span>
        </div>
        <div class="menu-item finallydelete" onclick="_filemanage.finallyDelete('{rid}');jQuery('#right_contextmenu').hide();">
            <span class="menu-icon dzz dzz-delete"></span>
            <span class="menu-text">彻底删除</span>
        </div>
        
</div>

<div id="right_body">
     <div class="menu-item">
        <span class="menu-icon filee-icon"></span>
        <span class="menu-text">图标大小</span>
        <span class="menu-rightarrow"></span>
        <div class="menu" style="display: none;">
            <div class="menu-item" iconview="2" onclick="_filemanage.Arrange(this,'{filemanageid}','2');">
                <span view="2" class="menu-icon dzz dzz-check-box-outline-blank menu-icon-iconview"></span>
                <span class="menu-text">中等图标</span>
            </div>
            <div class="menu-item" iconview="4" onclick="_filemanage.Arrange(this,'{filemanageid}','4')">
                <span view="4" class="menu-icon dzz dzz-check-box-outline-blank menu-icon-iconview"></span>
                <span class="menu-text">详细列表</span>
            </div>		    	
        </div>
     </div>
    
     <div class="menu-item sort">
        <span class="menu-icon filee-icon"></span>
        <span class="menu-text">排序</span>
        <span class="menu-rightarrow"></span>
        <div class="menu" style="display: none;">
            <div class="menu-item disp0" onclick="_filemanage.Disp(this,'{filemanageid}','0')">
                <span disp="0" class="menu-icon dzz dzz-check-box-outline-blank menu-icon-disp menu_icon_disp_0"></span>
                <span class="menu-text">名称 <span class="caret"></span></span>
                
            </div>
            <div class="menu-item disp1" onclick="_filemanage.Disp(this,'{filemanageid}','1')">
                <span disp="1" class="menu-icon dzz dzz-check-box-outline-blank menu-icon-disp menu_icon_disp_1"></span>
                <span class="menu-text">大小 <span class="caret"></span></span>
            </div>
            <div class="menu-item disp2" onclick="_filemanage.Disp(this,'{filemanageid}','2')">
                <span disp="2" class="menu-icon dzz dzz-check-box-outline-blank menu-icon-disp menu_icon_disp_2"></span>
                <span class="menu-text">类型 <span class="caret"></span></span>
            </div>
            <div class="menu-item disp3" onclick="_filemanage.Disp(this,'{filemanageid}','3')">
                <span disp="3" class="menu-icon dzz dzz-check-box-outline-blank menu-icon-disp menu_icon_disp_3"></span>
                <span class="menu-text">修改时间 <span class="caret"></span></span>
            </div>
       </div>
    </div>
     <span class="menu-sep"></span>
     <div class="menu-item paste" onclick="_filemanage.paste('{fid}');jQuery('#right_contextmenu').hide();">
        <span class="menu-icon icon-paste"></span>
        <span class="menu-text">粘贴</span>
    </div>
    
    <div class="menu-item create">
        <span class="menu-icon dzz dzz-upload"></span>
        <span class="menu-text">新建/上传</span>
        <span class="menu-rightarrow"></span>
        <div class="menu" style="display: none;">
            <div class="menu-item newfolder" onclick="_filemanage.NewIco('newFolder','{fid}');jQuery('#right_contextmenu').hide();">
                <span class="menu-icon dzz dzz-folder"></span>
                <span class="menu-text">新建文件夹</span>
             </div>
             <span class="menu-sep"></span>
              <div class="menu-item upload" style="overflow:hidden" onClick="jQuery('#right_contextmenu').css('z-index',-99999999);return true;">
                <span class="menu-icon dzz dzz-upload"></span>
                <span class="menu-text">上传文件</span>
             </div>
             <div class="menu-item uploadfolder" style="overflow:hidden" onClick="jQuery('#right_contextmenu').css('z-index',-99999999);return true;">
                <span class="menu-icon dzz dzz-folder"></span>
                <span class="menu-text">上传文件夹</span>
             </div>
             <span class="menu-sep"></span>
             <div class="menu-item newlink" onclick="_filemanage.NewIco('newLink','{fid}');jQuery('#right_contextmenu').hide();">
                <span class="menu-icon dzz dzz-language"></span>
                <span class="menu-text">新建网址</span>
              </div>
              <!--<div class="menu-item newdzzdoc" onclick="_filemanage.NewIco('newDzzDoc','{fid}');jQuery('#right_contextmenu').hide();">
                <span class="menu-icon dzz dzz-description"></span>
                <span class="menu-text">Dzz文档</span>
               </div>-->
               <div class="menu-item newtext" onclick="_filemanage.NewIco('newTxt','{fid}');jQuery('#right_contextmenu').hide();">
                    <span class="menu-icon dzz dzz-file"></span>
                    <span class="menu-text">文本文档</span>
                </div>
                <span class="menu-sep"></span>
                <div class="menu-item newdoc" onclick="_filemanage.NewIco('newDoc','{fid}');jQuery('#right_contextmenu').hide();">
                    <span class="menu-icon dzz dzz-file-text filee-icon filee-file-text"></span>
                    <span class="menu-text">Word 文档</span>
                </div> 
                <div class="menu-item newexcel" onclick="_filemanage.NewIco('newExcel','{fid}');jQuery('#right_contextmenu').hide();">
                    <span class="menu-icon dzz dzz-file-excel filee-icon filee-file-excel"></span>
                    <span class="menu-text">Excel 工作表</span>
                </div>
                <div class="menu-item newpowerpoint" onclick="_filemanage.NewIco('newPowerPoint','{fid}');jQuery('#right_contextmenu').hide();">
                    <span class="menu-icon dzz dzz-file-ppt filee-icon filee-file-ppt"></span>
                    <span class="menu-text">PPT 演示文稿</span>
                </div>
         </div>
    </div>
     <span class="menu-sep"></span>
    <div class="menu-item recoverall" onclick="_filemanage.recoverAll();jQuery('#right_contextmenu').hide();">
        <span class="menu-icon dzz dzz-rotate"></span>
        <span class="menu-text">恢复所有文件</span>
    </div>
    <div class="menu-item deleteall" onclick="_filemanage.deleteAll();jQuery('#right_contextmenu').hide();">
        <span class="menu-icon dzz dzz-delete"></span>
        <span class="menu-text">清空回收站</span>
    </div>
     <div class="menu-item property" onclick="window.location.reload();">
<span class="menu-icon dzz dzz-autorenew"></span>
<span class="menu-text">刷新</span>
</div> 
    <div class="menu-item property" onClick="_filemanage.property('{fid}',1);jQuery('#right_contextmenu').hide();">
        <span class="menu-icon dzz"></span>
        <span class="menu-text">属性</span>
     </div> 
    
</div> 
</div>
<div id="_blank" unselectable="on" onselectstart="return event.srcElement.type== 'text';" style="background:url(&quot;dzz/images/b.gif&quot;); z-index: 10000; width: 100%; height: 100%; margin: 0px; padding: 0px; right: 0px; bottom: 0px; position: absolute; top: 0px; left: 0px; display: none;"></div>
<iframe id="hideframe" name="hideframe" src="about:blank" frameborder="0" marginheight="0" marginwidth="0" width="0" height="0" allowtransparency="true" style="display:none;z-index:-99999"></iframe>
<script type="text/javascript">
//语言兼容

jQuery('.left-drager').leftDrager_layout(function(){
try{_filemanage.SetMoreButton();}catch(e){}
},{'cookieid':'explorer_index'});
var centerrightwidth = 0;
    var getWidthLable = 0;
    var newgroupgid = '';
jQuery(document).ready(function(e) {
        _explorer.getConfig(MOD_URL+'&op=json');
new PerfectScrollbar('.bs-left-container');
    });
    function adduser_group(ids,data){
        var formdata={};
        formdata.type=0;
        formdata.formhash='<?php echo FORMHASH;?>';
        formdata.selectsubmit=true;
        formdata.uids=ids.join(',');
        var url = MOD_URL + '&op=group&do=group_ajax&operation=addgroupuser&gid='+newgroupgid;
        $.post(url, formdata, function (data) {
            if(data['success']){
                hideWindow('adduser');
                showWindow('select_perm', _explorer.appUrl + '&op=ajax&operation=selectperm&fid='+data['fid']+'&gid='+newgroupgid+'&new=true', 'get', 0);
            }else{
                hideWindow('adduser');
                showDialog('操作失败');
            }

        },'json')
    }
</script> 
<script type="text/javascript" src="<?php echo MOD_PATH;?>/js/explorer.js" ></script>
<script type="text/javascript" src="<?php echo MOD_PATH;?>/js/_perm.js" ></script>
<script type="text/javascript" src="./data/template/dzz_explorer_index_filemanage_zh-cn.js" ></script><script type="text/javascript" src="<?php echo MOD_PATH;?>/js/filemanage.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="./data/template/dzz_explorer_index_contextmenu_zh-cn.js" ></script><script type="text/javascript" src="<?php echo MOD_PATH;?>/js/contextmenu.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="./data/template/dzz_explorer_index__select_zh-cn.js" ></script><script type="text/javascript" src="<?php echo MOD_PATH;?>/js/_select.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="<?php echo MOD_PATH;?>/js/_hotkey.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/js/input_field.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/js/imgReady.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/js/smilies.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/js/datepicker/jquery.ui.core.min.js" ></script>
<script type="text/javascript" src="static/js/datepicker/jquery.ui.datepicker.min.js" ></script>
<script type="text/javascript" src="static/js/datepicker/jquery.datepicker-zh-CN.js" ></script>
<script type="text/javascript" src="static/js/jstree.min.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="./data/template/dzz_explorer_index_jquery_dzzthumb_zh-cn.js" ></script><script type="text/javascript" src="static/dzzthumb/jquery.dzzthumb.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/tagsinput/jquery.tagsinput.js?<?php echo VERHASH;?>" ></script>
<!-- The basic File Upload plugin --> 
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included --> 
<script type="text/javascript" src="static/jquery_file_upload/jquery.ui.widget.js?<?php echo VERHASH;?>" ></script> 
<script type="text/javascript" src="static/jquery_file_upload/jquery.iframe-transport.js?<?php echo VERHASH;?>" ></script> 
<!-- The basic File Upload plugin --> 
<script type="text/javascript" src="static/jquery_file_upload/jquery.fileupload.js?<?php echo VERHASH;?>" ></script> 
<script type="text/javascript" src="static/jquery_file_upload/jquery.fileupload-process.js?<?php echo VERHASH;?>" ></script> 
<script type="text/javascript" src="./data/template/dzz_explorer_index_jquery_fileupload-validate_zh-cn.js" ></script><script type="text/javascript" src="static/jquery_file_upload/jquery.fileupload-validate.js?<?php echo VERHASH;?>" ></script> 
<script type="text/javascript" src="static/perfect-scrollbar/js/perfect-scrollbar.min.js?<?php echo VERHASH;?>" ></script> 
<script type="text/javascript" src="./data/template/dzz_explorer_index_uplodfile_lang_zh-cn.js" ></script><script type="text/javascript" src="<?php echo MOD_PATH;?>/js/uplodfile.lang.js?<?php echo VERHASH;?>" ></script>
<!-- The basic File Upload plugin --> 
<script type="text/javascript" src="static/bootstrap/js/bootstrap.min.js" ></script> <?php updatesession();?><?php if(debuginfo()) { ?>
<script type="text/javascript">
try{
if(console && console.log){
console.log('Processed in <?php echo $_G['debuginfo']['time'];?> second(s), <?php echo $_G['debuginfo']['queries'];?> queries <?php if($_G['gzipcompress']) { ?>, Gzip On<?php } if(C::memory()->type) { ?>, <?php echo ucwords(C::memory()->type); ?> On<?php } ?>.');
}
}catch(e){}
</script>
<?php } ?>	
<?php if(!$_G['setting']['bbclosed']) { if(!isset($_G['cookie']['sendmail'])) { ?>
<script type="text/javascript" src="misc.php?mod=sendmail&rand=<?php echo $_G['timestamp'];?>" ></script>
<?php } ?>
    <script type="text/javascript" src="misc.php?mod=sendwx&rand=<?php echo $_G['timestamp'];?>" ></script> 
<?php } if($_G['uid'] && $_G['adminid'] == 1) { if(!isset($_G['cookie']['checkupgrade'])) { ?>
<script type="text/javascript">jQuery.getScript('misc.php?mod=upgrade&action=checkupgrade&rand=<?php echo $_G['timestamp'];?>');</script>
<?php } if(!isset($_G['cookie']['checkappupgrade'])) { ?>
<script type="text/javascript">jQuery.getScript('misc.php?mod=upgrade&action=checkappupgrade&rand=<?php echo $_G['timestamp'];?>');</script>
<?php } if(!isset($_G['cookie']['upgradenotice'] )) { ?>
<script type="text/javascript">
jQuery(document).ready(function(){
try{jQuery('#systemNotice').load('misc.php?mod=upgrade&action=upgradenotice');}catch(e){};	
});
</script>
<div id="systemNotice" class="systemNotice" style="position: fixed;right:10px;bottom:10px;max-width:50%;box-shadow:0px 5px 10px RGBA(0,0,0,0.3);z-index:999999"></div>
<?php } } if($_G['setting']['statcode']) { ?>
<?php echo $_G['setting']['statcode'];?>
<?php } ?>	
</body>
</html>
