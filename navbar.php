<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Project Collaboration</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>


<body>

<?php
session_start();
require "dbconn.php";

$usrName = $_SESSION['userSession'];



if(isset($_POST['btnlogout']))
{
  session_destroy();
  header("Location: index.php");
}

if(isset($_POST['bnsubmit']))
{
    $seat = $_POST['seartext'];
    $_SESSION['userSearch'] = $seat;
    header("Location: searchresult.php");
}

?>

	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php">Project Collaborator  |</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="myaccount.php">My Projects </a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="upload.php">Upload Project </a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="recent.php">Recent Projects </a></li>
      </ul>
      <form method="post" class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search by language.." name="seartext">
        </div>
        <button type="submit" class="btn btn-default" name="bnsubmit">Submit</button>
      </form>
      <form method="post" class="navbar-form navbar-right">
      <span style="margin-top:0.2em" class="nav navbar-nav navbar-right">
        <button type="submit" class="btn btn-secondary" name="btnlogout">Logout</button></span>
      </form>
    </div>
  </div>
</nav>
</body>
</html>
