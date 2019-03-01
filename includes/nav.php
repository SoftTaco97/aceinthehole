        <!-- NAV STARTS HERE -->
        <nav class="fixed-top">
            <!-- .navbar-expand-lg -->
            <div class="navbar navbar-expand-lg">
                <!-- .navButton -->   
                <button class="navbar-toggler navButton" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>
                <!-- /.navButton -->
                <!-- .weatherButton -->
                <button class="navbar-toggler collapsed weatherButton" type="button" data-toggle="collapse" data-target="#navbarWeather" aria-controls="navbarWeather" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-cloud-sun-rain"></span>
                </button>
                <!-- /.weatherButton -->
                <!-- #navbarNav -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?php if($title == '') echo ACTIVE; ?>" href="<?php echo FULL_PATH; ?>">
                                Home <?php if($title == '') echo '<span class="sr-only">(current)</span>'; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($title == 'Registration') echo ACTIVE; ?>" href="<?php echo FULL_PATH . 'register/'; ?>">
                                Register <?php if($title == 'Registration') echo '<span class="sr-only">(current)</span>'; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($title == 'About') echo ACTIVE; ?>" href="<?php echo FULL_PATH . 'about/'; ?>">
                                About <?php if($title == 'About') echo '<span class="sr-only">(current)</span>'; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($title == 'FAQs') echo ACTIVE; ?>" href="<?php echo FULL_PATH . 'faq/'; ?>">
                                FAQs <?php if($title == 'FAQs') echo '<span class="sr-only">(current)</span>'; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($title == 'Events') echo ACTIVE; ?>" href="<?php echo FULL_PATH . 'events/'; ?>">
                                Events <?php if($title == 'Events') echo '<span class="sr-only">(current)</span>'; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /#navbarNav -->
                <!-- #logo -->
                <div id="logo">
                    <a href="<?php echo FULL_PATH; ?>">Ace In the Hole</a>
                </div>
            </div>
            <!-- /.navbar-expand-lg -->
            <!-- navbar-expand-lg -->
            <div class="navbar navbar-expand-lg">
                <!-- #navbarWeather -->
                <div class="collapse navbar-collapse" id="navbarWeather">
                    <div class="navbar-nav weather"></div>
                </div>
                <!-- /#navbarWeather -->
            </div>
            <!-- /.navbar-expand-lg -->
        </nav>
        <!-- NAV ENDS HERE -->

