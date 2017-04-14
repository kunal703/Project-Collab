<?php
  ini_set('mysql.connect_timeout', 300);
  ini_set('default_socket_timeout', 300);
  error_reporting(0);
?>
<html style="overflow-x: hidden">
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
  require "navbar.php";
  
  $usrName = $_SESSION['userSession'];
  
  if(isset($_POST['btncancel']))
  { 
      header("Location: home.php");
  }

  if(isset($_POST['btnsubmit']))
  {
      $pname = $_POST['projname'];
      $pdesc = $_POST['projdesc'];
      $pneed = $_POST['or1'];
      $pcontact = $_POST['contact'];

        $sqlquery = "insert into projects(username, pname, pdesc, posneeded, contact) values('$usrName', '$pname', '$pdesc', '$pneed', '$pcontact')";
        $result = $conn->query($sqlquery);
      
        $sqlquery = "select id from projects where username = '$usrName' and pname = '$pname'";
        $result = $conn->query($sqlquery);
        $row = mysqli_fetch_array($result);
        $id = $row[0];
      
        foreach($_POST['check_list'] as $selected)
        {
            $sqlquery = "insert into languages(id, Language) values('$id', '$selected')";
            $result = $conn->query($sqlquery);
        }

       echo '<div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Well done!</strong> Your project has been successfully added</a>.
        </div>';

  }
?>


  <form method="post" class="form-horizontal">
  <fieldset>
    <div class="form-group">
      <label for="projectName" class="col-lg-2 control-label">*Project Name:</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="projname" placeholder="Project Name" required>
      </div>
    </div>
    
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Project Description:</label>
      <div class="col-lg-8">
        <textarea class="form-control" rows="3" name="projdesc"></textarea>
        <span class="help-block">A short description about the project</span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Position Requirement:</label>
      <div class="col-lg-8">
        <div class="radio">
          <label>
            <input type="radio" name="or1" value="Front End Dev">
            Front End Dev
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="or1" value="Back End Dev">
            Back End Dev
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="or1" value="Full Stack Dev">
            Full Stack Dev
           </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Languages Used:</label>
      <div class="col-lg-8">
        <input type="checkbox" name="check_list[]" value="C/C++"><label><span style="margin-left:1em"/> C </label><br/>
        <input type="checkbox" name="check_list[]" value="C/C++"><label><span style="margin-left:1em"/> C++</label><br/>
        <input type="checkbox" name="check_list[]" value="Java"><label><span style="margin-left:1em"/> Java</label><br/>
        <input type="checkbox" name="check_list[]" value="PHP"><label><span style="margin-left:1em"/> PHP</label><br/>
        <input type="checkbox" name="check_list[]" value="Python"><label><span style="margin-left:1em"/> Python</label><br/>
        <input type="checkbox" name="check_list[]" value="Ruby"><label><span style="margin-left:1em"/> Ruby</label><br/>
        <input type="checkbox" name="check_list[]" value=".NET"><label><span style="margin-left:1em"/> .NET</label><br/>
        <input type="checkbox" name="check_list[]" value="C#"><label><span style="margin-left:1em"/> C#</label><br/>
        <input type="checkbox" name="check_list[]" value="Go"><label><span style="margin-left:1em"/> Go</label><br/>
        <input type="checkbox" name="check_list[]" value="CSS"><label><span style="margin-left:1em"/> CSS</label><br/>
        <input type="checkbox" name="check_list[]" value="JS"><label><span style="margin-left:1em"/> JS</label><br/>
      </div>
    </div>
  
    <div class="form-group">
      <label for="contact" class="col-lg-2 control-label">*Contact:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="contact" placeholder="Contact" required>
      </div>
    </div>
      <div class="form-group">
      <div class="col-lg-8 col-lg-offset-2">
        <button type="submit" class="btn btn-primary" name="btncancel" formnovalidate>Cancel</button>
        <button type="submit" class="btn btn-primary" name="btnsubmit">Submit</button>
      </div>
    </div>
  </fieldset>
  </form>

  
  </body>
</html>
