<?php 
	
	header('Content-Type:application/json;');

	//1 连接数据库
	$con = mysqli_connect('127.0.0.1','root','960115','test');

	//2 查询
	$query = mysqli_query($con,"select * from lists;");

	//3 从结果集中获取真正的数据
	//获取所有数据时，不要直接在条件中进行数组保存，可能会出现null
	while($result = mysqli_fetch_assoc($query)){
		//保存到数组中
		$result_arr[] = $result;
	}

	//var_dump($result_arr);

	//4 将数组转为json字符串的形式进行响应
	echo json_encode($result_arr);


	// print_r($_GET);
	// print_r($_POST);

 ?>
