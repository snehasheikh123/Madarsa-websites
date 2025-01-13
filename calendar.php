<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/logo.png">
    <title>News | Jamia Rabbani</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <style>
        .calcaard {
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-evenly;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .calendar-container {
           


            gap: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .calendar-item {
            width: 300px;
            height: 350px;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            margin: 10px;
        }

        .calendar-item img {
            width: 100%;
            /* height: auto; */
            transition: transform 0.3s;
        }

        .calendar-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .calendar-item:hover img {
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
                            Calendar</h2>
                        
                    </div>

                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Yearly Calendar</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>




    <div class="calendar-container text-center">
        <h5 class="title-subw3hny text-center"><br><br></h5>
        <h3 class="title-w3l">Jamia Rabbani - Yearly Calendar 2025 </h3>
        <hr>
        <div class="calcaard">
            <div class="calendar-item">
                <a href="assets/images/calendar1.png"><img src="assets/images/calendar1.png" alt="Calendar 1"></a>
            </div>
            <div class="calendar-item">
                <a href="assets/images/calendar2.png"><img src="assets/images/calendar2.png" alt="Calendar 2"></a>
            </div>
            <div class="calendar-item">
                <a href="assets/images/calendar3.png"><img src="assets/images/calendar3.png" alt="Calendar 3"></a>
            </div>
            <div class="calendar-item">
                <a href="assets/images/calendar4.png"><img src="assets/images/calendar4.png" alt="Calendar 4"></a>
            </div>
        </div>
        <div class="calcaard">
            
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

        document.addEventListener('DOMContentLoaded', function() {
            const notices = document.getElementById('notices');
            const noticeHeight = notices.scrollHeight;
            const duration = noticeHeight / 35; // Adjust speed by changing 35 to another number

            notices.style.animationDuration = duration + 's';
        });
    </script>



    <!--//MENU-JS-->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>