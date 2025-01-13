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
        /* Basic styles for the notice container */
.notice-container {
    right: 20px;
    top: 20%;
    width: 100%;
    max-width: 500px;
    height: auto;
    background: linear-gradient(90deg, #C7FFD8, #A1D6B2);
    padding: 15px;
    border-radius: 10px;
    overflow: hidden;
    font-family: Arial, sans-serif;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
    margin-bottom: 20px;
}

/* Styling for the notices and individual notice */
.notices {
    display: flex;
    flex-direction: column;
    animation: scrollNotices 12s linear infinite;
}

.notice {
    background-color: #fff;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.notice h2 {
    margin: 0;
    font-size: 18px;
    color: #ff7e00;
    line-height: 1.4;
}

.notice p {
    margin: 5px 0 0;
    font-size: 14px;
    color: #333;
    line-height: 1.2;
}

.notice a {
    line-height: 1.4;
}

/* Hover effect */
.notice:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);
}

/* Responsive image in the first column */
.col-lg-6 img {
    width: 100%;
    height: 600px;
    margin: 20px 0;
}

/* Scroll animation */
@keyframes scrollNotices {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(-100%);
    }
}

/* Responsive Styles */

/* For smaller screens, up to 767px (mobile) */
@media(max-width:1200px){
    .notice-container {
        max-width: 600px;
        height: 450px;
    }
}

@media (max-width: 767px) {
    .notice-container {
        width: 60%;
        margin-left: 20%;
        height: auto;
        max-width: 100%;
    }

    /* Stack columns vertically */
    .row {
        flex-direction: column;
    }

    .col-lg-6 {
        margin: 0 auto;
    }

    /* Adjust image size */
    .col-lg-6 img {
        width: 100%;
        max-width: 300px;
        margin: 20px auto;
    }

    /* Reduce padding for smaller screens */
    .notice {
        padding: 10px;
        margin-bottom: 10px;
    }

    .notice h2 {
        font-size: 16px;
    }

    .notice p {
        font-size: 12px;
    }

    .notice a {
        font-size: 14px;
    }
}

/* For tablets, 768px to 991px */
@media (min-width: 768px) and (max-width: 991px) {
    .notice-container {
        width: 100%;
        max-width: 100%;
    }

    /* Adjust column image size for tablets */
    .col-lg-6 img {
        width: 100%;
        max-width: 450px;
        margin: 20px auto;
    }

    /* Adjust notice size for tablets */
    .notice h2 {
        font-size: 17px;
    }

    .notice p {
        font-size: 13px;
    }

    .notice a {
        font-size: 14px;
    }
}

/* For larger screens, 1200px and up */
@media (min-width: 1200px) {
    .notice-container {
        max-width: 600px;
        height: 800px;
    }

    /* Larger font size on larger screens */
    .notice h2 {
        font-size: 20px;
    }

    .notice p {
        font-size: 16px;
    }

    .notice a {
        font-size: 16px;
    }
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
                            News</h2>
                      
                    </div>

                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> News</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <section class="w3l-project" id="subscribe">
        
        <div class="container-fluid mx-lg-0">
        <div class="heading text-center mx-auto">
          <h5 class="title-subw3hny text-center" ><br><br></h5>
          <h3 class="title-w3l">NEWS</h3>
          <hr>
            <div class="row">
                <div class="col-lg-6 ">
                    <img src="assets/images/news.png" alt="" height="600px" width="600px" style="margin: 80px;">
                </div>
                <div class="col-lg-6 bottom-info layer">
                    <div class="project-header-section text-left">
                        <div>
                            <div class="notice-container">
                                <div class="notices" id="notices">
                                    <div class="notice">
                                        <h2>New Book Added- Yaadon Ke Nakoos</h2>
                                        <p>Updated On(04-06-2020)</p>
                                        <a href="assets/images/books/Yaadon_ke_Nakoos-news.pdf"> View</a>
                                    </div>
                                    <div class="notice">
                                        <h2>Wefaqul-Ulama-Khat</h2>
                                        <p>Updated On(2019-01-30)</p>
                                        <a href="assets/images/books/news-dawat-namah-wefaqul-ulama-program-jana-begusarai.pdf">View</a>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>





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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const notices = document.getElementById('notices');
            const noticeHeight = notices.scrollHeight;
            const duration = noticeHeight / 40; // Adjust speed by changing 40 to another number

            notices.style.animationDuration = duration + 's';
        });
    </script>


    <!--//MENU-JS-->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>