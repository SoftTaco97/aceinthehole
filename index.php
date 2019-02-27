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
                <!-- .col-sm-10 -->
                <div class="col-sm-10 text-center card card-body">
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
    <script src="js/form.js"></script>
</body>
</html>