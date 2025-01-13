<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/logo.png">
    <title>Jamia Rabbani</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
  
    <!-- Template CSS -->
    <style>
        body{
            background-color: #fff;
        }
        .form{
            width: 500px;
            height: 350px;
            background-color:#fff;
            border-radius: 5px;
            border: 2px solid #dddada;
           padding: 50px 50px;
            margin: auto;
            margin-bottom: 100px;
            box-shadow: 2px 2px 4px grey;
        }
        .form input{
            width: 380px;
            padding: 15px;
            margin: 10px;
            /* margin-top: 50px; */
            border-radius: 5px;
            border: 2px solid #dddada;
            font-size: 18px;
            background-color: #e6e3e3;
            
        }
        .form button{
            margin-top: 30px;
        }
    </style>

</head>

<body>

    <!-- header -->


    <?php include 'header.php' ?>

    <!--/header-->

    <section class="w3l-about-breadcrumb text-center">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="title AboutPageBanner">
                            Admin Login</h2>
                        
                    </div>

                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Admin Login</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>




    <div class="calendar-container text-center">
        <h5 class="title-subw3hny text-center"><br><br></h5>
        <h3 class="title-w3l">Admin Login</h3>
        <hr>
                    <div class="form">
                        <form action="#" class="" method="get">
                            <input type="email" name="email" placeholder="Your Email" required=""><br>
                            <input type="password" placeholder="Your Password"><br>
                            <button class="btn btn-style btn-primary">Submit</button>
                        </form>
                    </div>

        <div class="calcaard">
            
        </div>

    </div>





    <!--/footer-->
    <?php include 'footer.php' ?>
    <!-- //footer -->






</body>

</html>