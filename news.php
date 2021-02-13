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
                <div class="content-left ">
                    <!-- ADD NEW CONTENT DOWN HERE -->

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
                    <div class="news-wrapper">
                        <h3 style="text-align:center;margin: 20px 0">LATEST @SCSIT</h3>
                        <!-- NEWS START   -->
                        <?php include './includes/news.php';?>
                        <!-- NEWS END -->
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