<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

    @if (old('name') !== null)
    <div class="alert alert-dismissible alert-danger " role="alert">
        Data can not be saved
      </div>
    @endif
  <h2>Add a student</h2>
  <form action="insertstudent" method="post">
    @csrf
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name" value="{{old('name')}}">
    </div>
    <div class="form-group">
      <label for="pwd">Reg #:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter reg number" name="reg" value="{{old('reg')}}">
    </div>
    <div class="form-group">
        <label for="cgpa">CPGA:</label>
        <input type="text" class="form-control" id="cgpa" placeholder="Enter CGPA" name="cgpa" value="{{old('cgpa')}}">
      </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
