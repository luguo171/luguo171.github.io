<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:3:{s:94:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./dzz/explorer/template/right_folder_menu.htm";i:1595156079;s:94:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./dzz/explorer/template/fileright_dynamic.htm";i:1595156077;s:98:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./dzz/explorer/template/template_dynamic_list.htm";i:1595156079;}*/?>
<style>
.popbox.popbox-bottom{
margin-top:0px ;	
}
</style>
<div class="rightBorder" id="rightinfo_content">
<div id="more_dynameic" style="display: none;">
<!--template template_more_dynameic-->
</div>

<div class="briefMenu clearfix">
<?php if($fileinfo['isgroup'] && $fileinfo['gid']) { ?>
<a href="javascript:;" class="right-topbackground"><?php echo avatar_group($gid);?></a>
<?php } elseif($fileinfo['flag'] == 'home') { ?>
<i class="dzz dzz-mydisk  right-topicon"></i>
<?php } elseif($fileinfo['ismulti']) { ?>
<i class="dzz dzz-copy right-topicon"></i>
<?php } else { ?>
<span class="dzz dzz-folder right-topimg"></span>
<?php } ?>
    <p class="right-imgname"><span><?php if($fileinfo['name']) { ?><?php echo $fileinfo['name'];?><?php } elseif($fileinfo['fname']) { ?><?php echo $fileinfo['fname'];?><?php } else { } ?></span>
    </p>
    <a href="javascript:;" class="toggRight toggright-icon">
 	 <span class="dzz dzz-close"></span>
 	</a>
</div>
<div class="right-messagetable  scroll-y" data-subtractor="<?php echo ($fid || $rid)?53:0?>">
<!--根文件进度条开始-->
<?php if(($fileinfo['isgroup'] || $fileinfo['pfid'] == 0) && !$fileinfo['ismulti']) { ?>
    <div class="right-progress">
<p>
已使用<?php echo formatsize($usesize);?>(<?php if($maxspace == 0) { ?>不限制<?php } elseif($maxspace < 0) { ?>0<?php } else { ?>共<?php echo formatsize($maxspace);?><?php } ?>)
</p>
    <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progress;?>%;">
  </div>
</div>
</div>
<?php } ?>
<!--根文件进度条结束-->
    <!--文件夹详情开始-->
    <div class="right_projectmain">
    <div class="information">
    	<div class="ensemble-left">
        <!--<p class="in-basicp">基本信息</p>-->
        	<p class="attribute-position">
 			<span class="attribute-width">类型</span>
 			<span class="detailed_contenter">
<?php echo $fileinfo['type'];?>
</span>
 		</p> 
<?php if($fileinfo['realpath']) { ?>
            <p class="in-position">
            	<span class="attribute-width">位置</span>
            	<span class="detailed_contenter"><?php echo $fileinfo['realpath'];?></span>
</p>
<?php } if($fileinfo['username']) { ?>
            <p class="attribute-position">
            	<span class="attribute-width">所有者</span>
            	<span class="detailed_contenter"><?php echo $fileinfo['username'];?></span>
            </p>
<?php } if($fileinfo['editdateline']) { ?>
            <p class="attribute-position">
            	<span class="attribute-width">上次修改时间</span>
            	<span class="detailed_contenter"><?php echo $fileinfo['editdateline'];?></span>
            </p>
<?php } if($fileinfo['opendateline']) { ?>
            <p class="attribute-position">
            	<span class="attribute-width">上次打开时间</span>
            	<span class="detailed_contenter"><?php echo $fileinfo['opendateline'];?></span>
            </p>
<?php } ?>
            <p class="in-position">
            	<span class="attribute-width">大小</span>
            	<span class="detailed_contenter"><?php echo $fileinfo['ffsize'];?></span></p>
<?php if($fileinfo['contain']) { ?>
            <p class="in-position">
            	<span class="attribute-width">包含</span>
            	<span class="detailed_contenter"><?php echo $fileinfo['contain'];?></span></p>
<?php } ?>
            <?php if($fileinfo['fdateline']) { ?>
            <p class="in-position">
            	<span class="attribute-width">创建时间</span>
            	<span class="detailed_contenter"><?php echo $fileinfo['fdateline'];?></span>
            </p>
<?php } ?>
       </div>
    </div>

<?php if($perm && $fileinfo['isdelete'] < 1) { ?>
<div class="file-poewr">
<div class="ensemble-left">
<div class="poewr-top clearfix">
<span class="contents-poewr">目录权限</span>
<?php if(isset($usergroupperm) && $usergroupperm > 0) { ?><a class="conpile-poewr" type="button" onclick="editgroupperm('<?php echo $fileinfo['gid'];?>','<?php echo $fileinfo['fid'];?>')"><span class="dzz dzz-create"></span></a><?php } ?>
</div>
<ul class="proper-show  proper-poewr"><?php if(is_array($perms)) foreach($perms as $k => $val) { ?><li <?php if($perm & $val['1']) { ?>style="display:block;padding:5px;"<?php } else { ?>style="display:none;"<?php } ?>><span  class="<?php echo $val['2'];?>" title="<?php echo $val['0'];?>"></span></li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>
    <!--成员开始-->
<?php if($fileinfo['isgroup']) { ?>
    <div class="right-numer">
    	<div class="right-paddingnumer">
    		<div class="right-numertop">
    			<p class="numer-title">成员</p>
<?php if($usergroupperm >= 1 && $org['type']) { ?>
    			<button type="button" class="groupbutton" onclick="select_group_user();return false;"><span class="dzz dzz-add-circle"></span></button>
    			<?php } ?>
</div>
    		<ul class="right-numerbottom clearfix" id="memberlist" data-gid="<?php echo $gid;?>"><?php if(is_array($members)) foreach($members as $v) { ?>    			<li class="right-numer-carousel" id="<?php echo $v['uid'];?>_delete" >
<a href="javascript:;" class="js-popboxs member_details_info" data-placement="bottom" data-trigger="focus" data-auto-adapt="true"
   data-toggle="popover" style="display: inline-block;width: 28px;" data-href="<?php echo MOD_URL;?>&op=group&do=right_popbox&gid=<?php echo $gid;?>&uid=<?php echo $v['uid'];?>"><?php echo avatar_block($v[uid],array($v[uid]=>$v[headerColor]));?><?php if($v['perm'] > 1  && $org['type'] == 1 ) { ?>
<span class="dzz-right-first creator"><img src="<?php echo MOD_PATH;?>/img/ic-creator.png"></span>
<?php } elseif($v['perm'] > 0) { ?>
<span class="dzz-right-first"><img src="<?php echo MOD_PATH;?>/img/ic-manager.png"></span>
<!--<span class="dzz-right-first"><img src="<?php echo MOD_PATH;?>/img/ic-systemManager.png"></span>-->
<?php } ?>
</a>					
    			</li>
<?php } ?>
    		</ul>
    	</div>
    </div>
<?php } ?>
    <!--成员结束-->
    <!--关于开始-->
<?php if($org) { ?>
    <div class="right-about clearfix">
    	<div class="right-about-conter  clearfix">
    		<div class="right-about-header clearfix">
    			<p class="right-about-title">关于</p>
<?php if($usergroupperm >= 1 && $org['type']) { ?>
    			<button type="button" class="groupbutton" onclick="showWindow('groupsetting','<?php echo MOD_URL;?>&op=group&do=group_ajax&operation=groupsetting&gid=<?php echo $gid;?>')">
    				<span class="dzz dzz-create"></span>
    			</button>
<?php } ?>
    		</div>
    		<div class="right-about-bottom clearfix">
    			<p>
    			<span class="right-about-name">标识</span>
<a href="javascript:;" class="right-about-name-icon"><?php echo avatar_group($gid);?></a>
    			</p>
    			<p>
    				<span class="right-about-name">名称</span>
    				<span><?php echo $org['orgname'];?></span>
    			</p>
    			<p>
    				<span class="right-about-name">状态</span>
    				<span class="right-about-name-switch">
    					<input type="checkbox" class="js-switch" readonly name="syatemon" data-switchery="true" data-name="manageon" <?php if($org['diron'] && $org['diron']) { ?> checked <?php } ?>>
    				</span>
    			</p>
    			<!--<p>
    				<span class="right-about-name">分享</span>
    				<span class="right-about-name-switch">
    					<input type="checkbox" class="js-switch" readonly name="diron" data-switchery="true" data-name="diron" &lt;!&ndash;<?php if($org['diron'] && $org['available']) { ?>&ndash;&gt;checked&lt;!&ndash;<?php } ?>&ndash;&gt;>
    				</span>
    			</p>-->
    		</div>
    		
    	</div>
    </div>
<?php } ?>
    <!--关于结束-->
    </div>
    <!--文件夹详情结束-->
    
    <!--文件夹动态开始-->
   <div id="filerightdynamic">
    <div class="dynconMenu" id="dynconMenu">
    <div class="just-now" id="just-now"></div>
    <div class="toadyTime">
        <?php if(!isset($tplmore)) { if($events) { $today=strtotime(dgmdate(TIMESTAMP,'Y-m-d'))?><?php $timearr=array();?><?php if(is_array($events)) foreach($events as $eventval) { $t=strtotime(dgmdate($eventval[dateline],'Y-m-d'));?><?php if($t==$today && !in_array($t,$timearr)) { ?>
<p class="toadytitle">今天</p><?php $timearr[]=$t;?><?php } elseif($t==$today-24*60*60 && !in_array($t,$timearr)) { ?>
<p class="toadytitle">昨天</p><?php $timearr[]=$t;?><?php } elseif($t==$today-24*60*60*2 && !in_array($t,$timearr)) { ?>
<p class="toadytitle">前天</p><?php $timearr[]=$t;?><?php } elseif($t<$today-24*60*60*2 && !in_array($t,$timearr)) { ?>
<p class="toadytitle"><?php echo dgmdate($t,'Y-m-d');?></p><?php $timearr[]=$t;?><?php } if($eventval['type'] == 0) { ?>
<div class="dynameic-comment">
    <div class="toadysmalltime"><span><?php echo dgmdate($eventval[dateline],'H:i');?></span></div>
    <div class="toadycon">
        <div class="toadycon-img"><?php echo
            avatar_block($eventval[uid],array($eventval[uid]=>$eventval[headerColor]));?>        </div>
        <p class="activity-content"><span class="activity-name"><?php echo $eventval['username'];?></span>
            <span><?php echo $eventval['details'];?></span></p>
    </div>
</div>
<?php } elseif($eventval['type'] == 1 ) { ?>
<div class="dynameic-comment">
    <div class="toadysmalltime"><span><?php echo dgmdate($eventval[dateline],'H:i');?></span></div>
    <div class="toadycon">
        <div class="toadycon-img"><?php echo
            avatar_block($eventval[uid],array($eventval[uid]=>$eventval[headerColor]));?>        </div>
        <p class="activity-content"><span class="activity-name"><?php echo $eventval['username'];?></span>
            <span><?php echo $eventval['details'];?></span>
            <span class="delete-comment dzz dzz-delete" data-commentid="<?php echo $eventval['id'];?>"></span></p>
    </div>
</div>
<?php } } if($next) { ?>
<a href="javascript:;"
   class="<?php if(!isset($tplmore)) { ?>btn_dynamic_more <?php } else { ?>btn_dynamic_more_less<?php } ?>btn-link btn-block <?php if(isset($tplmore) && $tplmore) { ?> hide <?php } ?>"
   onclick="load_dynamic(this,'<?php echo ($next-3)?>','<?php echo implode(',',$rids);?>','<?php echo $_GET['fid'];?>',0);">加载更多</a>
<?php } } } else { if($events) { $today=strtotime(dgmdate(TIMESTAMP,'Y-m-d'))?><?php $timearr=array();?><?php if(is_array($events)) foreach($events as $eventval) { $t=strtotime(dgmdate($eventval[dateline],'Y-m-d'));?><?php if($t==$today && !in_array($t,$timearr)) { ?>
<p class="toadytitle">今天</p><?php $timearr[]=$t;?><?php } elseif($t==$today-24*60*60 && !in_array($t,$timearr)) { ?>
<p class="toadytitle">昨天</p><?php $timearr[]=$t;?><?php } elseif($t==$today-24*60*60*2 && !in_array($t,$timearr)) { ?>
<p class="toadytitle">前天</p><?php $timearr[]=$t;?><?php } elseif($t<$today-24*60*60*2 && !in_array($t,$timearr)) { ?>
<p class="toadytitle"><?php echo dgmdate($t,'Y-m-d');?></p><?php $timearr[]=$t;?><?php } if($eventval['type'] == 0) { ?>
<div class="dynameic-comment">
    <div class="toadysmalltime"><span><?php echo dgmdate($eventval[dateline],'H:i');?></span></div>
    <div class="toadycon">
        <div class="toadycon-img"><?php echo
            avatar_block($eventval[uid],array($eventval[uid]=>$eventval[headerColor]));?>        </div>
        <p class="activity-content"><span class="activity-name"><?php echo $eventval['username'];?></span>
            <span><?php echo $eventval['details'];?></span></p>
    </div>
</div>
<?php } elseif($eventval['type'] == 1 ) { ?>
<div class="dynameic-comment">
    <div class="toadysmalltime"><span><?php echo dgmdate($eventval[dateline],'H:i');?></span></div>
    <div class="toadycon">
        <div class="toadycon-img"><?php echo
            avatar_block($eventval[uid],array($eventval[uid]=>$eventval[headerColor]));?>        </div>
        <p class="activity-content"><span class="activity-name"><?php echo $eventval['username'];?></span>
            <span><?php echo $eventval['details'];?></span>
            <span class="delete-comment dzz dzz-delete" data-commentid="<?php echo $eventval['id'];?>"></span></p>
    </div>
</div>
<?php } } if($next) { ?>
<a href="javascript:;" class="btn_dynamic_more_less btn-link btn-block <?php if(isset($tplmore) && $tplmore) { ?> hide <?php } ?>"
   onclick="load_dynamic(this,<?php echo $next;?>,'<?php echo implode(',',$rids);?>',<?php echo $pfid;?>,1);">加载更多</a>
<?php } } } ?>
<script type="text/javascript" src="static/atwho/js/jquery.atwho.js" ></script>
<script type="text/javascript" src="static/atwho/js/jquery.caret.js" ></script>
<script type="text/javascript">
    var gid = '<?php echo $gid;?>';
    var commentfid = '';
    var commentrid='';
    jQuery(document).on('click', '.btn_dynamic_more', function () {
        jQuery('.rightbasic').hide();
        jQuery('#more_dynameic').show();
    });

    function load_dynamic(obj, next, rid, fid, tplmore) {
        var queryObj = {'next': next};
        if (rid) {
            queryObj.rid = rid;
        } else {
            queryObj.rid = fid;
        }
        
        var adddynamisc = '';
        if (tplmore) adddynamisc = '&adddynamisc=1';
        jQuery.get(DZZSCRIPT + '?mod=<?php echo MOD_NAME;?>&op=dynamic&do=loadmoredynamic&gid=' + gid + adddynamisc, queryObj, function (html) {
            if (tplmore) {
                jQuery(obj).replaceWith(html);
            } else {
                jQuery('#rightinfo_content').replaceWith(html);
            }
            _explorer.Scroll();
            jQuery('#leave_message').off("input.commet propertychange.comment").on("input.comment propertychange.comment", function (e) {
                var el = jQuery(this);
                var msg = el.val();
                var disbutton = el.closest('.comment-area').find('button');
                if (msg.length <= 0) {
                    disbutton.addClass("disabled");
                    disbutton.css({'color': 'rgba(55,121,255,0.3)'});
                } else {
                    disbutton.removeClass("disabled");
                    disbutton.css({'color': 'rgba(55,121,255,1)'});
                }
            });
            jQuery('#leave_message').focus(function () {
                var el = jQuery(this);
                var msg = el.val();
                var disbutton = el.closest('.comment-area').find('button');
                if (msg.length <= 0) {
                    disbutton.addClass("disabled");
                    disbutton.css({'color': 'rgba(55,121,255,0.3)'});
                } else {
                    disbutton.removeClass("disabled");
                    disbutton.css({'color': 'rgba(55,121,255,1)'});
                }
            })

        });
    }
   jQuery(function(){
        if (gid > 0 && jQuery('#commentid').length > 0) {
            commentfid = jQuery('#commentid').find('input[name=fid]').val();
            commentrid = jQuery('#commentid').find('input[name=rid]').val();
            var cachequeryMentions = [], itemsMentions;
            var querystr = '';
            if(commentfid){
                querystr = '&fid='+commentfid;
            }else{
                querystr = '&rid='+commentrid;
            }
            jQuery('#leave_message').atwho({
                at: "@",
                data: '<?php echo DZZSCRIPT;?>?mod=explorer&op=group&do=group_ajax&operation=getAtData&gid=' + gid+querystr,
                callbacks: {
                    remote_filter: function (query, render_view) {
//                        console.log(query);
                        var thisVal = query,
                            self = jQuery(this);
                        if (!self.data('active') && thisVal.length >= 1) {
                            self.data('active', true);
                            itemsMentions = cachequeryMentions[thisVal]
                            if (typeof itemsMentions == "object") {
                                render_view(itemsMentions);
                            } else {
                                if (self.xhr) {
                                    self.xhr.abort();
                                }
                                self.xhr = jQuery.getJSON('<?php echo DZZSCRIPT;?>?mod=explorer&op=group&do=group_ajax&operation=getAtData&gid=' + gid+querystr,{
                                    term: thisVal
                                }, function (data) {
                                    cachequeryMentions[thisVal] = data
                                    render_view(data);
                                });
                            }
                            self.data('active', false);
                        }
                    }
                },
                tpl: "<li data-value='@[${name}:${id}]' title='${title}'>${avatar}&nbsp;${name}</li>",
                search_key: "searchkey",
                start_with_space: false,
                limit: 5,
                max_len: 20,
                display_timeout: 300
            });
        }

    })
/*    jQuery('#leave_message').on('keydown',function(){
       var obj = $(this);
        if(obj.val().indexOf('@') == 0)
        textarea.caret('pos',textarea.val().length);
        //textarea.focus().atwho('run');
        //return false;
    });*/
    jQuery(document).off('click.commentdelete').on('click.commentdelete','.delete-comment',function(){
        var obj = $(this);
        var commentid = obj.data('commentid');
        var msg = '<span class="delect_text_red">'+'删除后将不可恢复！'+'</span>';
        var title = '<span class="delect-title-normal">'+'确定要删除评论？'+'<span>';
        if(typeof commentid == 'undefined' || commentid < 0){
            showDialog("删除失败");
        }
        showDialog(msg,'confirm',title,function(){
            $.post('<?php echo MOD_URL;?>&op=dynamic&do=deletecomment',{'id':commentid},function(data){
                if(data['success']){
                    obj.parents('.dynameic-comment').html('');
                }else if(data['error']){
                    showDialog(data['error']);
                }
            },'json');
        })

    })
</script>
    </div>
</div>

<script type="text/javascript" reload="1">
    //滚动条滚动，头部加阴影
    $('.right-messagetable').scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.briefMenu').css({'box-shadow': '0px 0px 10px 0px rgba(0,0,0,0.15)'});
        } else {
            $('.briefMenu').css({'box-shadow': 'none'});
        }
    })


    jQuery(document).ready(function (e) {
        jcLoader().load({
            type: 'js',
            ids: 'js_textareaexplander',
            url: 'static/js/jquery.textareaexplander.js?<?php echo VERHASH;?>'
        }, function () {
            jQuery('#leave_message').TextAreaExpander(32, 300);
        });
        jcLoader().load({
            type: 'js',
            ids: 'js_smilies',
            url: 'static/js/smilies.js?<?php echo VERHASH;?>'
        }, function () {
            smilies_show('leave_message_sml_div', '<?php echo $_G['setting']['smcols'];?>', 'leave_message');
        });
        _explorer.Scroll();
        jQuery('#leave_message').off("input.commet propertychange.comment").on("input.comment propertychange.comment", function (e) {
            var el = jQuery(this);
            var msg = el.val();
            var disbutton = el.closest('.comment-area').find('button');
            if (msg.length <= 0) {
                disbutton.addClass("disabled");
                disbutton.css({'color': 'rgba(55,121,255,0.3)'});
            } else {
                disbutton.removeClass("disabled");
                disbutton.css({'color': 'rgba(55,121,255,1)'});
            }
        });
        jQuery('#leave_message').focus(function () {
            var el = jQuery(this);
            var msg = el.val();
            var disbutton = el.closest('.comment-area').find('button');
            if (msg.length <= 0) {
                disbutton.addClass("disabled");
                disbutton.css({'color': 'rgba(55,121,255,0.3)'});
            } else {
                disbutton.removeClass("disabled");
                disbutton.css({'color': 'rgba(55,121,255,1)'});
            }
        })

    });

    function comment_file(form) {

        if ($('#leave_message').val().length < 1) {
            $('#leave_message').focus();
            return false;
        }
        $.post(form.action, jQuery(form).serialize(), function (data) {
            if (data['success']) {
                if (data['return']['headerColor']) {
                    var usericon = ' <span  class="Topcarousel" style="margin-top:8px; background:' + data['return']['headerColor'] + '">' +
                        ' <span title="<?php echo $eventval['username'];?>" >' + data['return']['userfirst'] + '</span> </span>';
                } else {

                    var usericon = '<img src="avatar.php?uid=' + data['return']['uid'] + '" class="img-circle avatar" style="width: 25px;height: 25px;">';
                }
                var html = '';
                html += '<div class="dynameic-comment">';
                html += '<div class="toadysmalltime">';
                html += '<span class="dynameic-times">' + data['return']['dateline'] + '</span>';
                html += '</div>';
                html += '<div class="toadycon">';
                html += usericon;
                html += '<p class="activity-content">'
                html += '<span class="activity-name">' + data['return']['username'] + '</span>';
                html += '<span>' + data['return']['msg'] + '</span>';
                html += '<span class="delete-comment dzz dzz-delete" data-commentid="' + data['return']['commentid'] + '"></span>'
                html += '</p>';
                html += '</div> ';
                html += '</div>';
                $('#just-now').prepend(html);
                $('.scroll-y').animate({scrollTop: '0px'}, 200);
                var Now = $('#just-now').children();
                if (Now.length < 1) {
                    $('#just-now').css('margin-bottom', '0px');
                } else {
                    $('#just-now').css('margin-bottom', '10px');
                }
            }
            $('#leave_message').val('').trigger('input');
        }, 'json');
        return false;
    }


