@extends('layout.design')
@section('content')
 
 <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ERT</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src='https://kit.fontawesome.com/your-kit-code.js' crossorigin='anonymous'></script>

    </head>
    <body>
            <div class="sidebar"><br><br>
            <h4><a href="#ertdashboard" style="text-decoration: none; color: white; margin-left: 25px; font-size:27px;"> ERT Dashboard</a></h4><br>
            <h4><a href="#dashboard" style="text-decoration: none; color: white; font-size:17px; margin-left: 65px;"> Dashboard</a></h4><br>
            <h4><a href="#zonemaster" style="text-decoration: none; color: white; font-size:17px; margin-left: 65px;"> Zone Master</a></h4><br>
            <h4><a href="#specialization" style="text-decoration: none; color: white; font-size:17px; margin-left: 65px;"> Specialization</a></h4><br>
            <h4><a href="#ertmembers" style="text-decoration: none; color: white; font-size:17px; margin-left: 65px;"> ERT Members</a></h4><br>
            <h4><a href="#reports" style="text-decoration: none; color: white; font-size:17px; margin-left: 65px;"> Reports</a></h4><br>
          </div>

        <div class="container px-3">
            <div class="row gx-4" id="box">
                <h6 id="d"><b>Dashboard</b></h6>
                <div class="col">
                    <div class="p-5 border bg" style="background-color: rgba(128, 0, 107, 0.23);">Number of Zones</div>
                </div>
                <div class="col">
                    <div class="p-5 border bg" style="background-color: rgba(128, 0, 107, 0.23);">Number of ERT Members</div>
                </div>
            </div>
        </div>
        
        <div class="container px-3">
            <div class="row gx-4" id="box2">
                <h6 id="v"><b>View Reports</b></h6>
                <div class="col">
                    <div class="p-5 border bg" style="background-color: rgba(88, 6, 223, 0.54);">Zone 1</div>
                </div>
                <div class="col">
                    <div class="p-5 border bg" style="background-color: rgba(88, 6, 223, 0.54);">Zone 2</div>
                </div>
                <div class="col">
                    <div class="p-5 border bg" style="background-color: rgba(88, 6, 223, 0.54);">Zone 3</div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
        <script src="script.js"></script>
    </body>

    </html>

@endsection