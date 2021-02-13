<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="WEB AND ANDROID DEVELOEPR">
    <meta name="keywords" content="lishu gupta, gitman, developer, lishu">
    <meta name="author" content="scsit davv">
    <title>LISHU GUPTA</title>
    <link rel="icon" href="./images/logo.png" type="image/png" sizes="16x16">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://raw.githack.com/LishuGupta652/web-static-content/main/sty.css" />
    <style>
    .nav {
        background-color: #232323;
        color: white;
    }

    .nav * {
        color: white !important;
    }

    .dropdown-content {
        background-color: #232323;
    }

    .dropdown-content a:hover {
        background-color: #343434;
    }

    body {}

    .main-content-area {
        margin: 0;
    }

    .footer * {
        color: white;
    }

    .footer-content .ft-block li {
        color: white;
    }

    #wave>svg {
        fill: #232323;
    }

    .footer-wave {
        background-color: #232323;
        background-image: none;
        height: 0px;
    }

    .footer-background-wrapper {
        background-color: #232323;
        background-image: none;
        color: white;
    }

    .dev-content {
        width: 100%;
        background-color: #232323;
        padding: 20px 0;
        position: relative;
    }

    .dev-image {
        width: 100%;
        max-height: 500px;
        object-fit: cover;
        background-attachment: fixed;
        background-position: center;
        position: static;
        backface-visibility: hidden;
        transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
    }

    .dev-title {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        letter-spacing: 2px;
        font-size: 4rem;
        transition: .2s cubic-bezier(0.075, 0.82, 0.165, 1);
        display: inline-block;
        font-weight: 800;
        color: #454545;
        overflow: hidden;
        background: linear-gradient(to right, #fff, #fff 50%, #454545 50%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-size: 200% 100%;
        background-position: 100%;
        transition: background-position 275ms ease;

        text-shadow: 6px 6px 0px rgba(0, 0, 0, 0.2);
    }

    .dev-title:hover {
        background-position: 0 100%;

    }


    @media (max-width: 900px) {
        .dev-title {
            font-size: 3rem;
        }

        .dev-title:hover {}
    }

    @media (max-width: 700px) {
        .dev-title {
            font-size: 2rem;
        }

        .dev-title:hover {
            font-size: 2.1rem;
        }

        .dev-content {
            padding: 50px 0;
        }
    }

    @media (max-width: 500px) {
        .dev-title {
            font-size: 1.2rem;
        }

        .dev-title:hover {
            font-size: 1.2rem;
        }
    }

    @media (max-width: 700px) {
        .dev-image {
            max-height: 300px;
        }
    }

    @media (max-width: 1050px) {
        .nav-wrapper ul {
            background-color: #232323;
            flex-wrap: wrap;
        }
    }
    </style>

    <link rel="stylesheet" href="https://raw.githack.com/LishuGupta652/web-static-content/main/sty.css" />
</head>

<body>

    <div class="root">
        <!-- HEADER START   -->
        <?php include './includes/header.php';?>
        <!-- HEADER END -->

        <div class="dev-content">
            <!-- <img class="dev-image"
                src="https://firebasestorage.googleapis.com/v0/b/coding-cosmos.appspot.com/o/303B4CD4-1D21-47B7-BC7D-96990E552DBC.jpeg?alt=media&token=9026a886-dfd1-40f0-bee6-7a07100aa66e" /> -->
            <img class="dev-image"
                src="https://raw.githubusercontent.com/LishuGupta652/web-static-content/main/img.jpg" />
            <a href="https://www.gitman.ml" target="_blank">
                <h1 class="dev-title">LISHU GUPTA</h1>
            </a>
        </div>
    </div>

    <!-- FOOTER START   -->
    <?php include './includes/footer.php';?>
    <!-- FOOTER END -->
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>