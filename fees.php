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
                    <h1>Fees</h1>
                    <ul>
                        <a href="./">
                            <li class="content-link">Fees Structure for Students Admitted in 2020</li>
                        </a>
                        <a href="./">
                            <li class="content-link">Fees Structure for Students Admitted in 2019</li>
                        </a>
                        <a href="./">
                            <li class="content-link">Fees Structure for Students Admitted in 2018-20</li>
                        </a>

                        <h2 class="skid" id="fees-btn" style="padding-left:20px;">Previous year’s Fee Structures </h2>
                        <div id="fees-toggle">
                            <li class="content-link">Revised Fees Structure for students admitted in 2017-19</li>
                            <a href="./">
                                <li class="content-link">Fees Structure for students admitted in 2017</li>
                            </a>
                            <a href="./">
                                <li class="content-link">Fees Structure for students admitted in 2016</li>
                            </a>
                            <a href="./">
                                <li class="content-link">Fee Structure for students (admitted in 2014 and 2015)</li>
                            </a>
                            <a href="./">
                                <li class="content-link">For existing students(Admitted in 2012 & 2013)</li>
                            </a>
                        </div>
                    </ul>

                </div>

                <div class="sidebar content-right">
                    <div class="sidebar-content" id="sidebar">

                        <ul>
                            <a href="./coursesoffered.php">
                                <li><span>🔗</span>Courses Offered</li>
                            </a>
                            <a href="./">
                                <li><span>🔗</span>Admission Information Bulletin</li>
                            </a>
                            <a href="./howtoapply.php">
                                <li><span>🔗</span>How to Apply</li>
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
        $("#fees-toggle").hide("fast");
        $("#fees-btn").click(function() {
            $("#fees-toggle").toggle("fast");
        });
    });
    </script>
</body>

</html>