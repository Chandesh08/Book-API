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
                        <a href="#" class="d-block">Chandesh</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link active">
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
                            <h1 class="m-0 text-dark">Top Trending</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
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

                </div>

                <div class="row">

                    <?php
$xmlDoc2 = simplexml_load_file("http://localhost:8080/book_api/index.php?key=tX12Xv&p=2020&f=xml");
foreach ($xmlDoc2->children() as $book)
{
    // Get all Events
    foreach ($book->book_title as $title)
    {
        // Get all description of earthquake
        foreach ($book->authors as $author)
        {
            foreach ($book->cover_photo as $poster)
            {
                foreach ($book->publisher as $publisher)
                {
                    foreach ($book->publication_year as $year)
                    {
                        foreach ($book->category as $category)
                        {
                            foreach ($book->best_seller as $seller)
                            {
                                foreach ($book->rating as $rating)
                                {
                                    foreach ($book->isbn as $isbn)
                                    {

                                        foreach ($book->description as $description)
                                        {

                                            if ($rating == 0)
                                            {
                                                $r0 = "display: none;";
                                                $r2 = "";
                                                $r3 = "";
                                                $r4 = "";
                                                $r5 = "";
                                                $r1 = "";
                                            }
                                            else if ($rating == 1)
                                            {
                                                $r1 = "checked";
                                                $r2 = "";
                                                $r3 = "";
                                                $r4 = "";
                                                $r5 = "";
                                                $r0 = "";
                                            }
                                            else if ($rating == 2)
                                            {
                                                $r2 = "checked";
                                                $r0 = "";
                                                $r3 = "";
                                                $r4 = "";
                                                $r5 = "";
                                                $r1 = "";
                                            }
                                            else if ($rating == 3)
                                            {
                                                $r3 = "checked";
                                                $r2 = "";
                                                $r0 = "";
                                                $r4 = "";
                                                $r5 = "";
                                                $r1 = "";
                                            }
                                            else if ($rating == 4)
                                            {
                                                $r4 = "checked";
                                                $r2 = "";
                                                $r3 = "";
                                                $r0 = "";
                                                $r5 = "";
                                                $r1 = "";
                                            }
                                            else if ($rating == 5)
                                            {
                                                $r5 = "checked";
                                                $r2 = "";
                                                $r3 = "";
                                                $r4 = "";
                                                $r0 = "";
                                                $r1 = "";
                                            }

                                            echo "<div class='col-lg-6'><div class='card bg-light'><div class='card-header text-muted border-bottom-0'><b>" . $author . "</b></div><div class='card-body pt-0'><div class='row'><div class='col-7'><div style='overflow-x: hidden;height: 200px;'><h2 class='lead'><b>" . $title . "</b></h2><p class='text-muted text-sm' style='text-align: justify;'><b>Description: </b> " . $description . " </p></div><br/><ul class='ml-4 mb-0 fa-ul text-muted'><li class='small'><b>Publisher: </b>" . $publisher . "</li><li class='small'><b>Publication Year: </b>" . $year . "</li><li class='small'><b>ISBN: </b>" . $isbn . "</li><li class='small'><b>Category: </b>" . $category . "</li></ul></div><div class='col-5 text-center'><img src='" . $poster . "' alt='' class='img-rounded img-fluid'><div style='" . $r0 . " float:left;'><form><fieldset class='rating' style='border:none;'><input type='radio' " . $r5 . " /><label for='star5' title='Rocks!'>5 stars</label><input type='radio' " . $r4 . " /><label for='star4' title='Pretty good' >4 stars</label><input type='radio' " . $r3 . " /><label for='star3' title='Meh'>3 stars</label><input type='radio' " . $r2 . " /><label for='star2' title='Kinda bad'>2 stars</label><input type='radio' " . $r1 . " /><label for='star1' title='Sucks big time' >1 star</label></fieldset><div class='clearfix'></div></form></div></div></div></div><div class='card-footer'><div class='text-left'><p><b>Best Seller: </b>" . $seller . "</p></div><div class='text-right'><p></p></div></div></div></div>";
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
?>

                    <!-- ./col -->
                </div>
                <hr>
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
</body>

</html>
