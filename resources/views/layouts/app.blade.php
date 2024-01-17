<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centra Gym Fitnes</title>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            padding-top: 46px;
            font-family: 'Arial', sans-serif;
            padding-right: 30px
        }

        header {
            background-color: #343a40;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }

        section {
            margin: 1rem;
        }

        th,
        td {
            text-align: center;
        }

        .action-links a,
        .action-links form {
            margin: 0 5px;
        }

        .sidebar {
            height: 100%;
            width: 150px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #02203e;
            padding-top: 56px;
            box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 16px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #495057;
            color: #f1f1f1;
        }

        .sidebar-brand {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .sidebar-brand-icon {
            font-size: 1.5rem;
            margin-right: 5px;
        }

        .sidebar-brand-text {
            font-size: 18px;
        }

        .sidebar-divider {
            width: 80%;
            margin: 10px auto;
            border-bottom: 1px solid rgb(255, 255, 255)
        }
    </style>
</head>

<body>


    <div class="sidebar">
        <div class="logo" style="text-align: center; line-height: 110px;">
            <img src="assets/images/laravel.png" alt="Logo" style="width: 65px; height: 60px;">
        </div>
        <a href="{{ route('admin.members.index') }}">Data Members</a>
        <form action="{{ route('admin.logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-link nav-link" style="color: rgb(0, 0, 0) 0, 0);"><strong>Logout</strong></button>
        </form>
    </div>

    <section style="margin-left: 250px;">
        @yield('content')
    </section>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
