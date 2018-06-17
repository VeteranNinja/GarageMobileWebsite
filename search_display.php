<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search All Cars</title>

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
                        <a href="gallery.html">Gallery</a>
                    </li>
                    <li>
                        <a href="search.html">Car Search</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
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

    <title>1 Col Portfolio - Start Bootstrap Template</title>

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
                        <a href="gallery.html">Gallery</a>
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
           
            <br>
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
    <hr>
    <br>
        <style  type="text/css" media="screen">
ul  li{
  list-style-type:none;
}
</style>

<?php
//does a check to see if the inputs are valid and if they match any of the make or models in the database.
error_reporting(E_ALL ^ E_DEPRECATED);
  if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){
  $name=$_POST['name'];
  if(isset($_GET['go']))
  
  
  //connect  to the database
$dbserver="localhost";
$dbusername="root";
$dbuserpassword="";  
$connection = mysql_connect($dbserver,$dbusername,$dbuserpassword) or die ('I cannot connect to the database  because: ' . mysql_error());

  //-select  the database to use
  $mydb=mysql_select_db("garage");
  
  //-query  the database table
  $sql="SELECT  increment, make, model, yr, availability, fuel, image, price FROM vehicles WHERE make LIKE '%" . $name .  "%' OR model LIKE '%" . $name ."%'";
  
  //-run  the query against the mysql query function
  $result=mysql_query($sql);
  
  //-create  while loop and loop through result set
  while($row=mysql_fetch_array($result)){
          $increment  =$row['increment'];
          $make =$row['make'];
          $model =$row['model'];
		  $yr  =$row['yr'];
          $availability =$row['availability'];
		  $fuel = $row['fuel'];
		  $image =$row['image'];
		  $price =$row['price'];
		  
  //-display the result of the array which shows an overview of all cars that match the query and displays a link for more information
  echo "<ul>\n";
  echo "<li>" ."<h3 align='center'>". "<a  href=\"search_display.php?increment=$increment\">"   .$make . " " . $model .  "</a></li>\n";
  echo "<dt>". "<h4 align='center'>" . "<strong>". "Price = £" . $price . "</strong>". "</dt>". "<dd>" . 
     '<img class="img-responsive" src="data:image/jpeg;base64,'.
      base64_encode($row['image']).
      '" width="400" height="300">' . "</dd>";
 echo "<br>";
 echo "<a  class='btn btn-primary' align='right' href=\"search_display.php?increment=$increment\">"  . "View Car Details" . '<span class="glyphicon glyphicon-chevron-right">' . "</span>" ."</a>";
  echo "<hr>";
  echo "</ul>";
  }
  }
  else{
  echo  "<p>Please enter a search query</p>";
  }
  }
  }
  if(isset($_GET['increment'])){
$vehicleincrement=$_GET['increment'];

//connect  to the database
$dbserver="localhost";
$dbusername="root";
$dbuserpassword="";  
$connection = mysql_connect($dbserver,$dbusername,$dbuserpassword) or die ('I cannot connect to the database  because: ' . mysql_error());

//-select  the database to use
$mydb=mysql_select_db("garage");

//-query  the database table
$sql="SELECT  * FROM vehicles WHERE increment=" . $vehicleincrement;

//-run  the query against the mysql query function
$result=mysql_query($sql);

//-create  while loop and loop through result set
while($row=mysql_fetch_array($result)){
			$increment  =$row['increment'];
          $make =$row['make'];
          $model =$row['model'];
		  $yr  =$row['yr'];
          $availability =$row['availability'];
		  $fuel =$row['fuel'];
		  $image =$row['image'];
		  $price =$row['price'];
		  
//-display the full results of the specific car that the user has chosen from the array that has been previously displayed

echo  "<ul>\n";
echo '<table width=50% border="1" cellpadding="1" cellspacing="1" table align= "center" table style="background-color:yellow" bordercolor="red" >';
echo "<tr>";
echo "<dt>" . "<h4 align='center'>"."<strong>".  $make . " " . $model ."</strong>".  "</dt>". "<dd>" . '<p = align="center">' .
     '<img class="img-responsive" src="data:image/jpeg;base64,'.
      base64_encode($row['image']).
      '" width="400" height="300">' . "</dd>";
echo "<br>";
echo "<tr>";
echo  "<li>" ."<th>" . "<p align='center'>" .'Car Make = ' . '<font color="red">' .'<br>'. $make . " " . $model .  "</li>\n"  . "</th>";
echo "</tr>";


echo "<tr>";
echo  "<li>" ."<th>" .  "<p align='center'>" .'Availability to buy or for lease= ' .'<br>'. '<font color="red">'. $availability . "</li>\n"  . "</th>";
echo "</tr>";

echo "<tr>";
echo  "<li>" ."<th>" . "<p align='center'>" . 'Year= '. '<font color="red">'.'<br>'. $yr . "</li>\n"  . "</th>";
echo "</tr>";

echo "<tr>";
echo  "<li>" ."<th>" . "<p align='center'>" . 'Fuel Type= '. '<font color="red">'.'<br>'. $fuel . "</li>\n"  . "</th>";
echo "</tr>";

echo "<tr>";
echo  "<li>" ."<th>" .  "<p align='center'>" .'Price=' . '<font color="red">'.'<br>'. '£' . $price . "</li>\n"  . "</th>";

echo  "</ul>";
echo "</tr>";
echo "<table>";
	}
	
}
?>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Najeeb Hassan 2015</p>
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

