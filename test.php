<?php

$cookieName = 'x-ms-routing-name';
$cookieValue = $_COOKIE['x-ms-routing-name'];
$path = '/';
$domain = '.web-ab-experiments.azurewebsites.net';
$secure = true;
$httpOnly = true;
$sameSite = 'None';

//killing the original cookie
$arr_cookie_options = array (
    'expires' => time() - 3600,
    'path' => $path,
    'domain' => $domain, // leading dot for compatibility or use subdomain
    'secure' => $secure,     // or false
    'httponly' => $httpOnly,    // or false
    'samesite' => $sameSite // None || Lax  || Strict
);
setcookie($cookieName, $cookieValue, $arr_cookie_options);
echo 'killing cookie';

//Create cookie with another time
$arr_cookie_options = array (
    'expires' => time() + 60*60*24*365,
    'path' => $path,
    'domain' => $domain, // leading dot for compatibility or use subdomain
    'secure' => $secure,     // or false
    'httponly' => $httpOnly,    // or false
    'samesite' => $sameSite // None || Lax  || Strict
);
setcookie($cookieName, $cookieValue, $arr_cookie_options);
echo 'Create cookie with another time';

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