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
        .collapsible {
          background-color: #efebeb;
          color:#1b1b1b;
          cursor: pointer;
          padding: 18px;
          width: 100%;
          border: none;
          text-align: left;
          outline: none;
          font-size: 18px;
          box-shadow: 5px 5px 20px #a29fa0
        }

        .active, .collapsible:hover {
            background-color: #134486;
          color: #ffffff;
        }

        .collapsible:after {
          content: '\002B';
          color: #1b1b1b;
          font-weight: bold;
          float: right;
          margin-left: 5px;
        }

        .active:after {
          content: "\2212";
        }

        .content {
          padding: 0 18px;
          max-height: 0;
          overflow: hidden;
          transition: max-height 0.2s ease-out;
          background-color: #f1f1f1;
        }
    </style>
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
                    <h3 style="text-align:center;margin: 20px 0">Course Scheme</h3>
                    <div class="news-wrapper">
                        <div class="all-news">

                            <!-- NEWS ITEMS ADD -->
                            <a href="./coursescheme.php">
                                <div class="news-card">
                                    <h1>Scheme Jan-May 2021 (Even Semester)</h1>
                                </div>
                            </a>

                            <!-- NEWS ITEMS ADD -->
                            <a href="assets/pdf/Course-Scheme-New-September-2020.pdf">
                                <div class="news-card">
                                    <h1>Scheme July-Dec 2020 (Odd Semester)</h1>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- <ul style="margin-left: 50px;">
                        <a href="assets/pdf/Course-Scheme-New-September-2020.pdf">
                            <li class="content-link">Scheme July-Dec 2020 (Odd Semester)</li>
                        </a>
                        <li class="content-link">Scheme Jan-May 2021 (Even Semester)</li>
                    </ul> -->

                    <button type="button" class="collapsible">Previous Year's Course Schemes</button>
                    <div class="content">
                        <ul style="margin-left: 35px;">
                            <a href="assets/pdf/Course Scheme Jul-Dec 2019.pdf">
                                <li class="content-link">Scheme July-Dec, 2019</li>
                            </a>
                            <a href="assets/pdf/Course Scheme Jan-May 2019.pdf">
                                <li class="content-link">Scheme Jan-May, 2019</li>
                            </a>
                            <a href="assets/pdf/Course Scheme Jul-Dec 2018.pdf">
                                <li class="content-link">Scheme July-Dec, 2018</li>
                            </a>
                            <a href="assets/pdf/Course Scheme Jan-May 2018.pdf">
                                <li class="content-link">Scheme Jan-May 2018</li>
                            </a>
                            <a href="assets/pdf/Course Scheme Jul-Dec 2017.pdf">
                                <li class="content-link">Scheme Jul-Dec 2017</li>
                            </a>
                            <a href="assets/pdf/Course Scheme Jan May 2017.pdf">
                                <li class="content-link">Scheme Jan-May 2017</li>
                            </a>
                        </ul>
                    </div>

                </div>

                <div class="sidebar content-right">
                    <div class="sidebar-content" id="sidebar">

                        <ul>
                            
                            <a href="./assessment.php">
                                <li><span>🔗</span>Assessment</li>
                            </a>
                            <a href="./academic_planning_committee.php">
                                <li><span>🔗</span>Academic Planning Committee</li>
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
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                } 
            });
        }
    </script>
</body>

</html>