<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:7:{s:95:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./dzz/explorer/template/mydocument_content.htm";i:1595156079;s:101:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./dzz/explorer/template/template_file_middleicon.htm";i:1595156079;s:101:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./dzz/explorer/template/template_file_detaillist.htm";i:1595156079;s:101:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./dzz/explorer/template/template_file_toolButton.htm";i:1595156079;s:101:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./dzz/explorer/template/template_file_navtopfile.htm";i:1595156079;s:98:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./dzz/explorer/template/noFilePage_mydocument.htm";i:1595156079;s:0:"";b:0;}*/?>
<div class="middlecenter scroll-100 scroll-srcollbars" id="selectBoardPosition">

    <div class="middlecenter-body">

<!--地址栏开始-->
<div class="middle-groupname middle-groupshink middlecenter-header">
<div class="topNav">
<div class="topNav-item topNav-left">
<div class="address-wrapper">
<div class="goback"> <a href="javascript:history.back();" ><span class="dzz dzz-nav-back "></span><span>返回</span><span class="dzz dzz-vline dzz-address-vline" ></span></a> </div>
<div class="address-container">
<div class="address-left-arrow">《</div>
<div class="address-right-arrow">》</div>
<div class="address"><?php if(is_array($folderpatharr)) foreach($folderpatharr as $v) { ?><li>
<a href="javascript:;" class="routes"
   data-type="group-gid_<?php echo $gid;?>"><?php echo $v;?></a>
<span class="dzz dzz-chevron-right dzz-address-chevron"></span>
</li>
<?php } ?>
</div>
<input type="text" class="form-control bordeInput referer_path" name="referer_path"
   value="<?php echo $folderpathstr;?>" style="display: none;"/>
</div>
</div>
</div>
</div>
<input type="hidden" value="<?php echo $fid;?>" id="fidinput"/>
</div>
<!--地址栏结束-->


<!--文件列表开始 -->
        <div id="filemanage-f-<?php echo $fid;?>" class="icosContainer">

</div>
</div>
</div>
   
<!--头部信息框-->
<div class="navtopheader">
</div>

<div id="template_middleicon" style="display:none"><div class="fileMenu middleicon  window">
    <div class="square-fileList js-file-item-tpl clearfix">
      <div id="Icoblock_middleicon_{rid}" class="Icoblock middleicon"  rid="{rid}" flag="{flag}">
          <table class="toggleGlow" cellpadding="0" cellspacing="0" width="100%" height="100%" style="">
            <tbody>
              <tr>
                <td align="center" valign="middle" style="overflow:hidden;" class="" height="142px">
                	<div class="icoimgContainer icoimgContainer_{type}">
                        <table width="100%" height="100%" cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center" valign="middle"><img class="Icoblock_icon radius" tsrc="{img}"  title="{name}" onload="_explorer.image_resize(this);" onerror="_explorer.icoimgError(this)" error="dzz/images/default/icodefault.png" data-start="image" data-original="index.php?mod=io&amp;op=thumbnail&amp;original=1&amp;path={dpath}" data-download="index.php?mod=io&amp;op=download&amp;path={dpath}" data-end="image" /></td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="icoimgCover_up"></div>
                        <div class="icoimgtips"></div>
                        <div class="icoimgCover_down"></div>
                  	</div>
               	</td>
              </tr>
              <tr class="tr_item_name">
                <td align="center" valign="middle">
                   <div class="IcoText_div">
                        <table cellpadding="0" cellspacing="0" width="100%" height="100%">
                          <tbody>
                            <tr>
                              <td valign="middle" align="center" class="td_ico_item_name"><a id="file_text_{rid}" class="ico_item ico_item_name IcoText_folder">{name}</a></td>
                            </tr>
                          </tbody>
                        </table>
                  </div>
                 </td>
              </tr>
            </tbody>
          </table>
          <div class="icoblank_tip icoblank_rightbottom" ></div>
          <div class="backgound_radius"></div>
        </div>
    </div>
</div>

