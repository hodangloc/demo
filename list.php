    <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
            table{
                width: 800px;
                margin: auto;
                text-align: center;
            }
            tr {
                border: 1px solid;
            }
            th {
                border: 1px solid;
            }
            td {
                border: 1px solid;
            }
            h1{
                text-align: center;
                color: red;
            }
            #button{
                margin: 2px;
                margin-right: 10px;
                float: right;
            }
        </style>
</head>
<body>
	<?php  
		include 'connect.php';
		$sql = "SELECT * FROM cauthu ORDER BY id";
		$result = $con->query($sql);
		$data = [];
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
		}
        // echo "<pre>";
        // var_dump($data);
        // exit;
	?>

	<table id="datatable" style="border: 1px solid">
		<h1>Quản lý cầu thủ</h1>
		<thead>
			<tr >
				<th>ID</th>
                <th>Tên cầu thủ</th>
                <th>Tuổi</th>
                <th>Quốc tịch</th>
                <th>Vị trí</th>
                <th>Lương</th>
                <th style="width: 7%;">Edit</th>
                <th style="width: 10%;">Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php  
                    
                foreach ($data as $key => $value) {
            ?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['ten_cau_thu']; ?></td>
                <td><?php echo $value['tuoi']; ?></td>
                <td><?php echo $value['quoc_tich']; ?></td>
                <td><?php echo $value['vi_tri']; ?></td>
                <td><?php echo $value['luong']; ?></td>
                <td><a href="edit.php?id=<?php echo $value['id'];?>" >Edit</a></td>
                <td><a href="delete.php?id=<?php echo $value['id'];?>">Delete</a></td>
            </tr>
            <?php
                }
            ?>
		</tbody>
		<tfoot>
            <tr>
                <td colspan="8">
                    <a href="add.php"><button id="button">Thêm cầu thủ</button></a>
                </td>
            </tr>
        </tfoot>
	</table>
</body>
</html>