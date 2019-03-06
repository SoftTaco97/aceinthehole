<!DOCTYPE html>
<html>
<head>
    <?php include_once('includes/head_tags.php'); ?>
</head>
<body>
    <?php include_once('includes/header_home.php'); ?>

    <!-- MAIN STARTS HERE -->
    <main>

        <!-- .container-fluid -->
        <section class="container-fluid">

            <!-- .row -->
            <div class="row">

                <!-- .col-xs-10 --> 
                <div class="col-xs-10">

                    <!-- .jumbotron -->
                    <div class="jumbotron">
                        <h2 class="display-4 animateBlock notAnimated left">About the Event</h2>
                        <p class="lead animateBlock notAnimated left">The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.</p>
                        <p class="animateBlock notAnimated left">There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
                        <p class="lead animateBlock notAnimated left float-sm-left">
                            <a class="btn btn-primary btn-lg" href="<?php echo FULL_PATH . 'about/'; ?>" role="button">Learn More</a>
                        </p>
                    </div>
                    <!-- /.jumbotron -->

                </div>
                <!-- /.col-xs-10 -->

            </div>
            <!-- /.row -->

            <!-- .row -->
            <div class="row">

                <!-- .col-xs-10 --> 
                <div class="col-xs-10">

                    <!-- .jumbotron -->
                    <div class="jumbotron">
                        <h2 class="display-4 animateBlock notAnimated left text-sm-right">Events</h2>
                        <ul class="list-group animateBlock notAnimated left">
                            <li class="list-group-item">Long Course Triathlon</li>
                            <li class="list-group-item">Olympic Triathlon</li>
                            <li class="list-group-item">10K</li>
                            <li class="list-group-item">Half Marathon</li>
                            <li class="list-group-item">Sprint Triathlon</li>
                            <li class="list-group-item">Try-a-Tri</li>
                        </ul>
                        <p class="lead animateBlock notAnimated left float-sm-right">
                            <a class="btn btn-primary btn-lg" href="<?php echo FULL_PATH . 'events/'; ?>" role="button">Learn More</a>
                        </p>
                    </div>
                    <!-- /.jumbotron -->

                </div>
                <!-- /.col-xs-10 -->

            </div>
            <!-- /.row -->

            <!-- .row -->
            <div class="row">

                <!-- .col-lg-4 -->
                <div class="col-lg-4 offset-lg-1 text-center card">
                        <h2 class="display-4 text-center animateBlock notAnimated left">
                            Contact
                        </h2>

                        <!-- form -->
                        <form class="animateBlock notAnimated left" id="contactForm">
                            <div class="form-group">
                                <label for="name" class="sr-only">First and Last Name</label>
                                <input type="text" class="form-control" id="name" aria-describedby="First and Last Name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="telephone" class="sr-only">Telephone Number</label>
                                <input type="telephone" class="form-control" id="telephone" placeholder="Phone number">
                            </div>
                            <div class="form-group">
                                <label for="message" class="sr-only">Message</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Hi! We love your events..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <span class="form-text text-muted">We'll never share your information with anyone else.</span>
                        </form>
                        <!-- /form -->
                </div>
                <!-- /.col-lg-4 -->
                
                <!-- .col-lg-3 -->
                <div class="col-lg-3 fb animateBlock notAnimated left text-center card">
                    <h2 class="display-4 text-center animateBlock notAnimated left">
                        Facebook
                    </h2>
                    <!-- https://www.facebook.com/cas222cascade/ -->
                    <div class="text-center">
                        <iframe style="border: none; overflow: scroll; max-width: 100%;" 
                                allow="encrypted-media" 
                                xml="lang" 
                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcas222cascade&amp;tabs=timeline%2C%20events%2C%20messages&amp;width=340&amp;height=500&amp;span_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId"  
                                width="340"
                                height="650" 
                                frameborder="0" 
                                scrolling="no">
                        </iframe>
                    </div>
                </div>
                <!-- /.col-lg-3 -->

                <!-- .col-lg-3 -->
                <div class="col-lg-3 twit animateBlock notAnimated left text-center card">
                    <h2 class="display-4 text-center animateBlock notAnimated left">
                        Twitter
                    </h2>
                    <a class="twitter-timeline" 
                    data-width="350" 
                    data-height="650" 
                    data-theme="light" 
                    data-link-color="#E81C4F"
                    href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">
                    Tweets by pcccas222
                    </a> 
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <!-- /.col-lg-3 -->

                </div>
                <!-- /.row -->

        </section>
        <!-- /.container-fluid -->

    </main>
    <!-- MAIN ENDS HERE -->

    <?php include_once('includes/footer.php'); ?>
    <script src="<?php echo FULL_PATH . 'js/form.js'; ?>"></script>
</body>
</html>