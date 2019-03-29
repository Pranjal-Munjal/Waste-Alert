<?php  
 $connect = mysqli_connect("localhost", "root", "", "waste_test");  

 ?>
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="grid.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        
        <title>Garbage | Dashboard</title>
    </head>
    <body style="background-image: linear-gradient(#11998e,#38ef7d); background-size: cover; height:80rem;">
        <div class="dash-header">
            <h1 class="dash-header-text">Dashboard</h1>
        </div>


         <nav>
                <div class="row">
                    <ul class="main-nav js--main-nav">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#Contact Us">Contact Us</a></li>
                        <li><a href="#About">About</a></li>
                        <li><a href="#options">options</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>

<div class="hor-line">&nbsp;</div>


        <div class="row">
            <div class="col span-1-of-4 left-panel ">
                <!-- <h3>LEFT- PANEL</h3> -->

                

                <div class="left-content">
                    <a href="http://localhost/waste_alert/report.php" class="left-items">File a Complaint</a>
                </div>
				<div class="left-content">
                    <a href="http://localhost/waste_alert/dashboard.html" class="left-items">Home</a>
                </div>
            </div> 
            </div> 



            <div class="col span-3-of-4 ">
        <div class="report-card">
        
        <div class="report-form-container">
            <h2 class="login-heading">COMPLAINTS</h2>
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th><th>Address</th><th>ID</th>  
                     </tr>  
                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  <td>'.$row['address'].'</td><td>'.$row['id'].'</td>
                          </tr>  
                     ';  
                }  
                ?>  
                </table>  

        </div>
        
    </div> 
            </div>
        </div>
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
<html>