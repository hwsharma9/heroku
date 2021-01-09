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
    <meta name="author" content="lishugupta">
    <title>Scsit Davv</title>
    <link rel="icon" href="./images/logo.png" type="image/png" sizes="16x16">

    <!-- SCRIPTS START   -->
    <?php include './includes/scriptincludes.php';?>
    <!-- SCRIPTS END -->
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
                    <h1>Course Scheme</h1>
                    <ul>
                        <a href="#">
                            <li class="content-link">Scheme July-Dec 2020 (Odd Semester)</li>
                        </a>
                    </ul>
                    <br>
                    <h1 class=" skid" id="previous-btn">Previous Years Course Schemes</h1>
                    <div id="previous-toggle">

                        <ul>
                            <a href="#">
                                <li class="content-link">Scheme July-Dec., 2019</li>
                            </a>
                            <a href="#">
                                <li class="content-link">Scheme Jan-May, 2019</li>
                            </a>
                            <a href="#">
                                <li class="content-link">Scheme July-Dec, 2018</li>
                            </a>
                            <a href="#">
                                <li class="content-link">Scheme Jan-May 2018</li>
                            </a>
                            <a href="#">
                                <li class="content-link">Scheme Jul-Dec 2017</li>
                            </a>
                            <a href="#">
                                <li class="content-link">Scheme Jan-May 2017</li>
                            </a>
                            <a href="#">
                                <li class="content-link">Scheme Jul-Dec 2016</li>
                            </a>
                            <a href="#">
                                <li class="content-link">Scheme Jan-May 2016</li>
                            </a>
                            <a href="#">
                                <li class="content-link">Scheme Jul-Dec 2015</li>
                            </a>
                            <a href="#">
                                <li class="content-link">Scheme Jan-May 2015</li>
                            </a>
                            <a href="#">
                                <li class="content-link">Scheme Jul-Dec 2014</li>
                            </a>
                            <a href="#">
                                <li class="content-link">Scheme Jan-May 2014</li>
                            </a>
                            <a href="#">
                                <li class="content-link">Scheme Jul-Dec 2013</li>
                            </a>
                            <a href="#">
                                <li class="content-link">Scheme PGDCA Jul-Dec 2015-16</li>
                            </a>
                        </ul>
                    </div>

                </div>

                <div class="sidebar content-right">
                    <div class="sidebar-content" id="sidebar">

                        <ul>
                            <a href="./">
                                <li><span>🔗</span>Academic Calendar</li>
                            </a>
                            <a href="./assessment.php">
                                <li><span>🔗</span>Assessment</li>
                            </a>
                            <a href="./academic_planning_committee.php">
                                <li><span>🔗</span>Academic Planning Committee</li>
                            </a>
                            <a href="./EducationwithICT.php">
                                <li><span>🔗</span>Education with ICT</li>
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
    <script>
    $(document).ready(function() {
        $("#previous-toggle").hide("fast");
        $("#previous-btn").click(function() {
            $("#previous-toggle").toggle("fast");
        });
    });
    </script>
</body>

</html>