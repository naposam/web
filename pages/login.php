<?php include '../includes/header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
 body{
    background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
     background-size:cover;
      background-repeat: no-repeat;
      overflow-x: hidden;
      
}

input{
    border: 1px solid #D84B69!important;
}

    </style>
</head>
<body>
<div class="container" style="margin-top:150px;">
            
            <form method="post" action="login_backend.php" autocomplete="off"> 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="email">Email Address</label>
                    <div class="col-sm-4">
                        <input type="text" autofocus class="form-control rounded-pill" id="email" name="username" placeholder="username">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="password">Password</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="password" />
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-9 offset-sm-3">
                        <button type="submit" class="btn btn-primary rounded-pill" name="btnLogin">Login Now</button>
                    </div>
                </div>
                
</form>

            <div class="row">
                <div class="col-12" style="margin-top:20em">
                <?php include '../includes/footer.php'?>
                </div>
            </div>
        </div>

</body>
</html>