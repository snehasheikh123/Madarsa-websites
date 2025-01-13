

<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/logo.png">
    <title>Requirement | Jamia Rabbani</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <style>
        
.departments{
    max-width: 1100px;
    margin: 40px auto;
    padding: 20px;
    /* background: #fff; */
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
}

h2 {
    font-size: 2.5em;
    margin-bottom: 40px;
    text-align: center;
    color: #444;
   
    padding-bottom: 10px;
    letter-spacing: 2px;
}

.department {
    margin-bottom: 0px;
    padding: 40px;
    border-bottom: 1px solid #ddd;

}

.department:last-child {
    border-bottom: none;
}

h3 {
    font-family:  serif;
    font-size: 2em;
    margin-bottom: 10px;
    color: #2c3e50;
}

p {
    line-height: 1.8;
    font-size: 1.2em;
    color: #555;
}

.with-image .content {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

.with-image img {
    flex-shrink: 0;
    width: 400px;
    height: auto;
    border-radius: 12px;
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
    margin-left: 20px;
    margin-top: 20px;
}

.with-image .content > div {
    flex: 1;
    margin-left: 20px;
}

@media (max-width: 768px) {
    .with-image .content {
        flex-direction: column;
        text-align: center;
    }

    .with-image img {
        margin: 20px 0;
        width: 100%;
    }

    h3 {
        font-size: 1.8em;
    }

    p {
        font-size: 1.1em;
    }
}

@media (max-width: 480px) {
    h2 {
        font-size: 1.8em;
    }

    h3 {
        font-size: 1.5em;
    }

    p {
        font-size: 1em;
    }

    .with-image img {
        width: 100%;
    }
}
.dept{
    border-bottom: 3px solid #1abc9c;
}

    </style>
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
            Other Department </h2>
          
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
        <section class="departments">
            <h2 class="dept">Other Departments at Jamia</h2><br>

            <div class="department">
                <center>
                    <h3>
                        <img src="assets/images/darul.png" height="40px" width="40px"> Darul Ifta   </h3><center><br>
                <p>For the religious guidance of the Muslim masses in every-day problems, the Jamia has established the Darul-Ifta. The Darul-Ifta offers solutions to the queries of the Muslims in the light of the Islamic Shariat.</p>
            </div>

            <div class="department with-image">
                <div class="content">
                <div>
                <h3>Matbakh (Kitchen System)</h3><br>
                        <p>Since the Jamia is a residential institution of the religious learning it has a well-managed kitchen system which is responsible for the preparation and provision of the food for a number of three hundred odd hostler students and the members of the teaching and non-teaching staff. The food, lodging and education are provided free of cost. Also, the Jamia offers monthly stipends to the ready students as well.</p>
                    </div>
                    <img src="assets/images/WhatsApp Image 2024-08-23 at 23.54.14_793fd6ac.jpg" alt="Tahzibul-Bayan">
                    
                </div>
            </div>

            <div class="department with-image">
                <div class="content">
                    <img src="assets/images/s-pic3.jpg" alt="Tahzibul-Bayan">
                    <div>
                        <h3>Tahzibul-Bayan</h3><br>
                        <p>In order to prepare the students for a better service of the Muslim Community and the country at large, and to improve and sharpen their literary taste, the Jamia has established the Anjuman Tahzeebul Bayan. Under the care of the Anjuman, the students take part in weekly programs of orations in Urdu, Arabic, Persian, English Languages, verse-recitation, Naat (Praising the Holy Prophet in verse), and Quranic and Hadith words of God-remembrance. The Anjuman also holds its yearly cultural and informative programs in which the students of the Jamia are given opportunities to demonstrate their writing and orational capabilities before the general Muslims attending the programs.</p>
                    </div>
                </div>
            </div>

            <div class="department">
                <h3>Imdadul Muslimin</h3><br>
                <p>This department is intended to solve the financial problems of the needy Muslims and widows. It offers monthly assistance to a number of poor, disabled, and indigent local Muslims and widows. It also offers assistance, within the range of its limited scope of means, at the occasion of the marriage of poor Muslim girls. This department is proving very useful for general Muslims.</p>
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