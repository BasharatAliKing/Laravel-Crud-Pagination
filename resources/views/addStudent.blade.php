<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 p-3 shadow mt-3">
                <h2>Add Student Data</h2>
                <form action="{{route('addstudent')}}" method="POST">
                    @csrf
                     <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Roll</label>
                        <input type="number" name="roll" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Contact</label>
                        <input type="text" name="contact" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control" required>
                    </div>
                    <button class="btn btn-sm btn-success mt-3">Data Add</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>