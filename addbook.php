<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Dashboard</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
    ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: skyblue;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #b30000;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- SEARCH FORM -->


            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <h3>Admin Dashboard</h3>
                <span class="brand-text font-weight-light"></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="addbook.php" class="nav-link active">
                                <i class="nav-icon far fa-bookmark"></i>
                                <p>
                                    Add Book
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="deletebook.php" class="nav-link">
                                <i class="nav-icon fas fa-exclamation-circle"></i>
                                <p>
                                    Delete Book

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="updatebook.php" class="nav-link">
                                <i class="nav-icon fas fa-file-signature"></i>
                                <p>
                                    Update Book
                                </p>
                            </a>
                        </li>
       
                        <li class="nav-item">
                            <a href="home.php" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Log Out</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Add Book</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add Book</li>
                            </ol>
                        </div><!-- /.col -->
                    </div>
                    <hr><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card card-default">
<form  method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                
                                <div class="col-md-6">
                                    
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" name="title" id="title" />
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label>Publisher</label>
                                        <input class="form-control" name="pub" id="pub" />
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                       <textarea class="form-control" style="width: 100%; height: 280px;" name="des" id="des"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Cover Photo</label>
                                        <input class="btn btn-primary" type="file" name="img" id="img"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Book PDF</label>
                                        <input class="btn btn-primary" type="file" name="pdf" id="pdf"/>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success" type="submit">Submit</button>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Author(s)</label>
                                        <input class="form-control" name="author" id="author" />
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label>Publication Year</label>
                                        <input class="form-control" name="pubyear" id="pubyear" />
                                    </div>
                                    <div class="form-group">
                                        <label>Language</label>
                                        <input class="form-control" name="lan" id="lan" />
                                    </div>
                                    <div class="form-group">
                                        <label>ISBN</label>
                                        <input class="form-control" name="isbn" id="isbn" />
                                    </div>
                                    <div class="form-group">
                                        <label>Best Seller</label>
                                        <input class="form-control" name="bs" id="bs" />
                                    </div>
                                     <div class="form-group">
                                        <label>Category</label>
                                        <input class="form-control" name="cat" id="cat" />
                                    </div>
                                     <div class="form-group">
                                        <label>Rating</label>
                                        <input class="form-control" name="rate" id="rate" />
                                    </div>
                                    
                                    <!-- /.form-group -->
                                </div>
                                   
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                           
                            
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                         </form>
                    </div>
                </div>
            </section>


        </div>
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Books API
            </div>
            <!-- Default to the left -->
            <strong>UTM Assignment</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="dist/js/demo.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- PAGE SCRIPTS -->
    <script src="dist/js/pages/dashboard2.js"></script>
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
    $targetPath = 'img/' . $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], $targetPath);
    $targetPath1 = 'pdf/' . $_FILES['pdf']['name'];
    move_uploaded_file($_FILES['pdf']['tmp_name'], $targetPath1);

    $sql = "INSERT INTO books (book_title,authors,publisher,publication_year,description,language,isbn,best_seller,cover_photo,category,rating,pdf) VALUES ('" . $_POST['title'] . "','" . $_POST['author'] . "','" . $_POST['pub'] . "','" . $_POST['pubyear'] . "','" . $_POST['des'] . "','" . $_POST['lan'] . "','" . $_POST['isbn'] . "','" . $_POST['bs'] . "','http://localhost:8080/book_api/" . $targetPath . "','" . $_POST['cat'] . "','" . $_POST['rate'] . "','http://localhost:8080/book_api/" . $targetPath1 . "')";

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
