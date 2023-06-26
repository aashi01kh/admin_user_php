<?php include("connection.php");
error_reporting(E_ERROR | E_PARSE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h2>Form</h2>
    <form action="#" method="POST">
      <div class="input_field">
        <label for="input1">Order Date</label>
        <input type="text" id="input1" name="input1" class="input">
      </div>
      
      <div class="input_field">
        <label for="input2">Company</label>
        <input type="text" id="input2" name="input2" class="input">
      </div>
      
      <div class="input_field">
        <label for="input3">Owner</label>
        <input type="text" id="input3" name="input3" class="input">
      </div>
      
      <div class="input_field">
        <label for="input4">Item</label>
        <input type="text" id="input4" name="input4" class="input">
      </div>
      
      <div class="input_field">
        <label for="input5">Quantity</label>
        <input type="text" id="input5" name="input5" class="input">
      </div>
      
      <div class="input_field">
        <label for="input6">Weight</label>
        <input type="text" id="input6" name="input6" class="input">
      </div>
      
      <div class="input_field">
        <label for="input7">Request for Shipment</label>
        <input type="text" id="input7" name="input7" class="input">
      </div>
      
      <div class="input_field">
        <label for="input8">Tracking Id</label>
        <input type="text" id="input8" name="input8" class="input">
      </div>
      
      <div class="input_field">
        <label for="input9">Shipment Size</label>
        <input type="text" id="input9" name="input9" class="input">
      </div>
      
      <div class="input_field">
        <label for="input10">Box Count</label>
        <input type="text" id="input10" name="input10" class="input">
      </div>
      
      <div class="input_field">
        <label for="input11">Specificaion</label>
        <input type="text" id="input11" name="input11" class="input">
      </div>
      
      <div class="input_field">
        <label for="input12">Checklist Quantity</label>
        <input type="text" id="input12" name="input12" class="input">
      </div>
      
      <div class="input_field">
        <input type="submit" value="Submit" class="btn" name="register">
      </div>
    </form>
  </div>
</body>
</html> 



<?php
    
    if($_POST['register']){
      $f1 = $_POST['input1'];
      $f2 = $_POST['input2'];
      $f3 = $_POST['input3'];
      $f4 = $_POST['input4'];
      $f5 = $_POST['input5'];
      $f6 = $_POST['input6'];
      $f7 = $_POST['input7'];
      $f8 = $_POST['input8'];
      $f9 = $_POST['input9'];
      $f10 = $_POST['input10'];
      $f11 = $_POST['input11'];
      $f12 = $_POST['input12'];
      $f13 = 1;

      if($f1 != "" && $f2 != "" && $f3 != "" && $f4 != "" && $f5 != "" && $f6 != "" ){

      $query = "INSERT INTO form VALUES('$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10','$f11','$f12','$f13')";
      $data = mysqli_query($conn,$query);

      if($data){
        echo "data stored";
      }
      else{
        echo "fail";
      }

    }
    else{
      echo "please fill the form";
    }

    }
?>