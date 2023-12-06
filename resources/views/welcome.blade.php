<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Student Information System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }

        a {
            text-decoration: none;
            color: #3490dc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Student Information System</h1>
        <p>This is a simple web application to manage student information.</p>
        <p>Get started by <a href="{{ route('students.index') }}">viewing the student list</a> or <a href="{{ route('students.create') }}">adding a new student</a>.</p>
    </div>
</body>
</html>