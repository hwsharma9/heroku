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
    <style type="text/css" media="screen">
        /* accordion-1 */
        .accordion{
          position: relative;
          box-shadow: 0px 1px 7px #DBDBDB;
        }

        .accordion .head{
          background-color: #FFFFFF;
          color: #563e6e;
          padding: 0px 30px;
          cursor: pointer;
          transition: 0.2s ease;
        }

        .accordion .arrow{
          position: absolute;
          color: #563e6e;
          right: 30px;
          top: 30px;
          font-size: 60px;
          transition: 0.25s ease;
          opacity: 0.3;
          transform: rotate(-90deg);
        }

        .accordion .head:hover .arrow{
          opacity: 1;
        }

        .accordion .head:hover, #accordion .active{
          background-color: #FFE77AFF;
        }

        .accordion .arrow-animate{
          /*transform: rotate(0deg);
          opacity: 1;*/
        }

        .accordion .content{
          background-color: #FFFFFF;
          display: none;
          padding: 20px 30px;
          color: #333333;
        }

        .accordion .content-animate{
          display: block;
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
                    <h1>Course Offered</h1>

                    <div class="accordion">
                        <div class="head">
                            <h2>Bachelor of Computer Application</h2>
                            <i class="fas fa-angle-down arrow"></i>
                        </div>
                        <div class="content">
                            <p>B.C.A [3 Yr.]/ B.C.A(Hons.) [4 Yr.] <a href="#">Click Here..</a></p>

                            <h2>Eligibility :</h2>
                            <p>12th with 50% marks and Mathematics as one of the compulsory subject</p>
                        </div>
                    </div>

                    <div class="accordion">
                        <div class="head">
                            <h2>Master of Computer Application</h2>
                            <i class="fas fa-angle-down arrow"></i>
                        </div>
                        <div class="content">
                            <p>Master of Computer Application [M.C.A](2 yr.)<br>
                                [Admission performed through Vyapam, Bhopal (M.P.)]</p>

                            <h2>Eligibility :</h2>
                            <p>To Know about eligibility <a href="#">Click Here..</a></p>
                        </div>
                    </div>

                    <div class="accordion">
                        <div class="head">
                            <h2>Master of Science (CS/IT)</h2>
                            <i class="fas fa-angle-down arrow"></i>
                        </div>
                        <div class="content">
                            <p>M.Sc.(CS/IT) [2 Yr.] <a href="#">Click Here..</a></p>

                            <h2>Eligibility :</h2>
                            <p>B. C. A./B. Sc. (Hons)/ B. Sc. (Computer Science /Electronics/Physics/Information Technology/ Electronics and Tele-communication with 50 % marks and Mathematics as one of the compulsory subject.</p>
                        </div>
                    </div>

                    <div class="accordion">
                        <div class="head">
                            <h2>Master of Business Administration(Computer Management)</h2>
                            <i class="fas fa-angle-down arrow"></i>
                        </div>
                        <div class="content">
                            <p>MBA (CM) [2 Yr.] <a href="#">Click Here..</a></p>

                            <h2>Eligibility :</h2>
                            <p>Graduate in any discipline with 50% in aggregate.</p>
                        </div>
                    </div>

                    <div class="accordion">
                        <div class="head">
                            <h2>Post Graduate Diploma in Computer Applications</h2>
                            <i class="fas fa-angle-down arrow"></i>
                        </div>
                        <div class="content">
                            <p>Post Graduate Diploma in Computer Applications (PGDCA) - [1 yr.] <a href="#">Click Here..</a></p>

                            <h2>Eligibility :</h2>
                            <p>Graduate in any discipline with 50% in aggregate.</p>
                        </div>
                    </div>

                    <div class="accordion">
                        <div class="head">
                            <h2>Master of Technology</h2>
                            <i class="fas fa-angle-down arrow"></i>
                        </div>
                        <div class="content">
                            <p>M.Tech(CS) Specialization in Computer Science [2 Yr.] <a href="#">Click Here..</a>
                            M.Tech(SE) Information Architecture & Software Engineering [2 Yr.] <a href="#">Click Here..</a>
                            M.Tech(NM) Network Management & Information Security [2 Yr.] <a href="#">Click Here..</a>
                            </p>
                        </div>
                    </div>

                    <div class="accordion">
                        <div class="head">
                            <h2>Ph.D</h2>
                            <i class="fas fa-angle-down arrow"></i>
                        </div>
                        <div class="content">
                            <p>Ph.D (Computer Science) programme in various research areas <a href="#">Click Here..</a>
                            </p>

                            <p>Doctoral Entrance Test (DET) is conducted by the University Yearly / Half Yearly for admission in PhD programme.</p>
                        </div>
                    </div>
                </div>

                <div class="sidebar content-right">
                    <div class="sidebar-content" id="sidebar">

                        <ul>
                            <a href="./">
                                <li><span>🔗</span>Admission Information Bulletin</li>
                            </a>
                            <a href="./fees.php">
                                <li><span>🔗</span>Fee Structure</li>
                            </a>
                            <a href="./howtoapply.php">
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

<script type="text/javascript">
    $('.head').click(function(){
        $(this).toggleClass('active');
        // $(this).parent().find('.arrow').toggleClass('arrow-animate');
        // $(this).parent().find('.content').slideToggle(280);
        $(this).parent().find('.content').toggleClass('content-animate');
    });
</script>
</body>

</html>