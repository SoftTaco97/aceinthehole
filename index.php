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
                    <h2 class="text-center animateBlock notAnimated left">About The Event</h2>
                    <p class="animateBlock notAnimated left">
                    The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation. 

                    There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!
                    </p>
                </div>
                <!-- .col-xs-10 -->
            </div>
            <!-- /.row -->

            <!-- .row -->
            <div class="row">
                <!-- .col-sm-10 -->
                <div class="col-sm-10 text-center card card-body">
                    <h2 class="text-center animateBlock notAnimated left">Contact</h2>
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
                        <small class="form-text text-muted">We'll never share your information with anyone else.</small>
                    </form>
                    <!-- /form -->
                </div>
                <!-- /.col-sm-10 -->
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