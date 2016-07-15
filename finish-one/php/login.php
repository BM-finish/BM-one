<?php
	header("Content-Type:text/json;charset=utf-8");
	//选择数据库
	//创建连接
	$conn = mysql_connect("localhost", "root", "");
	//选择编码
	mysql_query("SET NAMES 'utf8'");
	//选择数据库
	mysql_select_db("bianmin");
	//获取前端传过来的用户名和密码
	$username = $_POST["username"];
	$password = $_POST["password"];
	//查找用户名
	$str = "SELECT * FROM bianmin_str WHERE username = '".$username."' AND password =  '".$password."'";
	$sql = mysql_query($str);
	$row = mysql_fetch_assoc($sql);
	//结果转换成数组
	$response["state"] = true;
	if(!$row) {
		$response["state"] = false;
		$response["error"] = "用户名已经存在";
	} else {
		$_SESSON["username"] = $row["username"];
		$_SESSON["password"] = $row["password"];
	}
	echo json_encode($response);
?>
