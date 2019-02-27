    
    
    <!-- FOOTER STARTS HERE -->
    <footer>
        <!-- .container-fluid -->
        <section class="container-fluid">
            <!-- .row -->
            <div class="row">
                <!-- .col -->
                <div class="col-sm-3 offset-md-1 animateBlock left notAnimated">
                    <h2 class="text-center">H2 Heading</h2>
                    <p class="text-center">
                        paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text 
                    </p>
                </div>
                <!-- /.col -->
                <!-- .col -->
                <div class="col-sm-4 text-center animateBlock left notAnimated">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-instagram"></i>
                </div>
                <!-- /.col -->
                <!-- .col -->
                <div class="col-sm-3 text-center animateBlock left notAnimated">
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
                                <a class="nav-link <?php if($title == 'Events') echo ACTIVE; ?>" href="<?php echo FULL_PATH . 'events/'; ?>">
                                    Events <?php if($title == 'Events') echo '<span class="sr-only">(current)</span>'; ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($title == 'FAQs') echo ACTIVE; ?>" href="<?php echo FULL_PATH . 'faq/'; ?>">
                                    FAQs <?php if($title == 'FAQs') echo '<span class="sr-only">(current)</span>'; ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($title == 'Course') echo ACTIVE; ?>" href="<?php echo FULL_PATH . 'course/'; ?>">
                                    Course <?php if($title == 'Course') echo '<span class="sr-only">(current)</span>'; ?>
                                </a>
                            </li>
                    </ul>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="text-center">H2 Heading <span class="year"></span></h2>
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.container-fluid -->
    </footer>
    <!-- FOOTER ENDS HERE -->

    <!-- JavaScript Links -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo FULL_PATH . 'js/animate.js'; ?>"></script>
    <script src="<?php echo FULL_PATH . 'js/weather.js'; ?>"></script>
    <script src="<?php echo FULL_PATH . 'js/script.js'; ?>"></script>
    