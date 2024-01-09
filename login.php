<?php 
    session_start();
    include('server1.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="testlog.css">

</head>

<body>
<section class="home">
<div class="video-container">
  <video src='../img/touring.mp4' id="video-slider" loop autoplay muted></video>
</div>
<form action="login_db.php" method="POST" class="log">
    <?php if (isset($_SESSION['error'])):?>
        <div class="error"> 
            <h3>
            <?php 
                echo $_SESSION['error']; 
                unset($_SESSION['error']);
            ?>
            </h3>
        </div>
        <?php endif?>
        <label for="username">ชื่อผู้ใช้งาน:</label>
        <input type="text" id="username" name="username" placeholder="username">
        <br>
        <label for="password">รหัสผ่าน:</label>
        <input type="password" id="password" name="password" placeholder="password"> 

        <br>
        <button type="submit" class="submit" name="login_user">เข้าสู่ระบบ</button>
        <div class="text-center">
        <p class="message">ยังไม่มีบัญชีผู้ใช้? <a href="register.php">สร้างบัญชีใหม่</a></p>
        <p class="message">ลืมรหัสผ่านใช่หรือไม่? <a href="forgot.html">ลืมรหัสผ่าน</a></p>

    </div>
    </form>
    </section> 

</body>

</html>