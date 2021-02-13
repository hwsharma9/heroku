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
<style>
.skid {
    background-color: #f1f5fd;
    border-radius: 10px;
    padding: 3px;
    color: #343434;
}

.skid:hover {
    color: #121212;
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
                    <button type="button" class="collapsible">Bachelor of Computer Application (BCA)</button>
                    <div class="content">
                        
                        <ul style="margin-left: 20px;">
                            <a href="assets/pdf/Syllabus BCA 1st Semester.pdf"><li class="content-link">BCA I July Section A 2019</li></a>
                            <a href="assets/pdf/"><li class="content-link">BCA I July Section B 2019</li></a>
                            <a href="assets/pdf/"><li class="content-link">BCA Batch A II Semester</li></a>
                            <a href="assets/pdf/"><li class="content-link">BCA Batch B II Semester</li></a>
                            <a href="assets/pdf/"><li class="content-link">BCA III July 2019</li></a>
                            <a href="assets/pdf/"><li class="content-link">BCA IV Semester</li></a>
                            <a href="assets/pdf/"><li class="content-link">BCA V Semester</li></a>
                            <a href="assets/pdf/"><li class="content-link">BCA VI Semester</li></a>
                        </ul>
                    </div>

                    <button type="button" class="collapsible">Master of Computer Application (MCA)</button>
                    <div class="content">
                        
                        <ul style="margin-left: 20px;">
                            <a href=""><li class="content-link">MCA I Semester</li></a>
                            <a href=""><li class="content-link">MCA II Semester</li></a>
                            <a href=""><li class="content-link">MCA III Semester</li></a>
                            <a href=""><li class="content-link">MCA IV Semester</li></a>
                            <a href=""><li class="content-link">MCA V Semester</li></a>
                        </ul>
                    </div>

                    <button type="button" class="collapsible">Master of Computer Application (Integrated) / BCA (Hons.)</button>
                    <div class="content">
                        <ul style="margin-left: 20px;">
                            <a href=""><li class="content-link">MCA (Integrated) I Semester / BCA (Hons.) VII Semester</li></a>
                            <a href=""><li class="content-link">MCA (Integrated) II Semester</li></a>
                            <a href=""><li class="content-link">MCA (Integrated) III Semester</li></a>
                            <a href=""><li class="content-link">MCA (Integrated) IV Semester</li></a>
                            <a href=""><li class="content-link">MCA (Integrated) V Semester</li></a>
                            <a href=""><li class="content-link">MCA (Integrated) VI Semester</li></a>
                        </ul>
                    </div>

                    <button type="button" class="collapsible">Master of Science M.Sc. (CS/IT)</button>
                    <div class="content">
                        <ul style="margin-left: 20px;">
                            <a href=""><li class="content-link">M.Sc. (CS/IT) I Semester</li></a>
                            <a href=""><li class="content-link">M.Sc. (CS/IT) II Semester</li></a>
                            <a href=""><li class="content-link">M.Sc. (CS/IT) III Semester</li></a>
                            <a href=""><li class="content-link">M.Sc. (CS/IT) IV Semester</li></a>
                        </ul>
                    </div>

                    <button type="button" class="collapsible">Master of Business Administration MBA(CM)</button>
                    <div class="content">
                        <ul style="margin-left: 20px;">
                            <a href=""><li class="content-link">MBA (CM) I Semester</li></a>
                            <a href=""><li class="content-link">MBA (CM) II Semester</li></a>
                            <a href=""><li class="content-link">MBA (CM) III Semester</li></a>
                            <a href=""><li class="content-link">MBA (CM) IV Semester</li></a>
                        </ul>
                    </div>
                    <h4 class="" style="margin: 20px 0">For Old Curriculum <a href="./Previous_Student_kit.php"
                            class="content-link">click here </a></h4>
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

    <script>
    $(document).ready(function() {
        // bca
        $(".bca-toggle").hide("fast");
        $(".bca-btn").click(function() {
            $(".bca-toggle").toggle("fast");
        });
        // mca
        $(".mca-toggle").hide("fast");
        $(".mca-btn").click(function() {
            $(".mca-toggle").toggle("fast");
        });
        // mca2
        $(".mcaa-toggle").hide("fast");
        $(".mcaa-btn").click(function() {
            $(".mcaa-toggle").toggle("fast");
        });
        // msc
        $(".msc-toggle").hide("fast");
        $(".msc-btn").click(function() {
            $(".msc-toggle").toggle("fast");
        });
        // mba
        $(".mba-toggle").hide("fast");
        $(".mba-btn").click(function() {
            $(".mba-toggle").toggle("fast");
        });
    });
    </script>
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