<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Customer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-dark">
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Create Customer</h3>
                </div>
                <div class="card-body">
                    
                    <form action="/updateStudent/{{ $student->id }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="Name">First Name</label>
                            <input type="text" class="form-control" value="{{ $student->name }}" name="firstName" id="firstName" placeholder="Enter Name">                            
                        </div>
                        <div class="form-group">
                            <label for="age"> Age </label>
                            <input type="text" class="form-control" value="{{ $student->age }}" name="age" id="age" placeholder="Enter Age">
                        </div>
                        <div class="form-group">
                            <label for="txtPlace">Gender</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="float-right">
                        <a href="/studentlist" class="btn btn-primary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>