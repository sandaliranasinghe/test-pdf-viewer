<?php
$isLoggedIn = true;
$userRole = "admin";
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
    <link rel="stylesheet" href="./css/local-styles/admin-approvals.css">

    <title>Document</title>
</head>

<body>

    <?php
    include_once "./components/nav.php";
    ?>
    <div class="admin-dashboard-main-content">
        <div class="admin-dashboard-text">
            Approvals
        </div>
        <div class="grid-container">
            <div class="card-container">
                <div class="card box-shadow-1">
                    <div class="card-icon">
                        <div style="position: relative;">
                            <img src="assets\admin-approvals\checked.svg" alt=" approve-submission-image">
                        </div>
                    </div>
                    <div class="card-content">Approve Submissions</div>
                </div>

            </div>
            <div class="card-container">
                <div class="card box-shadow-1">
                    <div class="card-icon">
                        <img src="assets\admin-approvals\file_collection.png" alt=" approve-content-category-image">
                    </div>
                    <div class="card-content">Approve Content Collections</div>
                </div>

            </div>
            <div class="card-container">
                <div class="card box-shadow-1">
                    <div class="card-icon">
                        <img src="assets\admin-approvals\team.png" alt=" access-user-group-image">
                    </div>
                    <div class="card-content">Approve User Group</div>
                </div>

            </div>

            <div class="card-container">
                <div class="card box-shadow-1">
                    <div class="card-icon">
                        <img src="assets\admin-approvals\key.png" alt=" approve-access-image">
                    </div>
                    <div class="card-content">Approve Access</div>
                </div>

            </div>
        </div>
    </div>


    <!-- FOOTER -->

    <?php
    include_once './components/footer.php';
    ?>

    <!-- SCRIPT -->

    <script src="./javascript/nav.js"></script>

</body>

</html>