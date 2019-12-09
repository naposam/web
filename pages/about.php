<?php include '../includes/fixedNav.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>

 body{
    background-image: url("../images/backweb.png")!important;
    background-size:cover;
    background-repeat: no-repeat;
    overflow-x: hidden;

}
.about{
    border: 1px solid black;
    height: 150px;
    width:200px;
    margin-top: 5em;
    border-radius: 10px;
}
.profile{
    margin-top: 5em;
}


    </style>
</head>
<body>
    <div class="container">
        <div class="row ">
            <div class="col sm-4 about rounded-pill">
            <h1 class="text-center">About</h1>
            </div>
            <div class="col sm-3 profile">
                <img src="../images/woman.png" >
               <br><small>CO-FOUNDER </small>
               
            </div>
         <div class="col sm-3 profile">
                 <img src="../images/man.png">
                   <br><small>CO-FOUNDER </small>
              
            </div>
            <div class="col sm-3 profile">
                 <img src="../images/man.png">
                   <br><small>CO-FOUNDER </small>
              
            </div>


          
        </div>
       
        <div class="row">
                <div class="col-12">
                <?php include '../includes/footer.php'?>
                </div>
        </div>
    </div>
   
</body>
</html>