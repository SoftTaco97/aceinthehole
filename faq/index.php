<!DOCTYPE html>
<html>
<head>
    <?php include_once('../includes/head_tags.php'); ?>

    <!-- jQuery UI -->
    <link href="<?php echo FULL_PATH . 'css/jquery-ui.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo FULL_PATH . 'css/jquery-ui.theme.min.css'; ?>" rel="stylesheet">
</head>
<body>
    <?php include_once('../includes/header.php'); ?>
    <!-- MAIN STARTS HERE -->
    <main>
        <!-- .container-fluid -->
        <section class="container-fluid" id="faq">
            <h3 class="display-4 text-center">What are the Rules?</h3>
            <div>
                <p class="text-center">
                    We currently adhere to the USAT Rules for Triathlon & Duathlon.  
                    Important rules include no drafting, you <strong>must</strong> wear a helmet and music is <strong>ABSOLUTELY NOT</strong> allowed during the bike for obvious safety reasons.
                </p>
            </div>
            <h3 class="display-4 text-center ">Can I use a personal music device while cycling?</h3>
            <div>
                <p class="text-center">
                    Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.
                </p>
            </div>
            <h3 class="display-4 text-center">Can I use a personal music device while running?</h3>
            <div>
                <p class="text-center">
                    During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and<br> assure athletes can hear all course marshal instructions. 
                    <br><br>
                    With that said, we also understand that many athletes rely on music to help endure the challenge of running. 
                    To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate:

                    If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. 
                    In addition, if you opt to use music, you will not be eligible for awards, points and rankings.<br>
                    So as an athlete, you have to make a choice: music or awards/points/rankings.
                    <br><br>
                    <strong>If you are using a personal music devise with two earbuds, you will be immediately disqualified.</strong><br>
                    Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.
                    <br><br>
                    We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.
                </p>
            </div>
            <h3 class="display-4 text-center">Do I need to wear a wetsuit?</h3>
            <div>
                <p class="text-center">
                No, you do not need to wear a wetsuit. <br><br>
                Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor. 
                </p>
            </div>
            <h3 class="display-4 text-center">Do I have to use a road or racing bike?</h3>
            <div>
                <p class="text-center">
                    No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars. 
                </p>
            </div>
        </section>
        <!-- /.container-fluid -->
    </main>
    <!-- MAIN ENDS HERE -->
    <!-- jQuery UI -->
    <?php include_once('../includes/footer.php'); ?>
    <script src="<?php echo FULL_PATH . '/js/jquery-ui.min.js'; ?>"></script>
    <script>
        $(function(){
            $('#faq').accordion({ 
                heightStyle: "content",
                icons: { 
                    "header": "ui-icon-triangle-1-e", 
                    "activeHeader": "ui-icon-triangle-1-s" 
                },
                animate: 500,
            });
        });
    </script>
</body>
</html>