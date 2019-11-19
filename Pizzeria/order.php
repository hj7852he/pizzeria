<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "templates/header.php"; ?> 
          
    <main role="main">
<br>
<form>
  <div class="form-group">
    <label for="formGroupExampleInput">First Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Last Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Last Name">
  </div>

  <div class="form-group">
        <label for="exampleFormControlSelect1">Type of Pizza</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Specialty Pizza</option>
          <option>Make Your Own</option>
        </select>
      </div>

<div class="form-row align-items-center">
    <div class="col">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Type Of Crust</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose Crust...</option>
        <option value="1">Thin</option>
        <option value="2">Handmade Pan</option>
        <option value="3">Hand Tossed</option>
      </select>
    </div>


    <div class="col">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Type Of Sauce</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose Sauce...</option>
        <option value="1">Marinara</option>
        <option value="2">BBQ</option>
        <option value="3">Alfredo</option>
        <option value="3">Ranch</option>
      </select>
    </div>



        <div class="col">
          <label class="mr-sm-2" for="inlineFormCustomSelect">Amount of Cheese</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected>Choose Amount...</option>
            <option value="1">Small</option>
            <option value="2">Regular</option>
            <option value="3">Extra</option>
            <option value="3">Extra Extra</option>
          </select>
        </div>
   </div>
<br>
<p>Choose Meats..</p>
   <input type="checkbox" name="vehicle" value="meat"> Pepperoni<br>
   <input type="checkbox" name="vehicle" value="meat" checked> Sausage<br>
   <input type="checkbox" name="vehicle" value="meat"> Chicken<br>
   <input type="checkbox" name="vehicle" value="meat" checked> Bacon<br>

   <br>
<p>Choose Veggies..</p>
   <input type="checkbox" name="vehicle" value="veggies"> Pineapple<br>
   <input type="checkbox" name="vehicle" value="veggies" checked> Onion<br>
   <input type="checkbox" name="vehicle" value="veggies"> Jalapeno<br>
   <input type="checkbox" name="vehicle" value="veggies" checked> Green Peppers<br>
   <input type="checkbox" name="vehicle" value="veggies" checked> Spinach<br>
   
<br>
   <input class="btn btn-primary" type="submit" value="Submit">
</form>


        
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    
</body>
</html>