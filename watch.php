<!-- 
Bootstrap 5.1
Developer : Ashish Gurung 
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
    <div class="container text-uppercase fs-1">
        <div class="row" style="color:white; min-height:100vh">
            <div class="col w-50 bg-dark border border-white d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    Sydney, Australia
                09<span class="seperator">:</span>25 PM
                Sunday, 01 May 2022 
                </div>
            </div>
            <div class="col w-50 bg-dark">
                <div class="row border border-white h-50 d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                    San Francisco, USA
                04<span class="seperator">:</span>35 PM
                Saturday, 30 April 2022 
                    </div>
                </div>
                <div class="row border border-white h-50 ">
                    <div class="d-flex align-items-center justify-content-center">
                        <!-- 09<span class="seperator">:</span>25 PM -->
                        <div id="Clock">000</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/script.js"></script>
</html>

