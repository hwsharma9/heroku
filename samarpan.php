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
    <style type="text/css">
    . {
        box-sizing: border-box;
        margin: 0;
    }

    .img-container {
        margin: 0 auto;
        max-width: 1200px;
        padding: 0 1rem;
    }

    .responsive-image {
        max-width: 100%;
    }

    .cell img {
        display: block;
    }

    @media screen and (min-width: 600px) {
        .grid {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
        }

        .cell {
            width: 50%;
        }
    }

    @media screen and (min-width: 1000px) {
        .cell {
            width: calc (100%/3);
        }
    }

    .cell {
        margin: 1rem;
    }

    .cell h3 {
        text-align: center;
    }

    @media screen and (min-width: 600px) {
        .cell {
            width: calc(50% - 2rem);
        }
    }

    @media screen and (min-width: 1000px) {
        .cell {
            width: calc(50% - 2rem);
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
                    <h1>SAMARPAN</h1>
                    <p>
                        SAMARPAN is an initiative by SCSIT, DAVV Students to help those, who really
                        want our help. It is a regular activity organized by students where the
                        students collect clothes, book, stationary etc. from the students and faculty
                        of the department and then distribute them to needy people in slum areas.
                    </p>
                    <br>
                    <div class="img-container">
                        <div class="grid">
                            <div class="cell">
                                <img src="./images/Pics/Samarpan.jpg" alt="CAMPUS" loading="lazy"
                                    class="responsive-image" />
                            </div>
                            <div class="cell">
                                <img src="./images/Pics/Samarpan2.jpg" alt="CAMPUS" loading="lazy"
                                    class="responsive-image" />
                            </div>
                            <div class="cell">
                                <img src="./images/Pics/Samarpan3.jpg" alt="CAMPUS" loading="lazy"
                                    class="responsive-image" />
                            </div>
                            <div class="cell">
                                <img src="./images/Pics/Samarpan4.jpg" alt="CAMPUS" loading="lazy"
                                    class="responsive-image" />
                            </div>
                        </div>
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