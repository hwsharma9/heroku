<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="To achieve excellent standards of quality education by keeping pace with rapidly changing technologies & create computer professionals of global standards with capabilities of accepting new challenges.">
    <meta name="keywords" content="SCSIT, INDORE, DAVV, COMPUTER SCIENCE, COLLEGE">
    <meta name="author" content="scsit davv">
    <title>Scsit Davv</title>
    <link rel="icon" href="./images/logo.png" type="image/png" sizes="16x16">

    <!-- SCRIPTS START   -->
    <?php include './includes/scriptincludes.php';?>
    <!-- SCRIPTS END -->
    <style type="text/css">
        .content-left {
            border: none;
        }

        .content-left h1 {
            font-size: 16px;
        }

        .news-card {
            padding: 10px;
            margin: 10px 0;
        }
    </style>
</head>

<body>

    <div class="root">
        <!-- HEADER START   -->
        <?php include './includes/header.php';?>
        <!-- HEADER END -->

        <div class="page-title"></div>

        <!-- main content area -->
        <div class="primary-container">
            <div class="main-content-area" id="main-content-area">
                <div class="content-left  padding-border">
                    <!-- ADD NEW CONTENT DOWN HERE -->
                    <h3 style="text-align:center;margin: 20px 0">Student Life</h3>
                    <div class="news-wrapper">
                        <div class="all-news">
                            <a href="./wificampus.php">
                                <div class="news-card"><h1>Wifi Campus</h1></div>
                            </a>
                            <a href="./nss.php">
                                <div class="news-card"><h1>National Service Scheme (NSS)</h1></div>
                            </a>
                            <a href="./learnbyearnscheme.php">
                                <div class="news-card"><h1>Learn by Earn Scheme</h1></div>
                            </a>
                            <a href="./remedialclasses.php">
                                <div class="news-card"><h1>Remedial Classes</h1></div>
                            </a>
                            <a href="./languagelab.php">
                                <div class="news-card"><h1>Language Lab</h1></div>
                            </a>
                          <!--  <a href="./swachhbharatabhiyan.php">
                                <div class="news-card"><h1>Swachh Bharat Abhiyan</h1></div>
                            </a>
                            -->
                            <a href="./samarpan.php">
                                <div class="news-card"><h1>SAMARPAN</h1></div>
                            </a>
                            <a href="./bloodbonation.php">
                                <div class="news-card"><h1>Blood Donation Camp</h1></div>
                            </a>
                            <a href="./treeplantation.php">
                                <div class="news-card"><h1>Tree Plantation</h1></div>
                            </a>
                            <a href="./sports.php">
                                <div class="news-card"><h1>Sports</h1></div>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="sidebar content-right">
                    <div class="sidebar-content" id="sidebar">
                        <!-- SIDEBAR LINKS START   -->
                        <?php include './includes/sidebarlinks.php';?>
                        <!-- SIDEBAR LINKS END -->

                    </div>
                </div>
            </div>
        </div>


        <!-- FOOTER START   -->
        <?php include './includes/footer.php';?>
        <!-- FOOTER END -->

    </div>


</body>

</html>