<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Students Data..</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>All Students Data</h1>
        <a href="addstudent" class="btn btn-sm btn-success my-3">Add Student</a>
        <div class="row">
            <div class="col-md-10">
                <table class="table border table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $id=>$student )
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->roll}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->contact}}</td>
                            <td>{{$student->address}}</td>
                             <td>
                                <a href="{{route('viewstudent',$student->id)}}" class="btn btn-primary btn-sm">View</a>
                                <a href="{{route('delete',$student->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                <a href="{{route('update',$student->id)}}" class="btn btn-warning btn-sm">Update</a>
                             </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                   
                </table>
                <div>
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
</body>
</html>