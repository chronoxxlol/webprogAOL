<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="dark" style="background-color: #31304D;">
@include('layouts.app')
    
@section('content')
    <div class="container mt-4 text-white">
        <h1>Student List</h1>

        <form action="{{ route('students.index') }}" method="get" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control rounded-4" name="query" placeholder="Search by name" value="{{ $searchQuery }}">
                <div class="input-group-append">
                    <button class="btn text-white btn-outline-light ms-2" style="background-color: #161A30" type="submit">Search</button>
                </div>
            </div>
        </form>

        <div class="d-flex justify-content-between mb-3">
            <div>
                <strong>Sort Order:</strong>
                <a href="{{ route('students.index', ['sortOrder' => 'asc', 'query' => $searchQuery]) }}" class="{{ $sortOrder === 'asc' ? 'font-weight-bold' : '' }}">A-Z</a> |
                <a href="{{ route('students.index', ['sortOrder' => 'desc', 'query' => $searchQuery]) }}" class="{{ $sortOrder === 'desc' ? 'font-weight-bold' : '' }}">Z-A</a>
            </div>
        </div>

        @if($students && count($students) > 0)
            <div class="row">
                @foreach($students as $student)
                    <div class="col-md-4 mb-3">
                        <div class="card" style="background-color: #161A30;">
                            <div class="card-body text-white">
                                <h4 class="card-title">{{ $student->name }}</h4>
                                <p class="card-text">Email: {{ $student->email }}</p>
                                <p class="card-text">Phone: {{ $student->phone }}</p>
                                <p class="card-text">Created At: {{ $student->created_at }}</p>
                                <p class="card-text">Updated At: {{ $student->updated_at }}</p>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="post" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this student?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm float-end">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No students found.</p>
        @endif
    </div>
@endsection
@yield('content')

</body>
</html>