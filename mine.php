<!DOCTYPE html>
<html>
<head>
  <title></title>

<link href="mine.css" rel="stylesheet" >
<link rel="stylesheet" type="text/css" href="script/jquery-1.4.2.min.js">

</head>
<body>

 
<h2>我的问卷信息</h2>
<span style="font-size: 12px">
  <h3>
  
  <?php 
  session_start();
  include 'util.php';
      if(isset($_SESSION['username']))
      {
        $username=$_SESSION['username'];

        echo "欢迎您，".$username;

        $sql = "select * from wqinfo where username='{$username}'";

        $result=selectuser($sql);
        


      }
      else
        echo "未登录，请先<a href='login.php'>登录</a>";

  ?>
</h3>
</span>

<table class="zebra">
    <thead>
        <tr>
          <th>wid</th>
          <th>username</th>
          <th>usersex</th>
          <th>userage</th>
          <th>userwhere_go</th>
          <th>userprovince</th>
          <th>userjob</th>
          <th>userjob_city</th>
          <th>userjob_factory</th>
          <th>userjob_enviroment</th>
          <th>acctime</th>
 
        </tr>
    </thead>
<tfoot>
<tr>
<td> </td>
<td></td>
<td></td>
<td> </td>
<td></td>
<td></td>
<td> </td>
<td></td>
<td></td>
<td> </td>
<td></td>
</tr>
</tfoot>


<tr>
 
<td></td>
<td><?php echo $result['wid']; ?></td>
<td><?php echo $result['username']; ?></td>
<td><?php echo $result['usersex']; ?></td>
<td><?php echo $result['userage']; ?></td>
<td><?php echo $result['userwhere_go']; ?></td>
<td><?php echo $result['userprovince']; ?></td>
<td><?php echo $result['userjob']; ?></td>
<td><?php echo $result['userjob_city']; ?></td>
<td><?php echo $result['userjob_factory']; ?></td>
<td><?php echo $result['userjob_enviroment']; ?></td>

</tr>
<!-- <tr>
<td>2</td>
<td>The Godfather</td>
<td>1972</td>
 
</tr> -->

</table>

<form method="post">
  <h2>增加问卷内容</h2>
<table class="zebra" style="width: 500px" id="table">
<thead>
<tr>
<th>#</th>
<th></th>
<th></th>
 
</tr>
</thead>
<tfoot>
<tr>
<td> </td>
<td></td>
<td></td>
</tr>
</tfoot>



<tr>
 
<td><h3>题目内容：</h3></td>
<td><textarea style="width:300px;height:50px;resize:none;" name="item"></textarea></td>
</tr>

<tr>
<td><h3>选项1</h3></td>
<td><textarea style="width:300px;height:20px;resize:none;" name="option1"></textarea></td>
</tr>

<tr>
<td><h3>选项2</h3></td>
<td><textarea style="width:300px;height:20px;resize:none;" name="option2" ></textarea></td>
</tr>

<tr>
<td><h3>选项3</h3></td>
<td><textarea style="width:300px;height:20px;resize:none;"name="option3" ></textarea></td>
</tr>





</table>

<button type="submit"  style="width:200px;border-radius:0px;margin-top:10px;" name="addtext">
增加内容
</button>

</form>

      <?php 
        if(isset($_POSt['addtext']))
        {
          $item=$_POST['item'];
          $option1=$_POST['option1'];
          $option2=$_POST['option2'];
          $option3=$_POST['option3'];


          $_SESSION['item']=$item;
          $_SESSION['option1']=$option1;
          $_SESSION['option2']=$option2;
          $_SESSION['option3']=$option3;

        }

       ?>




</body>



</html>