<!doctype html>
<html >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7\dist\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="register.css">
</head>

<body>
    <div class="form_div">
        <div class="h1 text-center ">注册用户</div>
        <div class="col-md-offset-4 form-group">
            <form action="" name="register" method="POST">
            <div class="col-md-4 form-group col-md-push-1">
                <label for="username">用户名</label>
                <input class="form-control"  name="username" id="username" placeholder="请输入用户名" pattern="^[a-z0-9]{3,8}$" required />
            </div>
            <div class="col-md-offset-6 col-md-pull-5 col-md-4 form-group">
                <label for="userpwd">密码</label>
                <input class="form-control" type="password" name="userpwd" id="userpwd" placeholder="请输入密码" pattern="^[a-z0-9]{3,8}$" onkeyup="validate()" required />
            </div>
            <div class="col-md-offset-6 col-md-pull-5 col-md-4 form-group">
                <label for="reuserpwd">确认密码</label>
                <input class="form-control" type="password" name="reuserpwd" id="reuserpwd" placeholder="请再次输入密码" onkeyup="validate()"/>
                <span id="tishi"></span>
            </div>
            <div class="col-md-offset-6 col-md-pull-5 col-md-4 form-group">
                <label for="usersex">性别</label><br>
                <input type="radio" name="usersex" id="usersex" value="男"> 男<br><br>
                <input type="radio" name="usersex" id="usersex" value="女"> 女
            </div>


            <div class="col-md-push-2 col-md-3">
                <button type="submit" name="ok" class="btn btn-success">提交</button>
            </div>
            <div class="col-md-3">
                <button type="reset"  class="btn btn-warning">重置</button>
            </div>
            
        </form>

        <?php
        
        include 'util.php';


        if(isset($_POST['ok']))
        {
            $username=$_POST['username'];
            $userpwd=$_POST['userpwd'];
            $usersex=$_POST['usersex'];


            $sql02="select username from userinfo where username='{$username}'";
            $result=selectuser($sql02);
            if(empty($result)){
                
                //写SQL语句
                $sql01 = "INSERT INTO userinfo(username,userpwd,usersex) VALUES ('$username','$userpwd','$usersex')";

                adduser($sql01);
                echo '<script language="JavaScript">;alert("注册成功，请登录！");location.href="login.php";</script>;';
            }else{
                 
                 echo '<script language="JavaScript">;alert("该用户名已被使用！");;</script>;';
            }
            
        } 
        
        ?>

        
        </div>
        </div>
        <script>
            function validate() {
                var pwd1 = document.getElementById("userpwd").value;
                var pwd2 = document.getElementById("reuserpwd").value;
             
                if(pwd1 == pwd2)
                 {
                    document.getElementById("tishi").innerHTML="<font color='green'>密码一致</font>";
                    document.getElementById("button").disabled = false;
                 }
            else {
                    document.getElementById("tishi").innerHTML="<font color='red'>密码不一致，请重新输入</font>";
                    document.getElementById("button").disabled = true;
                 }
            }
            </script>
</body>

</html>