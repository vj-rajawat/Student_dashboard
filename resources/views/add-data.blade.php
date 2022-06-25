<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
</head>
<body>
<form action="{{URL::to('/add-data')}}" class="col-md-4 mx-auto mt-4 border border-primary p-4" method="post" enctype="multipart/form-data">
  @csrf
<div>
    <label for="inputEmail4" class="form-label">Photo</label>
    <input type="file"  name="mypic" class="form-control mb-4" id="inputEmail4">
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text"  name="myname" class="form-control mb-4" id="inputEmail4">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Gender</label>
    <input type="text"  name="mygend" class="form-control mb-4" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">class</label>
    <input type="text"  name="myclass" class="form-control mb-4" id="inputAddress" placeholder="">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">section</label>
    <input type="text"  name="mysec" class="form-control mb-4" id="inputAddress2" placeholder="">
  </div>
  <div class="col-md-12">
    <label for="inputCity" class="form-label">Parent</label>
    <input type="text"  name="myprnt" class="form-control mb-4" id="inputCity">
  </div>
  <div class="col-md-12">
    <label for="inputState" class="form-label">Address</label>
    <input type="text"  name="myadd" class="form-control mb-4" id="inputstate">
  </div>
  <div class="col-md-12">
    <label for="inputZip" class="form-label">DOB</label>
    <input type="text"  name="mydob" class="form-control mb-4" id="inputZip">
  </div>
  <div class="col-12">
  <label for="inputZip" class="form-label">Phone</label>
    <input type="number" name="myphone" class="form-control mb-4" id="inputZip">
  </div>
  <div class="col-12">
  <label for="inputZip" class="form-label">E-mail</label>
    <input type="email" name="myemail" class="form-control mb-4" id="inputZip">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Add Detail</button>
  </div>
</form>
    
    
</body>
</html>


