<?php include '../includes/header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
        body{
    /* background-image: url("../images/backweb.png")!important; */
    background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
    background-size: contain;
    background-repeat: no-repeat;
    overflow-x: hidden;
}
.form{
   margin-left: 10em;
}



    </style>
</head>
<body>
    <div class="container">
        <br><br><br><br>
        <form class="form" method="post" action="sign_up.ini.php" autocomplete="off">
            <div class="col-md-6 form-group">
                <input type="text" name="" class="form-control rounded-pill" placeholder="First Name" autofocus />
            </div>
            <div class="col-md-6 form-group">
                <input type="text" name="" class="form-control rounded-pill" placeholder="Last Name" />
            </div>
            <div class="col-md-6 form-group">
                <input type="text" name="" class="form-control rounded-pill" placeholder="Email Address" />
            </div>
            <div class="col-md-6 form-group">
                <input type="text" name="" class="form-control rounded-pill" placeholder="Mobile Number" />
            </div>
            <div class="col-md-6 form-group">
                <input type="text" name="" class="form-control rounded-pill" placeholder="Address" />
            </div>
            <div class="col-md-6 form-group">
                <button class="btn btn-primary rounded-pill" type="submit" name="btnSignUp" >Sign Up</button>
            </div>
        </form>
        <div class="row">
                <div class="col-12" style="margin-top:10em">
                <?php include '../includes/footer.php'?>
                </div>
            </div>
    </div>
   
</body>
</html>