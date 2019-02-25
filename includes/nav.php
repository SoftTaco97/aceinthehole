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
                        <?php $active = 'active'; ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if($title == '') echo $active; ?>" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($title == 'Registration') echo $active; ?>" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($title == 'Events') echo $active; ?>" href="#">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($title == 'FAQs') echo $active; ?>" href="#">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($title == 'Course') echo $active; ?>" href="#">Course</a>
                        </li>
                    </ul>
                </div>
                <!-- /#navbarNav -->
                <!-- #logo -->
                <div id="logo">
                    <a href="#">Ace In the Hole</a>
                </div>
            </div>
            <!-- /.navbar-expand-lg -->
            <!-- navbar-expand-lg -->
            <div class="navbar navbar-expand-lg">
                <!-- #navbarWeather -->
                <div class="collapse navbar-collapse" id="navbarWeather">
                    <ul class="navbar-nav weather">
                        <li>
                            Day 1 Weather <i class="fas fa-sun"></i>
                        </li>
                        <li>
                            Day 2 Weather <i class="fas fa-cloud-rain"></i>
                        </li>
                        <li>
                            Day 3 Weather <i class="fas fa-wind"></i>
                        </li>
                        <li>
                            Day 4 Weather <i class="fas fa-cloud"></i>
                        </li>
                        <li>
                            Day 5 Weather <i class="fas fa-snowflake"></i>
                        </li>
                    </ul>
                </div>
                <!-- /#navbarWeather -->
            </div>
            <!-- /.navbar-expand-lg -->
        </nav>
        <!-- NAV ENDS HERE -->

