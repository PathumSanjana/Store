<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .container {
      max-width: 500px;
      margin: 50px auto;
    }
  </style>
</head>
<body>
  
  <div class="container">
    <div>
      @if(Session::has('message'))
         <p>{{Session::get('message')}}</p>
      @endif
    </div>
    <h2 class="mb-4 text-center">Student Registration Form</h2>
    <form method="post" action="{{route('student.save')}}">
      @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="stuName" placeholder="Enter your name">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="stuEmail" placeholder="Enter your email">
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="stuAddress" placeholder="Enter your address">
      </div>
      <div class="form-group">
        <label for="birthday">Birthday:</label>
        <input type="date" class="form-control" id="birthday" name="stuDob">
      </div>
      <div class="text-center"> 
        <button type="submit" class="btn btn-primary">Add Student</button>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
