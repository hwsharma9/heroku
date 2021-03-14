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
          background-color:#efebeb;
          color: #1b1b1b;
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
                    <h3 style="text-align:center;margin: 20px 0">Fees Structures </h3>
                    <div class="news-wrapper">
                        <div class="all-news">
                            <!-- NEWS ITEMS ADD -->
                            <a href="./assets/pdf/FeeStructure2020.pdf">
                                <div class="news-card">
                                    <h1>Fees Structure for Students Admitted in 2020</h1>
                                </div>
                            </a>
                            <a href="./assets/pdf/FeeStructure2019.pdf">
                                <div class="news-card"><h1>Fees Structure for Students Admitted in 2019</h1></div>
                            </a>
                            <a href="./assets/pdf/FeeStructure2018.pdf">
                                <div class="news-card"><h1>Fees Structure for Students Admitted in 2018</h1></div>
                            </a>
                        </div>
                    </div>

                    <button type="button" class="collapsible">Previous year’s Fee Structures</button>
                    <div class="content">
                        <ul style="margin-left: 35px;">
                            <a href="./assets/pdf/FeeStructure2017.pdf"><li class="content-link">Fees Structure for students admitted in 2017</li></a>
                            <a href="./assets/pdf/FeeStructure2016.pdf">
                                <li class="content-link">Fees Structure for students admitted in 2016</li>
                            </a>
                        </ul>
                    </div>

                </div>

                <div class="sidebar content-right">
                    <div class="sidebar-content" id="sidebar">

                        <ul>
                            <a href="./coursesoffered.php">
                                <li><span>🔗</span>Courses Offered</li>
                            </a>
                           <!-- <a href="./">
                                <li><span>🔗</span>Admission Information Bulletin</li>
                            </a> -->
                           <!-- <a href="./howtoapply.php">
                                <li><span>🔗</span>How to Apply</li>
                            </a> -->
                            <a href="./admission closed.php">
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
    /*$(document).ready(function() {
        $("#fees-toggle").hide("fast");
        $("#fees-btn").click(function() {
            $("#fees-toggle").toggle("fast");
        });
    });*/
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