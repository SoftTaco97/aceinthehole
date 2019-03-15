<!DOCTYPE html>
<html>

<head>
    <?php include_once('includes/head_tags.php'); ?>
</head>

<body>
    <?php include_once('includes/header.php'); ?>
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
                        <h2 class="display-4 animateBlock notAnimated left">404 Page Not Found</h2>
                        <p class="lead animateBlock notAnimated left">Oops! Can't find that page.. </p><br>
                        <p class="lead animateBlock notAnimated left float-sm-left">
                            <a class="btn btn-primary btn-lg" href="<?php echo FULL_PATH ; ?>" role="button">Home</a>
                        </p>
                    </div>
                    <!-- /.jumbotron -->

                </div>
                <!-- /.col-xs-10 -->

            </div>
            <!-- /.row -->

        </section>
        <!-- .container-fluid -->

    </main>
    <!-- MAIN ENDS HERE -->

    <?php include_once('includes/footer.php'); ?>

</body>

</html>