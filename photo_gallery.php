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
    <meta name="author" content="scsit davv">
    <title>Scsit Davv</title>
    <link rel="icon" href="./images/logo.png" type="image/png" sizes="16x16">

    <!-- SCRIPTS START   -->
    <?php include './includes/scriptincludes.php';?>
    <!-- SCRIPTS END -->
    <style type="text/css" media="screen">
        .container {
            max-width: 100rem;
            margin: 0 auto;
            padding: 0 2rem 2rem;
        }

        #image-gallery .heading {
            font-family: "Montserrat", Arial, sans-serif;
            font-size: 4rem;
            font-weight: 500;
            line-height: 1.5;
            text-align: center;
            padding: 3.5rem 0;
            color: #1a1a1a;
        }

        #image-gallery .heading span {
            display: block;
        }

        #image-gallery .gallery {
            display: flex;
            flex-wrap: wrap;
            /* Compensate for excess margin on outer gallery flex items */
            margin: -1rem -1rem;
        }

        #image-gallery .gallery-item {
            /* Minimum width of 24rem and grow to fit available space */
            flex: 1 0 24rem;
            /* Margin value should be half of grid-gap value as margins on flex items don't collapse */
            margin: 1rem;
            box-shadow: 0.3rem 0.4rem 0.4rem rgba(0, 0, 0, 0.4);
            overflow: hidden;
        }

        #image-gallery .gallery-image {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 400ms ease-out;
        }

        #image-gallery .gallery-image:hover {
            transform: scale(1.15);
        }

        /*

        The following rule will only run if your browser supports CSS grid.

        Remove or comment-out the code block below to see how the browser will fall-back to flexbox styling. 

        */

        @supports (display: grid) {
            .#image-gallery gallery {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(24rem, 1fr));
                grid-gap: 2rem;
            }

            #image-gallery .gallery,
            .gallery-item {
                margin: 0;
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

                    <h1>Photo Gallery</h1>
                    <div class="container" id="image-gallery">

                        <div class="gallery">

                            <div class="gallery-item">
                                <img class="gallery-image" src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?w=500&h=500&fit=crop" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer">
                            </div>

                            <div class="gallery-item">
                                <img class="gallery-image" src="https://images.unsplash.com/photo-1515260268569-9271009adfdb?w=500&h=500&fit=crop" alt="sunset behind San Francisco city skyline">
                            </div>

                            <div class="gallery-item">
                                <img class="gallery-image" src="https://images.unsplash.com/photo-1506045412240-22980140a405?w=500&h=500&fit=crop" alt="people holding umbrellas on a busy street at night lit by street lights and illuminated signs in Tokyo, Japan">
                            </div>

                            <div class="gallery-item">
                                <img class="gallery-image" src="https://images.unsplash.com/photo-1514041181368-bca62cceffcd?w=500&h=500&fit=crop" alt="car interior from central back seat position showing driver and blurred view through windscreen of a busy road at night">
                            </div>

                            <div class="gallery-item">
                                <img class="gallery-image" src="https://images.unsplash.com/photo-1445810694374-0a94739e4a03?w=500&h=500&fit=crop" alt="back view of woman wearing a backpack and beanie waiting to cross the road on a busy street at night in New York City, USA">
                            </div>

                            <div class="gallery-item">
                                <img class="gallery-image" src="https://images.unsplash.com/photo-1486334803289-1623f249dd1e?w=500&h=500&fit=crop" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
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