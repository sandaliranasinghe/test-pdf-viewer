<?php
$isLoggedIn = true;
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
    <link rel="stylesheet" href="./css/local-styles/profile.css">
    <link rel="stylesheet" href="./css/local-styles/user-activity-log.css">



    <title>Document</title>
</head>

<body>

    <!-- NAVIGATION BAR -->

    <?php
    include_once './components/nav.php';
    ?>

    <!-- Profile Top -->

    <div class="profile-banner">
        <div class="profile-banner-img">
        </div>
    </div>

    <div class="profile-user-info wrapper">
        <div class="user-info-container">
            <div class="user-profile-avatar" style="background-image: url(/assets/profile/profile.jpg);">

            </div>


            <div class="user-info-and-btns-container">
                <div class="user-info">
                    <div class="user-name-and-user-role">
                        <p id="user-name-id">R.A.N.S. Ranasinghe</p>
                        <p id="user-name-and-role-seperator">|</p>
                        <p id="user-role-id">Admin</p>
                    </div>

                    <p>2019csxxx@stu.ucsc.lk</p>
                </div>

                <div class="user-profile-settings-btn-container">

                    <div class="each-btn-container">
                        <a class="user-profile-settings-btn" href="/edit-profile.php">
                            <i class="fas fa-edit"></i>
                            <p>Edit Profile</p>
                        </a>
                    </div>

                    <div class="each-btn-container">
                        <a class="user-profile-settings-btn" href="#">
                            <i class="fas fa-users"></i>
                            <p>User Groups</p>
                        </a>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <div class="user-activity-log-main-content">
        <div class="profile-section-a wrapper">
            <div class="section-header">
                <p class="section-header-title">Activity Log</p>
                <!-- <a class="section-header-view-all" href="#">View All</a> -->
            </div>

            <!-- Activity Log goes here -->

            <div class="activity-log-headers-container">
                <div class="record-block-a">Date</div>
                <div class="record-block-b">Time</div>
                <div class="record-block-c">Action</div>
                <div class="record-block-d">Content</div>
            </div>

            <div class="activity-log-container">
                <div class="activity-record">
                    <div class="record-block-a">
                        <div class="record-block-title">
                            <p>Date</p>
                            <p>:</p>
                        </div>
                        <p>2021-10-01</p>
                    </div>
                    <div class="record-block-b">
                        <div class="record-block-title">
                            <p>Time</p>
                            <p>:</p>
                        </div>
                        <p>13:56:00</p>
                    </div>
                    <div class="record-block-c">
                        <div class="record-block-title">
                            <p>Action</p>
                            <p>:</p>
                        </div>
                        <p>Download</p>
                    </div>
                    <div class="record-block-d">
                        <div class="record-block-title">
                            <p>Content</p>
                            <p>:</p>
                        </div>
                        <p>Learn web design</p>
                    </div>
                </div>
                <div class="activity-record">
                    <div class="record-block-a">
                        <div class="record-block-title">
                            <p>Date</p>
                            <p>:</p>
                        </div>
                        <p>2021-10-01</p>
                    </div>
                    <div class="record-block-b">
                        <div class="record-block-title">
                            <p>Time</p>
                            <p>:</p>
                        </div>
                        <p>13:56:00</p>
                    </div>
                    <div class="record-block-c">
                        <div class="record-block-title">
                            <p>Action</p>
                            <p>:</p>
                        </div>
                        <p>Download</p>
                    </div>
                    <div class="record-block-d">
                        <div class="record-block-title">
                            <p>Content</p>
                            <p>:</p>
                        </div>
                        <p>Single Page Apps in Depth</p>
                    </div>
                </div>
                <div class="activity-record">
                    <div class="record-block-a">
                        <div class="record-block-title">
                            <p>Date</p>
                            <p>:</p>
                        </div>
                        <p>2021-10-01</p>
                    </div>
                    <div class="record-block-b">
                        <div class="record-block-title">
                            <p>Time</p>
                            <p>:</p>
                        </div>
                        <p>13:56:00</p>
                    </div>
                    <div class="record-block-c">
                        <div class="record-block-title">
                            <p>Action</p>
                            <p>:</p>
                        </div>
                        <p>Download</p>
                    </div>
                    <div class="record-block-d">
                        <div class="record-block-title">
                            <p>Content</p>
                            <p>:</p>
                        </div>
                        <p>Programming JavaScript Applications</p>
                    </div>
                </div>
                <div class="activity-record">
                    <div class="record-block-a">
                        <div class="record-block-title">
                            <p>Date</p>
                            <p>:</p>
                        </div>
                        <p>2021-10-01</p>
                    </div>
                    <div class="record-block-b">
                        <div class="record-block-title">
                            <p>Time</p>
                            <p>:</p>
                        </div>
                        <p>13:56:00</p>
                    </div>
                    <div class="record-block-c">
                        <div class="record-block-title">
                            <p>Action</p>
                            <p>:</p>
                        </div>
                        <p>Download</p>
                    </div>
                    <div class="record-block-d">
                        <div class="record-block-title">
                            <p>Content</p>
                            <p>:</p>
                        </div>
                        <p>Building Front-End Web Apps with Plain JavaScript</p>
                    </div>
                </div>
                <div class="activity-record">
                    <div class="record-block-a">
                        <div class="record-block-title">
                            <p>Date</p>
                            <p>:</p>
                        </div>
                        <p>2021-10-01</p>
                    </div>
                    <div class="record-block-b">
                        <div class="record-block-title">
                            <p>Time</p>
                            <p>:</p>
                        </div>
                        <p>13:56:00</p>
                    </div>
                    <div class="record-block-c">
                        <div class="record-block-title">
                            <p>Action</p>
                            <p>:</p>
                        </div>
                        <p>Download</p>
                    </div>
                    <div class="record-block-d">
                        <div class="record-block-title">
                            <p>Content</p>
                            <p>:</p>
                        </div>
                        <p>Speaking JavaScript</p>
                    </div>
                </div>
                <div class="activity-record">
                    <div class="record-block-a">
                        <div class="record-block-title">
                            <p>Date</p>
                            <p>:</p>
                        </div>
                        <p>2021-10-01</p>
                    </div>
                    <div class="record-block-b">
                        <div class="record-block-title">
                            <p>Time</p>
                            <p>:</p>
                        </div>
                        <p>13:56:00</p>
                    </div>
                    <div class="record-block-c">
                        <div class="record-block-title">
                            <p>Action</p>
                            <p>:</p>
                        </div>
                        <p>Download</p>
                    </div>
                    <div class="record-block-d">
                        <div class="record-block-title">
                            <p>Content</p>
                            <p>:</p>
                        </div>
                        <p>The JavaScript Tutorial</p>
                    </div>
                </div>
                <div class="activity-record">
                    <div class="record-block-a">
                        <div class="record-block-title">
                            <p>Date</p>
                            <p>:</p>
                        </div>
                        <p>2021-10-01</p>
                    </div>
                    <div class="record-block-b">
                        <div class="record-block-title">
                            <p>Time</p>
                            <p>:</p>
                        </div>
                        <p>13:56:00</p>
                    </div>
                    <div class="record-block-c">
                        <div class="record-block-title">
                            <p>Action</p>
                            <p>:</p>
                        </div>
                        <p>Download</p>
                    </div>
                    <div class="record-block-d">
                        <div class="record-block-title">
                            <p>Content</p>
                            <p>:</p>
                        </div>
                        <p>Learning JavaScript Design Patterns</p>
                    </div>
                </div>
                <div class="activity-record">
                    <div class="record-block-a">
                        <div class="record-block-title">
                            <p>Date</p>
                            <p>:</p>
                        </div>
                        <p>2021-10-01</p>
                    </div>
                    <div class="record-block-b">
                        <div class="record-block-title">
                            <p>Time</p>
                            <p>:</p>
                        </div>
                        <p>13:56:00</p>
                    </div>
                    <div class="record-block-c">
                        <div class="record-block-title">
                            <p>Action</p>
                            <p>:</p>
                        </div>
                        <p>Download</p>
                    </div>
                    <div class="record-block-d">
                        <div class="record-block-title">
                            <p>Content</p>
                            <p>:</p>
                        </div>
                        <p>DOM Enlightenment</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- FOOTER -->

    <?php
    include_once './components/footer.php';
    ?>
    <script src="./javascript/nav.js"></script>
    <script src="./javascript/profile.js"></script>

</body>

</html>