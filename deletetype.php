<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
	<?php include "abc.php"; ?>
</head>

<body>
	<?php
	include "connect.php";
	$dt_id = $_POST['dt_id'];
	$sql = "DELETE FROM drugtype WHERE dt_id = '$dt_id'";
	mysql_query($sql, $conn)
		or die("3. ไม่สามารถประมวลผลคำสั้งได้") . mysql_error();
	mysql_close();
	echo "<script>Swal.fire({
		type: 'success',
		title: 'ลบข้อมูลเรียบร้อย',
		showConfirmButton: true,
		timer: 1500
	  }).then(() => { 
		  window.location = 'showtype.php'
		});
	  </script>";
	?>

</body>

</html>