
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/logo.png">
    <title>Library | Jamia Rabbani</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>

    <!-- header -->

    
    <?php     include 'header.php' ?>

    <!--/header-->

    <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5 main-content-top">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
            <h2 class="title AboutPageBanner">
              Library </h2>
            <p class="inner-page-para mt-2">
            A library is a sanctuary of knowledge, offering access to a vast collection of resources for learning, exploration, and intellectual growth.</p> 
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Library</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="w3l-services2" id="services">
    <div id="cwp23-block" class="py-5">
      <div class="container py-lg-5">
        <div class="row cwp23-content mt-lg-5 mt-4">
          <div class="col-lg-6 cwp23-img">
            <!-- <h6 class="title-subhny mb-2"><span>Library:</span></h6> -->
            <h3 class="title-w3l mb-4"> <img src="assets/images/open-book.png" height="45px">  Our Library</h3>
            <p class="mt-4">The library is an essential wing of an institution launched for academic purposes and the service of learning. In the case of the religious seats of higher Islamic learning it assumes an importance greater still. Indeed the library constitutes the backbone of Islamic religious seminaries. With a comprehensive, precious collection of thousands of books on religious in the Arabic, Persian, English, Urdu and Hindi languages on various Islamic subjects such as Tafseer, Hadith, Fiqh, Usool Fiqh, Seerat, Fatawa, Aqaid, Kalam, History, biographies, morality, Islamic mysticism etc, the library holds an unmatched status especially in northern Bihar. The collection is augmenting every year.


            </p>
            <p class="mt-4">Further, to enhance the knowledge and current information of the beneficiaries of this library, the library possesses a well-managed section of periodicals and journals, which receives a large number of important research journals periodicals from within the country and outside.</p>
            <!-- <div class="w3l-button mt-lg-5 mt-4">
              <a href="services.html" class="btn btn-style btn-primary mt-2">Read More </a>
            </div> -->
          </div>
          <div class="col-lg-6 cwp23-text mt-lg-0 mt-5 pl-lg-5">
            <div class="imgw3l-ab w3l-news">
              <div class="grids5-info">
                <a href="#" class="d-block zoom"><img src="assets/images/lib_pic4.jpg"alt="" class="img-fluid news-image"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="w3-gallery py-5" id="portfolio">
        <div class="container py-lg-5 py-md-4 py-2">
        <div class="title-content text-center">
                    <!-- <h6 class="title-subw3hny text-center">Gallery</h6> -->
                    <h3 class="title-w3l mb-5 text-center">Library Photos</h3>
                </div>
            <div class="row portfolio-area clearfix p-0 m-0">
                <div class="col-lg-4 col-md-6 portfolio-item2 content" data-id="id-1" data-type="cat-item-1">
                    <span class="image-block">
                        <!-- <a class="image-zoom" href="assets/images/lib_pic5.jpg" data-gal="prettyPhoto[gallery]"> -->
                            <div class="content-overlay"></div>
                            <img src="assets/images/lib_pic5.jpg" class="img-fluid w3layouts agileits" alt="portfolio-img">
                            
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item2 content mt-md-0 mt-4" data-id="id-2" data-type="cat-item-2">
                    <span class="image-block">
                        <!-- <a class="image-zoom" href="assets/images/lib_pic3.jpg" data-gal="prettyPhoto[gallery]"> -->
                            <div class="content-overlay"></div>
                            <img src="assets/images/lib_pic3.jpg" class="img-fluid w3layouts agileits" alt="portfolio-img">
                            
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item2 content mt-lg-0 mt-4" data-id="id-3" data-type="cat-item-3">
                    <span class="image-block">
                        <!-- <a class="image-zoom" href="assets/images/lib_pic2.jpg" data-gal="prettyPhoto[gallery]"> -->
                            <div class="content-overlay"></div>
                            <img src="assets/images/lib_pic2.jpg" class="img-fluid w3layouts agileits" alt="portfolio-img">
                           
                        </a>
                    </span>
                </div>
                
              
                
            </div>
            <!--end portfolio-area -->
        </div>
        <!-- //gallery container -->
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