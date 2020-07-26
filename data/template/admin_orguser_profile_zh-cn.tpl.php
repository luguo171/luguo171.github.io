<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:1:{s:85:"C:\Users\Administrator\Desktop\yuanma\dzzoffice\/./admin/orguser/template/profile.htm";i:1584086883;}*/?>
<div class="main-header" style="padding:0 15px">
<ul class="nav nav-pills nav-pills-bottomguide">
<strong class="pull-left"><?php echo $space['username'];?></strong>
<li>
<a href="<?php echo BASESCRIPT;?>?mod=orguser&op=edituser&uid=<?php echo $uid;?>#user_<?php echo $user['uid'];?>_" onclick="jQuery('#orguser_container').load(this.href);return false;">基本信息</a>
</li>
<li class="active">
<a href="<?php echo BASESCRIPT;?>?mod=orguser&op=edituser&do=profile&uid=<?php echo $uid;?>" onclick="jQuery('#orguser_container').load(this.href);return false;">详细资料</a>
</li>

</ul>
</div>
<div class="main-body" style="padding:15px 15px 15px 22px;">
<div id="return_edituserprofile"></div>
<form id="accountform" name="accountform" class="form-horizontal form-horizontal-left" action="<?php echo BASESCRIPT;?>?mod=orguser&op=edituser&do=profile" method="post" onsubmit="account_submit();return false">
<input type="hidden" name="profilesubmit" value="true" />
<input type="hidden" name="uid" value="<?php echo $uid;?>" />
<input type="hidden" name="handlekey" value="edituserprofile" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" /><?php if(is_array($settings)) foreach($settings as $key => $value) { if($value['available']) { ?>
<div class="form-group">
<label class="control-label" for="<?php echo $key;?>"><?php echo $value['title'];?></label>
<div class="controls">
<?php echo $htmls[$key];?>
</div>
</div>
<?php } } ?>
<div class="form-group">
<label class="control-label"></label>
<div class="controls">
<input type="submit" class="btn btn-primary" value="保存更改">
</div>
</div>
</form>
</div>
<script type="text/javascript" reload="1">
currentHash = 'user_<?php echo $space['uid'];?>_profile';
location.hash = '#user_<?php echo $space['uid'];?>_profile';

function account_submit() {
ajaxpost('accountform', 'ajaxwaitid', 'return_edituserprofile');
return false;
}

function succeedhandle_edituserprofile(url, message, values) {
showmessage(message, 'success', 3000, 1);
};
</script>