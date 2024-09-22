<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="container">

<form class="mt-5" action="{{route('student.store')}}" method="POST">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif
  <div class="form-group">
    <label for="exampleInputEmail1">Student First Name</label>
    <input type="text" class="form-control" name="first_name" placeholder="Enter first name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Student Last Name</label>
    <input type="text" class="form-control" name="last_name" placeholder="Enter Last name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Student contact number</label>
    <input type="number" class="form-control" name="contact_no" placeholder="Enter contact number">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Student Address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Student Birthday</label>
    <input type="text" class="form-control" name="dob" placeholder="Enter Birthday">
  </div>

  </div>
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

</body>
</html>
