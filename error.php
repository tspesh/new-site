<!doctype html>
<html lang="en-US">
	<head>
        <!-- html5 fallback -->
        <!--[if lt IE 9]>
            <script src="assets/scripts/vendors/html5shiv.js" type="text/javascript"></script>
            <script src="assets/scripts/vendors/nwmatcher-1.3.4.min.js" type="text/javascript"></script>
            <script src="assets/scripts/vendors/selectivizr-1.0.2.min.js" type="text/javascript"></script>
        <![endif]-->
        <!-- end html5 fallback -->
        <!-- settings -->
        <meta content="text/html;charset=utf-8" http-equiv="content-type" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />
        <meta content="no" name="msapplication-tap-highlight" />
        <!-- end settings -->
        <!-- branding -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/styles/all.css" rel="stylesheet" type="text/css" />
        <link href="assets/media/logo-ios.png" rel="apple-touch-icon" />
        <link href="assets/media/logo-favicon.png" rel="shortcut icon" />
        <meta content="Site Name" name="application-name" />
        <meta content="#000000" name="msapplication-TileColor" />
        <meta content="assets/media/logo-windows-tiny.png" name="msapplication-square70x70logo" />
        <meta content="assets/media/logo-windows-square.png" name="msapplication-square150x150logo" />
        <meta content="assets/media/logo-windows-wide.png" name="msapplication-wide310x150logo" />
        <meta content="assets/media/logo-windows-large.png" name="msapplication-square310x310logo" />
        <meta content="frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=http://www.example.com/feed/&id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=http://www.example.com/feed/&id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed=http://www.example.com/feed/&id=3;polling-uri4=http://notifications.buildmypinnedsite.com/?feed=http://www.example.com/feed/&id=4;polling-uri5=http://notifications.buildmypinnedsite.com/?feed=http://www.example.com/feed/&id=5; cycle=1" name="msapplication-notification" />
        <!-- end branding -->
        <!-- SEO -->
        <meta content="156 characters with spaces" name="description" />
        <title>Error | Site Name</title>
        <!-- end SEO -->
	</head>
	<body>
        <section id="pageWrapper">
            <section id="headerWrapper">
                <header>
                </header>
            </section><!--/#headerWrapper-->
            <section id="navWrapper">
                <nav>
                    <button class="menu">Menu</button>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li class="menu-item-has-children">
                            <a aria-haspopup="true" href="#">Portfolio</a>
                            <ul class="sub-menu">
                                <li><a href="#">Sub link</a></li>
                                <li><a href="#">Sub link</a></li>
                                <li class="menu-item-has-children">
                                    <a aria-haspopup="true" href="#">Sub link</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Sub Sub link</a></li>
                                        <li><a href="#">Sub Sub link</a></li>
                                        <li><a href="#">Sub Sub link</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a aria-haspopup="true" href="#">Sub link</a>
                                    <ul class="sub-menu">
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
            </section><!--/#navWrapper-->
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
        <section id="mobileNavWrapper">
            <section id="mobileNav">
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">Portfolio</a>
                            <button>More</button>
                            <ul class="sub-menu">
                                <li><a href="#">Sub link</a></li>
                                <li><a href="#">Sub link</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Sub link</a>
                                    <button>More</button>
                                    <ul class="sub-menu">
                                        <li><a href="#">Sub Sub link</a></li>
                                        <li><a href="#">Sub Sub link</a></li>
                                        <li><a href="#">Sub Sub link</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Sub link</a>
                                    <button>More</button>
                                    <ul class="sub-menu">
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
        <script src="assets/scripts/vendors/jquery.min.js" type="text/javascript"></script>
        <script src="assets/scripts/all.js" type="text/javascript"></script>
        <script type="text/javascript">if (navigator.userAgent.match(/(iPad|iPhone|iPod)/g)) {new ScrollFix(document.getElementById("mobileNavWrapper"))};</script>
        <script type="text/javascript">var snapper = new Snap({element: document.getElementById("pageWrapper"),disable: "left",hyperextensible: false,minPosition: -240,transitionSpeed: 0.15,});</script>
	</body>
</html>
