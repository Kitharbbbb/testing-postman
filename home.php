<?php 
    session_start();

    if(!isset($_SESSION['username'])){
        $_SESSION['msg']="you must login first";
        header('location: /login/login.php');
    }
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: /login/login.php');
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>หน้าหลัก</title>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="home.css">

  <script src="dropmenu.js"></script>
</head>

<body>
<?php if (isset($_SESSION['success'])):?>
            <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
            ?>
              <?php endif?>
  <header class="p-3 mb-3">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
          </svg>
          <span class="fs-4">tour koh trang sea</span>
        </a>
    
        <ul class="nav nav-pills">
          <li class="nav-item"><a href="/user/home.php" class="nav-link active" aria-current="page">หน้าหลัก</a></li>
          <li class="nav-item"><a href="/user/pendpack.php" class="nav-link ">แพ็คเกจรอชำระ</a></li>
          <li class="nav-item"><a href="/user/buying.php" class="nav-link ">สั่งซื้อ</a></li>
          <li class="nav-item"><a href="/user/review.php" class="nav-link ">รีวิว</a></li>
          <li class="nav-item"><a href="/user/aboutus.php" class="nav-link">เกี่ยวกับบริษัทิ</a></li>
          <div class="dropdown text-end">
            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="/img/user.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
              <li><a class="dropdown-item" href="warning.php">แจ้งเตือน</a></li>
              <li><a class="dropdown-item" href="profile.php">Profile</a></li>
              <?php if (isset($_SESSION['username'])):?>
              <li><a class="dropdown-item" href="home.php?logout='1'">logout</a></li>
              <?php endif ?>
            </ul>
            <script src="/user/dropmenu.js"></script>
          </div>
        </ul>
      </div>
    </div>
    </header>
  <div class="jm">
    <link rel="stylesheet" href="home.css">
    <div class="main">
      <link rel="stylesheet" herf="joymenu.php">
      <div class="img">
        <img src="/img/joy.png" style="width:100%">
      </div>
      <div class="content">
        <h1><a href="joymenu.php" target="_parent">จอยแพ็คเกจ</a> </h1>

      </div>
    </div>
    <div class="main">
      <div class="img">
        <img src="/img/mao.png" style="width:100%" herf="maomenu.php">
      </div>
      <div class="content">
        <h1><a href="maomenu.php" target="_parent">เหมาแพ็คเกจ</a></h1>
      </div>
    </div>
    
  </div>
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
          <svg class="bi" width="30" height="24">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>
        <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Company, Inc</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#twitter"></use>
            </svg></a></li>
        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#instagram"></use>
            </svg></a></li>
        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#facebook"></use>
            </svg></a></li>
      </ul>
    </footer>
  </div>

</body>

</html>