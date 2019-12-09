<?php include '../includes/fixedNav.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
    background-image: url("../images/backweb.png")!important;
    background-size: contain;
    background-repeat: no-repeat;
    overflow-x: hidden;
}

.tb{
    margin-top: 5em;
}


    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col sm-6 tb">
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">TEST</th>
      <th scope="col">RESULT</th>
      <th scope="col">DATE</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Malaria</td>
      <td>Negative</td>
      <td>20-10-2019</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Malaria</td>
      <td>Negative</td>
      <td>20-10-2019</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Malaria</td>
      <td>Positive</td>
      <td>20-10-2019</td>
    </tr>
  </tbody>
</table>

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