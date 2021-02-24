<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/css/bootstrap.min.css">
    <link rel="stylesheet" href="include/css/projectCss.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="include/js/jquery.js"></script>
    <script src="include/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <title>zookev</title>
</head> 
<body>
<header class="d-flex">
    <div class="container-fluid">
    <div class="menu" style="display:flex;justify-content:space-between;width:100%;align-item:center;height:70px;background:#f9f9f9">
        <div class="left d-flex ">
            <div>
               <a href="index.php">
                    <img class="img-fluid logo-d" src="http://65.0.47.170/wp-content/uploads/2015/08/tuning.png" alt="" height="150px" width="150px">
                </a>
            </div>
            <div>
            <div class="dropdown">
                <img  class="" src="https://ebikego.in/wp-content/themes/ebike/assets/img/maps-and-location.png" height="20px" width="20px" alt="" class="img-fluid locate">
                <span>Delhi</span>
                <i class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                    <!-- <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button> -->
                    <div class="dropdown-menu"  id="location" style="min-width: 51rem;" aria-labelledby="dropdownMenuButton">
                    <div class="row" >
                       <div class="col-md-2 dropdown-item"><a href="" class="nav-link">Bengloru</a></div> 
                       <div class="col-md-2 dropdown-item"><a href="" class="nav-link">Mumbai</a></div>
                       <div class="col-md-2 dropdown-item"><a href="" class="nav-link">Delhi</a></div>
                       <div class="col-md-2 dropdown-item"><a href="" class="nav-link">Amritsar</a></div>
                       <div class="col-md-2 dropdown-item"><a href="" class="nav-link">Jaipur</a></div>
                       <div class="col-md-2 dropdown-item"><a href="" class="nav-link">Haidrabad</a></div>
                    </div>
                    </div>
                </div>    
            </div>
        </div>
        <style>
        @media only screen and (max-width:600px){
            .dropdown-menu{
                min-width:12rem!important;
            }
            .menu-bar{
                width:200px;
                background-color:#e8e2e2;
                z-index:2;
                opacity:1;
                text-align:right;
                /* padding-right:20px; */
                display:none;
                position:absolute;
                top:12px;
                right:75px;
            }
                
            .right{
                width:150px;
                padding-right:16px;
            }

            .body{
                /* opacity:0.3; */
                /* z-index:-1; */
            }
            img{
                
            }

            .item1{
                width:100%;
                background-color:#e8e2e2;
                
            }
            .item1:hover{
                background-color:lightgreen;
            }
            .side-menu-bar{
                display:block!important;
                /* margin-right:0!important; */
                /* width:20%;                 */
            }
            .mb{
                position:absolute;
                right:20px;
                top:-5px;
                padding-right:20px;
                /* float:right!important; */
                /* width:150px;
                height:150px; */
                border:1px solid black;
                padding:10px;
            }
        }
        </style>
        <div class="right d-flex">    
            <div class="row menu-bar">
            <div class="item1"><a href="aboutUs.php" class="nav-link font-weight-bold text-secondary">About Us</a></div>
            <div class="item1"><a href="howItWork.php" class="nav-link font-weight-bold text-secondary">How To It Works</a></div>
            <div class="item1"><a href="" class="nav-link font-weight-bold text-secondary">Partner Program</a></div>
            <div class="item1"><a href="support.php" class="nav-link font-weight-bold text-secondary">Support</a></div>
            <div class="item1"><a href="contactUs.php" class="nav-link font-weight-bold text-secondary">Contact Us</a></div>
            <!-- <div><a href="#" id="mobile-sign" data-toggle="modal" data-target="#exampleModal"><img src="https://zookev.in/wp-content/themes/ebike/assets/img/account.png" class="img-fluid nav-sign">Sign in</a></div> -->  
            </div>
            <div class="d-none side-menu-bar"><i id="menuBar" class="mb mt-3 fas fa-bars"></i></div>
        </div>
    </div>
    <!-- <nav class="navbar navbar-light d-flex navbar-expand-md static-top">
        <div class="navbar-brand">
            <a href="" class=""><img class="img-fluid logo-d" src="https://zookev.in/wp-content/themes/ebike/assets/img/logo.png" alt="" height="150px" width="150px"></a>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="" ><img  class="" src="https://zookev.in/wp-content/themes/ebike/assets/img/maps-and-location.png" height="20px" width="20px" alt="" class="img-fluid locate"></a><i type="button" class=" dropdown-toggle" data-toggle="dropdown"></i>
                <div class="dropdown-menu" id="location" style="min-width: 51rem;">
                    <div class="row" >
                       <div class="col-md-2 dropdown-item"><a href="" class="nav-link">Bengloru</a></div> 
                       <div class="col-md-2 dropdown-item"><a href="" class="nav-link">Mumbai</a></div>
                       <div class="col-md-2 dropdown-item"><a href="" class="nav-link">Delhi</a></div>
                       <div class="col-md-2 dropdown-item"><a href="" class="nav-link">Amritsar</a></div>
                       <div class="col-md-2 dropdown-item"><a href="" class="nav-link">Jaipur</a></div>
                       <div class="col-md-2 dropdown-item"><a href="" class="nav-link">Haidrabad</a></div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link font-weight-bold">About Us</a>
            </li>
            <li class="nav-item">
                <a href=""  class="nav-link">How To It Works</a>
            </li><li class="nav-item">
                <a href="" class="nav-link">Offers</a>
            </li><li class="nav-item">
                <a href="" class="nav-link">Business</a>
            </li><li class="nav-item">
                <a href="" class="nav-link">Partner Program</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Support</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Contact Us</a>
            </li>
            <li class="nav-item">
                <a href="#" id="mobile-sign" data-toggle="modal" data-target="#exampleModal"><img src="https://zookev.in/wp-content/themes/ebike/assets/img/account.png" class="img-fluid nav-sign">Sign in</a>
            </li>
        </ul>
    </nav> -->
    </div>
    <script>
        $(document).ready(function(){
            $('#menuBar').click(function()
            {
                $(".menu-bar").toggle();
            });
        });
    </script>
</header>

