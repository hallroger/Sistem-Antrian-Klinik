<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carlota</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <style>
    html,
        body {
            padding-top: 30px;
            background-color: white;
            height: 100%;
            margin: 0;
        }
        
        footer {
            color: white;
            position: relative;
            bottom: -300px;
            padding: 15px;
        }
        
        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        
        .form-signin .checkbox {
            font-weight: normal;
        }
        
        .form-signin .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        
        .form-signin .form-control:focus {
            z-index: 2;
        }
        
        .form-signin input[type="text"] {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        
        .account-wall {
            margin-top: 20px;
            padding: 40px 0px 20px 0px;
            background-color: #f7f7f7;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        
        .login-title {
            color: #555;
            font-size: 18px;
            font-weight: 400;
            display: block;
        }
        
        .profile-img {
            width: 96px;
            height: 96px;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        
        .need-help {
            margin-top: 10px;
        }
        
        .new-account {
            display: block;
            margin-top: 10px;
        }
        
        .aboutus-section {
            padding: 40px 0;
        }
        
        .aboutus-title {
            font-size: 30px;
            letter-spacing: 0;
            line-height: 32px;
            margin: 0 0 39px;
            padding: 0 0 11px;
            position: relative;
            text-transform: uppercase;
            color: #000;
        }
        
        .aboutus-title::after {
            background: #fdb801 none repeat scroll 0 0;
            bottom: 0;
            content: "";
            height: 2px;
            left: 0;
            position: absolute;
            width: 54px;
        }
        
        .aboutus-text {
            color: #606060;
            font-size: 13px;
            line-height: 22px;
            margin: 0 0 35px;
        }
        
        a:hover,
        a:active {
            color: #ffb901;
            text-decoration: none;
            outline: 0;
        }
        
        .aboutus-more {
            border: 1px solid #fdb801;
            border-radius: 25px;
            color: #fdb801;
            display: inline-block;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0;
            padding: 7px 20px;
            text-transform: uppercase;
        }
        
        .feature .feature-box .iconset {
            background: #fff none repeat scroll 0 0;
            float: left;
            position: relative;
            width: 18%;
        }
        
        .feature .feature-box .iconset::after {
            background: #fdb801 none repeat scroll 0 0;
            content: "";
            height: 150%;
            left: 43%;
            position: absolute;
            top: 100%;
            width: 1px;
        }
        
        .feature .feature-box .feature-content h4 {
            color: #0f0f0f;
            font-size: 18px;
            letter-spacing: 0;
            line-height: 22px;
            margin: 0 0 5px;
        }
        
        .feature .feature-box .feature-content {
            float: left;
            padding-left: 28px;
            width: 78%;
        }
        
        .feature .feature-box .feature-content h4 {
            color: #0f0f0f;
            font-size: 18px;
            letter-spacing: 0;
            line-height: 22px;
            margin: 0 0 5px;
        }
        
        .feature .feature-box .feature-content p {
            color: #606060;
            font-size: 13px;
            line-height: 22px;
        }
        
        .icon {
            color: #f4b841;
            padding: 0px;
            font-size: 40px;
            border: 1px solid #fdb801;
            border-radius: 100px;
            color: #fdb801;
            font-size: 28px;
            height: 70px;
            line-height: 70px;
            text-align: center;
            width: 70px;
        }
    }
    @media (max-width: 768px) {
        .index-content .col-lg-4 {
            margin-top: 20px;
        }
    }
    .carousel-inner img {
        width: 100%;
        min-height: 200px;
    }
    @media (max-width: 600px) {
        .carousel-caption {
            display: none;
        }
    }
    .row.content {
        height: 1500px
    }
    @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }
        
        .row.content {
            height: auto;
        }
    }
    </style>
</head>

<body>

    <body class="hold-transition login-page">

        <?php
        /*
        * Variabel $contentnya diambil dari core MY_Controller
        * (application/core/MY_Controller.php)
        * */
        echo $contentnya;
        ?>
            </div>
    </body>

</html>