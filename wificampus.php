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

<style>
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
                    <h1>Wi-Fi Campus</h1>
                    <p>
                        The institutions of higher learning need to gather the benefits of internet
                        revolution through integrating ICT into the learning environment. The focus is
                        to improve the quality of education and laying a good foundation at the higher
                        learning institution. The entire campus of the school is Wi-Fi enabled with a
                        high speed internet connection to allow the students to access the internet.
                        The institute has a 24X7 Wi-Fi facility in the school campus for the student
                        and faculty members to avail internet connection at any place. The coverage of
                        Wi-Fi is not only restricted to class rooms but also extends to all the wings
                        including Innovation Center, Knowledge Center, Centre plaza, Faculty wings,
                        and the surrounding of the school.
                    </p>
                    <br />
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
                    <img src="./images/Pics/Wifi campus page.jpg" alt="CAMPUS" loading="lazy">
                    <img src="./images/Pics/wifi campus page 2.jpg" alt="CAMPUS" loading="lazy">
                    <img src="./images/Pics/wifi campus 3.jpg" alt="CAMPUS" loading="lazy">
                    <img src="./images/Pics/wifi campus 4.jpg" alt="CAMPUS" loading="lazy">
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