<?php  
    include "../koneksi.php";
    if (isset($_POST['login'])) {
       $us = $_POST['us'];
       $ps = $_POST['ps'];

       $x = base64_encode(base64_encode(md5($ps)));

       $s = $mysqli->query("SELECT * FROM admin WHERE username = '$us' AND password = '$x' ");
       $n = $s->num_rows;
       if ($n == 0) {
          echo "<script> alert('Maaf Username Atau Password Anda Salah'); window.location.href = '../admin/'; </script>";
       } elseif ($n == 1) {
          $r = $s->fetch_array();
          if ($r['status'] == "Tidak Aktif") {
             echo "<script> alert('Maaf User Anda Tidak Aktif'); window.location.href = '../admin/'; </script>";
          } elseif ($r['status'] == "Aktif") {
             session_start();
             
             $_SESSION['admin_bhayangkara'] = base64_encode(base64_encode($r['id_admin']));
             header("location:admin.php");
          }
       }
    }

?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin Bhayangkara</title>
    <link href="img/pic/logor.png" rel="shortcut icon">

     
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <!-- Form Mixin-->
    <!-- Input Mixin-->
    <!-- Button Mixin-->
    <!-- Pen Title-->
    <div class="pen-title">
      <h1>Welcome Admin</h1>
    </div>
    <!-- Form Module-->
    <div class="module form-module">
      <div class="toggle"><i class="fa fa-times fa-pencil"></i>
        <div class="tooltip">Click Me</div>
      </div>
      <div class="form">
        <h2>Login to your account</h2>
        <form method="POST">
          <input type="text" placeholder="Username" name="us" />
          <input type="password" placeholder="Password" name="ps" />
          <button type="submit" name="login">Login</button>
        </form>
      </div>
      
    </div>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    

    <script src="js/index.js"></script>    
  
  </body>
</html>
