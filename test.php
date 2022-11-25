<?php

class TestAB 
{
    public $path = '/';
    public $domain = '.web-ab-experiments.azurewebsites.net';
    public $secure = true;
    public $httpOnly = true;
    public $sameSite = 'None';

    //Set user cookie
    private function setUserCookie($cookieName, $cookieValue, $expires)
    {
        $arr_cookie_options = array (
            'expires' => $expires,
            'path' => $this->path,
            'domain' => $this->domain, // leading dot for compatibility or use subdomain
            'secure' => $this->secure,     // or false
            'httponly' => $this->httpOnly,    // or false
            'samesite' => $this->sameSite // None || Lax  || Strict
        );
        setcookie($cookieName, $cookieValue, $arr_cookie_options); 
        return true;
    }

    //kill the cookie
    public function killCookie($cookieName, $cookieValue)
    {
        $this->setUserCookie($cookieName, $cookieValue, time() - 3600);
    }

    //Keep cookie alive
    public function keepAliveCookie($cookieName, $cookieValue)
    {
        $this->setUserCookie($cookieName, $cookieValue, time() + 60*60*24*365);
        $_SESSION['renewed'] = 1;
    }

}

if (!isset($_SESSION)) { session_start(); }

if (!isset($_SESSION) && ($_SESSION['renewed'] != 1))
{
    $cookieName = 'x-ms-routing-name';
    $cookieValue = $_COOKIE['x-ms-routing-name'];

    $testAb = new TestAB();
    $testAb->killCookie($cookieName, $cookieValue);
    $testAb->keepAliveCookie($cookieName, $cookieValue);
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