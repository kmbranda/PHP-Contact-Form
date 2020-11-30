<?php 
require_once 'controllers/authController.php';

?>

// Session ID code goes here.



<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">



<!--Code to send e-mail with entered information -->

<?php 
if(isset($_POST['submit'])){
    $to = ""; // Admin e-mail address goes inside the quotes
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " contacted us about:" . $_POST['contact_reason'] . "/n/n and wrote the following:/n:" . $_POST['comment'];
    $message2 = "Here is a copy of your message " . $first_name . " |  Reason for Contact:  " . $_POST['contact_reason'] . " |  Message: " . $_POST['comment'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>


    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="admin/bootstrap/css/bootstrap.min.css" />

    <!-- NavBar Styles-->
    <link href="navbarstyles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!-- Browser Logo -->
   <link rel="shortcut icon" href="admin/images/browserlogo.ico">

    <!-- DATA TABLE CSS -->
    <link href="admin/css/table.css" rel="stylesheet">

    <script type="text/javascript" src="admin/js/jquery.js"></script>    
    <script type="text/javascript" src="admin/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="admin/js/admin.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
        
  	<!-- Google Fonts call. Font Used Open Sans -->
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

  	<!-- DataTables Initialization -->
    <script type="text/javascript" src="admin/js/datatables/jquery.dataTables.js"></script>
  			<script type="text/javascript" charset="utf-8">
  			    $(document).ready(function () {
  			        $('#dt1').dataTable();
  			    });
	</script>

    
  </head>
  <body>


	  <!-- OPTIONS SECTION -->     
		<div class="col-sm-3 col-lg-3">
			<div class="dash-unit">

<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><i class="fa fa-users"></i> Contact Senior Penpals LI Team</legend>
  
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" value="<?php echo $user['first_name'] ?>" placeholder="First Name" class="form-control"  type="text" readonly>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" value="<?php echo $user['last_name'] ?>" placeholder="Last Name" class="form-control"  type="text" readonly>
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" value="<?php echo $_SESSION['email'] ?>" placeholder="E-Mail Address" class="form-control"  type="text" readonly>
    </div>
  </div>
</div>


<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Contact Reason</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="contact_reason" class="form-control selectpicker" >
      <option value=" ">Please select</option>
      <option>I would like to request to request a new penpal for a senior.</option>
      <option >One of my seniors no longer wishes or is no longer able to participate in the program.</option>
      <option>Other</option>
    </select>
  </div>
</div>
</div>

  


<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Additional Message</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="comment" placeholder="Message"></textarea>
  </div>
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" name="submit" value="Submit" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>



</fieldset>
</form>


</div>
    </div><!-- /.container -->



			</div>
		</div>



 
			

        <br><br><br><br>
	<!-- FOOTER -->	

      			<div class="col-sm-12 col-lg-12">

                        
      			<p><center><img src="admin/images/logot.png"" alt=""></p>
      			

      			</div>

      		</div><!-- /row -->

<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>

</body></html>