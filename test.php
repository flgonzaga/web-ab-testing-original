<?php

if (isset($_COOKIE['x-ms-routing-name']))
{
    $current_cookie_value = $_COOKIE['x-ms-routing-name'];
    setcookie("x-ms-routing-name", $current_cookie_value, strtotime( '+365 days' ), "/", "." . $_SERVER['SERVER_NAME'], false, false);
    setcookie("x-ms-routing-name-test", $current_cookie_value, strtotime( '+365 days' ), "/", "." . $_SERVER['SERVER_NAME'], false, false);
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Original</title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7NYMGM621S"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){window.dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-7NYMGM621S');
    </script>
</head>
<body>
    <!-- Content -->
    <script>
        gtag('event', 'experiment_impression', {
            'experiment_id': 'hA8zNR0GTFGIxr2jWnU1UA',
            'variant_id': 'hA8zNR0GTFGIxr2jWnU1UA.0',
            'sent_to': 'G-7NYMGM621S',
        });
    </script>
    <style>
        body {
            background-color: #f6f8fa;
            color: #24292f;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        a {
            color: #fd8c73;
        }
    </style>
    <h1>Hello World</h1>
    <p>Original version has been loaded.</p>
    <a href="page.html">Go to page</a>
</body>
</html>