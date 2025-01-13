<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/logo.png">
    <title>Research | Jamia Rabbani</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <style>
        .research-department {
            max-width: 1200px;
            margin: 50px auto;
            padding: 40px 20px;
            /* background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%); */
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .text-content {
            max-width: 800px;
            text-align: center;
          
        }

        .research-department h2 {
            font-size: 36px;
            color: #333;
         
            position: relative;
        }

        .research-department h2::after {
            content: '';
            width: 80px;
            height: 4px;
            background-color: #ff7e5f;
            display: block;
            margin: 10px auto;
            border-radius: 2px;
        }

        .intro,
        .details {
            font-size: 18px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 15px;
        }

        .details {
            font-size: 17px;
            color: #666;
        }

        .Gallery {
            display: flex;
        }
        .Gallery1{
            display: flex;
            margin: auto;
        }

        .research-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            width: 100%;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            margin: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            background: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .Gallery .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            transition: transform 0.3s ease;
        } 
        .Gallery1 .gallery-item1 img {
            width: 200px;
            height: 200px;
            height: auto;
            border-radius: 15px;
            transition: transform 0.3s ease;
            margin: 50px;
        }

        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }
    </style>
</head>

<body>

    <!-- header -->


    <?php include 'header.php' ?>

    <!--/header-->

    <section class="w3l-about-breadcrumb text-center">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5 main-content-top">
            <div class="container py-lg-5 py-md-4">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="title AboutPageBanner">
                            Research</h2>
                        
                    </div>

                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Research</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <div class="research-department">
        <div class="text-content">
            <h2>Department of Research and Compilation</h2>
            <p class="intro">
                This department is dedicated to conducting research on various Islamic religious subjects and issues,
                particularly those confronting the Muslim Ummah in the modern world.
            </p>
            <p class="details">
                Our research endeavors aim to provide religious benefits to the Muslim masses.
                With the grace of Allah, the department has published numerous significant works on a wide range of important Islamic subjects.
                The research is ongoing, covering several critical areas.
            </p>
        </div>

        <div class="research-gallery">

            <div class="Gallery1 ">
                <div class="gallery-item1">
                    <img src="assets/images/reimg.jpg" alt="Research Book 1">
                </div>
                <div class="gallery-item1">
                    <img src="assets/images/re_img2.jpg" alt="Research Book 5">
                </div>
            </div>

        </div>
        <div class="research-gallery">
            <div class="Gallery">
                <div class="gallery-item">
                    <img src="assets/images/re_img.jpg" alt="Research Book 2">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/re_img4.jpg" alt="Research Book 3">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/re_img3.jpg" alt="Research Book 4">
                </div>
            </div>
        </div>
    </div>



    <!--/footer-->
    <?php include 'footer.php' ?>
    <!-- //footer -->



    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
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
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
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