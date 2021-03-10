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
    <style>
    .counsellor-flex {
        display: flex;
        justify-content: space-evenly;
    }

    @media (max-width: 600px) {
        .counsellor-flex {
            flex-direction: column;
        }
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
                    <h1>Counsellor</h1>
                    <br>
                    <div class="counsellor-flex" style="display:flex;justify-content: space-evenly;">
                        <div>
                            <h2>Dr. Shraddha Masih</h2>
                            <p><strong>Mobile : </strong>9893107558</p>
                            <p><strong>Email : </strong>shraddhadandel@yahoo.com</p>
                        </div>
                        <div>
                            <h2>Dr. Deepal Abhyankar</h2>
                            <p><strong>Mobile : </strong>9827438976</p>
                            <p><strong>Email : </strong>deepak.scsit@gmail.com</p>
                        </div>
                    </div>
                    <!-- <table id="table">
                        <tr>
                            <th>counsellor</th>
                            <th>Name</th>
                            <th>(M)</th>
                            <th>Email-id</th>
                        </tr>
                        <tr>
                            <td>Female</td>
                            <td>Dr. Shraddha Masih</td>
                            <td>98931-07558</td>
                            <td>shraddhadandel@yahoo.com</td>
                        </tr>
                        <tr>
                            <td>Male</td>
                            <td>Dr. Deepal Abhyankar</td>
                            <td>9827438976</td>
                            <td>deepak.scsit@gmail.com</td>
                        </tr>
                    </table> -->
                </div>

                <div class="sidebar content-right">
                    <div class="sidebar-content" id="sidebar">

                        <ul>
                            <a href="./syllabus.php">
                                <li><span>🔗</span>Syllabus</li>
                            </a>
                            <a href="./Lab_Manual.php">
                                <li><span>🔗</span>Lab Manual</li>
                            </a>

                            <a href="./scholarship.php">
                                <li><span>🔗</span>Scholarship</li>
                            </a>
                            <a href="https://swayam.gov.in/explorer?category=COMP_SCI_ENGG">
                                <li><span>🔗</span>Online Lectures-Swayam</li>
                            </a>
                            <a href="./onlineskilltest.php">
                                <li><span>🔗</span>Online Skill Test</li>
                            </a>
                            <a href="./studentlife.php">
                                <li><span>🔗</span>Student Life</li>
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