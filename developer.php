<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="To achieve excellent standards of quality education by keeping pace with rapidly changing technologies & create computer professionals of global standards with capabilities of accepting new challenges.">
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
        <style>
        .content-left {
            width: 100%;
        }

        .content-left img {
            min-height: auto;
            height: 200px;

        }

        .faculty .faculty-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px 0;
        }

        .faculty-card {
            /* box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%); */
            transition: 0.3s;
            width: 262px;
            text-align: center;
            margin: 10px 50px;
        }
        </style>
        <div class="primary-container faculty">
            <div class="main-content-area" id="main-content-area">
                <div class="content-left ">
                    <!-- ADD NEW CONTENT DOWN HERE -->

                    <h1> Developers</h1>
                    <div class="faculty-grid">
                        <div class="item">
                            <div class="faculty-card">
                                <img loading="lazy" src="./images/facultyimg/deepikarai.jpg" alt="Avatar"
                                    style="width: 100%" />
                                <div class="faculty-card-container">
                                    <h4><b>Dr. Deepika Rai</b></h4>
                                   
                                    <p>Lecturer</p>
                                    <!-- <p>9977966170</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <a href="https://gitman.ml">
                                <div class="faculty-card">
                                    <img loading="lazy" src="./images/facultyimg/nonteaching/lishu.jpg" alt="Avatar"
                                        style="width: 100%" />
                                    <div class="faculty-card-container">
                                        <h4></b>Mr. Lishu Gupta</h4>
                                       
                                        <p>Student</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <div class="faculty-card">
                                <img loading="lazy" src="./images/facultyimg/nonteaching/harshwardhan.jpg" alt="Avatar"
                                    style="width: 100%" />
                                <div class="faculty-card-container">
                                    <h4><b>Mr. Harshwardhan Sharma</b></h4>
                                   
                                    <p>Student</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- <div class="sidebar content-right">
                    <div class="sidebar-content" id="sidebar">
                        </div>
                </div> -->
        </div>
    </div>


    <!-- FOOTER START   -->
    <?php include './includes/footer.php';?>
    <!-- FOOTER END -->

    </div>

</body>

</html>