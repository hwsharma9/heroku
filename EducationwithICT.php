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

    <style>
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
                <div class="content-left padding-border">
                    <!-- ADD NEW CONTENT DOWN HERE -->

                    <h3 style="text-align:center;margin: 20px 0">Education with ICT</h3>
                    <div class="news-wrapper">
                        <div class="all-news">
                            <!-- NEWS ITEMS ADD -->

                            <a href="assets/pdf/A REPORT ON MISSION EDUCATION THROUGH ICT.pdf">
                                <div class="news-card"><h1>A report on mission education through ICT</h1></div>
                            </a>
                            <a href="assets/pdf/Mission Document ICT.pdf">
                                <div class="news-card"><h1>Mission Document ICT</h1></div>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="sidebar content-right">
                    <div class="sidebar-content" id="sidebar">

                        <ul>
                            <a href="./academic_planning_committee.php">
                                <li><span>🔗</span>Academic Planning Committee</li>
                            </a>
                            <a href="./coursescheme.php">
                                <li><span>🔗</span>Course Scheme</li>
                            </a>
                            <a href="./assessment.php">
                                <li><span>🔗</span>Assessment</li>
                            </a>
                            <a href="./">
                                <li><span>🔗</span>Academic Calendar</li>
                            </a>
                        </ul>

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