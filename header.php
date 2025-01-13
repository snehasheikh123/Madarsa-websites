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
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>


<style>

    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
        background-color: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px); 
        border: none; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }


    .nav-item.dropdown .dropdown-menu {
        transition: all 0.3s ease-in-out;
    }



</style>

<body>

    <header id="site-header" class="fixed-top">
        <!-- <div style="background-color: rgb(96, 116, 116); width: 100%; height: 30px;" class="fixed-top1"></div> -->
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-dark stroke">
                <h1>
                    <img src="assets/images/logo.png" height="60px" width="60px">
                    <a class="navbar-brand" href="index.php">
                        Jamia Rabbani </a>

                </h1>
                <!-- if logo is image enable this   
                <a class="navbar-brand" href="#index.html">
                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </span>
                </button>
                
                
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'active'; ?>">
                            <a class="nav-link" href="about.php">About</a>
                        </li>

                        <li class="nav-item dropdown <?php if (basename($_SERVER['PHP_SELF']) == 'Department.php') echo 'active'; ?>">
                            <a class="nav-link dropdown-toggle" href="#" id="departmentDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Department   <i class="fa-solid fa-caret-down"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="departmentDropdown">
                                <a class="dropdown-item" href="Educational_Department.php">Educational Departments</a>
                                <a class="dropdown-item" href="Library.php">Library</a>
                                <a class="dropdown-item" href="Virtual-Bookshelf.php">Virtual Bookshelf</a>
                                <a class="dropdown-item" href="research.php">Research</a>
                                <a class="dropdown-item" href="Publication.php">Publication</a>
                                <a class="dropdown-item" href="Preaching.php">Preaching</a>
                                <a class="dropdown-item" href="otherdepartment.php">Other Departments</a>
                            </div>
                        </li>



                        <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'Gallery.php') echo 'active'; ?>">
                            <a class="nav-link" href="Gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'Requirements.php') echo 'active'; ?>">
                            <a class="nav-link" href="Requirements.php">Requirements</a>
                        </li>
                        <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'Visitors.php') echo 'active'; ?>">
                            <a class="nav-link" href="Visitors.php">Visitors</a>
                        </li>
                        <li class="nav-item mr-lg-1 <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'active'; ?>">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>


 
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container py-1">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>

        </div>
    </header>
    <!--/header-->






    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>