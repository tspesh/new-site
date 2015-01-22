<!doctype html>
<html>
	<head>
		<meta content="text/html;charset=utf-8" http-equiv="content-type" />
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />
		<meta content="no" name="msapplication-tap-highlight" />
		<!--[if IE]>
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
		<![endif]-->
		<!-- branding -->
		<link href="css/styles.css" rel="stylesheet" type="text/css" />
		<link href="img/logo-ios.png" rel="apple-touch-icon" />
		<link href="img/logo-favicon.png" rel="shortcut icon" />
		<meta content="Site Name" name="application-name" />
		<meta content="#FFFFFF" name="msapplication-TileColor" />
		<meta content="img/logo-windows-tiny.png" name="msapplication-square70x70logo" />
		<meta content="img/logo-windows-square.png" name="msapplication-square150x150logo" />
		<meta content="img/logo-windows-wide.png" name="msapplication-wide310x150logo" />
		<meta content="img/logo-windows-large.png" name="msapplication-square310x310logo" />
		<meta content="frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=http://www.example.com/feed/&id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=http://www.example.com/feed/&id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed=http://www.example.com/feed/&id=3;polling-uri4=http://notifications.buildmypinnedsite.com/?feed=http://www.example.com/feed/&id=4;polling-uri5=http://notifications.buildmypinnedsite.com/?feed=http://www.example.com/feed/&id=5; cycle=1" name="msapplication-notification" />
		<meta content="100-200 characters with spaces" name="description" />
		<title>64-80 characters with spaces</title>
		<!-- end branding -->
	</head>
	<body>
        <section id="mobileNavWrapper">
            <section id="mobileNav">
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li>
                            <a href="http://www.example.com/">Portfolio</a>
                            <button><em>More</em></button>
                            <ul>
                                <li><a href="#">Sub link</a></li>
                                <li><a href="#">Sub link</a></li>
                                <li>
                                    <a href="http://www.example.com/">Sub link</a>
                                    <button><em>More</em></button>
                                    <ul>
                                        <li><a href="#">Sub Sub link</a></li>
                                        <li><a href="#">Sub Sub link</a></li>
                                        <li><a href="#">Sub Sub link</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="http://www.example.com/">Sub link</a>
                                    <button><em>More</em></button>
                                    <ul>
                                        <li><a href="#">Sub Sub link</a></li>
                                        <li><a href="#">Sub Sub link</a></li>
                                        <li><a href="#">Sub Sub link</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Sub link</a></li>
                                <li><a href="#">Sub link</a></li>
                                <li><a href="#">Sub link</a></li>
                                <li><a href="#">Sub link</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Resource</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </nav>
            </section><!--/#mobileNav-->
        </section><!--/#mobileNavWrapper-->
        <section id="pageWrapper">
            <section id="headerWrapper">
                <header>
                    <nav>
                        <button><em>Menu</em></button>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li>
                                <a href="http://www.example.com/">Portfolio</a>
                                <ul>
                                    <li><a href="#">Sub link</a></li>
                                    <li><a href="#">Sub link</a></li>
                                    <li>
                                        <a href="http://www.example.com/">Sub link</a>
                                        <ul>
                                            <li><a href="#">Sub Sub link</a></li>
                                            <li><a href="#">Sub Sub link</a></li>
                                            <li><a href="#">Sub Sub link</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="http://www.example.com/">Sub link</a>
                                        <ul>
                                            <li><a href="#">Sub Sub link</a></li>
                                            <li><a href="#">Sub Sub link</a></li>
                                            <li><a href="#">Sub Sub link</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sub link</a></li>
                                    <li><a href="#">Sub link</a></li>
                                    <li><a href="#">Sub link</a></li>
                                    <li><a href="#">Sub link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Resource</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </nav>
                </header>
            </section><!--/#headerWrapper-->
            <section id="mainWrapper">
                <main>
                    <section id="post">
                        <p>Sorry, it looks like something went wrong.</p>
                        <?
                        if ($_GET["error"]) {
                            echo "<p>" . $_GET["error"] . "</p>";
                        }
                        if ($_GET["extra"]) {
                            echo "<p>" . $_GET["extra"] . "</p>";
                        }
                        ?>
                    </section><!--/#post-->
                    <section id="sidebar">
                    </section><!--/#sidebar-->
                </main>
            </section><!--/#mainWrapper-->
            <section id="footerWrapper">
                <footer>
                </footer>
            </section><!--/#footerWrapper-->
        </section><!--/#pageWrapper-->
		<script src="https://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js" type="text/javascript"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.0.min.js" type="text/javascript"></script>
		<script src="js/jquery.modernizr.cssForms.js" type="text/javascript"></script>
		<script src="js/jquery.responsiveIframes.js" type="text/javascript"></script>
		<script src="js/jquery.responsiveFixes.js" type="text/javascript"></script>
		<script src="js/prefixfree.min.js" type="text/javascript"></script>
		<script src="js/scrollfix.js" type="text/javascript"></script>
		<script type="text/javascript">new ScrollFix(document.getElementById("mobileNavWrapper"));</script>
        <script type="text/javascript">
            $("#headerWrapper header nav button").click(function(e) {
                e.preventDefault();
                $("html").toggleClass("navopen");
            });
            $("#mobileNavWrapper #mobileNav nav ul li button").click(function(e) {
                e.preventDefault();
                $(this).parent().toggleClass("open");
            });
        </script>
		<!--[if lt IE 9]>
			<script src="https://s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js" type="text/javascript"></script>
			<script src="js/nwmatcher.selectivizr.js" type="text/javascript"></script>
		<![endif]-->
	</body>
</html>