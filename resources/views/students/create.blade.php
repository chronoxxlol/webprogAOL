<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: #31304D;">
    @include('layouts.app')

@auth
<div class="container mt-4 text-white">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-white" style="background-color: #161A30">
                    <div class="card-header">
                        <h1 class="mb-0">Add New Student</h1>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('students.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            </div>

                            <div class="form-group mt-2">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            </div>

                            <div class="form-group mb-3 mt-2">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Student</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endauth


</body>
</html>