<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7\dist\css\bootstrap.min.css">
</head>

<body>
	<?php 
		session_start();
		if(!$checkbox_select)
		{
			if(isset($_SESSION['username']))
			{
				$username=$_SESSION['username'];
				$userpwd=$_SESSION['userpwd'];

			}else{
				$username="";
				$userpwd="";
			}
		}	

		
			 

	?>

			
	<div class="first_div well col-md-3">
		<div >
			<form name="login" method="post" action="">
				<div class="col-md-8 col-md-push-2 form-group">
					<label for="username"><text>用户名</text></label>
					<input class="form-control" id="username" name="username" placeholder="请输入用户名" value="<?php echo $username ?>" pattern="^[a-z0-9]{3,8}$" required/>
					<span class="help-block text-warning"><span id="tips1"></span></span>
				</div>
				<div class="col-md-offset-6 col-md-pull-4   col-md-8 form-group ">
					<label for="userpwd"><text>密码</text></label>
					<input class="form-control" type="password" name="userpwd" id="userpwd" placeholder="请输入密码" value="<?php echo $userpwd ?>"pattern="^[a-z0-9]{3,8}$" required />
					<span class="help-block"><span id="tips2"></span></span>
				</div>
				<div class="col-md-4 col-md-push-2">
					<a href="register.php">去注册</a><br><br>
				</div>
				<div class="col-md-4 col-md-push-4">
					<a href="findpwd.html">忘记密码？</a><br><br>
				</div>


				<div class="col-md-5 col-md-push-2  remenber">
					<label class="checkbox-inline row_repwd">
						<input type="checkbox" name="inlinecheckboxOptions" id="inlinecheckbox3" value="repwd">记住密码
					  </label>
				</div>

				<div class="col-md-2  col-md-pull-1  row_login">
					<button type="submit" name="ok" class="btn btn-success" OnClick="checkInCorrect()"><text>立即登录</text></button>
				</div>
				<br/>

				<div class="col-md-offset-5 col-md-2 col-md-pull-1 row_login" style="top:-20px ">
					<button type="submit" name="clear" class="btn btn-warning" ><text>注销账号</text></button>
				</div>

			</form>
			<?php 
			session_start();
			
			include 'util.php';


				if(isset($_POST['ok']))
				{
					$username=$_POST['username'];
					$userpwd=$_POST['userpwd'];
					$checkbox_select=$_POST["inlinecheckboxOptions"];

					

					$sql = "select userpwd from userinfo where username='{$username}'";
					$result=selectuser($sql);
					
					$temp=$result[0];

					
					if($userpwd==$temp)
					{
						$_SESSION['username']=$username;
						$_SESSION['userpwd']=$userpwd;
						echo '<script language="JavaScript">;alert("恭喜你，登录成功！");location.href="index.php";</script>;';


					}else{
						
						echo '<script language="JavaScript">;alert("用户名密码不正确，请重试！");</script>;';
					}

					
						

						
						// setcookie("username",$username,time()+24*3600);
						// setcookie("userpwd",$userpwd,time()+24*3600);//cookie用法
				
					//else{
					// 	echo '<script language="JavaScript">;alert("密码错误，请重新输入！");</script>;';
					// }
					
				}

				if(isset($_POST['clear']))
				{

					session_destroy();//销毁session
					// setcookie("username","",time()-24*3600);
					// setcookie("userpwd","",time()-24*3600);
				}
			
	?>
	
			 
		</div>
	
	</div>


</body>
<script>

function checkInCorrect()      //判断用户名和密码是否为空
    {
        if (document.getElementById('username').value == "") {
			document.getElementById("tips1").innerHTML="<font color='red'>请输入用户名</font>";
            document.getElementById("button").disabled = false;
        }
        if (document.getElementById('userpwd').value == "") {
			document.getElementById("tips2").innerHTML="<font color='red'>请输入密码</font>";
            document.getElementById("button").disabled = false;
        }
        else {
            saveInfo();
            return true;
        }
    }

</script>


</html>