<?php  
 $connect = mysqli_connect("localhost", "root", "", "waste_test");  
 if(isset($_POST["insert"]))  
 {  
      $file = $_POST['id'];  
      $query = "DELETE FROM tbl_images WHERE id = '$file'";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Complaint Deleted from Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE HTML>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
	<title>Waste Alert</title>


</head>
<body>
	<header>
	<div class="left-content">
                    <a href="http://localhost/waste_alert/dashboard.html" class="left-items">Home</a>
                </div>
		
	<div class="card">
		
		<div class="form-container">
			<h2 class="login-heading">Verification</h2>
			<form method="post" enctype="multipart/form-data">
				Complaint ID: <br>
				<input type="text" name="id" class="form-element"><br><br>
				<input type="submit" name="insert" id="insert" value="Delete" class="btn btn-info" />  	
			</form>	
		</div>
		
	</div> 

	</header>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>
	
</body>
