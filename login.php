<?php

$con = mysqli_connect("localhost","root","","image");

if(isset($_post['upload'])){
   
   $file = $_FILES['image']['image'];
    $about    = $_POST['about'];
    $experience   = $_POST['experience'];
    $education   = $_POST['education'];
    $skill  = $_POST['skill'];
    
    //$query = "INSERT INTO upload(image) VALUES ('$file')";
    //$res = mysqli_query($con,$query);
    
    //if ($res) {

        //move_upload_files($_FILES['image']['tmp_name'],"$files");
   // }

    $sql = "INSERT INTO upload( about, experience, education, skill)VALUES ('{$about}', '{$experience}', '{$education}', '{$skill}')";

 if ($con->query($sql) === TRUE) {
      // echo "<script> window.location = 'users.php'</script>";
    }else{
      echo "Error " . $con->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mamadou Barry</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
   
    <body id="page-top">


        
        <div class="container">
            <div class="clo-md-12">
              <div class="12">
                <div class="col-md-12">
                   
                    <div>
                   <form class="my-8" method="POST" enctype="multipart/form-data">
                      
                         <div class="col-md-12">
                            <label>About</label>
                           <textarea name="content" class="form-control " rows="8"></textarea>
                        </div>
                      
                      <div class="col-md-12">
                            <label>Experience</label>
                           <textarea name="content" class="form-control " rows="8"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label>Education</label>
                           <textarea name="content" class="form-control " rows="8"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label>Skills</label>
                           <textarea name="content" class="form-control " rows="8"></textarea>
                        </div> <br>
                       
                       <input type="submit" name="Create" value="Create" class="btn btn-success my-3">
                   </form>
                </div>
              
                <div class="col-md-6">
                   

                   <?php
                    
                    $sel = "SELECT * FROM upload";
                    $que = mysqli_query($con,$sel);

                    $output = "";
                    if (mysqli_num_rows($que)<0);{

                        $output .= "<h3 class='text-center'> No image uploaded</h3>";
                    }
                     while ($row = mysqli_fetch_array($que)) {

                       
                        $output .= "<img src='".$row['image']."'class='my-3'style='width:400px;height:400px;'>";
                         
                    
                       }
                   ?>
                   
                </div> 
              </div>  
            </div>
             </div>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Mr.Mamadou Barry</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/Barry.jpg1.jpg" alt="" /></span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Dashboard</a></li>
                   
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Login</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content--></div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        
    </body>
</html>
