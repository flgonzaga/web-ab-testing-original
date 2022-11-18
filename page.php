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
    <title>Page 1 - Original</title>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GTM-KGNTHNK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){window.dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'GTM-KGNTHNK');
</script>
<body>
    <!-- Content -->
    <script>
        gtag('event', 'experiment_impression', {​
        'experiment_id': '$experimentId',
        'variant_id': '$experimentId.$variantid',
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
    <h1>Page 1</h1>
    <p>Original version has been loaded.</p>
    <a href="/">Back to Home Page</a>
</body>
</html>