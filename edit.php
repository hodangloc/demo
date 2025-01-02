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
		$sql = "SELECT * FROM cauthu WHERE id = '".$id."'";
		$result = $con->query($sql);
		var_dump($result);
		if ($result->num_rows > 0) {
			
			$row = $result->fetch_assoc();
			
		}
		// var_dump($row);

		$xx1 = "";
		$xx2 = "";
		$xx3 = "";
		$xx4 = "";
		$xx5 = "";
		if (isset($_POST['click'])) {
			$x = 1;
			if (empty($_POST['name'])) {
				$xx1 = "ERROR";
				$x = 2;
			}
			if (empty($_POST['age'])) {
				$xx2 = "ERROR";
				$x = 2;
			}
			if (empty($_POST['national'])) {
				$xx3 = "ERROR";
				$x = 2;
			}
			if (empty($_POST['position'])) {
				$xx4 = "ERROR";
				$x = 2;
			}
			if (empty($_POST['salary'])) {
				$xx5 = "ERROR";
				$x = 2;
			}
			if ($x == 1) {
				$sql = "UPDATE cauthu SET 
	            `ten_cau_thu`='".$_POST['name']."',
	            `tuoi`='".$_POST['age']."',
	            `quoc_tich`='".$_POST['national']."',
	            `vi_tri`='".$_POST['position']."',
	            `luong`='".$_POST['salary']."' 
	            WHERE `id` = ".$_GET['id'];

	            if ($result = $con->query($sql)) {
	                echo "<h1>Chỉnh sửa thông tin cầu thủ thành công Click vào <a href='list.php'>đây</a> để về trang danh sách</h1>";
	            }else{
	                echo "<h1>Có lỗi xảy ra Click vào <a href='list.php'>đây</a> để về trang danh sách</h1>";
	            }
			}
		}


		
	?>

	<form method="POST">
	
		<input type="text" name="name" value="<?php echo $row['ten_cau_thu']; ?>">
		<p>Tên cầu thủ <?php echo $xx1; ?></p>
		
		<input type="number" name="age" value="<?php echo $row['tuoi']; ?>">
		<p>Tuổi <?php echo $xx2; ?></p>

		<input type="text" name="national" value="<?php echo $row['quoc_tich']; ?>">
		<p>Quốc tịch <?php echo $xx3; ?></p>

		<input type="text" name="position" value="<?php echo $row['vi_tri']; ?>">
		<p>Vị trí <?php echo $xx4; ?></p>

		<input type="text" name="salary" value="<?php echo $row['luong']; ?>">
		<p>Lương <?php echo $xx5; ?></p>
		
		<button type="submit" name="click">Click</button>
	</form>
</body>
</html>