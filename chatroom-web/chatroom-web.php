<!DOCTYPE html>
<html>
<head>
	<title>象棋聊天室</title>
	<meta charset="UTF-8">
	<style>
		body{
			text-align:center;
			font-size:30px;
			padding-right:20%;
			padding-left:20%;
		}
		label{
			text-align:center;
		}
		input{
			height:100%;
			font-size:25px;
			margin:10px;
		}
		.hismsg{
			border:3px solid rgb(0,128,255);
			width:70%;
			display:inline-block;
		}
		.msg{
			border:3px solid rgb(255,255,128);
			margin:20px;
		}
		.msgheader{
			font-size:25px;
			color:rgb(128,255,128);
		}
		.msgcontent{
			font-size:25px;
			color:rgb(0,128,255);
		}
		textarea{
			font-size:25px;
			width:70%;
		}
	</style>
</head>
<body>
	<? 
		$nickname="李四";$content="你好！";
		if(isset($_GET["nickname"]))
		{
			//echo "nickname ".$_GET["nickname"]." <br>content ".$_GET["content"];
			$nickname=$_GET["nickname"];
			$content=$_GET["content"];
		}
	?>
	
	<h1>象棋聊天室</h1><font style="position:absolute;left:50px;top:50px;">测试版，暂无功能！</font>
	<div class="hismsg">
		<div class="msg">
			<div class="msgheader">
				2020/11/23/10:00用户 张三：
			</div>
			<div class="msgcontent">
				大家好！你好我好大家好！
			</div>
		</div>
		<div class="msg">
			<div class="msgheader">
				2020/11/23/10:00用户 张三：
			</div>
			<div class="msgcontent">
				大家好！你好我好大家好！
			</div>
		</div>
		<div class="msg">
			<div class="msgheader">
				2020/11/23/10:00用户 张三：
			</div>
			<div class="msgcontent">
				大家好！你好我好大家好！
			</div>
		</div>
		<? echo "<div class=\"msg\">
			<div class=\"msgheader\">
				2020/11/23/10:00用户 ".$nickname.":
			</div>
			<div class=\"msgcontent\">
				".$content."
			</div>
		</div>";?>
	</div><br><br>
	<form action="chatroom-web.php" method="get" target="_blank">
		<label>
			输入你的昵称:
			<input name="nickname" type="text" maxlength="10" value="<?echo $nickname?>">
			<input type="submit" value="发送">
		</label><br><br>
		<label>
			输入发表内容:<br><br>
			<textarea name="content" rows=10 cols=40 value="<?echo $content?>"></textarea>
		</label>
	</form>
	<? echo "hello";?>
</body>
</html>