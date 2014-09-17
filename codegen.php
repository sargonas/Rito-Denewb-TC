<?php
$conf = array('name' => $_GET['name'],
              'extra' => $_GET['id'],
              'password' => $_GET['password'],
              'report' => $_GET['report']);
$json_base64 = base64_encode(json_encode($conf, JSON_UNESCAPED_SLASHES));

$url_format = "pvpnet://lol/customgame/joinorcreate/%s/%s/%s/%s/%s";
$url = sprintf($url_format, $_GET['map'], $_GET['type'], $_GET['teamsize'], $_GET['spectators'], $json_base64);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css"> 
    <title>Denewb TCode</title>
    <style>
        pre {
            width: 400px;
            white-space: pre-wrap;
            word-break: break-all;
            word-wrap: break-word;
        }
    </style>
  </head>
  <body>
	<script src="ZeroClipboard.js"></script>
    <script src="main.js"></script>
    <center><img src="banner.jpg" alt="image description" width="500"></center>
    <p>
    <h1 class="form" align="center">Tournament code generated</h1>
    <pre class="form"><?php echo $url ?></pre>
	<button id="click-to-copy">Click to Copy</button>
  </body>
</html>