</div>
<div id="template_detaillist"  style="display:none">
<div class="fileMenu detaillist filemanage">
  <div class="filemanage-detail-header">
        <table class="table " width="100%" border="0" style="table-layout:fixed;margin:0">
          <thead class="detail_header_tr">
            <tr>
              <th disp="0" class=" detail_header detail_header_0" width="50%">
              	<div class="detail_header_td_div"><span class="detail_header_title">文件名</span>
                  <a class="detail_header_asc detail_header_asc_{asc_0}" style="display:{show_0};">
                  	<span class="dzz dzz-expand-less"></span>
                  	<span class="dzz dzz-expand-more"></span>
                  </a>
                  <div disp="0" class="detail_header_drag"></div>
                </div>
              </th>
              <th disp="1" class=" detail_header detail_header_1 " width="15%">
              	<div class="detail_header_td_div"><span class="detail_header_title">大小</span>
                <a class="detail_header_asc detail_header_asc_{asc_1}" style="display:{show_1};">
                	<span class="dzz dzz-expand-less"></span>
                	<span class="dzz dzz-expand-more"></span>
                </a>
                  <div disp="1" class="detail_header_drag"></div>
                </div>
              </th>
              <th disp="2" class="detail_header detail_header_2" width="15%">
              <div class="detail_header_td_div"><span class="detail_header_title">类型</span>
              	  <a class="detail_header_asc detail_header_asc_{asc_2}" style="display:{show_2};">
              	  	<span class="dzz dzz-expand-less"></span>
              	  	<span class="dzz dzz-expand-more"></span>
              	  </a>
                  <div disp="2" class="detail_header_drag" style="float:right"></div>
                </div>
              </th>
              <th disp="3" class=" detail_header detail_header_3 " width="20%"><div class="detail_header_td_div"><span class="detail_header_title">修改日期</span><a class="detail_header_asc detail_header_asc_{asc_3}" style="display:{show_3};">
              	<span class="dzz dzz-expand-less"></span>
              	<span class="dzz dzz-expand-more"></span>
              </a></div></th>
            </tr>
          </thead>
        </table>
      </div>
  <div class="paddingright-con  js-list-body">
          <table class="table " width="100%" border="0" style="table-layout:fixed;margin:0">
            <tbody class="js-file-item-tpl">
              <tr id="Icoblock_detail_{rid}" class="detail_tr Icoblock" rid="{rid}">
                <td class="detail_item_td " valign="middle" width="50%" style="overflow:hidden;position:relative">
                	<div class="detail_item_td_div detail_item_td_name toggleGlow" rid="{rid}">
                    	<a href="javascript:;" style="float: left;"><img class="detail_item_name_icon" tsrc="{img}" title="{name}" error="dzz/images/default/icodefault.png" onerror="jQuery(this).attr('src',jQuery(this).attr('error'))" data-start="image" data-original="index.php?mod=io&amp;op=thumbnail&amp;original=1&amp;path={dpath}" data-download="index.php?mod=io&amp;op=download&amp;path={dpath}" data-end="image" /></a>
                        <a id="file_text_{rid}" class="detail_text detail_item_name_text IcoText_folder">{name}</a>
                        {collectstatus}
                     </div>
                     <div class="hoverTools">
                     	<button type="button" class="btn download" onclick="_filemanage.downAttach('{rid}')"><i class="dzz dzz-download" title="下载"></i></button>
                        <button type="button" class="btn share" onclick="_filemanage.share('{rid}','{rids}')"><i
            class="dzz dzz-share" title="分享"></i> </button>
                     </div>
                </td>
                <td class="detail_item_td detail_item_td_size" valign="middle" width="15%" style="overflow:hidden">
                	<span title="{fsize}">{fsize}</span>
                </td>
                <td class="detail_item_td detail_item_td_type" valign="middle" width="15%" style="overflow:hidden">
                    <span title="{ftype}">{ftype}</span>
                </td>
                <td class="detail_item_td detail_item_td_type" valign="middle" width="20%" style="overflow:hidden">
                	<span title="{fdateline}">{fdateline}</span>
                </td>
              </tr>
            </tbody>
          </table>
       
  </div>
</div>



        </div>
