<?php include 'call.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="CV-Maker helps you make you beautiful CV for free.">
    <meta name="author" content="Team - 'Abhay Chinmay  Piyush Vishal'">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <title>CV-Maker</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="home/css/bootstrap.css" rel="stylesheet">
    <link href="home/css/fontawesome-all.css" rel="stylesheet">
    <link href="home/css/line-awesome.css" rel="stylesheet">
    <link href="home/css/swiper.css" rel="stylesheet">
    <link href="home/css/magnific-popup.css" rel="stylesheet">
    <link href="home/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="home/css/1.3.0/css/line-awesome.min.css">
    <link rel="icon" href="home/images/favicon.png">
</head>

<body data-spy="scroll" data-target=".fixed-top" oncontextmenu="return false;">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <a class="navbar-brand logo-text page-scroll" href="index.php">CV-Maker</a>

        <!-- Image Logo
        <a class="navbar-brand logo-image color" href="index.php"><img src="home/images/your-logo-color.svg" alt="alternative"></a>
        <a class="navbar-brand logo-image white" href="index.php"><img src="home/images/your-logo-white.svg" alt="alternative"></a>-->

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#features">FEATURES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#schemes">SCHEMES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#screenshots">SCREENSHOTS</a>
                </li>

                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.php"><span class="item-text">TERMS CONDITIONS</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.php"><span class="item-text">PRIVACY POLICY</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">CONTACT</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="image-container">
                            <img class="img-fluid" src="home/images/title.png" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-7">
                        <div class="text-container">
                            <h1 class="h1-large">CV Solution For <span id="js-rotating">Freshers, Students, Developers, Designers, Marketers</span></h1>
                            <p class="p-large">For anyone feeling difficulty in designing presentable CV, CV-Maker is the perfect way to get your CV done in no time.</p>
                            <a class="btn-outline-lg page-scroll" href="formdef\form.php">START CREATING</a>
                            <a class="btn-outline-lg page-scroll" href="#schemes">CHOOSE SCHEME</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Features -->
    <div id="features" class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>FEATURES</h2>
                    <div class="p-heading p-large">CV-Maker is designed based on inputs from college students and freshers with many doubts in their minds about a good CV</div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">

                <!-- Tabs Links -->
                <ul class="nav nav-tabs" id="junoTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-cog fa-spin"></i>PRIME FEATURES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-binoculars"></i>LOOK FORWARD TO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-shield-alt"></i>SECURITY</a>
                    </li>
                </ul>
                <!-- end of tabs links -->


                <!-- Tabs Content-->
                <div class="tab-content" id="junoTabsContent">

                    <!-- Tab -->
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="container">
                            <div class="row">

                                <!-- Icon Cards Pane -->
                                <div class="col-lg-4">
                                    <div class="card left-pane first">
                                        <div class="card-body">
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Goal Oriented</h4>
                                                <p>Like any good platform we are also goal oriented. We offer free CV and no ad policy, to keep you away from distractions and smooth transition.</p>
                                            </div>
                                            <div class="card-icon">
                                                <i class="la la-compass"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card left-pane">
                                        <div class="card-body">
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Code Based</h4>
                                                <p>CV-Maker provides full data privacy. Unlike other counterparts we dont save or hold your data with us. Your personal detail stays with you.</p>
                                            </div>
                                            <div class="card-icon">
                                                <i class="la la-file-code"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card left-pane">
                                        <div class="card-body">
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Premium experience</h4>
                                                <p>Each part of this website is crafted keeping you in mind. You may not feel stiff or distracted while working so we designed visually appealing pages for you.</p>
                                            </div>
                                            <div class="card-icon">
                                                <i class="la la-diamond"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of icon cards pane -->

                                <!-- Image Pane -->
                                <div class="col-lg-4">
                                    <img class="img-fluid" src="home/images/defaultcv.png" alt="alternative">
                                </div>
                                <!-- end of image pane -->

                                <!-- Icon Cards Pane -->
                                <div class="col-lg-4">
                                    <div class="card right-pane first">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <i class="la la-calendar-o"></i>
                                            </div>
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Wait-less</h4>
                                                <p>CV-Maker does not makes you wait for you CV to be prepared. You get to print or download you CV right away.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card right-pane">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <i class="la la-brain"></i>
                                            </div>
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Easy Reading</h4>
                                                <p>We have designed CV-Maker in such a way that you get stress free reading and using experience.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card right-pane">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <i class="la la-download"></i>
                                            </div>
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Downloadable</h4>
                                                <p>Get CV printed directly through our page or download it and print as many times as you want.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of icon cards pane -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                        <div class="container">
                            <div class="row">

                                <!-- Image Pane -->
                                <div class="col-md-4">
                                    <img class="img-fluid" src="home/images/grey(1).png" alt="alternative">
                                </div>
                                <!-- end of image pane -->

                                <!-- Text And Icon Cards Area -->
                                <div class="col-md-8">
                                    <div class="text-area">
                                        <h3>Your prime concerns</h3>
                                        <p>We spent a lot of time in accessing prime user concerns. Thus we created CV-Maker in such way that your personal data may not be misused. You can always have a look at our <a class="pink" href="privacy-policy.php">privacy policy</a>.</p>
                                    </div> <!-- end of text-area -->

                                    <div class="icon-cards-area">
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="la la-cube"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Good Foundation</h4>
                                                <p>A good CV always makes an impression apart from your inter-personal skills. Thus a good CV is what we give and help you create <b>good foundation</b> for you interview.</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="la la-brain"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Easy Reading</h4>
                                                <p>We have designed CV-Maker in such a way that you get stress free reading and using experience.</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="la la-calendar-o"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Wait-less</h4>
                                                <p>CV-Maker does not makes you wait for you CV to be prepared. You get to print or download you CV right away.</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="la la-file-code"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Code Based</h4>
                                                <p>CV-Maker provides full data privacy. Unlike other counterparts we dont save or hold your data with us. Your personal detail stays with you.</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of icon cards area -->
                                </div> <!-- end of col-md-8 -->
                                <!-- end of text and icon cards area -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                        <div class="container">
                            <div class="row">

                                <!-- Text And Icon Cards Area -->
                                <div class="col-md-8">
                                    <div class="icon-cards-area">
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="la la-user-secret"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Privacy</h4>
                                                <p>Your data is saved nowhere while creating your CV so no fear for data theft or misuse.</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="la la-eye-slash"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">No eyes on you</h4>
                                                <p>We let no one track you, you are free to fill in your CV credentials on CV-Maker.</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="la la-user-shield"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Interference</h4>
                                                <p>To safeguard your personal details we have good security measures, so that only you may be looking and interacting with your CV and its information.</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="la la-brain"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Easy Reading</h4>
                                                <p>We have designed CV-Maker in such a way that you get stress free reading and using experience.</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of icon cards area -->

                                    <div class="text-area">
                                        <h3>More about security</h3>
                                        <p>We uphold user privacy and data security. That is why we said no to saving data with us. Plus zero ads guarantee also ensures that no third party access to your data is ensured. Feel free to check our<a class="pink" href="terms-conditions.php">terms and conditions</a> & <a class="pink" href="privacy-policy.php">privacy policy</a>.</p>
                                    </div> <!-- end of text-area -->
                                </div> <!-- end of col-md-8 -->
                                <!-- end of text and icon cards area -->

                                <!-- Image Pane -->
                                <div class="col-md-4">
                                    <img class="img-fluid" src="home/images/tan(1).png" alt="alternative">
                                </div>
                                <!-- end of image pane -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div><!-- end of tab-pane -->
                    <!-- end of tab -->

                </div> <!-- end of tab-content -->
                <!-- end of tabs content -->

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of tabs -->
    <!-- end of features -->


    <!-- Scheme 1 -->
    <div id="schemes" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="home/images/grey.png" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-md-6">
                    <div class="text-container">
                        <h3>Choose grey</h3>
                        <p>CV-Maker provides you with color option for your CV. Choose grey and flaunt shades of grey on your CV.</p>
                        <a class="btn-outline-reg popup-with-move-anim" href="#schemes-lightbox-1">DETAILS</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of schemes 1 -->


    <!-- Scheme 2 -->
    <div class="basic-2">
        <div class="second">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-container">
                            <h3>Goldenrod-Tan</h3>
                            <p>Among various color options to choose from, this color scheme gives you stellar look on your CV with premium colors.</p>
                            <a class="btn-outline-reg popup-with-move-anim" href="#schemes-lightbox-2">DETAILS</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-md-6">
                        <img class="img-fluid" src="home/images/tan.png" alt="alternative">
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of second -->
    </div> <!-- end of basic-2 -->
    <!-- end of schemes 2 -->

    <!-- Scheme 3 -->
    <div class="basic-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="home/images/defsmall.png" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-md-6">
                    <div class="text-container">
                        <h3>Light Green</h3>
                        <p>CV maker provides the light green template as a default, as it is a combination of two classic shades of green.</p>
                        <a class="btn-outline-reg popup-with-move-anim" href="#schemes-lightbox-3">DETAILS</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of schemes 3 -->


    <!-- Scheme Lightboxes -->
    <!-- Lightbox -->
    <div id="schemes-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-6">
                <img class="img-fluid" src="home/images/grey(1).png" alt="alternative">
            </div>
            <div class="col-lg-6">
                <h3>Choose Grey</h3>
                <hr>
                <p>You get Slategrey, Lightgrey and Light Slategrey color combination on your CV. Your text data in default black color.</p>
                <h4>Why Grey</h4>
                <p>It is very subtle color and is also the essence of black and white photography. It hides nothing, revealing all texture.</p>
                <p>You should definitely give it a try when you need a non-aging feel on your CV.</p>
                <table>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-file-alt"></i></td>
                        <td>Impressive layout</td>
                    </tr>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-align-left"></i></td>
                        <td>Distinctive text</td>
                    </tr>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-image"></i></td>
                        <td>Visually appealing</td>
                    </tr>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-palette"></i></td>
                        <td>Classic Shade</td>
                    </tr>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-glasses"></i></td>
                        <td>Eye catching</td>
                    </tr>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-code"></i></td>
                        <td>Well-structured</td>
                    </tr>
                </table>
                <a class="btn-solid-reg" href="formgrey/form.php">Choose</a> <a class="btn-outline-reg mfp-close as-button" href="#schemes">BACK</a>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="schemes-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-6">
                <img class="img-fluid" src="home/images/tan(1).png" alt="alternative">
            </div>
            <div class="col-lg-6">
                <h3>Choose Goldenrod-Tan</h3>
                <hr>
                <p>You get Burylwood, Goldenrod and Tan color combination on your CV. Your text data in default black color.</p>
                <h4>Why Goldenrod-Tan</h4>
                <p>This combination of light, bright and soothing colors gives a premium touch to the color scheme of your CV.</p>
                <p>You should definitely give it a try when you need a classy look on your CV.</p>
                <table>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-file-alt"></i></td>
                        <td>Impressive layout</td>
                    </tr>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-align-left"></i></td>
                        <td>Distinctive text</td>
                    </tr>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-image"></i></td>
                        <td>Visually appealing</td>
                    </tr>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-palette"></i></td>
                        <td>Classic Shade</td>
                    </tr>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-glasses"></i></td>
                        <td>Eye catching</td>
                    </tr>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-code"></i></td>
                        <td>Well-structured</td>
                    </tr>
                </table>
                <a class="btn-solid-reg" href="formtan/form.php">Choose</a> <a class="btn-outline-reg mfp-close as-button" href="#schemes">BACK</a>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="schemes-lightbox-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-6">
                <img class="img-fluid" src="home/images/defaultcv.png" alt="alternative">
            </div>
            <div class="col-lg-6">
                <h3>Light Green</h3>
                <hr>
                <p>CV maker provides the light green template as a default, as it is a combination of two classic shades of green.</p>
                <h4>Why Light Green</h4>
                <p>This combination of light, cool and classy colors gives a premium touch to the color scheme of your CV.</p>
                <p>You should definitely give it a try when you need a classy look on your CV.</p>
                <table>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-file-alt"></i></td>
                        <td>Impressive layout</td>
                    </tr>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-align-left"></i></td>
                        <td>Distinctive text</td>
                    </tr>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-image"></i></td>
                        <td>Visually appealing</td>
                    </tr>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-palette"></i></td>
                        <td>Classic Shade</td>
                    </tr>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-glasses"></i></td>
                        <td>Eye catching</td>
                    </tr>
                    <tr>
                        <td class="icon-cell"><i class="fas fa-code"></i></td>
                        <td>Well-structured</td>
                    </tr>
                </table>
                <a class="btn-solid-reg" href="formdef/form.php">Choose</a> <a class="btn-outline-reg mfp-close as-button" href="#schemes">BACK</a>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- end of schemes lightboxes -->


    <!-- Screenshots -->
    <div id="screenshots" class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="home/images/defaultcv.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="home/images/defaultcv.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="home/images/cvi2.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="home/images/cvi2.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="home/images/grey(2).png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="home/images/grey(2).png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="home/images/cvi4.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="home/images/cvi4.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="home/images/tan(1).png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="home/images/tan(1).png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="home/images/cvi6.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="home/images/cvi6.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="home/images/cvi7.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="home/images/cvi7.jpg" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="home/images/cvi8.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="home/images/cvi8.jpg" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="home/images/cvi5.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="home/images/cvi5.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="home/images/cvi6.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="home/images/cvi6.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of screenshots -->


    <!-- Small Features -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image"><i class="la la-clipboard-check"></i></div>
                        <div class="card-body">
                            <h4 class="card-title">Select Scheme</h4>
                            <p>First step is to select one of the given provided color schemes or you use our default color scheme.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image"><i class="la la-edit"></i></div>
                        <div class="card-body">
                            <h4 class="card-title">Build your CV</h4>
                            <p>Stop wasting time waiting for CV to arrive on your mail. <b>Build your CV and print it directly</b>.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image"><i class="la la-cloud-download"></i></div>
                        <div class="card-body">
                            <h4 class="card-title">Download</h4>
                            <p>You have a choice to print your CV straight away or <b>download it to print repeatedly</b>.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->


    </div> <!-- end of cards-1 -->
    <!-- end of small features -->


    <!-- About -->
    <div id="about" class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=nn3hYmgK3ek" data-effect="fadeIn">
                            <img class="img-fluid" src="home/images/about-video-frame.png" alt="alternative">
                        </a>
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                    <!-- Text Slider -->
                    <div class="slider-area">
                        <div class="slider-container">
                            <div class="swiper-container text-slider">
                                <div class="swiper-wrapper">

                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <span>
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </span>
                                        <p class="testimonial-text p-large">I love using CV-Maker for building my CV and Resume. It meets all my requirements and it actually help.</p>
                                        <p class="testimonial-author">User1</p>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->

                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <span>
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </span>
                                        <p class="testimonial-text p-large">After trying out a large number of CV building websites I decided to give CV-Maker a try and I fell in love with the convenience it gives.</p>
                                        <p class="testimonial-author">User2</p>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->

                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <span>
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </span>
                                        <p class="testimonial-text p-large">Never dreamed I could build so fast and without a single doubt.</p>
                                        <p class="testimonial-author">User3</p>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->

                                </div> <!-- end of swiper-wrapper -->

                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- end of add pagination -->

                            </div> <!-- end of swiper-container -->
                        </div> <!-- end of slider-container -->
                    </div> <!-- end of slider-area -->
                    <!-- end of text-slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of about -->


    <!-- Download -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Counter -->
                    <div id="counter">
                        <div class="cell">
                            <div class="counter-value number-count" data-count="300">1</div>
                            <p class="counter-info">CV<br>Downloaded</p>
                        </div>
                        <div class="cell">
                            <div class="counter-value number-count" data-count="200">1</div>
                            <p class="counter-info">CV<br>Printed</p>
                        </div>
                        <div class="cell">
                            <div class="counter-value number-count" data-count="190">1</div>
                            <p class="counter-info">Good<br>Reviews</p>
                        </div>
                    </div>
                    <!-- end of counter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-sm-12 col-md-9 col-lg-6">
                    <div class="text-container">
                        <div class="p-large">Start Using CV-Maker To Begin Improving Your CV And CV Building Skills.</div>
                        <a class="btn-outline-lg page-scroll" href="formdef/form.php">START CREATING</a>
                        <a class="btn-outline-lg page-scroll" href="#schemes">CHOOSE SCHEME</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of download -->


    <!-- More Apps -->
    <div class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT CREATORS</h2>
                    <div class="p-heading p-large">We specialize in UI/UX, front-end designing, back-end development and web solutions. We also provide Website Designing & Development, Web Based Customized Software Development, Web Hosting, Domain Name Registration, SEO & Web Promotion, SMS Gateway Services, Logo Designs & Multimedia Development</div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="container">
                <div class="row row-cols-4">
                    <!-- Card -->
                    <div class="col card">
                        <div class="card-image">
                            <img class="img-fluid" src="home/images/chinmay.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Chinmay Kala</h4>
                            <p>Front-end Designing, Back-end Development and Technical Support.</p>
                            <span class="fa-stack">
                                <a href="https://github.com/chinmaykala">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="mailto:chin.19.51@gmail.com">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-google fa-stack-1x"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="col card">
                        <div class="card-image">
                            <img class="img-fluid" src="home/images/vishal.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Vishal Pandey</h4>
                            <p>UI/UX, Front-end Designing, Back-end and Technical Support.</p>
                            <span class="fa-stack">
                                <a href="https://github.com/Vishal-Pandey-git">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="mailto:vishalpandey010195@gmail.com">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-google fa-stack-1x"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="col card">
                        <div class="card-image">
                            <img class="img-fluid" src="home/images/piyush.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Piyush</h4>
                            <p>Debugging, Testing,Back-end Development and Technical Support.</p>
                            <span class="fa-stack">
                                <a href="https://github.com/piyushg19dec">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="mailto:piyushg19dec@gmail.com">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-google fa-stack-1x"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!--card-->
                    <div class="col card">
                        <div class="card-image">
                            <img class="img-fluid" src="home/images/abhay.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Abhay Yadav</h4>
                            <p>Content Writting, Testing, Front-end and Technical Support.</p>
                            <span class="fa-stack">
                                <a href="https://github.com/Abhay144">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="mailto:abhaykumaryadav144@gmail.com">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-google fa-stack-1x"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <!--end of card-->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of more apps -->


    <!-- Newsletter -->
    <div class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>NEWSLETTER</h2>
                    <p class="p-large">From time to time we will add more schemes and develop CV-Maker more with quality updates. Stay connected by registering for the newsletter right now</p>

                    <!-- Newsletter Form -->
                    <form id="newsletterForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="nemail" required>
                            <label class="label-control" for="nemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="nterms" value="Agreed-to-Terms" required>I have read and agree to CV-Maker's <a class="underline" href="privacy-policy.php">Privacy Policy</a> and <a class="underline" href="terms-conditions.php">Terms Conditions</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SIGN UP</button>
                        </div>
                        <div class="form-message">
                            <div id="nmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of newsletter form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of newsletter -->


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>CONTACT</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Don't hesitate to give us a call or send us a contact form message</li>
                        <li><i class="fas fa-map-marker-alt"></i>College of Management Studies, Ragendra Swarup Knowledge City, Unnao, Uttar Pradesh, India</li>
                        <li><i class="fas fa-phone"></i><a class="white" href="tel:0512000000">+91 0123456789</a></li>
                        <li><i class="fas fa-envelope"></i><a class="white" href="mailto:cvmail@outlook.com">cvmail@outlook.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="home/images/contact-team.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I have read and agree to CV-Maker's <a class="white" href="privacy-policy.php">Privacy Policy</a> and <a class="white" href="terms-conditions.php">Terms Conditions</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>About CV-Maker</h4>
                        <p>We're passionate about creating a hassle-free CV for you</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Our business partners <a class="pink" href="https://github.com/Vishal-Pandey-git/culminate.com">culminate.com</a> and <a class="pink" href="https://github.com/chinmaykala/TaxiGo">taxigo.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Read our <a class="pink" href="terms-conditions.php">Terms & Conditions</a>, <a class="pink" href="privacy-policy.php">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © CV-Maker <a class="white" href="https://github.com/chinmaykala/CV-Maker">CV-Maker.com</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <script src="home/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="home/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="home/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="home/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="home/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="home/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="home/js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="home/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="home/js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>