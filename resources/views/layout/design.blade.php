<!DOCTYPE html>
<html lang="en">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERT</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome 5 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <div class="header" id="myHeader">
        <span style="display: flex; justify-content: flex-end; align-items: center; padding-right: 20px;">
            <i style="font-size: 20px; margin-right: 20px;">Admin</i>
            <i class="fa fa-user" style="font-size: 20px;"></i>
        </span>
    </div>
    <aside class="sidebar"><br><br>
        <h4><a href="#ertdashboard" style="text-decoration: none; color: white; margin-left: 25px; font-size:27px;"> ERT
                Dashboard</a></h4><br>
        <h4><a href="#dashboard" style="text-decoration: none; color: white; font-size:17px; margin-left: 65px;">
                Dashboard</a></h4><br>
        <h4><a href="#" style="text-decoration: none; color: white; font-size:17px; margin-left: 65px;"> Zone
                Master</a></h4><br>
        <h4><a href="#specialization" style="text-decoration: none; color: white; font-size:17px; margin-left: 65px;">
                Specialization</a></h4><br>
        <h4><a href="#ertmembers" style="text-decoration: none; color: white; font-size:17px; margin-left: 65px;"> ERT
                Members</a></h4><br>
        <h4><a href="#reports" style="text-decoration: none; color: white; font-size:17px; margin-left: 65px;">
                Reports</a></h4><br>
    </aside>
    <main class="container p-4  mr-4">
        @yield('content')
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>

