<!doctype html>
<html lang="en">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        button {
            text-decoration: none;
        }

        .rounded-xl {
            border-radius: 2rem;
        }
    </style>
    <head>
        <title>Welcome</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body class="container-fluid" style="background-color: #31304D;">
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container h-100 d-flex text-center justify-content-center align-middle rounded-xl" style="background-color: #161A30;">
                <div class="child m-5 text-light">
                    <h1>Welcome to Student Information System!</h1>
                    <p>This is a simple web application to manage student information.</p>
                    <p>Get started by</p>
                    <a href="{{ route('students.index') }}">
                        <div><button type="button" class="btn btn-outline-light m-2">Viewing a student list</button></div>
                    </a>
                    <a href="{{ route('students.create') }}">
                        <button type="button" class="btn btn-outline-light m-2">Adding a new student</button>
                    </a>
                </div>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>