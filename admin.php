<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box" >
  <div class="login-logo">
    <h1><b>Book API</b></h1>
  </div>
  <!-- /.login-logo -->
  <div class="card" style="border-radius: 20px;">
    <div class="card-body login-card-body" style="border-radius: 20px;">
      <h3 class="login-box-msg">Administrator</h3>

      <form method="post" id="customForm" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="input-group mb-3">
          <input class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">

          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
        <?php
    DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'bookapi');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    //connection object $conn holds the connection to the Database
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or
        die('Could not connect to MySQL: ' . mysqli_connect_error());
    $query = "select * from admin";
    $result = mysqli_query($conn, $query);
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            if ($row["admin_name"] == $_POST['username'] && $row["admin_pass"] == $_POST['password']) {
                echo "log in";
                session_start();
                $_SESSION["username"] = $_POST['username'];
                header("Location: dashboard.php");
die();
            }else{
                echo "Incorrect Credentials";
            }
        }
    }
    


mysqli_close($conn);
    
    
}
?>

</body>
</html>
