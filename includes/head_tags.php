
    <?php switch ($_SERVER['REQUEST_URI']) {
        case '/cas222/':
            $title = '';
            break;
        case '/cas222/register/':
            $title = 'Registration';
            break;
        case '/cas222/events/':
            $title = 'Events';
            break;
        case '/cas222/faq/':
            $title = 'FAQs';
            break;
        case 'cas222/course/':
            $title = 'Course';
            break;
        default:
            $title = '';
    } ?>
    <meta charset="utf-8">
    <meta name="author" content="Jared">
    <meta name="description" content="Template for Ace In the Hole Multisport">

    <!-- HTML Shiv -->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
    </script>
    <![endif]-->

    <!-- Mobile Stuff -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font -->
    
    <!-- CSS -->
    <?php $path =  'http://localhost/cas222/site/'; ?>
    <link href="<?php echo $path . 'css/reset.css'; ?>" rel="stylesheet">
    <link href="<?php echo $path . 'css/helper.css'; ?>" rel="stylesheet">
    <link href="<?php echo $path . 'css/animate.css'; ?>" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $path . 'css/style.css'; ?>" rel="stylesheet">

    <!-- TITLE -->
    <title>Ace In the Hole Multisport</title>


