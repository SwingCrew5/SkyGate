<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start('ob_gzhandler'); else ob_start(); ?>
<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<!DOCTYPE html><!--G5Framework-->

<!--[if lt IE 7 ]> <html class="no-js lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<link rel="dns-prefetch" href="//ajax.googleapis.com/" />

<title>SkyGate｜天空之門  - SwingCrew5</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="imagetoolbar" content="no" />

<meta name="author" content="SwingCrew5" />  
<meta name="copyright" content="&copy; 2013" /> 
<meta name="description" content="This is just a door bell made by Swing Crew 5, press the button above, then you can find someone to open the door for you, if there's someone. 這是一個很單純的電鈴，也許你現在正被關在Swing Crew 5的門外，上面的按鈕就是電鈴，按下他，就會有人幫你開門。當然也得有人在家。" /> 

<meta property="og:title" content="SkyGate｜天空之門  - SwingCrew5" />
<meta property="og:description" content="This is just a door bell made by Swing Crew 5, press the button above, then you can find someone to open the door for you, if there's someone. 這是一個很單純的電鈴，也許你現在正被關在Swing Crew 5的門外，上面的按鈕就是電鈴，按下他，就會有人幫你開門。當然也得有人在家。" />
<meta property="og:type" content="website" />
<meta property="og:url" content="/<?php echo $page ?>" />
<meta property="og:image" content="_assets/icon/touch-icon-iphone4.png" />

<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1" />
<meta name="robots" content="index,follow" /> 
<meta name="robots" content="noodp" />

<link rel="author" href="humans.txt" />
<link rel="canonical" href="/<?php echo $page ?>" />

<link rel="apple-touch-icon" href="_assets/icon/touch-icon-iphone.png" />
<link rel="apple-touch-icon" sizes="72x72" href="_assets/icon/touch-icon-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="_assets/icon/touch-icon-iphone4.png" />

<link rel="icon" href="_assets/icon/favicon.png" />
<!--[if IE]><link rel="shortcut icon" href="_assets/icon/favicon.ico" /><![endif]-->
<meta name="msapplication-TileColor" content="#411c15" />
<meta name="msapplication-TileImage" content="_assets/icon/tile-icon.png" />

<link rel="stylesheet" href="_assets/css/base.css?v=1" />
<link rel="stylesheet" href="_assets/css/media.css?v=1" />

<script src="_assets/js/libs/modernizr.2.6.2-min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</head>
<body class="demo-page">
<label id="ip" class="hiddenlabel"><?php
$this_ip = $_SERVER['REMOTE_ADDR'];
$local_domain   = '192.168';
$local_ip = '1.162';
$pos = strpos($this_ip, $local_domain);
$pos_public = strpos($this_ip, $local_ip);

// The !== operator can also be used.  Using != would not work as expected
// because the position of 'a' is 0. The statement (0 != false) evaluates 
// to false.
if ($pos !== false || $pos_public !== false) {
     echo $this_ip;
} else {
     echo "Not in local";
}
?></label>
    <div id="main" role="main">

        <?php include("parts/header.php"); ?>

        <section class="content wrap-max">
            <div class="wrap cf">

                <?php include("include/demo.php"); ?>

            </div><!--end .wrap-->
        </section><!--end .content-->

        <?php include("parts/footer.php"); ?>

        <?php include("parts/modals.php"); ?>

    </div><!--end #main-->

    <script src="_assets/js/app.js"></script>

</body>
</html>