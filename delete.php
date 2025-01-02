<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php  
		include 'connect.php';
		$id = $_GET['id'];

	// 	echo $id;
    // exit;

		$sql = "DELETE FROM cauthu WHERE id='".$id."'";
		if ($result = $con->query($sql)) {
			echo "<h1>Xóa cầu thủ thành công Click vào <a href='list.php'>đây</a> để về trang danh sách</h1>";			
		}else{
			echo "<h1>Có lỗi xảy ra Click vào <a href='list.php'>đây</a> để về trang danh sách</h1>";
		}
	?>
</body>
</html>