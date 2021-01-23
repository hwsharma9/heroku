<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="To achieve excellent standards of quality education by keeping pace with rapidly changing technologies & create computer professionals of global standards with capabilities of accepting new challenges.">
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
                    <h1>Course Scheme</h1>
                    <ul style="margin-left: 50px;">
                        <a href="#">
                            <li class="content-link">Scheme July-Dec 2020 (Odd Semester)</li>
                        </a>
                    </ul>
                    <div class="accordion">
                        <div class="head">
                            <h2>Previous Years Course Schemes</h2>
                            <i class="fa fa-angle-down arrow"></i>
                        </div>
                        <div class="content">
                            <ul style="margin-left: 50px;">
                                <a href="#">
                                    <li class="content-link">Scheme July-Dec., 2019</li>
                                </a>
                                <a href="#">
                                    <li class="content-link">Scheme Jan-May, 2019</li>
                                </a>
                                <a href="#">
                                    <li class="content-link">Scheme July-Dec, 2018</li>
                                </a>
                                <a href="#">
                                    <li class="content-link">Scheme Jan-May 2018</li>
                                </a>
                                <a href="#">
                                    <li class="content-link">Scheme Jul-Dec 2017</li>
                                </a>
                                <a href="#">
                                    <li class="content-link">Scheme Jan-May 2017</li>
                                </a>
                                <a href="#">
                                    <li class="content-link">Scheme Jul-Dec 2016</li>
                                </a>
                                <a href="#">
                                    <li class="content-link">Scheme Jan-May 2016</li>
                                </a>
                                <a href="#">
                                    <li class="content-link">Scheme Jul-Dec 2015</li>
                                </a>
                                <a href="#">
                                    <li class="content-link">Scheme Jan-May 2015</li>
                                </a>
                                <a href="#">
                                    <li class="content-link">Scheme Jul-Dec 2014</li>
                                </a>
                                <a href="#">
                                    <li class="content-link">Scheme Jan-May 2014</li>
                                </a>
                                <a href="#">
                                    <li class="content-link">Scheme Jul-Dec 2013</li>
                                </a>
                                <a href="#">
                                    <li class="content-link">Scheme PGDCA Jul-Dec 2015-16</li>
                                </a>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="sidebar content-right">
                    <div class="sidebar-content" id="sidebar">

                        <ul>
                            <a href="./">
                                <li><span>🔗</span>Academic Calendar</li>
                            </a>
                            <a href="./assessment.php">
                                <li><span>🔗</span>Assessment</li>
                            </a>
                            <a href="./academic_planning_committee.php">
                                <li><span>🔗</span>Academic Planning Committee</li>
                            </a>
                            <a href="./EducationwithICT.php">
                                <li><span>🔗</span>Education with ICT</li>
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