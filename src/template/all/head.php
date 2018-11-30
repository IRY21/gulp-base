<?
session_start();

if(!empty($_GET['utm_source']))
    $_SESSION['utm_source'] = $_GET['utm_source'];
if(!empty($_GET['utm_medium']))
    $_SESSION['utm_medium'] = $_GET['utm_medium'];
if(!empty($_GET['utm_campaign']))
    $_SESSION['utm_campaign'] = $_GET['utm_campaign'];
if(!empty($_GET['utm_term']))
    $_SESSION['utm_term'] = $_GET['utm_term'];
if(!empty($_GET['utm_content']))
    $_SESSION['utm_content'] = $_GET['utm_content'];

$phone = "8 (962) 520-63-78";
?>
<!doctype html>
<html>
<head>

    <meta charset="utf-8">

    <title>Title</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="/img/favicon/favicon.ico" type="image/x-icon">

    <link rel="preload" href="/font/MuseoSansCyrl100/MuseoSansCyrl100.woff">
    <link rel="preload" href="/font/MuseoSansCyrl300/MuseoSansCyrl300.woff">
    <link rel="preload" href="/font/MuseoSansCyrl500/MuseoSansCyrl500.woff">
    <link rel="preload" href="/font/MuseoSansCyrl700/MuseoSansCyrl700.woff">
    <link rel="preload" href="/font/MuseoSansCyrl900/MuseoSansCyrl900.woff">

    <link rel="stylesheet" href="/css/libs.min.css">
    <link rel="stylesheet" href="/css/main.css">

    <script>
        (function() {
            if( "fonts" in document ) {
                // Optimization for Repeat Views
                if( sessionStorage.fontsLoadedCriticalFoftDataUri ) {
                    // only stage 2 needed here, the subset isn’t needed anymore
                    document.documentElement.className += " webfont-loaded-2";
                    return;
                }

                document.fonts.load("300 1em MuseoSansCyrl").then(function () {
                    document.documentElement.className += " webfont-loaded-1";

                    Promise.all([
                        document.fonts.load("100 1em MuseoSansCyrl"),
                        document.fonts.load("500 1em MuseoSansCyrl"),
                        document.fonts.load("700 1em MuseoSansCyrl"),
                        document.fonts.load("900 1em MuseoSansCyrl")
                    ]).then(function () {
                        
                        document.documentElement.className += " webfont-loaded-2";

                        // Optimization for Repeat Views
                        sessionStorage.fontsLoadedCriticalFoftDataUri = true;
                    });
                });
            }
        })();
    </script>
</head>
<body>
