<!DOCTYPE html>
<html>
	<?php
		include("conn.php");
		if(!isset($_SESSION['uid'])){
			echo "<script>alert('请先登录');window.location.href='shops.php'</script>";
		}
		if(@$_POST['submit']){
   			$sql="insert into shops (sname,sdescription,uid,splant,skey,saddress)".
        		"values('$_POST[sname]','$Post[sdecription]','$_SESSION[uid]','$_POST[splant]','$_POST[skey]',$_POST[saddress])";
			mysql_query($sql);
			echo "<script language=\"javascript\">alert('发表成功');</script>";
		}
	?>
	<SCRIPT language=javascript>
		function CheckPost()
		{
			var y=myform.sname.value;
			var z=myform.sdecription.value;
			if (y=='')
			{
				alert("请输入店铺名称");
				myform.sname.focus();
				return false;
			}
			if (z=="")
			{
				alert("请输入科普内容");
				myform.sdescription.focus();
				return false;
			}
		}
	</SCRIPT>
	<head>
		<meta charset="utf-8">
		<title>商铺-添加</title>
		<link rel="icon" href="img/logo.ico" type="image/x-icon">
		<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
		<link rel="stylesheet" href="css/shop_add.css" type="text/css"/>
	</head>
	<body>
		<div id="item_ttl">岂曰无衣?&nbsp;与子同袍</div>
		<div id="all">
			<div id="row_1">
				<nav id="navigation">
					<div id="navigation_left">
						<a href="index.html" id="index"><img src="img/navigation.ico">主页</a>
						<a href="forum.php" id="forum"><img src="img/navigation.ico">夜话</a>
						<a href="shops.php" id="shops"><img src="img/navigation.ico">商铺</a>
						<a href="popularization.php" id="popularization"><img src="img/navigation.ico">科普</a>
						<a href="" id="hairstyle"><img src="img/navigation.ico">绾青丝</a>
					</div>
					<div id="navigation_right">
						<a href="login.php" id="login"><img src="img/navigation.ico">登入</a>
						<a href="register.php" id="register"><img src="img/navigation.ico">注册</a>
					</div>
				</nav>
			</div>
		</div>
		<div id="first_dec">杨意不逢，抚凌云而自惜；</div>
		<div id="second_dec">钟期既遇，奏流水以何惭？</div>
		<div id="recommender">
			<img src="" alt="这是头像" />
			<p>这里是姓名</p>
			<p>这里是个签</p>
		</div>
		<form action="#" method="post" name="myform" id="shop_recommend" onsubmit="CheckPost();">
			<div id="shop_name" >店铺名称：<input type="text" name="sname" id="i_shop_name"/></div>
			<div id="plant">店铺平台：<input type="text" name="splant" id="i_plant"/></div>
			<div id="address">店铺地址(网址或真实地址):<input type="text" name="saddress" id="i_address"/></div>
			<div id="skey">
				推荐类型：
				<label class="radio"><input type="radio" name="skey" value="汉服" checked>汉服</label>
				<label class="radio"><input type="radio" name="skey" value="发饰">发饰</label>
				<label class="radio"><input type="radio" name="skey" value="其他">其他</label>
			</div>
			<div id="sprice">店铺价格区间:<input type="text" name="sprice" id="i_sprice"/></div>
			<textarea id="shop_description" name="sdecription" rows="15" cols="157">这里是店铺描述</textarea><br>
			<input type="submit" value="确定" id="add_shop_b" />
		</form>
	</body>
</html>
