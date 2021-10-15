<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="nav">
    <div class="nav-wrapper">
        <div class="nav-logo">
            <img id="ucsc-logo" src="./../assets/nav/ucsc-logo-white.png" alt="ucsc-logo">
            <p id="logo-txt">Digital Library</p>
        </div>
        <div class="nav-links">
            <a class="nav-link" href="#">Browse</a>
            <a class="nav-link" href="#">Help</a>

            <?php

            if (!$isLoggedIn) {
                echo '<a id="sign-in-btn" class = "nav-link" href="./login.php">Sign In</a>';
                echo '<a id="sign-up-btn" class = "nav-link" href="./registration.php">Sign Up</a>';
            } else {
                echo '<a id="notification-nav-link" href="#"><i class="fas fa-bell"></i></a>';
                echo '<div class="user-profile-circle" style="background-image: url(' . "./assets/nav/profile.jpg" . ');"></div> ';
            }

            ?>

        </div>



        <div class="burger-menu-N-user-btn-container">

            <?php

            if (!$isLoggedIn) {
                echo '<a id="user-nav-link" href="./login.php"><i class="fas fa-user"></i></a>';
            } else {
                echo '<div class="user-profile-circle" style="background-image: url(' . "./assets/nav/profile.jpg" . ');"></div> ';
            }

            ?>
            <div class="burger-menu">
                <div class="cross-line"></div>
                <div class="cross-line"></div>
                <div class="cross-line"></div>
            </div>
        </div>


    </div>

    <?php if ($isLoggedIn) : ?>
        <!-- <div class="overlay"></div> -->
        <div class="profile-dropdown-menu">
            <div class="user-profile-circle-dropdown-menu" style="background-image: url('./assets/nav/profile.jpg');"></div>
            <p id="user-name">Jane Doe</p>
            <p id="user-role">Administrator</p>
            <div class="line-break"></div>


            <div class="dropdown-menu-links-container">
                <?php if ($userRole == 'admin' || $userRole == 'al' || $userRole == 'lia') : ?>
                    <a href="#">
                        <div class="dropdown-menu-link-item">
                            <i class="fas fa-user-shield"></i>
                            <p>administration</p>
                        </div>
                    </a>
                <?php endif; ?>
                <a href="#">
                    <div class="dropdown-menu-link-item">
                        <i class="fas fa-user-circle"></i>
                        <p>my profile</p>
                    </div>
                </a>
                <a href="#">
                    <div class="dropdown-menu-link-item">
                        <i class="fas fa-sliders-h"></i>
                        <p>my collections</p>
                    </div>
                </a>
                <a href="#">
                    <div class="dropdown-menu-link-item">
                        <i class="fas fa-layer-group"></i>
                        <p>Settings</p>
                    </div>
                </a>
                <a href="#">
                    <div class="dropdown-menu-link-item" id="link-sign-out">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>sign out</p>
                    </div>
                </a>
            </div>
        </div>
    <?php endif; ?>


    <div class="burger-menu-slide-panel">
        <div class="burger-menu-slide-pannel-wrapper">
            <div class="search-container">
                <input class="search-input-inside-menu" type="text">
                <button class="search-btn"><i class="fas fa-search"></i></button>
            </div>
            <div class="slide-panel-links-container">
                <a href="#" class="slide-panel-link">
                    <div class="dropdown-menu-link-item">
                        <i class="far fa-folder-open"></i>
                        <p>Browse</p>
                    </div>
                </a>
                <a href="#" class="slide-panel-link">
                    <div class="dropdown-menu-link-item">
                        <i class="fas fa-search-plus"></i>
                        <p>Advanced Search</p>
                    </div>
                </a>
                <a href="#" class="slide-panel-link">
                    <div class="dropdown-menu-link-item">
                        <i class="fas fa-bell"></i>
                        <p>Notifications</p>
                    </div>
                </a>
                <a href="#" class="slide-panel-link">
                    <div class="dropdown-menu-link-item">
                        <i class="fas fa-question-circle"></i>
                        <p>Help</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>