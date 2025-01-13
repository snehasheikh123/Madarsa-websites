<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/logo.png">
    <title>Visitors | Jamia Rabbani</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <style>
        .hover-image {
            transition: transform 0.3s ease, opacity 0.3s ease;
            /* display: inline-block; */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
            display: block;
            border-radius: 8px;
            height: 600px;
            width: 450px;
        }

        .hover-image:hover {
            transform: scale(1.1);
            opacity: 0.8;
        }

        .list {
            text-align: justify;

        }

        .para {
            text-align: justify;
        }


        .departments {
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
            font-family: serif;
            font-size: 2em;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        p {
            line-height: 1.8;
            font-size: 1.2em;
            color: #555;



        }

        .up_list ul li {
            line-height: 1.8;
            font-size:10px;
            color: #5e5e5e;
          
            
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
            height: 510px;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
            margin-left: 20px;
            margin-top: 20px;
        }

        .with-image .content>div {
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

        .head {
            border-bottom: 3px solid #1abc9c;
            padding: 20px;
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
                            Visitors </h2>
                        <p class="inner-page-para mt-2">
                            "Empowering Minds with Islamic Wisdom"</p>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Visitors</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="departments">
        <!-- <h2 class="dept">Other Departments at Jamia</h2><br> -->
        <div class="department day-mode">
            <center>
                <h1 class="head"> Some Important Personalities who have Visited Jamia </h1>
                <center><br>
        </div>

        <div class="department">
            <div class="content">
                <div class="up_list">
                    <ul class="list">
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px; list-style-type: circle;">Haz. Maulana Mufti Md. Zafirul Din Miftahi, member of the Ifta Council, Darul Uloom Deoband, and president Islamic Fiqh Academy, India.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Sayyed Nizamu Din (Ex- Amir Shariat Bihar, Urisa and Jharkhand, Ex-General Secretary All India Muslim Personal Law Board).</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Hazrat Moulana Md. Salim Qasmi ,Mohtamim Darul uloom Deoband ,Vice Prcedent All India Muslim prsnol Law Board .</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulan Qari Md. Usman Mansurpuri Prcedent of Jamiat ul ulamae Hind .(Ex-vice principal, Darul Uloom Deoband).</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Syyed Wali Rahmani Sharine Superior Khanqahe Rahmani, Monger, Bihar, Ameer Shariat the Imarat Sharaiya Bihar, Urisa, Jharkhand, Secretary to the Muslim Personal Law Board.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Hzrat Ml. Md. Asrarul Haque Qasmi . Prcedent of All India Milli Talimi Foundation Delhi.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Moulana Azizul Hasan Siddiqi .Mohtamim Madarsa Dinia Ghazipur U P .</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Maulana Ahmad Nasar of (Banaras) Founder and Principal Madrasa Arabiyah Imdadiyah, Banaras, Khalifa and Majaz Haz. Maulana Safiullah, Jalalabad, U.P.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Maulana Ammar Ahmad Qasmi, Founder and Principal Madrasa Afzalul Maarif, Allahabad.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Maulana Mufti Nimat Allah Qasmi, formerly chief Mufti Ifta Council, Amarat e Sharaiyyah, Patna.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Qari Md. Usman Qasmi (Bar Gaun, Darbhanga, Khalifa, Majaz Late Haz). Maulana Shah Ahamd Hasan Manorawi.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Ali Ahmad Nazir, (Siwan, Bihar) Khalifa, Majaz. Hazrat Maulana Shah Ahamd Hasan Manorawi.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Maulana Anisurrahman Qasmi, Nazim at the Imarate Sharaiyah, Phulwari Sharif, Patna.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Ml.Md. Eisa Mansoori ,Charman World Islamic Form.London U K .</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Ml. Mufti Md. Zahid Ali Khan Nazim Diniat Aligarh Muslim university Aligarh U P .</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Hazrat Ml. Ejaz Ahmad Azmi. Azamgarh U P.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Hazrat Ml. Abdurrab Azmi .Nazim Madarsa Anwarul uloom Jahanaganj ,Azamgarh ,U P .</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Ml. Alauddin Nadwi .Teacher Darululoom Nadwatul ulama Lucknow U P .</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Ml. Ubaidullah Asadi ,Shaikhul Hadis Jamia Arabia Hathora Banda.U P.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Late Haz. Maulana S. Abul Hasan Ali Nadwi (well-known accomplished Muslim author, thinker of the past century).</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Mufti Rashid Ahmad Ludhyanawi (of Pakistan).</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">The renowned faqih the Late Haz. Maulana Qazi Mujahidul Islam Qasmi (Patna, Bihar).</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Mufti Muzaffar Hussain (Saharanpur).</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Mufti Abdur Rahman Lajpuri (Gujarat author of the voluminous Fatawa Rahimiya).</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">(The late) Haz. Maulana Dr. Abdullah Abbas Nadwi (of Phulwari Sharif) Makkah Mukarramah.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Amirul Hind Late Haj. Maulana Sayyid Asad Madani (Delhi)Haz. Maulana Hanif Milli (Maharashter)(Azamgarh).</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Mujeebullah Nadwi (Azamgarh).</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Md. Rizwan-al-Qasmi, Founder-Principal Darul Uloom Sabilus Salam, Hyderabad.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Md. Salim Qasmi, Principal Darul Uloom (Waqf) Deoband.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">(The late) Haz. Maulana Merghubur Rahman, ex-Principal Darul Uloom, Deoband.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Sayyid Anzar Shah Kashmiri, formerly Shaikhul Hadith and Head of Teaching Staff (Waqf) Darul Uloom Deoband.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Shaikh Abdul Haq Azami, formerly Shaikhul Hadith, Darul Uloom Deoband.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Mufti Md. Taqi Usmani ex-Justice of the Islamic Court of Pakistan.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Saidur Rahman Azami, Principal Darul Uloom Nadwatul Ulama, Lucknow.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Mufti Said Ahmad Palanpur, Senior Muhaddis, Darul Uloom Deoband.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Sayyid Rashidu Din Hamidi, (Moradabad).</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Burhanu Din Sambhali, HoD the College of Shariah, Nadwatul Ulama, Lucknow.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Azhar Qasmi, Chief administrator Madrasa Husainya, Ranchi.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Anisur Rahman Qasmi Chief Administrator Imarate Sharaiya, (Patna).</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Kaka Saed Ahmad Umri, Chief Administrator Jamia Darus Salam, Umarabad, Tamil Nadu.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Mufti Md. Ashraf Ali Qasmi, Baqwi, Amire-Shariat Karnatka, Principal Jamia Sabihur Rashad, Bangalore.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Ghulam Muhammad Watnawi, Founder-Principal Jamia Ishaatul Uloom, Akkal Kuwwa (Maharashter).</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Atiq Ahmad Bastawi, lecturer in Fiqh & Hadith, Darul Uloom Nadwatul Ulama Lucknow.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana (Late) Hamidud Din Aqil Husami, Amir Millate Islamia, A.P., Founder- Principal Darul Uloom Hyderabad.</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Haz. Maulana Mufti Fuzailur Rahman Hillal Usmani, the Grand Mufti of the Punjab (India).</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="department with-image">
            <h3>
                <center style="margin-bottom: 20px;"> The Jamia is approved and certified by the following noted seats of Islamic learning:</center>
            </h3>
            <div class="content">
                <div class="up_list">

                    <ul class="list">
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Darul Uloom, Deoband</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Darul Loom, Deoband (waqf)</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Mazahire Uloom Saharanpur (new)</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Mazahire Uloom Saharanpur (waqf)</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Darul Uloom Nadwatul Ulama, Lucknow</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Jamiyyate Ulama-e-Hind (Delhi)</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Jamiyyate Ulama of Bihar</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Jamiyyate Ulama of Karnatka</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Imarate Sharaiyyah, Phulwari Sharif, Patna</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Tablighi Markaz, Nizamuddin, New Delhi</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Jamiyyat-al-Shaikh Abdullah Noori (Kuwait)</li>
                        <li style="font-size: 18px;color: #555;margin-bottom: 10px;list-style-type: circle;">Jamia Islamiya Akkal Kuwwa, Maharashter. Jamia Rabbani is a formal member of the League of the Islamic Arabic Madrasas (Rabitae Madarise Islamiya Arabiya), constituted by the Darul Uloom Deoband. Its membership No. is 768</li>
                    </ul>
                    <p class="para">Also, the Jamia has the membership of the Federation of Islamic Madrasas constituted by the Imarate Shariyya, Phulwari Sharif, Patna, Bihar.</p>
                </div>
                <img src="assets/images/gate2.jpg" alt="" class="hover-image">
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
    </script>
    <!--//MENU-JS-->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>