</script>   </div>
    
    <!--文件夹动态结束-->
</div>
<?php if($fid || $rid) { ?>	
<div class="comment-area">
    <div class="messageMenu"> 
    <form action="<?php echo MOD_URL;?>&op=ajax&operation=comment" method="post" onsubmit="return comment_file(this)" id="commentid">
        <input type="hidden" name="rid" value="<?php echo $rid;?>" />
        <input type="hidden" name="fid" value="<?php echo $fid;?>" />
    	<div class="discuss-content">
            <textarea type="text" id="leave_message" name="msg" rows="1" placeholder="输入评论..." class="form-control comment-input" ></textarea>
            <div class="comment-file">
                <ul class="list_acpsw">
                    <li class="emotion_lacpsw"><a href="javascript:;" class="item_lacpsw" id="leave_messagesml" onclick="showMenu({'ctrlid':this.id,'evt':'click','layer':2});return false;"><span class="dzz dzz-smile"></span></a>
                    </li>
                    
                </ul>
            </div>
             
        </div>
        <div class="activity-handler clearfix">
            
             <button type="submit" class="dzz dzz-send pull-right disabled input-search-drop dzz-submit-send" style="color:rgba(55,121,255,0.3);"></button>
        </div>
    </form>
    </div>
</div>
<?php } ?>
</div>
<!--<div id="old_rightinfo" class="hide"></div>-->
<script>
var userids = '';
$(document).ready(function(){
    userids = '<?php echo $userstr;?>';
//开关样式
    $.getScript('<?php echo MOD_PATH;?>/js/switchery.min.js', function () {
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        elems.forEach(function (html) {
            var switchery = new Switchery(html);
        });
    });
});
jQuery(".right-numerbottom  .js-popboxs").each(function(){
jQuery(this).popbox();		
});
jQuery(document).on('click','.dzz-right-backing',function(){
jQuery('.rightbasic').show();
jQuery('#more_dynameic').hide();
})
function editgroupperm(gid,fid){
showWindow('select_perm', MOD_URL+'&op=ajax&operation=selectperm&fid='+fid+'&gid='+gid+'&new=0','get','0');
}
function select_group_user(){
    var userhref = 'index.php?mod=system&op=selorguser&callback=seluser_group&stype=2&moderator=0&range=1&multiple=1&ids='+userids;
    showWindow('adduser',userhref,'get','0')
}
function seluser_group(ids,data) {
    var formdata={};
    formdata.type=1;
    formdata.formhash='<?php echo FORMHASH;?>';
    formdata.selectsubmit=true;
    formdata.uids=ids.join(',');
    var gid = '<?php echo $gid;?>';
    var url = MOD_URL + '&op=group&do=group_ajax&operation=addgroupuser&gid='+gid;
    $.post(url, formdata, function (data) {
        if (data['success']) {
            var userarr = userids.split(',');
            if ($('#memberlist').length > 0 && $('#memberlist').data('gid') == gid) {
                var html = '';
                var usericon = '';
                //修改权限菜单
                for (var o in data['insertuser']) {
                    if (data['insertuser'][o]['avatarstatus'] == 1) {
                      	html+= '<li class="right-numer-carousel" id="' + data['insertuser'][o]['uid'] + '_delete" >';
                        html+= '<a href="javascript:;" class="js-popboxs member_details_info adduser" data-placement="bottom" data-trigger="focus" data-auto-adapt="true" data-toggle="popover"  data-href="<?php echo MOD_URL;?>&op=group&do=right_popbox&gid=<?php echo $gid;?>&uid='+data['insertuser'][o]['uid']+'" style="display: inline-block;width:28px;">'; 
 html+= '<img src="avatar.php?uid=' + data['insertuser'][o]['uid'] + '" class="img-circle avatar" style="width: 28px;height: 27px;">';
                        html+= '</a>';
                        html+= '</li>';
                    } else {
                        html+= '<li class="right-numer-carousel" style="background:' + data['insertuser'][o]['headerColor'] + '" id="' + data['insertuser'][o]['uid'] + '_delete">';
                        html+= '<a href="javascript:;" class="js-popboxs member_details_info adduser" data-placement="bottom" data-trigger="focus"' +
                            'data-auto-adapt="true" data-toggle="popover" style="display: inline-block;width: 28px;height: 27px;"' +
                            'data-href="<?php echo MOD_URL;?>&op=group&do=right_popbox&gid=<?php echo $gid;?>&uid=' + data['insertuser'][o]['uid'] + '">';
                        html+= '<span class="rightcarousel-first">' + data['insertuser'][o]['ufirst'] + '</span>';
                        html+='</a>';
                        html+='</li>';
                    }
                    if($.inArray(data['insertuser'][o]['uid'],userarr) == -1){
                        userarr.push(data['insertuser'][o]['uid']);
}

                }
                for (var o in data['delusers']) {
                    $('#' + o+ '_delete').remove();
                    var index = $.inArray(o,userarr)
                    if(index != -1){
                        userarr.splice(index,1);
                    }
                }
                userids = userarr.join(',');
                $('#memberlist').append(html);
                $(".adduser").each(function(){
                    $(this).popbox();
                });
                hideWindow('adduser');//群组内添加成员
            } else {
                hideWindow('adduser');
                showWindow('select_perm', _explorer.appUrl + '&op=ajax&operation=selectperm&fid=<?php echo $groupinfo['fid'];?>&gid=<?php echo $gid;?>&new=true', 'get', 0);
            }
        } else if (data['error']) {
            showDialog(data['error']);
        }
    }, 'json')
    return false;
    };
</script>