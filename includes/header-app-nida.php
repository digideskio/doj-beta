<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php echo($documenttitle); ?></title>

    <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" href="/favicon.ico" />

    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen, projection" />
    <link href="/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="screen, projection" />
    <link href="/css/nidirect.css" rel="stylesheet" type="text/css" media="screen, projection" />
    <link href="/css/nidirect-responsive.css" rel="stylesheet" type="text/css" media="screen, projection" />
    <link href="/css/nidirect-uxm.css" rel="stylesheet" type="text/css" media="screen, projection" />
    <link href="/jquery/jquery-ui.css" rel="stylesheet" />

    <!-- Kainos Specific CSS -->
    <link href="/css/kainos-nics.css" rel="stylesheet" type="text/css" media="screen, projection" />

    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/jquery/jquery-ui.js" type="text/javascript"></script>
    <script src="/js/uxm.js" type="text/javascript"></script>

    <!-- Kainos Specific JS -->
    <script src="/js/plugins.js" type="text/javascript"></script>
    <script src="/js/kainos-nics.js" type="text/javascript"></script>

    <!-- html5 shim for ie8 and ie7 -->
    <!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->

    <script type="text/javascript">
        $(document).ready(function () {
            // remove the no-js class
            $('body').removeClass('no-js');
        });
    </script>

</head>
<body class="no-js">
    <div class="page">
        <div class="skipnav"><a href="/#skip-dest">Skip to content</a></div>

        <header>

            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">

                        <a class="brand" href="http://www.nidirect.gov.uk">
                            <img src="/images/nidirect-logo-small-2x.png" alt="n i direct government services" width="120" height="28" />
                        </a>

                        <div class="nav-collapse collapse">
                            <nav class="topnav">
                                <ul>
                                    <li><a href="#0">Identity assurance</a></li>
                                </ul>
                            </nav>
                        </div>
                     </div>
                </div>
            </div>
            <div class="branding <?php if (isset($submenu)) {
    echo "no-bottom-margin";
} ?>">
                <a href="http://www.nidirect.gov.uk">
                    <img class="nidirectlogo" src="/images/nidirect-logo-2x.png" alt="n i direct government services" width="173" height="57" /></a>
                <div class="service-name">nidirect <span>Identity assurance</span></div>
            </div>
        </header>