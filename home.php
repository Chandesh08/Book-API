<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Book API</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>

        /* width */
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

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Book API</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="apikey.php" class="nav-link">Get Your API Key</a>
                        </li>
                    </ul>
                </div>


                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="admin.php" role="button"><i class="fas fa-user-cog"></i> Admin Log In</a>
                    </li>
                </ul>

            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1> Book API</h1>
                            <h1> <small>The Open Book Database</small></h1>
                            <br />
                            <h5>The Book API is a RESTful web service to obtain book information, all content and images on the site are contributed and maintained by our users.</h5><br/>
                            <h5>Request Your API Keys, they are totally free!</h5><br/>
                            <p>This Webpage is intended for developers who want to write applications that can interact with the Book API. Book API has a mission to digitize the world's book content and make it more discoverable on the Web. Book API is a way to search and access that content, as well as to create and view personalization around that content.</p><br/>
                            <h5>You can request your API <a href="apikey.php">here</a> or on the top in the navbar.</h5>
                        </div><!-- /.col -->
                        <div class="col-sm-6">

                            <?php
            $xmlDoc2 = simplexml_load_file(
                "http://localhost:8080/book_api/index.php?key=tX12Xv&t=The%20Lying%20Life%20of%20Adults&f=xml"
            );
            foreach ($xmlDoc2->children() as $book) {
                // Get all Events
                foreach ($book->book_title as $title) {
                    // Get all description of earthquake
                    foreach ($book->authors as $author) {
                        foreach ($book->cover_photo as $poster) {
                            foreach ($book->publisher as $publisher) {
                            foreach ($book->publication_year as $year) {
                            foreach ($book->category as $category) {
                                foreach ($book->best_seller as $seller) {
                                foreach ($book->rating as $rating) {
                                foreach ($book->isbn as $isbn) {
                            
                            foreach ($book->description as $description) {
                                
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
                                
                                echo "<div class='card bg-light'><div class='card-header text-muted border-bottom-0'><b>".$author."</b></div><div class='card-body pt-0'><div class='row'><div class='col-7'><div style='overflow-x: hidden;height: 200px;'><h2 class='lead'><b>".$title."</b></h2><p class='text-muted text-sm' style='text-align: justify;'><b>Description: </b> ".$description." </p></div><br/><ul class='ml-4 mb-0 fa-ul text-muted'><li class='small'><b>Publisher: </b>".$publisher."</li><li class='small'><b>Publication Year: </b>".$year."</li><li class='small'><b>ISBN: </b>".$isbn."</li><li class='small'><b>Category: </b>".$category."</li></ul></div><div class='col-5 text-center'><img src='".$poster."' alt='' class='img-rounded img-fluid'><div style='" .$r0 ." float:left;'><form><fieldset class='rating' style='border:none;'><input type='radio' " . $r5 . " /><label for='star5' title='Rocks!'>5 stars</label><input type='radio' " . $r4 . " /><label for='star4' title='Pretty good' >4 stars</label><input type='radio' " . $r3 . " /><label for='star3' title='Meh'>3 stars</label><input type='radio' " . $r2 . " /><label for='star2' title='Kinda bad'>2 stars</label><input type='radio' " . $r1 . " /><label for='star1' title='Sucks big time' >1 star</label></fieldset><div class='clearfix'></div></form></div></div></div></div><div class='card-footer'><div class='text-left'><p><b>Best Seller: </b>".$seller."</p></div><div class='text-right'><p></p></div></div></div>";
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





                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Usage</h1>
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <h5 class="card-title">Send all data requests to:</h5>

                                    <p class="card-text">
                                        <input class="form-control" placeholder="http://localhost:8080/book_api/index.php?key=[yourkey]&" style="width: 100%; border:none;" disabled />
                                    </p>

                                </div>
                            </div><!-- /.card -->
                        </div>
                        <div class="col-lg-12" style="padding-top: 30px">
                            <h1>Parameters</h1>
                            <hr />
                            <div class="card-body table-responsive p-0">
                                <h4>By Title or Author or Publication Year or Category</h4>
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Parameters</th>
                                            <th>Required</th>
                                            <th>Valid Options</th>
                                            <th>Default Value</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>t</td>
                                            <td><span class="badge badge-primary">Optional*</span></td>
                                            <td></td>
                                            <td><span class="tag tag-success">&lt;empty&gt;</span></td>
                                            <td>Book title to search for.</td>
                                        </tr>
                                        <tr>
                                            <td>a</td>
                                            <td><span class="badge badge-primary">Optional*</span></td>
                                            <td></td>
                                            <td><span class="tag tag-warning">&lt;empty&gt;</span></td>
                                            <td>Book authors to search for.</td>
                                        </tr>
                                        <tr>
                                            <td>p</td>
                                            <td><span class="badge badge-primary">Optional*</span></td>
                                            <td></td>
                                            <td><span class="tag tag-primary">&lt;empty&gt;</span></td>
                                            <td>Year of publication.</td>
                                        </tr>
                                        <tr>
                                            <td>c</td>
                                            <td><span class="badge badge-primary">Optional*</span></td>
                                            <td></td>
                                            <td><span class="tag tag-danger">&lt;empty&gt;</span></td>
                                            <td>Book categories to search for.</td>
                                        </tr>
                                        <tr>
                                            <td>f</td>
                                            <td><span class="badge badge-secondary">No</span></td>
                                            <td>json, xml</td>
                                            <td><span class="tag tag-danger">json</span></td>
                                            <td>The data type to return.</td>
                                        </tr>
                                        <tr>
                                            <td>key</td>
                                            <td><span class="badge badge-primary">Yes</span></td>
                                            <td></td>
                                            <td><span class="tag tag-danger"></span></td>
                                            <td>Your API Key</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br />
                            <br />

                            <div class="card-body table-responsive p-0">
                                <h4>By search</h4>
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Parameters</th>
                                            <th>Required</th>
                                            <th>Valid Options</th>
                                            <th>Default Value</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>s</td>
                                            <td><span class="badge badge-primary">Optional*</span></td>
                                            <td></td>
                                            <td><span class="tag tag-success">&lt;empty&gt;</span></td>
                                            <td>Book title to search for.</td>
                                        </tr>
                                        <tr>
                                            <td>i</td>
                                            <td><span class="badge badge-primary">Optional*</span></td>
                                            <td></td>
                                            <td><span class="tag tag-warning">&lt;empty&gt;</span></td>
                                            <td>Book authors to search for.</td>
                                        </tr>
                                        <tr>
                                            <td>a</td>
                                            <td><span class="badge badge-secondary">No</span></td>
                                            <td></td>
                                            <td><span class="tag tag-warning">&lt;empty&gt;</span></td>
                                            <td>Book authors to search for.</td>
                                        </tr>
                                        <tr>
                                            <td>p</td>
                                            <td><span class="badge badge-secondary">No</span></td>
                                            <td></td>
                                            <td><span class="tag tag-primary">&lt;empty&gt;</span></td>
                                            <td>Year of publication.</td>
                                        </tr>
                                        <tr>
                                            <td>c</td>
                                            <td><span class="badge badge-secondary">No</span></td>
                                            <td></td>
                                            <td><span class="tag tag-danger">&lt;empty&gt;</span></td>
                                            <td>Book categories to search for.</td>
                                        </tr>
                                        <tr>
                                            <td>f</td>
                                            <td><span class="badge badge-secondary">No</span></td>
                                            <td>json, xml</td>
                                            <td><span class="tag tag-danger">json</span></td>
                                            <td>The data type to return.</td>
                                        </tr>
                                        <tr>
                                            <td>key</td>
                                            <td><span class="badge badge-primary">Yes</span></td>
                                            <td></td>
                                            <td><span class="tag tag-danger"></span></td>
                                            <td>Your API Key</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <!-- /.col-md-6 -->
                        <br />
                        <br />
                        <div class="col-lg-12" style="padding-top: 30px">
                            <h1>Example</h1>
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title m-0">By Title or Publication Year or Category</h5>
                                </div>
                                <div class="card-body">
                                    <span class="form-inline"><label>Title:&nbsp;<input id="title" class="form-control" /></label><label>&nbsp;&nbsp;Publication Year:&nbsp;<input id="py" class="form-control" /></label><label>&nbsp;&nbsp;Category:&nbsp; <input id="cat" class="form-control" /></label><label>&nbsp;&nbsp;Format:&nbsp;<select class="form-control" id="format">
                                                <option value="json">JSON</option>
                                                <option value="xml">XML</option>
                                            </select></label>&nbsp;&nbsp;&nbsp;&nbsp;</span><br /><button onclick="search()" class="btn btn-info">Search</button>
                                    <div class="container" style="padding-top: 15px;"></div>
                                    <div class="container" id="link" style="padding-top: 15px; display: none;">
                                        <p>Request:</p>
                                        <input style="width: 100%; padding:15px; border:none;" id="link1" placeholder="a" disabled />
                                    </div>
                                    <div class="container" style="padding-top: 15px;"></div>
                                    <div class="container" id="con" style="padding-top: 15px; display: none;">
                                        <p>Response:</p>
                                        <textarea style="width: 100%; border:none; height: 400px; padding:15px;" id="res" placeholder="a" disabled></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title m-0">By Author and Publication Year or Category</h5>
                                </div>
                                <div class="card-body">
                                    <span class="form-inline"><label>Author:&nbsp;<input id="author" class="form-control" /></label><label>&nbsp;&nbsp;Publication Year:&nbsp;<input id="year1" class="form-control" /></label><label>&nbsp;&nbsp;Category:&nbsp; <input id="cat1" class="form-control" /></label><label>&nbsp;&nbsp;Format:&nbsp;<select id="format1" class="form-control">
                                                <option value="json">JSON</option>
                                                <option value="xml">XML</option>
                                            </select></label>&nbsp;&nbsp;&nbsp;&nbsp;</span><br /><button onclick="search1()" class="btn btn-info">Search</button>
                                    <div class="container" style="padding-top: 15px;"></div>
                                    <div class="container" id="link2" style="padding-top: 15px; display: none;">
                                        <p>Request:</p>
                                        <input style="width: 100%; padding:15px; border:none;" id="link3" placeholder="a" disabled />
                                    </div>
                                    <div class="container" style="padding-top: 15px;"></div>
                                    <div class="container" id="con1" style="padding-top: 15px; display: none;">
                                        <p>Response:</p>
                                        <textarea style="width: 100%;border:none; height: 400px; padding:15px;" id="res1" placeholder="a" disabled></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->

        <!-- Main Footer -->
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
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script>
        function search() {
            if (document.getElementById("title").value == "") {
                var title = "";
            } else {
                var title = "&s=" + document.getElementById("title").value;
            }
            if (document.getElementById("cat").value == "") {
                var category = "";
            } else {
                var category = "&c=" + document.getElementById("cat").value;
            }
            if (document.getElementById("py").value == "") {
                var year = "";
            } else {
                var year = "&p=" + document.getElementById("py").value;
            }

            var format = "&f=" + document.getElementById("format").value;

            var xmlhttp, myObj, x, j, txt = "";
            xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    //document.getElementById("easyPaginate").innerHTML += txt;
                    $('#res').attr('placeholder', this.responseText);
                    $('#con').css({
                        display: 'initial'

                    });
                    var link = "http://localhost:8080/book_api/index.php?key=[your key]" + title + category + year + format;
                    $('#link1').attr('placeholder', link);
                    $('#link').css({
                        display: 'initial'

                    });
                }
            };
            xmlhttp.open("GET", "http://localhost:8080/book_api/index.php?key=tX12Xv" + title + category + year + format, true);
            xmlhttp.send();
        }
    </script>


    <script>
        function search1() {
            if (document.getElementById("author").value == "") {
                var author = "";
            } else {
                var author = "&i=" + document.getElementById("author").value;
            }
            if (document.getElementById("cat1").value == "") {
                var category = "";
            } else {
                var category = "&c=" + document.getElementById("cat1").value;
            }
            if (document.getElementById("year1").value == "") {
                var year = "";
            } else {
                var year = "&p=" + document.getElementById("year1").value;
            }

            var format = "&f=" + document.getElementById("format1").value;

            var xmlhttp, myObj, x, j, txt = "";
            xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    //document.getElementById("easyPaginate").innerHTML += txt;
                    $('#res1').attr('placeholder', this.responseText);
                    $('#con1').css({
                        display: 'initial'

                    });
                    var link = "http://localhost:8080/book_api/index.php?key=[your key]" + author + category + year + format;
                    $('#link3').attr('placeholder', link);
                    $('#link2').css({
                        display: 'initial'

                    });
                }
            };
            xmlhttp.open("GET", "http://localhost:8080/book_api/index.php?key=tX12Xv" + author + category + year + format, true);
            xmlhttp.send();
        }
    </script>
</body>

</html>
