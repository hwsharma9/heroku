<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="To achieve excellent standards of quality education by keeping pace with rapidly changing technologies & create computer professionals of global standards with capabilities of accepting new challenges.">
    <meta name="keywords" content="SCSIT, INDORE, DAVV, COMPUTER SCIENCE, COLLEGE">
    <meta name="author" content="scsit davv">
    <link rel="icon" href="./images/logo.png" type="image/png" sizes="16x16">
    <title>Scsit Davv</title>


    <!-- css include -->
    <link rel="stylesheet" href="./css/owl.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <!-- <link rel="preload" href="./css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="./css/style.css">
    </noscript> -->
    <style>
    .hr-right .owl-stage-outer {
        margin-right: 50px;
        margin-top: 30px;
        box-shadow: 5px 5px 20px black;
    }

    #placement-slider .owl-stage-outer {
        margin-right: 0px !important;
    }

    #vision-list {
        list-style-type: none;
    }
    </style>

</head>

<body>
    <div class="root">

        <!-- HEADER START   -->
        <?php include './includes/header.php';?>
        <!-- HEADER END -->

        <!-- BANNER IN HEADER -->
        <div class="hero">
            <div class="hr-left">
                <div class="hr-left-w">
                    <h1>School of Computer Science & Information Technology</h1>
                    <h3 style="">DEVI AHILYA VISHWAVIDYALAYA, INDORE</h3>
                    <h3 style="">UGC-SAP Supported</h3>
                </div>
            </div>
            <div class="hr-right">
                <div id="header-slider" class="owl-carousel owl-theme head-carousel">
                    <div class="item">
                        <img src="./images/hr-slider/F1.jpg" alt="SCSIT" loading="lazy" />
                    </div>
                    <div class="item">
                        <img src="./images/hr-slider/F2.jpg" alt="SCSIT" loading="lazy" />
                    </div>
                    <div class="item">
                        <img src="./images/hr-slider/F3.jpg" alt="SCSIT" loading="lazy" />
                    </div>
                    <div class="item">
                        <img src="./images/hr-slider/F4.jpg" alt="SCSIT" loading="lazy" />
                    </div>
                    <div class="item">
                        <img src="./images/hr-slider/F5.jpg" alt="SCSIT" loading="lazy" />
                    </div>
                    <div class="item">
                        <img src="./images/hr-slider/F6.jpg" alt="SCSIT" loading="lazy" />
                    </div>
                    <div class="item">
                        <img src="./images/hr-slider/F7.jpg" alt="SCSIT" loading="lazy" />
                    </div>
                </div>
            </div>
        </div>

        <!-- HEADLINE START   -->
        <?php include './includes/headline.php';?>
        <!-- HEADLINE END -->

        <!-- NEWS AND HEAD - nh -->
        <div class="flx nh">
            <!-- HEAD MESSAGE  -->
            <div class="flx-left">
                <div class="hm">
                    <div class="hm-w" class="head-anim">
                        <div class="head-flex-header">
                            <div class="head-image">
                                <img class="head-anim" src="./images/tanwani.jpg" loading="lazy" />
                            </div>
                            <h1 class="head-message-title head-anim">Head Message</h1>
                        </div>
                        <h2 class="head-anim">
                            Welcome to the School of Computer Science & Information Technology (SCSIT) - established in
                            1986 with funding from UGC for MCA programme. Later, the School started M.Sc.(Computer
                            Science) in 1987 with 2 crore funding from DRDO. Also, M.Tech (Computer Science) programme
                            was started in 1992 approved by AICTE. M.Tech (Network Management & Information Security)
                            and M.Tech (Software Engineering & Information Architecture) was started in 2009 approved by
                            AICTE. Keeping in view the social needs in the area of information technology, the
                            department is also running MBA (Computer Management), M.Sc. (Information Technology) and BCA
                            programme on self supported basis.
                            <a href="./head.php">
                                <span style=" font-size:14px" class="head-anim content-link">Read More</span>
                            </a>
                        </h2>
                        <h2 class="head-name head-anim">Dr. Sanjay Tanwani</h2>
                    </div>
                </div>
            </div>
            <!-- NEWS FEED -->
            <div class="flx-right">
                <div class="news-feed">
                    <div class="news-wrapper">
                        <h2>Latest @Scsit</h2>
                        <marquee direction="up" class="news-card-container" onMouseOver="this.stop()"
                            onMouseOut="this.start()">
                            <!-- NEWS START   -->
                            <?php include './includes/news.php';?>
                            <!-- NEWS END -->
                        </marquee>
                        <a href="./news.php">
                            <div id="news-show-btn" class="news-btn">view all</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- VISION AND MISSION  -->
        <div class="h-wr">
            <div class="h-wr-left anim">
                <!-- news feed -->
                <div class="nacc-card">
                    <h1 class="anim">Vision</h1>
                    <ul>
                        <li class="anim" id="vision-list">
                            "To achieve excellent standards of quality education by keeping
                            pace with rapidly changing technologies & create computer
                            professionals of global standards with capabilities of accepting
                            new challenges."
                        </li>
                    </ul>
                </div>
            </div>
            <div class="h-wr-right anim">
                <div class="nacc-card">
                    <h1>Mission</h1>
                    <ul>
                        <li class="anim">
                            To produce world-class professionals who have excellent
                            analytical skills, communication skills, team building spirit
                            and ability to work in cross cultural environment.
                        </li>
                        <li class="anim">
                            To produce international quality IT professionals, who can
                            independently design,develop and implement computer
                            applications.
                        </li>
                        <li class="anim">
                            Professionals who dedicate themselves to mankind, who are
                            environment conscious, follow social norms and ethics.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- PLACEMENT  -->
        <?php include './includes/placement2020.php';?>
        <!-- PLACEMENT  END -->

        <!-- COMPANIES  -->
        <?php include './includes/company-slider.php';?>
        <!-- COMPANIES  END -->



        <!-- FOOTER START   -->
        <?php include './includes/footer.php';?>
        <!-- FOOTER END -->

    </div>

    <!-- scripts -->
    <script src="./js/jquery.js"></script>
    <script src="./js/owl.js"></script>
    <script src="./js/homepage.js"></script>

</body>

</html>