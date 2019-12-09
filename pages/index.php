<?php include '../includes/header.php';?>
<!DOCTYPE html>

<head>
<title></title>
<style>
body{
    /* background-image: url("../images/img2.jpg")!important; */
    background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
    background-size: contain;
    background-repeat: no-repeat;
    overflow-x: hidden;
      margin: 0;
    		padding: 0;
    		display: flex;
    		justify-content: center;
    		align-items: center;
   
}
input{
  border-color:red!important;
}
.loader{
    		position: relative;
    		width:300px;
    		height: 300px;
    		transform-style: preserve-3d;
    		transform:perspective(500px) rotateX(60deg);



    	}
    	.loader span{
    		position: absolute;
    		display: block;
    		border: 2px solid #D84B69;
    		border-radius: 50%;
    		box-sizing: border-box;
    		transform: translateZ(100px);
    		animation: animate 3s ease-in-out infinite
    	}
    	@keyframes animate{
    		0%,100%{
    			transform: translateZ(-100px);
    		}
    		50%{
    			transform: translateZ(100px);
    		}
    	}
    	.loader span:nth-child(1){
    		top:0;
    		left:0;
    		bottom: 0;
    		right: 0;
    		animation-delay: 1.4s;
    	}
    	.loader span:nth-child(2){
    		top:10px;
    		left:10px;
    		bottom: 10px;
    		right: 10px;
    		animation-delay: 1.3s;
    	}
    	.loader span:nth-child(3){
    		top:20px;
    		left:20px;
    		bottom: 20px;
    		right: 20px;
    		animation-delay: 1.2s;
    	}
    	.loader span:nth-child(4){
    		top:30px;
    		left:30px;
    		bottom: 30px;
    		right: 30px;
    		animation-delay: 1.1s;
    	}
    	.loader span:nth-child(5){
    		top:40px;
    		left:40px;
    		bottom: 40px;
    		right: 40px;
    		animation-delay: 1s;

    	}
    	.loader span:nth-child(6){
    		top:50px;
    		left:50px;
    		bottom: 50px;
    		right: 50px;
    		animation-delay: 0.9s;
    		border:2px solid red;
    	}
    	.loader span:nth-child(7){
    		top:60px;
    		left:60px;
    		bottom: 60px;
    		right: 60px;
    		animation-delay: 0.8s;
    	}
    	.loader span:nth-child(8){
    		top:70px;
    		left:70px;
    		bottom: 70px;
    		right: 70px;
    		animation-delay: 0.7s;
    		border:2px solid green;
    	}
    	.loader span:nth-child(9){
    		top:80px;
    		left:80px;
    		bottom: 80px;
    		right: 80px;
    		animation-delay: 0.6s;
    		border:2px solid yellow;
    	}
    	.loader span:nth-child(10){
    		top:90px;
    		left:90px;
    		bottom: 90px;
    		right: 90px;
    		animation-delay: 0.5s;
    	}
    	.loader span:nth-child(11){
    		top:100px;
    		left:100px;
    		bottom: 100px;
    		right: 100px;
    		animation-delay: 0.4s;
    	}
    	.loader span:nth-child(12){
    		top:110px;
    		left:110px;
    		bottom: 110px;
    		right: 110px;
    		animation-delay: 0.3s;
    	}
    	.loader span:nth-child(13){
    		top:120px;
    		left:120px;
    		bottom: 120px;
    		right: 120px;
    		animation-delay: 0.2s;
    	}
    	.loader span:nth-child(14){
    		top:130px;
    		left:130px;
    		bottom: 130px;
    		right: 130px;
    		animation-delay: 0.1s;
    	}
    	.loader span:nth-child(15){
    		top:140px;
    		left:140px;
    		bottom: 140px;
    		right: 140px;
    		animation-delay: 0s;
    		border:2px solid #000;
    	}

</style> 
<script type="text/javascript">
   $(window).on('load',function(){
    var delayMs = 1500; // delay in milliseconds

    setTimeout(function(){
        $('#myModal').modal('show');
    }, delayMs);
});
</script>
</head>
<body>
<div class="container-fluid">
  <div class="row">
  
    <div class="col-sm-8">
    
    </div>
   
    <div class="col-sm-4 bg">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/bg.jpg" class="d-block w-100" alt="..." height='400' width='300'>
    </div>
    <div class="carousel-item">
      <img src="../images/blood.jpg" class="d-block w-100" alt="..." height='400' width='300'>
    </div>
    <div class="carousel-item">
      <img src="../images/new.jpg" class="d-block w-100" alt="..." height='400' width='300'>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <!-- modal -->
  <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">SUBSCRIBE</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type='text' autofocus class='form-control' placeholder="Type you email address here" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mx-auto" >SAVE</button>
                </div>
            </div>
      </div>
</div>
   
    </div>
  </div>
  <div class="row">
      <div class="col-sm-4">
      <img src='../images/log.png' alt='bg image' height='300px'/>
      </div>
      <form action="login_backend.php" class='form' autocomplete='off' method='post'>
      <div class="form-group row">
                   
                    <div class="col-sm-12">
                        <input type="text" autofocus class="form-control rounded-pill" id="email" name="username" placeholder="username">
                    </div>
                </div>
                
                <div class="form-group row">
                   
                    <div class="col-sm-12">
                        <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="password" />
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-9 offset-sm-3">
                        <button type="submit" class="btn btn-primary rounded-pill" name="btnLogin">Login Now</button>
                    </div>
                </div>
      </form>
      <div class="col-sm-4">
      <div class="loader">
      <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>
      </div>
  </div>
 
  </div>
</div>
</body>
</html>