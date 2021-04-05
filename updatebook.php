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
   
        /* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
        .rating:not(:checked)>input {
            position: absolute;
            top: -9999px;
            clip: rect(0, 0, 0, 0);
        }

        .rating:not(:checked)>label {
            float: right;
            width: 1em;
            padding: 0 .1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 200%;
            line-height: 1.2;
            color: #ddd;
            text-shadow: 1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0, 0, 0, .5);
        }

        .rating:not(:checked)>label:before {
            content: '★ ';
        }

        .rating>input:checked~label {
            color: #f70;
            text-shadow: 1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0, 0, 0, .5);
        }

        .rating:not(:checked)>label:hover,
        .rating:not(:checked)>label:hover~label {
            color: gold;
            text-shadow: 1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0, 0, 0, .5);
        }

        .rating>input:checked+label:hover,
        .rating>input:checked+label:hover~label,
        .rating>input:checked~label:hover,
        .rating>input:checked~label:hover~label,
        .rating>label:hover~input:checked~label {
            color: #ea0;
            text-shadow: 1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0, 0, 0, .5);
        }

        .rating>label:active {
            position: relative;
            top: 2px;
            left: 2px;
        }

        /* end of Lea's code */

        /*
 * Clearfix from html5 boilerplate
 */

        .clearfix:before,
        .clearfix:after {
            content: " ";
            /* 1 */
            display: table;
            /* 2 */
        }

        .clearfix:after {
            clear: both;
        }

        /*
 * For IE 6/7 only
 * Include this rule to trigger hasLayout and contain floats.
 */

        .clearfix {
            *zoom: 1;
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
                            <a href="addbook.php" class="nav-link">
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
                            <a href="updatebook.php" class="nav-link active">
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
                            <h1 class="m-0 text-dark">Update Book</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Update Book</li>
                            </ol>
                        </div><!-- /.col -->
                    </div>
                    <hr><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="col-lg-12">
                    <div class="row">

                        <?php
            $recordId1 = '';
            $title1 = '';
                  $author1 = '';
                  $publisher1 = '';
                  $year1 = '';
                  $description1 = '';
                  $language1 = '';
                  $isbn1 = '';
                  $seller1 = '';
                  $category1 = '';
                  $rating1 = '';
            
                DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'bookapi');
            // Create connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

            
        $records = $conn->query("SELECT * FROM books") or die($conn->error);

                        if ($records->num_rows>0){
                          $sr = 1;
                          while ($record = $records->fetch_object()) {
                              $recordId = $record->book_id;
                              $title = $record->book_title;
                              $author = $record->authors;
                              $publisher = $record->publisher;
                              $year = $record->publication_year;
                              $description = $record->description;
                              $language = $record->language;
                              $isbn = $record->isbn;
                              $seller = $record->best_seller;
                              $poster = $record->cover_photo;
                              $category = $record->category;
                              $rating = $record->rating;
                              
                            if ($rating == 0) {
                            $r0 = "display: none;";
                            $r2 = "";
                            $r3 = "";
                            $r4 = "";
                            $r5 = "";
                            $r1 = "";
                        } else if ($rating == 1) {
                            $r1 = "checked";
                            $r2 = "";
                            $r3 = "";
                            $r4 = "";
                            $r5 = "";
                            $r0 = "";
                        } else if ($rating == 2) {
                            $r2 = "checked";
                            $r0 = "";
                            $r3 = "";
                            $r4 = "";
                            $r5 = "";
                            $r1 = "";
                        } else if ($rating == 3) {
                            $r3 = "checked";
                            $r2 = "";
                            $r0 = "";
                            $r4 = "";
                            $r5 = "";
                            $r1 = "";
                        } else if ($rating == 4) {
                            $r4 = "checked";
                            $r2 = "";
                            $r3 = "";
                            $r0 = "";
                            $r5 = "";
                            $r1 = "";
                        } else if ($rating == 5) {
                            $r5 = "checked";
                            $r2 = "";
                            $r3 = "";
                            $r4 = "";
                            $r0 = "";
                            $r1 = "";
                        }
                                
                                echo "<div class='col-lg-6'><div class='card bg-light'><div class='card-header text-muted border-bottom-0'><b>".$author."</b></div><div class='card-body pt-0'><div class='row'><div class='col-7'><div style='overflow-x: hidden;height: 200px;'><h2 class='lead'><b>".$title."</b></h2><p class='text-muted text-sm' style='text-align: justify;'><b>Description: </b> ".$description." </p></div><br/><ul class='ml-4 mb-0 fa-ul text-muted'><li class='small'><b>Publisher: </b>".$publisher."</li><li class='small'><b>Publication Year: </b>".$year."</li><li class='small'><b>ISBN: </b>".$isbn."</li><li class='small'><b>Category: </b>".$category."</li></ul></div><div class='col-5 text-center'><img src='".$poster."' alt='' class='img-rounded img-fluid'><div style='" .$r0 ." float:left;'><form><fieldset class='rating' style='border:none;'><input type='radio' " . $r5 . " /><label for='star5' title='Rocks!'>5 stars</label><input type='radio' " . $r4 . " /><label for='star4' title='Pretty good' >4 stars</label><input type='radio' " . $r3 . " /><label for='star3' title='Meh'>3 stars</label><input type='radio' " . $r2 . " /><label for='star2' title='Kinda bad'>2 stars</label><input type='radio' " . $r1 . " /><label for='star1' title='Sucks big time' >1 star</label></fieldset><div class='clearfix'></div></form></div></div></div></div><div class='card-footer'><div class='text-left'><p><b>Best Seller: </b>".$seller."</p></div><div class='text-right'><a class='btn btn-warning' href='updatebook.php?edit=".$recordId."'>Update</a></div></div></div></div>";
                              
                                  
                                
                           
                              
                              $sr++;
                          }
                      }
            
            ?>

                        <?php
              if (isset($_GET['edit'])){
                $id = $_GET['edit'];
                 $records = $conn->query("SELECT * FROM books where book_id=".$id) or die($conn->error);

                        if ($records->num_rows>0){
                          $sr = 1;
                          while ($record = $records->fetch_object()) {
                              $recordId1 = $record->book_id;
                              $title1 = $record->book_title;
                              $author1 = $record->authors;
                              $publisher1 = $record->publisher;
                              $year1 = $record->publication_year;
                              $description1 = $record->description;
                              $language1 = $record->language;
                              $isbn1 = $record->isbn;
                              $seller1 = $record->best_seller;
                              $poster1 = $record->cover_photo;
                              $category1 = $record->category;
                              $rating1 = $record->rating;
                 $sr++;
                          }
                      }
              }

              
              ?>

                    </div>
                </div>
                <div class="container-fluid">
                    <div class="card card-default">
                        <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" value="<?php echo $title1 ?>" name="title" id="title" />
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Publisher</label>
                                            <input class="form-control" value="<?php echo $publisher1 ?>" name="pub" id="pub" />
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" value="<?php echo $description1 ?>" style="width: 100%; height: 280px;" name="des" id="des"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Cover Photo</label>
                                            <input class="btn btn-primary" type="file" name="img" id="img" />
                                        </div>
                                        <div class="form-group">
                                            <label>Book PDF</label>
                                            <input class="btn btn-primary" type="file" name="pdf" id="pdf" />
                                        </div>
                                        <input value="<?php echo $recordId1 ?>" name="id" id="id" style="display: none;" />
                                        <div class="form-group">
                                            <button class="btn btn-success" type="submit">Submit</button>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Author(s)</label>
                                            <input class="form-control" value="<?php echo $author1 ?>" name="author" id="author" />
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Publication Year</label>
                                            <input class="form-control" value="<?php echo $year1 ?>" name="pubyear" id="pubyear" />
                                        </div>
                                        <div class="form-group">
                                            <label>Language</label>
                                            <input class="form-control" value="<?php echo $language1 ?>" name="lan" id="lan" />
                                        </div>
                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input class="form-control" value="<?php echo $isbn1 ?>" name="isbn" id="isbn" />
                                        </div>
                                        <div class="form-group">
                                            <label>Best Seller</label>
                                            <input class="form-control" value="<?php echo $seller1 ?>" name="bs" id="bs" />
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <input class="form-control" value="<?php echo $category1 ?>" name="cat" id="cat" />
                                        </div>
                                        <div class="form-group">
                                            <label>Rating</label>
                                            <input class="form-control" value="<?php echo $rating1 ?>" name="rate" id="rate" />
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
    <script>
        document.getElementById("des").value = "<?php echo $description1 ?>";

    </script>
    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Create connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
    $targetPath = 'img/' . $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], $targetPath);
    $targetPath1 = 'pdf/' . $_FILES['pdf']['name'];
        move_uploaded_file($_FILES['pdf']['tmp_name'], $targetPath1);
  

$sql = "Update books set book_title='".$_POST['title']."', authors='".$_POST['author']."', publisher='".$_POST['pub']."', publication_year='".$_POST['pubyear']."', language='".$_POST['lan']."', isbn='".$_POST['isbn']."', best_seller='".$_POST['bs']."', cover_photo='http://localhost:8080/book_api/".$targetPath."', category='".$_POST['cat']."', rating='".$_POST['rate']."', pdf='http://localhost:8080/book_api/".$targetPath1."' where book_id=".$_POST['id'].";";

if (mysqli_query($conn, $sql)) {
  echo "Email sent successfully";
} else {
  echo "<script>alert('Error:<br>" . mysqli_error($conn)."')</script>";
}

mysqli_close($conn);
    
    
}
?>
</body>

</html>
