<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student Information</title>
</head>
<body style="background-color: #31304D;">
@include('layouts.app')
@section('edit')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-white" style="background-color: #161A30">
                    <div class="card-header">
                        <h1 class="mb-0">Edit Student Information</h1>
                    </div>
    
                    <div class="card-body">
                        <form action="{{ route('students.update', $student->id) }}" method="post">
                            @csrf
                            @method('PATCH')
    
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $student->name) }}" required>
                            </div>
    
                            <div class="form-group mt-2">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $student->email) }}" required>
                            </div>
    
                            <div class="form-group mb-3 mt-2">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $student->phone) }}" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@yield('edit')
</body>
</html>