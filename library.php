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
                    <h1>Library</h1>
                    <ul>
                        <li>
                            Well equipped library with a blend of text and books required for research.
                        </li><br />
                        <li>
                            Library has subscribed to online journals, which includes access to topmost
                            journals in computer science like ACM, IEEE & Elsevier.
                        </li><br />
                        <li>
                            Department has fully automated library. It has 16,053 text books & reference
                            books are available in the library, all the books of library are fully
                            bar-coded.
                        </li><br />
                        <li>
                            All the books Information are present in our library data base software.
                        </li><br />
                        <li>
                            Library provides OPAC facility for the teachers and students of the
                            department.
                        </li><br />
                        <li>
                            All the books are secured by radio frequency. Antenna installed in entry
                            gate of Library.
                        </li><br />
                    </ul>



                    <div class="sl-image">
                        <div class="sl-img-col">
                            <img src="./images/Pics/Library-1.jpg" alt="CAMPUS" loading="lazy"
                                class="responsive-image" />
                        </div>
                        <div class="sl-img-col">
                            <img src="./images/Pics/Library-2.jpg" alt="CAMPUS" loading="lazy"
                                class="responsive-image" />
                        </div>
                        <div class="sl-img-col">
                            <img src="./images/Pics/Library-3.jpg" alt="CAMPUS" loading="lazy"
                                class="responsive-image" />
                        </div>
                        <div class="sl-img-col">
                            <img src="./images/Pics/Library-4.jpg" alt="CAMPUS" loading="lazy"
                                class="responsive-image" />
                        </div>

                    </div>

                </div>

                <div class="sidebar content-right">
                    <div class="sidebar-content" id="sidebar">

                        <ul>
                            <a href="assets/pdf/Library membarship_form.pdf">
                                <li><span>🔗</span> Membership Form</li>
                            </a>
                            <a href="assets/pdf/Library book requisition form.pdf">
                                <li><span>🔗</span> Library Book(S) Requisition Form</li>
                            </a>
                            <a href="assets/pdf/Library Book Submission Notice.jpg">
                                <li><span>🔗</span> Book Submission Notice Regarding Late Fees</li>
                            </a>
                            <a href="assets/pdf/Library SC_ST_Notice.pdf">
                                <li><span>🔗</span> Notice for ST / SC Students</li>
                            </a>
                            <a href="assets/pdf/Library Rules.pdf">
                                <li><span>🔗</span> Library Rules</li>
                            </a>
                            <a href="assets/pdf/Library Membership Procedure.pdf">
                                <li><span>🔗</span> Membership Procedure</li>
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