<div id="template_toolButton" style="display:none"><div class="yunfile-btnMenu">
    <a href="javascript:;" type="button" class="btn open single"  data-placement="bottom" data-auto-adapt="true"  onclick="_filemanage.Open('{rid}')" ><i
            class="dzz dzz-open" data-toggle="tooltip" data-placement="bottom" title="打开" data-original-title="打开"></i> </a>
    <!--<button type="button" class="btn open single" onclick="_filemanage.Open('{rid}')" ><i
    class="dzz dzz-open" data-toggle="tooltip" data-placement="bottom" title="打开"></i> </button>-->

    <a href="javascript:;" type="button" class="btn download single" onclick="_filemanage.downAttach('{rid}')" ><i
            class="dzz dzz-download" data-toggle="tooltip" data-placement="bottom" title="下载"></i></a>
    <a href="javascript:;" type="button" class="btn downpackage multi" onclick="_filemanage.downpackage('{rid}')" ><i
            class="dzz dzz-download" data-toggle="tooltip" data-placement="bottom" title="打包下载"></i>
    </a>
     <a href="javascript:;" type="button" class="btn rename single" onclick="_filemanage.rename('{rid}')" ><i
            class="dzz dzz-create" data-toggle="tooltip" data-placement="bottom" title="重命名"></i></a>
    <a href="javascript:;" type="button" class="btn delete" onclick="_filemanage.delIco('{rid}')" ><i
            class="dzz dzz-delete" data-toggle="tooltip" data-placement="bottom" title="删除"></i></a>
    <a href="javascript:;" type="button" class="btn copy" onclick="_filemanage.copy('{rid}')" ><i
            class="dzz dzz-copy"  data-toggle="tooltip" data-placement="bottom" title="复制"></i></a>
    <a href="javascript:;" type="button" class="btn cut" onclick="_filemanage.cut('{rid}')" ><i
            class="dzz dzz-content-cut" data-toggle="tooltip" data-placement="bottom" title="剪切"></i></a>
    <a href="javascript:;" type="button" class="btn paste" onclick="_filemanage.paste('{fid}')" ><i class="glyphicon glyphicon-paste"    data-toggle="tooltip" data-placement="bottom" title="粘贴"></i></a>
    <a href="javascript:;" type="button" class="btn share" onclick="_filemanage.share('{rid}')" ><i
            class="dzz dzz-share" data-toggle="tooltip" data-placement="bottom"  title="分享"></i> </a>
    
</div>
<div class="yunfile-moreMenu">
    <div class="dropdown">
        <a href="javascript:;" type="button" class="btn dropdown-toggle more" data-toggle="dropdown"><i
                class="dzz dzz-more" data-toggle="tooltip" data-placement="bottom"  title="更多"></i></a>
        <ul class="dropdown-menu">
            <li class="open single"><a href="javascript:;" onclick="_filemanage.Open('{rid}')"><i
                    class="dzz dzz-open"></i> 打开</a></li>
            <li class="dropdown-submenu openwith single"><a href="javascript:;"><i
                    class="dzz dzz-export"></i> 打开方式</a>
                <ul class="dropdown-menu"></ul>
            </li>
            <li class="rename single"><a href="javascript:;" onclick="_filemanage.rename('{rid}')"><i
                    class="dzz dzz-create"></i> 重命名</a></li>
            <li class="copy"><a href="javascript:;" onclick="_filemanage.copy('{rid}')"><i
                    class="dzz dzz-copy"></i> 复制</a></li>
            <li class="cut"><a href="javascript:;" onclick="_filemanage.cut('{rid}')"><i
                    class="dzz dzz-content-cut"></i> 剪切</a></li>
            <li class="paste"><a href="javascript:;" onclick="_filemanage.paste('{fid}')"><i
                    class="dzz dzz dzz-content-paste"></i> 粘贴</a></li>
            <li class="download single"><a href="javascript:;" onclick="_filemanage.downAttach('{rid}')"><i
                    class="dzz dzz-download"></i> 下载</a></li>
            <li class="downpackage multi"><a href="javascript:;" onclick="_filemanage.downpackage('{rid}')"><i
                    class="dzz dzz-archive"></i> 打包下载</a></li>

            <li class="delete"><a href="javascript:;" onclick="_filemanage.delIco('{rid}')"><i
                    class="dzz dzz-delete"></i> 删除</a></li>
<li class="paste"><a href="javascript:;" onclick="_filemanage.paste('{rid}')"><i class="glyphicon glyphicon-paste" ></i>粘贴</a></li>
            <li class="share"><a href="javascript:;" onclick="_filemanage.share('{rid}')"><i
                    class="dzz dzz-share"></i> 分享</a></li>
            <li class="collect"><a href="javascript:;" onclick="_filemanage.collect('{rid}')"><i
                    class="dzz dzz-star"></i> 收藏</a></li>
            <li class="property"><a href="javascript:;" onclick="_filemanage.property('{rid}')"><i
                    class=""></i> 属性</a></li>
            
        </ul>
    </div>
</div>
<script type="text/javascript" reload="1">
jQuery(function () {
  jQuery('[data-toggle="tooltip"]').tooltip();
});
</script></div>
<div id="template_file" style="display:none"><div class="navtoperate">
<div class="select-toperate">
<div class="select-toperate select-toperate-left selectall-box">
<span class="dzz dzz-close dzz-backing-out"></span>
        <div class="select-info"></div>
    </div>
    <div class="select-toperate select-toperate-center  toolButtons">
