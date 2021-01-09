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
<style>
.skid {
    background-color: #f1f5fd;
    border-radius: 10px;
    padding: 3px;
    color: #343434;
}

.skid:hover {
    color: #121212;
}
</style>

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
                    <h1 class="bca-btn skid ">Bachelor of Computer Application</h1>
                    <ul class="bca-toggle">
                        <a href="#">
                            <li class="content-link">Bachelor of Computer Application I July Section A 2019</li>
                        </a>
                        <a href="#">
                            <li class="content-link">Bachelor of Computer Application I July Section B 2019</li>
                        </a>
                        <a href="#">
                            <li class="content-link">Bachelor of Computer Application Batch A II Semester</li>
                        </a>
                        <a href="#">
                            <li class="content-link">Bachelor of Computer Application Batch B II Semester</li>
                        </a>
                        <a href="#">
                            <li class="content-link">Bachelor of Computer Application III July 2019</li>
                        </a>
                        <a href="#">
                            <li class="content-link">Bachelor of Computer Application IV Semester</li>
                        </a>
                        <a href="#">
                            <li class="content-link">Bachelor of Computer Application V Semester</li>
                        </a>
                        <a href="#">
                            <li class="content-link">Bachelor of Computer Application VI Semester</li>
                        </a>
                    </ul>
                    <h1 class="mca-btn skid">Master of Computer Application</h1>
                    <ul class="mca-toggle">
                        <li class="content-link">Master of Computer Application I Semester</li>
                        <li class="content-link">Master of Computer Application II Semester</li>
                        <li class="content-link">Master of Computer Application III Semester</li>
                        <li class="content-link">Master of Computer Application IV Semester</li>
                        <li class="content-link">Master of Computer Application V Semester</li>
                    </ul>
                    <h1 class="mcaa-btn skid">Master of Computer Application (Integrated) / BCA (Hons.)</h1>
                    <ul class="mcaa-toggle">
                        <li class="content-link">
                            Master of Computer Application (Integrated) I Semester / BCA (Hons.) VII Semester
                        </li>
                        <li class="content-link">Master of Computer Application (Integrated) II Semester</li>
                        <li class="content-link">Master of Computer Application (Integrated) III Semester</li>
                        <li class="content-link">Master of Computer Application (Integrated) IV Semester</li>
                        <li class="content-link">Master of Computer Application (Integrated) V Semester</li>
                        <li class="content-link">Master of Computer Application (Integrated) VI Semester</li>
                    </ul>
                    <h1 class="msc-btn skid">Master of Science(CS/IT)</h1>
                    <ul class="msc-toggle">
                        <li class="content-link">Master of Science(CS/IT) I Semester</li>
                        <li class="content-link">Master of Science(CS/IT) II Semester</li>
                        <li class="content-link">Master of Science(CS/IT) III Semester</li>
                        <li class="content-link">Master of Science(CS/IT) IV Semester</li>
                    </ul>
                    <h1 class="mba-btn skid">Master of Business Administration(CM)</h1>
                    <ul class="mba-toggle">
                        <li class="content-link">Master of Business Administration(CM) I Semester</li>
                        <li class="content-link">Master of Business Administration(CM) II Semester</li>
                        <li class="content-link">Master of Business Administration(CM) III Semester</li>
                        <li class="content-link">Master of Business Administration(CM) IV Semester</li>
                    </ul>
                    <h4 class="" style="margin: 20px 0">For Old Curriculum <a href="./previous_Student_kit.php"
                            class="content-link">click here </a></h4>
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

    <script>
    $(document).ready(function() {
        // bca
        $(".bca-toggle").hide("fast");
        $(".bca-btn").click(function() {
            $(".bca-toggle").toggle("fast");
        });
        // mca
        $(".mca-toggle").hide("fast");
        $(".mca-btn").click(function() {
            $(".mca-toggle").toggle("fast");
        });
        // mca2
        $(".mcaa-toggle").hide("fast");
        $(".mcaa-btn").click(function() {
            $(".mcaa-toggle").toggle("fast");
        });
        // msc
        $(".msc-toggle").hide("fast");
        $(".msc-btn").click(function() {
            $(".msc-toggle").toggle("fast");
        });
        // mba
        $(".mba-toggle").hide("fast");
        $(".mba-btn").click(function() {
            $(".mba-toggle").toggle("fast");
        });
    });
    </script>
</body>

</html>