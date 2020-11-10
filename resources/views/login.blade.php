<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta name="author" content="order by dede58.com"/>
		<title>会员登录</title>
		<link rel="stylesheet" type="text/css" href="./css/login.css">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<script src="./js/jquery.min.js"></script>
		<script src="./lib/layui/layui.js"></script>
		<script src="./lib/layui/layui.all.js"></script>
	</head>
	<body>
		<!-- login -->
		<div class="top center">
			<div class="logo center">
				<a href="./index.html" target="_blank"><img src="./image/mistore_logo.png" alt=""></a>
			</div>
		</div>
		<form class="form center">
		<div class="login">
			<div class="login_center">
				<div class="login_top">
					<div class="left fl">会员登录</div>
					<div class="right fr">您还不是我们的会员？<a href="./register.html" target="_self">立即注册</a></div>
					<div class="clear"></div>
					<div class="xian center"></div>
				</div>
				<div class="login_main center">
					<div class="username">用户名:&nbsp;<input class="shurukuang" type="text" name="username" id="name" placeholder="请输入你的用户名"/></div>
					<div class="username">密&nbsp;&nbsp;&nbsp;&nbsp;码:&nbsp;<input class="shurukuang" type="password" name="password" id="password" placeholder="请输入你的密码"/></div>
					<div class="username">
						<div class="left fl">验证码:&nbsp;<input class="yanzhengma" type="text" name="username" id="code" placeholder="请输入验证码"/></div>
						<div class="right fl"><img src="./image/yanzhengma.jpg"></div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="login_submit">
					<input class="submit" type="button" id="login" name="submit" value="立即登录" >
				</div>
				
			</div>
		</div>
		</form>
		<footer>
			<div class="copyright">简体 | 繁体 | English | 常见问题</div>
			<div class="copyright">小米公司版权所有-京ICP备10046444-<img src="./image/ghs.png" alt="">京公网安备11010802020134号-京ICP证110507号</div>

		</footer>
		<script>
			$('#login').click(function () {

				var name = $('#name').val();
				var password = $('#password').val();
				var code = $('#code').val();

				if(name.length > 12 || name.length < 1){
					layer.msg('账号长度必须在 2~12 之间噢!', {icon: 5});
					return;
				}

				if(password.length > 12 || password.length < 2){
					layer.msg('密码长度必须在 3~12 之间噢!', {icon: 5});
					return;
				}

				$.ajax({
					url:'login',
					type: "post",
					data:{

						name:name,
						password:password,
						code:code
					},
					dataType:'json',
					success: function(data) {
						alert(data);
						return;
					}
				})
			});
	</script>
	</body>
</html>