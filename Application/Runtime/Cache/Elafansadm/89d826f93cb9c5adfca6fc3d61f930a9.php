<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>工作台</title> 
<link href="<?php echo (PUBLIC_F); ?>financeadm/css/base.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo (PUBLIC_F); ?>financeadm/custom/uimaker/easyui.css">
<link rel="stylesheet" href="<?php echo (PUBLIC_F); ?>financeadm/css/workbench.css">
<link rel="stylesheet" href="<?php echo (PUBLIC_F); ?>financeadm/fonts/iconfont.css">
</head> 
<body style="background-color:#f5f5f5;">
<div class="container">
	<div style="width:96%;margin-left:2%;height:40px;background-color:#fff;border-bottom:1px solid #e5e5e5;line-height:40px;font-size:14px;margin-top:10px;">
		&nbsp;&nbsp;<i class="iconfont" style="font-size:26px;">&#xe6dd;</i>&nbsp;工作台
	</div>
	<div style="width:96%;margin-left:2%;height:144px;background-color:#fff;border:1px solid #e5e5e5;margin-top:10px;">
		<div style="font-size:16px;font-weight:900;width:96%;margin-left:2%;height:40px;background-color:#fff;border-bottom:1px solid #e5e5e5;line-height:40px;text-align:center;">
			统计信息
		</div>
		<div style="width:96%;margin-left:2%;height:102px;background-color:#fff;line-height:40px;text-align:center;">
			<div style="float:left;width:25%;height:70px;border-right:1px solid #e5e5e5;margin-top:15px;">
				<div style="text-align:center;height:40px;line-height:40px;width:100%;font-size:16px;">
					<span class="iconfont" style="font-size:30px;">&#xe64b;</span>&nbsp;&nbsp;文章
				</div>
				<div style="text-align:center;height:30px;line-height:30px;width:100%;">
					<span style="color:#198b25;font-weight:900;"><?php echo ($articlecount); ?></span>&nbsp;篇
				</div>
			</div>
			<div style="float:left;width:25%;height:70px;border-right:1px solid #e5e5e5;margin-top:15px;">
				<div style="text-align:center;height:40px;line-height:40px;width:100%;font-size:16px;">
					<span class="iconfont" style="font-size:30px;">&#xe66e;</span>&nbsp;&nbsp;评论
				</div>
				<div style="text-align:center;height:30px;line-height:30px;width:100%;">
					<span style="color:#198b25;font-weight:900;"><?php echo ($commentcount); ?></span>&nbsp;条
				</div>
			</div>
			<div style="float:left;width:25%;height:70px;border-right:1px solid #e5e5e5;margin-top:15px;">
				<div style="text-align:center;height:40px;line-height:40px;width:100%;font-size:16px;">
					<span class="iconfont" style="font-size:30px;">&#xe61d;</span>&nbsp;&nbsp;信件
				</div>
				<div style="text-align:center;height:30px;line-height:30px;width:100%;">
					<span style="color:#198b25;font-weight:900;"><?php echo ($mailcount); ?></span>&nbsp;封
				</div>
			</div>
			<div style="float:left;width:24%;height:70px;margin-top:15px;">
				<div style="text-align:center;height:40px;line-height:40px;width:100%;font-size:16px;">
					<span class="iconfont" style="font-size:30px;">&#xe61f;</span>&nbsp;&nbsp;调查问卷
				</div>
				<div style="text-align:center;height:30px;line-height:30px;width:100%;">
					<span style="color:#198b25;font-weight:900;"><?php echo ($questionnairecount); ?></span>&nbsp;条
				</div>
			</div>
		</div>
	</div>
	<div style="width:96%;margin-left:2%;height:300px;background-color:#fff;border:0px solid #e5e5e5;margin-top:10px;background-color:#f5f5f5;">
		<div style="float:left;width:39%;border-right:1px solid #e5e5e5;height:300px;background-color:#fff;">
			<div style="width:96%;padding-left:2%;padding-right:2%;font-size:14px;height:40px;line-height:50px;border-bottom:1px solid #e5e5e5;background-color:#e5e5e5;">登录信息</div>
			<ul style="width:90%;margin-left:5%;font-size:14px;height:240px;line-height:240px;list-style-type:none;padding:0px;">
				<li style="height:40px;line-height:40px;width:100%;padding-top:20px;font-size:12px;">
					本次登录IP：<?php echo ($logininfo['lastloginip']); ?>
				</li>
				<li style="height:40px;line-height:40px;width:100%;padding-top:10px;font-size:12px;">
					上次登录IP：<?php echo ($logininfo['loginip']); ?>
				</li>
				<li style="height:40px;line-height:40px;width:100%;padding-top:10px;font-size:12px;">
					上次登录时间：<?php echo ($logininfo['logindatetime']); ?>
				</li>
			</ul>
		</div>
		<div style="float:right;width:55%;margin-left:4%;height:300px;border-left:1px solid #e5e5e5;background-color:#fff;">
			<div style="width:98%;padding-left:1%;padding-right:1%;font-size:14px;height:40px;line-height:50px;border-bottom:1px solid #e5e5e5;background-color:#e5e5e5;">系统信息</div>
			<ul style="width:90%;margin-left:5%;font-size:14px;height:240px;line-height:240px;list-style-type:none;padding:0px;">
				<li style="height:34px;line-height:34px;width:100%;padding-top:10px;font-size:12px;">
					服务器IP：<?php echo ($serverhost); ?>
				</li>
				<li style="height:34px;line-height:34px;width:100%;padding-top:5px;font-size:12px;">
					操作系统：<?php echo ($serversys); ?>-<?php echo ($sysversion); ?>
				</li>
				<li style="height:34px;line-height:34px;width:100%;padding-top:5px;font-size:12px;">
					站点路径：<?php echo ($droot); ?>
				</li>
				<li style="height:34px;line-height:34px;width:100%;padding-top:5px;font-size:12px;">
					浏览器信息：<?php echo ($browser); ?>
				</li>
				<li style="height:34px;line-height:34px;width:100%;padding-top:5px;font-size:12px;">
					服务器端口：80
				</li>
				<li style="height:34px;line-height:34px;width:100%;padding-top:5px;font-size:12px;">
					PHP版本：<?php echo ($phpversion); ?>
				</li>
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo (PUBLIC_F); ?>financeadm/custom/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo (PUBLIC_F); ?>financeadm/custom/jquery.easyui.min.js"></script>
<script type="text/javascript" src="<?php echo (PUBLIC_F); ?>financeadm/js/echarts-all.js"></script>
<script type="text/javascript"></script>
</body> 
</html>