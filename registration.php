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
                    <form class="animateBlock notAnimated left" id="registrationForm">
                        <div class="form-group">
                            <label for="name" class="sr-only">First and Last Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="First and Last Name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="ecName" class="sr-only">Emergency Contact Name</label>
                            <input type="text" class="form-control" id="ecName" placeholder="Emergency Contact Name">
                        </div>
                        <div class="form-group">
                            <label for="telephone" class="sr-only">Emergency Contact Number</label>
                            <input type="telephone" class="form-control" id="telephone" placeholder="Emergency Contact Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="gender" class="sr-only">Gender</label>
                            <select id="gender" class="form-control">
                                <option value="Gender">Gender</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Non-binary">Non-binary</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="age" class="sr-only">Age</label>
                            <input type="number" id="age" class="form-control" placeholder="Age">
                        </div>
                        <div class="form-group">
                            <label for="satEvent" class="sr-only">Saturday Events</label>
                            <select id="satEvent" class="form-control">
                                <option value="">Choose a Saturday Event</option>
                                <option value="Long Course Triathlon - Sat. 7:00am">Long Course Triathlon - Saturday 7:00am</option>
                                <option value="10K - Sat. 7:15am">10K - Saturday 7:15am</option>
                                <option value="Half marathon - Sat. 7:15am">Half marathon - Saturday 7:15am</option>
                                <option value="Olympic Triathlon - Sat. 7:30am">Olympic Triathlon - Saturday 7:30am</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="satRegisterType" class="sr-only">Athlete or Volunteer?</label>
                            <select id="satRegisterType" class="form-control">
                                <option value="">Interested in being...</option>
                                <option value="Athlete">Athlete</option>
                                <option value="Volunteer">Volunteer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sunEvent" class="sr-only">Sunday Event</label>
                            <select id="sunEvent" class="form-control">
                                <option value="">Choose a Sunday Event</option>
                                <option value="Sprint Triathlon - Sun. 8:00am">Sprint Triathlon - Sunday 8:00am</option>
                                <option value="Try-a-Tri - Sun. 8:20am">Try-a-Tri - Sunday 8:20am</option>
                                <option value="Splash n Dash - Sun. 12:00pm">Splash n Dash - Sunday 12:00pm</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sunRegisterType" class="sr-only">Athlete or Volunteer?</label>
                            <select id="sunRegisterType" class="form-control">
                                <option value="">Interested in being...</option>
                                <option value="Athlete">Athlete</option>
                                <option value="Volunteer">Volunteer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message" class="sr-only">Special Accomdations</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Special Accomdations"></textarea>
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