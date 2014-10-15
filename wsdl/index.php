<?php
//memulai session 
session_start();
//cek adanya session 
if(ISSET($_SESSION['username'])){
//jika tidak ada session
} else
header("location:login.php");
?>
<link href="asset/css/bootstrap.css" rel="stylesheet"
type="text/css">
<script type="text/javascript" src="asset/js/bootstrap-dropdown.js"> </script>
<body>
<div class="navbar navbar fixed-top">
<div class="navbar-inner">
<div class="row">
<div class="span2">
<a class="brand" href="#">&nbsp; &nbsp E-Learning</a>
</div>
<div class="nav-collapse">
<ul class="nav">
<li class="divider"> </li>
<li class="dropdownoffset7">
<a  href="#"  class="dropdown-toggle"
data- toggle="dropdown"></i><?php echo "Anda login sebagai  ";
echo $_SESSION['username']; ?><b class="caret"></b></a>
</li>
</ul>
</div>
</div>
</div>
</div>
<br /> <br /> <br /> <br /> <br /> <br />
<div class="container">
</div>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">&nbsp; &nbsp E-Learning</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
			<li class="dropdownoffset7">
				<a  href="#"  class="dropdown-toggle" data- toggle="dropdown"></i><?php echo "Anda login sebagai  ";echo $_SESSION['username'];?><span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li class="divider"></li>
					<li class="dropdown-header">Nav header</li>
					<li><a href="#">Separated link</a></li>
					<li><a href="#">One more separated link</a></li>
				</ul>
			</li>
            <li><a  href="logout.php" role="button"><i  class="icon-off">
</i>&nbsp;  &nbsp;
&nbsp;Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Selamat Datang</h1>
        <p> di ELISA Universitas GadjahMada</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>