<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>API Key</title>
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
    <div class="login-box">
        <div class="login-logo">
            <h1><b>Book API</b></h1>
        </div>
        <!-- /.login-logo -->
        <div class="card" style="border-radius: 20px;">
            <div class="card-body login-card-body" style="border-radius: 20px;">
                <h3 class="login-box-msg">Get Your API Key</h3>
                <form method="post" id="customForm" action="<?php echo $_SERVER['PHP_SELF'];?>">

                    <div class="input-group mb-3">
                        <input class="form-control" id="email" placeholder="Email" name="email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-mail-bulk"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <input class="form-control" id="key" name="key" style="display:none;">
                </form>
                <div class="row">
                    <div class="col-6">

                    </div>
                    <!-- /.col -->
                    <div class="col-6">
                        <button id="submit" class="btn btn-primary btn-block">Request API Key</button>
                    </div>
                    <br />
                    <div class="col-12">
                        <p><span style="color: red;">Note: </span>Your API Key will be send to you via your email address.
                            Ensure that you enter your email correctly</p>
                    </div>
                    <!-- /.col -->
                </div>
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
    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script>
        function submitForm() {
            document.getElementById("customForm").submit()
        }

        document.getElementById('submit').onclick = function() {
            setTimeout(submitForm, 1500);

            var result = '';
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var charactersLength = characters.length;
            for (var i = 0; i < 6; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }

            var email = document.getElementById("email").value;
            var name = document.getElementById("name").value;
            document.getElementById("key").value = result;
            var key = result;
            //alert(key + email + name);
            Email.send({
                    Host: 'smtp.gmail.com',
                    Username: 'riverbay06@gmail.com',
                    Password: "riverbay_2020",
                    To: email,
                    From: "riverbay06@gmail.com",
                    Subject: "Book API Key",
                    Body: 'Dear ' + name + ', thank you for using Book API<br/>Here is your key: <b><u>' + key + '</u></b>',
                })
                .then(function(message) {
                    alert("Email sent successfully")
                });
        }

    </script>
<?php
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'bookapi');
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    // Create connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // Check connection
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO apikeys (key_num) VALUES ('" . $_POST['key'] . "')";

    if (mysqli_query($conn, $sql))
    {
        echo "Email sent successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

}
?>



</body>

</html>
