<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Registation System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron text-center">
    <h2>Student Registation</h2>
  </div>
  <form class="form-horizontal" action="model/store.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter your full name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
   <!--  <div class="form-group">
      <label class="control-label col-sm-2" for="number">Mobile:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="number" placeholder="Enter Mobile Number" name="number">
      </div>
    </div> -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="date">DOB:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="date" placeholder="xx xx xxxx" name="date">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="number">Gender:</label>
      <div class="col-sm-10">          
        <div class="radio-inline">
          <label><input type="radio" name="gender" value="Male" >Male</label>
        </div>
        <div class="radio-inline">
          <label><input type="radio" name="gender" value="Female">Female</label>
        </div>
       
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="number">City:</label>
      <div class="col-sm-10">          
        
          <select class="form-control" id="city" name="city">
            <option value="Chittagong">Chittagong</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Khulna">Khulna</option>
          </select>
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
