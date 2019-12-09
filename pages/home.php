<?php include '../includes/fixedNav.php';?>
<!DOCTYPE html>
<html>

<head>
    <title>Malaria Detection Model</title>
    

</head>

<body>
    <main>
    	<div class="jumbotron text-center">
        	<h1 class='h1'>Malaria Detection App</h1>
    	</div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="progress progress-bar progress-bar-striped progress-bar-animated mb-2" style="display:none">
                        Loading Model
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <select id="model-selector" class="custom-select">
                        <option selected disabled>Select Model</option>
                        <option>Malaria</option>
                        
                    </select>
                </div>
                <div class="col-8">
                    <input id="image-selector" class="form-control border-0" type="file">
                </div>
                <div class="col-1">
                    <button id="predict-button" class="btn btn-light float-right">Predict</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 pred">
                    <h2 class="ml-3 ">Predictions</h2>
                    <ol id="prediction-list"></ol>
                </div>
                <div class="col-6 imagedis">
                    <h2 class="ml-3">Image</h2>
                    <img id="selected-image" class="ml-3" src="" />
                </div>
            </div>
            <hr>
            <div class="row">
                <h2></h2>
            </div>
            <div class="row">
                <div class="col-6">
                    <h2 class="ml-3"></h2>
                    <p>
                    	
                    	
					<p>
                </div>
                <div class="col-6">
                    <h2 class="ml-3"></h2>
                    <ul>
                        

                        	

                    </ul>
                </div>
            </div>
            

            <div class="row">
                <div class="col-12">
                <?php include '../includes/footer.php'?>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@0.13.3/dist/tf.min.js"></script>
    <script src="malaria_classes.js"></script>
    <script src="predict.js"></script>

</body>

</html>