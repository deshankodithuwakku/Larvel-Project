<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <a href="{{ route('student.create') }}" class="btn btn-primary mt-5">Create</a>


    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Contact number</th>
                <th scope="col">Address</th>
                <th scope="col">Birth day</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->contact_no }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->dob }}</td>
                    <td><a class="btn btn-primary" href="{{route('student.edit' ,$student->id)}}">Edit</a> <a class="btn btn-primary" href="{{route('student.delete',$student->id)}}">Delete</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>
