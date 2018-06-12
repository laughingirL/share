<?php
	//if(isset($_POST["submit"]) && $_POST["submit"] == "登陆")
	if(isset($_POST['form-username'])&&isset($_POST['form-password']))
	{
		$user = trim($_POST["form-username"]);
		$psw = md5(trim($_POST["form-password"]));
		//echo "<script>alert('$psw');</script>";
		if($user == "" || $psw == "")
		{
			echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
		}
		else
		{
			$conn = mysqli_connect("localhost","guest","guest");
			if (mysqli_errno($conn)) {
				echo mysqli_error($conn);
				exit;
			}
			mysqli_select_db($conn, 'guest');

			mysqli_set_charset($conn, 'utf8');

			$sql = "select username,password from user where username = '$user'";//,password = '$psw'";

			$result = mysqli_query($conn, $sql);

			//echo "<script>alert('$result');</script>";
			//echo $result;
			$num = mysqli_num_rows($result);
			if($num)
			{
				$row = mysqli_fetch_array($result);	//将数据以索引方式储存在数组中
				if($psw==$row['password']){
					echo "<p>登录成功!</p>";
				}
				else{
					echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
				}
			}
		}
	}
	else
	{
		echo "<script>alert('提交未成功！'); history.go(-1);</script>";
	}

?>