<div class="shareMenu">
</div>
<!--回收站开始-->
<div class="recycle-option-icon" id="seldeldo" style="display: none;">
                <button type="button" class="btn" onclick="_filemanage.RecoverFile()">
                	<span class="dzz dzz-rotate" data-toggle="tooltip" data-placement="bottom" data-original-title="恢复文件"></span>
                </button>
                <button type="button" class="btn" onclick="_filemanage.finallyDelete()">
                	<span class="dzz dzz-delete" data-toggle="tooltip" data-placement="bottom" data-original-title="彻底删除"></span>
                </button>
</div>
<!--回收站结束-->
<!--分享开始-->
<div class="share-option-icon" style="display: none;">
            <button type="button" class="btn" onclick="_filemanage.cancleshares()">
            	<span class="dzz dzz-delete" data-toggle="tooltip" data-placement="bottom" data-original-title="取消分享"></span>
            </button>
            <button type="button" class="btn btnedit" onclick="_filemanage.share()">
                <span class="dzz dzz-create" data-toggle="tooltip" data-placement="bottom" data-original-title="编辑分享"></span>
            </button>
</div>		
<!--分享结束-->
<!--群组管理开始-->
<div class="groupmanage-option-icon" style="display: none;">
<div class="groupadmin-toggle managelist">
                <button type="button" class="btn btn-primary judgemanage closegroup hide"
                        onclick="close_group()">关闭群组
                </button>
                <button type="button" class="btn btn-primary judgemanage opengroup hide" onclick="open_group()">
                    开启群组
                </button>
                <button type="button" class="btn btn-primary judgemanage opendiron hide" onclick="open_diron()">
                    开启共享目录
                </button>
                <button type="button" class="btn btn-primary judgemanage closediron hide"
                        onclick="close_diron()">关闭共享目录
                </button>
                <button type="button" class="btn btn-danger" onclick="delete_group()">删除群组</button>
            </div>
</div>
<!--群组管理结束-->
</div>
<div class="select-toperate select-toperate-right">
    	<ul class="sizeMenu">
        <li><a class="icons-thumbnail" href="javascript:;" onclick="_filemanage.Arrange(this,'')" iconview="4"><i class="dzz dzz-view-list" data-toggle="tooltip" data-placement="bottom" title="iconview"></i></a></li>
        <li><a href="javascript:;" class="toggRight"><i class="dzz dzz-info" data-toggle="tooltip" data-placement="bottom"></i></a></li>
       </ul>
</div>
</div>
</div>
<script type="text/javascript" reload="1">
jQuery(function () {
  jQuery('[data-toggle="tooltip"]').tooltip();
});
</script>       </div>
<div id="template_nofile_notice" style="display:none"><div class="emptyPage" id="noticeinfo">
    	<img src="<?php echo MOD_PATH;?>/img/noFilePage-normal.png">
    	<p class="emptyPage-text">目前没有文件或文件夹<?php if(!isset($newfileperm) || $newfileperm) { ?><br>请点击右上角的"新建/上传"按钮添加<?php } ?></p>
</div>

</div>
<div id="template_group_notice" style="display:none"></div>

<script type="text/javascript">
    jQuery.getScript('<?php echo MOD_PATH;?>/js/uplodfile.js?<?php echo VERHASH;?>');
    jQuery(document).ready(function(e) {
        var hash=location.hash;
        //var fid=_explorer.getUrlParam(hash,'fid');
        var  fid = $('#fidinput').val();
_filemanage.fid=fid;
_filemanage.subfix = 'f';
_filemanage.winid = 'f_'+fid;

//如果有群组提示信息
        var contenterrormsg = '<?php echo $contenterrormsg;?>';
    if(contenterrormsg){
        	var noticeinfo = '<div class="emptyPage">' +
'<img src="'+MOD_PATH+'/img/noFilePage-groupFileForbidden.png"> ' +
'<p class="emptyPage-text">'+contenterrormsg+'</p> ' +
'</div>';
            jQuery('#filemanage-f-'+fid).html(noticeinfo);
            if('<?php echo $group['available'];?>' == 0 || '<?php echo $group['diron'];?>' == 0){
                jQuery('.new-buildMenu').hide();
}
_filemanage && _filemanage.setInfoPanel();
return false;
}
        _filemanage.getData(_explorer.appUrl+'&op=explorerfile&do=filelist&sid=f-'+fid);
    });

</script>