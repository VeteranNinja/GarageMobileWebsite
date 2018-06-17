<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Display All Cars</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo2.png" alt="" width="187" height="61"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="gallery.html"> Car Gallery</a>
                    </li>
                    <li>
                        <a href="search.html">Car Search</a>
                    </li>
                    <li>
                        <a href="Calculator.html">Payment Calculator</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12"> 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Display All Cars</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo2.png" alt="" width="187" height="61"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="gallery.html"> Car Gallery</a>
                    </li>
                    <li>
                        <a href="search.html">Car Search</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Car Search
                    <small>look for a car in our database...</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <table <table width=50% border=0 table bgcolor="red" table align= "center">

  <tr>
     <td>
        <h3 align="center">Search  Car Details</h3>
    <p align="center">You  may search either by Make or model name</p>
    </td></tr>
    <tr><td align="center">
    <form  method="post" action="search_display.php?go"  id="searchform">
      <input  type="text" name="name">
      <input  type="submit" name="submit" value="Search">
    </form></td>
    </tr>
    </table>
    <br>
     

    <?php
error_reporting(E_ALL ^ E_DEPRECATED);
$dbserver="localhost";
$dbusername="root";
$dbuserpassword="";  
$connection = mysql_connect($dbserver,$dbusername,$dbuserpassword) or die("Couldn't connect to the database server.");

	mysql_select_db('garage');
	$sql = "SELECT * FROM vehicles";
	$result = MYSQL_QUERY($sql);
	
	?>
	
	
	  
      <table width=50% border="1" cellpadding="1" cellspacing="1" table align= "center">
      <tr>
      <th>Make</th>
      <th>Model</th>
      <th>Year</th>
      <th>Availability</th>
      <th>Fuel</th>
      <th>Price</th>
      
      <tr>
      
      <?php 
      



       while ($vehicles = mysql_fetch_array($result)) 
     { 
        echo "<tr>";
		echo "<td>".$vehicles["make"]."</td>";
		echo "<td>".$vehicles["model"]."</td>";
		echo "<td>".$vehicles["yr"]."</td>";
		echo "<td>".$vehicles["availability"]."</td>";
		echo "<td>".$vehicles["fuel"]."</td>";
		echo "<td>".$vehicles["price"]."</td>";
        echo  "</tr>"; 
     }

 
    ?>
</table>





        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy;  Najeeb Hassan 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

