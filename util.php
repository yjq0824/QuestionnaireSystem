 <?php 
 //建一个连接，造一个连接对象


 function adduser($sql){

 	$conn = mysqli_connect("localhost", "root", "123456", "dbstore") or die("数据库连接失败！失败信息：".mysqli_connect_error($conn));

        mysqli_select_db($conn, "dbstore") or die("数据库选择失败！");

        
        mysqli_set_charset($conn,"utf8") or die("数据库编码集设置失败！");


        $result = $conn->query($sql);

        return $result;

 }

 function selectuser($sql){

 		$conn = mysqli_connect("localhost", "root", "123456", "dbstore") or die("数据库连接失败！失败信息：".mysqli_connect_error($conn));

        mysqli_select_db($conn, "dbstore") or die("数据库选择失败！");

        
        mysqli_set_charset($conn,"utf8") or die("数据库编码集设置失败！");


		$result = $conn->query($sql);
		return  mysqli_fetch_array($result);
		


 }
       
?>
