<?php
$isLoggedIn = false;
$userRole = "student";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Global Styles -->
    <link rel="stylesheet" href="./css/global-styles/style.css">
    <link rel="stylesheet" href="./css/global-styles/nav.css">
    <link rel="stylesheet" href="./css/global-styles/footer.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Aces css framework -->
    <link rel="stylesheet" href="./css/aces-css-framework/style.css">

    <!-- Local Styles -->
    <link rel="stylesheet" href="./css/local-styles/content-abstract-info.css">


    <title>Document</title>
</head>

<body>

    <?php
    require_once './components/nav.php';
    ?>

    <div class="wrapper">
        <div class="content-path-display">
            <p class="content-path">Digital Libray Of University of Colombo School of Computing / Bachelor of Computer Science (BSC) / SCS individual project - Final thesis (2008) / Undergraduate collection</p>
        </div>



        <!-- Content Items -->

        <div class="info-items-container">


            <!-- Title -->

            <div class="info-item-container first-node">
                <div class="info-item-title">
                    <p>Title:</p>
                </div>
                <div class="info-item-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>



            <!-- Authors -->

            <div class="info-item-container">
                <div class="info-item-title">
                    <p>Authors:</p>
                </div>
                <div class="info-item-content">
                    <a href="#">Lorem ipsum dolor</a>
                    <span class="add-space-with-comma">, </span>
                    <a href="#">Lorem ipsum dolor</a>
                    <span class="add-space-with-comma">, </span>
                    <a href="#">Lorem ipsum dolor</a>
                    <span class="add-space-with-comma">, </span>
                    <a href="#">Lorem ipsum dolor</a>
                </div>
            </div>


            <!-- Keywords -->
            <div class="info-item-container">
                <div class="info-item-title">
                    <p>Keywords:</p>
                </div>
                <div class="info-item-content">
                    <p>lorem lorem lorem lorem</p>
                </div>
            </div>


            <!-- Issue Date -->
            <div class="info-item-container">
                <div class="info-item-title">
                    <p>Issue Date:</p>
                </div>
                <div class="info-item-content">
                    <p>2021-September-3</p>
                </div>
            </div>


            <!-- Abstract -->
            <div class="info-item-container">
                <div class="info-item-title">
                    <p>Abstract:</p>
                </div>
                <div class="info-item-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam animi placeat deleniti, adipisci, distinctio iure nemo voluptate sit, fugiat mollitia error. Esse fugiat alias in, veniam nulla nemo voluptate quaerat ipsam excepturi possimus doloribus maiores. Veniam, sapiente. Ab, perferendis modi, sapiente omnis doloremque quam recusandae ad dignissimos odit in vero!. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore repellat, sunt cum voluptatum iusto quam modi amet sequi autem voluptates nam beatae nesciunt molestiae sed, nulla necessitatibus pariatur consequatur eos praesentium non labore officia! Maxime eligendi reprehenderit perspiciatis excepturi, voluptatem nemo assumenda facilis expedita rerum tempore illo minus aspernatur dolore?</p>
                </div>
            </div>




            <!-- URI -->
            <div class="info-item-container">
                <div class="info-item-title">
                    <p>URI:</p>
                </div>
                <div class="info-item-content">
                    <a href="#">http://dl.ucsc.cmb.ac.lk/sds4564</a>
                </div>
            </div>



            <!-- Appears in Collections -->
            <div class="info-item-container last">
                <div class="info-item-title">
                    <p>Apepars in Collections:</p>
                </div>
                <div class="info-item-content">
                    <a href="#">2021</a>
                </div>
            </div>

        </div>


    </div>




    <!-- FOOTER -->

    <!-- <div class="footer section">
        <div class="wrapper">
            <div class="footer-content">
                <p>© 2021, All rights reserved by University of Colombo School of Computing <br />No: 35, Reid Avenue, Colombo 7, Sri Lanka.</p>
            </div>
        </div>
    </div> -->

    <script src="./javascript/nav.js"></script>
    <script src="./javascript/pdf-viewer.js"></script>
</body>

</html>