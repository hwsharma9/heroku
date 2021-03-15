<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="To achieve excellent standards of quality education by keeping
                            pace with rapidly changing technologies & create computer
                            professionals of global standards with capabilities of accepting
                            new challenges.">
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
                    <h3 style="text-align:center;margin: 20px 0">Publications</h3>
                    <div class="news-wrapper">
                        <div class="all-news">

                            <a href="./BookPublications.php">
                                <div class="news-card">
                                    <h1>Book Publications</h1>
                                </div>
                            </a>
                            <a href="./BookChapterPublications.php">
                                <div class="news-card">
                                    <h1>Book Chapter Publications</h1>
                                </div>
                            </a>
                            <a href="./JournalPublications.php">
                                <div class="news-card">
                                    <h1>Journal Publications</h1>
                                </div>
                            </a>
                            <a href="./ConferencePublications.php">
                                <div class="news-card">
                                    <h1>Conference Publications</h1>
                                </div>
                            </a>

                        </div>
                    </div>


                </div>

                <div class="sidebar content-right">
                    <div class="sidebar-content" id="sidebar">

                        <ul>
                            <a href="./DepartmentalResearchCommittee.php">
                                <li><span>🔗</span>Departmental Research Committee</li>
                            </a>
                            <a href="./ResearchSupervisors.php">
                                <li><span>🔗</span>Research Supervisors</li>
                            </a>
                            <a href="./Facilities.php">
                                <li><span>🔗</span>Facilities</li>
                            </a>

                            <a href="./upcoming_events.php">
                                <li><span>🔗</span>Seminars, Workshops & Conferences</li>
                            </a>
                            <a href="./CodeEthicsResearch.php">
                                <li><span>🔗</span>Code of Ethics</li>
                            </a>
                            <a href="./ResearchFellowship.php">
                                <li><span>🔗</span>Research Fellowship</li>
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