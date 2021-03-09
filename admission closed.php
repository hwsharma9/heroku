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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css">
    <style type="text/css">
        
        .collapsible {
          background-color: #efebeb;
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
                    <!--<h1>Courses Offered</h1>-->
                    
                    <img src="./images/Pics/admission closed.jpg" alt="admission closed.jpg" style="max-height: 500px;">
         </div>

                <div class="sidebar content-right">
                    <div class="sidebar-content" id="sidebar">

                        <ul>
                            <a href="./coursesoffered.php">
                                <li><span>🔗</span>Courses Offered</li>
                            </a>
                            <a href="./fees.php">
                                <li><span>🔗</span>Fee Structure</li>
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