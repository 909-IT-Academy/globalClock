<!-- 
Bootstrap 5.1
Developer : Dibesh Sharma
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aashish edit</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?<?= filemtime('css/style.css'); ?>">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="container text-uppercase fs-4 watchScreen">
        <div class="row" style="min-height:100vh">
            <div class="col w-50 bg-dark border border-white d-flex align-items-center justify-content-center">
                <div class="d-flex flex-column bd-highlight mb-3 align-items-center justify-content-center" id="SydneyTime">
                Sydney Time 00:00:00
                </div>
            </div>
            <div class="col w-50 bg-dark">
                <div class="row border border-white h-50 d-flex align-items-center justify-content-center">
                    <div class="d-flex flex-column bd-highlight mb-3 align-items-center justify-content-center" id="VancouverTime">
                    Vancouver Time 00:00:00
                    </div>
                </div>
                <div class="row border border-white h-50 ">
                    <div class="d-flex flex-column bd-highlight mb-3 align-items-center justify-content-center" id="KathmanduTime">
                    Kathmandu Time 00:00:00
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/script_v2.js"></script>
</html>

<?php
    date_default_timezone_set('Asia/Kathmandu');
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . strtoupper(date("l")). "<br>";;
    echo "The time is " . date("h:i:sa"). "<br>";;

    date_default_timezone_set('America/Vancouver');
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . strtoupper(date("l")). "<br>";;
    echo "The time is " . date("h:i:sa"). "<br>";;
?>