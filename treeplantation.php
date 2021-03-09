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

    .container {
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

                    <h1>Tree Plantation</h1>
                    <p>
                        There is a very well known saying "healthy minds lives within healthy body".
                        We all know fresh air not only gives us healthy lungs with healthy body but
                        also produce healthy mind too.
                    </p>
                    <p>
                        A large part of our campus is flourishing garden of more than 500 trees,
                        ornamental plants and flowers. The grounds and gardens are beautifully and
                        aesthetically kept. The maintenance is entrusted to staff that is sincere and
                        committed and a maintenance coordinator supervises their performance.
                    </p>
                    <br>

                    <div class="sl-image">
                        <div class="sl-img-col">
                            <img src="./images/Pics/Plantation.JPG" alt="CAMPUS" loading="lazy"
                                class="responsive-image" />
                        </div>
                        <div class="sl-img-col">
                            <img src="./images/Pics/Plantation2.JPG" alt="CAMPUS" loading="lazy"
                                class="responsive-image" />
                        </div>
                        <div class="sl-img-col">
                            <img src="./images/Pics/Plantation3.JPG" alt="CAMPUS" loading="lazy"
                                class="responsive-image" />
                        </div>
                        <div class="sl-img-col">
                            <img src="./images/Pics/Plantation4.JPG" alt="CAMPUS" loading="lazy"
                                class="responsive-image" />
                        </div>
                    </div>
                    <!-- OLD IMAGE CONTAINER  -->
                    <!-- <div class="container">
                        <div class="grid">
                            <div class="cell">
                                <img src="./images/Pics/Plantation.JPG" alt="CAMPUS" loading="lazy" class="responsive-image" />
                            </div>
                            <div class="cell">
                            </div>
                            <div class="cell">
                            </div>
                            <div class="cell">
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="sidebar content-right">
                    <div class="sidebar-content" id="sidebar">

                        <ul>

                            <a href="./wificampus.php">
                                <li><span>🔗</span> Wifi Campus</li>
                            </a>
                            <a href="./nss.php">
                                <li><span>🔗</span>NSS</li>
                            </a>
                            <a href="./learnbyearnscheme.php">
                                <li><span>🔗</span>Learn by Earn Scheme</li>
                            </a>
                            <a href="./remedialclasses.php">
                                <li><span>🔗</span>Remedial Classes </li>
                            </a>
                            <a href="./languagelab.php">
                                <li><span>🔗</span>Language Lab </li>
                            </a>
                          
                            <a href="./samarpan.php">
                                <li><span>🔗</span>SAMARPAN </li>
                            </a>
                            <a href="./bloodbonation.php">
                                <li><span>🔗</span>Blood Donation Camp </li>
                            </a>
                            <a href="./sports.php">
                                <li><span>🔗</span>Sports</li>
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