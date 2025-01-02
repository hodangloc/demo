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
				$sql = "INSERT INTO cauthu 
						(ten_cau_thu, tuoi, quoc_tich,vi_tri, luong)
						VALUES (
							'".$_POST['name']."',
							'".$_POST['age']."',
							'".$_POST['national']."',
							'".$_POST['position']."',
							'".$_POST['salary']."');";
			
				if ($result = $con->query($sql)) {
					echo  "<h1>Thêm mới cầu thủ thành công Click vào <a href='list.php'>đây</a> để về trang danh sách</h1>";		
				}else{
					 echo "<h1>Có lỗi xảy ra Click vào <a href='list.php'>đây</a> để về trang danh sách</h1>";

				}	
			}
		}
	?>

	<form method="POST" class="form">
		<input type="text" name="name" value=" ">
		<p>Tên cầu thủ <?php echo $xx1; ?></p>

		<input type="number" name="age">
		<p>Tuổi <?php echo $xx2; ?></p>

		<input type="text" name="national">
		<p>Quốc tịch <?php echo $xx3; ?></p>

		<input type="text" name="position">
		<p>Vị trí <?php echo $xx4; ?></p>

		<input type="text" name="salary">
		<p>Lương <?php echo $xx5; ?></p>

		<button type="submit" name="click">Click</button>
	</form>
</body>
</html>