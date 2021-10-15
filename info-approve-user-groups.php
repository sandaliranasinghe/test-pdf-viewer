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
    <link rel="stylesheet" href="./css/local-styles/info-approve-user-groups.css">

    <title>Document</title>
</head>

<body>

    <?php
    include_once "./components/nav.php";
    ?>
    <div class="info-dashboard-main-content">
        <div class="admin-dashboard-text">
            Approve User Groups
        </div>


        <div class="table-responsive">
            <div class="btn-grid-container">
                <div class="btn-container">
                    <button class="btn btn-success mr-1 mb-1" type="button">Approve</button>
                    <button class="btn btn-danger mr-1 mb-1" type="button">Reject</button>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td>1001</td>
                        </tr>
                        <tr>
                            <td>User Group Name</td>
                            <td>18/19 CS SCS2201 DSA</td>
                        </tr>
                        <tr>
                            <td>Issue Date</td>
                            <td>17/09/2021</td>
                        </tr>
                        <tr>
                            <td>Creator</td>
                            <td>Phu H. Phung</td>
                        </tr>
                        <tr>
                            <td>Contents</td>
                            <td><a href="https://www.w3schools.com/">view users</a></td>
                        </tr>
                        <tr>
                            <td>Collections</td>
                            <td>18/19 Thesis</td>
                        </tr>
                        <tr>
                            <td>View Permissions</td>
                            <td>18/19 Thesis</td>
                        </tr>
                        <tr>
                            <td>Download Permissions</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
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