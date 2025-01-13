<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/logo.png">
    <title>Preaching | Jamia Rabbani</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<style>
    
main {
    padding: 40px 20px;
    max-width: 1100px;
    margin: 0 auto;
}
h2 {
    font-family:  serif;
    font-size: 2em;
    margin-bottom: 10px;
    color: #2c3e50;
}

        .department-info {
            /* background: #fff; */
            padding: 20px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            text-align: center;
            color: #333;
        }

        .department-info h1 {
            color: black;
            margin-bottom: 15px;
            font-size: 2.5em;
            position: relative;
            display: inline-block;
            padding-bottom: 5px;
        }

        .department-info h1::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background-color: #1abc9c;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
        }

        .department-info p {
            color: #666;
            margin-bottom: 30px;
            font-size: 1.1em;
        }

        .card-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;


        }



        .card {
            background: skyblue;
            border-radius: 12px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 48%;
            text-align: left;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: auto;
            display: block;
        }

        .card-content {
            padding: 20px;

        }

        .card-content h3 {
            margin: 0 0 10px;
            color: #333;
            font-size: 1.5em;

        } 

        @media (max-width: 768px) {
            .card {
                width: 100%;
            }

            .department-info h1 {
                font-size: 2em;
            }

            .department-info p {
                font-size: 1em;
            }
        }

        @media (max-width: 480px) {
            nav ul li {
                display: block;
                margin: 10px 0;
            }

            nav ul li a {
                font-size: 1.2em;
            }

            .card-content h3 {
                font-size: 1.3em;
            }

            .card-content p {
                font-size: 0.9em;
            }

            .department-info h1 {
                font-size: 1.8em;
            }

            .department-info p {
                font-size: 0.9em;
            }
        }
    </style>


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
                            Preaching </h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Preaching</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <main>
        <section class="department-info">
    
                <h2>Tabligh and Preaching Department</h2><br><br>
           

            <p>This department is intended to effect religious and social reform to the Muslim society and to fight the social and moral evils gaining foothold into the Muslim societies. This department gets notice of such evils. The ulama and the orators of the Jamia, from time to time, undertake visits to different areas for the purpose of reform and admonition.</p>

            <div class="card-container">
                <div class="card">
                    <img src="assets/images/s-pic2.jpg" alt="Darul Quran">
                    <div class="card-content">
                        <h3>Darul Quran of Jamia Rabbani</h3>
                        <p>This is where students learn the Quran and religious studies, focusing on spiritual growth and education.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/pic15.jpg" alt="Jamia at Night">
                    <div class="card-content">
                        <h3>Jamia at Night</h3>
                        <p>The serene and peaceful atmosphere of the Jamia at night, ideal for evening prayers and reflection.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

   







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