<?php
  require_once("../php/dbconfig.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="../index.html">
                        <img src=".././src/logo.png">
                    </a>
                </li>
                <li>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Alcohol info <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right" role="menu">
                    <li><a href="./alcohol.html#row-whisky">Whisky</li>
                    <li><a href="./alcohol.html#row-vodka">Vodka</a></li>
                    <li><a href="./alcohol.html#row-rum">Rum</a></li>
                    <li><a href="./alcohol.html#row-tequila">Tequila</a></li>
                    <li><a href="./alcohol.html#row-gin">Gin</a></li>
                  </ul>
                </li>
                <li>
                    <a href="./sellerInfo.html">Sellers</a>
                </li>
                <li>
                    <a href="./board.html">Boards</a>
                </li>
                <li>
                    <a href="./contact.html">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Board Page</h1>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>

    </script>

</body>

</html>
