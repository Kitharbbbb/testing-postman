<?php
	session_start();
	include('server1.php') 
	?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>index</title>
	<link rel="stylesheet" href="reg.css">
</head>

<body>

	<form action="reg_db.php" class="input- group" method="post">

		<?php include('error.php'); ?>
		<?php if (isset($_SESSION['success'])):?>
        <div class="success"> 
            <h3>
            <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
            ?>
            </h3>
        </div>
        <?php endif?>
		<h1 style="margin-left: 20rem;">สมัครสมาชิก</h1>
		
		<label for="username">ชื่อผู้ใช้:</label>
		<input type="text" id="username" name="username" required> <br>
		<label for="username">ชื่อผู้สมัคร:</label>
		<input type="text" id="fname" name="fname" required> <br>
		<label for="lname">นามสกุล:</label>
		<input type="text" name="lname" id="lname" required>
		<br>
		<label for="gender" required>เพศ:</label><br>
		<input type="radio" name="gender" id="post" value="men" required>ชาย <br>
		<input type="radio" name="gender" id="post" value="women"required>หญิง<br>
		<input type="radio" name="gender" id="post" value="not specified" required>อื่นๆ<br>
		<br>
		<label for="birthday">วันเกิด</label>
		<input type="date" id="birthday" name="birthday" required>
		
		<label for="tel">เบอร์โทร:</label>
		<input type="text" id="tel" name="tel" required>
		<br>
		<label for="address">ที่อยู่</label>
		<textarea type="text" class="form-control" id="address" name="address" rows="5" placeholder="รายละเอียด" required></textarea>
		<label for="email">อีเมลล์:</label>
		<input type="text" id="email" name="email" required>
		<br>
		<label for="password_1">รหัสผ่าน:</label>
		<input type="password" id="password" name="password" required>
		<br>
		<input type="checkbox" name="check your personal record" required>ตรวจสอบรหัสผ่านและข้อมูลแล้ว
		<br>
		<button type="submit" name="reg_user" value="เข้าสู่ระบบ" style="margin-left:19rem;" class="btn">ยืนยันข้อมมูล</button>
	</form>

</body>

</html>