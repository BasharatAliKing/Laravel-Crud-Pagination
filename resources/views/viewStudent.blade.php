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
        <h1 class="my-3"> Students Data</h1>
        <div class="row">
            <div class="col-md-4 shadow p-3">
              
                  @foreach ($data as $id=>$student )
                  <h5>Name: {{$student->name}}</h5>  
                  <h5>Email: {{$student->email}}</h5>  
                  <h5>Roll: {{$student->roll}}</h5>  
                  <h5>Contact: {{$student->contact}}</h5>  
                  <h5>Address: {{$student->address}}</h5>  
                  @endforeach
            </div>
        </div>
    </div>
</body>
</html>