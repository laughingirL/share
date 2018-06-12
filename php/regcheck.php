<?php
//获取表单数据
$username = trim($_POST['form-username']);
$password = md5(trim($_POST['form-password']));
$time = time();
$ip = $_SERVER['REMOTE_ADDR'];

//连接数据库
$conn = mysqli_connect('localhost', 'guest', 'guest');

//如果有错误，存在错误号
if (mysqli_errno($conn)) {

   echo mysqli_error($conn);

   exit;
}
//选择数据库
mysqli_select_db($conn, 'guest');
//设置字符集
mysqli_set_charset($conn, 'utf8');
//判断数据库中是否已存在注册用户名
$sql = "select username from user where username = '$username'";
$result = mysqli_query($conn, $sql);
//查询结果数量
$num = mysqli_num_rows($result);

//不为0，说明用户已存在
if($num)
{
	echo "<script>alert('用户名已存在！');history.go(-1);</script>";
}
else{	//可以注册
	if (trim($_POST['form-password']) != trim($_POST['confirm'])) {
	echo "<script>alert('两次密码不一致,请重新确认后再提交！'); history.go(-1);</script>";
  	//exit('两次密码不一致,请返回上一页');
  	}
  	//将用户信息插入数据库
	$sql = "insert into user(username,password,createtime,createip) values('" . $username . "','" . $password . "','" . $time . "','" . $ip . "')";
	//返回结果
	$result = mysqli_query($conn, $sql);

	//插入成功
	if ($result) {
   		echo '恭喜您注册成功！' ."\n";
	} 
	else {	//注册失败
   		echo $result;
   		echo '注册失败！请重新注册！' ."\n";

	}
}
mysqli_close($conn);
?>