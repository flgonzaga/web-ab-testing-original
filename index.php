<?php
// Sets the ID of the experiment on variants of this web page.
$experimentId = '3uvylVSkSv-aNskBLmFwRw';

// Randomly picks a variant for the user.
$variationId = 0; //rand(0, 1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Original</title>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7NYMGM621S"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){window.dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7NYMGM621S');
</script>
<body>
    <!-- Content -->
    <script>
        gtag('event', 'experiment_impression', {​
        'experiment_id': '3uvylVSkSv-aNskBLmFwRw',
        'variant_id': '3uvylVSkSv-aNskBLmFwRw.0',
        'send_to': 'GA_MEASUREMENT_ID',
        });
    </script>
    <style>
        body {
            background-color: black;
            color: white;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-top: 20%;
        }
        a {
            color:#ff1122;
        }
    </style>
    <h1>Hello World</h1>
    <p>Original version has been loaded.</p>
    <a href="page.php">Go to page</a>
</body>
</html>