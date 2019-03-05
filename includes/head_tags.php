
    <?php 
        require_once('constants.php');

        switch ($_SERVER['REQUEST_URI']) {
        case PATH:
            $title = '';
            break;
        case PATH . 'register/':
            $title = 'Registration';
            break;
        case PATH . 'events/':
            $title = 'Events';
            break;
        case PATH . 'faq/':
            $title = 'FAQs';
            break;
        case PATH . 'about/':
            $title = 'About';
            break;
    } 
    ?>
    <meta charset="utf-8">
    <meta name="author" content="Jared Martinez">
    <meta name="description" 
    content="the Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community.">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    <!-- HTML Shiv -->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
    </script>
    <![endif]-->

    <!-- Mobile Stuff -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font -->
    
    <!-- CSS -->
    <link href="<?php echo FULL_PATH . 'css/reset.css'; ?>" rel="stylesheet">
    <link href="<?php echo FULL_PATH . 'css/helper.css'; ?>" rel="stylesheet">
    <link href="<?php echo FULL_PATH . 'css/animate.css'; ?>" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo FULL_PATH . 'css/style.css'; ?>" rel="stylesheet">

    <!-- TITLE -->
    <title><?php echo ($title != '')? $title: 'Ace In the Hole MultiSport'; ?></title>


