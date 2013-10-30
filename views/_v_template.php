<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Sitewide JS/CSS -->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
     <script src="/js/vendor/modernizr-2.6.2.min.js"></script>	

	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>
    <!-- Top for users who are logged in -->

        <?php if($user): ?>

        	<?php if(isset($head)) echo $head; ?>
        	<?php if(isset($nav)) echo $nav; ?>


    <!-- Top for users who are not logged in -->
        <?php else: ?>

        <header class="clearfix">
            <img src="/img/bleater-logo.jpg" class="logo" height="145" width="400" alt="Bleater logo"/>
        </header>
                <nav>

            <div class="main">
                <ul>	
                    <li class="hidden">No navigation because user is not logged in</li>
                </ul>
            </div>

        </nav>

        <?php endif; ?>

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>