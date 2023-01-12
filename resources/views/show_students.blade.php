<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1>Hi
        @if (Auth::check())
            {{Auth::user()->email}}
        @else
            {{'Guest'}}
        @endif
    </h1>

    @if (session('status'))
    <div class="alert alert-info alert-dismissible" role="alert">
        Data saved
      </div>
    @endif
  <h2>All students</h2>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Reg #</th>
        <th>CGPA</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{$student['id']}}</td>
            <td>{{$student['name']}}</td>
            <td>{{$student['reg']}}</td>
            <td>{{$student['cgpa']}}</td>
        </tr>

        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
