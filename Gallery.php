<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/logo.png">
    <title>Gallery | Jamia Rabbani</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">

    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section-title {
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
            display: inline-block;
            position: relative;
        }

        .section-title::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 50px;
            height: 3px;
            background-color: teal;
        }

        .portfolio-item {
            position: relative;

        }

        .portfolio-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: all 0.3s ease-in-out;
            width: 300px;
            height: 200px;
            background-color: teal;


        }

        .portfolio-item:hover .portfolio-btn {
            opacity: 0.5;
        }

        .text-center ul li {
            color: #ffc107;
            background-color: teal;
        }

        .w3breadcrumb-gids1 {
            display: grid;
            grid-template-columns: 2fr 1fr;
            grid-gap: 30px;
            align-items: center;
        }
        .head{
            font-size: 24px;
            border-bottom: 3px solid #1abc9c; 
            padding:20px;
           
           
        }
    </style>
</head>

<body>

    <!-- header -->
    <?php include 'header.php' ?>
    <!--/header-->

    <!-- banner -->

    <section class="bannerw3l-hnyv">
        <div class="banner-layer">
        <a href="assets/images/back-video.mp4"><video autoplay muted loop id="myVideo">
                <source src="assets/images/night view of jamia rabbani.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video></a>
            <div class="main-content-top">
                <div class="container">
                    <div class="main-content">
                        <h3>Gallery<span class="inn-text" style="font-size: 45px;"></span> </h3>
                        <p class="inner-page-para mt-2">Madarsa ki yaadon se bhari yeh gallery, taleem aur tarbiyat ka safar dikhati hai.</p>

                    </div>
                </div>
            </div>
            <div class="container py-lg-5 py-md-4" style="float: right; margin-top:300px">
                <div class="w3breadcrumb-gids1">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Gallery</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
    <!-- banner end -->

    <!-- Gallery Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center pb-2">
                    <h1 class="head" >Our Gallery</h1><br>
                <h1 class="mb-4">Jamia Rabbani Gallery</h1>
                <br>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn m-1  active" data-filter="*">
                            All
                        </li>
                        <li class="btn m-1 " data-filter=".first">
                            Madarsa
                        </li>
                        <li class="btn m-1" data-filter=".second">
                            Library
                        </li>
                        <li class="btn m-1 " data-filter=".third">
                            Student/Staff
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container" style="margin-bottom: 30px;">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/pic4.jpg" alt="" />
                        <div
                            class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="assets/images/pic4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/s-pic6.jpg" alt="" />
                        <div
                            class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="assets/images/s-pic6.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/pic9.jpg" alt="" />
                        <div
                            class="portfolio-btn  d-flex align-items-center justify-content-center">
                            <a href="assets/images/pic9.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/lib_pic2.jpg" alt="" />
                        <div
                            class="portfolio-btn  d-flex align-items-center justify-content-center">
                            <a href="assets/images/lib_pic2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/pic7.jpg" alt="" />
                        <div
                            class="portfolio-btn  d-flex align-items-center justify-content-center">
                            <a href="assets/images/pic7.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/s-pic3.jpg" alt="" />
                        <div
                            class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="assets/images/s-pic3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/pic6.jpg" alt="" />
                        <div
                            class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="assets/images/pic6.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/pic2.jpg" alt="" />
                        <div
                            class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="assets/images/pic2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/pic1.jpg" alt="" />
                        <div
                            class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="assets/images/pic1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/pic12.jpg" alt="" />
                        <div
                            class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="assets/images/pic12.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/pic13.jpg" alt="" />
                        <div
                            class="portfolio-btn  d-flex align-items-center justify-content-center">
                            <a href="assets/images/pic13.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/pic14.jpg" alt="" />
                        <div
                            class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="assets/images/pic14.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/pic15.jpg" alt="" />
                        <div
                            class="portfolio-btn  d-flex align-items-center justify-content-center">
                            <a href="assets/images/pic15.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/lib_pic1.jpg" alt="" />
                        <div
                            class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="assets/images/lib_pic1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/pic11.jpg" alt="" />
                        <div
                            class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="assets/images/pic11.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/pic10.jpg" alt="" />
                        <div
                            class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="assets/images/pic10.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/lib_pic3.jpg" alt="" />
                        <div
                            class="portfolio-btn  d-flex align-items-center justify-content-center">
                            <a href="assets/images/lib_pic3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/mpic2.jpg" alt="" />
                        <div
                            class="portfolio-btn  d-flex align-items-center justify-content-center">
                            <a href="assets/images/mpic2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/lib_pic4.jpg" alt="" />
                        <div
                            class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="assets/images/lib_pic4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/lib_pic5.jpg" alt="" />
                        <div
                            class="portfolio-btn  d-flex align-items-center justify-content-center">
                            <a href="assets/images/lib_pic5.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/s-pic1.png" alt="" />
                        <div
                            class="portfolio-btn  d-flex align-items-center justify-content-center">
                            <a href="assets/images/s-pic1.png" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/pic5.jpg" alt="" />
                        <div
                            class="portfolio-btn  d-flex align-items-center justify-content-center">
                            <a href="assets/images/pic5.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/s-pic8.jpg" alt="" />
                        <div
                            class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="assets/images/s-pic8.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/s-pic2.jpg" alt="" />
                        <div
                            class="portfolio-btn  d-flex align-items-center justify-content-center">
                            <a href="assets/images/s-pic2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/mpic.jpg" alt="" />
                        <div
                            class="portfolio-btn  d-flex align-items-center justify-content-center">
                            <a href="assets/images/mpic.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/s-pic4.jpg" alt="" />
                        <div
                            class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="assets/images/s-pic4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/pic8.jpg" alt="" />
                        <div
                            class="portfolio-btn  d-flex align-items-center justify-content-center">
                            <a href="assets/images/pic8.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/s-pic5.jpg" alt="" />
                        <div
                            class="portfolio-btn  d-flex align-items-center justify-content-center">
                            <a href="assets/images/s-pic5.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/pic3.jpg" alt="" />
                        <div
                            class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="assets/images/pic3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/images/s-pic7.jpg" alt="" />
                        <div
                            class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="assets/images/s-pic7.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


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


    <!-- gallery style -->

    <script>
        $(document).ready(function() {
            var portfolioIsotope = $('.portfolio-container').isotope({
                itemSelector: '.portfolio-item',
                layoutMode: 'fitRows'
            });

            $('#portfolio-flters li').on('click', function() {
                $("#portfolio-flters li").removeClass('active');
                $(this).addClass('active');

                var filterValue = $(this).attr('data-filter');
                portfolioIsotope.isotope({
                    filter: filterValue
                });
            });
        });
    </script>

    <!-- gallery style end -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Isotope -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>


</body>

</html>