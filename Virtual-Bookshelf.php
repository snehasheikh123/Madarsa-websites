<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/logo.png">
    <title>Virtual Bookshelf | Jamia Rabbani</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <style>
        .team-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            justify-content: space-around;
            /* margin: 50px; */
        }

        .team-member {
            display: inline-block;
            margin: 15px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .team-card {
            background-color: #EBF4F6;
            width: 300px;
            height: 400px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .team-card img {
            width: 200px;
            height: 250px;
            /* border-radius: 50%; */
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .team-card h3 {
            margin: 10px 0 5px;
            font-size: 18px;
        }

        .team-card p {
            margin: 0;
            color: #888;
            font-size: 14px;
            text-align: center;
        }

        .social-icons {
            position: absolute;
            bottom: -50px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            transition: all 0.3s ease;
        
        }

        .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .team-member:hover .team-card {
            background-color: #B4D6CD;
            color: white;
        }

        .team-member:hover img {
            transform: scale(1.1);
        }

        .team-member:hover .social-icons {
            bottom: 1px;
            background-color: #b69d78;
            padding: 16px;
        }

        .team-member:hover .social-icons a {
            color: white;
        }
        .head h1{
            text-align: center;
            font-weight: bolder;
            padding: 10px;
            padding-top: 70px;
            border-bottom: 3px solid #1abc9c;
        }

        @media (min-width: 840px) {
    .team-container {
        justify-content: space-between; /* Adjust to evenly distribute items */
        margin: 40px;
    }

    .team-card {
        width: 350px; /* Increase the size of the card */
        height: 450px;
        padding: 35px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4); /* Slightly larger shadow */
    }

    .team-card img {
        width: 220px; /* Adjust image size */
        height: 270px;
    }

    .team-card h3 {
        font-size: 20px; /* Increase font size for larger screens */
    }

    .team-card p {
        font-size: 16px;
    }

    .social-icons a {
        font-size: 20px; /* Make icons slightly larger */
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
                            Virtual Bookshelf </h2>
                        <!-- <p class="inner-page-para mt-2">
                            Learn Anytime, Anywhere.
                            Accelerate Your Future.</p> -->
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Virtual Bookshelf </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

       <div class="head"><h1>Virtual Bookshelf</h1></div><br><br>
     

    <div class="team-container">
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book1.png" alt="Madison" class="team-photo">
                <h3>Book No-85</h3>
                <p>Updated On(2024-01-12)</p>
                <div class="social-icons">
                    <a href="assets/images/books/TazkiraFiqhal-AsrQazial-Qadat (1).pdf">Tazkira Fiqh al-Asr Qazi al-Qadat</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book2.png" alt="Harper" class="team-photo">
                <h3>Book No-84</h3>
                <p>Updated On(2024-01-12)</p>
                <div class="social-icons">
                    <a href="assets/images/books/TazkiraMaulanaIjazAhmadAzmi.pdf">Tazkira Maulana Ijaz Ahmad Azmi</a>
                   
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book3.png" alt="Isabella" class="team-photo">
                <h3>Book No-83</h3>
                <p>Updated On(2023-12-02)</p>
                <div class="social-icons">
                    <a href="assets/images/books/NawazalFiqhVolumeVI.pdf">Nawazal Fiqh Volume VI</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book4.png" alt="Charlotte" class="team-photo">
                <h3>Book No-82</h3>
                <p>Updated On(2023-12-02)</p>
                <div class="social-icons">
                    <a href="assets/images/books/NawazalFiqhVolumeV.pdf">Nawazal Fiqh Volume V</i></a>
                </div>
            </div>
        </div>
    </div>


    <div class="team-container">
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book5.png" alt="Madison" class="team-photo">
                <h3>Book No-81</h3>
                <p>Updated On(2023-12-02)</p>
                <div class="social-icons">
                    <a href="assets/images/books/NawazalFiqhVolumeIV.pdf">Nawazal Fiqh Volume IV</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book6.png" alt="Harper" class="team-photo">
                <h3>Book No-80</h3>
                <p>Updated On(2023-12-02)</p>
                <div class="social-icons">
                    <a href="assets/images/books/NawazalFiqhVolumeIII.pdf">Nawazal Fiqh Volume III</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book7.png" alt="Isabella" class="team-photo">
                <h3>Book No-79</h3>
                <p>Updated On(2023-12-02)</p>
                <div class="social-icons">
                    <a href="assets/images/books/NawazalFiqhVolumeII (1).pdf">Nawazal Fiqh Volume II</a>
                   
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book8.png" alt="Charlotte" class="team-photo">
                <h3>Book No-78</h3>
                <p>Updated On(2023-12-02)</p>
                <div class="social-icons">
                    <a href="assets/images/books/NawazalFiqhVolumeI.pdf">Nawazal Fiqh Volume I</a>
                  
                </div>
            </div>
        </div>
    </div>


    <div class="team-container">
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book9.png" alt="Madison" class="team-photo">
                <h3>Book No-77</h3>
                <p>Updated On(2023-12-02)</p>
                <div class="social-icons">
                    <a href="assets/images/books/TazkiraFiqhal-AsrQazial-Qadat (1).pdf">Tazkira Fiqh al-Asr Qazi al-Qadat</a>
                    
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book10.png" alt="Harper" class="team-photo">
                <h3>Book No-76</h3>
                <p>Updated On(05-01-2023)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Maszarat-Sahabah.pdf">Maszarat Sahabah</a>
                    
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book11.png" alt="Isabella" class="team-photo">
                <h3>Book No-75</h3>
                <p>Updated On(2022-11-08)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Fikha-Maquaran.pdf">Fikha Maquaran aur Fikha Mazhabi</a>
                   
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book12.png" alt="Charlotte" class="team-photo">
                <h3>Book No-74</h3>
                <p>Updated On(2022-11-08)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Khwateen-ki-Ala-Deeni.pdf">Khwateen ki Ala Deeni Wa Asri Taaleem</a>
                   
                </div>
            </div>
        </div>
     </div>


    <div class="team-container"> 
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book13.png" alt="Madison" class="team-photo">
                <h3>Book No-80</h3>
                <p>Updated On(2022-11-08)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Fikhi-Ekhtelafat.pdf">Fikhi Ekhtelafat ki Sharii Haisiyat</a>
                    
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book14.png" alt="Harper" class="team-photo">
                <h3>Book No-72</h3>
                <p>Updated On(2021-07-31)</p>
                <div class="social-icons">
                    <a href="assets/images/books/HAYAT_E_QUTBUL_HIND.pdf">HAYAT-E- QUTBUL HIND</a>
                    
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book15.png" alt="Isabella" class="team-photo">
                <h3>Book No-71</h3>
                <p>Updated On(2021-05-29)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Tazkira.pdf">Tazkira</a>
                  
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book16.png" alt="Charlotte" class="team-photo">
                <h3>Book No-70</h3>
                <p>Updated On(2021-01-02)</p>
                <div class="social-icons">
                    <a href="assets/images/books/KulyatAah.pdf">Kulyat Aah</a>
                </div>
            </div>
        </div>
    </div>


    <div class="team-container">
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book17.png" alt="Madison" class="team-photo">
                <h3>Book No-69</h3>
                <p>Updated On(2020-11-06)</p>
                <div class="social-icons">
                    <a href="assets/images//books/06_11_3.pdf">Nakshbandya Muzaddidya Mazhariya</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book18.png" alt="Harper" class="team-photo">
                <h3>Book No-68</h3>
                <p>Updated On(2020-11-06)</p>
                <div class="social-icons">
                    <a href="assets/images/books/06_11_2.pdf">Chist Ahle Behist</a>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book19.png" alt="Harper" class="team-photo">
                <h3>Book No-67</h3>
                <p>Updated On(2020-11-06)</p>
                <div class="social-icons">
                    <a href="assets/images/books/06_11_1.pdf">Mozaddid Alif Saani Shekh Ahmad Sarhind</a>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book20.png" alt="Harper" class="team-photo">
                <h3>Book No-66</h3>
                <p>Updated On(2020-10-08)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Maqame-E-Mahmud.pdf">Maqam-e-Mahmud</a>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="team-container">
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book21.png" alt="Harper" class="team-photo">
                <h3>Book No-65</h3>
                <p>Updated On(2020-06-04)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Yaadon_ke_Nakoos.pdf">Yaadon ke Nakoos</a>
                   
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book22.png" alt="Harper" class="team-photo">
                <h3>Book No-64</h3>
                <p>Updated On(2019-12-24)</p>
                <div class="social-icons">
                    <a href="assets/images/books/HAYAT_E_ABUL_MAHASIN.pdf">HAYAT_E_ ABUL_MAHASIN</a>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book23.png" alt="Harper" class="team-photo">
                <h3>Book No-63</h3>
                <p>Updated On(2019-06-19)</p>
                <div class="social-icons">
                    <a href="assets/images/books/TAZKIRA_ABUL_MAHASIN-1.pdf">Tazkira_Abul_Mahasin</a>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book24.png" alt="Harper" class="team-photo">
                <h3>Book No-62</h3>
                <p>Updated On(2017-12-27)</p>
                <div class="social-icons">
                    <a href="assets/images/books/NIKAH-O-TALAQ-AUR-SAMAJI-MASAIL.pdf">NIKAH-O-TALAQ-AUR-SAMAJI-MASAIL</a>
                    
                </div>
            </div>
        </div>

    </div>
    <div class="team-container">
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book25.png" alt="Harper" class="team-photo">
                <h3>Book No-61</h3>
                <p>Updated On(2017-12-27)</p>
                <div class="social-icons">
                    <a href="assets/images/books/maholiyati-aaloodgi-ahkam-o-masael.pdf">Maholiyati_Aaloodgi_Ahkam</a>
                   
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book26.png" alt="Harper" class="team-photo">
                <h3>Book No-59</h3>
                <p>Updated On(2017-12-27)</p>
                <div class="social-icons">
                    <a href="assets/images/books/SHAH-WALIULLAH-KI-FIQHI-NAZRIYAT.pdf">SHAH-WALIULLAH-KI-FIQHI-NAZRIYAT</a>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book27.png" alt="Harper" class="team-photo">
                <h3>Book No-58</h3>
                <p>Updated On(2017-12-27)</p>
                <div class="social-icons">
                    <a href="assets/images/books/HUQOOQ-E-INSANI-KA-ISLAMI-MANSHOOR.pdf">HUQOOQ-E-INSANI-KA-ISLAMI-MANSHOOR</a>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book28.png" alt="Harper" class="team-photo">
                <h3>Book No-57</h3>
                <p>Updated On(2017-12-27)</p>
                <div class="social-icons">
                    <a href="assets/images/books/ISLAMIC-SOLUTIONS.pdf">Islamic-solutions-to-the-muslims-Ideolog</a>
                </div>
            </div>
        </div>
    </div>
    <div class="team-container">
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book29.png" alt="Harper" class="team-photo">
                <h3>Book No-56</h3>
                <p>Updated On(2017-12-27)</p>
                <div class="social-icons">
                    <a href="assets/images/books/FAQEEH-E-ASAR-MEER-E-KARWAN.pdf">FAQEEH-E-ASAR-MEER-E-KARWAN.</a>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book30.png" alt="Harper" class="team-photo">
                <h3>Book No-55</h3>
                <p>Updated On(2017-12-27)</p>
                <div class="social-icons">
                    <a href="assets/images/books/AHD-E-ZAWAL-MEIN-MUSALMANON-KAY-LIYE-ISLAMI-HIDAYAAT.pdf">AHD-E-ZAWAL-MEIN-MUSALMANON-KAY-LIYE-ISLAMI-HIDAYAAT</a>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book31.png" alt="Harper" class="team-photo">
                <h3>Book No-54</h3>
                <p>Updated On(2017-12-27)</p>
                <div class="social-icons">
                    <a href="assets/images/books/QAWANEEN-ALAM-MAIN-ISLAMI-QANOON-KA-IMTEYAZ-VOL-01.pdf">QAWANEEN-ALAM-MAIN-ISLAMI-QANOON-KA-IMTEYAZ-VOL-01</a>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book32.png" alt="Harper" class="team-photo">
                <h3>Book No-53</h3>
                <p>Updated On(2019-01-30)</p>
                <div class="social-icons">
                    <a href="assets/images/books/mali-jurmana-ka-sharyee-hukm.pdf">mali-jurmana-ka-sharyee-hukm-tahqeeq-o-t</a>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="team-container">
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book33.png" alt="Harper" class="team-photo">
                <h3>Book No-52</h3>
                <p>Updated On(2017-12-27)</p>
                <div class="social-icons">
                    <a href="assets/images/books/TAZKIRA_HAZRAT_AAH_MUZAFFARPURI.pdf">TAZKIRA_HAZRAT_AAH_MUZAFFARPURI</a>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book34.png" alt="Harper" class="team-photo">
                <h3>Book No-51</h3>
                <p>Updated On(2017-10-11)</p>
                <div class="social-icons">
                    <a href="assets/images/books/MUQAM-E-MAHMOOD.pdf">MUQAM-E-MAHMOOD</a>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book35.png" alt="Harper" class="team-photo">
                <h3>Book No-50</h3>
                <p>Updated On(2017-09-22)</p>
                <div class="social-icons">
                    <a href="assets/images/books/dawat-o-tabligh-khadshat-aour-haqaeiq.pdf">dawat-o-tabligh-khadshat-aour-haqaeiq</a>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book36.png" alt="Harper" class="team-photo">
                <h3>Book No-49</h3>
                <p>Updated On(2017-12-27)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Hurmate-Musahrat-Ilmi-Tanqeeh.pdf">Hurmate-Musahrat-Ilmi-Tanqeeh</a>
                </div>
            </div>
        </div>
    </div>
    <div class="team-container">
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book37.png" alt="Harper" class="team-photo">
                <h3>Book No-48</h3>
                <p>Updated On(2017-10-10)</p>
                <div class="social-icons">
                    <a href="assets/images/books/MANSAB-E-SAHABAR.A.pdf">MANSAB-E-SAHABA</a>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book38.png" alt="Harper" class="team-photo">
                <h3>Book No-47</h3>
                <p>Updated On(2019-01-30)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Bai-wa-ijarah-ke-baz-naye-masaael.pdf">bai-wa-ijarah-ke-baz-naye-masael</a>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book39.png" alt="Harper" class="team-photo">
                <h3>Book No-46</h3>
                <p>Updated On(2017-01-21)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Khulas-e-seerat-e-paak.pdf">Khulas-e-seerat-e-paak</a>
                    
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book40.png" alt="Harper" class="team-photo">
                <h3>Book No-45</h3>
                <p>Updated On(2017-12-27)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Hazrat-Hakimul-ummat-ml.Md.pdf">Hazrat-Hakimul-ummat-ml.Md</a>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="team-container">
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book41.png" alt="Madison" class="team-photo">
                <h3>Book No-44</h3>
                <p>Updated On(2017-01-06)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Qabza-not-sona-chandi-on-lin-tijarat.pdf">Qabza-not-sona-chandi-on-lin-tijarat</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book42.png" alt="Harper" class="team-photo">
                <h3>Book No-43</h3>
                <p>Updated On(2016-12-06)</p>
                <div class="social-icons">
                    <a href="assets/images/books/hindustan.me-tadrise-fiqah-wa-usoole-fiqah.pdf">hindustan.me-tadrise-fiqah-wa-usoole-fiqah</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book43.png" alt="Isabella" class="team-photo">
                <h3>Book No-42</h3>
                <p>Updated On(2016-12-06)</p>
                <div class="social-icons">
                    <a href="assets/images/books/moulana-aejaz-ahmad-aazmi.pdf">moulana-aejaz-ahmad-aazmi</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book44.png" alt="Charlotte" class="team-photo">
                <h3>Book No-41</h3>
                <p>Updated On(2016-12-21)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Ghezaee-masnooaat-me-hillat-o-hurmat-ke-usool.pdf">Ghezaee-masnooaat-me-hillat-o-hurmat-ke-usool</a>
                </div>
            </div>
        </div>
    </div>

    <div class="team-container">
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book45.png" alt="Madison" class="team-photo">
                <h3>Book No-40</h3>
                <p>Updated On(2016-12-21)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Hindustan-me-adris-e-Hadis-tarikhi-aor-fanni-nuqtae-nazar-se.pdf">Hindustan-me-adris-e-Hadis-tarikhi-aor-fanni-nuqtae-nazar-se</a>
                   
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book46.png" alt="Harper" class="team-photo">
                <h3>Book No-39</h3>
                <p>Updated On(2017-12-27)</p>
                <div class="social-icons">
                    <a href="assets/images/books/GHAIR-MUSLIM-MULKON-MAIN-MUSALMANON-KAY-MASAIL.pdf">GHAIR-MUSLIM-MULKON-MAIN-MUSALMANON-KAY-MASAIL</a>  
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book47.png" alt="Isabella" class="team-photo">
                <h3>Book No-39</h3>
                <p>Updated On(2016-12-21)</p>
                <div class="social-icons">
                    <a href="assets/images/books/quran-ki-roshni-me-afrad-sazi.pdf">quran-ki-roshni-me-afrad-sazi</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book48.png" alt="Charlotte" class="team-photo">
                <h3>Book No-38</h3>
                <p>Updated On(2016-12-06)</p>
                <div class="social-icons">
                    <a href="assets/images/books/imam-aouzaee.pdf">imam-aouzaee</a>
                </div>
            </div>
        </div>
    </div>

    <div class="team-container">
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book49.png" alt="Madison" class="team-photo">
                <h3>Book No-37</h3>
                <p>Updated On(2016-12-22)</p>
                <div class="social-icons">
                    <a href="assets/images/books/aqd-e-Istisna-Tahqiq-o-Tatbiq.pdf">aqd-e-Istisna-Tahqiq-o-Tatbiq</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book50.png" alt="Harper" class="team-photo">
                <h3>Book No-36</h3>
                <p>Updated On(2016-12-22)</p>
                <div class="social-icons">
                    <a href="assets/images/books/walid-ke-sath-karobari-shirkat.pdf">walid-ke-sath-karobari-shirkat</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book51.png" alt="Isabella" class="team-photo">
                <h3>Book No-35</h3>
                <p>Updated On(2016-12-22)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Medical-Inshorence.pdf">Medical-Inshorence</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book52.png" alt="Charlotte" class="team-photo">
                <h3>Book No-34</h3>
                <p>Updated On(2016-12-22)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Mushtarkah-khandani-nezam.pdf">Mushtarkah-khandani-nezam</a>
                </div>
            </div>
        </div>
    </div>

    <div class="team-container">
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book53.png" alt="Madison" class="team-photo">
                <h3>Book No-33</h3>
                <p>Updated On(2016-12-22)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Ahle-Kitab-se-muta-alliq-baz-Ahkam.pdf">Ahle-Kitab-se-muta-alliq-baz-Ahkam</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book54.png" alt="Harper" class="team-photo">
                <h3>Book No-32</h3>
                <p>Updated On(2016-12-22)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Islami-inshorens(Nezam-e-Takaful).pdf">Islami-inshorens(Nezam-e-Takaful)</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book55.png" alt="Isabella" class="team-photo">
                <h3>Book No-31</h3>
                <p>Updated On(2016-12-09)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Distinguishing-Features-of-the-Islamic-Law-as-Compared-with-the-the-un-Islamic-legal-Systems-of-the-World.pdf">Distinguishing-Features-of-the-Islamic-L</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book56.png" alt="Charlotte" class="team-photo">
                <h3>Book No-30</h3>
                <p>Updated On(2016-12-07)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Bain-Mazhabi-Muzakrat.pdf">Bain-Mazhabi-Muzakrat</a>
                </div>
            </div>
        </div>
    </div>

    <div class="team-container">
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book57.png" alt="Madison" class="team-photo">
                <h3>Book No-29</h3>
                <p>Updated On(2016-12-05)</p>
                <div class="social-icons">
                    <a href="assets/images/books/al-yamin-o-walyasar-fil-aamal.pdf">al-yamin-o-walyasar-fil-aamal</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book58.png" alt="Harper" class="team-photo">
                <h3>Book No-08</h3>
                <p>Updated On(2016-12-03)</p>
                <div class="social-icons">
                    <a href="assets/images/books/Age-of-Decline-and-Islamic-Directives-for-Muslims.pdf">Age of Decline and Islamic Directives fo</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book59.png" alt="Isabella" class="team-photo">
                <h3>Book No-07</h3>
                <p>Updated On(2016-12-22)</p>
                <div class="social-icons">
                    <a href="assets/images/books/RESALA-Dawat-e-Haque.pdf">Resala-Dawat-e-Haque</a>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book60.png" alt="Charlotte" class="team-photo">
                <h3>Book No-06</h3>
                <p>Updated On(2016-09-15)</p>
                <div class="social-icons">
                    <a href="assets/images/books/HAZRAT-SHAH-WALIULLAH-in-the-mirror-of-his-juristic.pdf">Haz-Shah-Waliullah-in-the-Mirror-of-his-</a>
                </div>
            </div>
        </div>
    </div>
    <div class="team-container">
        <div class="team-member">
            <div class="team-card">
                <img src="assets/images/book61.png" alt="Madison" class="team-photo">
                <h3>Book No-5</h3>
                <p>Updated On(2016-12-03)</p>
                <div class="social-icons">
                    <a href="assets/images/books/The-Islamic-Statement-On-Human-Rights.pdf">islamic-statement-on-human-rights(Englis)</a>
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